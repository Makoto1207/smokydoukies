
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('', ['class' => "glyphicon-heart"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('',['class' => 'glyphicon-heart']) !!}
        {!! Form::close() !!}
    @endif

