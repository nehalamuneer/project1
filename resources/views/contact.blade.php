@extends ("layouts.master")
@section ("contactpage")
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
<link rel="stylesheet" href="/css/contact.css">
</head>
<body style="background-image:url({{('images/signbg.jpg')}});">
    <div class="container">
        <div class="row">
        <h1>CONTACT US</h1>
        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <img src="{{ asset('images/contactus.png')}}" alt=""width="500px" height="500px">

            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 contact" style="width:400px;height:500px">
                <form action="">
                
                    <div class="form1 mb-5">
                        <input type="text" class="form-control mb-5 mt-5 contact1" placeholder="Name">
                        <input type="email" class="form-control mb-5 contact1" placeholder="Email">
                        
                        <textarea name="" id="" cols="3" rows="3" class="form-control mb-5 contact1" placeholder="Message"></textarea>
                        <button type="submit" class="btn btn-outline-primary btn1">Send</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
@endsection