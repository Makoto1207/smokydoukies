@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 750px;">
    
        <div class="col-md-10 col-md-offset-1">

      
        <div class="col-12 col-md-6"> 
        
            <!--写真と名前-->
            <div  id="profile_pic_flame">
                <img  id="profile_pic" src="{{secure_asset('/images/cigs/'. $user->brand. '.jpg')}}"  class="img-responsive">
                <p id="pro_nickname">   {{ $user->nickname }} </p>
            </div>
           
                    
                   
            <!--基本情報-->  
            <div>
                
                            <p id='question'>smoking area</p>
                            <p id='answer'>{{ $user->place }}</p> 
                        
                            <p id='question'>Sigarets/a day</p>
                            <p id='answer'>{{ $user->tabaco }}</p>
    
                            <p id='question'>sigaret brand</p>
                            <p id='answer'>{{ $user->brand }}</p>
                       
            </div>
        </div>     
            
            
            
            
            <!--↓右側-->
       
       
      <div class="col-12 col-md-6">
            <p class="tweet1">Tweet</p><span class="badge" >{{ $count_microposts }}</span></p>
            
             
                 @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'microposts.store']) !!}
                          {!! Form::textarea('content', old('content'),['class'=>'post_box'])!!}
           
                            
                             {!! Form::submit('Post',['class'=>'post_button'] )!!}
                          
                      
                  {!! Form::close() !!}
            @endif
            <div class='tweet1'>        
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
          
     
    </div>
  </div>          
</div>
    
    
@endsection