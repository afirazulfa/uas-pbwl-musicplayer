@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Artis</h3>
<form method="post" action="{{ url('/artist/'.$row->artist_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>NAMA ARTIS</th>
			<td><input type="text" name="artist_name" value="{{ $row->artist_name }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection