<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        @csrf
        <tr><input type="text" name="name"></tr>
        <tr><input type="email" name="email"></tr>
        <tr><input type="text" name="age"></tr>
        <input type="submit" value="登録">
    </form>
</body>
</html>