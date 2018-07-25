@if (count($users) > 0)

<div class="container" style="margin-top: 70px;">
    
    <div class="col-10 col-offset-1">
        <h2 class="titleforSmokers">Smokers</h2>
            
            <div class="row" id="render">
            {!! $users->render() !!}
            </div>
            
        <div class="row">    
        @foreach ($users as $user)
           
        
            <div class="col-12 col-md-4">
                <div class="img-thumbnail" id="profile_pic_flame">
                    <img  src="{{secure_asset('/images/cigs/'. $user->brand. '.jpg')}}"  class='img-responsive'>
                    <p class="nickname">{!! link_to_route('users.show', $user->nickname, ['id' => $user->id]) !!}</p>
                </div>
            </div>
        
        @endforeach
        </div>
         
        <div class="row" id="render">
        {!! $users->render() !!}
        </div>
        
    </div>  
</div>

@endif

<style>

    h2 {
        font-family:"Time New Romans";
    }
    
    p {
        margin:10px;
    }
    
    p a{
        font-family: "Monotype Corsiva";
    }
    
    /* 文字の色変更 */
    .nickname {
        text-align: center;
    }
    .nickname a{
        color: black;
        font-size:30px;
    }
    .nickname a:hover{
        transform: scale(1.2);
        text-decoration: none;
    }
    
    /* チェキの様な加工 */
    #profile_pic_flame{
        margin-bottom: 50px;
    }
    
    
    ul.pagination{
        margin:0;
        font-size:15px;
        background-color: black;
    }
    
    /*ページネーションの設定*/
    #render{
        text-align:center;
        margin:20px;
    }
    
    /*現在のページのタブ*/
    .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 3;
        color: darkred;
        cursor: default;
        font-size: 20px;
        font-family: "Times New Roman";
        text-align: center;
        width:30px;
        height:35px;
        padding: 6px;
        text-decoration: none;
        background-color:black;
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

     
    .titleforSmokers{
        color: #C0C0C0;
        margin-top: 15px;
        margin-left: 8px;
        font-size: 28px;
        font-family:  "Lobster", serif;
    }

    
</style>