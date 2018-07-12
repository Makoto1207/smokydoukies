<!--

    o navbarを表示させる
    o navbarからmap.blade.phpに遷移するようにする
    o 全体の地図画像を表示する
    o 詳細地図画像｛A,B,C,D｝を配置する
    o 地図画像をクリックすると、上記のAからDにスクロールする
    o store.blade.phpへのリンクを設定する

-->

@extends('layouts.app')

@section('content')



<div class="container">
    <h2>二子玉川の喫煙所マップ</h2>
     
    <div class="introduction">
        <a href="#imageA" id="A" class="member-frame" style="background-image: url('img/A.jpg')">A</a>
        <a href="#imageB" id="B" class="member-frame" style="background-image: url('img/B.jpg')">B</a>
        <a href="#imageC" id="C" class="member-frame" style="background-image: url('img/C.jpg')">C</a>
        <a href="#imageD" id="D" class="member-frame" style="background-image: url('img/D.jpg')">D</a>
    </div>
    
    <div class="mapdetail">
        <h2 id=imageA>A地区</h2>
        <div class="maplarge" id=imageA>
            <img src="img/A.jpg">
            <a href="{{ route('store')}}" class="buttons">Store</a>
        </div>
        
        
        
        <h2 id=imageB>B地区</h2>
        <div class="maplarge" id=imageB>
            <img src="img/B.jpg">
            <a href="{{ route('store')}}" class="buttons">Store</a>
        </div>

        <a href="#" class="storebuttons">Store</a>
        
        
        <h2 id=imageC>C地区</h2>
        <div class="maplarge" id=imageC>
            <img src="img/C.jpg">
            <a href="{{ route('store')}}" class="buttons">Store</a>
        </div>

        <a href="#" class="storebuttons">Store</a>
        
        <h2 id=imageD>D地区</h2>
        <div class="maplarge" id=imageD>
            <img src="img/D.jpg">
            <a href="{{ route('store')}}" class="buttons">Store</a>
        </div>
        
        <a href="#" class="storebuttons">Store</a>
        
    </div>
    
    

</div>
@endsection
