<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Assesor;
use App\Models\Sceme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home', [
            'sceme' => Sceme::count(),
            'assesor' => Assesor::count(),
            'scemes' => Sceme::latest()
                ->limit(5)
                ->get(),
            'assesors' => Assesor::latest()
                ->limit(5)
                ->get(),
            'articles' => Article::where('article_type', 3)
                ->latest()
                ->limit(5)
                ->get(),
        ]);
    }
}
