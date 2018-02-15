<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();

        return view('agents.index', compact('agents'));
        //['agents' => $agents]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agents.create', compact ('agents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Agent::create($request->all());

      //return "Agent créé !";
      return redirect()->route('agents.index')->with('info','Agent créé avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        return view('agents.show', compact('agents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        $agents = Agent::find($agent);
        //dd($agents);
        return view('agents.edit', compact('agents'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Agent $agent)
    {
      dd('ok');
      //$agents = Agent::findOrFail($agent);
      //request()
      $this->validate([
        'nomAgent' => 'required',
        'email' => 'required',
      ]);
      //$agents->update($request->all());
      Agent::find($agent)->update($request->all());
      return redirect()->route('agents.index')->with('info1', 'Agent modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
      $agents = Agent::findOrFail($agent)->delete();


      return redirect()->route('agents.index')->with('info2', 'Agent supprime avec succes');
    }

    //Ajouter par Moi
    public function destroyForm(Agent $agent)
    {
      $agents = Agent::findOrFail($agent);
      return view('agents.destroyForm', compact('agents'));
    }
}
