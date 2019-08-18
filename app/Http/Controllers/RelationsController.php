<?php

namespace App\Http\Controllers;

use App\Relations;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Post;
use App\Team;
use App\ChatPost;
use App\Squad;
use App\Card;
use App\Change;
use Session;

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
		$relations->Status = "przed meczem";
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
		$imageteamhome = Team::where('name', '=', $relationview->teamhome)->first();
		$imageteamaway = Team::where('name', '=', $relationview->teamaway)->first();
		$squadhome = Squad::where('id_relation', '=', $id)->where('team', '=', $relationview->teamhome)->get();
		$squadaway = Squad::where('id_relation', '=', $id)->where('team', '=', $relationview->teamaway)->get();
		return view('welcome', compact('relationview', 'imageteamhome', 'imageteamaway', 'squadhome', 'squadaway'));
    }
	
	public function testshow(Relations $relations, $id)
    {
        $relationview = Relations::where('id','=',$id)->first();
		$imageteamhome = Team::where('name', '=', $relationview->teamhome)->first();
		$imageteamaway = Team::where('name', '=', $relationview->teamaway)->first();
		$squadhome = Squad::where('id_relation', '=', $id)->where('team', '=', $relationview->teamhome)->get();
		$squadaway = Squad::where('id_relation', '=', $id)->where('team', '=', $relationview->teamaway)->get();
		return view('testwelcome', compact('relationview', 'imageteamhome', 'imageteamaway', 'squadhome', 'squadaway'));
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
		
		$teamhome = Squad::where('team', '=', $relations->teamhome)->where('id_relation', '=', $id)->get();
		$teamaway = Squad::where('team', '=', $relations->teamaway)->where('id_relation', '=', $id)->get();
		return view('admineditrelation', compact('relations', 'post', 'teamhome', 'teamaway'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Relations  $relations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $relation = Relations::find($request->relation_id);

		$relation->matchdate = $request->date;
		$relation->hour = $request->hour;
		$relation->matchplace = $request->city;
		$relation->league = $request->league;
		$relation->round = $request->round;

		$relation->save();	
		
		return redirect()->back();
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
			$hometeam=DB::table('teams')->where('name','LIKE','%'.$request->namehome."%")->limit(1)->get();
			if($hometeam)
				{
					foreach ($hometeam as $key => $hometeams) {
						
						$output.='	
						<div class="form-group">
										<div class="col-lg-12 nopadding"><label for="druzynagospodarzy">Nazwa drużyny gospodarzy</label></div>
										<div class="row"><div class="col-lg-2"><img src="'.$hometeams->logoadress.'" height="40px" /></div><div class="col-lg-10"><input type="text" class="form-control" name="teamhome" placeholder="'.$hometeams->name.'" value="'.$hometeams->name.'" readonly></div></div>
						</div>';
					}
				return Response($output);
			 	}
		} 
	}
	
	public function searchhometeammobile(Request $request)
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
										<div class="col-lg-12 nopadding"><label for="druzynagospodarzy">Nazwa drużyny gospodarzy</label></div>
										<div class="row"><div class="col-2 col-lg-2"><img src="'.$product->logoadress.'" height="30px" /></div><div class="col-10 col-lg-10"><input type="text" class="form-control" name="teamhome" placeholder="'.$product->name.'" value="'.$product->name.'" readonly></div></div>
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
			$hometeam=DB::table('teams')->where('name','LIKE','%'.$request->nameaway."%")->limit(1)->get();
			if($hometeam)
				{
					foreach ($hometeam as $key => $hometeams) {
						
						$output.='	
						<div class="form-group">
										<div class="col-lg-12 nopadding"><label for="druzynagospodarzy">Nazwa drużyny gości</label></div>
										<div class="row"><div class="col-lg-10"><input type="text" class="form-control" name="teamaway" placeholder="'.$hometeams->name.'" value="'.$hometeams->name.'" readonly></div><div class="col-lg-2" style="padding-left: 5%;"><img src="'.$hometeams->logoadress.'" height="40px" /></div></div>
						</div>';
					}
				return Response($output);
				}
		}
	}
	
	public function searchawayteammobile(Request $request)
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
										<div class="col-12"><label for="druzynagospodarzy">Nazwa drużyny gości</label></div>
										<div class="row"><div class="col-2" style="padding-left: 5%;"><img src="'.$product->logoadress.'" height="30px" /></div><div class="col-9"><input type="text" class="form-control" name="teamaway" placeholder="'.$product->name.'" value="'.$product->name.'" readonly></div></div>
						</div>';
					}
				return Response($output);
				}
		}
	}
	
	public function myrelation(Request $request)
	{
			$relations = Relations::where('user_id','=', Auth::user()->id)->where('status', 'not like', 'koniec meczu')->where('status', 'not like', 'przerwany')->where('status', 'not like', 'walkower')->where('status', 'not like', 'odwołany')->get();
			return view('adminmyrelation', compact('relations'));
		
	}
	
	public function archiverelation(Request $request)
	{
			$relations = Relations::where('user_id','=', Auth::user()->id)->where('status', 'not like', 'przed meczem')->where('status', 'not like', 'trwa I połowa')->where('status', 'not like', 'przerwa')->where('status', 'not like', 'trwa II połowa')->get();
			return view('adminarchiverelation', compact('relations'));
		
	}
	
	public function addpost(Request $request)
	{
		$posts = new Post;
		$posts->relations_id = $request->relations_id;
		$posts->icon = $request->icon;
		$posts->time = $request->time;
		$posts->text = $request->text;
		
		request()->validate([

            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);
		if(isset($request->image1))
		{
		$imageName = $request->file('image1');
		$imageName = $imageName->getClientOriginalName();

        request()->image1->move(public_path('images/pictures'), $imageName);
		$textimage1 = '<a target="_blank" href="../../../images/pictures/'.$imageName.'"><img src="../../../images/pictures/'.$imageName.'" height="70px"></a>'; 
		}
		else
		{
			$textimage1 = '';
		}
		if(isset($request->image2))
		{
		$imageName2 = $request->file('image2');
		$imageName2 = $imageName2->getClientOriginalName();

        request()->image2->move(public_path('images/pictures'), $imageName2);
		$textimage2 = '<a target="_blank" href="../../../images/pictures/'.$imageName2.'"><img src="../../../images/pictures/'.$imageName2.'" height="70px"></a>'; 
		}
		else
		{
			$textimage2 = '';
		}
		if(isset($request->image3))
		{
		$imageName3 = $request->file('image3');
		$imageName3 = $imageName3->getClientOriginalName();

        request()->image3->move(public_path('images/pictures'), $imageName3);
		$textimage3 = '<a target="_blank" href="../../../images/pictures/'.$imageName3.'"><img src="../../../images/pictures/'.$imageName3.'" height="70px"></a>'; 
		}
		else
		{
			$textimage3 = '';
		}
		if(isset($request->image4))
		{
		$imageName4 = $request->file('image4');
		$imageName4 = $imageName4->getClientOriginalName();

        request()->image4->move(public_path('images/pictures'), $imageName4);
		$textimage4 = '<a target="_blank" href="../../../images/pictures/'.$imageName4.'"><img src="../../../images/pictures/'.$imageName4.'" height="70px"></a>'; 
		}
		else
		{
			$textimage4 = '';
		}
		
		if(isset($request->image1) or isset($request->image2) or isset($request->image3) or isset($request->image4))
		{
			$posts->text = $textimage1.' '.$textimage2.' '.$textimage3.' '.$textimage4;
		}
		
		$posts->save();
		
		if(null !==($request->cardplayerhome))
		{
			$card = new Card;
			
			$card->nameplayer = $request->cardplayerhome;
			$card->type = $request->typecard;
			$card->time = $request->time;
			$card->team = $request->cardplayerhometeam;
			$card->relation_id = $request->relation_id;
			
			$card->save();
		}
		
		if(null !==($request->cardplayeraway))
		{
			$card = new Card;
			
			$card->nameplayer = $request->cardplayeraway;
			$card->type = $request->typecard;
			$card->time = $request->time;
			$card->team = $request->cardplayerawayteam;
			$card->relation_id = $request->relation_id;
			
			$card->save();
		}
		if(null !==($request->playeroffhome))
		{
			$change = new Change;
			
			$change->playeroff = $request->playeroffhome;
			$change->playeron = $request->playeronhome;
			$change->time = $request->time;
			$change->team = $request->playerhometeam;
			$change->relation_id = $request->relation_id;
			
			$change->save();
		}
		
		if(null !==($request->playeronhome) and null ==($request->playeroffhome))
		{
			$change = new Change;
			
			$change->playeroff = $request->playeroffhome;
			$change->playeron = $request->playeronhome;
			$change->time = $request->time;
			$change->team = $request->playerhometeam;
			$change->relation_id = $request->relation_id;
			
			$change->save();
		}
		
		if(null !==($request->playeroffaway))
		{
			$change = new Change;
			
			$change->playeroff = $request->playeroffaway;
			$change->playeron = $request->playeronaway;
			$change->time = $request->time;
			$change->team = $request->playerawayteam;
			$change->relation_id = $request->relation_id;
			
			$change->save();
		}
		
		if(null !==($request->playeronaway) and null ==($request->playeroffaway))
		{
			$change = new Change;
			
			$change->playeroff = $request->playeroffaway;
			$change->playeron = $request->playeronaway;
			$change->time = $request->time;
			$change->team = $request->playerawayteam;
			$change->relation_id = $request->relation_id;
			
			$change->save();
		}
		
		return redirect()->route('relation.edit', [$posts->relations_id]);		
	}
	
	public function editpost(Request $request)
	{
		$posts = Post::find($request->post_id);
		$posts->time = $request->time;
		$posts->text = $request->text;
		
		$posts->save();
		
		return redirect()->route('relation.edit', [$posts->relations_id]);		
	}
	
	public function deletepost(Request $request)
	{
		Post::where('id', $request->post_id)->delete();
		
		return back();
	}
	
	public function editstatus(Request $request)
	{
		$status = Relations::find($request->id);
		$status->status = $request->status;
		
		$status->save();
		
		return redirect()->route('relation.edit', [$request->id]);		
	}
	
	public function editgoal(Request $request)
	{
		$status = Relations::find($request->relation_id);
		
		$goalhomeplus = $status->resulthometeam + $request->goalhome;
		$status->resulthometeam = $goalhomeplus;
		
		$goalawayplus = $status->resultawayteam + $request->goalaway;
		$status->resultawayteam = $goalawayplus;
		
		$goalhomeminus = $status->resulthometeam - $request->goalhomeminus;
		$status->resulthometeam = $goalhomeminus;
		
		$goalawayminus = $status->resultawayteam - $request->goalawayminus;
		$status->resultawayteam = $goalawayminus;
		
		$status->save();
		
		if(null !==($request->text))
		{
			$posts = new Post;
			$posts->relations_id = $request->relation_id;
			$posts->icon = $request->icon;
			$posts->time = $request->time;
			$posts->text = $request->text;
		
			$posts->save();
		}
		
		return redirect()->route('relation.edit', [$request->relation_id]);		
	}
	
	public function chatpost(Request $request)
	{
		$posts = new ChatPost;
		$posts->nick = $request->nick;
		$posts->text = $request->chatpost;
		$posts->relations_id = $request->id;
		Session::flash('user', $request->nick);
		
		$posts->save();
		
		return redirect()->route('relation.show', [$request->id]);		
	}
	public function deleterelation(Request $request, $id)
	{
		$relation = Relations::find($id);
		$relation->delete();
		
		return redirect()->back();
	}
}
