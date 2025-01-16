<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Document</title>
    <style>
        body{
            background-image:url('image/bg.jpg');
            background-size:cover;
            background-attachment: fixed;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }
       .container{
        background: rgb(255, 255, 255,0.8)
        padding:20px;
        border-radius:15px;
        text-align:center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
       }
       h1{
        font-size: 18cm;
        /* font-family: Arial, Helvetica, sans-serif; */
        color:black;
        margin-bottom: 20px;
       }
       .form-control{
        margin-bottom: 15px;

       }
       .btn.primary{
        width: 100%;
       }
    </style>
</head>

<body>
    <div class="container">

    
    <div  class="form-floating mb-3 ">
        <h>Checking Member</h>
    </div>
 
    @foreach($memberList as $member)
    <div class="form-floating mb-3 ">
        <input type="text" class="form-control">
        <label for="memIdInput"> {{$member->memberId}}</label>
    </div>
    <div class="form-floating mb-3 ">
        <input type="text" class="form-control" id="name" placeholder="name">
        <label for="nameInput">name : {{$member->fname." ".$member->lname}}</label>

    </div>
    <div class="form-floating mb-3 ">
        <input type="text" class="form-control" id="room" placeholder="room">
        <label for="roomInput">room :</label>
    </div>
    @endforeach

    {{-- <a href="#"></a>
    <button type="button" class="btn btn-primary">Submit</button> --}}
    <div class="form-floating mb-3 ">
        <button onclick="#" type="button" class="btn btn-primary  ">
            Submit</button>
    </div>
</div>
</body>

</html>