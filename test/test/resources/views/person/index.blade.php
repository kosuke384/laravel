<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <th>Name</th><th>Email</th><th>Age</th>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                
            </tr>
        @endforeach
    </table>
</body>
</html>