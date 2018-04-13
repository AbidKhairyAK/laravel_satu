<ul>
	@foreach($errors->all() as $row)
		<li> {{$row}} </li>
	@endforeach
</ul>
<br>
<form action="{{url('article/edit')}}" method="post">
	<input type="hidden" name="id" value="{{$article->id}}">
	<table>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" value="{{$article->title}}"></td>
		</tr>
		<tr>
			<td>Content</td>
			<td><textarea name="content">{{$article->content}}</textarea></td>
		</tr>
		{{csrf_field()}}
		<tr>
			<td></td>
			<td><button type="submit">Submit</button></td>
		</tr>
	</table>
</form>