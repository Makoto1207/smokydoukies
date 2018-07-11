@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($restaurants) > 0)
        <ul>
            @foreach($data as $item)
            <div>
                <div>{{{ $restaurant->id }}}</div>
                <div>{{{ $restaurant->name }}}</div>
                <div>{{{ $restaurant->area }}}</div>
                <div>{{{ $restaurant->smoke }}}</div>
                
            </div>
            <hr>
            @endforeach
            
        
        </ul>
    @endif

@endsection


