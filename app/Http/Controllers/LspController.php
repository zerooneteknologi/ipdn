<?php

namespace App\Http\Controllers;

use App\Models\Assesor;
use App\Models\Lsp;
use App\Models\Partner;
use App\Models\Sceme;
use App\Models\Article;
use App\Models\Mision;
use App\Models\Vision;
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
                ->limit(3)
                ->get(),
            'assesors' => Assesor::latest()
                ->limit(4)
                ->get(),
            'partners' => Partner::latest()->get(),
            'articles' => Article::where('article_type', 3)
                ->latest()
                ->limit(4)
                ->get(),
            'announcements' => Article::where('article_type', 4)
                ->latest()
                ->limit(3)
                ->get(),
            'profile' => Article::where('article_type', 1)->first(),
        ]);
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
            'scemes' => Sceme::search(request('search'))
                ->filter(
                    request(['sceme_sortif', 'sceme_bnsp', 'sceme_status'])
                )
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

    public function viepdf(Sceme $sceme)
    {
        // dd($sceme);
        return response()->file(public_path('storage/' . $sceme->sceme_file), [
            'conten-type' => 'aplocation/pdf',
        ]);
    }

    public function articles()
    {
        if (request('type') == 3) {
            $articles = Article::where('article_type', 3)
                ->latest()
                ->paginate(8);
        } else {
            $articles = Article::where('article_type', 4)
                ->latest()
                ->paginate(8);
        }

        return view('web.article.articles', [
            'articles' => $articles,
        ]);
    }

    public function articlesingle(Article $article)
    {
        // return $article;
        return view('web.article.single', [
            'article' => $article,
        ]);
    }

    public function mision()
    {
        return view('web.mision.mision', [
            'vision' => Vision::first(),
            'misions' => Mision::all(),
        ]);
    }
}
