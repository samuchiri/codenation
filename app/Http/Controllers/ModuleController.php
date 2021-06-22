<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Resources\ModuleResource;
use Illuminate\Support\Facades\Validator;

class ModuleController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $this->authorize('viewAny', Module::class);
        $modules=Module::all();
        return response(['modules' => ModuleResource::collection($modules), 'message' => 'Retrieved successfully']);
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
        //'course_id','title','description']
        $this->authorize('create', Module::class);
        $input=$request->all();
        $validator = Validator::make($input,[
            'course_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
                if($validator->fails()){
                    return response(['error'=>$validator->errors(), 'Validation Error']);
                }
        $module=Module::create($input);
        return response()->json($module);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
        $this->authorize('view', Module::class);
         return response()->json($module);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        //
        // $this->authorize('update', Module::class);
        $module->update($request->all());
        return response()->json($module);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
        $this->authorize('delete', Module::class);
        $module->delete();
        return response(['message'=> 'Deleted']);

    }
}
