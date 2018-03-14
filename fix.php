<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            height: auto ;
        }
        /*Container-------------------------------------------------------------------*/
        .headerBg_a{
            width: 100% ; 
            display: flex;
            align-items: center;
            object-fit: fill;
            position: relative;
        }
        .headerBg_a img{
            width: 100%;
        }
        .headerBg_a p{
            font-size: 30px;
            font-weight: bold;
            color:#fff;
            position: absolute;
            left: 50%;
            margin-left: -250px;
            letter-spacing: 5px;
        }
        /*section--------------------------------------------*/
        .fix_a h1 {
            text-align:center;
            padding-top:50px;
        }
        .warranty_a {
            width:48%;
            margin:0 auto;
            padding-bottom: 7%;
            opacity:0;
            transform: translateY(250px);
        }
        .textShow {
            opacity:1;
            transform: translateY(0);
            transition:1s;
        }
        .warrantyCon_a {
            line-height: 36px;
            text-align: justify;
            padding: 50px 0 60px 0;
        }
        .fixNotice_a {
            padding-left:20px;
        }
        .warranty_a span {
            padding-bottom:20px;
            display:block;
        }
        .fixNotice_a li {
            padding:20px 0 20px 0px;
            list-style:disc;  
        }
        .notice_a {
            /* padding: 30px 0 60px 0; */
            width:100%;
            margin:0 auto;
            max-width: 1440px;
            margin-bottom: 10%;
            margin-top: 15px;
        }
        .umbrellaCard_a {
            position:relative;
            padding: 5%;
            margin: 0 auto;
            width: 60%;
            margin-bottom: 30px;  
            height:300px;
            /* background: #ccc; */
            display: flex;
            align-items: center;
        }
        
        .umbrellaImg_a {
            position:absolute;
            width: 300px;
            height: 300px;
            background-size: contain;
            top:100px;
        }

        .umbrellaImg1_a {
            background:url(images/ximage-large-umbrella-01.png,q1510051095.pagespeed.ic.A55E1PNYDs.webp) 50% 50% no-repeat;
        }
        .umbrellaImg2_a {
            background:url(images/ximage-large-umbrella-02.png,q1510051359.pagespeed.ic.PoabIom_md.webp) 50% 50% no-repeat;
        }
        .umbrellaImg3_a {
            background:url(images/ximage-large-umbrella-03.png,q1510051359.pagespeed.ic.prJKsotOEU.webp) 50% 50% no-repeat;
        }
        .umbrellaImg4_a {
            background:url(images/ximage-large-umbrella-04.png,q1510051360.pagespeed.ic.YQy0awX6Us.webp) 50% 50% no-repeat;
        }
        .umbrellaImg5_a {
            background:url(images/ximage-large-umbrella-05.png,q1510668587.pagespeed.ic.reu-1cxC6V.webp) 50% 50% no-repeat;
        }
        .umbrellaImgL_a {
            left: -120px;
        }
        .umbrellaImgR_a {
            right:-100px;
        }
        .umbrellaSvg_a {
            position: absolute;
            width: 200px;
            height: 200px;
            overflow:hidden;
        }
        .umbrellaSvgR_a {
            right: -45px;
        }
        .umbrellaSvgL_a {
            left: -25px;
        }
        .umbrellaSvg_a img {
            width: 100%;
            height: 100%;
        }
        .umbrellaSvg1_a {
            top: 50px;
        }
        .umbrellaSvg2_a {
            top: 50px;
        }
        .umbrellaSvg3_a {
            top: 50px;
        }
        .umbrellaSvg4_a {
            top: 35px;
        }
        .umbrellaSvg5_a {
            top: 50px;
        }
        .innerText_a {
            width: 60%;
            display: inline-block;  
        }
        .innerTextL_a {
            margin:0 21%; 
        }
        .innerTextR_a {
            margin:0 20%; 
            text-align:center;
        }
        .innerText_a h2 {
            text-align:center;
            margin-bottom: 19.8px;
        }
        .innerText_a p {
            display: block;
            margin:0 auto;
            line-height:1.5;
            text-align:center;
        }
        /*toTop*/
        .toTop{
            color: #1F5572 ;
            position: relative ;
            top: -15px ;
            margin-left: 94% ;
            cursor: pointer ;
            text-align: center ;
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
        @import url("css/fix_phone.css");
    </style>
<?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <div class="headerBg_a">
            <img src="images/banner_FIX.jpg" alt="">
            <p>Be Your Unique Unbrella.</p>
        </div>
        <section class="fix_a">
            <div class="warranty_a">
            <h1>保固維修</h1>
                <p class="warrantyCon_a">感謝親愛的客戶購買Unibella的產品，雨傘為生活日常用品(消耗品)，
                因個人使用習慣不同或正常零件的耗損而導致產品的損壞，為了讓消費者了解我們維修保固的標準，
                故提供以下的維修判定以供參考！</p>
                <span>下列情況下，我們無法為您處理維修品，敬請見諒，謝謝！</span>
                <ul class="fixNotice_a">
                    <li>直傘中棒凹折或斷裂，無零件可供更換</li>
                    <li>傘套和傘布破洞、破裂或汙損</li>
                    <li>生產製造超過三年且無相關零件備品時</li>
                    <li>經實際損壞情況判定無法維修時</li>
                    <li>非本公司之產品</li>
                </ul>
            </div>
            <h1>注意事項</h1>
            <div class="notice_a">
                <div class="umbrellaCard_a" data-img="img1">
                    <div class="umbrellaImg_a umbrellaImgL_a umbrellaImg1_a" id="img1"></div>
                    <div class="innerText_a innerTextL_a">
                        <h2>步驟一</h2>
                        <p>我們的雨傘的設計是為了防風雨。但是，他們不能避免強烈的陣風。避免在大風中使用您的雨傘，特別是海上和河流。</p>
                    </div>
                    <div class="umbrellaSvg_a umbrellaSvgR_a umbrellaSvg1_a"><img src="images/umbrella-care-1.svg" alt=""></div>
                </div>
                
                <div class="umbrellaCard_a" data-img="img2">
                    <div class="umbrellaImg_a umbrellaImgR_a umbrellaImg2_a" id="img2"></div>
                    <div class="innerText_a innerTextR_a">
                        <h2>步驟二</h2>
                        <p>避免靠在你的雨傘上，把它當作手杖使用。</p>
                    <div class="umbrellaSvg_a umbrellaSvgL_a umbrellaSvg2_a"><img src="images/umbrella-care-2.svg" alt=""></div>
                    </div>
                </div>
                
                <div class="umbrellaCard_a" data-img="img3">
                    <div class="umbrellaImg_a umbrellaImgL_a umbrellaImg3_a" id="img3"></div>
                    <div class="innerText_a innerTextL_a">
                        <h2>步驟三</h2>
                        <p>請將雨傘打開晾乾傘面能夠透氣，防止任何金屬部件的生鏽。</p>
                    </div>
                    <div class="umbrellaSvg_a umbrellaSvgR_a umbrellaSvg3_a"><img src="images/umbrella-care-3.svg" alt=""></div>
                </div>
                
                <div class="umbrellaCard_a" data-img="img4">
                    <div class="umbrellaImg_a umbrellaImgR_a umbrellaImg4_a" id="img4"></div>
                    <div class="innerText_a innerTextR_a">
                        <h2>步驟四</h2>
                        <p>讓你的雨傘遠離陽光直射，以防止褪色</p>
                        <div class="umbrellaSvg_a umbrellaSvgL_a umbrellaSvg4_a"><img src="images/umbrella-care-4.svg" alt=""></div>
                    </div>
                </div>
                
                <div class="umbrellaCard_a" data-img="img5">
                    <div class="umbrellaImg_a umbrellaImgL_a umbrellaImg5_a" id="img5"></div>
                    <div class="innerText_a innerTextL_a">
                        <h2>步驟五</h2>
                        <p>清潔只能用普通水，因為清潔劑會去除防水塗料。</p>
                    </div>
                    <div class="umbrellaSvg_a umbrellaSvgR_a umbrellaSvg5_a"><img src="images/umbrella-care-7.svg" alt=""></div>
                </div>
            </div>    
        </section>
        <div class="toTop">
            <div class="tr"></div>
            <h5>TOP</h5>
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
        var scrollHeaderLast;
       


       /*notice*/
        var setArea=$(".umbrellaCard_a"),
            showHeight=50;
            $(".umbrellaImg_a").css({opacity:"0"});
            $(window).on('scroll', function(){
                var scrollSec1T = $(this).scrollTop();
                    console.log(scrollSec1T);
                if (scrollSec1T > 100) {
                    $(".warranty_a").addClass("textShow");
                } else {
                    $(".warranty_a").removeClass("textShow");
                };
            setArea.each(function(){
                var setThis=$(this),
                    areaTop=setThis.offset().top,
                    umbrellaImg = $(this).attr("data-img");
                if($(window).scrollTop()>(areaTop+showHeight)-$(window).height()){
                    $("#" + umbrellaImg).stop().animate({opacity:"1",top:"0"},400);
                } else {
                    $("#" + umbrellaImg).stop().animate({opacity:"0",top:"100px"},400);
                }
            });
        });
        
        /*to top*/
        $(".toTop").click(function(){
            $("html,body").animate({
                    scrollTop:0
                },1000,);
        });

    </script>
<?php include __DIR__.'/module_foot.php' ?>