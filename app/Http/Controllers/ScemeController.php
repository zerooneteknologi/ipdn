<?php

namespace App\Http\Controllers;

use App\Models\Sceme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ScemeController extends Controller
{
    private function validateData(Request $request)
    {
        return $data = $request->validate([
            'sceme_name' => '',
            'sceme_slug' => '',
            'sceme_code' => '',
            'sceme_status' => '',
            'sceme_detail' => '',
            'sceme_image' => '',
            'sceme_file' => '',
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sceme.index', [
            'scemes' => Sceme::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sceme.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validateData($request);

        if ($request->file('sceme_file')) {
            $data['sceme_file'] = $request
                ->file('sceme_file')
                ->store('file/sceme');
        }
        if ($request->file('sceme_image')) {
            $data['sceme_image'] = $request
                ->file('sceme_image')
                ->store('img/sceme');
        }
        $data['sceme_slug'] = Str::slug(
            $request->sceme_name . round(microtime(true))
        );
        Sceme::create($data);

        return redirect()
            ->route('sceme.index')
            ->with('success', 'Berhasil Menambahkan skema baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sceme $sceme)
    {
        return view('admin.sceme.show', [
            'sceme' => $sceme,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sceme $sceme)
    {
        return view('admin.sceme.edit', [
            'sceme' => $sceme,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sceme $sceme)
    {
        $data = $this->validateData($request);

        if ($request->file('sceme_file')) {
            if ($sceme->sceme_file) {
                if (Storage::exists($sceme->sceme_file)) {
                    Storage::delete();
                    $data['sceme_file'] = $request
                        ->file('sceme_file')
                        ->store('file/sceme');
                }
            } else {
                $data['sceme_file'] = $request
                    ->file('sceme_file')
                    ->store('file/sceme');
            }
        }

        if ($request->file('sceme_image')) {
            if ($sceme->sceme_image) {
                if (Storage::exists($sceme->sceme_image)) {
                    Storage::delete();
                    $data['sceme_image'] = $request
                        ->file('sceme_image')
                        ->store('file/sceme');
                }
            } else {
                $data['sceme_image'] = $request
                    ->file('sceme_image')
                    ->store('file/sceme');
            }
        }

        $sceme->update($data);

        return redirect()
            ->route('sceme.index')
            ->with('success', 'Berhasil mengubah Skema Serifikasi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sceme $sceme)
    {
        $sceme->delete();
        return redirect()
            ->route('sceme.index')
            ->with('success', 'Berhasil Menghapus Skema Serifikasi!');
    }
}
