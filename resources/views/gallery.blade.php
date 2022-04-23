@extends ("layouts.master")
@section ("gallerypage")
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
<link rel="stylesheet" href="/css/gallery.css">
</head>
<body >
    <div class="container-fluid">
        <div class="row">
            
            
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                   <img src="{{ asset('images/kerala.jpg')}}" class="img-responsive mb-4 mt-5 " alt="" width="300px" height="300px">
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                   <img src="{{ asset('images/tajmahal.jpg')}}" class="img-responsive mb-4 mt-5" alt="" width="300px" height="300px">
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                   <img src="{{ asset('images/malaysia.jpg')}}" class="img-responsive mb-4 mt-5" alt="" width="300px" height="300px">

               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                   <img src="{{ asset('images/delhi.jpg')}}" class="img-responsive mb-4 mt-5" alt="" width="300px" height="300px">
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                   <img src="{{ asset('images/maldives.jpg')}}" class="img-responsive mb-4 mt-5" alt="" width="300px" height="300px">
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                   <img src="{{ asset('images/manali.jpg')}}" class="img-responsive mb-4 mt-5" alt="" width="300px" height="300px">
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
               <img src="{{ asset('images/wayanad.webp')}}" class="img-responsive mb-4 mt-5" alt="" width="300px" height="300px">
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
               <img src="{{ asset('images/dubaiburj.jpg')}}" class="img-responsive mb-4 mt-5" alt="" width="300px" height="300px">
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
               <img src="{{ asset('images/munnar.jpg')}}" class="img-responsive  mt-5" alt="" width="300px" height="300px">
               </div>
               

            
        </div>
    </div>
    
</body>
</html>
@endsection