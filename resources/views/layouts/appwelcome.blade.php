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
        
        
        
        
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
          
                    $(function(){
            // #で始まるリンクをクリックしたら実行されます
            $('area').click(function() {
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
        
            <!-- loading  -->
    <div>
        <div id="loader-bg">
            <div id="loader">
                    <img src="images/img-loading.gif" width="200" height="200" alt="Now Loading...">
                <p>Now Loading...</p>
            </div>
        </div>
    </div>
        
        <div id="wrap">
            <!-- navbar のブレード -->
            @include('commons.navbarwelcome')
        
            <div>
                @yield('content')    
            </div>
        </div>

    
    </body>
        <!-- loading js  -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
                  
        //loading effect
        $(function() {
          var h = $(window).height();
         
          $('#wrap').css('display','none');
          $('#loader-bg ,#loader').height(h).css('display','block');
        });
         
        $(window).load(function () { //全ての読み込みが完了したら実行
          $('#loader-bg').delay(900).fadeOut(800);
          $('#loader').delay(600).fadeOut(300);
          $('#wrap').css('display', 'block');
        });
         
        //10秒たったら強制的にロード画面を非表示
        $(function(){
          setTimeout('stopload()',10000);
        });
         
        function stopload(){
          $('#wrap').css('display','block');
          $('#loader-bg').delay(900).fadeOut(800);
          $('#loader').delay(600).fadeOut(300);
        }
          
    </script>
</html>