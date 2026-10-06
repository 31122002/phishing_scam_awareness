<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestion;
use App\Models\ScamReport;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        if (session('is_admin')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($credentials['email'] === 'admin@example.com' && $credentials['password'] === 'admin123') {
            $request->session()->regenerate();
            session(['is_admin' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid admin credentials.']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard', [
            'reports' => ScamReport::count(),
            'highRisk' => ScamReport::where('risk_level', 'High Risk')->count(),
            'questions' => QuizQuestion::count(),
        ]);
    }

    public function reports()
    {
        return view('admin.reports', ['reports' => ScamReport::latest()->get()]);
    }

    public function questions()
    {
        return view('admin.questions', ['questions' => QuizQuestion::latest()->get()]);
    }

    public function storeQuestion(Request $request)
    {
        $data = $request->validate([
            'question' => ['required', 'string'],
            'option_a' => ['required', 'string'],
            'option_b' => ['required', 'string'],
            'option_c' => ['required', 'string'],
            'option_d' => ['required', 'string'],
            'correct_option' => ['required', 'integer', 'between:1,4'],
            'explanation' => ['nullable', 'string'],
        ]);

        QuizQuestion::create($data);

        return back()->with('success', 'Question added successfully.');
    }

    public function deleteQuestion(QuizQuestion $question)
    {
        $question->delete();
        return back()->with('success', 'Question deleted.');
    }
}
