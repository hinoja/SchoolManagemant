<?php

namespace App\Http\Controllers;

use App\Models\User;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class AdminController extends Controller
{
      
    public function adminTest(User $user)
    {
        
        if(!Gate::allows('access-admin',$user))
         {
             return redirect()->view('auth.login');
         }
        return view('admins.layouts.index');
    }
    /**
     * Display a listing of the resource.          
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model=User::all();
 
        return view('admins.layouts.profile',['table'=>User::all()]);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
