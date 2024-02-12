<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <tr>
            @foreach ($items as $item)
            <td>{{$item->messasge}}</td>
            <td>{{$item->person->name}}</td>
            @endforeach
        </tr>
    </div>
</body>
</html>