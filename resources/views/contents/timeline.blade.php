@extends('layouts.app')

@section('content')

    <!-- ツイートを表示するためまmicropost blade 私用 -->
    @if (count($microposts) > 0)
        @include('microposts.microposts', ['microposts' => $microposts])
    @endif
    

@endsection