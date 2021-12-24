<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('/css/app.css') }}>
    <title>Laravel | Todolist</title>
</head>
<body class="bg-secondary">
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-5">
            <header class="bg-primary p-2 rounded my-2">
                <h1 class="text-white text-center">Laravel Todolist</h1>
                <form action="/add" method="POST" class="d-flex">
                    @csrf
                    <input class="form-control me-2" type="text" name="task" placeholder="Add something awesome">
                    <button class="btn btn-secondary text-primary fw-bold" type="submit">Add</button>
                </form>
            </header>
            @error('task')
                    <div class="p-2 bg-white mb-2 text-danger rounded">{{$message}}</div>
                @enderror
            <main>
                <ul class="list-group list-group-flush rounded">
                    @foreach ($lists as $list)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="text-muted">{{$list['list']}}</span>
                        <div class="d-flex">
                            <a href="/task/{{$list['id']}}/edit" class="btn btn-link text-success">Edit</a>
                            <form action="/delete/{{$list['id']}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-link text-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                  </ul>
            </main>
           </div>
       </div>
    </div>
    <script src={{ asset('/js/app.js') }}></script>
</body>
</html>