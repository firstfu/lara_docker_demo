<!DOCTYPE HTML>
<!--
 Road Trip by TEMPLATED
 templated.co @templatedco
 Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Road Trip by TEMPLATED</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>

    <!-- Header -->
    <header id="header">
        <div class="logo"><a href="/homepage">Road Trip <span>by TEMPLATED</span></a></div>
        <a href="#menu"><span>Menu</span></a>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="/homepage">Home</a></li>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
    </nav>


    @yield('content')

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">

            <h2>Contact Me</h2>

            <form action="#" method="post">

                <div class="field half first">
                    <label for="name">Name</label>
                    <input name="name" id="name" type="text" placeholder="Name">
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="email" placeholder="Email">
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                </div>
                <ul class="actions">
                    <li><input value="Send Message" class="button alt" type="submit"></li>
                </ul>
            </form>

            <ul class="icons">
                <li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>
        </div>
    </footer>

    <div class="copyright">
        Site made with: <a href="https://templated.co/">Templated</a>
    </div>
    <!-- Scripts -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery.scrolly.min.js"></script>
    <script src="/assets/js/jquery.scrollex.min.js"></script>
    <script src="/assets/js/skel.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/main.js"></script>

</body>

</html>
