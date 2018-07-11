@extends('layouts.app')


@section('content')

      
        
    <body>
        <div id="menu">
            <div id="leftoptions">
                <ul style="list-style:none;">
                    <li><a href="#box1" id="link1">profile</a></li>
                    <li><a href="#box2" id="link2">timeline</a></li>
                    <li><a href="#box3" id="link3">user</a></li>
                    <li><a href="#box4" id="link4">map</a></li>
                </ul>
            </div>
        </div>
        
        <div>
            <img src ="{{secure_asset('/images/profile.jpg')}}" alt="profile" id="box1">
            <img src ="{{secure_asset('/images/timeline.jpg')}}" id="box2">
            <img src ="{{secure_asset('/images/user.jpg')}}" id="box3">
            <img src ="{{secure_asset('/images/map.jpg')}}" id="box4">
        </div>
            

    </body>
    
@endsection