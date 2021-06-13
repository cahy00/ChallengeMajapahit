@extends('templates.main')

@section('title')
		Hadiah
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
					<hr>
					<div class="row">
						<form action="{{route('gift.index')}}" method="GET">
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
								<td>Status</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach ($gift as $item)
							<tr>
								<td>{{ $loop->iteration + ($gift->perPage() * ($gift->currentPage() - 1)) }}</td>
								<td>{{ $item->name }}</td>
								<td>{{ $item->points }}</td>
								<td><span class="badge @if($item->status == 'available') bg-success @else bg-danger @endif">{{$item->status}}</span></td>
								<td>
									<a href="" class="btn @if($item->status == 'available') btn-warning @else disable @endif">Claim</a>
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