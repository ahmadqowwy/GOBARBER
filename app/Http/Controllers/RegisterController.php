<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Owner;
use App\Models\GoBarberShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    public function index()
    {
        $data = ['title' => 'Register Owner'];
        return view('base-client.register', $data);
    }
    public function registerOwner(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'owner_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'shop_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'open_time' => 'required|date_format:H:i',
            'close_time' => 'required|date_format:H:i|after:open_time',
        ]);

        try {
            DB::beginTransaction();

            // 1. Create User
            $user = User::create([
                'name' => $request->owner_name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // 2. Create Admin
            $admin = Admin::create([
                'user_id' => $user->id,
                'role' => 'pengguna',
            ]);

            // 3. Create Owner
            $owner = Owner::create([
                'owner_name' => $request->owner_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'admin_id' => $admin->admin_id,
            ]);

            // Convert image to Base64
            $photoBase64 = null;

            if ($request->hasFile('photo')) {
                $image = $request->file('photo');

                $photoBase64 = 'data:' .
                    $image->getMimeType() .
                    ';base64,' .
                    base64_encode(file_get_contents($image->getRealPath()));
            }

            // 4. Create GoBarberShop
            GoBarberShop::create([
                'owner_id' => $owner->owner_id,
                'shop_name' => $request->shop_name,
                'location' => $request->location,
                'description' => $request->description,
                'photo' => $photoBase64,
                'open_time' => $request->open_time,
                'close_time' => $request->close_time,
            ]);

            DB::commit();

            return back()->with('success', 'Registrasi berhasil! Silakan login.');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()
                ->with('error', 'Terjadi kesalahan saat registrasi: ' . $e->getMessage())
                ->withInput();
        }
    }
}