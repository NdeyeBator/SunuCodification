<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Chambre;
use App\Models\Batiment;
use Illuminate\Http\Request;


class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $positions = Position::all();
      return view('positions.index', compact ('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();
        $chambres = Chambre::all();
        $batiments = Batiment::all();
        return view('positions.create', compact ('positions', 'chambres', 'batiments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Position::create($request->all());
      return redirect()->route('positions.index')->with('success','Position created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $position
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $position = Position::find($id);
      return view('positions.show', compact('position'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $position = Position::find($id);
        $chambres = Chambre::all();
        $batiments = Batiment::all();
        return view('positions.edit', compact('position', 'chambres', 'batiments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            request()->validate([

          'description' => 'required',

          'chambre_id' => 'required',

      ]);

      Position::find($id)->update($request->all());

      return redirect()->route('positions.index')->with('success','Position updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Position::find($id)->delete();

      return redirect()->route('positions.index')->with('success','Position deleted successfully');
    }


    //Ajouter par Moi
    public function destroyForm($id)
    {
      return view('destroyForm', compact('position'));
    }
}
