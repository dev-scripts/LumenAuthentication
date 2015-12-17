@extends('layouts.master')

@section('content')
    <style>
        body{
            background: url({{url('img/gesi.jpg')}});
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
    <br /><br /><br />
    <br /><br /><br />
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default" style="opacity: .9">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                        @if (Session::has('test'))
                            <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('flash_notification.message') }}
                            </div>
                        @endif
                        <form class="form-horizontal"  role="form" method="POST" action="{{ url('login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Password  </label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> &nbsp; Remember Me
                                    </label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>
								{{--<a class="btn btn-link" href="{{ url('/password/email') }}">तपाइले पाशवड बिर्सनु भयो ?</a>--}}
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop


