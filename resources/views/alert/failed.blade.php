@if (session('failed'))
		<div class="alert alert-danger alert-dismissible">
			<button class="close" data-dismiss="alert" area-hidden="true" type="button">x</button>
			{{session('failed')}}
		</div>
@endif