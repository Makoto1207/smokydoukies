@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 75px;">
    <div class="col-md-10 col-md-offset-1">

      
        <!--左側のコンテンツ-->
        <div class="col-12 col-md-6"> 
        
            <!--写真と名前-->
            <div>
                <img  id="profile_pic" src="{{secure_asset('/images/cigs/'. $user->brand. '.jpg')}}"  class="img-responsive">
                <p id="pro_nickname">   {{ $user->nickname }} </p>
            </div>
  
            <!--基本情報-->  
            <div class="infomation">
                <p id='question'>Smoking area</p>
                <p id='answer'>{{ $user->place }}</p> 
                
                <p id='question'>Cigarettes /a day</p>
                <p id='answer'>{{ $user->tabaco }}</p>
    
                <p id='question'>Cigarette brand</p>
                <p id='answer'>{{ $user->brand }}</p>       
            </div>
            
        </div>     
            
            
            
            
        <!--右側のコンテンツ-->
        <div class="col-12 col-md-6" style="margin-top: 0px;">
            
            @if (Auth::id() == $user->id)
                <div class="col-12">
                  {!! Form::open(['route' => 'microposts.store']) !!}
                　{!! Form::textarea('content', old('content'),['class'=>'post_box', 'placeholder'=>'Comment me!!!'])!!}
                </div>
                      
                {!! Form::submit('Post',['class'=>'post_button'] )!!}
                {!! Form::close() !!}
            @endif
            
            <div class='tweet1'>
                <div class="col-12">         
                    @if (count($microposts) > 0)
                        @include('microposts.microposts', ['microposts' => $microposts])
                    @endif
                </div>
            </div>
            
        </div> 
        

            
  　</div>


</div>
            <div class="footer_copyright_black">
                ©2018 SMOKY DOUKIES by Seista Co.
            </div>


<style>
    @media (min-width: 768px) {
    .post_box {width: 346px;}
    }
    
    @media (max-width: 768px) {
    .post_box {width: 260px;}
    }
    
    .post_box{
        background-color:black;
        color:white;
        font-size:18px;
        height: 200px;
        margin:  0;
        border: solid 3px #000000;
        border-color: white;
    }
    
    #profile_pic{
        width: 250px;
        margin: auto;
        
        border:5px white solid;
    }


    
    #profile_pic_flame{
        align-items:center;
    }
    
     /*写真の下のニックネームのデザイン*/
     #pro_nickname{
         color:gray;
         font-size: 60px;
         text-align :center;
         font-family: Monotype Corsiva;
         margin: auto;
         margin-bottom:0px;
     }
     
     .infomation{
         margin:0px;
     }
     
     .tweet1{
         color:white;
     }
     
     .post_button{
         color: #baab8f;
        font-size: 15px;
         background-color: black;
         border:solid 1px opacity;
         border-color: #baab8f;
         padding: 4px 15px 4px 15px;
         margin-bottom: 40px;
     }
    
    #answer{
        font-family: Monotype Corsiva;
        color:#baab8f ;
        font-size: 25px;
        text-align: center;
    }
    #question{
        font-family: Monotype Corsiva;
        color:white;
        font-size: 22px;
        text-align: center;
        margin-bottom:0px;
    }
    
    :-webkit-input-placeholder { /* Chrome */
      color: gray;
    }
    
    .footer_copyright_black{
        height:15px;
        background-color: black;
        color:darkgray;
        margin-top: 60px;
    }
    
    
</style>
    
    
@endsection