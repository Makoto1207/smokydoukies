<!-- 
TODO LIST

-->

<!-- for navbar  -->
@extends('layouts.appwelcome')
@section('content')

    <!-- ログイン後表示画面(仮) -->
    @if(Auth::check())
    <html>
        <head>
        </head>
        <body>
            

            
            
        <!--<div class="container">-->
        <!--    <div class="row">-->
        <!--    </div>-->
        <!--</div>-->
        
        <div>
             <!-- Timeline page -->
            <div id="box3">
                <!-- Top Comments -->
                <h1 class="toptext">SHARE</h1>
                <h1>THOUGHTS</h1>
                <!-- button -->
                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{route('timeline')}}"><span>TIMELINE</span></a>
                </div>
                <!-- scroll button -->
                <p class="scroll js-scroll"><a href="#box1">SCROLL DOWN</a></p>                        
            </div>
            
            <!-- Profile page -->
            <div id="box1">
                <!-- scroll btn -->
                <p class="scrollup js-scroll"><a href="#box3">SCROLL UP</a></p>                        
                <!-- Top comments -->
                <div class="onepic">
                    <h1 class="toptext">SMOKE</h1>
                    <h1>YOURSELF</h1>
                </div>
                <!-- button -->
                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{route('users.show', Auth::id())}}"><span>PROFILE</span></a>
                </div>
                <!--　scroll button　-->
                <p class="scroll js-scroll"><a href="#box2">SCROLL DOWN</a></p>                        
            </div>
            

            <!-- Smokers page  -->
            <div id="box2">
                <!-- scroll button -->
                <p class="scrollup js-scroll"><a href="#box1">SCROLL UP</a></p> 
                <!-- Top comments -->
                <h1 class="toptext">MEET</h1>
                <h1>DOUKIES</h1>
                <!-- button -->
                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{route('users.index')}}"><span>SMOKERS</span></a>
                </div>
                <!-- scroll button -->
                <p class="scroll js-scroll"><a href="#box4">SCROLL DOWN</a></p>                        
            </div>
            

            <!-- Map page -->
            <div id="box4">
                <!-- scroll btn -->
                <p class="scrollup js-scroll"><a href="#box2">SCROLL UP</a></p>                        
                <!-- Top comments -->
                <h1 class="toptext" style="font-size:80px;">DISCOVER</h1>
                <!-- button -->
                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{ route('map')}}"><span>MAP</span></a>
                </div>
                <!-- scroll btn-->
                <p class="scroll js-scroll" style="margin:190px 0 0;"><a href="#box5">SCROLL DOWN</a></p>                        
            </div>
            
            <!-- Restaurants page -->
            <div id="box5">
                <!-- scroll btn -->
                <p class="scrollup js-scroll"><a href="#box4">SCROLL UP</a></p>                        
                <!-- Top comments -->
                <h1 class="toptext" style="font-size:80px;">SEARCH</h1>
                <!-- button -->
                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{ route('store')}}"><span>RESTAURANTS</span></a>
                </div>
            </div>
            
            <!-- top page button -->
            <p id="page-top"><a href="#wrap" class="glyphicon glyphicon-home"></a></p>
    
        </div>

            <!-- top page button -->
            <p id="page-top"><a href="#wrap" class="glyphicon glyphicon-home"></a></p>

            <!-- done -->
        </body>
    </html>
    
    <!-- ログイン後のｃｓｓ  -->
    <style>

    
            body{
                margin: 0;
                padding: 0;
            }    
            
            /* top page buttn css */
            #page-top {
                position: fixed;
                bottom: 20px;
                right: 20px;
                font-size: 77%;
            }
            #page-top a {
                background:	#333333;
                text-decoration: none;
                color: #fff;
                width: 40px;
                padding: 10px 0;
                text-align: center;
                display: block;
                border-radius: 5px;
            }
            #page-top a:hover {
                text-decoration: none;
                background: #999;
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
                font-size: 80px;
                margin: 0 0 10px;
            }
            
            .toptext{
                font-family: "Times New Roman";
                text-align:center;
                color: white;
                font-size: 50px;
                margin-top: 250px;
                margin-bottom:0;
           }
           
           
           /* ボタンの加工 */
            .btnframe{
              width:180px;
              /*height:50px;*/
              border:2px solid #FFCC99;
              border-radius: 3px;
              cursor:pointer;
              position:relative;
              overflow:hidden;
              margin: auto;
            }
            .btnframe a{
              font-family: "Times New Roman";
              font-size:20px;
              color:#FFCC99;
              text-decoration:none;
              line-height:50px;
              transition:all .3s ease;
              z-index:2;
              position:relative;
            }
            .btneffect{
              width:180px;
              height:50px;
              left:-180px;
              background:#FFCC99;
              position:absolute;
              transition:all .3s ease;
              z-index:1;
            }
            .btnframe:hover .btneffect{
              left:0;
            }
            .btnframe:hover a{
              color:black;
            }

            
            #box1, #box2, #box3, #box4, #box5 div{
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
            
            .scroll{
              position: absolute;
              width: 100%;
              text-align: center;
              margin:130px 0 0;
              font-family: "Time New Romans";
            }
            .scroll a{
                position: relative;
                display: inline-block;
                font-size: 20px;
                font-weight: bold;
                color: #fff;
                text-decoration: none;
                padding: 0 0 35px;
              }
            /*矢印を作成する*/
            .scroll a:before{
              content: "";
              position: absolute;
              width: 10px;
              height: 10px;
              left: 0;
              right: 0;
              bottom: 25px;
              margin: auto;
              border-bottom: 2px solid #fff;
              border-right: 2px solid #fff;
              transform: rotate(45deg);
              animation: move 2s infinite;
            }
            
            /* scroll up  */
            .scrollup{
              position: absolute;
              width: 100%;
              text-align: center;
              margin:90px 0 0;
              font-family: "Time New Romans";
            }
            .scrollup a{
                position: relative;
                display: inline-block;
                font-size: 20px;
                font-weight: bold;
                color: #fff;
                text-decoration: none;
                padding: 35px 0 0;
              }
            /*矢印を作成する*/
            .scrollup a:before{
              content: "";
              position: absolute;
              width: 10px;
              height: 10px;
              left: 0;
              right: 0;
              top:0;
              bottom:0;
              margin: auto;
              border-top: 2px solid #fff;
              border-left: 2px solid #fff;
              transform: rotate(45deg);
              animation: moveup 2s infinite;
            }
        
        
        /*矢印をアニメーションする*/
        @keyframes move {
          0% {
            transform: rotate(45deg) translate(0, 0);
          }
          20% {
            transform: rotate(45deg) translate(10px, 10px);
          }
          40% {
            transform: rotate(45deg) translate(0, 0);
          }
        }
    
        @keyframes moveup {
          0% {
            transform: rotate(45deg) translate(0, 0);
          }
          20% {
            transform: rotate(45deg) translate(-10px, -10px);
          }
          40% {
            transform: rotate(45deg) translate(0, 0);
          }
        }

        </style>
        
        <script>
            //top page button script 
            $(function() {
                var topBtn = $('#page-top');    
                topBtn.hide();
                //スクロールが100に達したらボタン表示
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 150) {
                        topBtn.fadeIn();
                    } else {
                        topBtn.fadeOut();
                    }
                });
                //スクロールしてトップ
                topBtn.click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 500);
                    return false;
                });
            });
                     

        </script>
    <!-- all done -->




    <!-- ログイン後 -->
    @else
    <div class="container" style="margin-top: 70px;">
    <!-- サービス名表示 -->
        <div class="title">
            <div >
                <img src="images/logo.png"  class='img-responsive'>
            </div>
            
            <div class="row">
                <!-- scroll down ボタン -->
                <p class="scroll js-scroll"><a href="#serviceexp">CLICK</a></p>                        
            </div>
        </div>
    </div>

    <!-- 背景動画 -->
    <video src="video/smoke.mp4"muted autoplay loop></video>
    
    
    <div>
        <div id="serviceexp">
            <section class="firstintro">
                <div class="container">
                    <div class="row">
                        <div class="exptext">
                            <h2>EXCITEMENT FOR ALL SMOKY DOUKIES</h2>
                            <div class="fade-in">
                                <h3>We provide a platform to meet doukies</h3>
                                <h4><p>Hey I'm Katsuno Gaku. I'm a grandfather of team siesta. </p>
                                    <p>You should definiltely join Smoky doukies to enjoy the</p>
                                    <p>whole new experiment of excitement.</p> 
                                    <p>Just let you know, I'm an ero-sennnin</p>
                                </h4> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    
    <!-- イントロページ -->
    <div>
        <div id="intro1">
            <section class="feautures">
                <div class="container">
                    <div class="row" style="margin:0 0 50px;">
                        <h2>OUR SERVICE</h2>
                            <div class="titledesc">
                                <p>This is a platform where smokers gather for peace.</p> 
                                <p>We provide support to help you smoke with the right manners.</p>
                                <p>Get ready to join smoky doukies!</p>
                            </div>
                    </div>
                    <div class="row fade-up">
                        <div class="intropages">
                            <div class="col-sm-6 col-md-4 col-lg-2 col-lg-offset-1">
                                <p class="glyphicon glyphicon-user" style="font-size: 30px;"></p>
                                <h3>Profile</h3>
                                <p>Your information is open to all users and you can share your feelings with them on board.</p>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <p class="glyphicon glyphicon-heart" style="font-size: 30px;"></p>
                                <h3>Smokers</h3>
                                <p>You can view the other smokers' information to find your smoking buddies.</p>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <p class="glyphicon glyphicon-comment" style="font-size: 30px;"></p>
                                <h3>Timeline</h3>
                                <p>Conversations are showed on this page. You can find out what the other smokers are up to.</p>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <p class="glyphicon glyphicon-flag" style="font-size: 30px;"></p>
                                <h3>Map</h3>
                                <p>The locations and the details of restaurants are shown. You can use it to discover where to go.</p>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <p class="glyphicon glyphicon-glass" style="font-size: 30px;"></p>
                                <h3>Restaurants</h3>
                                <p>Over 250 restaurants' information is stored. You can find the perfect place to enjoy your meal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <div>
        <div id="endpg">
            <section>
                <div class="container">
                    <div class="row fade-in">
                        <!-- title -->
                        <h1 class="endtitle">Let's get Smoky</h1>
                        <!-- sign up btn -->
                        <div class="row">
                            <div class="btnframeintro" class="col-12 col-md-6" style="margin-top:10px;">
                            <span class="btneffectintro"></span>
                                <a href= "{{ route('register') }}"><span>SIGN UP NOW</span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>




    
                <!--    <div class="footer_copyright_black">-->
                <!--    ©2018 SMOKY DOUKIES by Seista Co.-->
                <!--</div>-->

    
    
    <style>
    
        .fade-in {
          transition: opacity 3s;
          -moz-transition: opacity 3s;
          -webkit-transition: opacity 3s;
          -o-transition: opacity 3s;
        }
        
        .fade-up{
          transition: opacity 3s;
          -moz-transition: opacity 3s;
          -webkit-transition: opacity 3s;
          -o-transition: opacity 3s;
          transition: transform 3s;
          -moz-transition: transform 3s;
          -webkit-transition: transform 3s;
          -o-transition: transform 3s;
        }

        
        
    
        #serviceexp{
            margin-top:430px;
            background-image: url("/images/siestacolor.jpg");
            background-size: cover;
            height:70vh;
            width:100%;
            z-index: 3;
            position:relative;
            text-align:right;
            padding:100px  0;
        }
        
        .exptext h2{
            font-size:40px;
            font-weight:bold;
            color:white;
        }
        
        .exptext h3{
            font-weight:bold;
            font-size:30px;
            color:white;
        }
        
        .exptext h4{
            font-size:25px;
            color:white;
        }
        
        
    
        #intro1{
            height: 100vh;
            width: 100%;
            z-index: 3;
            position: relative;
            background-color: white;
        }
        
        .feautures{
            padding: 70px 0;
            text-align:center;
            letter-spacing: 4px;
            background-color:black;
            
        }

        
        #intro1 p, #intro1 h2, #intro1 h3{
            color:white;
        }
        
        .intropages div{
            margin-bottom: 30px;
        }
        
        #endpg{
            background-image: url("/images/laugh.jpg");
            background-size: cover;
            height:100vh;
            width:100%;
            z-index: 3;
            position:relative;
            padding:100px 0;
            text-align:center;
        }
        .endtitle{
            font-family:"Time New Romans";
            font-size: 80px;
            margin:200px 0 0;
            color:white;
        }

    
    
        /* 背景動画用の加工 */
        video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 1;
        }
        /* 動画の上にテキストが表示されるためのｃｓｓ */
        .title {
            position: relative; /*必ず必要*/
            z-index: 2; /*必ず必要*/
            text-align:center;
            padding:20px;
            margin: 0 auto;
        }
        
        /* ロゴ用のｃｓｓ */
        .img-responsive{
            max-width: 65%;
            height: auto;
            margin: auto
        }

        
        
        
        /* sign up nowタンの加工 */
        .btnframeintro{
          width:220px;
          height:50px;
          border:2px solid white;
          border-radius: 3px;
          cursor:pointer;
          position:relative;
          overflow:hidden;
          margin: auto;
          display:inline-block;
        }
        .btnframeintro a{
          font-family:"Times New Roman";
          font-size:25px;
          color:white;
          text-decoration:none;
          line-height:50px;
          transition:all .3s ease;
          z-index:2;
          position:relative;
        }
        .btneffectintro{
          width:220px;
          height:50px;
          left:-220px;
          background:white;
          position:absolute;
          transition:all .3s ease;
          z-index:1;
        }
        .btnframeintro:hover .btneffectintro{
          left:0;
        }
        .btnframeintro:hover a{
          color:black;
        }
        
        
        
        /* scrool btn */
        .scroll{
          position: absolute;
          width: 100%;
          text-align: center;
          margin:70px 0 0;
          font-family: "Time New Romans";
            }
        .scroll a{
            position: relative;
            display: inline-block;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            padding: 0 0 35px;
          }
        
        /*矢印を作成する*/
        .scroll a:before{
          content: "";
          position: absolute;
          width: 10px;
          height: 10px;
          left: 0;
          right: 0;
          bottom: 25px;
          margin: auto;
          border-bottom: 2px solid #fff;
          border-right: 2px solid #fff;
          transform: rotate(45deg);
          animation: move 2s infinite;
        }
        
        
        /*矢印をアニメーションする*/
        @keyframes move {
          0% {
            transform: rotate(45deg) translate(0, 0);
          }
          20% {
            transform: rotate(45deg) translate(10px, 10px);
          }
          40% {
            transform: rotate(45deg) translate(0, 0);
          }
        }
    </style>


    <script>
        
        
        $(window).on('load',function(){
        
        	// fade-in
            $(window).scroll(function (){
                $('.fade-in').each(function(){
                    var POS = $(this).offset().top;  //fade-inがついている要素の位置
                    var scroll = $(window).scrollTop();  //スクロール一
                    var windowHeight = $(window).height();  //ウィンドウの高さ
        
                    if (scroll > POS - windowHeight + windowHeight/5){
                        $(this).css("opacity","1" );
                    } else {
                        $(this).css("opacity","0" );
                    }
                });
            });
        });
              
              
        $(window).on('load',function(){
	
    	// fade-up
            $(window).scroll(function (){
                $('.fade-up').each(function(){
                    var POS = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
        
                    if (scroll > POS - windowHeight){
                        $(this).css({
                                'opacity':'1',
                                'transform':'translateY(0)',
                                '-webkit-transform':'translateY(0)',
                                '-moz-transform':'translateY(0)',
                                '-ms-transform':'translateY(0)'
                        });
                    } else {
                        $(this).css({
                                'opacity':'0',
                                'transform':'translateY(70px)',
                                '-webkit-transform':'translateY(70px)',
                                '-moz-transform':'translateY(70px)',
                                '-ms-transform':'translateY(70px)'
                        });
                    }
                });
            });
        });  
        
    </script>


    
    @endif
@endsection
