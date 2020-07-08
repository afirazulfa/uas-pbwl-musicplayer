@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data</h3>
<form method="post" action="{{ url('/artist') }}">
	@csrf
	<table>
		<tr>
			<th>NAMA ARTIS</th>
			<td><input type="text" name="artist_name"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
@endsection