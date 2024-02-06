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
    
    <form method="post" action="other">
        @csrf
        <p></p>
        @if (count($errors)>0)
            <div>
                <p>入力に問題があります</p>
            </div>
        @endif
        <input type="text" name="msg"><tr>
        @error('name')
            {{$message}}
        @enderror
        <input type="text" name="name" value="{{old('name')}}">
        <tr>
        @error('email')
            {{$message}}
        @enderror
        <input type="text" name="email" value="{{old('email')}}">
        <tr>
        @error('age')
            {{$message}}
        @enderror
        <input type="text" name="age" value="{{old('age')}}">
        <tr>
        <input type="submit" name="send"><tr>
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


