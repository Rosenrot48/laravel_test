<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="W4yjQQ5qo8gmrXLeebUoZstojpedVlR4xzooQFYF">

    <title>{{env('APP_NAME')}}</title>

    <!-- Scripts -->
    <script src="{{env('APP_URL')}}/js/app.js" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{env('APP_URL')}}/css/app.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/css/home.css" rel="stylesheet">
</head>
<body>

<div id="app"><nav class="navbar navbar-expand-md navbar-light navbar-laravel"><div class="container">
            <a href={{env('APP_URL')}} class="navbar-brand">
                {{env('APP_NAME')}}
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed">
                <span class="navbar-toggler-icon"></span>
            </button> <div id="navbarSupportedContent" class="navbar-collapse collapse" style="">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                            <span class="caret">
                            </span>
                        </a>
                        <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right">
                            <a href="{{env('APP_URL')}}/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                                Logout
                            </a>
                            <form id="logout-form" action="{{env('APP_URL')}}/logout" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" name="_token" value="W4yjQQ5qo8gmrXLeebUoZstojpedVlR4xzooQFYF">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4"><div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8"><div class="card">
                        <div class="card-header">
                            <span class="letter">Congratulations! </span></div>
                        <div class="card-body">
                            <span class="user">
                            <ol>{{Auth::user()->name}} {{Auth::user()->surname}},</ol>
                            <ol>You are logged in!</ol>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


</body>
</html>
