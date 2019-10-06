@extends('layout')
    @section('title','Create')
    @section('mainTitle','Create Page')
    @section('content')
    
   
    <div class="field container is-grouped">
        <form action = "/api/notes" class="form-field" method = "POST">  
            @method('POST')
            @csrf
          <div class="row">
            <div class="col-sm-12">
              <label class="label">Title</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="Must Be More than 8 Characters" name = "title" required>
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
              </div>
            </div>
            <div class="col-sm-12">
              <label class="label">Description</label>
              <div class="control has-icons-left has-icons-right">
                <textarea style="height: 10em" class="input is-success" type="text" placeholder="Must Be More than 10 Characters" name = "description" required >
                </textarea>
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                
              </div>
            </div>

          </div>
          <br/>
          <div class="row">
            <div class="col-sm-6">
              
              <div class="control">
                <button class="button is-link">Submit</button>
              </div>
            </div>
          </div>
          
          
        </form>
    </div>

    @endsection