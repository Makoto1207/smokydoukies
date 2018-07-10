<!--

    o navbarを表示させる
    o navbarからmap.blade.phpに遷移するようにする
    × 全体の地図画像を表示する
    × 詳細地図画像｛A,B,C,D｝を配置する
    × 地図画像をクリックすると、上記のAからDにスクロールする
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
        <a href="#" id="A" class="member-frame" style="background-image: url('img/A.jpg')">A</a>
        <a href="#" id="B" class="member-frame" style="background-image: url('img/B.jpg')">B</a>
        <a href="#" id="C" class="member-frame" style="background-image: url('img/C.jpg')">C</a>
        <a href="#" id="D" class="member-frame" style="background-image: url('img/D.jpg')">D</a>
    </div>

</div>
@endsection
