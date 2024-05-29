<?php

namespace App\Http\Controllers;

use App\Models\Mision;
use Illuminate\Http\Request;

class MisionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mision::create([
            'mision' => $request->vision,
        ]);

        return redirect()
            ->route('vision.index')
            ->with('success', "Berhasil Menambah misi \"$request->vision\"! ");
    }

    public function update(Request $request, Mision $mision)
    {
        $mision->update([
            'mision' => $request->vision,
        ]);

        return redirect()
            ->route('vision.index')
            ->with('success', "Berhasil Mengubah misi \"$mision->mision\"! ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mision $mision)
    {
        $mision->delete();

        return redirect()
            ->route('vision.index')
            ->with('success', "Berhasil Mebghapus misi \"$mision->mision\"! ");
    }
}
