@if (count($users) > 0)
{!! $users->render() !!}
<div class="container" style="margin-top: 70px;">
    
        <div class="col-10 col-offset-1">
            <h2>Smokers</h2>
@foreach ($users as $user)
   

    <div class="col-12 col-md-4">
        <div class="img-thumbnail" id="profile_pic_flame">
            <img  src="{{secure_asset('/images/cigs/'. $user->brand. '.jpg')}}"  class='img-responsive'>
            <p class="nickname">{!! link_to_route('users.show', $user->nickname, ['id' => $user->id]) !!}</p>
        </div>
    </div>

@endforeach
        </div>    
   
</div>
{!! $users->render() !!}



<style>
    
    h2{
        font-family:"Time New Romans";
        color: gray;
    }
    p{
        margin:10px;
    }
    p a{
        font-family: "Monotype Corsiva";
    }
    
    
    /* 文字の色変更 */
    .nickname {
        text-align: center;
    }
    .nickname a{
        color: black;
        font-size:30px;
    }
    .nickname a:hover{
        transform: scale(1.2);
        text-decoration: none;
    }
    
    /* チェキの様な加工 */
    #profile_pic_flame{
        margin-bottom: 50px;
    }

    
</style>

@endif