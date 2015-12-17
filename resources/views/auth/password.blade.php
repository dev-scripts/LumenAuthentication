@extends('layouts.master')

@section('content')
    <style>
        body{
            background: url({{asset('img/security-on-keyboard.jpg')}});
            background-color: #444;
            background-size:   cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        footer.navbar-fixed-bottom1 {
            margin-top: 0px;
        }
        .alert , .alert-danger ul li { list-style: none;}
    </style>
<div class="container-fluid">
	<div class="row">
        <br /><br /><br />
        <br /><br /><br />
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="opacity: .9">
				<div class="panel-heading">Reset Password</div>
				<div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Send Password Reset Link
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
