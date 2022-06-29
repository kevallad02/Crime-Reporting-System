<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/table.css">
</head>
	
<body>
<div class="wrapper" style="background-image: url('img/bg1.jpg');">
			<div class="inner">
			<form method="POST" action="{{route('todo.store')}}" class="center">
			@csrf
					<p><h3>Enter Details</h3></p>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="fname">First Name</label>
							<input type="text" class="form-control" name="fname" required>
						</div>
						<div class="form-wrapper">
							<label for="lname">Last Name</label>
							<input type="text" class="form-control" name="lname" required>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" required>
					</div>
					<div class="form-wrapper">
						<label for="phone">Phone Number</label>
						<input type="tel" class="form-control" name="phone" required>
					</div>
                <button>submit</button>
			</form>

			<br>
<br>
<table class="table table-hover center css-serial">
<br>
    <thead class = "table-primary center" >
<tr>
<th>Sr No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<tr>
@foreach($todos as $todo)
<td></td>
<td>{{$todo->fname}}</td>
<td>{{$todo->lname}}</td>
<td>{{$todo->email}}</td>
<td>{{$todo->phone}}</td>
<td><a href="{{route('todo.edit',$todo->id)}}">Edit</a></td>
<td>
<form method="post" action="{{route('todo.destroy',$todo->id)}}">
@csrf
@METHOD('DELETE')
<input type="submit" value="Delete" name='submit'>

</form>
</td>
</tr>
</tbody>
<tr>
@endforeach
</tr>
</table>
</html>
