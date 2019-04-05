<!DOCTYPE html>
<html>
<head>
    <title> </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <!-- https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.custom" -->
</head>

<body>
    <nav id="mainNav" class="navbar is-dark navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.html">Home</a>
                <a class="nav-item nav-link" href="aboutmataji.html">About Mataji</a>
                <a class="nav-item nav-link" href="aboutTemple.html">About Temple</a>
                <a class="nav-item nav-link" href="aarti.html">Aartis</a>
                <a class="nav-item nav-link" href="PriestServices.html">Priest Services</a>
                <a class="nav-item nav-link" href="events.html">News & Events</a>
                <a class="nav-item nav-link" href="gallery.html">Gallery</a>
                <a class="nav-item nav-link" href="horoscope.html">Horoscope</a>
                <a class="nav-item nav-link" href="donation.html">Donations</a>
                <a class="nav-item nav-link" href="contact.html">Contact us</a>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <div class="clear-both"></div>
    <footer class="footer">
        <address>
            Visit us at:<br>
            Temple Address:<br>
            Adhya Shakti Mataji Temple<br>
            55, High Street, Cowley, Uxbridge<br>
            Middlesex UB8 2DZ<br>
            Mobile : 078 8225 3540<br>
        </address>
        &copy; Shree Adhya Shakti Mataji Temple. All Rights Reserved. Registered Charity No. 1089024
    </footer>
</body>
</html>