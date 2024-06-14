<?php

namespace App\Http\Controllers;

use App\Models\Assesor;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use function PHPUnit\Framework\returnValueMap;

class AssesorController extends Controller
{
    /*
     * validate
     */
    protected function validateData(Request $request)
    {
        return $data = $request->validate([
            'assesor_name' => '',
            'assesor_slug' => '',
            'assesor_code' => '',
            'assesor_specialize' => '',
            'assesor_address' => '',
            'assesor_detail' => ['required'],
            'assesor_image' => '',
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.assesor.index', [
            'assesors' => Assesor::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.assesor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $this->validateData($request);
        $validateData['assesor_slug'] = Str::slug(
            $request->assesor_name . round(microtime(true)),
            '-'
        );

        if ($request->file('assesor_image')) {
            $validateData['assesor_image'] = $request
                ->file('assesor_image')
                ->store('img/assesor');
        }

        Assesor::create($validateData);

        return redirect()
            ->route('assesor.index')
            ->with(
                'success',
                "Berhasil Menambahkan assesor \"$request->assesor_name\"!"
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(Assesor $assesor)
    {
        return view('admin.assesor.show', [
            'assesor' => $assesor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assesor $assesor)
    {
        return view('admin.assesor.edit', [
            'assesor' => $assesor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assesor $assesor)
    {
        $validateData = $this->validateData($request);

        if ($request->file('assesor_image')) {
            if ($assesor->assesor_image) {
                if (Storage::exists($assesor->assesor_image)) {
                    Storage::delete($assesor->assesor_image);
                    $validateData['assesor_image'] = $request
                        ->file('assesor_image')
                        ->store('img/assesor');
                }
            }
        }

        $validateData['assesor_slug'] = Str::slug(
            $request->assesor_name . round(microtime(true)),
            '-'
        );

        $assesor->update($validateData);

        return redirect()
            ->route('assesor.index')
            ->with(
                'success',
                "Berhasil Menambahkan assesor \"$request->assesor_name\"!"
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assesor $assesor)
    {
        if ($assesor->assesor_image) {
            if (Storage::exists($assesor->assesor_image)) {
                Storage::delete($assesor->assesor_image);
            }
        }

        $assesor->delete();

        return redirect()
            ->route('assesor.index')
            ->with(
                'success',
                "Berhasil Menghapus assesor \"$assesor->assesor_name\"!"
            );
    }
}
