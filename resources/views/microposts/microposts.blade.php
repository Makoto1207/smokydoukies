
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
            
          
                <div class="col-md-4">
                    @include('button.favorite_button', ['microposts' => $microposts])
                </div>
                <div class="col-md-3">
                   @include('button.delete_button', ['microposts' => $microposts])
                    
                </div>
            
        
                
        </div>
    </li>
@endforeach
</ul>





<style>
    
    /* TWEETに関するｃｓｓ */
    #tweet_pic{
        width: 80px;
    }
    
     #tweet{
         color: white;
     }
     
    form {
    display: inline;
    margin-top: 0em;
    }
    
  
        

    
    
    

</style>