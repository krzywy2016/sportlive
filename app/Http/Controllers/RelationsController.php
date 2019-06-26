<?php

namespace App\Http\Controllers;

use App\Relations;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Post;

class RelationsController extends Controller
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
        $relations = new Relations;
		$relations->user_id = $request->user_id;
		$relations->teamhome = $request->teamhome;
		$relations->teamaway = $request->teamaway;
		$relations->matchdate = $request->date;
		$relations->hour = $request->hour;
		$relations->matchplace = $request->city;
		$relations->league = $request->league;
		$relations->round = $request->round;
		$relations->resulthometeam = '0';
		$relations->resultawayteam = '0';
		//$relations->matchday = $request->title;
		
		$relations->save();
		
		return redirect()->route('myrelation.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Relations  $relations
     * @return \Illuminate\Http\Response
     */
    public function show(Relations $relations, $id)
    {
        $relationview = Relations::where('id','=',$id)->first();
		return view('welcome', compact('relationview'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Relations  $relations
     * @return \Illuminate\Http\Response
     */
    public function edit(Relations $relations, $id)
    {
        $relations = Relations::where('id','=',$id)->first();
		
		
		$post = Post::where('relations_id','=', $id)->orderby('created_at', 'desc')->get();
		return view('admineditrelation', compact('relations', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Relations  $relations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relations $relations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Relations  $relations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relations $relations)
    {
        //
    }
	public function searchhometeam(Request $request)
	{
 
		if($request->ajax())
 
		{
 
			$output="";
			$products=DB::table('teams')->where('name','LIKE','%'.$request->namehome."%")->limit(1)->get();
			if($products)
				{
					foreach ($products as $key => $product) {
						
						$output.='	
						<div class="form-group">
										<label for="druzynagospodarzy">Nazwa drużyny gospodarzy</label>
										<input type="text" class="form-control" name="teamhome" placeholder="'.$product->name.'" value="'.$product->name.'" readonly>
						</div>';
					}
				return Response($output);
				}
		}
	}
	
	public function searchawayteam(Request $request)
	{
 
		if($request->ajax())
 
		{
 
			$output="";
			$products=DB::table('teams')->where('name','LIKE','%'.$request->nameaway."%")->limit(1)->get();
			if($products)
				{
					foreach ($products as $key => $product) {
						
						$output.='	
						<div class="form-group">
										<label for="druzynagospodarzy">Nazwa drużyny gości</label>
										<input type="text" class="form-control" name="teamaway" placeholder="'.$product->name.'" value="'.$product->name.'" readonly>
						</div>';
					}
				return Response($output);
				}
		}
	}
	
	public function myrelation(Request $request)
	{
			$relations = Relations::where('user_id','=', Auth::user()->id)->get();
			return view('adminmyrelation', compact('relations'));
		
	}
	
	public function addpost(Request $request)
	{
		$posts = new Post;
		$posts->relations_id = $request->relations_id;
		$posts->time = $request->time;
		$posts->text = $request->text;
		
		$posts->save();
		
		return redirect()->route('relation.edit', [$posts->relations_id]);		
	}
}
