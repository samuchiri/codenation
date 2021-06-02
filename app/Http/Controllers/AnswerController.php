<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Exam;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $this->authorize('viewAny' Answer::class);
        $questions=Question::all();
        $exams=Exam::all();
        $answers= Answer::orderBy('created_at','desc')->paginate(2);
        return view('answer.index',compact('answers','questions','exams'))
        ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create' Answer::class);
        return view('AnswerController.create', compact('exam'));
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
        
        $this->authorize('create' Answer::class);
        $input=$request->all();
        $answer=Answer::create($input);
        return redirect('/answer/'.$answer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
        $this->authorize('view' Answer::class);
        $answers=Answer::all();
        return view('answer.show', compact('answer'), compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
        $this->authorize('update' Answer::class);
        $answer=Answer::all();
        return view('AnswerController.edit',compact('answer'), compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
        $this->authorize('update' Answer::class);
        $answer=Answer::find($id);
        $input=$request->all();
        $answer->update($input);
        return redirect('answer/'.$answer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
        $this->authorize('delete' Answer::class);
        $answer->delete();
        return redirect('/answer');
    }
}
