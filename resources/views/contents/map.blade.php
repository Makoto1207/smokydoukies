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

    <div class="titleformap"><h2>Map of Futakotamagawa</h2></div>
     
    <div class="introduction">
        <img src="{{secure_asset('/img/map.jpg')}}" alt="sample" usemap="#sample" width="600" height="600">
        
        <map name="sample">
            <area shape="poly" coords="57,16,47,188,72,219,296,278,331,100,250,81,244,103,57,16" href="#imageA" alt="map_a">
            <area shape="poly" coords="67,231,42,261,37,375,195,432,214,269, 67,231" href="#imageB" alt="map_b">
            <area shape="poly" coords="235,272,212,404,365,489,368,348,235,272" href="#imageC" alt="map_c">
            <area shape="poly" coords="440,370,400,540,450,575,465,590,490,600,590,470,500,430,440,370"href="#imageD" alt="map_d">
        </map>
    </div>
    
    <div class="mapdetail">
        
        
        <div class="sectiontitle"><h2 id=imageA>A</h2></div>
            <div class="maplarge">
                <img src="img/a.jpg" width="550" height="550">
            </div>
                <a href="#" class="storebuttons">Stores</a>
            
        
        
        <div class="sectiontitle"><h2 id=imageB>B</h2></div>
            <div class="maplarge">
                <img src="img/b.jpg" width="550" height="550">
            </div>
                <a href="#" class="storebuttons">Stores</a>
            
        
        
        <h2 id=imageC>C</h2>
            <div class="maplarge">
                <img src="img/c.jpg" width="550" height="550">
            </div>
                <a href="#" class="storebuttons">Stores</a>
        
        
        
        <h2 id=imageD>D</h2>
            <div class="maplarge">
                <img src="img/d.jpg" width="550" height="550">
            </div>
                <a href="#" class="storebuttons">Stores</a>
            
    </div>
    
@endsection
