<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Todo;

class ViewController extends Controller
{
    //

 	public function viewNotes(){
 		$notes = Note::all();
        $response = response()->json($notes,200);   //ok
        return view('welcome',compact('notes'));
 	}
 	public function about(){
 		return view('about');
 		
 	}
}
