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
  <h2>Vehicle Reservation Form </h2>
  <form role="form" method="GET" action="freeVehicle">
		<br><br>
		Enter Your Email Address:<br>
		<input type="text" name="email"></input><br><br>
		Select Destination:<br>
		<select name="destination">
		@foreach($data as $route)
			<option>{{ $route->destination}}</option>
			
		@endforeach
		</select>
		<br><br>
		Enter Start Date:<br>
		<input type="date" name="start_date" min="2000-01-02"><br><br>
		
		Enter End Date:<br>
		<input type="date" name="end_date" min="2000-01-02"><br><br>
		Enter number of passengers:<br>
		<input type="text" name="capacity"></input><br><br>
		Enter Vehicle Type:<br>
		<select name="type">
			<option>car</option>
			<option>van</option>
			<option>bus</option>
		</select>
		<br><br>
    <button type="submit" class="btn btn-default">Check</button>
  </form>
  
</div>

</body>
</html>
