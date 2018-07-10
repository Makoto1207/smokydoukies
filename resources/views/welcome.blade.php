<!-- 
TODO list 

    x 背景に動画ながす
    x サービス名を中心に表示する
    x サインイン・ログインボタンを左右にサービス名のしたに表示する
    x レイアウトを作成する
    x ボタンの加工
    x ログイン後の画面表示
    
    終わってないこと
    携帯画面でのアスペクト

-->


@extends('layouts.app')


@section('content')
    
    
    <!-- ログイン後表示画面(仮) -->
    @if(Auth::check())

        
        
        
        
        
        
        
        <div id="menu">
            <div id="leftoptions">
                <ul style="list-style:none;">
                    <li><a href="#box1" id="link1">profile</a></li>
                    <li><a href="#box2" id="link2">timeline</a></li>
                    <li><a href="#box3" id="link3">user</a></li>
                    <li><a href="#box4" id="link4">map</a></li>
                </ul>
            </div>
        </div>
        
        <div>
            <img src ="{{secure_asset('/images/profile.jpg')}}" alt="profile" id="box1">
            <img src ="{{secure_asset('/images/timeline.jpg')}}" id="box2">
            <img src ="{{secure_asset('/images/user.jpg')}}" id="box3">
            <img src ="{{secure_asset('/images/map.jpg')}}" id="box4">
        </div>

    <!--　ログイン前の登録画面 -->
    @else
    
    
    
    
    <!-- サービス名表示 -->
    <div class="title">
        <h1 clsss="headings">Smoky Doukies</h1>
        
            <div>
                <a href= "{{ route('register') }}" class="buttons">Sign up</a>
                <a href= "{{ route('login') }}" class="buttons">Log in</a>
            </div>
        
    </div>
    
    
    <!--- srcのところに動画を入れるだけで変更可能 -->
    
    <video src="video/test.mp4" muted autoplay loop></video>
    
    

    
    @endif
    
    
    
    
@endsection
