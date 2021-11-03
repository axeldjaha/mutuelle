<?php

namespace App\Http\Controllers;

use App\Models\Sexe;
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
            "libelle" => "required"
        ]);

        $typejob = Typejob::create([
            "libelle" => $request->libelle,
            "nomjobtalend" => $request->nomjobtalend,
            "commande" => $request->commande,
            "jobunique" => $request->jobunique,
            "estimport" => $request->estimport,
        ]);

        self::storeDefault($typejob);

        Session::flash("type", "alert-success");
        Session::flash("message", "Enregistrement effectué avec succès!");

        return redirect()->route("typejob.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sexe  $sexe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sexe = Sexe::find($id);
        $data["sexe"] = $sexe;

        return view("parametrage.typejob.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sexe  $sexe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sexe = Sexe::find($id);
        $data["sexe"] = $sexe;

        return view("parametrage.typejob.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sexe  $sexe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "libelle" => "required"
        ]);

        $sexe = Sexe::find($id);
        $sexe->update([
            "libelle" => $request->libelle
        ]);

        self::updateDefault($sexe);

        Session::flash("alert-success", "Modification effectuée avec succès!");

        return redirect()->route("typejob.index");
    }

    public function statut($id)
    {
        $sexe = Sexe::find($id);

        if($sexe->active == 1)
        {
            $sexe->active = 0;
        }
        else
        {
            $sexe->active = 1;
        }

        self::updateDefault($sexe);

        $sexe->save();

        return redirect()->route("typejob.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sexe  $sexe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sexe $sexe)
    {
        //
    }
}
