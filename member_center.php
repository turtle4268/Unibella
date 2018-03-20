<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    if(!isset($_SESSION['user'])){
        header('Refresh:0;url=member_login.php');
        exit;
    }

?>
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
            flex: 1
        }
        .bannerTxt_y{
        	color: #fff;
        	font-weight: bold;
        	font-family: "微軟正黑體" ;
        	font-size: 30px;
            position:absolute;
            padding-right: 50%;
            padding-bottom: 3%;

        }
        .banner_y img{
            width:100%;          
        }
        /*mainBox_y--------------------------------------------------------------*/
        .mainBox_y{
            display: flex;
            width: 85%;
            margin: 35px auto 0 auto;           
        }
        .asideListTitle_y{
            font-weight: bold;
            font-size: 20px;
            color: #666666 ;
            text-align:left;
            padding: 0 0 35px 10px;
            border-bottom: 1px solid #666;
        }
        .l_aside_y{
            flex: 1;
        }
        .main_y{
            flex: 5;
            /* margin-left:7%;  */
        }
        /*l_aside_y-------------------------------------*/
        .asideA_y{
            color: #666;
        }
        .l_aside_y ul li{
            list-style: none;
            padding: 20px 10px;/*f改*/
            margin: 30px 0;/*f改*/
            transition: all .4s;/*f改*/
        }
        .l_aside_y ul li:hover{
            background: #e6e6e6;
            transition: all .4s;/*f改*/
        }
        .fa-angle-down{
            display: none;
        }
        .l_p_ul_y{
            display: none;
        }
        .topMain_y{
            margin-left: 5%;
        }
        .topMain_ul_y{
            display: flex;
        }
        .topMain_li_y{
            padding: 0 2em;
            border-right: 2px solid #666;
            color: #666;
        }
        .li_span_y{
            color: #1f5572;
        }
        /*main_y-------------------------------------*/
        .main_y{
            text-align: center;
            position: relative;/*f改*/
        }
        .main_y h2{
            margin: 50px auto;
            font-weight: bold;
            color: #666;
        }
        .table_infor_y{
            width: 45%;
            margin: 0 auto;
            color: #666; 
        }
        .l_td_y{
            width:32%;
            height: 30px; 
            text-align: left;
            padding-top:3em;
        }
        .r_td_y{
            width:68%;
            height: 30px;
            text-align: left;
            padding-top:3em;
            border-bottom: 1px solid #000;
        }
        .l_td1_y{
            width:20%;
            height: 30px; 
            text-align: left;
        }
        .r_td1_y{
            width:80%;
            height: 30px;
            text-align: left;
            border-bottom: 1px solid #000;
        }
        /*active_y-------------------------------------*/
        .active_y{
            margin-top: 15%;
            margin-bottom: 10%;
        }
        .active_f {
            width:100%;
            margin: 0 auto;
            padding: 30px 0;
        }
        .active_f ul {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center;   
        }
        .active_f ul li {
            width: 300px;
            height: 300px;
            margin-right: 15px;
            margin-bottom: 15px;
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
            transition: all 1s ease-in-out; 
        }
        .square_f {
            background: #000000;
        }
        .active_f ul li a {
            width: 100%;
            height: 100%;
            display: block;
            z-index: 2;
            
        }
        .active_f ul .square_f img {
            max-width: 100%;
            position: relative;
            opacity: 0.4;
            transition: all .5s ease-in-out; 
        }
        .square_f p {
            font-size: 24px;
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            color: #fff;
            transition: all .5s ease-in-out;
            font-weight: 400; 

        }
        .square_f .p2 {
            margin-top:-32px;
            margin-left:-94px;
        }
        .square_f .p4 {
            margin-top:-16px;
            margin-left:-94px;
        }
        .square_f .p6 {
            margin-top:-16px;
            margin-left:-81px;
        }
        .active_f ul .square_f:before {
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
        /* .active_a ul .square_a.red {
            background: #581a14;
        } */
        .active_f ul .square_f:hover:before,
        .active_f ul .square_f.hover:before {
            transform: rotate(110deg) translateY(-150%);
        }
        .active_f ul .square_f:hover img{
            opacity: 1;
            transform: scale(1.1);
        }

        .active_f ul .square_f:hover p,
        .active_f ul .square_f.hover p {
            transform:translate(-160%,0);
        }
        .active_f ul .blue {
            background: #b1aeae;
        }
        .active_f ul .orange {
            background:#e0a340;
        }
        /*-------toTop--------*/
        .toTop{
            color: #1F5572 ;
            position: relative ;
            top: -15px ;
            margin-left: 94% ;
            margin-bottom: 15px ;
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
        @import url("css/member_center_phone.css");
    </style>
    <?php include __DIR__.'/module_nav.php' ?>
    <div id="container" >
        <div class="banner_y">
            <img src="images/banner_MEMBER.jpg" alt="">
            <h1 class="bannerTxt_y">Be Your Unique Umbrella.</h1>
        </div>
        <div class="mainBox_y">
        <?php include __DIR__.'/module_member_aside.php' ?>
            <div class="main_y">
                <div class="topMain_y">
                    <ul class="topMain_ul_y">
                        <li class="topMain_li_y"><p>親愛的 <span class="li_span_y"><?= $_SESSION['user']['name'] ?></span> 您好</p></li>
                        <li class="topMain_li_y"><p>會員等級: <span class="li_span_y">一般會員</span></p></li>
                    </ul>
                </div>
                <h2>會員資料</h2>
                <table class="table_infor_y">
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="l_td1_y">電子郵件 </td>
                        <td class="r_td1_y"><?= $_SESSION['user']['email'] ?></td>
                    </tr>
                    <tr>
                        <td class="l_td_y">姓名 </td>
                        <td class="r_td_y"><?= $_SESSION['user']['name'] ?></td>
                    </tr>
                    <tr>
                        <td class="l_td_y">性別 </td>
                        <td class="r_td_y"><?php 
                            switch ($_SESSION['user']['gender']) {
                                case '1':
                                    echo "男";
                                    break;
                                case '2':
                                    echo "女";
                                    break;

                                default:
                                    echo "";
                                    break;
                            }
                         ?></td>
                    </tr>
                    <tr>
                        <td class="l_td_y">生日 </td>
                        <td class="r_td_y"><?= $_SESSION['user']['birthday'] ?></td>
                    </tr>
                    <tr>
                        <td class="l_td_y">手機</td>
                        <td class="r_td_y"><?= $_SESSION['user']['mobile'] ?></td>
                    </tr>
                    <tr>
                        <td class="l_td_y">地址</td>
                        <td class="r_td_y"><?= $_SESSION['user']['address'] ?></td>
                    </tr>
                </table>
                <div class="active_y">
                    <h2>最新活動</h2>
                    <div class="active_f">
                        <ul>
                            <li class="square_f blue">
                                <a href="product_list3.php">
                                    <img class="images" src="images/news_squre2_light.jpg" alt="">
                                    <p class="p2">梅雨季
                                        <br>全館雨傘85折</p>
                                </a>
                            </li>
                            <li class="small_pic_f">
                                <img src="images/member_square2.jpg" alt="">
                            </li>
                            <li class="square_f orange">
                                <a href="activity2.php">
                                    <img class="images" src="images/news_squre4_light.jpg" alt="">
                                    <p class="p4">陽傘新色上架</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> <!--active_y-->
            </div> <!--main_y-->
        </div>
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
         /*hideNav*/
         var scrolllast;
        $(window).scroll(function(){
            var scrollNow=$(this).scrollTop();
            // console.log(scrollNow);
            if (scrollNow < 200) {
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
         
        /*手機375_memberList*/
        $(".l_p_ul_y").hide();
        $(".fa-angle-down").click(function () {
            $(".fa-angle-down").toggleClass("rotate");
            $(".l_p_ul_y").slideToggle();
        });
    </script>
<?php include __DIR__.'/module_foot.php' ?>