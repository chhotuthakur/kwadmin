<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quiz.index', compact('quizzes'));
    }
    
    public function create()
    {
        return view('quiz.create');
    }
    
    public function store(Request $request)
    {
        //...
    }
    
    public function show(Quiz $quiz)
    {
        return view('quiz.show', compact('quiz'));
    }
    
    public function edit(Quiz $quiz)
    {
        return view('quiz.edit', compact('quiz'));
    }
    
    public function update(Request $request, Quiz $quiz)
    {
        //...
    }
    
    public function destroy(Quiz $quiz)
    {
        //...
    }
    public function saveQuiz(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'optionA' => 'required',
            'optionB' => 'required',
            'optionC' => 'required',
            'optionD' => 'required',
            'correctOption' => 'required',
            'note' => 'required',
        ]);
    
        $quiz = new Quiz();
        $quiz->question = $request->question;
        $quiz->optionA = $request->optionA;
        $quiz->optionB = $request->optionB;
        $quiz->optionC = $request->optionC;
        $quiz->optionD = $request->optionD;
        $quiz->correctOption = $request->correctOption;
        $quiz->note = $request->note;
        $quiz->save();
    
        return redirect()->back()->with('success', 'Quiz saved successfully.');
    }
}
