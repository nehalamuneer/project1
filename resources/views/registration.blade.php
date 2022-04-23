@extends ("layouts.master")
@section ("registrationpage")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="/css/register.css">
</head>
<body style="background-image:url({{('images/tour.jpg')}});">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <form action="{{url('registrationpage')}}" method="post" name="myform" > 
           @csrf
                <div class="form1 frm1" style="width:600px;height:800px">
                <h1 align="center" class="mt-1 ">SIGN UP</h1>
                <input type="text" name="fname" id="input1" class="form-control mb-3 mt-5 form2" placeholder="first name">
                <span id="s1" class="text-danger"></span>
                <input type="text" name="lname" id="input2" class="form-control mb-3  form2" placeholder="last name">
                <span id="s2" class="text-danger"></span>
                <input type="number" name="mobnum" id="input3" class="form-control mb-3  form2" placeholder="Enter mobile number">
                <span id="s3" class="text-danger"></span>
                <input type="email" name="email" id="input4" class="form-control mb-3  form2" placeholder="Enter email " >
                <span id="s4" class="text-danger"></span>
                <input type="password" name="pass" id="input5" class="form-control mb-3 form2" placeholder="Enter password">
                <span id="s5" class="text-danger"></span>
                <input type="password" name="cpass" id="input6" class="form-control mb-3 form2" placeholder="Enter confirm password">
                <span id="s6" class="text-danger"></span>
                <button type="submit" class="btn btn-primary mx-auto mt-5 btn1" onclick="return validate_login()">SIGN UP</button>
                <button type="reset" class="btn btn-primary mx-auto mt-5 btn2">RESET</button>
                @if(isset($message))
        <p>{{$message}}</p>
        @endif
            
            </div>
            </form>
        </div>
    </div>
</div>
<script>
  
  function validate_login(){
            status = 1;
            firstname = document.getElementById("input1");
            lastname = document.getElementById("input2");
            mobile=document.getElementById("input3");
            email = document.getElementById("input4");
            password = document.getElementById("input5");
            confpassword = document.getElementById("input6");
            
            if(firstname.value == ""){
                firstname.style.borderColor = "red";
                s1.style.display = 'block';
                s1.style.color = "red";
                s1.innerHTML = "please enter firstname";
                status = 0;
            }
     
 else{
                firstname.style.borderColor = 'black';
                s1.style.display = "none";
                status = 1;
            }

            if(lastname.value == ""){
              lastname.style.borderColor = "red";
                s2.style.display = 'block';
                s2.style.color = "red";
                s2.innerHTML = "please enter lastname";
                status = 0;
            }
            else{
               
              lastname.style.borderColor = 'black';
                s2.style.display = "none";
                status = 1;
            }
            if(mobile.value == ""){
                mobile.style.borderColor = "red";
                s3.style.display = 'block';
                s3.style.color = "red";
                s3.innerHTML = "please enter mobile number";
                status = 0;
            }
            else{
               
               mobile.style.borderColor = 'black';
                 s3.style.display = "none";
                 status = 1;
             }
             if(email.value == ""){
                email.style.borderColor = "red";
                s4.style.display = 'block';
                s4.style.color = "red";
                s4.innerHTML = "please enter email id";
                status = 0;
            }
            else{
               
               email.style.borderColor = 'black';
                 s4.style.display = "none";
                 status = 1;
             }
             if(password.value == ""){
                password.style.borderColor = "red";
                s5.style.display = 'block';
                s5.style.color = "red";
                s5.innerHTML = "please enter your password";
                status = 0;
            }
            else{
               
               password.style.borderColor = 'black';
                 s5.style.display = "none";
                 status = 1;
             }
             if(confpassword.value == ""){
                confpassword.style.borderColor = "red";
                s6.style.display = 'block';
                s6.style.color = "red";
                s6.innerHTML = "please enter confirm password";
                status = 0;
            }
            else{
               
              confpassword.style.borderColor = 'black';
                 s6.style.display = "none";
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