<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <title>List of Users</title>
    <header>
        <div class="navbar" >
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar d-flex align-items-center">
                    <strong>Social Network</strong>
                </a>
            </div>
        </div>
        <style>
            /* navbar */
            .navbar {
                background-color: #3f2cff;
                border-color: #E7E7E7;
                color: #ffffff;
                font-size: 120%;
            }
            head{
                background-color: #1b4b72;
            }
            body {
                font-family: Arial, sans-serif; /* Рубленый шрифт */
            }
            .user {
                color: #ff2752; /* Красный цвет символов */
                font-size: 250%; /* Размер шрифта в процентах */
                font-family: serif; /* Шрифт с засечками */
                position: relative; /* Относительное позиционирование */
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
                font-size: 120%; /* Размер шрифта в процентах */
                font-family: serif; /* Шрифт с засечками */
                position: relative; /* Относительное позиционирование */
            }
        </style>
    </header>
</head>
<body>
<ul>
    <div class="container">
        <a href="#" class="navbar-default d-flex align-items-center">
            <span class="user">
            <strong>List of Users</strong>
                </span>
        </a>
        <ol>
            @foreach($users as $user)
                <span class="user">
                <li>
                    <a class="letter" href="users/{{$user->id}}">
                        {{$user->name}} {{$user->surname}}
                    </a>
                </li>
                </span>
            @endforeach
        </ol>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <button type="button" class="btn brn-primary">
                        <a  class="btn brn-primary" href="#">Back to top</a>
                    </button>
                </p>
            </div>
        </footer>
    </div>
</ul>
</body>
</html>




