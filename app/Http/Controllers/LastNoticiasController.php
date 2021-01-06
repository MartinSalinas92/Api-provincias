<?php

namespace App\Http\Controllers;

use App\Models\LastNoticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LastNoticiasController extends Controller


{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('noticias.index');
    }

    public function mostrarNoticias()
    {

        $user_id=Auth::user()->id;

        $results = DB::select('select * from last_noticias where user_id = ' .$user_id);

        //return $results;

        return view('favoritos.index', compact('results'));
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

       // return response()->json($request->all());

         //dd($request);

        DB::table('last_noticias')->insert([
            'name'=>$request->nombre,
            'user_id'=>Auth::user()->id


        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LastNoticias  $lastNoticias
     * @return \Illuminate\Http\Response
     */
    public function show(LastNoticias $lastNoticias)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LastNoticias  $lastNoticias
     * @return \Illuminate\Http\Response
     */
    public function edit(LastNoticias $lastNoticias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LastNoticias  $lastNoticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LastNoticias $lastNoticias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LastNoticias  $lastNoticias
     * @return \Illuminate\Http\Response
     */
    public function destroy(LastNoticias $lastNoticias)
    {
        //
    }
}
