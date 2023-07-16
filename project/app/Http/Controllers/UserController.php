<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!isset(Auth::User()->id)) {
            header('Location: /auth'); die();
            // header('Location: /auth'); die();
        }

        return view('users.list', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!isset(Auth::User()->id)) {
            // return redirect()->route('index');
            header('Location: /auth'); die();
        }

        return view('users.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!isset(Auth::User()->id)) {
            header('Location: /auth'); die();
        }

        User::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'role_id'=>$request->role_id,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('gestion_users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!isset(Auth::User()->id)) {
            header('Location: /auth'); die();
        }

        return view('enquettes.etat', [
            'finds' => User::find($id),
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        if(!isset(Auth::User()->id)) {
            header('Location: /auth'); die();
        }

        return view('users.profile2');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileadmin()
    {
        if(!isset(Auth::User()->id)) {
            header('Location: /auth'); die();
        }

        return view('users.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!isset(Auth::User()->id)) {
            header('Location: /auth'); die();
        }
        
        $dem = User::find($id);
        $dem->delete();

        return redirect()->route('gestion_users.index');
    }
}
