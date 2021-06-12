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
									<label for="">Email</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Password</label>
									<input type="password" name="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" name="name" class="form-control {{$errors->first('name') ? 'is-invalid' : ''}}" placeholder="Masukkan Nama">
									<span class="error invalid-feedback">{{$errors->first('name')}}</span>
								</div>
								<div class="form-group">
									<label for="">Default Point</label>
									<input type="number" name="points" class="form-control">
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