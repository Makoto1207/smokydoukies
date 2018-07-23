<ul class="media-list">
@foreach ($microposts as $micropost)
    <?php $user = $micropost->user; ?>
    <li class="media">
        <div class="media-left">
            <img id="tweet_pic" class="media-object img-rounded" src="{{secure_asset('/images/cigs/'. $user->brand. '.jpg')}}" style="margin-top: 10px;">
        </div>
        <div class="media-body"  id="tweet">
            <div >
                {!! link_to_route('users.show', $user->nickname, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $micropost->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($micropost->content)) !!}</p>
            </div>
            <div>
                @if (Auth::id() == $micropost->user_id)
                    {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'delete_button']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $microposts->render() !!}




<style>
    
    /* TWEETに関するｃｓｓ */
    #tweet_pic{
        width: 80px;
    }
    
     #tweet{
         color: white;
     }
     
     
    .delete_button{
        color: #800000;
        background-color: black;
        font-weight: bold;
        border:solid 2px;
        border-color: #800000;
    }

</style>