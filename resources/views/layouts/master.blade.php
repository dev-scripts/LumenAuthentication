<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gender Equality and Social Inclusions (GESI)</title>

    <link href="{{url('favicon.ico')}}" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <!-- all vendor css -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" rel="stylesheet">

    <link href="{{url('lib/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- all our css -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">

    <!-- TimePicker Css -->
    <link href="{{url('css/TimePicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <style type="text/css">
    
        input,select{
            border: 1px solid #999!important;
        }
        .appendedDiv {
            background: rgba(280, 285, 225, 0.8) none repeat scroll 0% 0%;
            position: absolute;
            width: 210px;
            height: 100px;
            overflow: scroll;
            z-index: 9;
            opacity: 1;
        }

        .appendedDiv ul {
            list-style: none;
        }        

        .pointer{
            cursor: pointer;
        }
        .showFormBlock {
            display: block;
        }
        .hideFormBlock {
            display: none;
        }
        .regFormTable{
            width: 100%;
        }

        .regFormTable thead tr th{
            padding: 5px;
        }

        .regFormTable tbody tr td{
            padding: 5px;
        }

        .stpForm {
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 5px;
        }

    </style>
</head>
<body>
    <div class="color-line"></div>
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('dashboard')}}">  Lumen Auth</a>
            </div>
            @if (!Auth::guest())
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Menu1</a></li>
                    <li><a href="#">Menu2</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu3<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('logOut')}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
        @endif
    </nav>
    <div class="wrapper container">
        <div class="row">
            @section('content')
        </div>
        @show
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{url('lib/bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>
    @show
    <footer class="blue navbar-fixed-bottom1">
        <hr />
        <p style="padding-bottom: 2px; margin-bottom: 2px;"> Copyright © {{date('Y')}} <a href="http://prakashbhandari.com.np">Prakash Bhandari </a>. All rights reserved </p>
        Developed by : <a href="http://www.prakashbhandari.com.np" target="_blank">Prakash Bhandari</a>
    </footer>
</body>
</html>