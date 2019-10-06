<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $response = response()->json($notes,200);   //ok
        return view('welcome',compact('notes'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|min:8',
            'description' => 'required:min:10'
        ]);
        $response = response()->json(Note::create($request->all()),201);
        
        return redirect()->action('NoteController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Respons
     */
    public function show($note_id)
    {

        $note = Note::find($note_id);
        $response =  response()->json($note,200);
        $todos = $note->todos;
        
        return view('view',compact('note','todos','response'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {

        return view('editNotes',compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        request()->validate([
            'title' => 'required|min:8',
            'description' => 'required:min:10'
        ]);

        $note->update($request->all());
        $response = response()->json($note,200);    //ok 
        
        return redirect('/notes/');
        //return redirect()->action('NoteController@index'/*,['response' => $response]*/);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        
        $note->delete();
        $response = response()->json(null, 204);    //deleted

        return back();
    }
}
