<?php

namespace App\Http\Controllers;

use App\Models\Etage;
use App\Models\Batiment;
use Illuminate\Http\Request;


class EtageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $etages = Etage::all();

      return view('etages.index', compact ('etages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $etage = Etage::all();
      $batiments = Batiment::all();
        return view('etages.create', compact ('etage', 'batiments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Etage::create($request->all());
      return redirect()->route('etages.index')->with('success','Etage created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $etage = Etage::find($id);
      return view('etages.show', compact('etage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $etage = Etage::find($id);
      return view('etages.edit', compact('etage'));
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
            request()->validate([

          'numeroEtage' => 'required',

          'batiment_id' => 'required',

      ]);

      Etage::find($id)->update($request->all());

      return redirect()->route('etages.index')->with('success','Etage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Etage::find($id)->delete();

      return redirect()->route('etages.index')->with('success','Etage deleted successfully');
    }

    //Ajouter par Moi
    public function destroyForm($id)
    {
      return view('destroyForm', compact('etage'));
    }
}
