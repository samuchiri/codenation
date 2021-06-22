<?php

namespace App\Http\Controllers;

use App\Models\StudentCourse;
use App\Models\Course;
use App\Models\Student;
use App\Http\Resources\StudentCourseResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentCourseController extends Controller
{
    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        return response(['user' => UserResource::collection($user), 'message' => 'Retrieved successfully']);

        $this->authorize('viewAny', StudentCourse::class);
        $courses=Course::all();
          // dd($courses);
        $students=Student::all();
        $studentcourses=StudentCourse::all();
        return response(['student'=>StudentResource::collection($student),'message'=>'Retrieved successfully']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', StudentCourse::class);
        $courses=Course::all();
        // dd('hehehee');
        $students=Student::all();
        $studentcourse=StudentCourse::all();
        return view('StudentCourse.create',compact('courses','students'));
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
        $this->authorize('create', StudentCourse::class);
        $input=$request->all();
        $StudentCourse->create($input);
        $validator=Validator::make($input,[
            'student_id'=>'required',
            'course_id'=>'required',
        ]);
            if($validator->fails()){
                return response(['error'=>$validator->errors(), 'Validator Error']);
            }
        return redirect('/StudentCourse'.$studentCourse->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function show(StudentCourse $studentCourse)
    {
        //
        $this->authorize('view', StudentCourse::class);
        $students=Student::all();
        $courses=Course::all();
        return view('StudentCourse.show',compact('courses','students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentCourse $studentCourse)
    {
        //
        $this->authorize('update', StudentCourse::class);
        $courses=Course::all();
        $students=Student::all();
        return view('StudentCourse.edit',compact('courses','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentCourse $studentCourse)
    {
        //
        $this->authorize('update', StudentCourse::class);
        $input=$request->all();
        $studentcourse->update($input);
        return redirect('/StudentCourse'.$studentcourse->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentCourse  $studentCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentCourse $studentCourse)
    {
        //
        $this->authorize('delete', StudentCourse::class);
        $studentcourse->delete();
        return redirect('/StudentCourse');
    }
}
