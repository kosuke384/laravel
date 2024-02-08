<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" action="{{url('destroy')}}">
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><input type="text" name="name" value="{{$form->name}}"></tr>
            <tr><input type="email" name="email" value="{{$form->email}}"></tr>
            <tr><input type="text" name="age" value="{{$form->age}}"></tr>
            <input type="submit" value="削除">
        </form>
</body>
</html>