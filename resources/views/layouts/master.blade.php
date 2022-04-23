
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="container-fluid header">
    <div class="row">
    <nav class="navbar navbar-light bg-image  navbar-expand-lg bg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/travel-logo-23045342.jpg')}}" alt="" width="50" height="30" class="d-inline-block align-text-top">
      <b id="b1">TRAVEL WORLD</b>
    </a>
  </div>
 
  <div class="container-fluid  ">
    <a class="navbar-brand " id="a1" href="{{url('/')}}">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav a2">
        <li class="nav-item">
          <a class="nav-link active " id="a2" href="{{url('gallery')}}">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " id="a3" href="{{url('services')}}" tabindex="-1" aria-disabled="true">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " id="a4" href="{{url('contact')}}" tabindex="-1" aria-disabled="true">CONTACT</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active " id="a5" href="{{url('about')}}" tabindex="-1" aria-disabled="true">ABOUT US</a>
          </li>
      </ul>
      
      
    </div>
    <div>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" id="a6" href="{{url('registrationpage')}}">SIGN UP</a></li>
        <li class="nav-item"><a class="nav-link active" id="a7" href="{{url('loginpage')}}">LOGIN</a></li>
      </ul>
    </div>
  </div>
  
  </div>
</nav>
</nav>
    </div>
  </div>
  <!-- footer section -->
  <!-- Footer -->
 
<!-- Footer -->
  

 
</body>
</html>
@yield ("homepage")
@yield ("registrationpage")
@yield ("loginpage")
@yield ("gallerypage")
@yield ("servicespage")
@yield ("contactpage")
@yield ("aboutpage")