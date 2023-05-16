<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/cfb677e60e.js" crossorigin="anonymous"></script>

  </head>
  <body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}"><i class="fa-solid fa-house-chimney" style="color: #000000;"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('movies')}}">Movies</a>
            </li>
            
        </ul>
        </div>
    </div>
    </nav>

    <div class="container-fluid">
        <div class="row vh-100 header align-items-center">
            <div class="col-12 text-center text-black">
                <h1 class="display-1">Movies</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            @foreach ($movies as $items)
              <div class="col-12 col-md-4 mt-5">
                <div class="card">
                    <img src="{{$items['url']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$items['name']}}</h5>
                        <p class="card-text">{{$items['genre']}}</p>
                        <p class="card-text">Director: {{$items['director']}}</p>
                        <p class="card-text">Duration: {{$items['duration']}}</p>
                        <a href="{{route('info' , ['id'=>$items['id']])}}" class="btn btn-outline-light">Info</a>
                    </div>
                </div>
              </div>  
            @endforeach
            
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>