<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role; 
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $this->authorize('viewAny', User::class);
        $users = User::all();
        // helps us to pull data from the database to the interface using Eloquent ORM
        $role = Role::all();
        // helps us to pull data from the database to the interface using Eloquent ORM

        return view('user.index', compact('users','role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          // $this->authorize('create', User::class);
         $roles = Role::all();
        return view('user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $input['password']=Hash::make($input['password']);
        $user=User::create($input);
        $user->syncPermissions($request->input('permissions'));
        $validator=Validator::make($input,[
            'name'=>'required',
            'email'=>'required',
            'role_id'=>'required',
            'password'=>'required',
        ]);
                if($validator->fails()){
                    return response(['error'=>$validator->errors(), 'Validator Error']);
                }
        return redirect('/user/'.$user->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
         $permissions=Permission::all();
        return view('user.show', compact('user','permissions'));
          // $this->authorize('view', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $permissions=Permission::all();
        // we compact permissions coz when we want to edit a user, we also want to create NEW permissions
        $roles=Role::all();
        return view('user.edit', compact('user','permissions','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, User $user)
    {
        //
   
        $input=$request->all();
        if(!empty($input['password'])){
            $input['password']=Hash::make($input['password']);
        }else{
            unset($input['password']);
        }
        $user->update($input);
        $user->syncPermissions($request->input('permissions'));
        return redirect('/user/'.$user->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
