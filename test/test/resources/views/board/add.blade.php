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
        @csrf
        <table>
            <th>person_id:</th><input type="number" name="person_id" value="{{old('person_id')}}">
            <th>title:</th><input type="text" name="title" value="{{old('title')}}">
            <th>message:</th><input type="text" name="message" value="{{old('message')}}">
            <input type="submit" value="登録">
        </table>
    </form>
</body>
</html>