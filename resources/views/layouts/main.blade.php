<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Task 2 - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<div id="maincontainer">
    <header>
        <div class="jumbotron jumbotron-fluid mb-0">
            <div class="container">
                <h1 class="display-5"> Build a Form</h1>
                <p class="lead">
                    Task 2
                </p>
            </div>
        </div>
    </header>

    <main class="mt-5">
        @yield('content')
    </main>
</div>

<footer class="footer fixed-bottom">
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-10">

            </div>
            <div class="col-2">
                <p style="font-size:0.8em;" class="text-right m-2 lead text-light">&copy; {{now()->year}}</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
