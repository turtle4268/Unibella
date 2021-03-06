<?php include __DIR__.'/module_head.php' ?>
    <style>
        header a{
            background-color: #666 ;
        }
        /*Container-------------------------------------------------------------------*/
        /*banner_y--------------------------------------------------------------*/
        .banner_y{
        	width: 100%;
        	object-fit: cover;
            display: flex;
        	justify-content:center;
			align-items:center;
            position: relative;        
        }
        .bannerTxt_y{
        	color: #fff;
        	font-weight: bold;
        	font-size: 36px;
            position: absolute;
        }
        .banner_y img{
            width:100%;          
        }
        /*main_y--------------------------------------------------------------*/
        .main_y{
			margin: 36px auto;
        }
        .mainTitle_y{
        	font-weight: bold;
        	font-size: 30px;
        	color: #666666 ;
        	text-align:center;
        }
        .infor_y{
        	width: 61%;
        	margin: 43px auto;
        	position: relative;
        	display: flex;
        	justify-content:space-between;
            overflow:hidden;
        }        
        .inforImg_y{
        	/*position: absolute;
        	top:0px;
            left:0px;*/   
        	z-index: 1;
        	width: 26%;
        	display: flex;
            flex-wrap: wrap;
            position:relative;
        }
        .inforMove_y{
            flex: 1;
            display: flex;
        	justify-content:center;
        }
        .inforImg_y img{
        	margin: 5px auto;
            width: unset ;
        }
        .inforTxtBox_y{
        	/*position: absolute;
			top:56px;
            right:0px;*/
        	width: 69%;
        	height: 372px;
			background: #f8cf4e;
            margin: 56px 0;
            position:relative;
        }
        .inforTxt_y{
        	width: 58%;
        	margin: 57px 20px 57px 160px;
        }
        .inforTitle_y{
        	color: #666;
            position: relative;
        }
        .inforTitleBox_y{
            display: flex;
            justify-content:space-between;
        }
        .inforTitleBox_y a{
        	margin-right: 8em;
        	color: #fff;
        	list-style: none;
        }
        /*.inforTitleBox_y a:hover{
        	border-bottom: 2px solid #fff;
        }*/
        .lineHover_y{
			cursor: pointer ;    
        }
        .lineHover_y:after {
        	display:block;
  			content: '';
        	border-bottom: 2px solid #fff;
        	transform: scaleX(0);
			transition: transform .2s ease-in-out;    
        }
        .lineHover_y:hover:after {
        	transform: scaleX(1);
        }
        .inforTxt_y p{
        	color: #666;
        	line-height: 2em;
        }
        .inforP_y{
        	margin-top:1em;
        	margin-bottom:.5em;
        }
        /*-------map--------*/
        .map_y{
            width: 100%;
            height: 372px;
            padding: 0 26px 0px 44px;
            background:#f8cf4e;
            position:absolute;
            z-index:3;
            top:0;
            bottom:0;
            left:90%;
            right:0;
            /* transform: translateX(-100%); */
            transition: all .5s; 
            /* display:none; */
            opacity:0;
        } 
        .mapi_y{
            margin: 16px 0 20px -30px;    
        } 
        .close_y{
            background:#f8cf4e;
            /* border-radius:50%; */
            width: 13px;
            height: 13px;
            position: absolute;
            top: 2px;
            right: 2px;
            cursor: pointer;
            background: url(images/X.svg) center center no-repeat;
            
        }
        .mapText_y{
            background:#1f5572;
            /* position:absolute;
            top:0;
            bottom:0;
            left:0;
            right:0; */
            z-index: 2;
        	width: 406px;
            height:232px;
            /* transform: translateX(-100%); */
            transition: all 1s;
            color:#fff; 
            margin-bottom: 5px;  
        }
        .mapTextA_y{
            position:absolute;
            top:0;
            left:406px;
            margin-top:4px;
            opacity:0;
            display:none;
        }
        .mapTextB_y{
            position:absolute;
            bottom:0;
            left:406px;
            opacity:0;
            display:none;
        }
        .mapTitle_y{
            color:#fff;
        	font-size: 21px;
        }
        .mapTextC_y{
            margin:50px 30px;
        }
        /*-------toTop--------*/
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
            text-align: center;
        }
        @keyframes scroll_top {
            0%   { opacity: .2; top: 2px; }
            50%  { opacity: .5; }
            100% { opacity: 1; top: -4px ;}
        }
    </style>
    <style>
        @import url("css/store_phone.css");
    </style>	
    <?php include __DIR__.'/module_nav.php' ?>
    <div id="container" >
        <div class="banner_y">
            <img src="images/banner_STORE.jpg" alt="">
            <h1 class="bannerTxt_y">Be Your Unique Umbrella.</h1>
        </div>
        <div class="main_y">
	         <h2 class="mainTitle_y">門市資訊</h2>
	         <div class="infor_y">
	         	<div class="inforImg_y">
                     <div class="inforMove_y">
                        <img src="images/store_1.png" alt="store_1">
                        <div class="mapText_y mapTextA_y">
                            <div class="mapTextC_y">
                                <h3 class="mapTitle_y">台北 | 大安門市 </h3>
                                <br>
                                <p>電話&nbsp; 02 2588-5688</p>
                                <br>
                                <p>地址&nbsp; 106台北市大安區<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;忠孝東路三段300號</p>
                            </div>
                        </div>
                    </div >
                    <div class="inforMove_y">
                        <img src="images/store_2.png" alt="store_2">
                        <div class="mapText_y mapTextB_y">
                            <div class="mapTextC_y">
                                <p class="">門市營業時間</p>
                                <br>
                                <p>週日～週四 11:00 - 22:00</p>
                                <p>週五、週六 11:00 - 22:30</p>
                            </div>
                        </div>
                    </div>
	         	</div> <!--inforImg_y-->
	         	<div class="inforTxtBox_y">
	         		<div class="inforTxt_y">
                        <div class="inforTitleBox_y" id="text">
    	         			<h3 class="inforTitle_y">台北 | 大安門市 </h3>
                            <a class="lineHover_y">MAP</a>
                        </div>
	         			<br>
	         			<p>電話&nbsp; 02 2588-5688</p>
	         			<p>地址&nbsp; 106台北市大安區忠孝東路三段300號</p>
	         			<br>
	         			<p class="inforP_y">門市營業時間</p>
	         			<p>週日～週四 11:00 - 22:00</p>
	         			<p>週五、週六 11:00 - 22:30</p>
                     </div>
                     <div class="map_y">
                        <iframe class="mapi_y" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d639.0108433066861!2d121.54332318266957!3d25.041158932299425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abd0b034e669%3A0x45ff6e257f47e4e3!2z6YGg5p2xU09HT-W-qeiIiOmkqA!5e0!3m2!1szh-TW!2stw!4v1520910706577" 
                        width="107%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="close_y"></div>
                    </div>
                 </div> <!--inforTxtBox_y-->
                      	
             </div> <!--infor_y-->
        </div> <!--main_y-->
        <div class="toTop">
            <div class="tr"></div>
            <h5>TOP</h5>
        </div>
    </div>
    <?php include __DIR__.'/module_footer.php' ?>
    <script>
        /*to top*/
        $(".toTop").click(function () {
                $("html,body").animate({
                    scrollTop: 0
                }, 1000);
        });
        /*navHide*/
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
        /*map*/
        $(".lineHover_y").click(function () {
            // console.log($(".map_y"));
            // $(".map_y").addClass("mapOpen_y");
            $(".map_y").animate({
                "left": 0,
                "opacity": 1,
                },300);
            $(".mapTextA_y, .mapTextB_y").animate({
                "left": 0,
                "opacity": 1,
                // "display": "block"
                },400).show();
        });
        $(".close_y").click(function () {
            $(".mapTextA_y, .mapTextB_y").animate({
                "left": "90%",
                "opacity": 0
                },300); 
            $(".map_y").animate({
                "left": "90%",
                "opacity": 0
                },400)       
        });
    </script>
</body>
</html>