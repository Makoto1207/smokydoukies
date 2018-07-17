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

                        <div class="form-group">
                           
                                <button type="submit"  class="welcomebuttons_2"><span>LOGIN</span></button>

                    </form>

</div>
@endsection
