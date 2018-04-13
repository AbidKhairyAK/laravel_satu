<ul>
	@foreach($errors->all() as $row)
		<li> {{$row}} </li>
	@endforeach
</ul>
<br>
<form action="{{url('article/create')}}" method="post">
	<table>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>Content</td>
			<td><textarea name="content"></textarea></td>
		</tr>
		{{csrf_field()}}
		<tr>
			<td></td>
			<td><button type="submit">Submit</button></td>
		</tr>
	</table>
</form>