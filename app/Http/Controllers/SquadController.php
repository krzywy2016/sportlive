<?php

namespace App\Http\Controllers;

use App\squad;
use Illuminate\Http\Request;

class SquadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$array = $request->position;
		
    for ($i = 0; $i < count($array); $i++) {
			
			
				$squadfind = Squad::where('id_relation', '=', $request->relations_id)->where('position', '=', $request->position[$i])->get();
				$squadcount = count($squadfind);
				if ($squadcount < 1)
				{
					$squad = new Squad;
					$squad->number = $request->number[$i];
					$squad->name = $request->name[$i];
					$squad->position = $request->position[$i];
					$squad->id_relation = $request->relations_id;
					$squad->team = $request->team;
					$squad->save();
				}
				else
				{
					$squadupdate = Squad::where('id_relation', '=', $request->relations_id)->where('position', '=', $request->position[$i])->first();
					$squadupdate->number = $request->number[$i];
					$squadupdate->name = $request->name[$i];
					$squadupdate->save();
				}
	}
		
		return redirect()->back(); 
    }
	
	public function store2(Request $request)
    {
		$array = $request->name2;
		
       for ($i = 0; $i < count($array); $i++) {
			
			
				$squadfind = Squad::where('id_relation', '=', $request->relations_id)->where('position', '=', $request->position2[$i])->where('team', '=', $request->team)->get();
				$squadcount = count($squadfind);
				if ($squadcount < 1)
				{
					$squad = new Squad;
					$squad->number = $request->number2[$i];
					$squad->name = $request->name2[$i];
					$squad->position = $request->position2[$i];
					$squad->id_relation = $request->relations_id;
					$squad->team = $request->team;
					$squad->save();
				}
				else
				{
					$squadupdate = Squad::where('id_relation', '=', $request->relations_id)->where('position', '=', $request->position2[$i])->first();
					$squadupdate->number = $request->number2[$i];
					$squadupdate->name = $request->name2[$i];
					$squadupdate->save();
				}
		}
		
		return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\squad  $squad
     * @return \Illuminate\Http\Response
     */
    public function show(squad $squad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\squad  $squad
     * @return \Illuminate\Http\Response
     */
    public function edit(squad $squad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\squad  $squad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, squad $squad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\squad  $squad
     * @return \Illuminate\Http\Response
     */
    public function destroy(squad $squad)
    {
        //
    }
}
