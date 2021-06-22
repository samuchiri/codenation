<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Resources\QuizResource;
use Illuminate\Support\Facades\validator;

class QuizController extends Controller
{
    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        // $this->authorize('viewAny', Quiz::class);
        $quizzes=Quiz::all();
        return response(['quizzes'=>QuizResource::collection($quizzes), 'message'=>'Retrieved successfully']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $this->authorize('create', Quiz::class);
        // $quizzes=Quiz::all();
        // return view('quiz.create',compact('quizzes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'id','title','description','duration','total_marks'];


        $this->authorize('create', Quiz::class);
        $input=$request->all();
        $quiz=Quiz::create('$input');
        $validator=Validator::make($input,[
            'title'=>'required',
            'description'=>'required',
            'duration'=>'required',
            'total_marks'=>'required',
        ]);
        if($validator->fails()){
            return response(['error'=>$validator->errors(), 'Validator Error']);
        }
        // return redirect('/quiz/'.$quiz->id);
        return response()->json($quiz);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
        // $this->authorize('view', Quiz::class);
        // return view('quiz.show');
        return response()->json($quiz);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
        // $this->authorize('update', Quiz::class);
        // return view('quiz.edit');
        return response()->json($quiz);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
        // $this->authorize('update', Quiz::class);
        // $input=$request->all();
        // $quiz->update($input);
        // return redirect('quiz/'.$quiz->id);
        return response()->json($quiz);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
        // $this->authorize('delete', Quiz::class);
        // $quiz->delete();
        // return redirect('/quiz');
        return response(['message'=>'Deleted']);
    }
}
