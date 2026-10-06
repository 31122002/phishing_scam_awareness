<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\QuizQuestion;
use App\Models\ScamReport;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'articles' => Article::latest()->take(4)->get(),
            'questions' => QuizQuestion::count(),
            'reports' => ScamReport::count(),
        ]);
    }
}
