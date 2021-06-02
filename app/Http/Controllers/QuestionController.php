<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response quiz_id
     */
    public function index()
    {
        //
        $this->authorize('viewAny' Question::class);
        $questions=Question::all();
        $quizzes=Quiz::all();
        return view('question.index', compact('questions','quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create' Question::class);
        // dd('here');
         $quizzes=Quiz::all();
        return view('question.create',compact('quizzes'));
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
        $this->authorize('create' Question::class);
        $input=$request->all();
        $question=Question::create($input);
        return redirect('/questions'.$questions->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
        $this->authorize('view' Question::class);
        return view('question.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
        $this->authorize('update' Question::class);
        return view('question.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
        $this->authorize('update' Question::class);
        $input=$request->all();
        $question->update($input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
        $this->authorize('delete' Question::class);
        $question->delete();
        return redirect('/question');
    }
}
