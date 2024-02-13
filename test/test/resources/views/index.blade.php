//上部タグ名前変更
@section('title','ブログ一覧')
//継承
    @extends('layout')
//セクション
@section('form')
    <p>本文</p>
    <table>
        <tr>
            <th><a href="index?sort=name">name</a></th>
            <th><a href="index?sort=email">email</a></th>
            <th><a href="index?sort=age">age</a>Age</th>
        </tr>
        @foreach($items as $item)
        <tr>
        <tr><td>{{$item->name}}</td></tr>
        <tr><td>{{$item->email}}</td></tr>
        <tr><td>{{$item->age}}</td></tr>
        </tr>
        @endforeach
        {{$items->appends(['sort'=>$sort])->links()}}
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


