@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nickname" class="col-md-4 control-label">Nickname</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nickname" value="{{ old('nickname') }}" required autofocus>

                                @if ($errors->has('nickname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                            <label for="brand" class="col-md-4 control-label">What brand do you usually smoke?</label>

                            <div class="col-md-6">
                                
                                <select id="brand" type="text" class="form-control" name="brand" value="{{ old('brand') }}" required autofocus>name="example2" size="5">
                                        <option value="">6つの選択肢から選択</option>
                                        <option value="選択肢2">紙たばこ</option>
                                        <option value="選択肢3">紙メンソール</option>
                                        <option value="選択肢4">アイコス</option>
                                        <option value="選択肢5">グロー</option>
                                        <option value="選択肢6">プルームテック</option>
                                        <option value="選択肢7">その他</option>
                                </select>

                                @if ($errors->has('brand'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                            <label for="tabaco" class="col-md-4 control-label">Where do you usually smoke?</label>

                            <div class="col-md-6">
                                 <select id="place" type="text" class="form-control" name="place" value="{{ old('place') }}" required autofocus>name="example2" size="5">
                                        <option value="">5つの選択肢から選択</option>
                                        <option value="place1">会社近くの室内喫煙所</option>
                                        <option value="place2">会社近くの屋外喫煙所</option>
                                        <option value="place3">会社近くのショッピングモール内</option>
                                        <option value="place4">KFCの近くの喫煙所</option>
                                        <option value="place5">その他</option>
                                </select>
                                
                               

                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tabaco') ? ' has-error' : '' }}">
                            <label for="tabaco" class="col-md-4 control-label">How many times you smoke in a day?</label>

                            <div class="col-md-6">
                                 <select id="tabaco" type="text" class="form-control" name="tabaco" value="{{ old('tabaco') }}" required autofocus>name="example2" size="5">
                                        <option value="">5つの選択肢から選択</option>
                                        <option value="tabaco1">1～3本</option>
                                        <option value="tabaco2">5 ～10本</option>
                                        <option value="tabaco3">10～15本</option>
                                        <option value="tabaco4">15～1箱</option>
                                        <option value="tabaco5">１箱以上</option>
                                </select>

                                @if ($errors->has('tabaco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tabaco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
