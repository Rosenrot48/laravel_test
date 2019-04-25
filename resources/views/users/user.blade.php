<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        <div class="navbar box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar d-flex align-items-center">
                    {{env('APP_NAME')}}
                </a>
            </div>
        </div>
    </header>
    <title>User Information</title>
    <link href="{{env('APP_URL')}}/css/user.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <a href="/users" class="header">
        List of Users
    </a>

    <h1 class="user">User Information</h1>
    <h1 class="letter">Name: {{$user->name}} {{$user->surname}}</h1>
    <h2 class="letter">Address: {{$user-> address}}</h2>
    <h2 class="letter">E-Mail: {{$user->email}}</h2>
    <h2 class="letter">Telephone Number: {{$user->telephone}} </h2>


    <div>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a class="btn btn-primary" href="{{ URL::previous() }}">
                        back
                    </a>
                    <button type="button" class="btn brn-primary">
                    <a href="#">Back to top</a>
                    </button>
                </p>
            </div>
        </footer>

    </div>
</div>
</body>
</html>



