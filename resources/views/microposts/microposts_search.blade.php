{!! $microposts->render() !!}


<ul class="media-list">
@foreach ($microposts as $micropost)
    <?php $user = \App\User::find($micropost->user_id); ?>
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
                @include('favorite.favorite_button', ['microposts' => $microposts])
                <span class="badge">{{$count_fav_micro}}</span>
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
    
    ul.pagination{
        margin:0;
        font-size:15px;
        background-color: black;
    }
    
    
    /*現在のページのタブ*/
    .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 3;
        color: darkred;
        cursor: default;
        font-size: 20px;
        font-family: "Times New Roman";
        text-align: center;
        width:30px;
        height:35px;
        padding: 6px;
        text-decoration: none;
        background-color:black;
        border-color: #337A7A;
    }
    
    /*その他のページのタブ*/
    .pagination>li>a, .pagination>li>span {
        position: relative;
        font-size: 20px;
        font-family: "Times New Roman";
        text-align: center;
        width:30px;
        height:35px;
        padding: 6px;
        margin:0px;
        color:#FFCC99;
        text-decoration: none;
        border: 1px solid #ddd;
    }
    
    .pagination>.disabled>a, .pagination>.disabled>a:focus, .pagination>.disabled>a:hover, .pagination>.disabled>span, .pagination>.disabled>span:focus, .pagination>.disabled>span:hover {
        color:#FFCC99;
        cursor: not-allowed;
        background-color: black;
        border-color: #FFCC99;
    }
    
    
        

    
    
    

</style>