@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Sign up</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        
            <!--名前-->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nickname" class="col-md-4 control-label">Nickname</label>

                            <div class="col-md-6">
                                <input class="input_box" id="name" type="text"  name="nickname" value="{{ old('nickname') }}" required autofocus>

                                @if ($errors->has('nickname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
            <!--銘柄-->                
                        <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                            <label for="brand" class="col-md-4 control-label">What brand do you usually smoke?</label>

                            <div class="col-md-6">
                                

                                <select class="input_box" id="brand" type="text" class="form-control" name="brand" value="{{ old('brand') }}" required autofocus>name="example2" size="5">
                                        <option value="">Brand to use</option>
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
                            <label for="tabaco" class="col-md-4 control-label">Where do you usually smoke?</label>

                            <div class="col-md-6">
                                 <select class="input_box" id="place" type="text" class="form-control" name="place" value="{{ old('place') }}" required autofocus>name="example2" size="5">
                                        <option value="">5つの選択肢から選択</option>
                                        <option value="会社近くの室内喫煙所">会社近くの室内喫煙所</option>
                                        <option value="会社近くの屋外喫煙所">会社近くの屋外喫煙所</option>
                                        <option value="会社近くのショッピングモール内">会社近くのショッピングモール内</option>
                                        <option value="KFCの近くの喫煙所">KFCの近くの喫煙所</option>
                                        <option value="その他">その他</option>
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
                            <label for="tabaco" class="col-md-4 control-label">How many times you smoke in a day?</label>

                            <div class="col-md-6">
                                 <select class="input_box" id="tabaco" type="text" class="form-control" name="tabaco" value="{{ old('tabaco') }}" required autofocus>name="example2" size="5">
                                        <option value="">5つの選択肢から選択</option>
                                        <option value="1～3本">1～3本</option>
                                        <option value="5 ～10本">5 ～10本</option>
                                        <option value="10～15本">10～15本</option>
                                        <option value="15～1箱">15～1箱</option>
                                        <option value="１箱以上">１箱以上</option>
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
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input class="input_box" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
