<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Quizz;



class QuizzController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzs= Quizz::withTrashed()->oldest('nom')->paginate(5);
        $links = $quizzs->setPath('')->render();
        return view('entreprise.quizz.index',compact('quizzs','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('entreprise.quizz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);
        Quizz::create($inputs);
        return redirect()->route('quizz.index')->with('info', 'votre QUIZZ est crée avec succées');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Quizz $quizz)
    {
        return view('entreprise.quizz.show',compact('quizz'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Quizz $quizz)
    {
        return view('entreprise.quizz.edit',compact('quizz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quizz $quizz)
    {
        $quizz->update($request->all());
        return redirect()->route('entreprise.quizz.index')->with('info', 'votre QUIZZ a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
