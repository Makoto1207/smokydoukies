<!-- 
    TODO LIST
    
    o navのテンプレを使う
    o 背景を透明にする
    o mobile対応できるようにする
    
    o スクロールするとどっかいくようにする

-->

@if (Auth::check())
    <header>
        <nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top" id="menu-wrap">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SmokyDoukies</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="line">{!! link_to_route('users.show', 'PROFILE', ['id' => Auth::id()]) !!}</li>
                        <li class="line">{!! link_to_route('users.index', 'SMOKERS') !!}</li>
                        <li class="line"><a href="{{ route('timeline')}}">TIMELINE</a></li>
                        <li class="line"><a href="{{ route('map')}}">MAP</a></li>
                        <li class="line"><a href="{{ route('store')}}">STORES</a></li>
                        <li class="logoutbtn"><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="glyphicon glyphicon-log-out"></a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- ナブバー用のｃｓｓ -->
    <style>
    /* start */
        .navbar {
            background-color:transparent;
            border-color:transparent;
        }
        a {
            font-family: "Times New Roman";
            font-size: 20px;
            color:#FFCC99;
        }
        .navbar-inverse .navbar-brand{
            color:white;
        }
        .navbar-brand{
            font-family: Monotype Corsiva;
            font-size:35px;
        }
        .logoutbtn a{
            color:white;
        }
        .navbar-header buttons{
            color:white;
        }
        .line a::after {
          border-bottom: solid 2px #FFCC99;
          bottom: 0;
          content: "";
          display: block;
          transition: all .3s ease;
          -webkit-transition: all .3s ease;
          width: 0;
        }
        .line a:hover::after {
          width: 100%;
          color:#FFCC99;
        }
        
        .navbar-inverse .navbar-nav li a{
            color:#FFCC99;
        }
        .navbar-inverse .navbar-nav .logoutbtn a {
            color:white;
        }
        
        .navbar-inverse .navbar-nav .line a:hover{
            color:#FFCC99;
        }
        #menu-wrap {
          position: fixed;
          z-index: 9999;
          top: 0;
          left: 0;
          width: 100%;
          background: rgba(0,0,0,.5);
          transition: .3s;
        }
    /* done */
    </style>

    <!-- ナブバーがなくなるクエリーコマンド -->
    <script>
        var menuHeight = $("#menu-wrap").height();
        var startPos = 0;
        $(window).scroll(function(){
          var currentPos = $(this).scrollTop();
          if (currentPos > startPos) {
        	  if($(window).scrollTop() >= 200) {
              $("#menu-wrap").css("top", "-" + menuHeight + "px");
        		}
          } else {
            $("#menu-wrap").css("top", 0 + "px");
          }
          startPos = currentPos;
        });
    </script>
    

@else
<!-- ログイン前イントロページにてのnav -->
    <header>
        <nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top" id="menu-wrap">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="line">{!! link_to_route('register', 'SING UP') !!}</li>
                        <li class="line">{!! link_to_route('login', 'LOGIN') !!}</li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
        <!-- ナブバー用のｃｓｓ -->
    <style>
    /* start */
        .navbar {
            background-color:transparent;
            border-color:transparent;
        }
        a {
            font-family: "Times New Roman";
            font-size: 20px;
            color:#FFCC99;
        }
        .navbar-header buttons{
            color:white;
        }
        .line a::after {
          border-bottom: solid 2px #FFCC99;
          bottom: 0;
          content: "";
          display: block;
          transition: all .3s ease;
          -webkit-transition: all .3s ease;
          width: 0;
        }
        .line a:hover::after {
          width: 100%;
          color:#FFCC99;
        }
        
        .navbar-inverse .navbar-nav li a{
            color:#FFCC99;
        }
        .navbar-inverse .navbar-nav .logoutbtn a {
            color:white;
        }
        
        .navbar-inverse .navbar-nav .line a:hover{
            color:#FFCC99;
        }
        #menu-wrap {
          position: fixed;
          z-index: 9999;
          top: 0;
          left: 0;
          width: 100%;
          background: rgba(0,0,0,.5);
          transition: .3s;
        }
    /* done */
    </style>
    
    
    

    <script>
        var menuHeight = $("#menu-wrap").height();
        var startPos = 0;
        $(window).scroll(function(){
          var currentPos = $(this).scrollTop();
          if (currentPos > startPos) {
        	  if($(window).scrollTop() >= 200) {
              $("#menu-wrap").css("top", "-" + menuHeight + "px");
        		}
          } else {
            $("#menu-wrap").css("top", 0 + "px");
          }
          startPos = currentPos;
        });
    </script>


@endif
