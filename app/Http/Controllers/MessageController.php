<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class MessageController extends Controller{
	public function show($id){
		$message=Message::find($id);
		return view('message.show', ['message' => $message]);
	}

	public function create(CreateMessageRequest $request){
		/*dd($request->all()); //Reviso que hay en el obj*/
		$message=Message::create([
			'content'=>$request->input('message'),
			'image'=>'http://lorempixel.com/600/338?'.mt_rand(0,1000)
		]);

/*  .mt_rand(0,1000) num. random 
		dd($message); //Reviso los atributos que guarda en esa var*/

return redirect('/message/'.$message->id);
	}
}
