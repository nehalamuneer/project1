@extends ("layouts.master")
@section ("loginpage")
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
<link rel="stylesheet" href="/css/login.css">
</head>
<body  style="background-image:url({{('images/tour.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
        @endforeach
        @endif
                
                <form action="{{url('loginpage')}}" method="post" name="myform" >
                    @csrf
                    <div class="form1" style="width:400px;height:500px">
                    <h1 align="center">LOGIN</h1>
                    <!-- <button type="button" class="btn btn-primary btn2 ms-3"><a href="">ADMIN</a></button>
                    <button type="button" class="btn btn-primary btn2 ms-3"><a href="">USER</a></button>
                    <button type="button" class="btn btn-primary btn2 ms-3"><a href="">AGENCY</a></button> -->
                    <input type="email" id="input1" name="email" class="form-control mt-5 mb-3 form2" placeholder="Enter Email">
                    <span id="s1" class="text-danger mb-2"></span>
                    <input type="password" id="input2" name="pass" class="form-control mb-3  form2" placeholder="Enter Password" >
                    <span id="s2" class="text-danger"></span>
                    
                    <button type="submit" class="btn btn-lg btn-success mt-5 btn1" onclick="return validatelogin()">LOGIN</button>
                     @if(isset($message))
                        <p>{{$message}}</p>
                     @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script>
        function validatelogin(){
            status = 1;
            
            email = document.getElementById("input1");
            password = document.getElementById("input2");
            
            
          
             if(email.value == ""){
                email.style.borderColor = "red";
                s1.style.display = 'block';
                s1.style.color = "red";
                s1.innerHTML = "please enter email id";
                status = 0;
            }
            else{
               
               email.style.borderColor = 'black';
                 s1.style.display = "none";
                 status = 1;
             }
             if(password.value == ""){
                password.style.borderColor = "red";
                s2.style.display = 'block';
                s2.style.color = "red";
                s2.innerHTML = "please enter your password";
                status = 0;
            }
            else{
               
               password.style.borderColor = 'black';
                 s2.style.display = "none";
                 status = 1;
             }
             
            
            if(status == 0){
                return false;
            }
            
            
        }
    </script>
    
</body>
</html>
@endsection