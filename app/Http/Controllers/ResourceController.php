<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Resources\ResourceResource;
use Illuminate\Support\Facades\Validator;


class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $this->authorize('viewAny',Resource::class);
        // $pages=Page::all();
        $resource= Resource::all();
        return response(['resource'=>ResourceResource::collection($resource), 'message'=>'Retrieved successfully']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $this->authorize('create',Resource::class);
        // $page=Page::all();
        // $resource=Resource::all();
        // return view('resource.create',compact('page','resource'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //page_id','type','title','description','url
        $this->authorize('create',Resource::class);
        $input=$request->all();
        $resource=Resource::create($input);
        $validator=Validator::make($input,[
            'page_id'=>'required',
            'type'=>'required',
            'title'=>'required',
            'description'=>'required',
            'url'=>'required',
        ]);
        if($validator->fails()){
            return response(['error'=>$validator->errors(), 'Validator Error']);
        }
        // return redirect('/resource/'.$resource->id);
        return response()->json($resource);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
        // $this->authorize('view',Resource::class);
        // $page=Page::all();
        // $resource=Resource::all();
        // return view('resource.show',compact('page','resource'));
        return response()->json($resource);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        //
        // $this->authorize('update',Resource::class);
        // $page=Page::all();
        // return view('resource.edit',compact('page','resource'));
        return response()->json($resource);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        //
        // $this->authorize('update',Resource::class);
        // $input=$request->all();
        // $resource->update('$input');
        // return redirect('resource/'.$resource->id);
        return response()->json($resource);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        //
        // $this->authorize('delete',Resource::class);
        // $resource->delete();
        // return redirect('/resource');
        return response(['message'=>'Deleted']);
    }
}
