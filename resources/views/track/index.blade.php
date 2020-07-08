@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artist') }}">
	@csrf
	<h3>Daftar Track</h3>
	<table>
		<tr>
			<th>ID</th>
			<th>JUDUL LAGU</th>
			<th>ALBUM</th>
			<th>FILE</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr class="cen">
			<td>{{ $row->track_id }}</td>
			<td>{{ $row->track_name }}</td>
			<td>{{ $row->album->artist->artist_name }} - {{ $row->album->album_name }}</td>
			<td>
				<audio controls>
        			<source src="lagu/{{ $row->file }}" type="audio/mp3">
        		</audio>
			</td>
			<td><a id="btn"  href="{{ url('track/'.$row->track_id.'/edit') }}">Edit</a></td>
			<td><form action="{{ url('/track/'.$row->track_id) }}" method="post">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn" >Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
	<a id="tbh" href="{{ url('track/create') }}">Tambah Data</a>
</div>
@endsection