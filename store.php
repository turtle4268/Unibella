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
        }        
        .inforImg_y{
        	/*position: absolute;
        	top:0px;
            left:0px;*/   
        	z-index: 1;
        	width: 26%;
        	display: flex;
        	flex-wrap: wrap;
        }
        .inforTxtBox_y{
        	/*position: absolute;
			top:56px;
            right:0px;*/
        	width: 69%;
        	height: 372px;
			background: #f8cf4e;
			margin: 56px 0;
        }
        .inforImg_y img{
        	margin: 5px auto;
            flex: 1;
            width: unset ;
        }
        .inforTxt_y{
        	width: 58%;
        	margin: 57px auto;
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
	         		<img src="images/store_1.png" alt="store_1">
	         		<img src="images/store_2.png" alt="store_2">
	         	</div>
	         	<div class="inforTxtBox_y">
	         		<div class="inforTxt_y">
                        <div class="inforTitleBox_y">
    	         			<h3 class="inforTitle_y">台北 | 大安門市 </h3>
                            <a href="" class="lineHover_y">MAP</a>
                        </div>
	         			<br>
	         			<p>電話&nbsp; 02 2588-5688</p>
	         			<p>地址&nbsp; 106台北市大安區和平東路二段106號</p>
	         			<br>
	         			<p class="inforP_y">門市營業時間</p>
	         			<p>週日～週四 11:00 - 22:00</p>
	         			<p>週五、週六 11:00 - 22:30</p>
	         		</div>
	         	</div>     	
             </div>  
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
    </script>
</body>
</html>