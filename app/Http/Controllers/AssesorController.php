<?php

namespace App\Http\Controllers;

use App\Models\Assesor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'assesor_detail' => '',
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
        Assesor::create([
            'assesor_name' => $request->assesor_name,
            'assesor_slug' =>
                Str::slug($request->assesor_name, '-') . round(microtime(true)),
            'assesor_code' => $request->assesor_code,
            'assesor_specialize' => $request->assesor_specialize,
            'assesor_address' => $request->assesor_address,
            'assesor_detail' => $request->assesor_detail,
            'assesor_image' => $request
                ->file('assesor_image')
                ->store('img/assesor'),
        ]);

        // $data = $this->validateData($request);

        // if ($request->file('assesor_image')) {
        //     $data = $request->file('assesor_image')->store('img/assesor');
        // }

        // $data['assesor_slug'] = Str::slug(
        //     $request->assesor_name . round(microtime(true))
        // );

        // Assesor::create($data);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assesor $assesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assesor $assesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assesor $assesor)
    {
        //
    }
}
