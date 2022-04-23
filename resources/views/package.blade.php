@extends ("layouts.agencylogin")
@section ("packagepage")
!<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="/css/pack.css">
  </head>
  <body >
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  
  <form action="{{url('packagepage')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form1">
      <h3 class="text-center h3">CREATE PACKAGE</h3>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-4 col-form-label lab">Package Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control inp" id="input1" name="pname">
      <span id="s1"></span>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-4 col-form-label lab ">Place</label>
    <div class="col-sm-7">
      <input type="text" class="form-control inp" id="input2" name="place">
      <span id="s2"></span>
    </div>
  </div>
  <div class="row mb-3">
    <label for="" class="col-sm-4 col-form-label lab">No. of Persons</label>
    <div class="col-sm-7">
    <input type="text" class="form-control inp" id="input3" name="person">
    <span id="s3"></span>
    </div>
    </div>

    <div class="row mb-3">
    <label for="" class="col-sm-4 col-form-label lab">Hotel</label>
    <div class="col-sm-7">
    
    <select class="form-select mt-3" aria-label="Default select example" id="input4" name="hotel">
  <option selected>select hotel</option>
  <option value="1">gateway hotel</option>
  <option value="2">abc hotel</option>
  <option value="3">xyz hotel</option>
</select>
<span id="s4"></span>
</div>
  </div>
  <div class="row mb-3">
    
    <label for="" class="col-sm-4 col-form-label lab">Description</label>
    <div class="col-sm-7">
    <textarea  cols="5" rows="3" class="form-control inp" id="input5" name="desc"></textarea>
    <span id="s5"></span>

    </div>
  </div>
  <div class="row mb-3">
    
    <label for="" class="col-sm-4 col-form-label lab">No.of Days</label>
    <div class="col-sm-7">
    <input type="number" class="form-control inp" id="input6" name="days">
    <span id="s6"></span>
    

    </div>
  </div>
  <div class="row mb-3">
    
    <label for="" class="col-sm-4 col-form-label lab">No.of Nights</label>
    <div class="col-sm-7">
    <input type="number" class="form-control inp" id="input7" name="night">
    <span id="s7"></span>
    

    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-4 col-form-label lab ">Image</label>
    <div class="col-sm-7">
      <input type="file" class="form-control inp" id="input8" name="img">
      <span id="s8"></span>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-4 col-form-label lab ">Amount</label>
    <div class="col-sm-7">
      <input type="text" class="form-control inp" id="input9" name="amt">
      <span id="s9"></span>
    </div>
  </div>
  <button type="submit" class="btn btn-primary  btn1" onclick="return validate_packages()">SUBMIT</button>
  @if(isset($message))
  <p>{{$message}}</p>
  @endif
   
  
 
  </div>
</form>

<script>
  function validate_packages(){
            status = 1;
            packagename = document.getElementById("input1");
            place = document.getElementById("input2");
            person=document.getElementById("input3");
            hotel=document.getElementById("input4");
            
            days = document.getElementById("input6");
            night= document.getElementById("input7");
            amount=document.getElementById("input9");
            
            
            if(packagename.value == ""){
              packagename.style.borderColor = "red";
                s1.style.display = 'block';
                s1.style.color = "red";
                s1.innerHTML = "please enter packagename";
                status = 0;
            }
     
           else{
                packagename.style.borderColor = 'black';
                s1.style.display = "none";
                status = 1;
            }

            if(place.value == ""){
              place.style.borderColor = "red";
                s2.style.display = 'block';
                s2.style.color = "red";
                s2.innerHTML = "please enter place";
                status = 0;
            }
            else{
               
              place.style.borderColor = 'black';
                s2.style.display = "none";
                status = 1;
            }
            if(person.value == ""){
                person.style.borderColor = "red";
                s3.style.display = 'block';
                s3.style.color = "red";
                s3.innerHTML = "please enter number of persons";
                status = 0;
            }
            else{
               
              person.style.borderColor = 'black';
                 s3.style.display = "none";
                 status = 1;
             }
             if(hotel.value == ""){
                hotel.style.borderColor = "red";
                s4.style.display = 'block';
                s4.style.color = "red";
                s4.innerHTML = "please enter hotel name";
                status = 0;
            }
            else{
               
               hotel.style.borderColor = 'black';
                 s4.style.display = "none";
                 status = 1;
             }
            
             if(days.value == ""){
                days.style.borderColor = "red";
                s6.style.display = 'block';
                s6.style.color = "red";
                s6.innerHTML = "please enter no of days";
                status = 0;
            }
            else{
               
              days.style.borderColor = 'black';
                 s7.style.display = "none";
                 status = 1;
             }
             if(night.value == ""){
                night.style.borderColor = "red";
                s7.style.display = 'block';
                s7.style.color = "red";
                s7.innerHTML = "please enter no of nights";
                status = 0;
            }
            else{
               
              night.style.borderColor = 'black';
                 s7.style.display = "none";
                 status = 1;
             }
             if(amount.value == ""){
                amount.style.borderColor = "red";
                s9.style.display = 'block';
                s9.style.color = "red";
                s9.innerHTML = "please enter the amount";
                status = 0;
            }
            else{
               
              amount.style.borderColor = 'black';
                 s9.style.display = "none";
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