<html>

<head>
    <title>@yield('title')</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
            margin: 5px;
            background-color: red;
        }


        ul {
            font-size: 12pt;
        }

        hr {
            margin: 25px 100px;
            border-top: 1px dashed #ddd
        }

        th {
            background-color: #999;
            color: fff;
            padding: 5px 10px;
        }

        td {
            border: solid 1px #aaa;
            color: #999;
            padding: 5px 10px;
        }

        .menutitle {
            font-size: 14pt;
            font-weight: bold;
            margin: 0px;
        }

        .content {
            margin: 10px;
        }

        .footer {
            text-align: right;
            font-size: 10px;
            margin: 10px;
            border-bottom: solid 1px #ccc;
            color: #ccc;
        }

        .buruburu {
            /* display: inline-block; */
            animation: hurueru .1s infinite;
        }

        @keyframes hurueru {
            0% {
                transform: translate(0px, 0px) rotateZ(0deg)
            }

            25% {
                transform: translate(2px, 2px) rotateZ(1deg)
            }

            50% {
                transform: translate(0px, 2px) rotateZ(0deg)
            }

            75% {
                transform: translate(2px, 0px) rotateZ(-1deg)
            }

            100% {
                transform: translate(0px, 0px) rotateZ(0deg)
            }
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="{{ asset('image/surfing.ico') }}">
</head>

<body >

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./post">
            <img src="{{ asset('image/surfing.ico') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            WaveApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li> -->
            </ul>
            @yield('user')
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>