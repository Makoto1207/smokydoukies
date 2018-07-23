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
                
                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{route('users.show', Auth::id())}}"><span>PROFILE</span></a>
                </div>
                
                <p class="scroll js-scroll"><a href="#box2">SCROLL DOWN</a></p>                        
                
                
                
            </div>
            
            <div id="box2">
                <h1 class="toptext">MEET</h1>
                <h1>DOUKIES</h1>

                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{route('users.index')}}"><span>SMOKERS</span></a>
                </div>
                
                
                
            </div>
            
            <div id="box3">
                <h1 class="toptext">SHARE</h1>
                <h1>THOUGHTS</h1>

                
                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{route('timeline')}}"><span>TIMELINE</span></a>
                </div>
                
                
                
            </div>
            
            <div id="box4">
                <h1 class="toptext" style="font-size:80px;">DISCOVER</h1>

                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{ route('map')}}"><span>MAP</span></a>
                </div>
                
                
            </div>
            
            <div id="box5">
                <h1 class="toptext" style="font-size:80px;">SEARCH</h1>
                
                <div class="btnframe">
                    <div class="btneffect"></div>
                        <a href= "{{ route('store')}}"><span>STORES</span></a>
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
                font-size: 80px;
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
           
           
           /* ボタンの加工 */
            .btnframe{
              width:150px;
              height:50px;
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
              width:150px;
              height:50px;
              left:-150px;
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
        <!-- all done -->

    <!-- ログイン後 -->
    @else
    <div class="container" style="margin-top: 70px;">
    <!-- サービス名表示 -->
        <div class="title">
            <div >
                <img src="images/logo.png"  class='img-responsive'>
            </div>
            
            <!-- ログイン・サインボタン-->
                    <div class="row">
                        <!-- SingUPボタン加工ようのdiv別け -->
                        <!--<div class="btnframe" class="col-12 col-md-6" style="margin:30px">-->
                        <!--    <span class="btneffect"></span>-->
                        <!--        <a href= "{{ route('register') }}"><span>SIGN UP</span></a>-->
                        <!--</div>  -->
                        <!-- Loginボタン加工ようのdiv別け -->                  
                        <!--<div class="btnframe" class="col-12 col-md-6" style="margin:30px">-->
                        <!--    <span class="btneffect"></span>-->
                        <!--        <a href= "{{ route('login') }}"><span>LOGIN</span></a>-->
                        <!--</div>-->
                        
                        
                        <!--<div class="btnframe" class="col-12 col-md-6" style="margin:30px">-->
                        <!--    <span class="btneffect"></span>-->
                        <!--        <a href= "#intro1"><span>LEARN MORE</span></a>-->
                        <!--</div>-->
                        
                        <!-- scroll down ボタン -->
                        <p class="scroll js-scroll"><a href="#intro1">CLICK</a></p>                        
                            
                        
                        
                        
                    </div>
                        
        </div>
    </div>

    <!-- 背景動画 -->
    <video src="video/smoke.mp4" muted autoplay loop></video>
    
    
    
    <!-- イントロページ -->
    <div>
        <div id="intro1">
            <section class="feautures">
                <div class="container">
                    <div class="row" style="margin:0 0 70px;">
                        <h2>OUR SERVICES</h2>
                            <div class="titledesc">
                                <p>Platform where all people gathers for peace.</p> 
                                <p>We brighten our future, we thrive for love.</p>
                                <p>Get ready to join smoky doukies.</p>
                            </div>
                    </div>
                    <div class="row">
                        <div class="intropages">
                            <div class="col-sm-6 col-md-4 col-lg-2 col-lg-offset-1">
                                <p class="glyphicon glyphicon-user" style="font-size: 30px;"></p>
                                <h3>Profile</h3>
                                <p>Your informations are open to all the users. Also, you could state your feelings on board.</p>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <p class="glyphicon glyphicon-heart" style="font-size: 30px;"></p>
                                <h3>Smokers</h3>
                                <p>You can view other Smokers detail. Thefore, you can find buddies.</p>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <p class="glyphicon glyphicon-comment" style="font-size: 30px;"></p>
                                <h3>Timelines</h3>
                                <p>All the conversation are showed in this page. You are able to know each others.</p>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <p class="glyphicon glyphicon-flag" style="font-size: 30px;"></p>
                                <h3>Map</h3>
                                <p>Every details of restoran locations are shown. You could discover where to go</p>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <p class="glyphicon glyphicon-glass" style="font-size: 30px;"></p>
                                <h3>Restaurant</h3>
                                <p>About 250 restaurant information are stored. You could find the perfect place to enjoy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="btnframeintro" class="col-12 col-md-6" style="margin-top:30px;">
                            <span class="btneffectintro"></span>
                                <a href= "{{ route('register') }}"><span>SIGN UP NOW</span></a>
                        </div>
                    </div>
                </div>

            </section>

        </div>
<<<<<<< HEAD
            

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
            
           
=======
>>>>>>> 24d19a8f8a8e3b33e6e35b51f024340073697491
        
    </div>


    
    
    
    
    <style>
        #intro1{
            margin-top: 430px;
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
            background-color:white;
        }
        
        .container h2{
            font-family: "Times New Roman";
        }
        
        .intropages div{
            margin-bottom: 30px;
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
            max-width: 55%;
            height: auto;
            margin: auto
        }
    
       /* ボタンの加工 */
        /*.btnframe{*/
        /*  width:180px;*/
        /*  height:50px;*/
        /*  border:2px solid white;*/
        /*  border-radius: 3px;*/
        /*  cursor:pointer;*/
        /*  position:relative;*/
        /*  overflow:hidden;*/
        /*  margin: auto;*/
        /*  display:inline-block;*/
        /*}*/
        /*.btnframe a{*/
        /*  font-family:"Times New Roman";*/
        /*  font-size:20px;*/
        /*  color:white;*/
        /*  text-decoration:none;*/
        /*  line-height:50px;*/
        /*  transition:all .3s ease;*/
        /*  z-index:2;*/
        /*  position:relative;*/
        /*}*/
        /*.btneffect{*/
        /*  width:180px;*/
        /*  height:50px;*/
        /*  left:-180px;*/
        /*  background:white;*/
        /*  position:absolute;*/
        /*  transition:all .3s ease;*/
        /*  z-index:1;*/
        /*}*/
        /*.btnframe:hover .btneffect{*/
        /*  left:0;*/
        /*}*/
        /*.btnframe:hover a{*/
        /*  color:black;*/
        /*}*/
        
        
        
        /* introボタンの加工 */
        .btnframeintro{
          width:220px;
          height:50px;
          border:2px solid black;
          border-radius: 3px;
          cursor:pointer;
          position:relative;
          overflow:hidden;
          margin: auto;
          display:inline-block;
        }
        .btnframeintro a{
          font-family:"Times New Roman";
          font-size:20px;
          color:black;
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
          background:black;
          position:absolute;
          transition:all .3s ease;
          z-index:1;
        }
        .btnframeintro:hover .btneffectintro{
          left:0;
        }
        .btnframeintro:hover a{
          color:white;
        }
        
        
        
        
        .scroll{
      position: absolute;
      width: 100%;
      text-align: center;
      margin:90px 0 0;
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
    
    @endif
@endsection
