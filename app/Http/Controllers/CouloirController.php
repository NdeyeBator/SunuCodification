<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Couloir;
use App\Models\Batiment;
use App\Models\Etage;


class CouloirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $couloirs = Couloir::all();

      return view('couloirs.index', compact ('couloirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $couloirs = Couloir::all();
        $batiments = Batiment::all();
        $etages = Etage::all();
        return view('couloirs.create', compact ('couloirs', 'batiments', 'etages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Couloir::create($request->all());
      return redirect()->route('couloirs.index')->with('success','Couloir created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $couloir = Couloir::find($id);
      return view('couloirs.show', compact('couloir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $couloir = Couloir::find($id);
      return view('couloirs.edit', compact('couloir'));
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

            'numeroCouloir' => 'required',

            'batiment_id' => 'required',

            'etage_id' => 'required',

        ]);

        Couloir::find($id)->update($request->all());

        return redirect()->route('couloirs.index')->with('success','Couloir updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Couloir::find($id)->delete();

      return redirect()->route('couloirs.index')->with('success','Couloir deleted successfully');

    }

    //Ajouter par Moi
    public function destroyForm($id)
    {
      return view('destroyForm', compact('couloir'));
    }
}
