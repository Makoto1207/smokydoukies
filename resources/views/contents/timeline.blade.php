@extends('layouts.app')




@section('content')
    

<div class="container" style="margin-top: 70px;">
    <div class="col-md-10 col-md-offset-1" id="all">
            <h2 class="titleforTimeline">Timeline</h2>
            

         <div class="row">
                <div class="col-md-6">
                    　{!! Form::open(['method' => 'GET']) !!}
                    　{!! Form::text('name', null,['class'=>'search_box','placeholder'=>'Search word (ex.喫煙所)']) !!}
                    　{!! Form::submit('Search',['class'=>'search_button']) !!}
                    　{!! Form::close() !!}

                    <!--投稿フォーム-->
                    
                    <div class="col-12">
                      {!! Form::open(['route' => 'microposts.store']) !!}
                      {!! Form::textarea('content', old('content'),['class'=>'post_box', 'placeholder'=>'Post to timeline.'])!!}
                    </div>
                    <!--投稿ボタン-->
                    <div class="col-12">
                        {!! Form::submit('Post',['class'=>'post_button'] )!!}
                        {!! Form::close() !!}
                    </div>
                </div>
   

                <div class="col-md-6">
                        
                    <div class="row" id="render">
                        {!! $microposts->render() !!}
                    </div>
                    
                    <div class="col-md-6">
                    @if (count($microposts) > 0)
                        @include('microposts.microposts_search', ['microposts' => $microposts])
                    @endif
                    </div>
                </div> 
         </div>
        
        <div class="row">
            <div class="footer_copyright_black">
                ©2018 SMOKY DOUKIES by Seista Co.
            </div>
        </div>
        
    </div>

</div>






<style>
    .post_box{
        background-color:black;
        color:white;
        font-size:20px;
        height: 200px;
        
        margin:  0;
        border: solid 3px #000000;
        border-color: white;
    }
    
    .post_button{
        color: #baab8f;
        font-size: 15px;
        background-color: black;
        border:solid 1px opacity;
        border-color: #baab8f;
        padding: 4px 15px 4px 15px;
        margin-bottom:30px;     
     }
     
    .search_box{
        background-color:black;
        color:white;
        font-size:20px;
        height: 50px;
        width: 225px;
        margin:  0px;
        border: solid 3px #000000;
        border-color: white;
    }
    
    .search_button{
        color: #baab8f;
        font-size: 15px;
        background-color: black;
        border:solid 1px opacity;
        border-color: #baab8f;
        padding: 2px 10px;
        margin-bottom:30px;     
     }
     
    @media (min-width: 768px) {
    .post_box {width: 346px;}
    }
    
    @media (max-width: 768px) {
    .post_box {width: 260px;}
    }
    
    
    /*ページネーションの設定*/
    #render{
        text-align:center;
        margin:20px;
    }
    
    /*現在のページのタブ*/
    .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 3;
        color: black;
        cursor: default;
        font-size: 20px;
        font-family: "Times New Roman";
        text-align: center;
        width:30px;
        height:35px;
        padding: 6px;
        text-decoration: none;
        background-color:#FFCC99;
        border: 1px solid #FFCC99;
       
    }
    
    /*その他のページのタブ*/
    .pagination>li>a, .pagination>li>span {
        position: relative;
        font-size: 20px;
        font-family: "Times New Roman";
        text-align: center;
        width:30px;
        height:35px;
        padding: 6px;
        margin:0px;
        color:#FFCC99;
        text-decoration: none;
        background-color:black;
        border: 1px solid #FFCC99;
    }
    
   /*カーソルを乗せたときの変化*/
    .pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover {
        z-index: 2;
        color: #FFCC99;
        background-color: black;
        border: 2px solid #FFCC99;
        font-weight: bold;
    }
    
    /*選択できないタブの上にカーソルを乗せたときの変化*/
    .pagination>.disabled>a, .pagination>.disabled>a:focus, .pagination>.disabled>a:hover, .pagination>.disabled>span, .pagination>.disabled>span:focus, .pagination>.disabled>span:hover {
        color:#FFCC99;
        cursor: not-allowed;
        background-color: black;
        border: 1px solid #FFCC99;
    }
    
    
    /*端っこ二つのタブ(《》のタブ)*/
    .pagination>li:first-child>a, .pagination>li:first-child>span{
        margin-left: 0;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
    }
    .pagination>li:last-child>a, .pagination>li:last-child>span {
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    }
<<<<<<< HEAD
    
    
    .footer_copyright_black{
        height:15px;
        background-color: black;
        color:darkgray;
        margin-top: 20px;
    }
=======
<<<<<<< HEAD
=======
    .titleforTimeline{
        color: #C0C0C0;
        margin-top: 15px;
        font-size: 28px;
        font-family:  "Lobster", serif;
    }

>>>>>>> 47a985361c0d2a9c54b03b4ae8ad35de357e67c9
>>>>>>> master
   
</style>
@endsection