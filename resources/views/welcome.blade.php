<!-- 
TODO list 

    x 背景に動画ながす
    x サービス名を中心に表示する
    x サインイン・ログインボタンを左右にサービス名のしたに表示する
    x レイアウトを作成する
    x ボタンの加工
    
    終わってないこと
    携帯画面でのアスペクト

-->


@extends('layouts.app')


@section('content')
    
    <!-- welcome blade の表示するプログラム --> 
    
    
    
    <!-- サービス名表示 -->
    <div class="title">
        <h1 clsss="headings">Smoky Doukies</h1>
        
            <div>
                <a href= "#" class="buttons">Sign up</a>
                <a href= "#" class="buttons">Log in</a>
            </div>
        
    </div>
    
    
    <!--- srcのところに動画を入れるだけで変更可能 -->
    
    <video src="video/test.mp4" muted autoplay loop></video>
    
    

    
    
    
    
    
    
@endsection
