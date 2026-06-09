<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
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
        
        $services = Service::with('shop')->whereIn('shop_id', $shopIds)->get();

        return view('pages.admin.service.index', compact('services'));
    }

    public function create()
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        $shops = GoBarberShop::whereIn('shop_id', $shopIds)->get();
        
        return view('pages.admin.service.create', compact('shops'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'shop_id' => 'required|exists:go_barber_shops,shop_id',
            'service_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer', // in minutes usually
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

        Service::create($data);

        return redirect()->route('service.index')->with('success', 'Service berhasil ditambahkan.');
    }

    public function edit(Service $service)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        
        if (!in_array($service->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $shops = GoBarberShop::whereIn('shop_id', $shopIds)->get();

        return view('pages.admin.service.edit', compact('service', 'shops'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'shop_id' => 'required|exists:go_barber_shops,shop_id',
            'service_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);

        if (!in_array($request->shop_id, $shopIds) || !in_array($service->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $data = $request->all();
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $base64Image = base64_encode(file_get_contents($image->getRealPath()));
            $mimeType = $image->getClientMimeType();
            $data['photo'] = 'data:' . $mimeType . ';base64,' . $base64Image;
        }

        $service->update($data);

        return redirect()->route('service.index')->with('success', 'Service berhasil diupdate.');
    }

    public function destroy(Service $service)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);

        if (!in_array($service->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $service->delete();
        return redirect()->route('service.index')->with('success', 'Service berhasil dihapus.');
    }
}
