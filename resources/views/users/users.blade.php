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
        <div class="media-body">
            <div>
                {{ $user->nickname }}
            </div>
            <div>
                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
            </div>
            
            <section>
              <article>
                <div class="blue"></div>
                <div class="green"></div>
              </article>
              <a class="logo" href="http://anime-js.com"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1137/anime-logo.png"></img></a>
            </section>
        </div>
    </li>
@endforeach
        </div>    
    </div>
</div>
{!! $users->render() !!}
@endif