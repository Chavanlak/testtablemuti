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
    @foreach($ShowList as $show)
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="memberId" placeholder="memberId">
        <label for="memberIdInput">memberId{{$show->test}}</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" placeholder="name">
        <label for="namne">name </label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="room" id="room" placeholder="room">
        <label for="roomnumber">Room :</label>
    </div>
    @endforeach
    <a href="#"><button>submit</button></a>
</body>
</html>