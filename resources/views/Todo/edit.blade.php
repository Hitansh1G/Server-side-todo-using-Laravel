<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Todo</title>
</head>
<body>
    <h1>Edit a Todo</h1>
    
    <form method="POST" action="{{ route('todo.update', ['todo' => $todo]) }}">
        @csrf
        @method('PUT')
        
        <div>
            <label for="Todo">Todo Name:</label>
            <input type="text" name="Todo" placeholder="name" value="{{ $todo->Todo }}">

        </div>

        <div>
            <label for="completed">Completed?</label>
            <input type="checkbox" id="completed" name="completed" {{ $todo->completed ? 'checked' : '' }}>
        </div>

        <div>
            <input type="submit" value="Update Todo">
        </div>
        
    </form>
</body>
</html>
