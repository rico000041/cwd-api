@extends('layout')
    @section('title','View')
    @section('mainTitle','View Page')
    @section('content')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                <h1 class="title">{{$note->title}}</h1>
                <h2 class="subtitle">{{$note->description}}</h2>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6">
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
            <div class="col-sm-6">
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
                                                <input class = "checkbox center" type="checkbox" onChange="this.form.submit()" value = "{{$todo->isCompleted}}" name="isCompleted" 
                                                <?= $todo->isCompleted ?
                                                    'checked' : '' ?> />
                                                <input type="hidden" name="validator" value="checkbox" />
                                            
                                            </td>
                                            </form>
                                            <form method="GET" action = "/todos/{{$todo->id}}/edit">
                                            <td> <button class="center button btn-success" type="submit">Edit</button></td>
                                            </form>
                                            <form method="POST" action="/api/todos/{{$todo->id}}">
                                            @method("DELETE")
                                            <td><button class = "center button btn-danger" type="submit">Delete</button></td>
                                            </form>

                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                              </table>

                        </div>   
            </div>
        </div>
        
    </div>

       
@endsection