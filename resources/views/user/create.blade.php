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
					<div class="form-group">
						<label for="">Nama Lengkap</label>
						<input type="text" name="name" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection