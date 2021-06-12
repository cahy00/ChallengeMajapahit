@extends('templates.main')

@section('style')
<style>
	.container{
		margin-bottom: 10px;

	}

	
</style>
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md">
			<div class="card">
				<div class="card-header bg-primary">
					<h3 class="card-title">Barang</h3>
				</div>
				<div class="card-body">
					@include('alert.success')
					<a href="{{route('merchandise.create')}}" class="btn btn-primary float-right">Tambah Data</a>
					<hr>
					<table class="table table-bordered">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama Barang</td>
								<td>Harga</td>
								<td>Stock</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach ($data as $item)
							<tr>
								<td>{{ $loop->iteration + ($data->perPage() * ($data->currentPage() - 1)) }}</td>
								<td>{{ $item->name }}</td>
								<td>{{ $item->price }}</td>
								<td>{{ $item->stock }}</td>
								<td>
									<a href="" class="btn btn-warning">Edit</a>
									<a href="" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					{{$data->links()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection