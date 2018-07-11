@extends('layouts.app')

@section('content')


    @if (count($microposts) > 0)
        @include('microposts.microposts', ['microposts' => $microposts])
    @endif
    

@endsection