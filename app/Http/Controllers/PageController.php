<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Quiz;
use App\Models\Module;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny' Page::class);
        $modules=Module::all();
        $quizzes=Quiz::all();
        $pages=Page::all();
        return view('page.index',compact('modules','quizzes','pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create' Page::class);
        $modules=Module::all();
        $quizzes=Quiz::all();
        return view('page.create',compact('modules','quizzes'));
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
        $this->authorize('create' Page::class);
        $input=$request->all();
        $page=Page::create($input);
        return redirect('/page/'.$page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
        $this->authorize('view' Page::class);
        $modules=Module::all();
        $quizzes=Quiz::all();

        return view('page.show', compact('modules','quizzes','page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
        $this->authorize('update' Page::class);
        $modules=Module::all();
        $quiz=Quiz::all();
        return view('page.edit', compact('modules','quiz','page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
        $this->authorize('update' Page::class);
        $input=$request->all();
        $page->update($input);
        return redirect('page/'.$page->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
        $this->authorize('delete' Page::class);
        $page->delete();
        return redirect('/page');
    }
}
