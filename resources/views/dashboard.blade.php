@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1>Congratulations</h1>
                    <p class="lead">
                        You are successfully login into the application using Lumen Auth.
                        <br> Thank You :)
                    </p>
                </div>

            </div>

            <div class="col-md-7">
                <div id="login_perday" > &nbsp;</div>
                </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
    </script>
@stop
