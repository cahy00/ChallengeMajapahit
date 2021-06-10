@extends('templates.main')

@section('style')
<style>
	.container{
		margin-bottom: 50px;
		font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif

	}

	
</style>
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md">
			<div class="card">
				<div class="card-header bg-primary">
					<h3 class="card-title">Data</h3>
				</div>
				<div class="card-body">
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
							<tr>
								<td>1</td>
								<td>Cahyo</td>
								<td>50</td>
								<td>
									<a href="" class="btn btn-danger">Edit</a>
									<a href="" class="btn btn-warning">Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection