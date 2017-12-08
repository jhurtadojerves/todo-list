<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="images/favicon.ico">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid" id="wrapper">
    <div class="row">
        <nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
            <h1 class="site-title"><a href="/"><em class="fa fa-rocket"></em> TODO.LIST</a></h1>

            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>

            <ul class="nav nav-pills flex-column sidebar-nav">
                <li class="nav-item"><a class="nav-link active" href="/"><em class="fa fa-home"></em> Home </a></li>
                <li class="nav-item"><a class="nav-link " href="/todos"><em class="fa fa-address-book-o"></em> My ToDos</a></li>
            </ul>
            @auth
                <a href="#" class="logout-button"><em class="fa fa-sign-out"></em> Logout</a>
            @else
                <a href="#" class="logout-button"><em class="fa fa-sign-in-alt"></em> Login</a>
                    <a href="#" class="logout-button"><em class="fa fa-user-plus"></em> Register</a>
            @endauth
        </nav>


        <main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
            <header class="page-header row justify-center">
                <div class="col-md-6 col-lg-8" >
                    <h1 class="float-left text-center text-md-left">TODO.LIST</h1>
                </div>

                @auth
                    <div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <div class="username mt-1">
                                <h4 class="mb-1">{{ Auth::user()->name }}</h4>

                                <h6 class="text-muted">User rol</h6>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
                            <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
                            <a class="dropdown-item" href="#"><em class="fa fa-sign-out mr-1"></em> Logout</a></div>
                    </div>
                @endauth
                <div class="clear"></div>
            </header>

            <section class="row">
                <div class="col-sm-12">
                    <section class="row">
                        <div class="col-md-8 col-lg-8 mx-auto" >
                            @yield('content')
                        </div>

                    </section>
                    <section class="row">
                        <div class="col-12 mt-1 mb-4">Template by <a href="https://www.medialoot.com">Medialoot</a></div>
                    </section>
                </div>
            </section>
        </main>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/fontawesome.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/chart.min.js') }}"></script>
<script src="{{ asset('js/chart-data.js') }}"></script>
<script src="{{ asset('js/easypiechart.js') }}"></script>
<script src="{{ asset('js/easypiechart-data.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

</body>
</html>
