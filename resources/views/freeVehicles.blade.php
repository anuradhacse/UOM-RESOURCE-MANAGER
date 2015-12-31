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
<h1>Available Vehicles</h1>
<form role="form" method="GET" action="bookingSuccess">
@foreach ($data as $vehicle)
    <div class="radio">
		
      <h3><label><input type="radio" name="vehicle_no" value={{ $vehicle->registration_no }}>{{ $vehicle->registration_no }}</label></h3>
    </div>
    @endforeach
<input type="hidden" name="destination" value=<?php echo $dest?> >
<input type="hidden" name="email" value=<?php echo $email?> >
<input type="hidden" name="start_date" value=<?php echo $start_date?> >
<input type="hidden" name="end_date" value=<?php echo $end_date?> >
<button type="submit" class="btn btn-default">Reserve</button>
  </form>
 
</body>
</html>