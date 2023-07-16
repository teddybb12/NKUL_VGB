<?php

namespace App\Http\Controllers;

use App\Models\informations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!isset(Auth::User()->id)) {
            return redirect()->route('auth');
        }

        return view('enquettes.list', [
            'enquettes' => informations::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_enquette()
    {
        if(!isset(Auth::User()->id)) {
            return redirect()->route('auth');
        }

        return view('enquettes.list2', [
            'enquettes' => informations::where('user_id', '=', Auth::user()->id)->get()
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
            return redirect()->route('auth');
        }

        return view('enquettes.form');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form_enquette()
    {
        return view('enquettes.form2', [
            'enquettes' => informations::all()
        ]);
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
            return redirect()->route('auth');
        }

        try {
            informations::create($request->all());

            return redirect()->route('gestion_enquete.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        if(!isset(Auth::User()->id)) {
            return redirect()->route('auth');
        }

        informations::create($request->all());

        return redirect()->route('form_enquette');
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
            return redirect()->route('auth');
        }

        return view('enquettes.edit', [
            'finds' => informations::find($id),
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
        if(!isset(Auth::User()->id)) {
            return redirect()->route('auth');
        }

        return view('back-end.pages.article.edit', [
            'finds' => informations::find($id),
        ]);
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
        if(!isset(Auth::User()->id)) {
            return redirect()->route('auth');
        }

        $info = informations::find($id);
        $info->update($request->all());

        return redirect()->route('list_enquette');
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
            return redirect()->route('auth');
        }

        $dem = informations::find($id);
        $dem->delete();

        return redirect()->route('gestion_enquete.index');
    }

    public function print($id)
    {
        if(!isset(Auth::User()->id)) {
            return redirect()->route('auth');
        }

        return view('enquettes.etat', [
            'finds' => informations::find($id),
        ]);
    }

    public function print2($id)
    {
        if(!isset(Auth::User()->id)) {
            return redirect()->route('auth');
        }

        return view('enquettes.etat2', [
            'finds' => informations::find($id),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export_data()
    {
        if(!isset(Auth::User()->id)) {
            return redirect()->route('auth');
        }
        
        return Excel::download(new UsersExport, 'data.xlsx');
    }
}
