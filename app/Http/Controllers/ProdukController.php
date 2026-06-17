<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
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

        $produks = Produk::with('shop')->whereIn('shop_id', $shopIds)->get();

        return view('pages.admin.produk.index', compact('produks'));
    }

    public function create()
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        $shops = GoBarberShop::whereIn('shop_id', $shopIds)->get();

        return view('pages.admin.produk.create', compact('shops'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'shop_id' => 'required|exists:go_barber_shops,shop_id',
            'name_product' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
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

        Produk::create($data);

        return redirect()->route('manage-produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Produk $produk)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);

        if (!in_array($produk->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $shops = GoBarberShop::whereIn('shop_id', $shopIds)->get();

        return view('pages.admin.produk.edit', compact('produk', 'shops'));
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'shop_id' => 'required|exists:go_barber_shops,shop_id',
            'name_product' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);

        if (!in_array($request->shop_id, $shopIds) || !in_array($produk->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $data = $request->all();
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $base64Image = base64_encode(file_get_contents($image->getRealPath()));
            $mimeType = $image->getClientMimeType();
            $data['photo'] = 'data:' . $mimeType . ';base64,' . $base64Image;
        }

        $produk->update($data);

        return redirect()->route('manage-produk.index')->with('success', 'Produk berhasil diupdate.');
    }

    public function destroy(Produk $produk)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);

        if (!in_array($produk->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $produk->delete();
        return redirect()->route('manage-produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
