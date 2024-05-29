<?php

namespace App\Http\Controllers;

use App\Models\Mision;
use App\Models\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.vision.index', [
            'vision' => Vision::first(),
            'misions' => Mision::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vision $vision)
    {
        $vision->update([
            'vision' => $request->vision,
        ]);

        return redirect()
            ->route('vision.index')
            ->with('success', "Berhasil Mengbah Visi \"$vision->vision\"! ");
    }
}
