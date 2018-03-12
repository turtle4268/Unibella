<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            height: auto ;
        }
/*container-------------------------------------------------------------*/
    .container_a {
        width: 100%;  
        /* height: 180vh;    */
    }
    .headerBg_a {
        width: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .headerBg_a img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;

    }
    .headerBg_a p {
        /* width: 100%; */
        font-size: 30px;
        font-weight: bold;
        color:#fff;
        position: absolute;
        text-align: center;
        right: 13%;
        letter-spacing: 5px;
    }
    .hideHeader {
        opacity: 0;
    }
/*Sec1 active-------------------------------------------------------------*/
    .sec1_a{
        width: 100%;    
    }
    .sec1_a h1 {
        text-align: center;
        font-size: 24pt;
    }
    .active_a {
        width:70%;
        margin: 0 auto;
        padding-top: 50px;
    }
    .active_a ul {
        display: flex;
        flex-wrap: wrap; 
        justify-content: center;   
    }
    .active_a ul li {
        width: 300px;
        height: 300px;
        margin-right: 15px;
        margin-bottom: 15px;
        position: relative;
        overflow: hidden;
        box-sizing: border-box;
        transition: all 1s ease-in-out; 
    }
    .square_a {
        background: #000000;
    }
    .active_a ul li a {
        width: 300px;
        height: 300px;
        display: block;
        z-index: 2;
        
    }
    .active_a ul .square_a img {
        max-width: 100%;
        position: relative;
        opacity: 0.4;
        transition: all .5s ease-in-out;
        height:100%; 
    }
    .square_a p {
        font-size: 24px;
        position: absolute;
        top: 50%;
        left: 50%;
        text-align: center;
        color: #fff;
        transition: all .5s ease-in-out; 

    }
    .square_a .p2 {
        margin-top:-32px;
        margin-left:-94px;
    }
    .square_a .p4 {
        margin-top:-16px;
        margin-left:-94px;
    }
    .square_a .p6 {
        margin-top:-16px;
        margin-left:-81px;
    }
    .active_a ul .square_a:before {
        width: 145%;
        height: 145%;
        top: 0;
        left: 0;
        content: '';
        background: #161414;
        position: absolute;
        transition: all 0.3s ease-in-out;
        transform: rotate(110deg) translateY(-31%) translateX(-3.3%);
    }
    .active_a ul .square_a:hover:before,
    .active_a ul .square_a.hover:before {
        transform: rotate(110deg) translateY(-150%);
    }
    .active_a ul .square_a:hover img{
        opacity: 1;
        transform: scale(1.1);
    }

    .active_a ul .square_a:hover p,
    .active_a ul .square_a.hover p {
        transform:translate(-160%,0);
    }
    .active_a ul .blue {
        background: #b1aeae;
    }
    .active_a ul .orange {
        background:#e0a340;
    }

