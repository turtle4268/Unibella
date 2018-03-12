<?php require __DIR__. '/_db_connect.php'; ?>
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
        .l_aside_y ul .change_f{ /*f加 顯示目前頁面li的顏色*/
            background: #e6e6e6;
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
            color: #666;
            position: relative;/*f改*/
        }
        .main_y h2{
            margin: 50px auto;
            font-weight: bold;
            color: #666;
        }
        .form_infor_y{
            width: 50%;
            margin: 0 auto;
            padding-left: 5%; 
        }
        .memberInfor_y{
            display: flex;
            justify-content: space-between;
            align-content: center;
            margin-top:3em;
        }
        .memberLabel1_y{
            color: #666;
            font-size: 16px;
            text-align: left;
            flex: 1;
            padding-right: 5%;
            margin-bottom: 3em;
        }
        .memberInput1_y{
            /* width: 60%;
            height: 30px; */
            background-color:transparent;
            color: #666;
            border: none;
            border-bottom: 1px solid #666;
            flex: 3;
            margin-bottom: 3em;
        }
        .memberLabel_y{
            color: #666;
            font-size: 16px;
            text-align: left;
            /* flex: 1; */
            width: 12%;
        }
        .memberInput_y, .memberSelect_y{
            /* width: 60%;
            height: 30px; */
            background-color:transparent;
            color: #666;
            border: none;
            border-bottom: 1px solid #666;
            /* flex: 3; */
            width:88%;
            height: 30px;
        }
        input:focus{
            outline:none!important;
        }
        /* .memberBtn_y{
            background-color: transparent;
            font-size: 1em;
            color: #1f5572;
            border: 2px solid #1f5572;
            border-radius: 50px;
            padding: 1% 10%;
            margin: 4em auto;
        }
        .memberBtn_y:hover{
            background-color: #1f5572;
            color: #fff;           
            border: 2px solid #1f5572;        
        } */
        /*Q-button---------*/
        button {
            margin:80px 45px;
            border-radius: 28px;
            padding:10px 40px;
            border: 2px solid #302f3a;
            background: transparent;
            color:  #302f3a;
            font-size: 1rem;
            position: relative;
        }
        button:hover {
            color: #fff;
            transition: color 200ms linear 200ms;
            -webkit-transition: color 200ms linear 200ms;
            z-index: 3;
        }
        .memberBtn_y::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            left: -.5rem;
            top: -.5rem;
            z-index: -1;
            background-color: #5b8095;
            border-radius: 28px;
            transition: all 200ms ease-out;
        }
        button:hover::before {
            top: 0;
            left: 0;
        }
        button:active {
            transform: translateY(3px);
        }
        button:focus {
            outline: none;
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
        @import url("css/member_center_infor_phone.css");
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
                <h2>修改會員資料</h2>      
                <form name="form_infor" class="form_infor_y" method="post" action="" onsubmit="">
                    <div class="memberInfor_y">
                        <label for="email" class="memberLabel1_y">電子郵件 </label>
                        <input type="text" class="memberInput1_y" name="email" id="email" value="" placeholder="" disabled="disabled">
                        <!-- <small id="emailWarning" class="form-text text-muted warning">請填寫正確的電郵</small>                                                                                                                             -->
                    </div>
                    <p style="text-align:right">(*為必填)</p>       
                    <div class="memberInfor_y">
                        <label for="nickname" class="memberLabel_y"><span class="yellow_star">*</span>姓名: </label>
                        <input type="text" class="memberInput_y" name="nickname" id="nickname" value="" placeholder="">
                            <!-- <small id="nicknameWarning" class="form-text text-muted warning">請填寫兩個字以上的暱稱</small> -->
                    </div>
                    <div class="memberInfor_y">
                        <label for="nickname" class="memberLabel_y">&nbsp;性別: </label>
                        <select class="memberSelect_y" id="registerGender_y">
                            <option value="1"></option>
                            <option value="2">男</option>
                            <option value="3">女</option>
                        </select>
                    </div>
                    <div class="memberInfor_y">
                        <label for="birthday" class="memberLabel_y"><span class="yellow_star">*</span>生日: </label>
                        <input type="text" class="memberInput_y datepicker" name="birthday" id="birthday" value="" placeholder="">
                    </div>
                    <div class="memberInfor_y">
                        <label for="mobile" class="memberLabel_y"><span class="yellow_star">*</span>手機: </label>
                            <input type="text" class="memberInput_y" name="mobile" id="mobile" value="" placeholder="">
                            <!-- <small id="mobileWarning" class="form-text text-muted warning">請輸入十位數的手機號碼</small> -->
                    </div>       
                    <div class="memberInfor_y">
                        <label for="address" class="memberLabel_y"><span class="yellow_star">*</span>地址: </label>
                        <input type="text" class="memberInput_y" name="address" id="address" value="" placeholder="">
                    </div>
                    <button type="submit" class="memberBtn_y">確認送出</button>
                </form> 
            </div> <!--main_y-->
        </div> <!--mainBox_y-->
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
        /*手機375_memberList*/
        $(".l_p_ul_y").hide();
        $(".fa-angle-down").click(function () {
            $(".fa-angle-down").toggleClass("rotate");
            $(".l_p_ul_y").slideToggle();
        });
    </script>
</body>
</html>