<?php include __DIR__.'/module_head.php' ?>
    <style>
    /*Header--------------------------------------------------------*/
        /*Black*/
        header.black{
            color: #666 ;
            background-color: #ffffffcc ;
        }
        header.black a{
            background-color: #666 ;
        }
        /*Container-------------------------------------------------------------------*/
        #container{
            width: 100% ;
        }
        /*Banner*/
        .banner{
            width: 100% ;
            /* position: relative ; */
            display: flex ;
            justify-content: center ;
            align-items: center ;
            overflow: hidden ;
        }
        .banner img{
            width: 100% ;
        }
        .banner .bn_bg{
            position: relative ;
            z-index: -1 ;
        }
        .banner .bn{
            display: flex ;
            width: 100% ;
            position: absolute ;
            justify-content: space-around ;
            align-items: center ;
            flex-wrap: wrap ;
            overflow: hidden ;
        }
        .banner .bn h2{
            margin-top: -8% ;
            font-size: 30px ;
            font-weight: bold ;
            color: #FFF ;
            margin-left: 2% ;
            position: relative ;
            z-index: 2 ;
        }
        .banner .bn .b_umbrella{
            width: 30% ;
            margin-right: 2% ; 
            animation: umbrellaUp 1s 0.5s 1 both  ;
        }
        .b_umbrella img{
            transform: rotate(-20deg) ;
        }
        .banner .bn .b_cloud{
            min-width: 100% ;
            position: absolute ;
            bottom: -50% ;
        }
        @keyframes umbrellaUp {
            0%{ transform: translateY(90%) ; }
            100%{ transform: translateY(10%) ; }
        }
        /*Main*/
        .main{
            display: flex ;
            padding-top:100px ; 
            justify-content: space-around ;
            flex-wrap: wrap ;
            color: #666 ;
        }
        /*Select*/
        .select{
            width: 15% ;
            margin-top: 40px ;
            padding-left: 20px ;
        }
        .select .um{
            margin-top: 40px ;
        }
        .select .um a{
            display: block ;
            padding: 8px ;
            padding-left: 12px ;
            font-size: 18px ;
            color: #1F5572 ;
            border:1px solid #1F5572 ; 
            border-radius: 20px ;
            transition: 0.5s ;
        }
        .select .um.act a{
            background-color: #1F5572 ;
            color: #FFF ;
        }
        .select .um a:hover{
            background-color: #1F5572 ;
            color: #FFF ;
        }
        .check{
            margin-top: 20px ;
            padding-left: 8px ;
            display: flex ;
            flex-wrap: wrap ;
            justify-content: space-between ;
        }
        .check .label_group{
            width: 42% ;
            margin: 8px 5px ;
        }
        .radio{
            margin-top: 80px ;
            border-top: 2px solid #1F5572 ;
            padding-top: 20px ;
        }
        .radio p{
            color: #1F5572 ;
            margin-bottom: 20px ;
        }
        .radio p i{
            display: none ;
        }
        .radio .label_group{
            margin: 8px 5px ;
        }
        /*List*/
        .list{
            width: 75% ;
            display: flex ;
            flex-wrap: wrap ;
            align-content: flex-start ;
        }
        .list .card{
            width: 32% ;
            min-width: 300px ;
            min-height: 0px ;
            background-color: #FFF ;
            margin: 1% auto ;
            position: relative ;
            overflow: hidden ;
        }
        .list .card.has{
            background-color: #808080 ;
        }
        .card.has::before{
            width: 100%;
            height: 130%;
            top: 0;
            left: 0;
            content: '';
            background-color: #161414;
            position: absolute;
            transition: all 0.4s ease-in-out;
            transform: rotate(16deg) translateY(-16%) translateX(110%);
        }
        .card img{
            width: 100% ;
            display: block ;
            transition: 0.3s ;
        }
        .card .content{
            position: absolute ;
            top: 27% ;
            left: -55% ;
            transition: 0.4s ;
        }
        .card p{
            text-align: center ;
            font-size: 18px ;
            font-weight: bold ;
            color: #FFF ;
            margin: 15px 0 ;
        }
        .card p.name{
            font-size: 20px ;
        }
        .card.has:hover::before{
            transform: rotate(16deg) translateY(-16%) translateX(50%);
        }
        .card.has:hover img{
            opacity: 0.3 ;
        }
        .card.has:hover .content{
            left: 25% ;
        }
        /*Pagelist*/
        .pagelist{
            min-width: 100% ;
            display: flex ;
            justify-content: center ;
            margin: 60px 0 20px;
        }
        .pagelist .pageitem a{
            display: block ;
            margin: 8px ;
            border-bottom: 1px solid transparent ;
            text-align: center ;
        }
        .pagelist .pageitem a.act{
            border-bottom: 1px solid #666 ;
        }
        /*toTop*/
        .toTop{
            color: #1F5572 ;
            position: relative ;
            top: -15px ;
            margin-left: 94% ;
            cursor: pointer ;
        }
        .toTop .tr{
            width: 20px;
            height: 20px;
            margin: 5px auto;
            position: relative ;
            left: -2px ;
            transform: rotate(180deg) ;
            -webkit-mask-image: url(images/icon_scroll.svg) ;
            background-color:#1F5572;
            animation: scroll_top .5s linear infinite;
            animation-direction: alternate;
            animation-delay: .1s;
        }
        .toTop h5{
            font-size: 16px ;
            color: #1F5572 ;
        }
        @keyframes scroll_top {
            0%   { opacity: .2; top: 2px; }
            50%  { opacity: .5; }
            100% { opacity: 1; top: -4px ;}
        }
    </style>
    <style>
        @import url("css/productList_phone.css");
    </style>
    <?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <div class="banner">
            <img src="images/banner_LIST.jpg" alt="" class="bn_bg">
            <div class="bn">
                <h2>Be Your Unique Unbrella.</h2>
                <div class="b_umbrella">
                    <img src="images/home_umbrella_b.png" alt="">
                </div>
                <div class="b_cloud">
                    <img src="images/all_clouds.png" alt="">
                </div>
            </div>
        </div>
        <div class="main">
            <aside class="select">
                <div class="sel_um">
                    <div class="um rain act">
                        <a class="btn_um">雨傘</a>
                        <div class="check">
                            <div class="label_group">
                                <input type="checkbox" name="plain" id="plain" class="color"><label for="plain">素色</label>
                            </div>
                            <div class="label_group">
                                <input type="checkbox" name="pattern" id="pattern" class="color"><label for="pattern">花色</label>
                            </div>
                            <div class="label_group">
                                <input type="checkbox" name="straight" id="straight" class="skeleton"><label for="straight">直傘</label>
                            </div>
                            <div class="label_group">
                                <input type="checkbox" name="folding" id="folding" class="skeleton"><label for="folding">折傘</label>
                            </div>
                            <div class="label_group">
                                <input type="checkbox" name="auto" id="auto"><label for="auto">自動傘</label>
                            </div>
                        </div>
                    </div>
                    <div class="um sun">
                        <a class="btn_um">陽傘</a>
                        <div class="check">
                            <div class="label_group">
                                <input type="checkbox" name="plain" id="plain" class="color"><label for="plain">素色</label>
                            </div>
                            <div class="label_group">
                                <input type="checkbox" name="pattern" id="pattern" class="color"><label for="pattern">花色</label>
                            </div>
                            <div class="label_group">
                                <input type="checkbox" name="straight" id="straight" class="skeleton"><label for="straight">直傘</label>
                            </div>
                            <div class="label_group">
                                <input type="checkbox" name="folding" id="folding" class="skeleton"><label for="folding">折傘</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="radio">
                    <p>排序<i class="fas fa-plus"></i></p>
                    <div class="radio_box">
                        <div class="label_group">
                            <input type="radio" name="Sort" id="pop" checked="checked"> <label for="pop">人氣排序</label>
                        </div>
                        <div class="label_group">
                            <input type="radio" name="Sort" id="pricedown"> <label for="pricedown">價格由高到低</label>
                        </div>
                        <div class="label_group">
                            <input type="radio" name="Sort" id="priceup"> <label for="priceup">價格由低到高</label>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="list">
                <div class="card has"> 
                    <img src="images/town-navy.png" alt="">
                    <div class="content">
                        <p class="name">橋上的卡耶伯特</p>
                        <p class="price">NT 2180</p> 
                    </div>
                </div>
                <div class="card none"> </div>
                <div class="card has"> 
                    <img src="images/town-navy.png" alt="">
                    <div class="content">
                        <p class="name">我是品名</p>
                        <p class="price">NT 2180</p> 
                    </div>
                </div>
                <div class="card none"> </div>
                <div class="card has"> <img src="images/town-navy.png" alt=""></div>
                <div class="card none"> </div>
                <div class="card has"> <img src="images/town-navy.png" alt=""></div>
                <div class="card none"> </div>
                <div class="card has"> <img src="images/town-navy.png" alt=""></div>
                <div class="card none"> </div>
                <div class="card has"> <img src="images/town-navy.png" alt=""></div>
                <div class="card none"> </div>
            </div>
            <ul class="pagelist">
                <li class="pageitem"><a><i class="fas fa-angle-double-left"></i></a></li>
                <li class="pageitem"><a class="act">1</a></li>
                <li class="pageitem"><a>2</a></li>
                <li class="pageitem"><a>3</a></li>
                <li class="pageitem"><a><i class="fas fa-angle-double-right"></i></a></li>
            </ul>
            <div class="toTop">
                <div class="tr"></div>
                <h5>TOP</h5>
            </div>
        </div>
    </div>
    <?php include __DIR__.'/module_footer.php' ?>
    <script>
        var scrolllast;  
        $(".btn_um").click(function(){
            $(this).closest(".um").addClass("act").siblings().removeClass("act");
        });
        $(".radio p").click(function(){
            $(this).closest(".radio").toggleClass("show");
        });
        /*hideNav*/
        $(window).scroll(function(){
            var scrollNow=$(this).scrollTop();
            // console.log(scrollNow);
            if (scrollNow < 300) {
                $("header").removeClass("hide");
                $("header").removeClass("black");
            } else {
                if (scrollNow > scrolllast) {
                    $("header").addClass("hide");
                    $("header").addClass("black");
                } else {
                    $("header").removeClass("hide");
                }
            }
            scrolllast=scrollNow;
        });
        /*to top*/
        $(".toTop").click(function(){
            $("html,body").animate({
                    scrollTop:0
                },1000,);
        });
    </script>
<?php include __DIR__.'/module_foot.php' ?>