<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create a todo</h1>
    
    <form method="POST" action="{{route('todo.store')}}">
        @csrf
        @method('POST')
        <div>
            <label for="name"></label>
            <input type="text" name="name" placeholder="name">
            
        </div>

        <div>
            <input type="checkbox" id="completed" name="completed" checked />
            <label for="completed">completed ?</label>
        </div>

        <div>
            <input type="submit" value="submit new todo">
        </div>
        
    </form>
</body>
</html>