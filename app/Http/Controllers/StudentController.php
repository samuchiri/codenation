<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        return response(['user' => UserResource::collection($user), 'message' => 'Retrieved successfully']);

        //  $this->authorize('viewAny', Student::class);
        // $users=User::all();
        $student =Student::all();
        return response(['student'=>StudentResource::collection($student), 'message'=>'Retrieved successfully']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'id','reg_no','user_id'
       $input = $request->all(); 
         $validator = Validator::make($input, [
               'id'=>'required',
               'reg_no'=>'required',
               'user_id'=>'required',
                ]);
         if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
         }
         $student = Student::create($input);
         return response()->json($student);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
        // $this->authorize('view', Student::class);
       return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
        // $this->authorize('update', Student::class);
        // $user=User::all();
        // return view('student.edit', compact('user'));
        return response()->json($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //
        // $this->authorize('update', Student::class);
        // $input=$request->all();
        // $student->update($input);
        // return redirect('/student'.$student->id);
        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
        // $this->authorize('delete', Student::class);
        // $student->delete();
        // return redirect('/student');
        return response(['message'=>'Deleted']);   
        }
}

