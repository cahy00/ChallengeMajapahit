@extends('templates.main')

@section('title')
		Barang
@endsection

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
					<form action="{{route('merchandise.index')}}" method="GET">
						<div class="col-md-6">
							<div class="input-group">
									<input type="text" name="keyword" class="form-control" value="{{Request::get('keyword')}}" placeholder="Cari Nama" >
									<button type="submit" class="btn btn-success">Cari</button>
							</div>
						</div>
					</form>
					<br>
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
									<a href="{{route('merchandise.edit', $item->id)}}" class="btn btn-warning">Edit</a>
									<a href="{{route('merchandise.destroy', $item->id)}}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus??')" >Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					{{$data->appends(Request::all())->links()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection