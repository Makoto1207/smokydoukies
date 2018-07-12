<!--

    o navbarを表示させる
    o navbarからmap.blade.phpに遷移するようにする
    o 全体の地図画像を表示する
    o 詳細地図画像｛A,B,C,D｝を配置する
    o 地図画像をクリックすると、上記のAからDにスクロールする
    × store.blade.phpへのリンクを設定する

-->

@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <title>introduction</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="container">
    <h2>二子玉川の喫煙所マップ</h2>
     
    <div class="introduction">
        <img src="{{secure_asset('/img/map.jpg')}}" alt="sample" usemap="#sample">
        
        <map name="sample">
            <area shape="poly" coords="109,25,91,278,134,319,582,404,635,243,639,146,488,121,479,157" href="#imageA" alt="map_a">
            <area shape="poly" coords="129,343,85,382,72,554,376,633,414,398" href="#imageB" alt="map_b">
            <area shape="poly" coords="487,423,445,606,740,747,778,539" href="#imageC" alt="map_c">
            <area shape="poly" coords="893,589,854,802,963,872,957,889,1057,956,1250,735,1075,676,893,589" href="#imageD" alt="map_d">
        </map>
    </div>
    
    <div>
        <h2 id=imageA>A地区</h2>
        <div class="maplarge" id=imageA>
            <img src="img/a.jpg">
            <a href="#" class="buttons">Store</a>
        </div>
        
        <h2 id=imageB>B地区</h2>
        <div class="maplarge">
            <img src="img/b.jpg">
            <a href="#" class="buttons">Store</a>
        </div>
        
        <h2 id=imageC>C地区</h2>
        <div class="maplarge">
            <img src="img/c.jpg">
            <a href="#" class="buttons">Store</a>
        </div>
        
        <h2 id=imageD>D地区</h2>
        <div class="maplarge">
            <img src="img/d.jpg">
            <a href="#" class="buttons">Store</a>
        </div>
    </div>
    
    

</div>
@endsection
