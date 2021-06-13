@extends('templates.main')

@section('title')
		User
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
					<h3 class="card-title">Hadiah</h3>
				</div>
				<div class="card-body">
					@include('alert.success')
					<a href="{{route('user.create')}}" class="btn btn-primary float-right">Tambah Data</a>
					<hr>
					<div class="row">
						<form action="{{route('user.index')}}" method="GET">
							<div class="col-md-6">
								<div class="input-group">
										<input type="text" name="keyword" class="form-control" value="{{Request::get('keyword')}}" placeholder="Cari Nama" >
										<button type="submit" class="btn btn-success">Cari</button>
								</div>
							</div>
						</form>
					</div>
					<br>
					<table class="table table-bordered">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama</td>
								<td>Points</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach ($gift as $item)
							<tr>
								<td>{{ $loop->iteration + ($gift->perPage() * ($gift->currentPage() - 1)) }}</td>
								<td>{{ $item->name }}</td>
								<td>{{ $item->points }}</td>
								<td>
									{{-- <a href="{{route('gift.edit', $item->id)}}" class="btn btn-warning">Edit</a>
									<a href="{{route('gift.destroy', $item->id)}}" class="btn btn-danger">Delete</a> --}}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					{{$gift->appends(Request::all())->links()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection