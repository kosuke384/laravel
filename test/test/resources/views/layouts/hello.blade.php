<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @section('main')
        <h1>セクション</h1>
        @section('header')
        <h2>ヘッダー</h2>
        @endsection
        @section('footer')
        <h3>
            フッター
        </h3>
        @endsection
    @show
</body>
</html>