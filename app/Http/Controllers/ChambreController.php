<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;
use App\Models\Couloir;
use App\Models\Etage;
use App\Models\Batiment;


class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $chambres = Chambre::all();

      return view('chambres.index', compact ('chambres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chambres = Chambre::all();
        $couloirs = Couloir::all();
        $etages = Etage::all();
        $batiments = Batiment::all();
        return view('chambres.create', compact ('chambres', 'couloirs', 'etages', 'batiments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Chambre::create($request->all());
      return redirect()->route('chambres.index')->with('success','Chambre created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $chambre = Chambre::find($id);
      return view('chambres.show', compact('chambre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $chambre = Chambre::find($id);
      return view('chambres.edit', compact('chambre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
              request()->validate([

            'numeroChambre' => 'required',

            'capacite' => 'required',

            'couloir_id' => 'required',

            'etage_id' => 'required',

            'batiment_id' => 'required',

        ]);

        Chambre::find($id)->update($request->all());

        return redirect()->route('chambres.index')->with('success','Chambre updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Chambre::find($id)->delete();

      return redirect()->route('chambres.index')->with('success','Chambre deleted successfully');
    }

    //Ajouter par Moi
    public function destroyForm($id)
    {
      $chambre = Chambre::find($id);
      return view('destroyForm', compact('chambre'));
    }
}
