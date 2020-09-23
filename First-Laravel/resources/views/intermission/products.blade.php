<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "utf-8">
        <title>Products</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h1>Products</h1>
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>

</html>