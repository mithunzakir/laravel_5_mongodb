<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Billing Software</title>

        <link href='/css/bootstrap.css' rel="stylesheet">
        <link href='/css/style.css' rel="stylesheet">                
        <link href="/css/bootstrap-editable.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">                   

            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/"><img style="width: 100px;height: 25px" src="/img/logo.png"></a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}">Home</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                @if (Auth::guest())
                                <li><a href="{{ url('/auth/login') }}">Login</a></li>
                                <li><a href="{{ url('/auth/register') }}">Register</a></li>
                                @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @if (Session::has('success_msg'))
                    <div class="alert alert-success" style="text-align: center; ">{{ Session::get('success_msg') }}</div>
                    @elseif(Session::has('error_msg'))
                    <div class="alert alert-danger" style="text-align: center; ">{{ Session::get('error_msg') }}</div>
                    @endif
                </div>
            </div>

            @yield('content')
        </div>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/bootstrap-editable.min.js"></script>
        <script src="/js/common.js"></script>

    </body>
</html>
