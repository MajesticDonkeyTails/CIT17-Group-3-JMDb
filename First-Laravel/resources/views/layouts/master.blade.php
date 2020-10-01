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
        <link rel = "stylesheet" href = "{{ asset('./css/style-1.css') }}" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <!-- Custom theme CSS -->
        <link rel = "stylesheet" type = "text/less" href = "{{ asset('./css/custom.less') }}" />
    </head>
    
    <body>
        
        <!-- WRAPPER -->
        <div class = "wrapper d-flex align-items-stretch">
            
            <!--NAVIGATION -->
			<nav id = "sidebar">
				<div class = "p-4 pt-5">
                    <a href = "#" class = "img logo rounded-circle mb-5" style = "background-image: url({{ asset('./img/bg-012.jpg') }});"></a>
                    <ul class = "list-unstyled components mb-5">
                        <li class = "active">
                            <a href = "#homeSubmenu" data-toggle = "collapse" aria-expanded = "false" class = "dropdown-toggle link">Home</a>
                            <ul class = "collapse list-unstyled" id = "homeSubmenu">
                                <li><a href = "#" class = "sub-link">Latest News</a></li>
                                <li><a href = "#" class = "sub-link">Upcoming</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href = "#movieSubmenu" data-toggle = "collapse" aria-expanded = "false" class = "dropdown-toggle link">Movies</a>
                            <ul class = "collapse list-unstyled" id = "movieSubmenu">
                                <li><a href = "#" class = "sub-link">This Month</a></li>
                                <li><a href = "#" class = "sub-link">This Year</a></li>
                                <li><a href = "{{ url('/movies') }}" class = "sub-link">All</a></li>
                                <li><a href = "#" class = "sub-link">More</a></li>
                            </ul>
                        </li>
                        <li><a href = "#" class = "link">About</a></li>
                        <li>
                            <a href = "#externalSubmenu" data-toggle = "collapse" aria-expanded = "false" class = "dropdown-toggle link">External Sites</a>
                            <ul class = "collapse list-unstyled" id = "externalSubmenu">
                                <li><a href = "https://www.imdb.com/" class = "sub-link">IMDB</a></li>
                                <li><a href = "https://www.rottentomatoes.com/" class = "sub-link">Rotten Tomatoes</a></li>
                                <li><a href = "https://www.metacritic.com/" class = "sub-link">Metacritic</a></li>
                            </ul>
                        </li>
                        <br/>
                        <li><a href = "{{ url('/login') }}" class = "link">Log In</a></li>
                        <li><a href = "{{ url('/sign-up') }}" class = "link">Sign Up</a></li>
                    </ul>

                    <div class = "footer">
                        <p>
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                        </p>
                    </div>
                </div>
                <div class = "bg"></div>
                <div class = "noise"></div>
            </nav>

            <!-- PAGE CONTENT -->
            <div id = "content" class = "p-4 p-md-5">

                <!-- MINIATURE NAVIGATION -->
                <nav id = "navbar" class = "navbar navbar-expand-lg">
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

        <!-- Less JS -->
        <script src = "//cdn.jsdelivr.net/npm/less"></script>
    
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