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


@endsections


<style>
    .post_box{
        background-color:black;
        color:white;
        font-size:18px;
        height: 200px;
        width:300px;
        margin:  0;
        border: solid 3px #000000;
        border-color: white;
    }
    
    .post_button{
         color: #baab8f;
        font-size: 15px;
        background-color: black;
        border:solid 1px opacity;
        border-color: #baab8f;
        padding: 4px 15px 4px 15px;
        margin-bottom:30px;
         
     }
</style>