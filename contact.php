<?php include __DIR__.'/module_head.php' ?>
    <style>
    header a{
        background-color: #666 ;
    }
    /*container-------------------------------------------------------------*/
    #container {
        width: 100%;  
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
        width: 100%;
        font-size: 36px;
        font-weight: bold;
        color:#1F5572;
        position: absolute;
        text-align: center;
    }

    .hideHeader {
        opacity: 0;
    }
    /*Sec1-------------------------------------------------------------*/
    .sec1_a {
        width: 100%;  
        margin-bottom: 5%;
    }
    .sec1_a h1 {
        text-align: center;
        font-size: 24pt;
        
    }
    .contact_a {
        display: flex;
        justify-content: center;
        padding-top: 50px;
        height: 100vh; 
        
    }
    .formP_a {
        width: 32%; 
        height: 100%;
        position: relative;
    }
    .usCotent_a {
        border:3px solid #f8cf4e;
        width: 35%;
        height: 90%;
        overflow: hidden;
        position: relative;  
        transition: all .5s linear; 
        box-shadow: 1px 1px 4px rgb(197, 197, 197);
    }
    .usCotent_a p {
        width:75%; 
        margin:0 auto;
        padding-top: 40px;
        color:#666666;
        transition: all .5s linear;
    }
    .usCotent_a iframe {
        height: 180px;
        margin: 0px 12%;
        width: 75%;
    }
    .usForm_a {
        border:3px solid #1f5572;
        width: 100%;
        position: absolute;
        top:10%;
        left: -5%;
        box-shadow: 1px 1px 4px rgb(197, 197, 197);
    }
    .usFormCon_a {
        width: 75%;
        margin: 0 16%;
        padding-top: 70px;
        color:#666666;
    }
    .usFormCon_a h3 {
        width: 100%;
        text-align: center;
        font-size: 24pt;
    }
    /* .usFormCon_a select {
        width: 67%;
        color:#666666;
        border:none;
        border-bottom: 1px solid #666;
        font-size: 16px;
        margin-top: 15px;
        margin-bottom: 15px;
    } */
    .usFormCon_a textarea {
        width: 90%;
        color:#666666;
        font-size: 16px;
        margin-top: 20px;
    }
    .usFormCon_a input {
        /* width: 66%; */
        /* height: 30px; */
        /* border:none;
        border-bottom: 1px solid #666;
        font-size: 16px;
        margin-top: 15px; */
    }
    .usFormCon_a select:focus, .usFormCon_a input:focus {
        outline:none;
        /* border-bottom: 1px solid#302f3a; */
    }
    .usFormCon_a textarea:focus {
        outline:none;  
    }
    /*--input--*/
    :focus{
        outline: none;
    }
    .usFormCon_a input[type="text"]{
        font: 15px/24px 'Muli', sans-serif; 
        color: #333; 
        width: 100%; 
        box-sizing: border-box; 
        letter-spacing: 1px;
    }
    .usFormCon_a label {
        float: left;
        font-size: 18px;
        padding: 5px 0;
    }
    
    .usFormCon_a .col-3{
        float: left; 
        width: 61%; 
        margin:0 3% 40px 3%; 
        position: relative;

    }
    .text_a{
        border: 0; 
        padding: 5px 0 5px; 
        border: 1px solid transparent; 
        border-bottom-color: #000; 
        transition: 0.4s;
        position: relative;
    }
    .text_a:focus{
        padding: 5px 10px 5px; 
        transition: 0.4s;
    }

    .text_a ~ .focus-border{
        position: absolute; 
        height: 0; 
        bottom: 0; left: 0; 
        width: 100%; 
        transition: 0.4s; 
        z-index: -1;
    }
    .text_a:focus ~ .focus-border{
        transition: 0.4s; 
        height: 34px; 
        border: 2px solid #3399FF; 
        z-index: 1;
    }
    .usFormCon_a select {
        width: 100%;
    }
    /*--button--*/
    button {
        width: 25%;
        height: 30px;
        font-size: 1rem;
        background-color: transparent;
        border: 2px solid #302f3a;
        color: #302f3a;
        position: relative;
        border-radius: 28px;
    }
    button::before {
        content: '';
        border-radius: 28px;
        position: absolute;
        width: 100%;
        height: 100%;
        left: -.5rem;
        top: -.5rem;
        z-index: -1;
        background-color: #5b8095;
        transition: all 200ms ease-out;
    }
    button:hover::before {
        top: 0;
        left: 0;
    }
    button:hover {
        color: #fff;
        transition: color 200ms linear 200ms;
        -webkit-transition: color 200ms linear 200ms;
        z-index: 3;
    }
    button:focus {
        outline: none;
    }
    button:hover:active {
        transform: translateY(3px);
    }
    .usFormCon_a .btn {
        width: 100%;
        text-align: center;
        padding: 25px 0;
    }
    
    .usCotent_a:hover p {
        color: #040a14;
        transition: color .4s linear .4s;
        -webkit-transition: color .5s linear .5s;
        position: relative;
        z-index: 1;
    }
    .usCotent_a:hover {
        border:3px solid #f3d573; 
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
        @import url("css/contact_phone.css");
    </style>
    <?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <div class="headerBg_a">
            <img src="images/banner_CONNECT.jpg" alt="">
            <p>Be Your Unique Umbrella.</p>
        </div>   
        <div class="sec1_a">
            <h1>聯絡我們</h1>
            <div class="contact_a">
                <div id="shadow"></div>
                <div class="usCotent_a">
                    <p>為了提供您最快速的服務，請先仔細瀏覽賣場內常見問題。
                    <br>
                    <br>若仍然無法解答您的問題，請於此送出提問，我們最晚會於次一工作日回覆。
                    <br>       
                    <br>(遇周末及例假日將會順延，請耐心等候)
                    <br>        
                    <br>客服電話：02-4562-2562
                    <br>       
                    <br>客服信箱：unibella@gmail.com
                    <br>       
                    <br>服務時間：週一至五 9:30-17:30
                    <br>(例假日及午休時段 12:00-13:00 暫停客服服務)
                    <br>       
                    <br>如有任何問題也可洽門市服務人員
                    <br>       
                    <br>門市地址:台北市大安區忠孝東路三段300號
                    <br>
                    <br>
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d639.0108433066861!2d121.54332318266957!3d25.041158932299425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abd0b034e669%3A0x45ff6e257f47e4e3!2z6YGg5p2xU09HT-W-qeiIiOmkqA!5e0!3m2!1szh-TW!2stw!4v1520910706577" 
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
    
                <div class="formP_a">
                    <form action="" class="usForm_a">
                        <div class="usFormCon_a">
                            <h3>我想發問</h3>
                            <br>
                            <label for="">電子郵件</label>
                            <div class="col-3">
                                <input class="text_a" type="text">
                                <span class="focus-border"></span>
                            </div>
                            <br>
                            <br>
                            <label for="">問題類型</label>
                            <div class="col-3">
                            <select class="text_a" size=1 STYLE="font-size:16px">
                                    <option>請選擇</option>
                                    <option>關於訂購</option>
                                    <option>關於配送</option>
                                    <option>關於退換貨</option>
                                    <option>電子發票相關</option>
                                    <option>其它</option>
                            </select>
                            <span class="focus-border"></span>
                            </div>
                            <br>
                            <br>
                            <label for="">問題說明</label><br>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                            <br>
                            <br>
                            <div class="btn"><button>送出</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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

        /*to top*/
        $(".toTop").click(function(){
            $("html,body").animate({
                    scrollTop:0
                },1000,);
        });

    
    </script> 
</body>
</html>