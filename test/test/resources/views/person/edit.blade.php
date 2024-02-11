<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (count($errors)>0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <th>name:</th><input type="text" name="name" value="{{$form->name}}">
            <th>email:</th><input type="text" name="email" value="{{$form->email}}">
            <th>age:</th><input type="number" name="age" value="{{$form->age}}">
            <input type="submit" value="更新">
        </table>
    </form>
</body>
</html>