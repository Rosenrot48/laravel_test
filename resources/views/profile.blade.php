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
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
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
    </style>
</head>
<body>

<div class="container">
    <a href="/users" class="navbar-brand d-flex align-items-center">
        List of Users
    </a>

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



