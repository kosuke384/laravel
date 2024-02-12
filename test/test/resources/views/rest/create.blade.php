<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('rest.store')}}" method="post">
        @csrf
        <table>
            <tr><th>message:</th><td><input type="text" name="message" value="{{old('message')}}"></td></tr>
            <tr><th>url:</th><td><input type="text" name="url" value="{{old('url')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="登録"></td></tr>
        </table>
    </form>
</body>
</html>