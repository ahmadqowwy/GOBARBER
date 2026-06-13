<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class ManajemenUserController extends Controller
{
    public function index()
    {
        $data = [
            'user' =>
                Admin::with('user')->get()
        ];
        return view('pages.admin.user.index', $data);
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);

        $user = User::findOrFail($admin->user_id);

        $user->delete();

        return redirect()
            ->back()
            ->with('success', 'Data user berhasil dihapus');
    }

}