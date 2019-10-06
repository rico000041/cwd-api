@extends('layout')
    @section('title','Home')
    @section('mainTitle','Home Page')
    @section('content')
    
    <div class="container">
        <br/><br/>
        @foreach($notes as $note)
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="title is-3"><a href= "/notes/{{$note->id}}">{{ $note->title }}</a></h1>
                    <p class="subtitle">{{$note->description}}</p>
                </div>
                <div class="col-sm-3">
                    <form method="GET" action="/notes/{{$note->id}}/edit">
                    <button class="button is-link">Edit</button>
                    </form>
                    <br/>
                    <form method="POST" action="/api/notes/{{$note->id}}">
                    @method("DELETE")
                    <button class="button is-link danger">Delete</button>
                    </form>
                </div>
            </div>
            
            <hr/>
        @endforeach


    </div>  
    @endsection