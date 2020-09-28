<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "utf-8">
        <title>6th Route</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h1>Return a view from a controller that will display an array of values inside the view</h1>
        <h2>Array: <?php
            for ($i = 0; $i < count($array); $i++) {
                echo "$array[$i], ";
                $i++;
            }
        ?>
        </h2>
    </body>

</html>