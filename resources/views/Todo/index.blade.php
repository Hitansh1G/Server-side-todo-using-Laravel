<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
</head>
<body>
    <h1>Todo</h1>
    <div>
        <div>
            <a href="{{ route('todo1') }}">create a new todo</a>
        </div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>TODO</td>
                <td>COMPLETED?</td>
                <td>edit</td>
                <td>delete</td>
            </tr>
            @foreach ($todo as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Todo }}</td>
                    <td>{{ $item->completed }}</td>
                    <td>
                        <a href="{{ route('todo.edit', ['todo' => $item]) }}">edit</a>
                    </td>
                    <td>
                        <form method="POST" action="  {{ route('todo.destroy', ['todo' => $item]) }} ">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
</body>
</html>
