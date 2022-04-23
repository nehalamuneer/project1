@extends("layouts.agencylogin")
@section("viewpackage")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
    <h2 align="center" class="mt-5">USER DETAILS</h2>
<table class="table table-bordered mt-5" id="table1" width="400px">
  <thead>
    <tr class="table-danger">
    <th scope="col">#</th>
      <th scope="col">packagename</th>
      <th scope="col">Place</th>
      <th scope="col">Persons</th>
      <th scope="col">Hotel</th>
      <th scope="col">Description</th>
      <th scope="col">No of days</th>
      <th scope="col">No of nights</th>
      <th scope="col">Image</th>
      <th scope="col">Amount</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($packagedata as $pack)
      <tr>
          <td scope="row">{{$pack->packagename}}</td>
          <td>{{$pack->place}}</td>
          <td>{{$pack->person}}</td>
          <td>{{$pack->hotel}}</td>
          <td>{{$pack->description}}</td>
          <td>{{$pack->numberofdays}}</td>
          <td>{{$pack->numberofnights}}</td>
          <td><img src="/storage/images/{{$pack->image}}" height="150" height="150" alt=""></td>
          <td>{{$pack->amount}}</td>
      </tr>
      @endforeach
      
  </tbody>
  </div>
  </div>
  </div>
</body>
</html>

@endsection