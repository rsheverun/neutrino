<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use DB;
use App\Callback;
use App\Callback_discipline;
use App\Discipline;
class SiteController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function services()
    {
    	return view('services');
    }

    public function costs()
    {
    	return view('costs');
    }
    public function contacts(Request $request)
    {
    	$disciplines= DB::table('disciplines')->select('id','name_discipline')->get();
    	//$discipline=$disciplines->id;
    	//dump($disciplines[0]->id);
    	//$callback = new Callback;
    		//dump($callback);
		if ($request->isMethod('post'))
		{
			$count=0;
			$callback = new Callback;
			$callbackDiscipline = new Callback_discipline;
			$callback->name=$request->name;
			$callback->email=$request->email;
			$callback->phone=$request->phone;
			$callback->comment=$request->comment;
			$callback->save();
			$id_callback=$callback->id;
			//dump($callback->id);
			//$input = $request->all();
			//dump($request->name);
			//dump($input['discipline']);
			 /* $id_callback = $callback->insertGetId(
			  	[
			  					'name'=>$request->name,
			  					'email'=>$request->email,
			  					'phone'=>$request->phone,
			  					'comment'=>$request->comment
				]);*/


		 foreach ($request->discipline as $key => $value) {
		  	$callbackDiscipline->create(
		  		[
		  			'callback_id'=>$id_callback,
		  			'discipline_id'=>$value
		  		]
		  		/*$callbackDiscipline->callback_id=$id_callback;
		  		$callbackDiscipline->discipline_id=$value;
		  		$count++;
		  		$callbackDiscipline->save();
		  				*/
		  		
		  	);
		  	//$callback->save();
		  }

		}

		// dump($count);
		
		return view('contacts')->withDisciplines($disciplines);

		    	//dump($request->all);
    	//echo '<h1 style="margin-top100px">'.$request->input('discipline').'</h1>';
    	//dump($request->input('discipline'));
    	//DB::insert()
    	 
    }
    public function test(){
 /*	$callbacks = App\Callback::with('disciplines')->get();
 	dump($callbacks);
 	//$discipline = $callback->disciplines()->get();
		//dump($discipline); 
		foreach ($callbacks as $key => $callback) {
		echo "$callback->disciplines.</br>";
	}*/
	$callbacks = App\Callback::has('disciplines')-> get();
	foreach ($callbacks as $key => $callback) {
		dump($callback);
	}
 	//dump($callback);
		/*foreach ($callback->disciplines as $role) {
		 	 echo $role->created_at;
			}*/
	/*$callbacks = Callback_discipline::all();
	dump($callbacks);
	foreach ($callbacks as $key => $callback) {
		echo $callback->callback->name;
	}*/
	return;
    }
}

