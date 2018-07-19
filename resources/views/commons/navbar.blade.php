<!-- 
    TODO LIST
    
    x リストにする
        xログアウト
        xプロフィール
        xユーザー
        xマップ
        xタイムライン
        xストア
    x 各ページに＃でとめる
    x ナブバー風に加工する

-->

@if (Auth::check())


<header class="ueni">
    
    <!--ナブバー表示必須コマンド？（仮） -->
    <nav class="navbar-fixed-top">
        
            <!--　サイトに表示するナブバー　-->
            
            <ul>
                <!--　ホームボタン　-->
                <li class="homebtn">
                    <a href="/">SmokyDoukies</a>
                </li>
                
                <!--　右よせするため変更　-->
                <!--　ログアウト用のルート　 -->
                <li class="logoutbtn">
                    <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="glyphicon glyphicon-log-out"></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </li>
                <!-- ストアボタン -->
                <li class="topnavs">
                    <a href="{{ route('store')}}">STORE</a>
                </li>
                <!--　マップボタン　-->
                <li class="topnavs">
                    <a href="{{ route('map')}}">MAP</a>
                </li>
                <!--　タイムラインボタン　-->
                <li class="topnavs">
                    <a href="{{ route('timeline')}}">TIMELINE</a>
                </li>
                <!--　スモーカーボタン　-->
                <li class="topnavs">{!! link_to_route('users.index', 'SMOKER') !!}</li>
                <!--　プロファイル　-->
                <li class="topnavs">{!! link_to_route('users.show', 'PROFILE', ['id' => Auth::id()]) !!}</li>
            </ul>
    </nav>
</header>

@endif
