<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Deatails Of Vehicles</h2>
          
  <table class="table">
    <thead>
      <tr>
        <th>Registration Number</th>
        <th>Type</th>
		<th>Model</th>
		<th>Seating Capacity</th>
        
      </tr>
    </thead>
    <tbody>
	@foreach ($data as $vehicle)
      <tr class="success">
        <td>{{$vehicle->registration_no}}</td>
        <td>{{$vehicle->type}}</td>
		<td>{{$vehicle->model}}</td>
		<td>{{$vehicle->capacity_seating}}</td>
        
      </tr>
     @endforeach 
    </tbody>
  </table>
</div>

</body>
</html>
