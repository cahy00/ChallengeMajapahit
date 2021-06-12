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
					<h3 class="card-title">User</h3>
				</div>
				<div class="card-body">
					<a href="{{route('user.create')}}" class="btn btn-primary float-right">Tambah Data</a>
					<hr>
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
							@foreach ($user as $item)
							<tr>
								<td>{{ $loop->iteration + ($user->perPage() * ($user->currentPage() - 1)) }}</td>
								<td>{{ $item->name }}</td>
								<td>{{ $item->points }}</td>
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
					{{$user->links()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection