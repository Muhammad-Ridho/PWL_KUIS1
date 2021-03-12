@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="tm-white-box">
				<h1>halaman pegawai</h1>
				<table border="1">
					<tr>
						<th>nama</th>
						<th>alamat</th>
						<th>telp</th>
					<tr>
					@foreach($pegawai as $b)
					<tr>
						<td>{{ $b->nama}}</td>
						<td>{{ $b->alamat}}</td>
						<td>{{ $b->telp}}</td>
					<tr>
					@endforeach
				</table>				
			</div>		  			  	
        </div>
</div>

@endsection