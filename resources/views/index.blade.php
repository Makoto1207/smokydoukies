<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Smoky Doukies</title>


        <!-- Styles -->
        <style>
            body{
                margin: 0px;
                padding: 0px;
            }
            
            #box1,#box2,#box3,#box4{
                height: 100vh;
                width: 100%;
            }
            
            #menu{
                position: fixed;
                top: 0px;
                width: 100%;
            }
            
            #leftoptions{
                height: 10000px;
                width: 10%;
                background-color: pink;
                float: left;
            }
            
            a{
                font-family: Courier;
                font-size: 20px;
                color: white;
                text-decoration: none;
                margin-left: 10px;
            }
            
            li{
                margin-bottom:30px;
            }
            
            
            
            
        </style>
    </head>
        
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
    
    

</html>
