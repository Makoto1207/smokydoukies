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
    <div class="collapse navbar-collapse navbar-fixed-top" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                </a>
            
            <!--　ドロップしたら表示するページ　-->
            <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Smokers</a></li>
                <li><a href="#">Timeline</a></li>
                <li><a href="#">Maps</a></li>
                <li><a href="#">Store</a></li>
                
                <li role="separator" class="divider"></li>
                
                <!--　ログアウト用のルート　 -->
                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
    
            </ul>
            </li>
        </ul>
    </div>
</header>

@endif