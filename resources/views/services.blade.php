@extends ("layouts.master")
@section ("servicespage")
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
<link rel="stylesheet" href="/css/services.css">
</head>
<body >
    <div class="container-fluid">
        <div class="row">
        <h1 id="head1" >We Provide</h1>
            <div class="col-lg-4">
       
       <div class="card mb-5 mt-5 card2" style="width: 18rem;">
  <img src="{{ asset('images/foodanddrink.jpg')}}" class="card-img-top" alt="..." width="100px" height="100px" >
  <div class="card-body">
    <h5 class="card-title card1">Food And Drinks</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
  </div>
</div>
</div>
<div class="col-lg-4">
       
       <div class="card mb-5 mt-5 card2" style="width: 18rem;">
  <img src="{{ asset('images/travell.png')}}" class="card-img-top" alt="..." width="100px" height="100px" >
  <div class="card-body">
    <h5 class="card-title card1">Fatest Travel</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   
  </div>
</div>
</div>
<div class="col-lg-4">
       
       <div class="card mb-5 mt-5 card2" style="width: 18rem;">
  <img src="{{ asset('images/hotel.png')}}" class="card-img-top" alt="..." width="100px" height="100px" >
  <div class="card-body">
    <h5 class="card-title card1">Affordable Hotels</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
</div>
<div class="col-lg-4">
       
       <div class="card mb-5 card2" style="width: 18rem;">
  <img src="{{ asset('images/234.jpg')}}" class="card-img-top" alt="..." width="100px" height="100px" >
  <div class="card-body">
    <h5 class="card-title card1">Safety Guide</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
</div>
<div class="col-lg-4">
       
       <div class="card mb-5 card2" style="width: 18rem;">
  <img src="{{ asset('images/world.jpg')}}" class="card-img-top" alt="..." width="100px" height="100px" >
  <div class="card-body">
    <h5 class="card-title card1">Around The World</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   
  </div>
</div>
</div>
<div class="col-lg-4">
       
       <div class="card mb-5 card2" style="width: 18rem;">
  <img src="{{ asset('images/adventure.png')}}" class="card-img-top" alt="..." width="100px" height="100px" >
  <div class="card-body">
    <h5 class="card-title card1">Adventures</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
</div>

       </div>
        </div>
    </div>
</body>
</html>
@endsection