<?php

namespace App\Http\Controllers;

use App\Models\Sexe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SexeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["title"] = "Sexe";
        $data["menu"] = "Sexe";

        $data["sexes"] = Sexe::orderBy("libelle", "asc")->get();

        return view("parametrage.sexe.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["title"] = "Sexe";
        $data["menu"] = "Sexe";

        return view("parametrage.sexe.create", $data);
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

        $sexe = Sexe::create([
            "libelle" => $request->libelle
        ]);

        self::storeDefault($sexe);

        Session::flash("type", "alert-success");
        Session::flash("message", "Enregistrement effectué avec succès!");

        return redirect()->route("sexe.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sexe  $sexe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["title"] = "Sexe";
        $data["menu"] = "Sexe";

        $sexe = Sexe::find($id);
        $data["sexe"] = $sexe;

        return view("parametrage.sexe.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sexe  $sexe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["title"] = "Sexe";
        $data["menu"] = "Sexe";

        $sexe = Sexe::find($id);
        $data["sexe"] = $sexe;

        return view("parametrage.sexe.edit", $data);
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

        Session::flash("type", "alert-success");
        Session::flash("message", "Modification effectuée avec succès!");

        return redirect()->route("sexe.index");
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

        return redirect()->route("sexe.index");
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
