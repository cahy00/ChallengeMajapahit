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
					<h3 class="card-title">User Create</h3>
				</div>
				<div class="card-body">
					<form action="{{route('user.store')}}" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nama Barang</label>
									<input type="text" name="name" class="form-control {{$errors->first('name') ? 'is-invalid' : ''}}" placeholder="Masukkan name">
									<span class="error invalid-feedback">{{$errors->first('name')}}</span>
								</div>
								<div class="form-group">
									<label for="">Price</label>
									<input type="number" name="price" class="form-control {{$errors->first('price') ? 'is-invalid' : ''}}" placeholder="Masukkan price">
									<span class="error invalid-feedback">{{$errors->first('price')}}</span>
								</div>
								<div class="form-group">
									<label for="">Stock</label>
									<input type="number" name="stock" class="form-control {{$errors->first('stock') ? 'is-invalid' : ''}}" placeholder="Masukkan stock">
									<span class="error invalid-feedback">{{$errors->first('stock')}}</span>
								</div>
							</div>
							
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection