<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarberController extends Controller
{
    private function getAccessibleShopIds($admin)
    {
        if ($admin->role == 'admin') {
            return GoBarberShop::pluck('shop_id')->toArray();
        } else {
            $owner = Owner::where('admin_id', $admin->admin_id)->first();
            if ($owner) {
                return GoBarberShop::where('owner_id', $owner->owner_id)->pluck('shop_id')->toArray();
            }
            return [];
        }
    }

    public function index()
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        
        $barbers = Barber::with('shop')->whereIn('shop_id', $shopIds)->get();

        return view('pages.admin.barber.index', compact('barbers'));
    }

    public function create()
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        $shops = GoBarberShop::whereIn('shop_id', $shopIds)->get();
        
        return view('pages.admin.barber.create', compact('shops'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'shop_id' => 'required|exists:go_barber_shops,shop_id',
            'barber_name' => 'required|string|max:255',
            'specialty' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);

        if (!in_array($request->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $data = $request->all();
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $base64Image = base64_encode(file_get_contents($image->getRealPath()));
            $mimeType = $image->getClientMimeType();
            $data['photo'] = 'data:' . $mimeType . ';base64,' . $base64Image;
        }

        Barber::create($data);

        return redirect()->route('barber.index')->with('success', 'Barberman berhasil ditambahkan.');
    }

    public function edit(Barber $barber)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        
        if (!in_array($barber->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $shops = GoBarberShop::whereIn('shop_id', $shopIds)->get();

        return view('pages.admin.barber.edit', compact('barber', 'shops'));
    }

    public function update(Request $request, Barber $barber)
    {
        $request->validate([
            'shop_id' => 'required|exists:go_barber_shops,shop_id',
            'barber_name' => 'required|string|max:255',
            'specialty' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);

        if (!in_array($request->shop_id, $shopIds) || !in_array($barber->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $data = $request->all();
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $base64Image = base64_encode(file_get_contents($image->getRealPath()));
            $mimeType = $image->getClientMimeType();
            $data['photo'] = 'data:' . $mimeType . ';base64,' . $base64Image;
        }

        $barber->update($data);

        return redirect()->route('barber.index')->with('success', 'Barberman berhasil diupdate.');
    }

    public function destroy(Barber $barber)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);

        if (!in_array($barber->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $barber->delete();
        return redirect()->route('barber.index')->with('success', 'Barberman berhasil dihapus.');
    }
}
