//上部タグ名前変更
@section('title','ブログ一覧')
//継承
    @extends('layout')
//セクション
@section('form')
    <p>本文</p>
    //プロバイダー
    <p>controller:{{$message}}</p>
    <p>provider:{{$view_message}}</p>
    //ミドルウェア前処理
    <middleware>google.com</middleware>
    //ミドルウェア後処理
    <table>
        @foreach ($date as $items)
            <th>{{$items['name']}}</th>
            <td>{{$items['email']}}</td>
        @endforeach
    </table>
    <form method="post" action="other">
        @csrf
        <p></p>
        <input type="text" name="msg">
        <input type="submit">
    </form>
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

    @each('components.item',$data ,'item' )
@endsection


