//上部タグ名前変更
@section('title','ブログ一覧')
//継承
    @extends('layout')
//セクション
@section('form')
    <p>本文</p>
    <table>
        <tr><th>Name</th><th>Email</th><th>Age</th><th>詳細</th><th>更新</th><th>削除</th></tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->age}}</td>
            <td><a href="{{route('show',['id'=>$item->id])}}">詳細</a></td>
            <td><a href="{{route('edit',['id'=>$item->id])}}">変更</a></td>
            <td><a href="{{route('delete',['id'=>$item->id])}}">削除</a></td>
        </tr>
        @endforeach
        <a href="{{route('create')}}">登録</a>
    </table>
    
    //コンポーネント
    @component('components.message')
    //スロット
        @slot('msg_title')
            CAUTION!
        @endslot
        @slot('msg_content')
            これはメッセージです
        @endslot
    @endcomponent
    //ファイル読み込み
    @include('components.message',['msg_title'=>'ok','msg_content'=>'content'])

@endsection


