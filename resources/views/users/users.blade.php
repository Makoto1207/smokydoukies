@if (count($users) > 0)
<div class="container">
    <div class="row">
        
    
@foreach ($users as $user)

    <div class="col-md-3">
        <div class="img-thumbnail" id="profile_pic">
            <img  src="{{ Gravatar::src($user->nickname, 250) }}" alt="">
            <p class="nickname">{!! link_to_route('users.show', $user->nickname, ['id' => $user->id]) !!}</p>
        </div>
    </div>

@endforeach
        
    </div>
</div>
{!! $users->render() !!}
@endif