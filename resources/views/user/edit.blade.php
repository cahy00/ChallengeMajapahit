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
					<h3 class="card-title">User Create</h3>
				</div>
				<div class="card-body">
					<form action="{{route('user.update', $user->id)}}" method="POST">
						@csrf
						@method('put')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" name="email" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}" placeholder="Masukkan Email" value="{{$user->email}}">
									<span class="error invalid-feedback">{{$errors->first('email')}}</span>
								</div>
								{{-- <div class="form-group">
									<label for="">Password</label>
									<input type="password" name="password" class="form-control {{$errors->first('password') ? 'is-invalid' : ''}}" placeholder="Masukkan Password" value="{{$user->password}}">
									<span class="error invalid-feedback">{{$errors->first('password')}}</span>
								</div> --}}
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" name="name" class="form-control {{$errors->first('name') ? 'is-invalid' : ''}}" placeholder="Masukkan Nama" value="{{$user->name}}">
									<span class="error invalid-feedback">{{$errors->first('name')}}</span>
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