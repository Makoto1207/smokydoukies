<!-- 
    TODO LIST
    
    o navのテンプレを使う
    0 背景を透明にする
    0 mobile対応できるようにする
    
    x スクロールするとどっかいくようにする

-->

@if (Auth::check())

    <header>
        <nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">SmokyDoukies</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="line">{!! link_to_route('users.show', 'PROFILE', ['id' => Auth::id()]) !!}</li>
                        <li class="line">{!! link_to_route('users.index', 'SMOKERS') !!}</li>
                        <li class="line"><a href="{{ route('timeline')}}">TIMELINE</a></li>
                        <li class="line"><a href="{{ route('map')}}">MAP</a></li>
                        <li class="line"><a href="{{ route('store')}}">STORE</a></li>
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
/* done */
</style>















<!--<header class="ueni">-->
    
    <!--ナブバー表示必須コマンド？（仮） -->
<!--    <nav class="navbar-fixed-top">-->
        
            <!--　サイトに表示するナブバー　-->
            
<!--            <ul>-->
                <!--　ホームボタン　-->
<!--                <li class="homebtn">-->
<!--                    <a href="/">SmokyDoukies</a>-->
<!--                </li>-->
                
                <!--　右よせするため変更　-->
                <!--　ログアウト用のルート　 -->
                <!--<li class="logoutbtn">-->
                <!--    <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="glyphicon glyphicon-log-out"></a>-->
                <!--        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
                <!--            {{ csrf_field() }}-->
                <!--        </form>-->
                <!--</li>-->
                <!-- ストアボタン -->
<!--                <li class="topnavs">-->
<!--                    <a href="{{ route('store')}}">STORE</a>-->
<!--                </li>-->
                <!--　マップボタン　-->
<!--                <li class="topnavs">-->
<!--                    <a href="{{ route('map')}}">MAP</a>-->
<!--                </li>-->
                <!--　タイムラインボタン　-->
<!--                <li class="topnavs">-->
<!--                    <a href="{{ route('timeline')}}">TIMELINE</a>-->
<!--                </li>-->
                <!--　スモーカーボタン　-->
<!--                <li class="topnavs">{!! link_to_route('users.index', 'SMOKER') !!}</li>-->
                <!--　プロファイル　-->
<!--                <li class="topnavs">{!! link_to_route('users.show', 'PROFILE', ['id' => Auth::id()]) !!}</li>-->
<!--            </ul>-->
<!--    </nav>-->
<!--</header>-->

@endif
