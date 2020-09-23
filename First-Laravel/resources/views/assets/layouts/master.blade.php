<!DOCTYPE html>
<html lang = "en">
    
    <!-- Template source: https://startbootstrap.com/themes/grayscale/ -->
    
    <head>
        <!-- Meta -->
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name = "description" content = "" />
        <meta name = "author" content = "" />
        
        <!-- Miscellaneous -->
        <link rel = "icon" type = "image/x-icon" href = "" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href = "./css/styles.css" rel = "stylesheet" />
    </head>
    
    <body id = "page-top">
        
        <!-- Navigation-->
        <nav class = "navbar navbar-expand-lg navbar-light fixed-top" id = "mainNav">
            <div class = "container">
                <a class = "navbar-brand js-scroll-trigger" href = "#page-top">Kernel Spice (working title)</a>
                <button class = "navbar-toggler navbar-toggler-right" type = "button" data-toggle = "collapse" data-target = "#navbarResponsive" aria-controls = "navbarResponsive" aria-expanded = "false" aria-label = "Toggle navigation">
                    Menu
                    <i class = "fas fa-bars"></i>
                </button>
                <div class = "collapse navbar-collapse" id = "navbarResponsive">
                    <ul class = "navbar-nav ml-auto">
                        <li class = "nav-item"><a class = "nav-link js-scroll-trigger" href = "/movies">Movies</a></li>
                        <li class = "nav-item"><a class = "nav-link js-scroll-trigger" href = "/about-us">About Us</a></li>
                        <li class = "nav-item"><a class = "nav-link js-scroll-trigger" href = "#">Sign Up (non-existent)</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class = "masthead">
            <div class = "container d-flex h-100 align-items-center">
                <div class = "mx-auto text-center">
                    @yield('masthead')
                </div>
            </div>
        </header>
        
        <!-- "The Usual Content" -->
        @yield('content')
        
        <!-- Footer-->
        <footer class = "footer bg-black small text-center text-white-50">
            <div class = "container">Copyright © Your Website 2020</div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        
        <!-- Third party plugin JS-->
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
        <!-- Core theme JS-->
        <script src = "./js/scripts.js"></script>
        
    </body>
    
</html>