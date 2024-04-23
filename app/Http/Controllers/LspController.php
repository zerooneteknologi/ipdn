<?php

namespace App\Http\Controllers;

use App\Models\Lsp;
use Illuminate\Http\Request;

class LspController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    public function registration() {
        return view('web.registration.registration');
    }
}
