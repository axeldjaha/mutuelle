<?php

namespace App\Http\Controllers;

use App\Models\Typejob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TypejobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["types"] = Typejob::orderBy("libelle", "asc")->get();

        return view("parametrage.typejob.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("parametrage.typejob.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            "libelle" => "required",
        ]);

        $typejob = Typejob::create([
            "libelle" => $request->libelle,
        ]);

        self::storeDefault($typejob);

        Session::flash("type", "alert-success");
        Session::flash("message", "Enregistrement effectué avec succès!");

        return redirect()->route("typejob.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typejob  $typejob
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typejob = Typejob::find($id);
        $data["typejob"] = $typejob;

        return view("parametrage.typejob.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typejob  $typejob
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typejob = Typejob::find($id);
        $data["typejob"] = $typejob;

        return view("parametrage.typejob.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Typejob  $typejob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "libelle" => "required",
        ]);

        $typejob = Typejob::find($id);
        $typejob->update([
            "libelle" => $request->libelle,
        ]);

        self::updateDefault($typejob);

        Session::flash("type", "alert-success");
        Session::flash("message", "Modification effectuée avec succès!");

        return redirect()->route("typejob.index");
    }

    /**
     * Activer / Désactiver un typejob
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function statut($id)
    {
        $typejob = Typejob::find($id);

        if($typejob->active == 1)
        {
            $typejob->active = 0;
        }
        else
        {
            $typejob->active = 1;
        }

        self::updateDefault($typejob);

        $typejob->save();

        return redirect()->route("typejob.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typejob  $typejob
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typejob $typejob)
    {
        //
    }
}
