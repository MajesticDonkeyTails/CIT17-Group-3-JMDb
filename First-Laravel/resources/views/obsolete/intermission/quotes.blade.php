<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "utf-8">
        <title>Quotes</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    </head>

    <body>
        @foreach($quotes as $quote)
            <li>{{ $quote['quote'] }} - {{ $quote['author'] }}</li>
        @endforeach
    </body>

</html>