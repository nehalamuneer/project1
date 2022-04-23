<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/agency.css">
    <title>Document</title>
  </head>
  <body>
  <div class="wrapper">
  <div class="sidebar">
    <h3>travel world</h3>
    <ul>
      <li class="list"><a class="link" href="#">Dashboard</a> </li>
      <li class="list"><a class="link" href="{{url('viewpackage')}}">Manage Packages</a></li>
      <li class="list"><a class="link" href="{{url('packageview')}}">View Packages </a></li>
      <li class="list"><a class="link" href="{{url('viewhotel')}}">Manage Hotels</a></li>
      <li class="list"><a class="link" href="{{url('vehicle')}}">Manage Vehicles</a></li>
      <li class="list"><a class="link" href="{{url('managebook')}}">Manage Bookings</a></li>
      <li class="list"><a class="link" href="{{url('viewuser')}}">View Users</a></li>
      <li class="list"><a class="link" href="#">Logout</a></li>
    </ul>
   </div>
   <div class="main-content">
     <div class="header"></div>
   </div>
  </div>
    

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
@yield ("agencypage")
@yield ("packagepage")
@yield ("managehotel")
@yield ("vehiclepage")

@yield ("viewuser")
@yield ("managebook")
@yield ("viewpackage")