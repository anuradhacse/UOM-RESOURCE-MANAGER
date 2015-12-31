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
  <h2>Deatails Of Lecture Rooms</h2>
          
  <table class="table">
    <thead>
      <tr>
        <th>Room_ID</th>
        <th>Student Capacity</th>
        
      </tr>
    </thead>
    <tbody>
	@foreach ($data as $room)
      <tr class="success">
        <td>{{$room->id}}</td>
        <td>{{$room->capacity}}</td>
        
      </tr>
     @endforeach 
    </tbody>
  </table>
</div>

</body>
</html>
