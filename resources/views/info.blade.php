<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/cfb677e60e.js" crossorigin="anonymous"></script>

  </head>
  <body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg ">
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

      <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-center my-5 mt-5">
                <img src="{{$item['url']}}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-6 my-5 pt-5">
                <h3 class="text-center">{{$item['name']}}</h3>
                <h4 class="text-center">By {{$item['director']}}</h4>
                <p>Genre: {{$item['genre']}}</p>
                <p>Description: {{$item['desc']}}</p>
                <p>Duration: {{$item['duration']}}</p>
                <a href="{{route('movies')}}" class="btn btn-outline-light">Torna Indietro</a>
            </div>
        </div>
      </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>