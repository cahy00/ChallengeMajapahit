
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
		<div class="col-md-4">
			<div class="card  bg-primary" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Total User Yang Terdaftar</h5>
					<p class="card-text">{{$user->count()}}</p>
					<a href="/user" class="btn btn-success">Lihat selengkapnya</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-success" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Total Barang Yang Terdaftar</h5>
					<p class="card-text">{{$merchandise->count()}}</p>
					<a href="/merchandise" class="btn btn-danger">Lihat selengkapnya</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card  bg-warning" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Transaksi Yang Terdaftar</h5>
					<p class="card-text">{{$transaction->count()}}</p>
					<a href="/transaction" class="btn btn-primary">Lihat selengkapnya</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection