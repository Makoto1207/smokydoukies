@extends('layouts.app')




@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Timeline</h2>
            <div class="panel-body">
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
            </div>
        </div>     
    </div>
</div>


@endsections
