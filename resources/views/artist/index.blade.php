@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artist') }}">
	@csrf
	<h3>Daftar Artis</h3>
	<table>
		<tr>
			<th>ID</th>
			<th>NAMA ARTIS</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist_id }}</td>
			<td>{{ $row->artist_name }}</td>
			<td><a id="btn"  href="{{ url('artist/'.$row->artist_id.'/edit') }}">Edit</a></td>
			<td><form action="{{ url('/artist/'.$row->artist_id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
	<a id="tbh" href="{{ url('artist/create') }}">Tambah Data</a>

</div>
@endsection