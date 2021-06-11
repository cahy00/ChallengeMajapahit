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
					<form action="">
						<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label for="">User</label>
									<select name="user_id" id="" class="form-control">
										@foreach ($user as $item)
										<option value="{{$item->id}}">{{$item->name}}</option>
										@endforeach
									</select>
								</div>

							</div>
							<div class="col-md-6">

								<div class="form-group">
									<label for="">Barang</label>
									<select name="merchandise_id" id="" class="form-control">
										<option value="">Komputer</option>
									</select>
								</div>

							</div>
						</div>
						<br>
						<table class="table">
							<tr>
								<td>Harga</td>
								<td>Rp 20000000</td>
							</tr>
							<tr>
								<td>Potongan</td>
								<td>Rp 0</td>
							</tr>
						</table>

						<button type="submit" class="btn btn-primary">Process</button>
					</form>
				<div class="card-footer">
					{{-- {{$data->links()}} --}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection