@extends ("layouts.agencylogin")
@section ("vehiclepage")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/vehicle.css">
</head>
<body>
<form>
    <div class="form1">
      <h3 class="text-center h3 ">VEHICLE BOOKING</h3>
      <div class="row mb-3">
    <label for="" class="col-sm-4 col-form-label lab">Vehicle type</label>
    <div class="col-sm-7">
    
    <select class="form-select mt-3" aria-label="Default select example">
  <option selected>select vehicle</option>
  <option value="1">Bus</option>
  <option value="2">Train</option>
  <option value="3">Flight</option>
  <option value="3">Car</option>
  <option value="3">Traveller</option>
</select>
</div>
  </div>
  <div class="row mb-3 ">
    
    <label for="" class="col-sm-4 col-form-label lab">Amount </label>
    <div class="col-sm-7">
    <input type="number" class="form-control inp mt-4" id="inputEmail3">
    

    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-4 col-form-label lab ">Image</label>
    <div class="col-sm-7">
      <input type="file" class="form-control inp" id="inputEmail3">
    </div>
  </div>
  <button type="submit" class="btn btn-primary  btn1">SUBMIT</button>
  
  </div>
</body>
</html>

@endsection