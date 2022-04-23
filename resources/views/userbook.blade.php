@extends ("layouts.userlogin")
@section ("userbook")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/userbook.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
            <form>
    <div class="form1">
      <h3 class="text-center h3">BOOKINGS</h3>
      
  <div class="row mb-3">
  <label for="" class="col-sm-4 col-form-label lab">Select Place</label>
  <div class="col-sm-7">
  <select class="form-select inp" name="place" aria-label="Default select example">
  
</select>
    
    </div>
    </div>
  
  <div class="row mb-3">
    <label for="" class="col-sm-4 col-form-label lab">No. of Persons</label>
    <div class="col-sm-7">
    <input type="text" class="form-control inp" id="inputEmail3">
    </div>
    </div>
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-4 col-form-label lab ">No. of days</label>
    <div class="col-sm-7">
      <input type="text" class="form-control inp" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-4 col-form-label lab ">No. of nights</label>
    <div class="col-sm-7">
      <input type="text" class="form-control inp" id="inputEmail3">
    </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary  btn1">BOOK</button>
                
            </div>
        </div>
    </div>
    
</body>
</html>

@endsection