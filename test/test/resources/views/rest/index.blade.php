<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        @foreach ($items as $item)
            <tr><th>id:</th><td>{{$item->id}}</td></tr>
            <tr><th>id:</th><td>{{$item->message}}</td></tr>
        @endforeach
    </table>
</body>
</html>