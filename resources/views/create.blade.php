@extends('layout')
    @section('title','Create')
    @section('mainTitle','Create Page')
    @section('content')
    

    <div class="field is-grouped">
        <form action = "/api/notes" class="form-field" method = "POST">  
            @method('POST')
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
            <input class="input is-success" type="text" placeholder="Description" name = "description" required >
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

    @endsection