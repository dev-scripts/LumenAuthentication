@extends('layouts.master')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			 @include('flash::message')
				<div class="panel-heading">
				</div>
				<div class="panel-body">
				<form action="/verification-code" method="POST">
					<label>Please Enter The Verifcation Code Sent In Your Mail</label>
					<input type="text" name="verification_code" class="form-control">
					<br/>
					 <button type="submit" class="btn btn-primary save"s>{{trans('buttons.submit')}}</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

