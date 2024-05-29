<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function validateData(Request $request)
    {
        return $data = $request->validate([
            'partner_name' => '',
            'partner_image' => '',
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.partner.index', [
            'partners' => Partner::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $this->validateData($request);

        if ($request->file('partner_image')) {
            $validateData['partner_image'] = $request
                ->file('partner_image')
                ->store('img/partner');
        }

        Partner::create($validateData);

        return redirect()
            ->route('partner.index')
            ->with(
                'success',
                "Berhasil Menambahkan Partner baru \"$request->partner_name\"!"
            );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $validateData = $this->validateData($request);

        if ($request->file('partner_image')) {
            if (Storage::exists($partner->partner_image)) {
                Storage::delete($partner->partner_image);
                $validateData['partner_image'] = $request
                    ->file('partner_image')
                    ->store('img/partner');
            }
        }

        $partner->update($validateData);

        return redirect()
            ->route('partner.index')
            ->with(
                'success',
                "Berhasil Merubah Partner \"$partner->partner_name\"!"
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        if ($partner->partner_image) {
            if (Storage::exists($partner->partner_image)) {
                Storage::delete($partner->partner_image);
            }
        }
        $partner->delete();

        return redirect()
            ->route('partner.index')
            ->with(
                'success',
                "Berhasil Menghapus Partner \"$partner->partner_name\"!"
            );
    }
}
