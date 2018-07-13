@if (count($users) > 0)
<ul class="media-list">
@foreach ($users as $user)
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->nickname, 50) }}" alt="">
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
</ul>
{!! $users->render() !!}
@endif