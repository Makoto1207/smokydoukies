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

<<<<<<< HEAD
    <div class="titleformap"><h2>Map of Futakotamagawa</h2></div>
=======


<div class="container" style="margin-top: 70px;">
    <h2>二子玉川の喫煙所マップ</h2>
>>>>>>> master
     
    <div class="introduction">
        <img src="{{secure_asset('/img/mapFULLedit.jpg')}}" alt="sample" usemap="#sample">
        
        <map name="sample">
            <area shape="poly" coords="100,30,76,178,94,200,345,299,396,157" href="#imageA" alt="map_a">
            <area shape="poly" coords="98,213,60,234,38,331,201,414,233,357,252,266" href="#imageB" alt="map_b">
            <area shape="poly" coords="287,300,240,411,398,515,454,389" href="#imageC" alt="map_c">
            <area shape="poly" coords="502,442,451,558,556,669,696,569"href="#imageD" alt="map_d">
        </map>
    </div>
    
    <div class="mapdetail">
        
        
        <div class="sectiontitle"><h2 id=imageA>A</h2></div>
            <div class="maplarge">
                <img src="img/mapAedit.jpg" width="550" height="550">
            </div>
                <a href="{{ route('store')}}" class="storebuttons">Stores</a>
            
        
        
        <div class="sectiontitle"><h2 id=imageB>B</h2></div>
            <div class="maplarge">
                <img src="img/mapBedit.jpg" width="550" height="550">
            </div>
                <a href="{{ route('store')}}" class="storebuttons">Stores</a>
            
        
        
        <h2 id=imageC>C</h2>
            <div class="maplarge">
                <img src="img/mapCedit.jpg" width="550" height="550">
            </div>
                <a href="{{ route('store')}}" class="storebuttons">Stores</a>
        
        
        
        <h2 id=imageD>D</h2>
            <div class="maplarge">
                <img src="img/mapDedit.jpg" width="550" height="550">
            </div>
                <a href="{{ route('store')}}" class="storebuttons">Stores</a>
            
    </div>
    
@endsection
