<?php

namespace App\Http\Controllers;

use App\Models\Assesor;
use App\Models\Lsp;
use App\Models\Sceme;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LspController extends Controller
{
    /**
     * Display a listing of the resource.
     * main view home
     */
    public function index()
    {
        return view('web.home', [
            'scemes' => Sceme::latest()
                ->limit(6)
                ->get(),
            'assesors' => Assesor::latest()
                ->limit(4)
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lsp $lsp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lsp $lsp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lsp $lsp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lsp $lsp)
    {
        //
    }

    public function registration()
    {
        return view('web.registration.registration');
    }

    /*
     * scemes public
     */
    public function scemes()
    {
        return view('web.sceme.scemes', [
            'scemes' => Sceme::latest()->paginate(8),
        ]);
    }
    /*
     * scemes search
     */
    public function search()
    {
        return view('web.sceme.search', [
            'scemes' => Sceme::active()
                ->search(request('search'))
                ->latest()
                ->paginate(8)
                ->withQueryString(),
        ]);
    }

    /*
     * single sceme view
     */
    public function scemesingle(Sceme $sceme)
    {
        return view('web.sceme.single', [
            'sceme' => $sceme,
        ]);
    }

    /**
     * view public assecors
     */
    public function assesors()
    {
        return view('web.assesor.assesors', [
            'assesors' => Assesor::latest()->paginate(9),
        ]);
    }

    public function assesorsingle(Assesor $assesor)
    {
        // return $assesor;
        return view('web.assesor.single', [
            'assesor' => $assesor,
        ]);
    }
}
