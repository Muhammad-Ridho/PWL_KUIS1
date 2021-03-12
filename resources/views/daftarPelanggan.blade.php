@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="tm-white-box">
				<h1>halaman pelanggan</h1>	
				<table border="1">
					<tr>
						<th>Nama Pelanggan</th>
						<th>Alamat</th>
						<th>No. Telp</th>
					<tr>
					@foreach($pelanggan as $p)
					<tr>
						<td>{{ $p->nama}}</td>
						<td>{{ $p->alamat}}</td>
						<td>{{ $p->telp}}</td>

					<tr>
					@endforeach
				</table>	
			</div>		  			  	
        </div>
</div>

@endsection