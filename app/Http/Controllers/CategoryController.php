<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /*
     * validate
     */
    protected function validateData(Request $request)
    {
        return $data = $request->validate([
            'category_name' => '',
            'category_slug' => '',
        ]);
    }
    /**
     * Display a listing of the resource.
     */
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
        $validateData = $this->validateData($request);
        $validateData['category_slug'] = Str::slug(
            $request->category_name . round(microtime(true)),
            '-'
        );
        Category::create($validateData);

        return redirect()
            ->route('article.index')
            ->with(
                'success',
                "Berhasil Menambahkan category \"$request->category_name\"!"
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validateData = $this->validateData($request);
        $validateData['category_slug'] = Str::slug(
            $request->category_name . round(microtime(true)),
            '-'
        );

        $category->update($validateData);

        return redirect()
            ->route('article.index')
            ->with(
                'success',
                "Berhasil mengubah kategori \"$request->category_name\"!"
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()
            ->route('article.index')
            ->with(
                'success',
                "Berhasil Menghapus Kategory \"$category->category_name\"!"
            );
    }
}
