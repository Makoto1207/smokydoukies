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
        
    

        
    <h1>TEST</h1>
    
    <!--　ログイン前の登録画面 -->
    @else
    
    
    
    
    <!-- サービス名表示 -->
    <div class="title">
        <h1 clsss="headings">Smoky Doukies</h1>
        
            <div>
                <a href= "{{ route('register') }}" class="buttons"><span>Sign up</span></a>
                <a href= "{{ route('login') }}" class="buttons"><span>Log in</span></a>
            </div>
        
    </div>
    
   
    
    
    <!--- srcのところに動画を入れるだけで変更可能 -->
    
    <video src="video/test.mp4" muted autoplay loop></video>
    
    

    
    @endif
    
    
    
    
@endsection
