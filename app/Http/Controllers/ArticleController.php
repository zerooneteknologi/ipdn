<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /*
     * validate
     */
    protected function validateData(Request $request)
    {
        return $data = $request->validate([
            'category_id' => '',
            'user_id' => '',
            'article_title' => 'max:255',
            'article_type' => '',
            'article_slug' => '',
            'article_image' => '',
            'article_file' => '',
            'article_description' => ['required'],
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('type') == 3 || request('type') == 4) {
            return view('admin.article.index', [
                'articles' => Article::with('category')
                    ->where('article_type', request('type'))
                    ->latest()
                    ->get(),
                'categories' => Category::all()->skip(1),
                'article_type' => request('type'),
            ]);
        } else {
            return view('admin.article.about', [
                'article' => Article::where(
                    'article_type',
                    request('type')
                )->first(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create', [
            'categories' => Category::all()->skip(1),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        $validatedData['article_slug'] = Str::slug(
            $request->article_title . ' ' . round(microtime(true)),
            '_'
        );

        /**
         * uplad image
         */
        if ($request->file('article_image')) {
            $validatedData['article_image'] = $request
                ->file('article_image')
                ->store('img/article');
        }

        /**
         * uplad pdf
         */
        if ($request->file('article_file')) {
            $validatedData['article_file'] = $request
                ->file('article_file')
                ->store('file/article');
        }

        Article::create($validatedData);

        return redirect('/article?type=' . $request->article_type)->with(
            'success',
            "Berhasil Menambahkan article \"$request->artcicle_title\"!"
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', [
            'article' => $article,
            'categories' => Category::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $this->validateData($request);

        if (request('type') == 3 || request('type') == 4) {
            $validatedData['article_slug'] = Str::slug(
                $request->article_title . ' ' . round(microtime(true)),
                '_'
            );
        } else {
            if (request('type') == 1) {
                $validatedData['article_slug'] = Str::slug(
                    'lembaga sertifikasi profesi',
                    '_'
                );
            } else {
                $validatedData['article_slug'] = Str::slug(
                    'struktur organisasi',
                    '_'
                );
            }
        }

        /**
         * upload image
         */
        if ($request->file('article_image')) {
            if ($article->article_image) {
                if (Storage::exists($article->article_image)) {
                    Storage::delete($article->article_image);
                }
            }
            $validatedData['article_image'] = $request
                ->file('article_image')
                ->store('img/article');
        }
        /**
         * upload pdf
         */
        if ($request->file('article_file')) {
            if ($article->article_file) {
                if (Storage::exists($article->article_file)) {
                    Storage::delete($article->article_file);
                }
            }
            $validatedData['article_file'] = $request
                ->file('article_file')
                ->store('file/article');
        }

        $article->update($validatedData);

        return redirect('/article?type=' . $request->article_type)->with(
            'success',
            "Berhasil Mengubah article \"$article->artcicle_title\"!"
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if ($article->article_image) {
            if (Storage::exists($article->article_image)) {
                Storage::delete($article->article_image);
            }
        }

        $article->delete();

        return redirect('/article?type=' . request('type'))->with(
            'success',
            "Berhasil Menghapus article \"$article->artcicle_title\"!"
        );
    }
}
