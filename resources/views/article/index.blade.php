<head>
	<style type="text/css">
		td,th {
			padding: 5px 10px;
		}
		tr:nth-child(even) {
			background: #ddd;
		}
		tr:nth-child(odd) {
			background: #eee;
		}
	</style>
</head>
<body>
	<br>
	<a href="{{url('article/create')}}">Create Article</a>
	<br>
	<br>
	<table>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Date</th>
			<th>Option</th>
		</tr>
		<?php $no=1; ?>
		@foreach($article as $row)

		<tr>
			<td> {{$no++}} </td>
			<td> {{date('d M Y H:i',strtotime($row->created_at))}} </td>
			<td> {{$row->created_at}} </td>
			<td>
				<a href="{{url('article/show/'.$row->id)}}">Detail</a> | 
				<a href="{{url('article/edit/'.$row->id)}}">Edit</a> | 
				<a href="{{url('article/delete/'.$row->id)}}">Delete</a> 
			</td>
		</tr>

		@endforeach
	</table>

	<br><br>

	@if(Session::has('article'))
		{{Session::get('article')}}
	@endif
</body>
