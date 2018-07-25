@if (Auth::id() == $micropost->user_id)
    {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Delete', ['class' => 'delete_button']) !!}
    {!! Form::close() !!}
@endif


<style>
    
    .delete_button{
        color: #800000;
        background-color: black;
        font-weight: bold;
        border:solid 2px;
        border-color: #800000;
    }
    
    
    
</style>