/*Sec2 new-------------------------------------------------------------*/
    .sec2_a {
        width: 100%;
        /* height: 100vh; */
        margin-top: 10%;
        position: relative;
    }
    .sec2_a h1 {
        text-align: center;
        font-size: 24pt;
    }
    .new_a {
        display: flex;
        padding-top: 50px;
    }
    .newText_a {
        position: absolute;
        top: 92px;
        left: 0;
        z-index: 3;
        height: 85%;
        width:100%;
        font-size: 20px;
        transform: translateX(-100%);
        transition: all .5s;
        display:flex;
        align-items:center;
        background:#fff;
       
    }
    .newText_a .newClose_a {
        width: 20px;
        height: 20px;
        position: absolute;
        top: 20px;
        right: 20px;
        background: url(images/X.svg) center center no-repeat ;
       
    }
    .newP_a {
        position: absolute;
        transition: all .5s;
        margin:0 5%;
        opacity:0;
    }
    .newP_a p {
        
        color:#666;
    }
    .newPShow_a {
        opacity:1; 
    }
    .textShow_a {
        transform: translateX(0);
        
    }
    .yellow_a {
        background: #ffdb54;
        width: 50%;
        height: 500px;
        position: relative;
    }
    .timeline ul li {
        list-style-type: none;
        position: relative;
        width: 6px;
        margin: 0 auto;
        padding-top: 45px;
        background: #fff;
        height: 68px;
    }
    .timeline ul li::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 22.5px;
        transform: translateX(-50%);
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: inherit;
        cursor: pointer;
    }
    .blue_a {
        background: #1f5572;
        width: 50%;
        height: 500px;
        position: relative;
        z-index: 2;
    }
    .newContent_a {
        position: relative;
        top:11%;
        left: 20%;
        width: 89%;
        height: 75%;
        border: 3px solid #fff;
        z-index: 3;
        overflow: hidden;
    }
    .newConHide {
        display: none;
    }
    .newContent_a a.newspaper_a {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        width: 230px;
        height: 250px;
        transition: all 1s;
        display: block;
    }
    .newContent_a .newspaper_a img {
        width:100%;
        transition: all 1s;
    }
    .newContent_a a.newspaper1_a {
        top: 41%;
        left: -7%;
        transform: rotate(-30deg);
    }
    .newContent_a a.newspaper2_a {
        top: -7%;
        left: -10%;
        transform: rotate(30deg);
    }
    .newContent_a a.newspaper3_a {
        top: 40%;
        left: 48%;
        transform: rotate(-8deg);
    }
    .newContent_a a.newspaper4_a {
        top: 43%;
        left: 76%;
    }
    .newContent_a a.newspaper5_a {
        top: -5%;
        left: 16%;
        transform: rotate(-15deg);
        
    }
    .newContent_a a.newspaper6_a {
        top: -9%;
        left: 35%;
        transform: rotate(-7deg);
    }
    .newContent_a a.newspaper7_a {
        top: 43%;
        left: 22%;
        transform: rotate(-4deg);
        
    }
    .newContent_a a.newspaper8_a {
        top: -10%;
        left: 69%;
        transform: rotate(83deg);
        
    }
    
    .newLink_a {
        position: absolute;
        top:15%;
        left: 30%;
        height: 100%;
    }
    .newLink_a a {
        display: block;
        position: relative;
        bottom: 23px;
        left: 40px;
        width: 400px;
        color: #fff;
        cursor: pointer;
        text-align: justify;
    }
    .scale {
        transform: scale(1.5) !important;
        transition: all 1s;
        z-index: 10 !important;
    }
    </style>
<style>
    @import url("css/new_phone.css");
