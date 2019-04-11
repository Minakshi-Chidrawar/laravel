<!DOCTYPE html>
<html>
<head>
    <title>Shree Adhya Shakti Mataji</title>
    <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/half-slider.css') }}" -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=tangerine">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Shree Adhya Shakti Mataji</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aarti.html">Aartis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PriestServices.html">Priest Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="events.html">News & Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="horoscope.html">Horoscope</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="donation.html">Donations</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="w3-tangerine">
            <p class="w3-large"></p> 
        </div>
        @yield('content')
    </div>
    <hr>
    @include('master.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>