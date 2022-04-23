<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Hello, world!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <link rel="stylesheet" href="/css/user.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-success bg1">
  <div class="container-fluid">
    <a class="navbar-brand a1" id="h1" href="{{url('user')}}">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active a1" id="p1" aria-current="page" href="#">PACKAGES</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active a1" id="b1" href="{{url('userbook')}}">BOOKINGS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active a1" id="b2" href="" >BOOK HOTEL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active a1" id="b1" href="{" >BOOK VEHICLES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active a1" id="f1" href="#" >FEEDBACK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active a1" id="p2" href="#" >PROFILE</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@yield ("userpage")
@yield ("hotelbook")
@yield ("userbook")
