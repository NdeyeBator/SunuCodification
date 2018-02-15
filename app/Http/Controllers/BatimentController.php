<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batiment;
use App\Models\Site;

class BatimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $batiments = Batiment::all();
      //$batiments = Batiment::with('site')->get();

      return view('batiments.index', compact ('batiments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$sites = Site::lists('id', 'localisation');
        $batiments = Batiment::all();
        $sites = Site::all();
        return view('batiments.create', compact ('batiments', 'sites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Batiment::create($request->all());
      return redirect()->route('batiments.index')->with('success','Batiment created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $batiment = Batiment::find($id);
      return view('batiments.show', compact('batiment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $batiment = Batiment::find($id);
      $sites = Site::all();
      return view('batiments.edit', compact('batiment', 'sites'));
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

          'nomBatiment' => 'required',

          'dateCreation' => 'required',

          'site_id' => 'required',

      ]);

      Batiment::find($id)->update($request->all());

      return redirect()->route('batiments.index')->with('success','Batiment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Batiment::find($id)->delete();

      return redirect()->route('batiments.index')->with('success','Batiment deleted successfully');
    }

    //Ajouter par Moi
    public function destroyForm($id)
    {
      $batiment = Batiment::find($id);
      return view('batiments.destroyForm', compact('batiment'));
    }
}
