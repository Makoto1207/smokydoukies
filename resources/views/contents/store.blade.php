@extends('layouts.app')

@section('content')

    @if (count($restaurants) > 0)
        <div id="hoge" style="margin-top: 70px;">
        
        <div class="col-md-10 col-md-offset-1">
        <h2 id="store_all">お店リスト</h2>
        </div>
        <div class="col-md-8 col-md-offset-2">
        
        <span id="store_all">ボタンを押すとリストが更新されるよ！</span>
        {!! Form::open(['method' => 'GET']) !!}
        {!! Form::text('name', null) !!}
        {!! Form::submit('検索') !!}
        {!! Form::close() !!}
        
            <table class="table table-striped">
                <thead>
                  <tr id="store_all">
                    <th>ID</th>
                    <th>お店の名前</th>
                    <th>エリア</th>
                    <th>タイプ</th>
                    <th>URL</th>
                  </tr>
                </thead>
        
            @foreach($restaurants as $restaurant)

                <tbody class="table_color">
                  <tr>
                    <td>{{{ $restaurant->id }}}</td>
                    <td>{{{ $restaurant->name }}}</td>
                    <td>{{{ $restaurant->area }}}</td>
                    <td>{{{ $restaurant->smoke }}}</td>
                    <td><a href="{{{ $restaurant->url }}}">{{{ $restaurant->url }}}</a></td>
                  </tr>
                </tbody>
 
            @endforeach
            
                
            </table>

        </div>
        </div>
        </div>   
        </div>
    @endif
    

@endsection