<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="検索">
    </form>
    @if (isset($item))
        <th>Data</th>
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
    @endif
</body>
</html>