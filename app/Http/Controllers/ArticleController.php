<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
            'article_title' => '',
            'article_type' => '',
            'article_slug' => '',
            'article_image' => '',
            'article_description' => '',
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
        return view('admin.article.index', [
            'articles' => Article::latest()->get(),
            'categories' => Category::latest()->get(),
            'profile' => Article::where('article_type', 1)->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create', [
            'categories' => Category::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $this->validateData($request);
        $validateData['user_id'] = '1';
        $validateData['article_slug'] = Str::slug(
            $request->article_title . round(microtime(true)),
            '-'
        );

        if ($request->file('article_image')) {
            $validateData['article_image'] = $request
                ->file('article_image')
                ->store('img/article');
        }

        Article::create($validateData);

        return redirect('/article?type=3')->with(
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
        $validateData = $this->validateData($request);

        if ($request->file('article_image')) {
            if ($article->article_image) {
                if (Storage::exists($article->article_image)) {
                    Storage::delete($article->article_image);
                    $validateData['article_image'] = $request
                        ->file('article_image')
                        ->store('img/article');
                }
            }
        }

        if ($request->article_type == 1) {
            $validateData['article_slug'] = 'profil-lsp';
        } else {
            $validateData['article_slug'] = Str::slug(
                $request->article_title . round(microtime(true)),
                '-'
            );
        }

        $article->update($validateData);

        return redirect('/article?type=' . $request->article_type)->with(
            'success',
            "Berhasil merubah article \"$request->article_title\"!"
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

        return redirect('/article?type=3')->with(
            'success',
            "Berhasil Menghapus article \"$article->article_title\"!"
        );
    }
}
