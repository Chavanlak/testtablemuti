<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <h>Checking Member</h>
    @foreach($u as $name)
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" placeholder="name">
        <label for="nameInput">name : {{$name->fname." ".$name->lname}}</label>

    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="room" placeholder="room">
        <label for="roomInput">room : {{$name->no}}</label>
    </div>
    @endforeach

    {{-- <a href="#"></a>
    <button type="button" class="btn btn-primary">Submit</button> --}}
    <button onclick="location.href='http://www.google.com'" type="button" class="btn btn-primary">
       Submit</button>
</body>
</html>