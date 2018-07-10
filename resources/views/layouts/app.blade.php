<!-- 
    TODO LIST
    
    ナブバーへのリンクを設定する
    

-->



<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <title>Smokydoukies</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
       
        <!-- CSSに必要 -->
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        
        
        
        
        
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
        <!-- ＃リンクのスムーズスクロール -->
        <script>
          $(function(){
            // #で始まるリンクをクリックしたら実行されます
            $('a[href^="#"]').click(function() {
              // スクロールの速度
              var speed = 400; // ミリ秒で記述
              var href= $(this).attr("href");
              var target = $(href == "#" || href == "" ? 'html' : href);
              var position = target.offset().top;
              $('body,html').animate({scrollTop:position}, speed, 'swing');
              return false;
            });
          });
        </script>
        
    </head>

    <body>
        <!-- navbar のブレード -->
        @include('commons.navbar')
        
        <div>
            @yield('content')    
        </div>
    
    </body>
</html>