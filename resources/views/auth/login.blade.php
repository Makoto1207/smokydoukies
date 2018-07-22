@extends('layouts.app')

@section('content')


<div class="before_login">
    
    
    

           
                <h1 class="signup">Login</h1>

               
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


<!--　ページにかけるｃｓｓ　-->
<style>

            .before_login{
                font-family: "Times New Roman";
                margin: 30px;
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
    
</style>
@endsection
