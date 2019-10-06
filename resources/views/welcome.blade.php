@extends('layout')
    @section('title','Home')
    @section('mainTitle','Home Page')
    @section('content')
    
    <div class="container">
        <br/><br/>
        @foreach($notes as $note)
            <h1 class="title is-3"><a href= "/notes/{{$note->id}}">{{ $note->title }}</a></h1>
            <p class="subtitle">{{$note->description}}</p>
        @endforeach


    </div>  
    @endsection