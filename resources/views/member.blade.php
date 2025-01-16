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
            /* background-image:url('/image/bg.jpg'); */
            background-image: url('{{ asset('/image') }}');
            /* background-image: url('{{ asset('image/re.png') }}'); */
            background-size: auto;
            background-position: center center;
            background-attachment: fixed;
            height: 100vh;
            /* background-color: rgb(235, 224, 165); */
            /* background-size:cover;
            background-attachment: fixed;
            background-position: center;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center; */

        }
       /* .container{
        background: rgb(255, 255, 255,0.8)
        padding:20px;
        border-radius:15px;
        text-align:center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
       } */
   
       /* .form-control{
        margin-bottom: 15px;

       }
       .btn.primary{
        width: 100%;
       } */
    </style>

</head>

<body>
    {{-- <div style="background-image: url('image/bg.jpg'); background-size: cover; background-position: center; padding: 20px;"> --}}
    {{-- </div> --}}
    {{-- <img src="{{asset('/image/bg.jpg')}}" style="width: 200%"> --}}
    <form class="forms-sample" action="/" method="post">
        <div class="card my-3 container " style="top: 50px; " >
        <h5 class="card-header " style="font-family:initial ">Check Member</h5>
        <div class="card-body ">
            {{-- <h5 class="card-title">Check Member</h5> --}}
            <div class="form-group my-2 col-md-4 "style="font-family:initial ">
                <div class="form-group d-flex align-items-center my-2">
                    <label class="form-label">Member Id</label>
                    <input type="text" class="form-control ms-2">
                </div>
                <div class="form-group d-flex align-items-center my-2">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control ms-2">
                </div>
                <div class="form-group d-flex align-items-center my-2">
                    <label class="form-label">Room</label>
                    <input type="text" class="form-control ms-2">
                </div>

            </div>
            @if (@session('success'))
                <div class="text-success">submit successful!</div>
            @endif
            {{-- <input type="text" type="submit"> --}}
            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
            {{-- <a href="#" class="btn btn-primary my-3">submit</a> --}}
            <input value="submit" type="submit"
                class="my-3 btn btn-primary"onclick="return confirm('confirm')">
        </div>
    </div>
</form>
    {{-- @endsession --}}
</body>

</html>
