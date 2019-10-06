<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Note;
use Illuminate\Http\Request;

class TodoController extends Controller
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

    /**$response = response()->json(Note::create($request->all()),201);
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $response = response()->json(Todo::create($request->all(),201));
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('editTodos',compact('todo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        if(request('validator') =="checkbox"){
            if($todo->isCompleted){
                $todo->isCompleted = 0;
            }
            else{
                $todo->isCompleted = 1;
            }
            $todo->save();

            return back();
        }
        else{
            request()->validate([
            'description' => 'required:min:10'
            ]);

            $todo->update($request->all());
            $response = response()->json($todo,200);    //ok 
            return redirect('/notes/'.$todo->note->id);
           // return redirect()->action('NoteController@show',['note_id' => $todo->note->id]);
       
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        $response = response()->json(null, 204);    //deleted

        return back()->with('response');


    }
}
