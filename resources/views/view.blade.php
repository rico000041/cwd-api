@extends('layout')
    @section('title','View')
    @section('mainTitle','View Page')
    @section('content')

@section('content')
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        {{$note->title}}
                    </h1>
                    <h2 class="subtitle">
                        {{$note->description}}
                    </h2>

                    <div class="box">
                            <form id = 'editForm' action = "/api/todos" class="form-field" method = "POST">  
                                @method('POST')
                                @csrf
                              <h1 class="is-3 title " style="color:black">Add Todos</h1>

                              <label class="label">Description</label>
                              <div class="control has-icons-left has-icons-right">
                                <input class="input is-success" type="text" placeholder="Description" name = "description" required >
                                <input type="hidden" name = "note_id" value = "{{$note->id}}" >
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
            </div>
        </div>

        
         <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">

                    <div class="box">
                           
                              <h1 class="is-3 title " style="color:black">Todos List</h1>
                              <table class="table is-bordered">   
                                <thead>
                                    <tr>
                                        <b>
                                        <td>Id</td>   
                                        <td>Description</td> 
                                        <td>Completed</td> 
                                        <td>Edit</td> 
                                        <td>Delete</td> 
                                        </b>
                                    </tr>
                                </thead>
                                <tbody>
                                        
                                    @foreach($note->todos as $todo)

                                    <tr>
                                        
                                            <td>{{$todo->id}}</td>
                                            <td>{{$todo->description}}</td>
                                            <td> 
                                                <form id= "editForm" method="POST" action="/api/todos/{{$todo->id}}"> 
                                                @method('PATCH')
                                                @csrf
                                                <input type="checkbox" onChange="this.form.submit()" value = "{{$todo->isCompleted}}" name="isCompleted" 
                                                <?= $todo->isCompleted ?
                                                    'checked' : '' ?> 
                                            
                                            </td>
                                            </form>
                                            <td>{{$todo->id}}</td>
                                            <td>{{$todo->id}}</td>
                                            
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                              </table>
                            

                        </div>   
                    </div>
                </div>
            </div>
        </div>
@endsection