</style>
    <?php include __DIR__.'/module_nav.php' ?>
    <div class="container_a">
        <div class="headerBg_a">
            <img src="images/banner_NEWS.jpg" alt="">
            <p>Be Your Unique Umbrella.</p>
        </div>
        <section class="sec1_a">
            <h1>最新活動</h1>
            <div class="active_a">
                <ul>
                    <li class="squarePhone_a"><img src="images/news_square1.jpg" alt=""></li>
                    <li class="square_a blue" >
                            <a href="#">
                            <img class="images" src="images/news_squre2_light.jpg" alt="">
                            <p class="p2">梅雨季<br>全館雨傘88折</p>
                            </a>   
                    </li>
                    <li class="squarePhone_a"><img src="images/news_square3.jpg" alt=""></li>
                    <li class="square_a orange">
                            <a href="#">
                            <img class="images" src="images/news_squre4_light.jpg" alt="">
                            <p class="p4">自動傘新品上架</p>
                            </a>
                    </li>
                    <li class="squarePhone_a"><img src="images/news_square5.jpg" alt=""></li>
                    <li class="square_a orange">
                            <a href="#">
                            <img class="images" src="images/news_squre6_light.jpg" alt="">
                            <p class="p6">陽傘新色上架</p>
                            </a>
                    </li>
                </ul>
            </div>
        </section>
        <div class="sec2_a">
            <h1>新聞媒體</h1>
            <section class="new_a">
                <div class="yellow_a">
                    <div class="newContent_a">
                    <a class="newspaper_a newspaper1_a paperText" id="img1" data-text="text1"><img src="images/newspaper1.jpg" alt=""></a> 
                    <a class="newspaper_a newspaper2_a" id="img2"><img src="images/newspaper2.jpg" alt=""></a>
                    <a class="newspaper_a newspaper3_a" id="img3"><img src="images/newspaper3.jpg" alt=""></a>
                    <a class="newspaper_a newspaper4_a paperText" id="img4" data-text="text2"><img src="images/newspaper4.jpg" alt=""></a>
                    <a class="newspaper_a newspaper5_a paperText" id="img5" data-text="text3"><img src="images/newspaper5.jpg" alt=""></a>
                    <a class="newspaper_a newspaper6_a paperText" id="img6" data-text="text4"><img src="images/newspaper1.jpg" alt=""></a> 
                    <a class="newspaper_a newspaper7_a paperText" id="img7" data-text="text5"><img src="images/newspaper2.jpg" alt=""></a>
                    <a class="newspaper_a newspaper8_a" id="img8"><img src="images/newspaper3.jpg" alt=""></a>
                    </div>
                    
                    
                </div>
                <div class="blue_a timeline">
                    <ul class="newLink_a">
                        <li data-img="img1"><a>2018.02.05 智能雨傘正夯，讓你與傘不散</a></li>
                        <li data-img="img4"><a>2017.11.16 Unibella 97公克羽量級折傘</a></li>
                        <li data-img="img6"><a>2017.03.05 Unibella：製造持久耐用的雨傘</a></li>
                        <li data-img="img7"><a>2016.11.16 Unibella教你玩轉雨傘成為雨天焦點</a></li>
                        <li data-img="img5"><a>2016.07.05 Unibella x 北藝風特展商品開始預購</a></li>
                    </ul>
                </div>
            </section>
            <section class="newText_a">
                <div class="newClose_a" ></div>
                <div class="newP_a" id="text1">
                    <p>，台灣製傘業不再是夕陽工業，台北一家製傘工廠業者改革出新，研發出一款超小防風­傘，收起來時直徑只有2.5公分，
                    比一枚五十元硬幣還要小；而另一款超輕量傘支架由碳­纖維製成，重量只有97公克，比一支手機還要輕，雨傘雖小，不僅防雨還能防風，
                    輕巧造­型還能直接塞進口袋。</p>
                </div>
                <div class="newP_a" id="text2">
                    <p>，台灣製傘業不再是夕陽工業，台北一家製傘工廠業者改革出新，研發出一款超小防風­傘，收起來時直徑只有2.5公分，
                    比一枚五十元硬幣還要小；而另一款超輕量傘支架由碳­纖維製成，重量只有97公克，比一支手機還要輕，雨傘雖小，不僅防雨還能防風，
                    輕巧造­型還能直接塞進口袋。</p>
                </div>
                <div class="newP_a" id="text3">
                    <p>，台灣製傘業不再是夕陽工業，台北一家製傘工廠業者改革出新，研發出一款超小防風­傘，收起來時直徑只有2.5公分，
                    比一枚五十元硬幣還要小；而另一款超輕量傘支架由碳­纖維製成，重量只有97公克，比一支手機還要輕，雨傘雖小，不僅防雨還能防風，
                    輕巧造­型還能直接塞進口袋。</p>
                </div>
                <div class="newP_a" id="text4">
                    <p> ，台灣製傘業不再是夕陽工業，台北一家製傘工廠業者改革出新，研發出一款超小防風­傘，收起來時直徑只有2.5公分，
                    比一枚五十元硬幣還要小；而另一款超輕量傘支架由碳­纖維製成，重量只有97公克，比一支手機還要輕，雨傘雖小，不僅防雨還能防風，
                    輕巧造­型還能直接塞進口袋。</p>
                </div>
                <div class="newP_a" id="text5">
                    <p>，台灣製傘業不再是夕陽工業，台北一家製傘工廠業者改革出新，研發出一款超小防風­傘，收起來時直徑只有2.5公分，
                    比一枚五十元硬幣還要小；而另一款超輕量傘支架由碳­纖維製成，重量只有97公克，比一支手機還要輕，雨傘雖小，不僅防雨還能防風，
                    輕巧造­型還能直接塞進口袋。</p>
                </div>
            </section>

            
        </div>
    </div>
    <?php include __DIR__.'/module_footer.php' ?>
    <script>
        /*hideNav*/
        var scrolllast;
        $(window).scroll(function(){
            var scrollNow=$(this).scrollTop();
            // console.log(scrollNow);
            if (scrollNow < 350) {
                $("header").removeClass("hide black");
            } else {
                if (scrollNow > scrolllast) {
                    $("header").addClass("hide black");
                } else {
                    $("header").removeClass("hide");
                }
            }
            scrolllast=scrollNow;
        });

        $(".newLink_a li").click(function () {
            var scaleImg = $(this).attr("data-img");
            $(".yellow_a .newspaper_a").removeClass("scale");
            $("#" + scaleImg).addClass("scale");
        });

        //newText
        $(".paperText").click(function () {
            var text = $(this).attr("data-text");
            $(".yellow_a .newspaper_a").removeClass("scale");
        // console.log(text);
            $("#" + text).addClass("newPShow_a");
            $(".newText_a").addClass("textShow_a");
            $(".newContent_a").addClass("newConHide");
        });
        $(".newClose_a").click(function(){
            $(".newText_a").removeClass("textShow_a");
            $(".newContent_a").removeClass("newConHide");

        });

    </script> 
<?php include __DIR__.'/module_foot.php' ?>