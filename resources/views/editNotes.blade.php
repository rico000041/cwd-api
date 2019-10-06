@extends('layout')
    @section('title','Edit')
    @section('mainTitle','Edit Page')
    @section('content')

@section('content')
	 <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action = "/api/notes/{{$note->id}}" class="form-field" method = "POST">  
            @method('PATCH')
            @csrf

          <label class="label">Title</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" placeholder="Title" name = "title" required>
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </div>
    

          <label class="label">Description</label>
          <div class="control has-icons-left has-icons-right">
            <textarea class="input is-success" type="text" style="height:10em" placeholder="Description" name = "description" required ></textarea>
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </div>
          <br/>
          <div class="control">
            <button class="button is-link">Submit</button>
          </div>
        </form>
      </div>
    </div>
        
    </div>


@endsection