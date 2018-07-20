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


    <div class="titleformap">Smoking areas in Futakotamagawa</div>

<div class="container" style="margin-top: 10px;">
    <div class ="sub-titleformap">Click on map for more details!</div>


    <div class="col-10 col-offset-1">
        <div class="introduction">
            <img src="{{secure_asset('/img/mapFULLedit2.jpg')}}" alt="sample" usemap="#sample" class='img-responsive' style="margin: auto;">
        
        <map name="sample">
            <area shape="poly" coords="100,30,76,178,94,200,345,299,396,157" href="#imageA" alt="map_a">
            <area shape="poly" coords="98,213,60,234,38,331,201,414,233,357,252,266" href="#imageB" alt="map_b">
            <area shape="poly" coords="287,300,240,411,398,515,454,389" href="#imageC" alt="map_c">
            <area shape="poly" coords="502,442,451,558,556,669,696,569"href="#imageD" alt="map_d">
        </map>
    </div>

        <div class="mapdetail">
            
            
            <div class="sectiontitle">
                <h2 id=imageA>A</h2>
                <div class="maplarge">
                    <img src="img/mapAedit.jpg" width="550" height="550" class='img-responsive' style="margin: auto;">
                </div>
                    <a href="{{ route('store')}}?name=(A)" class="storebuttons">Stores</a>
            </div>    
            
            
            <div class="sectiontitle"><h2 id=imageB>B</h2></div>
                <div class="maplarge">
                    <img src="img/mapBedit.jpg" width="550" height="550" class='img-responsive' style="margin: auto;">
                </div>
                    <a href="{{ route('store')}}?name=(B)" class="storebuttons">Stores</a>
                
            
            
            <h2 id=imageC>C</h2>
                <div class="maplarge">
                    <img src="img/mapCedit.jpg" width="550" height="550" class='img-responsive' style="margin: auto;">
                </div>
                    <a href="{{ route('store')}}?name=(C)" class="storebuttons">Stores</a>

            
            <h2 id=imageD>D</h2>
                <div class="maplarge">
                    <img src="img/mapDedit.jpg" width="550" height="550" class='img-responsive' style="margin: auto;">
                </div>
                    <a href="{{ route('store')}}?name=(D)" class="storebuttons">Stores</a>
        </div>      
    </div>
</div>
@endsection
