<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>{{$session_data}}</p>
    <form action="" method="post">
        @csrf
        <input type="text" name="input">
        <input type="submit" value="session">
    </form>
</body>
</html>