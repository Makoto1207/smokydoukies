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
    <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            
                
                <!-- ハート -->
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                </a>
             
            <!--　ハートをクリックしたらドロップする表示するページ　-->
            <ul class="dropdown-menu">
                <li>{!! link_to_route('users.show', 'Profile', ['id' => Auth::id()]) !!}</li>
                <li>{!! link_to_route('users.index', 'Smokers') !!}</li>
                <li><a href="{{ route('timeline')}}">Timeline</a></li>
                <li><a href="{{ route('map')}}">Maps</a></li>
                <li><a href="#">Store</a></li>
                
                <li role="separator" class="divider"></li>
                
            
                
                <!--　ログアウト用のルート　 -->
                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
            </li>
            
            <!-- ドロップダウン終わり-->
            
            <!--　ホームボタン　-->
            <li class="homebtn"><a class="navbar-brand glyphicon glyphicon-home" href="/"></a></li>
            
        </ul>
    </div>
    </div>
</header>

@endif
