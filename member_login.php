<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    // $_SESSION['come_from'] = $_SERVER['HTTP_REFERER'];
?>
<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            text-align: center ;
        }
        :focus{
            outline:none ;
        }
        button{
            cursor: pointer ;
        }
        /**/
        .full{
            width: 100vw ;
            height: 100vh ;
            text-align: center ;
            position: relative ;
        }
        .rain{
            background-color: #1F5572 ;
            color: #000;
        }
        .sun{
            background-color: #F8CF4E ;
            color: #000;
            float: right ;
        }
        .half{
            width: 50% ;
            height: 100% ;
            overflow: hidden ;
            float: left ;
            transition: 1s ;
        }
        .half_unanimate_y{                 /*y增加*/
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
        /*login_y--------------------------------------------------------------*/
        .loginBox_y{
            width:100%;
            height:100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .login1_y, .login2_y{
            width: 20%;
            min-width:280px ;
            /* height: 100%; */
            text-align: center;
            letter-spacing: 3px;
           
        }
        .loginTitle_y{
            color: #1f5572;
            margin-bottom: 2em;
        }
        .loginLabel_y{
            color: #1f5572;
            font-size: 16px;
            /* flex: 2; */
            /* margin-right:5px; */
            margin-left:10px;
        }
        input{
            font-size:16px;
        }
        .loginInput_y{
            background-color:transparent;
            color: #1f5572;
            border: none;
            border-bottom: 1px solid #1f5572;
            /* padding-right: 10%; */
             /* flex: 3.5; */
             width: 200px;
        }
        .loginPass_y{
            width: 100%;
        }
        input:focus{
            outline:none!important;
        }
        .loginBtn_y{
            background-color: transparent;
            font-size: 1.5em;
            color: #1f5572;
            border: 2px solid #1f5572;
            border-radius: 50px;
            padding: 3px 90px;
            margin-top: 2em;
        }
        .loginBtn_y:hover, .registerPBtn_y:hover{
            background-color: #1f5572;
            color: #f8cf4e;           
            border: 2px solid #1f5572;        
        }
        .loginInfor_y{
             /* display: flex;
             justify-content: space-between;
             align-items: center; */
             margin:0 10px; 
             text-align: left;
        }
        .registerP_Title_y{
            color: #1f5572;
            margin-top: 4em;
            margin-bottom: 1em;
        }
        .registerPBtn_y{
            background-color: transparent;
            font-size: 1.5em;
            color: #1f5572;
            border: 2px solid #1f5572;
            border-radius: 50px;
            padding: 3px 90px;
        }
        .loginP_y{
            display: none;
        }
        /*register_y--------------------------------------------------------------*/
        .h_registerBox_y{
            width:100%;
            height:100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .h_register_y{
            width: 18%;
            min-width:280px ;
            text-align: center;
            letter-spacing: 3px;
            /* flex: 2; */
        }
        .h_registerTitle_y{
            color: #f8cf4e;
            margin-bottom: 3em;
        }
        .f_registerTitle_y{
            color: #f8cf4e;
            margin-bottom: 2em;
        }
        .h_register_y p{
            color: #f8cf4e;
            line-height: 2em;
        }
        .h_registerBtn_y{
            background-color: transparent;
            font-size: 1.5em;
            color: #f8cf4e;
            border: 2px solid #f8cf4e;
            border-radius: 50px;
            padding: 3px 90px;
            margin-top: 4.5em;
        }
        .h_registerBtn_y:hover{
            background-color: #f8cf4e;
            color: #1f5572;           
            border: 2px solid #f8cf4e;        
        }
        /*f_register_y--------------------------------------------------------------*/
        .full_register_y{
            width: 48%;
            min-width:720px ;
            text-align: center;
            letter-spacing: 3px;
            /* flex: 2; */           
        }
        .f_register_y p{
            color:#f8cf4e;
        }    
        .registerInfor1_y{
             display: flex;
             flex-wrap:wrap;
             justify-content: space-between;
             align-content: center;
             margin-top:1.5em; 
             /* padding: 0 3%; */
             overflow: hidden;
        }
        .registerLabel_y{
            color: #f8cf4e;
            font-size: 16px;
            /* flex: 1; */
            width: 8%;
            text-align: left;           
        }
        .registerInput_y{
            background-color:transparent;
            color: #f8cf4e;
            border: none;
            border-bottom: 1px solid #f8cf4e;
            /* padding-right: 10%; */
            /* flex: 4;     */
            width:92%;
            height: 30px;     
        }   
        .registerLabel1111_y{
            color: #f8cf4e;
            font-size: 16px;
            /* flex: 1; */
            width: 13%;
            text-align: left;
            margin-right:-5px;
            
        }
        .registerInput1111_y{
            background-color:transparent;
            color: #f8cf4e;
            border: none;
            border-bottom: 1px solid #f8cf4e;
            /* padding-right: 10%; */
            /* flex: 4;     */
            width:87%;
            height: 30px;     
        }           
        .registerInfor2_y{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top:1.5em; 
            /* padding: 0 3%; */
            text-align: left;
        }
        .registerInfor22_y{
            display: flex;
            flex-wrap:wrap;
            justify-content: space-between;
            align-items: center;
            width: 48%; 
        }
        .registerLabel22_y{
            color: #f8cf4e;
            font-size: 16px;
            /* flex: 0.5; */
            width: 16%;
            text-align: left;
        }
        .registerInput22_y{
            background-color:transparent;
            color: #f8cf4e;
            border: none;
            border-bottom: 1px solid #f8cf4e;
            /* padding-right: 10%; */
            /* flex: 2;     */
            width:84%;
            height: 30px;     
        }
        .registerLabel2222_y{
            color: #f8cf4e;
            font-size: 16px;
            /* flex: 0.5; */
            width: 27%;
            text-align: left;
        }
        .registerInput2222_y{
            background-color:transparent;
            color: #f8cf4e;
            border: none;
            border-bottom: 1px solid #f8cf4e;
            /* padding-right: 10%; */
            /* flex: 2;     */
            width:73%;
            height: 30px;     
        }
        .registerSelect_y{
            background-color:#1f5572;
            color: #f8cf4e;
            border: none;
            border-bottom: 1px solid #f8cf4e;
            width:84%;
            height: 30px; 
            font-size:16px;
        }
        .f_registerBtn_y{
            background-color: transparent;
            font-size: 1.5em;
            color: #f8cf4e;
            border: 2px solid #f8cf4e;
            border-radius: 50px;
            padding: 5px 75px;
            margin-top: 2em;
        }
        .f_registerBtn_y:hover{
            background-color: #f8cf4e;
            color: #1f5572;           
            border: 2px solid #f8cf4e;        
        }
        ::placeholder { 
            color: #b3b3b3;
            font-size: 12px;
        }
        .agreeBox_y{
            color:#f8cf4e;
            text-align:left;
            margin-top:2em;
        }
        .agreeBox_y a{
            color:#f8cf4e;
            text-decoration:none; 
            border-bottom:1px solid #f8cf4e;  
        }
        .rememberBox_y{
            text-align:right;
            color:#1f5572;
            margin-right:22px;
            margin-top:-15px;
        }
        .forgetBox_y{
            text-align:right;
            color:#1f5572;
            margin-right:22px;
            margin-top:10px;
        }
        .checktextF{
            letter-spacing:6px; 
            margin-right: -6px;
        }
        /*small_warning--------------------*/
        small.warning{
            color:#ed1c24;
            /* width:100%; */
            text-align:left;
            display:none;
        }
        .labelFour_y{
            padding:4px 0 0 0;
            /* margin-left: 50% ; */
        }
        .labelTow_y{
            padding:4px 24% 0 0;
            /* margin-left: 13% ; */
        }
        .labelTowFour_y{
            padding:4px 0 0 34%;
            /* margin-left: 27% ; */
        }
        .labelTowTow_y{
            padding:4px 0 0 20%;
            /* margin-left: 16% ; */
        }
        .noneSmall1_y{
            /* padding:10px 0 0 16%; */
            margin-top: 5px ;
            width:400px;
            height:21px;
        }
        .noneSmall_y{
            /* padding:10px 0 0 16%; */
            margin-top: 5px ;
            width:300px;
            height:14px;
        }
        /*datepicker--------------------*/
        input[type=date]::-webkit-inner-spin-button { 
            visibility: hidden; 
        }
        input[type=date]::-webkit-calendar-picker-indicator{
            background:transparent;
            width:6px;
            height:6px;
        }
        /*check-----*/
        input[type='checkbox'] {
            display: none;
        }
        .checktext{
            display: inline-block ;          
        }
        .check .box{
            width: 16px ;
            height: 16px ;
            display: inline-block ;
            position: relative ;
            top: 2px ;
            -webkit-mask-image: url(images/member_uncheck_yellow.svg) ;
        }
        .agree.box{
            background-color: #F8CF4E ;
        }
        .remember.box{
            background-color: #1F5572 ;
        }
        .check .box.checked{
            -webkit-mask-image: url(images/member_checked_yellow.svg) ;
        }
        /*--border--*/
        :focus{
        outline: none;
        }
        .col-3{
            width: 65%; 
            position: relative;
        } 
        input[type="text"]{
            font: 15px/24px "Lato", Arial, sans-serif; 
            color: #333; 
            box-sizing: border-box; 
            letter-spacing: 1px;
        }
        .effect-1 {
            border: 0; 
            border-bottom: 1px solid #aaa;
        }
        .effect-1 ~ .focus-border{
            position: absolute; 
            bottom: 0; 
            left: 0; 
            width: 0; 
            height: 1px; 
            background-color: #1f5572; 
            transition: 0.4s;
        }
        .effect-1:focus ~ .focus-border{
            width: 100%; 
            transition: 0.4s;
        }
        .labelOut_a {
            display:flex;
            margin: 27px 0 43px 0;
        }
        .col2-3 {
            width:71%;
        }
        .form_login {
            margin-top:20px;
        }
        .registerInput_y, .registerInput1111_y, .registerInput22_y, .registerInput2222_y{
            color:#f8cf4e !important;
        }
    </style>
    <style>
        @import url("css/member_login_phone.css");
    </style>
    <?php include __DIR__.'/module_nav.php' ?>
    <div id="container">   
        <section>
            <div class="half">
                <div class="rain full">
                    <div class="h_registerBox_y">
                        <div class="h_register_y">
                            <h2 class="h_registerTitle_y">首次購物</h2>
                            <p>快速進行會員註冊</p>
                            <p>完成訂購後並填寫個人資料</p>
                            <p>系統將自動將您升級為會員</p>
                            <button type="submit" class="h_registerBtn_y">註冊</button>
                        </div>
               
                    <div class="full_register_y">
                        <div class="f_register_y">
                            <h2 class="f_registerTitle_y">會員註冊</h2>
                            <p style="text-align:right">(*為必填)</p>
                            <form name="form_register" method="post" action="" onsubmit="return registerCheck()">
                                <div class="registerInfor1_y">
                                    <label for="email" class="registerLabel1111_y"><span class="yellow_star">*</span>Email:</label>
                                    <input type="text" class="registerInput1111_y" name="email" id="email" value="" placeholder="">
                                    <div class="noneSmall1_y">
                                        <small id="emailWarning" class="labelFour_y warning">請輸入正確格式的電子郵件</small>
                                    </div>                                                                       
                                </div>

                                <div class="registerInfor2_y">   
                                    <div class="registerInfor22_y">
                                        <label for="password" class="registerLabel22_y"><span class="yellow_star">*</span>密碼:</label>
                                        <input type="password" class="registerInput22_y" name="password" id="password" value="" placeholder="請輸入密碼(6~12位字元)">
                                        <div class="noneSmall_y">
                                            <small id="passwordWarning" class="labelTowTow_y warning">請輸入6~12位字元之密碼</small>
                                        </div>
                                    </div>
                                    <div class="registerInfor22_y">
                                        <label for="password_sure" class="registerLabel2222_y"><span class="yellow_star">*</span>密碼確認:</label>
                                        <input type="password" class="registerInput2222_y" name="password_sure" id="password_sure" value="" placeholder="請輸入密碼(6~12位字元)">
                                        <div class="noneSmall_y">
                                            <small id="password_sureWarning" class="labelTowFour_y warning">請再次確認密碼</small>
                                        </div>
                                    </div>
                                </div><!--<div class="registerInfor2_y">-->
                                <div class="registerInfor2_y">
                                    <div class="registerInfor22_y">
                                        <label for="name" class="registerLabel22_y"><span class="yellow_star">*</span>姓名:</label>
                                        <input type="text" class="registerInput22_y" name="name" id="name" value="" placeholder="">
                                        <div class="noneSmall_y">
                                            <small id="nameWarning" class="labelTowTow_y warning">請填寫兩個字以上的姓名</small>
                                        </div>
                                    </div>
                                    <div class="registerInfor22_y">
                                        <label for="gender" class="registerLabel22_y">&nbsp;性別:</label>
                                        <select class="registerSelect_y" name="gender" id="gender">
                                            <option value="0"></option>
                                            <option value="1">男</option>
                                            <option value="2">女</option>
                                        </select>
                                        <div class="noneSmall_y"></div>
                                    </div>
                                </div><!--<div class="registerInfor2_y">-->
                                <div class="registerInfor2_y">
                                    <div class="registerInfor22_y">
                                        <label for="mobile" class="registerLabel2222_y"><span class="yellow_star">*</span>手機號碼:</label>
                                        <input type="text" class="registerInput2222_y" name="mobile" id="mobile" value="" placeholder="">
                                        <div class="noneSmall_y">
                                            <small id="mobileWarning" class="labelTowFour_y warning">請輸入十位數的手機號碼</small>
                                        </div>
                                    </div>
                                    <div class="registerInfor22_y">
                                        <label for="birthday" class="registerLabel22_y">&nbsp;生日:</label>
                                        <input type="date" class="registerInput22_y datepicker" name="birthday" id="birthday" value="" placeholder="">
                                        <div class="noneSmall_y"></div>
                                    </div>
                                </div><!--<div class="registerInfor2_y">-->
                                <div class="registerInfor1_y">
                                    <label for="address" class="registerLabel_y"><span class="yellow_star">*</span>地址:</label>
                                    <input type="text" class="registerInput_y regAddress_y" name="address" id="address" value="" placeholder="">
                                    <div class="noneSmall1_y">
                                        <small id="addressWarning" class="labelTow_y warning">請填寫十個字以上的地址</small>
                                    </div>
                                </div>
                                <div class="agreeBox_y">
                                    <div class="check">
                                        <label for="agree" class="box agree">
                                            <input type="checkbox" class="agreeCheckbox_y" name="agree" id="agree" value=""/>
                                        </label>
                                        
                                        <div class="checktext"><span class="yellow_star">*</span>已詳閱及同意會員權益之<a href="">相關條款</a></div>
                                    </div>
                                </div>
                                <button type="submit" class="f_registerBtn_y" >送出</button>
                            </form>
                        </div>
                    </div>
                    <div class="back_r back">BACK</div>
                    <div class="h_register_y"></div>
                    </div>
                </div>
            </div>
            <div class="half_unanimate_y">
                <div class="sun full">
                    <div class="loginBox_y">
                        <div class="login1_y"></div>
                        <div class="login2_y">
                            <h2 class="loginTitle_y">會員登入</h2>
                            <form name="form_login" method="post" action="" onsubmit="return loginCheck()">
                                <div class="labelOut_a">
                                    <label for="email_login" class="loginLabel_y">Email:</label>
                                    <div class="loginInfor_y col-3">
                                        <input type="text" class="loginInput_y effect-1" name="email_login" id="email_login" value="<?= isset($_SESSION['remember'])?$_SESSION['remember']:'' ?>" placeholder="" width:100px;>
                                        <span class="focus-border"></span>
                                            <!-- <small id="emailWarning" class="form-text text-muted warning">請填寫正確的電郵</small>-->
                                    </div>
                                </div>
                                <div class="labelOut_a">
                                    <label for="password_login" class="loginLabel_y">密碼:</label>
                                    <div class="loginInfor_y col-3 col2-3">
                                        <input type="password" class="loginInput_y loginPass_y  effect-1" name="password_login" id="password_login" value="" placeholder="">
                                        <span class="focus-border"></span>
                                        <!-- <small id="passwordWarning" class="form-text text-muted warning">請輸入六個字元以上的密碼</small> -->
                                    </div>
                                </div>
                                <div class="rememberBox_y">
                                    <div class="check">
                                        <label class="checktext" for="remember">記住我</label>
                                        <label for="remember" class="box remember <?= isset($_SESSION['remember'])?'checked':'' ?>">
                                            <input type="checkbox" class="rememberCheckbox_y" name="remember" id="remember" value="<?= isset($_SESSION['remember'])?'1':'' ?>" <?= isset($_SESSION['remember'])?'checked="checked"':'' ?>/>
                                        </label>
                                        
                                    </div>
                                </div>
                                <div class="forgetBox_y">
                                    <a class="checktext checktextF">忘記密碼</a>
                                </div>
                                <button type="submit" class="loginBtn_y">登入</button>
                            </form>
                            <div class="loginP_y">
                                <h2 class="registerP_Title_y">首次購物</h2>
                                <button type="submit" class="registerPBtn_y">註冊</button>
                            </div>
                        </div>
                    </div>
                    <!-- <h1>2</h1> -->
                    <div class="back_l back">BACK</div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(".full_register_y").hide();
        $(".h_registerBtn_y").click(function(){
            $(".half").addClass("halfTofull").siblings().addClass("halfTonull");
            $(".h_register_y").animate(
                { opacity: 0}
                , 300
                , function () { $(this).hide(); }
            );
            $(".full_register_y").animate(
                { opacity: 1 }
                , 500
                , function () { $(this).show(); }
            );
        });
        $(".back").click(function(e){
            $(".h_register_y").animate(
                { opacity: 1}
                , 300
                , function () { $(this).show(); }
            );
            $(".full_register_y").animate(
                { opacity: 0 }
                , 300
                , function () { $(this).hide(); }
            );
            $(this).closest(".half").removeClass("halfTofull").siblings().removeClass("halfTonull");
            e.stopPropagation();    //不讓父元素動作(阻止事件冒泡)    
        });
        /*手機375*/
        $(".full, .half, .half_unanimate_y").addClass("half_sun_hide_y");
        $(".registerPBtn_y").click(function () {
            $(".full, .half, .half_unanimate_y").removeClass("half_sun_hide_y");
            $(".half_unanimate_y").addClass("halfTonull")
            $(".h_register_y").animate(
                { opacity: 0 }
                , 300
                , function () { $(this).hide(); }
            );
            $(".full_register_y").animate(
                { opacity: 1 }
                , 500
                , function () { $(this).show(); }
            );
            // alert($.browser.mobile);
                    });
        $(".back").click(function (e) {
            $("html,body").animate({
                scrollTop: 0
            }, 1);
            $(".full, .half, .half_unanimate_y").addClass("half_sun_hide_y");
            // alert($.browser.mobile);
            $(this).closest(".half").removeClass("halfTofull").siblings().removeClass("halfTonull");
            e.stopPropagation();    //不讓父元素動作(阻止事件冒泡)
        });
        /*hideNav*/
        var scrolllast;
        $(window).scroll(function(){
            var scrollNow=$(this).scrollTop();
            // console.log(scrollNow);
            if (scrollNow < 100) {
                $("header").removeClass("hide");
            } else {
                if (scrollNow > scrolllast) {
                    $("header").addClass("hide");
                } else {
                    $("header").removeClass("hide");
                }
            }
            scrolllast=scrollNow;
        }); 
        /*Checkbox*/
        $(".box").click(function(){
            var checkbox=$(this).find("input[type='checkbox']");
            if(!checkbox.prop("checked")){
                $(this).removeClass("checked"); //沒勾
            }else{
                $(this).addClass("checked");
            }
        });
        /*register form check*/
        function registerCheck(){
            $(".warning").hide();
            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var email = document.form_register.email.value;
            var password = document.form_register.password.value;
            var passSure = document.form_register.password_sure.value;
            var name = document.form_register.name.value;
            var mobile = document.form_register.mobile.value;
            var address = document.form_register.address.value;
            var agree=$("#agree");
            mobile=mobile.trim() ;
            var isRePass = true;
            if(! pattern.test(email)){
                isRePass = false;
                $('#emailWarning').show();
            }
            if(password.length<6 || password.length>12){
                isRePass = false;
                $('#passwordWarning').show();
            }
            if(!(password==passSure)){
                isRePass = false;
                $('#password_sureWarning').show();
            }
            if(name.length<2){
                isRePass = false;
                $('#nameWarning').show();
            }
            if(! /^09\d{8}$/.test(mobile)){
                isRePass = false;
                $('#mobileWarning').show();
            }
            if(address.length<10){
                isRePass = false;
                $('#addressWarning').show();
            }
            if(! agree.prop("checked")){
                isRePass = false;
                // alert('條款 未同意');
                $("#lightbox_f").find("#lightbox-panel_f p").text("請確認相關條款");
                $("#lightbox_f").show();
            }
            if(isRePass){
                $(".f_registerBtn_y").hide();
                $.post('register_api.php',$(document.form_register).serialize(),function(data){
                    console.log(data);
                    switch (data) {
                        case 1:
                            // alert("註冊成功! 請登入會員");
                            $("#lightbox_f").find("#lightbox-panel_f p").text("註冊成功! 請登入會員");
                            $("#lightbox_f").show();
                            $('.f_register_y input').val('');
                            break;

                        case -1:
                            // alert("註冊失敗! email已被註冊");
                            $("#lightbox_f").find("#lightbox-panel_f p").text("註冊失敗!此email已被註冊");
                            $("#lightbox_f").show();
                            break;
                    
                        default:
                            // alert("註冊失敗! 請稍後再試");
                            $("#lightbox_f").find("#lightbox-panel_f p").text("註冊失敗! 請稍後再試");
                            $("#lightbox_f").show();
                            break;
                    }
                },"json")
            }
            return false;

        }
        /*remember*/
        $("#remember").click(function(){
            if($(this).prop("checked")){
                $(this).val("1");
            }else{
                $(this).val("");
            }
            // console.log($(this).val());
        });
        /*login form check*/
        function loginCheck(){
            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var email_login = document.form_login.email_login.value;
            var password_login = document.form_login.password_login.value;
            var remember=document.form_login.remember.value;
            var isLoPass = true;
            var ss=2 ;
            if(! pattern.test(email_login)){
                isLoPass = false;
            }
            if(password_login.length<6 || password_login.length>12){
                isLoPass = false;
            }
            if(email_login=="" || password_login==""){
                isLoPass = false;
                $("#lightbox_f").find("#lightbox-panel_f p").text("請填入帳號密碼");
                $("#lightbox_f").show();
            }
            
            if(isLoPass){
                $.post("login_api.php",$(form_login).serialize(),function(data){
                    console.log(data);
                    switch (data) {
                        case 1:
                            // alert("登入成功!");
                            $("#lightbox_f").find("#lightbox-panel_f p").text("登入成功");
                            $("#lightbox_f").show();
                            setTimeout(function(){
                                <?php if(empty($_SESSION['come_from'])): ?>
                                location.href='home.php';
                                <?php else: ?>
                                location.href = "<?= $_SESSION['come_from'] ?>";
                                <?php endif; ?>
                            }, 1000);
                            break;
                    
                        default:
                            $("#lightbox_f").find("#lightbox-panel_f p").text("帳號密碼錯誤");
                            $("#lightbox_f").show();
                            break;
                    }
                },"json");
            }
            return false;
        }
        
    </script>
</body>
</html>