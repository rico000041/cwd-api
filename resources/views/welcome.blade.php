<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<body>

    <div class="container"> 
        <form action = "/api/notes" method = "POST">  
            @method('POST')
            @csrf

            <div>   
                <input type="text" name="title" required>
                <input type="text" name="body" required>
                <input type="submit" name="">
            </div>

        </form>
    </div>
    <div class="container">
        <ul>
        @foreach($notes as $note)
            <li><a href= "/api/notes/{{$note->id}}">{{ $note->title }}</a></li>
        @endforeach
        </ul>
    </div>  
</body>
</html>