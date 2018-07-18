@extends('layouts.app')




@section('content')
    

<div class="container" style="margin-top: 70px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Timeline</h2>
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
        </div>     
    </div>
</div>


@endsections
