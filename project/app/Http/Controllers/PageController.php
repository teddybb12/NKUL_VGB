<?php

namespace App\Http\Controllers;

use App\Models\informations;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accueil()
    {
        return view('login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home', [
            'cameroun' => informations::where('pays', '=', 'Cameroun')->get(),
            'tchad' => informations::where('pays', '=', 'Tchad')->get(),
            'centraf' => informations::where('pays', '=', 'Centrafrique')->get(),
            'congo' => informations::where('pays', '=', 'Congo')->get(),
            'guinee' => informations::where('pays', '=', 'Guinée-Equatoriale')->get(),
            'gabon' => informations::where('pays', '=', 'Gabon')->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home2()
    {
        return view('home2');
    }
}
