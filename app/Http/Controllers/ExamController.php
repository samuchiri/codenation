<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Quiz;
use App\Models\Answer;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny' Exam::class);
        $quizzes =Quiz::all();
        $answers=Answer::all();
        $exams=Exam::all();
        return view('exam.index', compact('quizzes','answers','exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create' Exam::class);
        $quiz=Quiz::all();
        $answer=Answer::all();
        return view('exam.create', compact('quiz'), compact('answer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->authorize('create' Exam::class);
        $input=$request->all();
        $exam=Exam::create($input);
        return redirect('/exam/'.$exam->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
        $this->authorize('view' Exam::class);
        $quiz=Quiz::all();
        $answer=Answer::all();
        return view('exam.show', compact('quiz','answer','exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
        $this->authorize('update' Exam::class);
        $quiz=Quiz::all();
        $answer=Answer::all();
        return view('exam.edit',compact('quiz','answer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
        $this->authorize('update' Exam::class);
        $input=$request->all();
        $exam->update($input);
        return redirect('exam/'.$exam->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
        $this->authorize('delete' Exam::class);
        $exam->delete();
        return redirect('/exam');
    }
}
