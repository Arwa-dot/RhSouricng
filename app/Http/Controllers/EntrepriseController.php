<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Entreprise;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $entreprises = Entreprise::withoutTrashed()->oldest('nom_entreprise')->paginate(8);



        return view('entreprise.index', compact('entreprises'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprise.create_profile');

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
        Entreprise::create($inputs);
        return redirect()->route('entreprise.index')->with('info', 'votre profile est crée avec succées');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprise.show',compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        return view('entreprise.edit',compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        $entreprise->update($request->all());
        return redirect()->route('entreprise.index')->with('info', 'votre profile a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();
        return back()->with('info', 'votre offre demploi est mis à la corbeille');
    }
    public function forceDestroy($id)
    {
        Entreprise::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'votre profil a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Entreprise::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'votre profil a bien été restauré.');
    }
}
