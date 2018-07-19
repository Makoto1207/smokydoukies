@if (count($users) > 0)
<div class="container" style="margin-top: 70px;">
    
        <div class="col-md-10 col-md-offset-1">
            <h2>Smokers</h2>
@foreach ($users as $user)
   

    <div class="col-12 col-md-4">
        <div  id="profile_pic_flame">
            <img  src="{{secure_asset('/images/cigs/'. $user->brand. '.jpg')}}"  class='img-responsive'>
            <p class="nickname">{!! link_to_route('users.show', $user->nickname, ['id' => $user->id]) !!}</p>
        </div>
    </div>

@endforeach
        </div>    
   
</div>
{!! $users->render() !!}
@endif