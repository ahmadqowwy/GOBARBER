<?php

namespace App\Http\Controllers;

use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function index()
    {
        $admin = Auth::user()->admin;
        
        if ($admin->role == 'admin') {
            $shops = GoBarberShop::with('owner')->get();
        } else {
            $owner = Owner::where('admin_id', $admin->admin_id)->first();
            $shops = GoBarberShop::where('owner_id', $owner ? $owner->owner_id : null)->get();
        }

        return view('pages.admin.shop.index', compact('shops'));
    }

    public function create()
    {
        $owners = Owner::all();
        return view('pages.admin.shop.create', compact('owners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'shop_name' => 'required|string|max:255',
            'location' => 'required|string',
            'description' => 'nullable|string',
            'open_time' => 'required',
            'close_time' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $admin = Auth::user()->admin;
        $owner_id = null;

        if ($admin->role == 'pengguna') {
            $owner = Owner::firstOrCreate(
                ['admin_id' => $admin->admin_id],
                [
                    'owner_name' => Auth::user()->name ?? 'Owner',
                    'email' => Auth::user()->email ?? 'noemail@example.com',
                    'phone' => Auth::user()->phone ?? '-'
                ]
            );
            $owner_id = $owner->owner_id;
        } else {
            $owner_id = $request->owner_id; 
        }

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $base64Image = base64_encode(file_get_contents($image->getRealPath()));
            $mimeType = $image->getClientMimeType();
            $photoPath = 'data:' . $mimeType . ';base64,' . $base64Image;
        }

        GoBarberShop::create([
            'owner_id' => $owner_id,
            'shop_name' => $request->shop_name,
            'location' => $request->location,
            'description' => $request->description,
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'photo' => $photoPath
        ]);

        return redirect()->route('shop.index')->with('success', 'Toko berhasil ditambahkan.');
    }

    public function edit(GoBarberShop $shop)
    {
        $admin = Auth::user()->admin;
        if ($admin->role != 'admin') {
            $owner = Owner::where('admin_id', $admin->admin_id)->first();
            if (!$owner || $shop->owner_id != $owner->owner_id) {
                return redirect()->back()->with('error', 'Unauthorized action.');
            }
        }

        $owners = Owner::all();
        return view('pages.admin.shop.edit', compact('shop', 'owners'));
    }

    public function update(Request $request, GoBarberShop $shop)
    {
        $request->validate([
            'shop_name' => 'required|string|max:255',
            'location' => 'required|string',
            'description' => 'nullable|string',
            'open_time' => 'required',
            'close_time' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $photoPath = $shop->photo;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $base64Image = base64_encode(file_get_contents($image->getRealPath()));
            $mimeType = $image->getClientMimeType();
            $photoPath = 'data:' . $mimeType . ';base64,' . $base64Image;
        }

        $admin = Auth::user()->admin;
        $owner_id = $shop->owner_id;
        if ($admin->role == 'admin') {
            $owner_id = $request->owner_id ?? $shop->owner_id;
        } else {
            $owner = Owner::where('admin_id', $admin->admin_id)->first();
            if (!$owner || $shop->owner_id != $owner->owner_id) {
                return redirect()->back()->with('error', 'Unauthorized action.');
            }
        }

        $shop->update([
            'owner_id' => $owner_id,
            'shop_name' => $request->shop_name,
            'location' => $request->location,
            'description' => $request->description,
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'photo' => $photoPath
        ]);

        return redirect()->route('shop.index')->with('success', 'Toko berhasil diupdate.');
    }

    public function destroy(GoBarberShop $shop)
    {
        $admin = Auth::user()->admin;
        if ($admin->role != 'admin') {
            $owner = Owner::where('admin_id', $admin->admin_id)->first();
            if (!$owner || $shop->owner_id != $owner->owner_id) {
                return redirect()->back()->with('error', 'Unauthorized action.');
            }
        }

        $shop->delete();
        return redirect()->route('shop.index')->with('success', 'Toko berhasil dihapus.');
    }
}