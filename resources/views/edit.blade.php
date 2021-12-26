<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('/css/app.css') }}>
    <title>Edit list</title>
</head>
<body class="bg-hite">
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-5">
            <header class="bg-white p-2 rounded my-2 shadow-sm">
                <h1 class="text-primary text-center">Edit list</h1>
                <form action="/update/{{$task['id']}}" method="POST" class="d-flex">
                    @csrf
                    @method('put')
                    <input class="form-control me-2" type="text" name="edit" value="{{$task['list']}}">
                    <button class="btn btn-primary text-white fw-bold" type="submit">Edit</button>
                </form>
            </header>
            @error('edit')
                    <div class="p-2 bg-white mb-2 text-danger rounded">{{$message}}</div>
                @enderror
           </div>
       </div>
    </div>
    <script src={{ asset('/js/app.js') }}></script>
</body>
</html>
