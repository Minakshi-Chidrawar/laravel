<!DOCTYPE html>
<html>
<head>
    <title>Shree Adhya Shakti Mataji Temple</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Mataji Temple</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        <footer class="footer">
            <small class="text-muted">
                <address>
                    Visit us at:<br>
                    Adhya Shakti Mataji Temple<br>
                    55, High Street, Cowley, Uxbridge<br>
                    Middlesex UB8 2DZ<br>
                    Mobile : 078 8225 3540<br>
                </address>
                &copy; Shree Adhya Shakti Mataji Temple. All Rights Reserved. Registered Charity No. 1089024
            </small>
        </footer>
    </div>
    <!--latest jQuery 3-->

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<!--Bootstrap 3 JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>