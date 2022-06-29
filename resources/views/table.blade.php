<html>
<head>

</head>
<body>
<form method="POST" action="{{route('todo.store')}}">
@csrf
<table class="css-serial">
<tr>
<th>Sr No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone Number</th>
</tr>
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
<input type="submit" value="Delete" name=' submit'>

</form>
</td>
<tr>
@endforeach
</tr>
</table>

</body>
</html>