@extends('layouts.app')

@section('content')

<div class="container">

	<h3>Tambah Data</h3>

	<form action="{{ url('/artist') }}" method="POST">
		@csrf
		<table>
			<tr>
				<td>NAME</td>
				<td><input type="text" name="artist_name"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection