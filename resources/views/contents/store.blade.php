<!--検索機能はまだ出来ていない -->

@extends('layouts.app')

@section('content')


    @if (count($restaurants) > 0)
        <div class="container">
        <h2>お店一覧</h2>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>お店の名前</th>
                    <th>エリア</th>
                    <th>タイプ</th>
                  </tr>
                </thead>
        
            @foreach($restaurants as $restaurant)

                <tbody>
                  <tr>
                    <td>{{{ $restaurant->id }}}</td>
                    <td>{{{ $restaurant->name }}}</td>
                    <td>{{{ $restaurant->area }}}</td>
                    <td>{{{ $restaurant->smoke }}}</td>
                  </tr>
                </tbody>
 
            @endforeach
            
                
            </table>
            
            {!! Form::open(['method' => 'GET']) !!}
            {!! Form::text('s', null) !!}
            {!! Form::submit('検索') !!}
            {!! Form::close() !!}
    
    
        </div>
        
    
    
    
    @endif
    

@endsection


