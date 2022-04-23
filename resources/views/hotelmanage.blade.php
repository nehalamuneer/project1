@extends ("layouts.agencylogin")
@section ("managehotel")
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/hotel.css">
</head>
<body>
<form action="{{url('hotelview')}}" method="post">
    <div class="form1">
      <h3 class="text-center h3">HOTEL BOOKING</h3>
  <div class="row mb-3 mt-5">
    <label for="inputEmail3" class="col-sm-4 col-form-label lab">Hotel Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control inp" id="input1" name="hotel">
      <span id="s1"></span>
    </div>
  </div>
  <div class="row mb-3 ">
    
    <label for="" class="col-sm-4 col-form-label lab">Place</label>
    <div class="col-sm-7">
    <input type="text" class="form-control inp mt-4" id="input2" name="place">
    <span id="s2"></span>
    

    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-4 col-form-label lab ">Image</label>
    <div class="col-sm-7">
      <input type="file" class="form-control inp" id="input3" name="img">
      <span id="s3"></span>
    </div>
  </div>
  <div class="row mb-3 ">
    
    <label for="" class="col-sm-4 col-form-label lab">Amount per 1 day and 1 night</label>
    <div class="col-sm-7">
    <input type="number" class="form-control inp mt-4" id="input4" name="amt">
    <span id="s4"></span>
    

    </div>
  </div>
  <div class="row mb-3 ">
    <label for="" class="col-sm-4 col-form-label lab">Type</label>
    <div class="col-sm-7">
    
    <select class="form-select mt-3" aria-label="Default select example" id="input5" name="type">
  <option selected>select type</option>
  <option value="1">AC</option>
  <option value="2">NON AC</option>
  
</select>
</div>
  </div>
  <button type="submit" class="btn btn-primary  btn1" onclick="return validate_hotel()">SUBMIT</button>
  @if(isset($message))
  <p>{{$message}}</p>
  @endif
  
</body>

<script>

function validate_hotel(){
            status = 1;
            hotelname = document.getElementById("input1");
            place = document.getElementById("input2");
            amount=document.getElementById("input4");
            
            
            if(hotelname.value == ""){
                hotelname.style.borderColor = "red";
                s1.style.display = 'block';
                s1.style.color = "red";
                s1.innerHTML = "**please enter hotelname";
                status = 0;
            }
     
 else{
                hotelname.style.borderColor = 'black';
                s1.style.display = "none";
                status = 1;
            }

            if(place.value == ""){
              place.style.borderColor = "red";
                s2.style.display = 'block';
                s2.style.color = "red";
                s2.innerHTML = "**please enter place";
                status = 0;
            }
            else{
               
              place.style.borderColor = 'black';
                s2.style.display = "none";
                status = 1;
            }
            if(amount.value == ""){
                amount.style.borderColor = "red";
                s4.style.display = 'block';
                s4.style.color = "red";
                s4.innerHTML = "**please enter the amount";
                status = 0;
            }
            else{
               
               amount.style.borderColor = 'black';
                 s4.style.display = "none";
                 status = 1;
             }
             
            
            if(status == 0){
                return false;
            }
            
            
        }

</script>
</html>

@endsection