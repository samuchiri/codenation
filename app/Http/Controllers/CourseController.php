<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Resources\CourseResource;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $this->authorize('viewAny', Course::class);
        $courses=Course::all();
        return response(['course'=>CourseResource::collection($courses),'message'=>'Retrieved successfully']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Course::class);
        return view('course.create');
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
        $this->authorize('create', Course::class);
        $input=$request->all();
         // ADDING IMAGE::::
        $image1=$request->file('image1');
        if(isset($image)){
            $input['image']='storage/app/'.$request->file('image1')->store('uploads');
        }
        // 
        // the image name in $input['image'] must be the same with the image name on the model
        $validator = Validator::make($input, [

            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);
                if($validator->fails()){
                    return response(['error'=> $validator->errors(), 'Validation Error']);
                }
        $course=Course::create($input);
        return redirect('/course/'.$course->id);
       

   
}
// 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        // $this->authorize('view' Course::class);
        return view('course.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        $this->authorize('update', Course::class);
        return view('course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
        $this->authorize('update', Course::class);
        $input=$request->all();
        $course->update($input);
        return redirect('course/'.$course->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $this->authorize('delete', Course::class);
        $course->delete();
        return redirect('/course');
    }
}
