<!doctype html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social Network</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            html, body {
                background-color: #e8fcff;
                color: #6f4647;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #6f2a1e;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
                top: 10px;
            }
            #justify { text-align: justify; }
        </style>

        <style>
            body {
                font-family: Arial, sans-serif; /* Рубленый шрифт */
            }
            .button {

                color: #ffffff; /* Цвет символов */
                font-size: 120%; /* Размер шрифта в процентах */
                font-family: serif; /* Шрифт с засечками */
                position: relative; /* Относительное позиционирование */
                bottom: 2px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="/users/{profile}">Profile</a>
                        <a href="home">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" align="justify">
                <div class="title m-b-md">
                    Social Network
                </div>

                <div>
                    <button type="button" class="btn btn-outline-primary btn-lg btn-lg active">
                    <a href="/users"> <span class="button">List of  users Social Network </span> </a>
                    </button>
                </div>

                <div id="justify" class="container">
                    <p> <span class="letter">
                Defining Social Networking
                Social networking is the use of internet-based social media sites to stay connected with friends, family, colleagues, customers, or clients. Social networking can have a social purpose, a business purpose, or both, through sites such as Facebook, Twitter, LinkedIn, and Instagram, among others. Social networking has become a significant base for marketers seeking to engage customers.
                </span>
                    </p >

                <p> <span class="letter">
                    Most Popular Social Networks
                    Despite some stiff competition, Facebook remains the most popular social network, with a reach in the U.S. of 90% of mobile users as of October 2018. It was followed, in order of popularity, by Instagram, Facebook Messenger, Twitter, and Pinterest, according to Statistica.com.
                    </span>
                </p>
                <p>
                    <span class="letter">
                    Breaking Down Social Networking
                    Marketers use social networking for increasing brand recognition and encouraging brand loyalty. Since it makes a company more accessible to new customers and more recognizable for existing customers, social networking helps promote a brand’s voice and content. For example, a frequent Twitter user may hear of a company for the first time through a news feed and decide to buy a product or service. The more exposed people are to a company’s brand, the greater the company's chances of finding and retaining new customers.
                    </span>
                </p>
                <p>
                    <span class="letter">
                    Advantages of Social Networking for Marketers
                    Marketers use social networking for improving conversion rates. Building a following provides access to and interaction with new, recent and old customers. Sharing blog posts, images, videos or comments on social media allows followers to react, visit the company’s website and become customers.
                    </span>
                </p>
                <p> <span class="letter">
                Customers may compliment the company’s offerings and encourage others to buy the products or services. The more customers are talking about a company on social networking, the more valuable the brand authority becomes. As a brand grows stronger, more sales result.

                Increased company posts rank the company higher in search engines. This helps establish a brand as legitimate, credible and trustworthy.

                A company may use social networking to demonstrate its customer service level and enrich its relationships with consumers. For example, if a customer complains about a product or service on Twitter, the company may address the issue immediately, apologize, and take action to make it right.
               </span>
                </p>
            </div>
        </div>
        </div>
        <div>
            <p class="float-right">
                <button type="button" class="btn brn-primary">
                    <a  class="btn brn-primary" href="#">Back to top</a>
                </button>
            </p>
        </div>
        <footer class="text-muted">

        </footer>
    </body>
</html>
