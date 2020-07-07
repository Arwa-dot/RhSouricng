<?php

namespace App\Http\Controllers;

use App\Offre;
use App\User;
use Illuminate\Http\Request;
use View;
use app\Http\Requests\OffreRequest;


class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $offres = Offre::withTrashed()->oldest('titre_emploi')->paginate(5);
        $links = $offres->setPath('')->render();


        return  view('offres.index', compact('offres','links'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);
        Offre::create($inputs);
        return redirect()->route('offres.index')->with('info', 'Loffre a bien été créé');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        return view('offres.show', compact('offre'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre)
    {
        return view('offres.edit', compact('offre'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {
        $offre->update($request->all());
        return redirect()->route('offres.index')->with('info', 'votre offre a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        $offre->delete();
        return back()->with('info', 'votre offre demploi est mis à la corbeille');
    }
    /**
     * Remove permanentely the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
