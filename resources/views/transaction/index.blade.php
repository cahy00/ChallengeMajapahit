@extends('templates.main')

@section('title')
		Transaksi
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
					<h3 class="card-title">User</h3>
				</div>
				<div class="card-body">
					@include('alert.success')
					@include('alert.failed')
					<table class="table table-bordered">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama User</td>
								<td>Nama Barang</td>
								<td>Status</td>
								<td>Tgl Transaksi</td>
							</tr>
						</thead>
						<tbody>
							@foreach ($data as $item)
							<tr>
								<td>{{ $loop->iteration + ($data->perPage() * ($data->currentPage() - 1)) }}</td>
								<td>{{ $item->user->name }}</td>
								<td>{{ $item->merchandise->name }}</td>
								<td> <span class="badge @if($item->status == 'success') bg-success @else bg-danger @endif">{{$item->status}}</span></td>
								<td>{{ $item->created_at }}</td>
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

