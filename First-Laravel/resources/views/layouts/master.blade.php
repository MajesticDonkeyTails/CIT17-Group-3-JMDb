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
                <!--Logo-->
                <a class = "logo-link" href = "{{ url('/') }}">
                    <div class = "logo" style = "background-image: url({{ asset('./img/bg-012.jpg') }});"></div>
                    <div class = "title">Working Title</div>
                </a>
                <!--Links and dropdowns-->
                <ul class = "links list-unstyled">
                    <li><a href = "{{ url('/') }}" class = "link">Home</a></li>
                    <li>
                        <a href = "#movieSubmenu" data-toggle = "collapse" aria-expanded = "false" class = "dropdown-toggle link">Movies</a>
                        <ul class = "collapse list-unstyled" id = "movieSubmenu">
                            <li><a href = "{{ url('/movies') }}" class = "sub-link">This Month</a></li>
                            <li><a href = "{{ url('/movies') }}" class = "sub-link">This Year</a></li>
                            <li><a href = "{{ url('/movies') }}" class = "sub-link">All</a></li>
                            <li><a href = "{{ url('/movies') }}" class = "sub-link">More</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href = "#externalSubmenu" data-toggle = "collapse" aria-expanded = "false" class = "dropdown-toggle link">External Sites</a>
                        <ul class = "collapse list-unstyled" id = "externalSubmenu">
                            <li><a href = "https://www.imdb.com/" class = "sub-link">IMDB</a></li>
                            <li><a href = "https://www.rottentomatoes.com/" class = "sub-link">Rotten Tomatoes</a></li>
                            <li><a href = "https://www.metacritic.com/" class = "sub-link">Metacritic</a></li>
                        </ul>
                    </li>
                    <li><a href = "{{ url('/about-us') }}" class = "link">About</a></li>
                </ul>
                <!--Log in and sign up-->
                <div class = "account-options">
                    <a href = "{{ url('/login') }}" class = "btn-action">Log In</a>
                    <div>or</div>
                    <a href = "{{ url('/sign-up') }}" class = "btn-action">Sign Up</a>
                </div>
                <!--Footer-->
                <div class = "footer">
                    THIS WEBSITE IS FOR EDUCATIONAL PURPOSES ONLY.
                    <br/>
                    <br/>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script>
                    All rights reserved
                </div>
                <!--Misc-->
                <div class = "bg"></div>
                <div class = "noise"></div>
                <div class = "gap"></div>
            </nav>

            <!-- PAGE CONTENT -->
            <div id = "content" class = "p-4 p-md-5">

                <!-- MINIATURE NAVIGATION -->
                <nav id = "navbar" class = "navbar navbar-expand-lg">
                    <button id = "sidebarCollapse" class = "btn-action">Menu</button>
                    <a href = "{{ url('/movies') }}" class = "btn-action link-movies">Movies</a>
                    <a href = "{{ url('/') }}" class = "btn-action link-home">Home</a>
                </nav>

                <!-- CONTENT -->
                @yield('content')
                
                <!-- MISCELLANEOUS -->
                <div class = "bg"></div>
                <div class = "noise"></div>
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
        
        <!-- Template behavior -->
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
        </script>
        
    
</html>