@extends('layout')
    @section('title','Edit')
    @section('mainTitle','Edit Page')
    @section('content')

@section('content')
	 <div class="container">
        <form action = "/api/todos/{{$todo->id}}" class="form-field" method = "POST">  
            @method('PATCH')
            @csrf
            <div class="row">
              <div class="col-md-6">
                <label class="label">Description</label>

                  <textarea class="input is-success" style="height: 10em" type="text" placeholder="Description" value = "{{$todo->description}}" name = "description" required ></textarea>
                  <input type="hidden" name="validator" value="edit"/>
                  
                <br/>
                <br/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">  
                <div class="control">
                  <button class="button is-link">Submit</button>
                </div>
              </div>
            </div>
          
        </form>
    </div>


@endsection