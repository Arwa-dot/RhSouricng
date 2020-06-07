<?php

namespace App\Http\Controllers;

use App\Offre;
use Illuminate\Http\Request;
use View;


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


        return view ::make('offres.index')->with ('offres',$offres);
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
    {
        Offre::create($request->all());
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
    public function forceDestroy($id)
    {
        Offre::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'loffre a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Offre::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Lemploi a bien été restauré.');
    }
}
