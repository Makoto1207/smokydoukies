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
                    <li><a href="#box1" id="link1"><span class="lefttext">Profile</span></a></li>
                    <li><a href="#box2" id="link2"><span class="lefttext">Smokers</span></a></li>
                    <li><a href="#box3" id="link3"><span class="lefttext">Timeline</span></a></li>
                    <li><a href="#box4" id="link4"><span class="lefttext">Maps</span></a></li>
                    <li><a href="#box5" id="link5"><span class="lefttext">Store</span></a></li>
                    
                </ul>
            </div>
        </div>
        
        <div>
            <a href="{{route('users.show', Auth::id())}}"><img src ="{{secure_asset('/images/profile.jpg')}}" id="box1"></a>
            <a href="{{route('users.index')}}"><img src ="{{secure_asset('/images/smokers.jpg')}}" id="box2"></a>
            <a href="{{route('timeline')}}"><img src ="{{secure_asset('/images/timeline.jpg')}}" id="box3"></a>
            <a href="{{ route('map')}}"><img src ="{{secure_asset('/images/map.jpg')}}" id="box4"></a>
            <a href="{{ route('store')}}"><img src ="{{secure_asset('/images/store.jpg')}}" id="box5"></a>
        </div>


    <!--　ログイン前の登録画面 -->
    @else
    
    
    
    
    <!-- サービス名表示 -->
    <div class="title">
        <h1 clsss="headings"><span clsss="smoky">Smoky</span>
                            <span class="doukies">Doukies</span></h1>
            
            
            
            <!-- ログイン・サインボタン-->
            <div>

              
                <a href= "{{ route('register') }}" class="welcomebuttons"><span>SIGN UP</span></a>
                <a href= "{{ route('login') }}" class="welcomebuttons"><span>LOGIN</span></a>

            </div>
        
    </div>
    
   
    
    
    <!--- srcのところに動画を入れるだけで変更可能 -->
    
    <video src="video/test.mp4" muted autoplay loop></video>
    
    

    
    @endif
    
    
    
    
@endsection
