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

<!-- for navbar  -->
@extends('layouts.appwelcome')


@section('content')


    
    
    <!-- ログイン後表示画面(仮) -->
    @if(Auth::check())

<<<<<<< HEAD
    <html>
        <head>
        </head>
        <body>
            <!--　左のスクロールバー　-->
            <ul id="menu" style="margin: 30px 0;">
                <a href="#box1"><li><p  class="glyphicon glyphicon-user"></p></li></a>
                <a href="#box2"><li><p class="glyphicon glyphicon-heart"></p></li></a>
                <a href="#box3"><li><p class="glyphicon glyphicon-comment"></p></li></a>
                <a href="#box4"><li><p class="glyphicon glyphicon-flag"></p></li></a>
                <a href="#box5"><li><p class="glyphicon glyphicon-glass"></p></li></a>
            </ul>
            <!-- done　-->
            <!-- background img & texts -->
            <div id="box1">
                <div class="onepic">
                    <h1 class="toptext">SMOKE</h1>
                    <h1>YOURSELF</h1>
                </div>
                <div>
                    <a href= "{{route('users.show', Auth::id())}}" class="indexbuttons"><span>PROFILE</span></a>
                </div>
            </div>
            
            <div id="box2">
                <h1 class="toptext">MEET</h1>
                <h1>DOUKIES</h1>
                <div>
                <a href= "{{route('users.index')}}" class="indexbuttons"><span>SMOKERS</span></a>
                </div>
            </div>
            
            <div id="box3">
                <h1 class="toptext">SHARE</h1>
                <h1>THOUGHTS</h1>
                <div>
                <a href= "{{route('timeline')}}" class="indexbuttons"><span>TIMELINE</span></a>
                </div>
            </div>
            
            <div id="box4">
                <h1 class="toptext">DISCOVER</h1>
                <div>
                    <a href= "{{ route('map')}}" class="indexbuttons"><span>MAP</span></a>
                </div>
            </div>
            
            <div id="box5">
                <h1 class="toptext">SEARCH</h1>
                <div>
                <a href= "{{ route('store')}}" class="indexbuttons"><span>STORES</span></a>
                </div>
            </div>
            <!-- done -->
        </body>
    </html>
    
    <!-- ログイン後のｃｓｓ  -->
    <style>
            body{
                margin: 0;
                padding: 0;
            }    
            #box1{
                height: 100vh;
                width: 100%;
                background-image: url("/images/index/user.jpg");
                background-size: cover;
                display: table;
                background-attachment: fixed;
                max-width: 100%;
            }
            #box2{
                height: 100vh;
                width: 100%;
                background-image: url("/images/index/smokers.jpg");
                background-size: cover;
                display: table;
                background-attachment: fixed;
                max-width: 100%;
            }
            #box3{
                height: 100vh;
                width: 100%;
                background-image: url("/images/index/timeline.jpg");
                background-size: cover;
                display: table;
                background-attachment: fixed;
                max-width: 100%;
            }
            #box4{
                height: 100vh;
                width: 100%;
                background-image: url("/images/index/map.jpg");
                background-size: cover;
                display: table;
                background-attachment: fixed;
                max-width: 100%;
            }
            #box5{
                height: 100vh;
                width: 100%;
                background-image: url("/images/index/store.jpg");
                background-size: cover;
                display: table;
                background-attachment: fixed;
                max-width: 100%;
                
            }
            
            h1{
                font-family: "Times New Roman";
                text-align:center;
                color: white;
                font-size: 50px;
                margin: 0 0 10px;
            }
            
            .toptext{
                font-family: "Times New Roman";
                text-align:center;
                color: white;
                font-size: 50px;
                margin-top: 300px;
                margin-bottom:0;
           }
    
            .indexbuttons {
                font-family: "Times New Roman";
                display: inline-block;
                padding: 0.3em 1em;
                text-decoration: none;
                color: #FFCC99;
                border: solid 2px #FFCC99;
                border-radius: 3px;
                transition: .4s;
            }
            
            .indexbuttons:hover{
                background: #FFCC99;
                color: black;
                text-decoration: none;
            }
            
            #box1 div{
                text-align: center;
            }
                    #box2 div{
                text-align: center;
            }
                    #box3 div{
                text-align: center;
            }
                    #box4 div{
                text-align: center;
            }
                    #box5 div{
                text-align: center;
            }
            
            #menu{
            position: fixed;
            top: 240px;
    
            }
            
            #menu a{
                list-style-type: none;
                color:white;
                transition: .1s;
            }
            #menu a:hover{
                color:white;
                font-size: 50px;
            }
        </style>
        <!-- all done -->

        
    @else

    
    
 <div class="container" style="margin-top: 70px;">
  
         
    
    <!-- サービス名表示 -->

    <!-- before login -->

    <div class="title">
        
        
        
        
        <h1>Smoky</h1>
        <h1>Doukies</h1>
            
        <!-- ログイン・サインボタン-->
           <div class="row">
                <div class="col-md-offset-2 col-md-8">
                  <div class="col-12 col-md-6" id="buttons">
                      <a href= "{{ route('register') }}" class="welcomebuttons"><span>SIGN UP</span></a>
                  </div>
                  <div class="col-12 col-md-6" id="buttons">
                      <a href= "{{ route('login') }}" class="welcomebuttons"><span>LOGIN</span></a>
                  </div>
                </div>
            </div>
            
           
        
        </div>
      </div>
    </div>
   
    
    

    <!--- srcのところに動画を入れるだけで変更可能 -->
    <video src="video/smoke.mp4" muted autoplay loop></video>
    
    
    
    @endif
@endsection
