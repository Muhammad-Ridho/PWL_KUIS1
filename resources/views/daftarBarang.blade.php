@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="tm-white-box">
                <h1>Halaman Barang</h1>
				<table border="1">
					<tr>
						<th>title</th>
						<th>slug</th>
						<th>link image</th>
						<th>content</th>
					<tr>
					@foreach($barang as $b)
					<tr>
						<td>{{ $b->title}}</td>
						<td>{{ $b->slug}}</td>
						<td>{{ $b->image}}</td>
						<td>{{ $b->content}}</td>

					<tr>
					@endforeach
				</table>
			</div>		  			  	
        </div>
</div>

@endsection