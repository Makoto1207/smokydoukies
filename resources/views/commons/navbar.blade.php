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
                
                <!--　ホームボタン　-->
                <li class=Homebtn>
                    <a class="glyphicon glyphicon-home" href="/"></a>
                </li>
            
            <ul class="navbar-right">
            
                <li>{!! link_to_route('users.show', 'Profile', ['id' => Auth::id()]) !!}</li>
                
                <li>{!! link_to_route('users.index', 'Smokers') !!}</li>
                
                <li>
                    <a href="{{ route('timeline')}}">Timeline</a>
                </li>
                
                <li>
                    <a href="{{ route('map')}}">Maps</a>
                </li>
                
                <li>
                    <a href="{{ route('store')}}">Store</a>
                </li>
                
                <!--　ログアウト用のルート　 -->
                <li>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="glyphicon glyphicon-log-out"></a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                
                </li>
            
            </ul>
            
    
            
    </nav>


</header>

@endif
