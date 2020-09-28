<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "utf-8">
        <title>2nd Route</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h1>2nd: Return a view from a controller that will display a variable passed to the view.</h1>
        <h2>Variable: <?php
            if (isset($variable)) {
                echo $variable;
            }
            else {
                echo 'variable is non-existent, you were probably redirected.';
            }
        ?>
        </h2>
    </body>

</html>