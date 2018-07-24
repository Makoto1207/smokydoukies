@extends('layouts.app')




@section('content')
    

<div class="container" style="margin-top: 70px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Timeline</h2>
            
                
                <div class="col-md-6">
                    <div class="col-12">
                    　{!! Form::open(['method' => 'GET']) !!}
                    　{!! Form::text('name', null) !!}
                    　{!! Form::submit('Search') !!}
                    　{!! Form::close() !!}
                    </div>

                    <!--投稿フォーム-->
                    <div class="col-12">
                      {!! Form::open(['route' => 'microposts.store']) !!}
                      {!! Form::textarea('content', old('content'),['class'=>'post_box', 'placeholder'=>'Comment me!!!'])!!}
                    </div>
                    <!--投稿ボタン-->
                    <div class="col-12">
                        {!! Form::submit('Post',['class'=>'post_button'] )!!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-6">
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
                </div>
        </div>     
    </div>
</div>