@extends('layouts.app')

@section('content')

    @if (count($restaurants) > 0)
        <div id="hoge" style="margin-top: 70px;">
        
        <div class="col-md-10 col-md-offset-2" >
        <h2 id="titlename">Restaurant List</h2>
        </div>
        <div class="col-md-8 col-md-offset-2">
        
        <span id="search_message">Push the button to update the restaurant list　
        <br>  Area : <a href="{{ route('store')}}" id="search_message2">All</a> ( <a href="{{ route('store')}}?name=(A)" id="search_message2">A</a> | <a href="{{ route('store')}}?name=(B)" id="search_message2">B</a> | <a href="{{ route('store')}}?name=(C)" id="search_message2">C</a> | <a href="{{ route('store')}}?name=(D)" id="search_message2">D</a> )
        <br>  Type : <a href="{{ route('store')}}?name=禁煙" id="search_message2">禁煙</a> | <a href="{{ route('store')}}?name=分煙" id="search_message2">分煙</a> | <a href="{{ route('store')}}?name=喫煙可"  id="search_message2">喫煙可</a></span>
        <br>
        {!! Form::open(['method' => 'GET']) !!}
        {!! Form::text('name', null) !!}
        {!! Form::submit('Search') !!}
        {!! Form::close() !!}
        
        <table class="table table-striped">
            <thead>
              <tr id="store_all">
                <th>Restaurant</th>
                <th>Area</th>
                <th>Type</th>
              </tr>
            </thead>
    
        @foreach($restaurants as $restaurant)

            <tbody class="table_color">
              <tr>
                <!-- <td>{{{ $restaurant->name }}}</td> -->
                <td><a href="{{{ $restaurant->url }}}">{{{ $restaurant->name }}}</a></td>
                <td>{{{ $restaurant->area }}}</td>
                <td>{{{ $restaurant->smoke }}}</td>
              </tr>
            </tbody>
            
        @endforeach
                
        </table>
        
        {!! Form::open(['method' => 'GET']) !!}
        {!! Form::text('name', null) !!}
        {!! Form::submit('Search') !!}
        {!! Form::close() !!}


        </div>
        </div>
        </div>   
        </div>
    @endif
    
    
    <style>
      
      #titlename{
        font-family: "Time New Romans";
        color: gray;
      }
      
    </style>
    
    
    
    
    
    
    

@endsection