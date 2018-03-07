<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            text-align: center ;
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
            width: 16%;
            /* height: 100%; */
            text-align: center;
            letter-spacing: 3px;
           
        }
        .loginTitle_y{
            color: #1f5572;
            margin-bottom: 4em;
        }
        .loginLabel_y{
            color: #1f5572;
            font-size: 16px;
            flex: 2;
        }
        .loginInput_y{
            background-color:transparent;
            color: #1f5572;
            border: none;
            border-bottom: 1px solid #1f5572;
            /* padding-right: 10%; */
             flex: 3;
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
            padding: 1% 30%;
            margin-top: 4em;
        }
        .loginBtn_y:hover, .registerPBtn_y:hover{
            background-color: #1f5572;
            color: #f8cf4e;           
            border: 2px solid #1f5572;        
        }
        .loginInfor_y{
             display: flex;
             justify-content: space-between;
             align-items: center;
             margin-top:2em; 
             padding: 0 3%;
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
            padding: 1% 30%;
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
            width: 16%;
            text-align: center;
            letter-spacing: 3px;
            /* flex: 2; */
        }
        /* .e_register_y{
            flex: 1;
        }
        .full_register_y{
            flex: 2;
        } */
        .h_registerTitle_y, .f_registerTitle_y{
            color: #f8cf4e;
            margin-bottom: 3em;
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
            padding: 1% 30%;
            margin-top: 4em;
        }
        .h_registerBtn_y:hover{
            background-color: #f8cf4e;
            color: #1f5572;           
            border: 2px solid #f8cf4e;        
        }
        /*f_register_y--------------------------------------------------------------*/
        .full_register_y{
            width: 48%;
            text-align: center;
            letter-spacing: 3px;
            /* flex: 2; */           
        }
        .f_register_y p{
            color:#f8cf4e;
        }    
        .registerInfor1_y{
             display: flex;
             justify-content: space-between;
             align-content: center;
             margin-top:3em; 
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
            margin-top:3em; 
            /* padding: 0 3%; */
            text-align: left;
        }
        .registerInfor22_y{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 48%; 
        }
        .registerLabel2_y{
            color: #f8cf4e;
            font-size: 16px;
            /* flex: 0.5; */
            width: 16%;
            text-align: left;
        }
        .registerInput2_y{
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
            width:300px;
            height: 30px; 
        }
        .f_registerBtn_y{
            background-color: transparent;
            font-size: 1.5em;
            color: #f8cf4e;
            border: 2px solid #f8cf4e;
            border-radius: 50px;
            padding: 0.5% 10%;
            margin-top: 4em;
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
                            <form name="form_register" method="post" action="" onsubmit="">
                                <div class="registerInfor1_y">
                                    <label for="email" class="registerLabel1111_y"><span class="yellow_star">*</span>電子郵件:</label>
                                    <input type="text" class="registerInput1111_y" name="email" id="email" value="" placeholder="">
                                    <!-- <small id="emailWarning" class="form-text text-muted warning">請填寫正確的電郵</small>
                                                                                                             -->
                                </div>
                                <div class="registerInfor2_y">   
                                <div class="registerInfor22_y">
                                    <label for="password" class="registerLabel2_y"><span class="yellow_star">*</span>密碼:</label>
                                    <input type="password" class="registerInput2_y" name="password" id="password" value="" placeholder="請輸入6~12位字元之密碼">
                                    <!-- <small id="passwordWarning" class="form-text text-muted warning">請輸入六個字元以上的密碼</small> -->
                            
                                </div>
                                <div class="registerInfor22_y">
                                    <label for="password" class="registerLabel2222_y"><span class="yellow_star">*</span>密碼確認:</label>
                                    <input type="password" class="registerInput2222_y" name="password" id="password" value="" placeholder="">
                                    <!-- <small id="passwordWarning" class="form-text text-muted warning">請輸入六個字元以上的密碼</small> -->
                                
                                </div>
                                </div><!--<div class="registerInfor2_y">-->
                                <div class="registerInfor2_y">
                                <div class="registerInfor22_y">
                                    <label for="nickname" class="registerLabel2_y"><span class="yellow_star">*</span>姓名:</label>
                                    <input type="text" class="registerInput2_y" name="nickname" id="nickname" value="" placeholder="">
                                    <!-- <small id="nicknameWarning" class="form-text text-muted warning">請填寫兩個字以上的暱稱</small> -->
                                </div>
                                <div class="registerInfor22_y">
                                    <label for="nickname" class="registerLabel2_y">&nbsp;性別:</label>
                                    <select class="registerSelect_y" id="registerGender_y">
                                        <option value="1"></option>
                                        <option value="2">男</option>
                                        <option value="3">女</option>
                                    </select>
                                    
                                </div>
                                </div><!--<div class="registerInfor2_y">-->
                                <div class="registerInfor2_y">
                                <div class="registerInfor22_y">
                                    <label for="mobile" class="registerLabel2222_y"><span class="yellow_star">*</span>手機號碼:</label>
                                    <input type="text" class="registerInput2222_y" name="mobile" id="mobile" value="" placeholder="">
                                    <!-- <small id="mobileWarning" class="form-text text-muted warning">請輸入十位數的手機號碼</small> -->
                                
                                </div>
                                <div class="registerInfor22_y">
                                    <label for="birthday" class="registerLabel2_y"><span class="yellow_star">*</span>生日:</label>
                                    <input type="text" class="registerInput2_y datepicker" name="birthday" id="birthday" value="" placeholder="">
                                </div>
                                </div><!--<div class="registerInfor2_y">-->
                                <div class="registerInfor1_y">
                                    <label for="address" class="registerLabel_y"><span class="yellow_star">*</span>地址:</label>
                                    <input type="text" class="registerInput_y regAddress_y" name="address" id="address" value="" placeholder="">
                                </div>
                                <button type="submit" class="f_registerBtn_y" >送出</button>
                            </form>
                        </div>
                    </div>
                    <!-- <h1>1</h1> -->
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
                            <form name="form_login" method="post" action="" onsubmit="">
                                <div class="loginInfor_y">
                                    <label for="email" class="loginLabel_y">電子郵件:</label>
                                    <input type="text" class="loginInput_y" name="email" id="email" value="" placeholder="">
                                    <!-- <small id="emailWarning" class="form-text text-muted warning">請填寫正確的電郵</small>
                                                                                 -->
                                </div>
                                <div class="loginInfor_y">
                                    <label for="password" class="loginLabel_y">密碼:</label>
                                    <input type="password" class="loginInput_y" name="password" id="password" value="" placeholder="">
                                    <!-- <small id="passwordWarning" class="form-text text-muted warning">請輸入六個字元以上的密碼</small> -->
                    
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
        $(".registerPBtn_y").click(function () {
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
    </script>
</body>
</html>