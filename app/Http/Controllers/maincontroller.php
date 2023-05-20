<?php

namespace App\Http\Controllers;

use App\Mail\forgotmail;
use App\Models\informations;
use App\Models\sondage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class maincontroller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$action)
    {
        if(method_exists($this,$action)){
            return $this->$action($request);
        }else{abort(404);}
    }

    function login(Request $request){
        if(Auth::attempt($request->except(['_token']))){
            return Response()->json(['user'=>Auth::user()]);
        }else{
            return Response()->json(['user'=>'nothing']);
        }
    }
    function addsondage(Request $request){
        sondage::create($request->all());
        return Response()->json(['ok'=>'yes']);
    }
    function delsondage(Request $request){
        $sondage=sondage::find($request->id);
        $sondage->delete();
        return Response()->json(['ok']);
    }
    function deluser(Request $request){
        $user=User::find($request->id);
        $user->delete();
        return Response()->json(['ok']);
    }
    function userlist(Request $request){
        $user=User::find($request->userid);
        if($user->role_id=1){
            return User::all();
        }
    }
    function addinteract(Request $request){
        informations::create($request->all());
        return Response()->json(['ok'=>'yes']);
    }
    function adduser(Request $request){
        $data=$request->all();
        $data['password']=Hash::make('password');
        User::create($data);
        return Response()->json(['ok'=>'yes']);
    }
    function getsondage(Request $request){
        return  $sondage=sondage::find($request->id);
    }
    function getinteract(Request $request){
        $sondage=sondage::find($request->sondageid);
        return $sondage->interactions;
    }
    function getallsondage(Request $request){
        return sondage::all();
    }
    function forget(Request $request){
        $user=User::where('email','=',$request->email)->get();
        if(count($user)!=0){
            Mail::to($request->email)->send(new forgotmail(url('forgotmail?id='+$user[0]->id)));
        }else{
            return Response()->json(['ok'=>'no']);
        }
    }
    function passwordmod(Request $request){
        $user=User::find($request->userid);
        $user->update(['password'=>Hash::make($request->password)]);
        return Response()->json(['ok'=>'yes']);
    }
    function addincontributor(Request $request){}
    function deletefromcontributor(Request $request){}
}
