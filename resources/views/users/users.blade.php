@if (count($users) > 0)
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Smokers</h2>
@foreach ($users as $user)
   

    <div class="col-md-4">
        <div class="img-thumbnail" id="profile_pic_flame">
            <img  id="profile_pic" src="{{secure_asset('/images/cigs/'. $user->brand. '.jpg')}}"  alt="">
            <p class="nickname">{!! link_to_route('users.show', $user->nickname, ['id' => $user->id]) !!}</p>
        </div>
    </div>

@endforeach
        </div>    
    </div>
</div>
{!! $users->render() !!}
@endif