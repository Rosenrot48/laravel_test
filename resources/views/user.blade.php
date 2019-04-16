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
                    Social Network
                </a>
            </div>
        </div>
    </header>
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Рубленый шрифт */
        }
        .user {
            color: #e72c33; /* Красный цвет символов */
            font-size: 250%; /* Размер шрифта в процентах */
            font-family: serif; /* Шрифт с засечками */
            position: relative; /* Относительное позиционирование */
        }

        .navbar {
            background-color: #3f2cff;
            border-color: #E7E7E7;
            color: #ffffff;
            font-size: 120%;
            }
        html, body {
            background-color: #e8fcff;
            color: #000000;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
    <style>
        body {
            font-family: Arial, sans-serif; /* Рубленый шрифт */
        }
        .letter {

            color: #000000; /* Цвет символов */
            font-size: 170%; /* Размер шрифта в процентах */
            font-family: serif; /* Шрифт с засечками */
            position: relative; /* Относительное позиционирование */
        }
        .header {

            color: #3f2cff; /* Цвет символов */
            font-size: 220%; /* Размер шрифта в процентах */
            font-family: serif; /* Шрифт с засечками */
            position: relative; /* Относительное позиционирование */
        }
    </style>
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



