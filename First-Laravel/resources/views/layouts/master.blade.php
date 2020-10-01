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
        <link href = "{{ asset('./css/style-1.css') }}" rel = "stylesheet" />
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Custom theme CSS -->
    </head>
    
    <body>
        
        <!-- WRAPPER -->
        <div class = "wrapper d-flex align-items-stretch">
            
            <!--NAVIGATION -->
			<nav id = "sidebar">
				<div class = "p-4 pt-5">
                    <a href = "#" class = "img logo rounded-circle mb-5" style = "background-image: url({{ asset('./assets/img/logo.png') }});"></a>
                    <ul class = "list-unstyled components mb-5">
                        <li class = "active">
                            <a href = "#homeSubmenu" data-toggle = "collapse" aria-expanded = "false" class = "dropdown-toggle">Home</a>
                            <ul class = "collapse list-unstyled" id = "homeSubmenu">
                                <li><a href = "#">Latest News</a></li>
                                <li><a href = "#">Upcoming</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href = "#movieSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Movies</a>
                            <ul class = "collapse list-unstyled" id = "movieSubmenu">
                                <li><a href = "#">This Month</a></li>
                                <li><a href = "#">This Year</a></li>
                                <li><a href = "{{ url('/movies') }}">All</a></li>
                                <li><a href = "#">More</a></li>
                            </ul>
                        </li>
                        <li><a href = "#">About</a></li>
                        <li>
                            <a href = "#externalSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">External Sites</a>
                            <ul class = "collapse list-unstyled" id = "externalSubmenu">
                                <li><a href = "https://www.imdb.com/">IMDB</a></li>
                                <li><a href = "https://www.rottentomatoes.com/">Rotten Tomatoes</a></li>
                                <li><a href = "https://www.metacritic.com/">Metacritic</a></li>
                            </ul>
                        </li>
                        <br/>
                        <li><a href = "{{ url('/login') }}">Log In</a></li>
                        <li><a href = "{{ url('/sign-up') }}">Sign Up</a></li>
                    </ul>

                    <div class = "footer">
                        <p>
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                        </p>
                    </div>
                </div>
            </nav>

            <!-- PAGE CONTENT -->
            <div id = "content" class = "p-4 p-md-5">

                <!-- MINIATURE NAVIGATION -->
                <nav class = "navbar navbar-expand-lg navbar-light bg-light">
                    <div class = "container-fluid">
                        <button type = "button" id = "sidebarCollapse" class = "btn btn-primary">
                            <i class = "fa fa-bars"></i>
                            <span class = "sr-only">Toggle Menu</span>
                        </button>
                        <button class = "btn btn-dark d-inline-block d-lg-none ml-auto" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class = "collapse navbar-collapse" id = "navbarSupportedContent">
                            <ul class = "nav navbar-nav ml-auto">
                                <li class = "nav-item active"><a class = "nav-link" href = "#">Home</a></li>
                                <li class = "nav-item"><a class = "nav-link" href = "#">Movies</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <!-- MASTHEAD -->
                <header>
                    @yield('masthead')
                </header>
                
                <!-- CONTENT -->
                @yield('content')
            
                <!-- FOOTER -->
                <footer class = "footer bg-black small text-center text-white-50">
                    <div class = "container">
                        Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                    </div>
                </footer>
            </div>
		</div>
        
    </body>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Bootstrap 4 JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <!-- Custom -->
        <script>
            (function($) {
                "use strict";
                var fullHeight = function () {
                    $('.js-fullheight').css('height', $(window).height());
                    $(window).resize(function(){
                        $('.js-fullheight').css('height', $(window).height());
                    });
                };
                fullHeight();

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            })(jQuery);
            /*This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>*/
        </script>
        
    
</html>