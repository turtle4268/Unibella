<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    if(!isset($_SESSION['user'])){
        header('Location:member_login.php');
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
        .l_aside_y ul .password_f{ /*f加 顯示目前頁面li的顏色*/
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
        .form_password_y{
            width: 50%;
            min-width:500px ;
            margin: 0 auto;
            padding-left: 5%; 
        }
        .passwordInfor_y{
            /* display: flex;
            justify-content: space-between;
            align-content: center; */
            margin-top:2em;
        }
        .memberLabel1_y{
            color: #666;
            font-size: 16px;
            text-align: left;
            /* flex: 1; */
            padding-right: 2%;
            margin-bottom: 3em;
            width: 26%;
        }
        .memberInput1_y{
            /* width: 60%;
            height: 30px; */
            background-color:transparent;
            color: #666;
            border: none;
            border-bottom: 1px solid #666;
            /* flex: 3; */
            margin-bottom: 3em;
            width: 72%;
        }
        .p_y{
            text-align:right;
            margin-right: 15px;
        }
        .passwordLabel1_y{
            color: #666;
            font-size: 16px;
            text-align: left;
            /* flex: 1; */
            width: 26%;
        }
        .passwordInput1_y{
            background-color:transparent;
            color: #666;
            border: none;
            border-bottom: 1px solid #666;
            /* flex: 3; */
            width:74%;
            height: 30px;
        }
        .passwordLabel_y{
            color: #666;
            font-size: 16px;
            text-align: left;
            /* flex: 1; */
            width: 30%;
        }
        .passwordInput_y{
            background-color:transparent;
            color: #666;
            border: none;
            border-bottom: 1px solid #666;
            /* flex: 3; */
            width:70%;
            height: 30px;
        }
        input:focus{
            outline:none!important;
        }
        /* .passwordBtn_y{
            background-color: transparent;
            font-size: 1em;
            color: #1f5572;
            border: 2px solid #1f5572;
            border-radius: 50px;
            padding: 1% 10%;
            margin: 4em auto;
        }
        .passwordBtn_y:hover{
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
        .passwordBtn_y::before {
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
        /*small_warning--------------------*/
        small.warning{
            color:#ed1c24;
            display: none;
        }
        .noneSmall_y{
            margin: 5px 0 0 135px;
            width:300px;
            height:14px;
            text-align: left;
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
        @import url("css/member_center_password_phone.css");
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
                <h2>密碼修改</h2>      
                <form name="form_password" class="form_password_y" method="post" action="" onsubmit="return passCheck()">
                    <div class="passwordInfor_y">
                        <label for="email" class="memberLabel1_y">電子郵件 </label>
                        <input type="text" class="memberInput1_y" name="email" id="email" value="<?= $_SESSION['user']['email'] ?>" placeholder="" disabled="disabled">
                        <!-- <small id="emailWarning" class="form-text text-muted warning">請填寫正確的電郵</small>                                                                                                                             -->
                    </div>
                    <p class="p_y">(*為必填)</p>       
                    <div class="passwordInfor_y">
                        <label for="oldpassword" class="passwordLabel1_y">
                            <span class="yellow_star">*</span>原始密碼:</label>
                        <input type="password" class="passwordInput1_y" name="oldpassword" id="oldpassword" value="" placeholder="請輸入密碼(6~12位字元)">
                        <div class="noneSmall_y">
                            <small id="oldpasswordWarning" class="labelTowTow_y warning">請輸入6~12位字元之密碼</small>
                        </div>        
                    </div>
                    <div class="passwordInfor_y">
                        <label for="password" class="passwordLabel_y">
                            <span class="yellow_star">*</span>輸入新密碼:</label>
                        <input type="password" class="passwordInput_y" name="password" id="password" value="" placeholder="請輸入密碼(6~12位字元)">
                        <div class="noneSmall_y">
                            <small id="passwordWarning" class="labelTowTow_y warning">請輸入6~12位字元之密碼</small>
                        </div>     
                    </div>
                    <div class="passwordInfor_y">
                        <label for="password_sure" class="passwordLabel_y">
                            <span class="yellow_star">*</span>新密碼確認:</label>
                        <input type="password" class="passwordInput_y" name="password_sure" id="paspassword_suresword" value="" placeholder="請輸入密碼(6~12位字元)">
                        <div class="noneSmall_y">
                            <small id="password_sureWarning" class="labelTowFour_y warning">請再次確認密碼</small>
                        </div>                    
                    </div>
                    <button type="submit" class="passwordBtn_y">確認送出</button>
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
            if (scrollNow < 240) {
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
        /*editpassword form check*/
        function passCheck(){
            var oldpassword = document.form_password.oldpassword.value;
            var password = document.form_password.password.value;
            var passSure = document.form_password.password_sure.value;
            var isPaPass = true; 
            if(oldpassword.length<6 || oldpassword.length>12){
                isPaPass = false;
                $('#oldpasswordWarning').show();
            }
            if(password.length<6 || password.length>12 || password==oldpassword){
                isPaPass = false;
                $('#passwordWarning').show();
            }
            if(!(password==passSure)){
                isPaPass = false;
                $('#password_sureWarning').show();
            }
            if(isPaPass){
                $.post("edit_pass_api.php",$(form_password).serialize(),function(data){
                    // console.log(data);
                    switch (data) {
                        case 1:
                            alert("修改成功!");
                            break;
                    
                        default:
                            alert("修改失敗!");
                            break;
                    }
                },"json");
            }
            return false;
        }
    </script>
<?php include __DIR__.'/module_foot.php' ?>