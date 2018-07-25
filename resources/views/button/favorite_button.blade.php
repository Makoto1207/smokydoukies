
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => 'unfav_button']) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite',['class' => 'fav_button']) !!}
        {!! Form::close() !!}
    @endif


<style>
    .unfav_button{
        color: #006400;
        background-color: black;
        font-weight:bold;
        border:solid 2px #006400;
    }
    
    .fav_button{
        color: #006400;
        background-color: black;
        border:solid 1px #006400;
    }
</style>

              