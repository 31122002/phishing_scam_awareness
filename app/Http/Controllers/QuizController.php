<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('quiz.index', [
            'questions' => QuizQuestion::inRandomOrder()->take(10)->get(),
        ]);
    }

    public function submit(Request $request)
    {
        $answers = $request->input('answers', []);
        $questions = QuizQuestion::whereIn('id', array_keys($answers))->get()->keyBy('id');

        $score = 0;
        foreach ($answers as $id => $answer) {
            if (isset($questions[$id]) && (int) $questions[$id]->correct_option === (int) $answer) {
                $score++;
            }
        }

        $total = $questions->count();
        $percentage = $total ? round(($score / $total) * 100) : 0;

        $level = match (true) {
            $percentage >= 80 => 'Excellent Awareness',
            $percentage >= 60 => 'Good Awareness',
            $percentage >= 40 => 'Needs Improvement',
            default => 'High Awareness Risk',
        };

        return view('quiz.result', compact('score', 'total', 'percentage', 'level'));
    }
}
