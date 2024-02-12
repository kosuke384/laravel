<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<tbody>
        <!-- テーブルのボディ -->
        @foreach ($hasItems as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <table>
                @if ($item->boards != null)
                        @foreach ($item->boards as $obj)
                            <td>{{$obj->getData()}}</td>
                        @endforeach
                    @endif
                </table>
                
            </tr>
        @endforeach
        <table>
                    @foreach ($noItems as $item)
                        <td>{{$item->getData()}}</td>
                    @endforeach
                </table>
    </tbody>
</body>
</html>