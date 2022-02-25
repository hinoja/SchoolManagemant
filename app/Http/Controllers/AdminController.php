<?php

namespace App\Http\Controllers;

use App\Models\User;
 

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

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
 

        // $model=User::all();
        // dd(11111111111111);

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
        return view("admins.layouts.show",['item'=>User::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("Edit",['user'=>User::find($id)]);
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']           
        ]);
        $user= User::find($id);
         $filename=time().".".$request->image->extension();  
         $path=$request->image->storeAs(
             'avatars',
             $filename,
             'public'
          );

        $user->name = $request->name;
        $user->email = $request->email;
        $user->admin= $request->admin;
        $user->image= $path;
        // Storage::disk('local')->put('image',$request->image);
       // $user->image= $request->image;
        $user->save();
       

         

        return redirect() ->route('CRUD.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user=User::find($id);
        $user->delete();
        return redirect() ->route('CRUD.index');
    }
}
