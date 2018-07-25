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
    <div class ="sub-titleformap">Click on map for more details ☟</div>


    <div class="col-10 col-offset-1">
        <div class="introduction">
            <img src="{{secure_asset('/img/mapFULLedit2.jpg')}}" alt="sample" usemap="#sample" class='img-responsive' style="margin: auto;">
        
        <map name="sample">
            <area shape="poly" coords="256,17,257,60,292,62,278,97,100,21,66,175,90,203,170,233,193,234,261,258,281,275,347,304,371,264,392,212,403,153,283,102,298,63,340,61,338,16" href="#imageA" alt="map_a">
            <area shape="poly" coords="102,466,186,468,186,419,142,420,167,404,205,417,238,359,256,262,187,239,168,238,92,208,57,231,33,331,101,417" href="#imageB" alt="map_b">
            <area shape="poly" coords="234,411,288,432,311,459,375,503,387,538,327,538,326,585,417,586,416,538,393,538,383,510,400,520,425,489,423,479,459,413,462,388,339,309,305,296,288,294,276,303,258,346,259,356" href="#imageC" alt="map_c">
            <area shape="poly" coords="491,445,445,565,507,629,478,661,434,663,433,710,512,711,512,664,484,662,511,635,554,675,599,645,607,654,689,593,687,580,700,563,678,542,582,502,506,437" href="#imageD" alt="map_d">
        </map>
    </div>
        
    
        <div class="mapdetail">
            
            
            <div class="sectiontitle">
                <h2 style="white-space: nowrap;"id=imageA>Area A</h2>
                <div class="maplarge">
                    <img src="img/mapAedit.jpg" width="550" height="550" class='img-responsive' style="margin: auto;">
                </div>
                    <a href="{{ route('store')}}?name=(A)" class="storebuttonsA">Click here to see restaurants in area A</a>
                    <div class="line"><p>___________________________________________________________</p></div>
            </div>    
            
            
            <div class="sectiontitle">
                
                <h2 style="white-space: nowrap;" id=imageB>Area B</h2>
                <div class="maplarge">
                    <img src="img/mapBedit.jpg" width="550" height="550" class='img-responsive' style="margin: auto;">
                </div>
                    <a href="{{ route('store')}}?name=(B)" class="storebuttonsB">Click here to see restaurants in area B</a>
                    <div class="line"><p>___________________________________________________________</p></div>
            </div>
            
                
            
            <div class="sectiontitle">
                <h2 style="white-space: nowrap;"id=imageC>Area C</h2>
                <div class="maplarge">
                    <img src="img/mapCedit.jpg" width="550" height="550" class='img-responsive' style="margin: auto;">
                </div>
                    <a href="{{ route('store')}}?name=(C)" class="storebuttonsC">Click here to see restaurants in area C</a>
                    <div class="line"><p>___________________________________________________________</p></div>
            </div>
            

            <div class="sectiontitle">
                <h2 style="white-space: nowrap;"id=imageD>Area D</h2>
                <div class="maplarge">
                    <img src="img/mapDedit.jpg" width="550" height="550" class='img-responsive' style="margin: auto;">
                </div>
                    <a href="{{ route('store')}}?name=(D)" class="storebuttonsD">Click here to see restaunrants in area D</a>
            </div>        
                    
                    
        </div>      
    </div>
    
</div>



@endsection



<style>
    /*click on map for more detailsの表示*/
    .sub-titleformap{
        padding: 0.1em 1em;
        text-decoration: none;
        color: gray;
        border: solid 5px gray;
        border-radius: 3px;
        text-align:center;
        display:inline-block;
    }
    
    .container{
        text-align:center;
    }
    
    
    
    
</style>