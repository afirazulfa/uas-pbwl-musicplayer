@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Track</h3>
<form method="post" action="{{ url('/track/'.$row->track_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>NAMA ALBUM</th>
			<td><input type="text" name="track_name" value="{{ $row->track_name }}"></td>
		</tr>
		<tr>
			<th>NAMA ARTIS</th>
			<td>
				<select name="album_id">
					@foreach($lst as $rows)
					<option value="{{ $rows->album_id }}" >{{ $rows->album_name }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection