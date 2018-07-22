@extends('layouts.app')


@section('content')

<div class="before_login" style="margin:30px">
 


        
            
                    <h1 class="signup">Sign up</h1>
                    
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        
            <!--名前-->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="box">
                                <label for="formGroupExampleInput">Nickname</label></br>
                                <input class="input_box"  id="name" type="text"  name="nickname" value="{{ old('nickname') }}" required autofocus>

                                @if ($errors->has('nickname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
            <!--銘柄-->                
                        <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">

                            <div class="box">
                                <label for="formGroupExampleInput">What brand do you usually smoke?</label></br>
                                <select class="input_box" id="brand" type="text" class="form-control" name="brand" value="{{ old('brand') }}" required autofocus>name="example2" size="5">
                                        <option id="placeholder" value=""></option>
                                        <option value="cigarette">cigarette</option>
                                        <option value="menthol">menthol</option>
                                        <option value="iqos">iqos</option>
                                        <option value="glow">glow</option>
                                        <option value="ploomtech">ploomtech</option>
                                        <option value="etc">etc</option>
                                </select>

                                @if ($errors->has('brand'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
            <!--場所-->
                        <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                           <div class="box">
                                <label for="formGroupExampleInput">Where do you usually smoke?</label></br>
                                <select class="input_box" id="place" type="text" class="form-control" name="place" value="{{ old('place') }}" required autofocus>name="example2" size="5">
                                        <option id="placeholder" value=""></option>
                                        <option value="Indoor smoking area near the company">Indoor smoking area near the company</option>
                                        <option value="Outdoor smoking area near the company">Outdoor smoking area near the company</option>
                                        <option value="In the rise shopping center">In the rise shopping center</option>
                                        <option value="The smoking are near the KFC">The smoking are near the KFC</option>
                                        <option value="etc">etc</option>
                                </select>
                               
                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

            <!--本数-->
                        <div class="form-group{{ $errors->has('tabaco') ? ' has-error' : '' }}">
                            <div class="box">
                                <label for="formGroupExampleInput">How many times you smoke in a day?</label></br>
                                <select class="input_box" id="tabaco" type="text" class="form-control" name="tabaco" value="{{ old('tabaco') }}" required autofocus>name="example2" size="5">
                                        <option id="placeholder" value=""></option>
                                        <option value="1～3 cigarettes">1～3 cigarettes</option>
                                        <option value="5 ～10 cigarettes">5 ～10 cigarettes</option>
                                        <option value="10～15 cigarettes">10～15 cigarettes</option>
                                        <option value="15 cigarettes～1 pack">15 cigarettes～1 pack</option>
                                        <option value="more than 1 pack">more than 1 pack</option>
                                </select>

                                @if ($errors->has('tabaco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tabaco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

            <!--パスワード-->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="box">
                                <label for="formGroupExampleInput">Password</label></br>
                                <input class="input_box" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

            <!--パスワード確認-->
                        <div class="form-group">
                            <div class="box">
                                <label for="formGroupExampleInput">Password-confirm</label></br>
                                <input class="input_box" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>



                        <!--<div>-->
                        <!--    <button type="submit" class="welcomebuttons"><span>SIGN UP</span></button>-->
                        <!--</div>-->
                        
                        <div class="btnframe">
                            <span class="btneffect"></span>
                                <button type="submit">JOIN SMOKY</button>
                        </div>
                        
                    </form>

</div>


<style>
            .before_login{
              font-family: "Times New Roman";
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


    

