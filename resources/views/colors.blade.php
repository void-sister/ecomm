<html>
    <head>
        <title>Ecomm site</title>
    </head>

    <body>
        <h1>Colors Index Page</h1>

        <table>
        <tr>
            <th>Id</th>
            <th>Color</th>
        </tr>

        @foreach ($colors as $color)
        <tr>
            <td> {{$color->id}} </td>
            <td> {{$color->color}} </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('colors/' . $color->id . '/edit') }}">Edit</a>
            </td>
        </tr>
        @endforeach
        </table>
    </body>
</html>

