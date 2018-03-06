<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            text-align: center ;
            overflow: hidden ;
            color: #FFF ;
            padding-top: 5% ;
        }
        h1{
            font-size: 72px ;
        }
        h3{
            font-size: 36px ;
        }
        /*Header--------------------------------------------------------*/
        header{
            transition: 0.5s ;
            filter: drop-shadow(0 0 1px #0000004d) ;
        }
        header a{
            transition: 0.5s ;
        }
        /*Black*/
        header.black{
            color: #666 ;
            background-color: #ffffffcc ;
        }
        header.black a{
            background-color: #666 ;
        }
        /*Left aside--------------------------------------------------------------------*/
        .l_aside{
            position: fixed ;
            justify-content: center ;
            top: 30% ;
            left: -2% ;
            width: 10% ;
            z-index: 5 ;
            color: #FFF ;
            transition: 0.5s ;
            filter: drop-shadow(0 0 1px #0000004d) ;
        }
        .l_aside.hide{
            left: -7% ;
        }
        .scroll_f{
            width: 50px ;
            margin: 0 auto ;
        }
        .scroll h4{
            width: 50px ;
            margin: 0 auto ;
            position: relative ;
            top: 25px ;
            font-size: 12px;
            animation: scroll_word 1s linear infinite;
        }
        .scroll .line_f{
            height: 70px;
            width: 1px;
            background-color: #FFF ;
            opacity: 0.8 ;
            margin: 0 auto ;
            position: relative ;
            top: 18px ;
            transition: 0.5s ;
        }
        .so_f{
            width: 15px ;
            margin: 0 auto ;
            position: relative;
            left: 15px ;
        }
        .so_f .s_f{
            width: 8px;
            height: 8px;
            margin: 5px auto;
            -webkit-mask-image: url(images/icon_scroll.svg) ;
            background-color:#FFF;
            animation: scroll_so .5s linear infinite;
            animation-direction: alternate;
        }.so_f .s_1_f{ 
            animation-delay: .1s;
        }
        .so_f .s_2_f{
            animation-delay: .2s;  
        }
        .so_f .s_3_f{
            animation-delay: .3s;
        }
        .l_aside .item{
            margin-bottom: 15px ;
        }
        .l_aside .left_a{
            position: relative ;
            top: 30px ;
        }
        .l_aside a{
            display: block ;
            color: #FFF ;
            margin: 20px 0 ;
            transition: 0.5s ;
        }
        .l_aside a i{
            font-size: 18px ;
            width: 100% ;
            text-align: center ;
        }
        /*black*/
        .l_aside.black{
            color: #666 ;
        }
        .l_aside.black .scroll .line_f{
            background-color: #666 ;
        }
        .l_aside.black .so_f .s_f{
            background-color: #666 ;
        }
        .l_aside.black a{
            color: #666 ;
        }
       @keyframes scroll_word{
            0% {
                opacity: 1;
                -webkit-transform: translateY(0) rotate(-90deg);
                transform: translateY(0) rotate(-90deg);
            }
            100% {
                opacity: .3;
                -webkit-transform: translateY(6px) rotate(-90deg);
                transform: translateY(6px) rotate(-90deg);
            }
       }
       @keyframes scroll_so {
            0%   { opacity: .2; }
            50%  { opacity: .5; }
            100% { opacity: 1; }
        }
        /*Right aside-------------------------------------------------------------------*/
        .r_aside{
            position: fixed ;
            z-index: 3 ;
            display: flex ;
            top: 45% ;
            right: 0 ;
            padding-right: 20px ; 
            filter: drop-shadow(0 0 1px #0000004d) ;
        }
        .r_aside ul li{
            width: 14px ;
            height: 14px ;
            margin: 18px ;
            border-radius: 50% ;
            background-color: #FFF ;
            opacity: 0.4 ;
            transition: 0.5s ;
            cursor: pointer ;
        }
        .r_aside ul li.act{
            opacity: 1 ;
        }
        /*black*/
        .r_aside.black ul li{
            background-color: #666 ;
        }
        /*Container-------------------------------------------------------------------*/
        .fadeOut{
            opacity: 0 ;
        }
        /*Top-------------------------*/
        #top{
            padding-top: 0 ;
        }
        .full{
            width: 100vw ;
            height: 100vh ;
            text-align: center ;
            position: relative ;
            color: #FFF ;
        }
        .rain{
            background-color: #1F5572 ;
        }
        .sun{
            background-color: #F8CF4E ;
            float: right ;
            right: -17px ;
        }
        .full .umbrella{
            width: 80% ;
            padding-bottom: 80% ;
            max-width: 800px ;
            max-height: 800px ;
            margin: 0 auto ;
            position: relative ;
            bottom: -200px ;
            left: -7px ;
            background-size: cover ;
            filter: drop-shadow(0 0 16px #0000004d) ;
        }
        .full .umbrella h2{
            width: 100% ;
            max-width: 800px ;
            margin: 0 auto ;
            font-size: 36px ;
            letter-spacing: 6px ;
            position: absolute ;
            top: 36% ; ;
            z-index: 3 ;
            transition: 0.4s 0.5s ;
            cursor: default ;
        }
        .full.rain h2{
            color: #F8CF4E ;
        }
        .full.sun h2{
            color: #1F5572 ;
        }
        .half{
            width: 50% ;
            height: 100% ;
            overflow: hidden ;
            float: left ;
            transition: 1s ;
        }
        .halfTofull{
            width: 100% ;
        }
        .halfTonull{
            width: 0% ;
        }
        .intro{
            width: 354px ;
            height: 354px ;
            border-radius: 50% ;
            position: absolute ;
            top: 15% ;
            display: flex ;
            align-items: center ;
            transition: 0.5s 0.4s ;
        }
        .intro p{
            width: 65% ;
            height: max-content ;
            margin: 0 auto ;
            line-height: 32px ;
        }
        .intro_r{
            left: 8% ;
            background-color: #1D7FB5 ;
        }
        .intro_l{
            right: 8% ;
            background-color: #E5BD17 ;
        }
        .back{
            width: 26%;
            height: 40% ;
            color: #FFF ;
            font-size: 20px ;
            text-align: center ;
            padding-top: 10px ;
            box-sizing: border-box ;
            bottom: -47% ;
            position: absolute ;
            letter-spacing: 3px ;
        }
        .back_l{
            background-color: #1F5572 ;
            transform: rotateZ(60deg) ;
            transform-origin: right top ;
            cursor: pointer ;
            left: -15%;
        }
        .back_r{
            background-color: #F8CF4E;
            transform: rotateZ(-60deg) ;
            transform-origin: left top ;
            cursor: pointer ;
            right: -15%;
        }
        /*Location----------------------*/
        @keyframes wave{
            0%{
                opacity: 0 ;
            }
            33.3%{
                opacity: 0 ;
            }
            66.6%{
                opacity: 1 ;
            }
            100%{
                opacity: 1 ;
            }
        }
        @keyframes shake {
            50% { transform: rotate(0deg); }
            60% { transform: rotate(8deg); }
            70% { transform: rotate(-8deg); }
            80% { transform: rotate(4deg); }
            90% { transform: rotate(-4deg); }
            100% { transform: rotate(0deg); }
        }
        #location{
            background-image: url(images/home_locatoin.jpg) ;
            background-size: cover ;
            position: relative ;
        }
        #location .phone{
            width: 22% ;
            padding-top: 40% ;
            background-image: url(images/home_phone.svg) ;
            background-size: cover ;
            position: absolute ;
            bottom: -30px ;
            right: 9% ;
        }
        #location .umbrella{
            background-size: cover ;
            width: 36% ;
            /* padding-bottom: 36% ; */
            max-width: 550px ;
            position: absolute ;
            top: 15% ;
            left: 5% ;
            transform-origin:  center ;
            animation: shake 4s infinite ;
        }
        #location .umbrella img{
            transform: rotateZ(-25deg) ;
        }
        /*wave svg*/
        #location svg{
            width: 60px ;
        }
        svg .wave1{
            animation: wave 1.5s infinite ;
        }
        svg .wave2{
            animation: wave 1.5s 0.2s infinite ;
        }
        svg .wave3{
            animation: wave 1.5s 0.4s infinite ;
        }
        #location .umbrella svg{
            transform: rotate(120deg) ;
            position: relative ;
            left: 32% ;
            top: -140px ;
        }
        #location .phone svg{
            position: absolute ;
            top: -60px ;
            left: -60px ;
        }
        .content{
            max-width: 290px ;
            text-align: left ;
            margin: 0 auto ;
            line-height: 32px ;
        }
        .content h3{
            margin-bottom: 50px ;
        }
        #location .content{
            position: relative ;
            left: 2% ;
            top: 30% ;
        }
        /*Light-------------------------*/
        @keyframes float {
            0%{
                transform: translateY(0px) ;
            }
            100%{
                transform: translateY(-20px) ;
            }
        }
        #light{
            background-image: url(images/home_light.jpg) ;
            background-size: cover ;
            position: relative ;
        }
        #light .scale{
            background-image: url(images/home_scale.svg) ;
            background-size: cover ;
            width: 38% ;
            padding-bottom: 28% ;
            position: absolute ;
            bottom: -30px ;
            right: 9% ;
        }
        #light .umbrella{
            background-size: cover ;
            width: 100% ;
            padding-bottom: 100% ;
            max-width: 550px ;
            position: absolute ;
            top: -70% ;
            right: 7% ;
            animation: float 2s linear infinite ;
            animation-direction: alternate;
        }
        #light .umbrella img{
            transform: rotateZ(32deg) ;
        }
        #light .content{
            position: relative ;
            left: -20% ;
            top: 25% ;
        }
        /*Popular-----------------------*/
        #popular{
            display: flex ;
            flex-wrap: wrap ;
            justify-content: center ;
        }
        #popular h4{
            font-size: 24px ;
            font-weight: bold ;
            color: #666 ;
            align-self: baseline ;
        }
        .cards{
            display: flex ;
            justify-content: center ;
            min-width: 100% ;
            margin-top: 10px ;
        }
        #popular .card{
            max-width: 400px ;
            height: auto ;
            display: inline-block ;
            margin: 0 2% ;
            color: #000 ;
        }
        .card .product{
            width: 95% ;
            margin: 0 auto ;
            background-size: cover ;
            position: relative ;
            z-index: 2 ;
        }
        .product img{
            transform: rotate(-20deg) ;
        }
        .product:before{
            position: absolute ;
            top: 5% ;
            left: 11% ;
            content: "" ;
            width: 75% ;
            padding-bottom: 75% ;
            border-radius: 50% ;
            background: #F8CF4E ;
            z-index: -1 ;
        }
        .card .name{
            color: #808080 ;
            border-bottom: 1px solid #808080 ;
            width: 76px ;
            margin: 20px auto ;
            line-height: 24px ;
        }
        .card .price{
            font-size: 18px ;
            font-weight: bold ;
        }
        .toTop{
            color: #1F5572 ;
            position: relative ;
            top: 15px ;
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
        @import url("css/home_phone.css");
    </style>
    <?php include __DIR__.'/module_nav.php' ?>
    <aside class="l_aside">
        <div class="scroll item">
            <div class="scroll_f">
                <h4>Scroll</h4>
                <div class="so_f">
                    <div class="s_f s_1_f"></div>
                    <div class="s_f s_2_f"></div>
                    <div class="s_f s_3_f"></div>
                </div>
                <div class="line_f"></div>
            </div>
        </div>
        <div class="item left_a">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
        </div>      
    </aside>
    <aside class="r_aside">
        <ul>
            <li class="act"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </aside>
    <div id="container">
        <section id="top">
            <div class="half rain_half">
                <div class="rain full">
                    <div class="umbrella">
                        <img src="images/home_umbrella_y.png" alt="">
                        <h2>Be Your Unique Unbrella.</h2>
                    </div>
                    <div class="intro intro_r fadeOut">
                        <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝
                        相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝</p>
                    </div>
                    <div class="back_r back">BACK</div>
                </div>
            </div>
            <div class="half">
                <div class="sun full">
                    <div class="umbrella">
                        <img src="images/home_umbrella_b.png" alt="">
                        <h2>Be Your Unique Unbrella.</h2>
                    </div>
                    <div class="intro intro_l fadeOut">
                        <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝
                        相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝</p>
                    </div>
                    <div class="back_l back">BACK</div>
                </div>
            </div>
        </section>
        <section class="clear" id="location">
            <div>
                <div class="umbrella">
                    <img src="images/home_umbrella_y.png" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.45 106.45">
                        <defs>
                            <style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:5px;}</style>
                        </defs>
                        <title>資產 2</title>
                        <g id="圖層_2" data-name="圖層 2">
                            <g id="圖層_1-2" data-name="圖層 1">
                                <path class="cls-1 wave3" d="M2.5,103.95A101.45,101.45,0,0,1,103.95,2.5"/>
                                <path class="cls-1 wave2" d="M32.21,103.95a71.73,71.73,0,0,1,71.73-71.73"/>
                                <path class="cls-1 wave1" d="M64.17,103.95a39.78,39.78,0,0,1,39.78-39.78"/>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="phone">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.45 106.45">
                    <defs>
                        <style>.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:5px;}</style>
                    </defs>
                    <title>資產 2</title>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-1 wave3" d="M2.5,103.95A101.45,101.45,0,0,1,103.95,2.5"/>
                            <path class="cls-1 wave2" d="M32.21,103.95a71.73,71.73,0,0,1,71.73-71.73"/>
                            <path class="cls-1 wave1" d="M64.17,103.95a39.78,39.78,0,0,1,39.78-39.78"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="content">
                <h3>定位系統</h3>
                <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今江東逝水，白髮漁樵江渚上，古今</p>
            </div>
        </section>
        <section class="" id="light">
               <div class="scale">
                    <div class="umbrella">
                <img src="images/home_umbrella_light.png" alt="">
            </div>
               </div>
             
            <div class="content">
                <h3>極輕</h3>
                <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今江東逝水，白髮漁樵江渚上，古今</p>
            </div>
        </section>
        <section id="popular">
            <h4>人氣商品</h4>
            <div class="cards">
               <div class="card">
                    <div class="product">
                        <img src="images/home_umbrella_b.png" alt="">
                    </div>
                    <p class="name">夏日風情</p>
                    <p class="price">NT. 1980</p>
                </div>
                <div class="card">
                    <div class="product">
                        <img src="images/home_umbrella_b.png" alt="">
                    </div>
                    <p class="name">夏日風情</p>
                    <p class="price">NT. 1980</p>
                </div>
                <div class="card">
                    <div class="product">
                        <img src="images/home_umbrella_b.png" alt="">
                    </div>
                    <p class="name">夏日風情</p>
                    <p class="price">NT. 1980</p>
                </div> 
            </div>
            <div class="toTop">
                <div class="tr"></div>
                <h5>TOP</h5>
            </div>
        </section>
    </div>
    <?php include __DIR__.'/module_footer.php' ?>
    <script>
        var $Header=$("header"),
            $Laside=$(".l_aside"),
            $Raside=$(".r_aside"),
            $Half=$(".half"),
            $Back=$(".back"),
            $Totop=$(".toTop");
        var Ttop=$("#top").offset().top ,
            Tlocation=$("#location").offset().top ,
            Tlight=$("#light").offset().top ,
            Tpopular=$("#popular").offset().top ,
            Tfooter=$("footer").offset().top ,
            full=$("body").height();
        var nowscrollTop=$(window).scrollTop();
        //console.log(Ttop,Tlocation,Tlight,Tpopular,Tfooter,full) ;
        var position=[Ttop,Tlocation,Tlight,Tpopular,Tpopular+(full-Tfooter)];
        var nowPosition=0;
        var log;
        var scrolllast;
        var ifact=false ;
        function addBlack(){
            $Header.addClass("black");
            $Laside.addClass("black");
            $Raside.addClass("black");
        }
        function removeBlack(){
            $Header.removeClass("black");
            $Laside.removeClass("black");
            $Raside.removeClass("black");
        }
        function rightAct(now){
            $(".r_aside ul li").eq(now).addClass("act").siblings().removeClass("act");
        }
        function fullpageScroll(now){
            $("html,body").animate({
                    scrollTop:position[nowPosition]
                },1000,function(){
                    ifact=false;
                    if(now>=3){
                        addBlack();
                    }else{
                        removeBlack();
                    }
                    if(now>3){
                        $Laside.addClass("hide");
                    }else{
                        $Laside.removeClass("hide");
                    }
            });
            rightAct(now);
        }
        /*手機hideNav*/
        function hideNav(){
            $(window).scroll(function(){
                var scrollNow=$(this).scrollTop();
                // console.log(scrollNow);
                if(scrollNow>=position[1]-65){
                    addBlack();
                }else{
                    removeBlack();
                }
                if (scrollNow<=65) {  //在80以內不會縮回
                    $Header.removeClass("hide");
                } else {
                    if (scrollNow>scrolllast) {
                        $Header.addClass("hide");
                    } else {
                        $Header.removeClass("hide");
                    }
                }
                scrolllast=scrollNow;
            });
        }
        /*滾輪事件*/
        function mouseWheel(){
            $(document).on('DOMMouseScroll mousewheel',function(e){
                //火狐以外 => mousewheel
                //火狐 => DOMMouseScroll
                e.preventDefault();
                log=e.originalEvent.wheelDelta || -e.originalEvent.detail;
                if(log<0 && !ifact){
                    // console.log("down");
                    nowPosition++;
                    ifact=true;
                    if(nowPosition>4) {
                        nowPosition=4;
                        ifact=false;
                    }else{
                        fullpageScroll(nowPosition);
                    }
                }else if(log>0 && !ifact){
                    // console.log("up");
                    nowPosition--;
                    ifact=true;
                    if(nowPosition<0) {
                        nowPosition=0;
                        ifact=false;
                    }else{
                        fullpageScroll(nowPosition);
                    }
                }
            });
        }
        $(document).ready(function(){ 
            // console.log($(window).width());
            /*目前位置*/
            switch (nowscrollTop) {
                case Ttop:
                    nowPosition=0;
                    rightAct(nowPosition);
                    break;
                case Tlocation:
                    nowPosition=1;
                    rightAct(nowPosition);
                    break;
                case Tlight:
                    nowPosition=2;
                    rightAct(nowPosition);
                    break;
                case Tpopular:
                    nowPosition=3;
                    rightAct(nowPosition);
                    addBlack();
                    break;
                default:
                    nowPosition=4;
                    rightAct(nowPosition);
                    addBlack();
                    $Laside.addClass("hide");
                    break;
            }
            /*手機*/
            if($(window).width()<376){
                hideNav();
            }else{
                mouseWheel();
            }
        });
        /*Top*/
        $Half.click(function(){
            $(this).addClass("halfTofull").siblings().addClass("halfTonull");
            $(".half h2").addClass("fadeOut");
            $(this).find(".intro").removeClass("fadeOut");
        });
        $Back.click(function(e){
            $(this).closest(".half").removeClass("halfTofull").siblings().removeClass("halfTonull");
            $(".half h2").removeClass("fadeOut");
            $(this).closest(".half").find(".intro").addClass("fadeOut");
            e.stopPropagation();    //不讓父元素動作(阻止事件冒泡)
        });
        /*right aside*/
        $(".r_aside ul").on("click","li",function(){
            nowPosition=$(this).index();
            fullpageScroll(nowPosition);
        });
        /*to top*/
        $Totop.click(function(){
            nowPosition=0 ;
            fullpageScroll(nowPosition);
        });
    </script>
<?php include __DIR__.'/module_foot.php' ?>