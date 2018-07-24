@extends('layouts.app')

@section('content')


<div class="before_login">
                <h1 class="signup">Login</h1>
                
    
    <div>
        <div class="col-md-6 col-md-offset-3">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                            <label for="nickname">Nickname</label>
                            <div class="box">
                                <input  class="input_box" id="nickname" type="text" class="form-control" name="nickname" value="{{ old('nickname') }}" required autofocus>
                                @if ($errors->has('nickname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <div class="box">
                                <input  class="input_box" id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="checkbox">
                            </div>
                        </div>

                        <!-- ログインボタン  -->
                        <div class="btnframe">
                            <span class="btneffect"></span>
                                <button type="submit">ENTER</button>
                        </div>
                    </form>
        </div>
        
               <p id="page-top"><a href="{{ route('welcome') }}" class="glyphicon glyphicon-home"></a></p>

    </div>
    
</div>

            

                

<!--　ページにかけるｃｓｓ　-->
<style>
            
            input:focus{
                outline-color:#FFCC99;
            }
            
            
            
            
            
            .before_login{
                font-family: "Times New Roman";
                margin-top: 150px;
                
            }
            
            
                       /* ボタンの加工 */
            .btnframe{
              width:150px;
              height:60px;
              border:2px solid white;
              border-radius: 3px;
              cursor:pointer;
              position:relative;
              overflow:hidden;
              margin: auto;
              display:inline-block;
            }
            .btnframe button{
              font-family: "Times New Roman";
              font-size:20px;
              color:white;
              text-decoration:none;
              line-height:50px;
              transition:all .3s ease;
              z-index:2;
              position:relative;
              background-color: transparent;
              border-color:transparent;
              width:150px;
            }
            
            .btnframe button:active{
                border-color:transparent;
            }
            
            
            .btneffect{
              width:150px;
              height:60px;
              left:-150px;
              background:white;
              position:absolute;
              transition:all .3s ease;
              z-index:1;
            }
            .btnframe:hover .btneffect{
              left:0;
            }
            .btnframe:hover button{
              color:black;
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
            
            

        </style>

@endsection
