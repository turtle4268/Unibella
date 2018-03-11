<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <title>confirmCartList</title>
    <style>
    *{
        margin: 0 ;
        padding: 0 ;
        list-style-type: none ;
        text-decoration-line: none ;
        font-family: "微軟正黑體" ;
        font-weight: normal ;
        letter-spacing: 3px ;
    }
/*Header--------------------------------------------------------*/
    header{
        position: fixed ;
        z-index: 5 ; 
        width: 100% ;
        display: flex ;
        justify-content: space-between ;
        color: #fff ;
        padding: 0 40px ;
        padding-top: 28px ;
        box-sizing: border-box ;
    }
    header h1{
        font-family: "Nyala" ;
        font-size: 36px ;
        position: relative ;
        left: 30px ;
    }
    .h_ul li{
        display: inline-block ;
        padding: 0 15px ;
    }
    .h_ul li a{
        display: block ;
        width: 25px ;
        height: 25px ;
        cursor: pointer ;
        background-color: #fff ;
        -webkit-mask-repeat: no-repeat ;
        -webkit-mask-position: center ;
    }
    .member{
        -webkit-mask-image: url(images/icon_MEMBER.svg) ;
    }
    .cart{
        -webkit-mask-image: url(images/icon_CART.svg) ;
    }
    .hamburger{
        -webkit-mask-image: url(images/icon_MENU.svg) ;
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
        /* text-align: center; */
        right: 13%;
        letter-spacing: 5px;
    }
    .hideHeader {
        opacity: 0;
    }
    /*container-------------------------------------------------------------*/
    #container {
        width: 100%;  
        /* height: 180vh;    */
    }
    /*Sec1-------------------------------------------------------------*/
    .sec1_a {
        width: 100%;   
        padding-top: 50px;
    }
    /*----步驟-------*/
    .steps-container_a {
        width: 100%;
        text-align: center;
        display: flex;
        justify-content: center;
        margin: 0 auto;
        overflow: hidden;
    }
    .step_a {
        width: 200px;
        height: 130px;
    }
    .step_a span{
        color:#666;
    }
    .step-content_a {
        width: 30px;
        height: 30px;
        background: #fff;
        display: inline-block;
        border-radius: 100%;
        border: 3px solid #1F5572;
        position: relative;
    }
    .stepDown-content_a {
        top:40px;
    }
    .step_a:first-child .step-content_a {
        top:2px;
    }
    .step_a:nth-child(3) .step-content_a {
        top:1px;
    }
    .step-content_a::after {
        content: "";
        display: block;
        width: 155px;
        height: 3px;
        position: relative;
        background: #1F5572;
        margin-left: 37px;
        margin-top: 50%;
        transform: translateY(-50%);
    }
    .step_a:last-child .step-content_a::after {
        width: 100px;
    }
    .step1-content_a::before {
        content: "";
        display: block;
        width: 100px;
        height: 3px;
        position: relative;
        background: #1F5572;
        margin-left: -108px;
        top: 14px;
        transform: translateY(-50%);
    }
    .step1-content_a::after {
        margin-top: 36%;
    }
    .des_a {
        font-size: 18px;
    }
    .desUp_a {
        padding-bottom: 15px;
    }
    .desDown_a {
        padding-top: 55px;
    }
    .step-content_a.active {
        background: #F8CF4E;
        border-color: #F8CF4E;
        animation: blob 0.3s ease-out;
    }
    .step-content_a i {
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        line-height: 0;
        font-size: 18px;
        color: #fff;
        font-weight: bold;
    }
    /*form1*/
    table {
        width: 55%;
        max-width: 55%;
        margin: 0 auto;
        margin-top: 30px;
        border-collapse: collapse;
        color: #666;
    }
    .table_a {
        margin-top: 60px;
    }
    table tbody tr td i.far {
        font-size: 20px;
    }
    table thead tr th {
        background: #666;
        color: #fff;
        padding: 6px 0;
        border: 1px solid #999;
        border-right: 1px solid #fff;
    }
    .delect_a {
        border-right: 1px solid #999;
    }
    .table_a tbody tr td {
        text-align: center;
        height: 200px;
        border: 1px solid #999;
        
    }
    .table_a tbody tr .productCom_A {
        width: 300px;
        height: 300px;
    
    }
    .table_a tbody tr .productCom_A figure {
        width: 300px;
        height: 300px;
        overflow: hidden;
    }
    .table_a tbody tr td img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        
    }
    .tablePhone_a {
        display: none;
    }
    
    /*form2*/
    .table2_a {
        width: 55%;
        max-width: 55%;
        margin: 0 auto;
        border-collapse: collapse;
    }
    .table2_a tbody tr td {
        border: 1px solid #999;
        position: relative;
        height: 200px;
    }
    .table2_a tbody tr td p span {
       padding: 0 9%;
    }
    .formContent_a {
        width: 100%;
        position: absolute;
        left: 34%;
        top: 20%;
    }
    .formContent2_a {
        width: 100%;
        position: absolute;
        left: 34%;
        top: 45%;
    }
    .formContent3_a {
        width: 100%;
        position: absolute;
        left: 34%;
        top: 70%;
    }
    .formSelect_a{
        height: 30px;
    }
    .formText {
        height: 25px;   
    }
    .total_a {
        padding: 85px;
        border: none;
        margin:0 auto;
        text-align: center; 
        color: #C1272D;
    }
    /*form3*/
    .table3_a .formContent_a {
        width: 100%;
        position: absolute;
        left: 34%;
        top: 30%;
    }
    .table3_a .formContent2_a {
        width: 100%;
        position: absolute;
        left: 34%;
        top: 56%;
    }
    /*按鈕*/
    .btn_a {
        display: flex;
        justify-content: center;
        margin-bottom: 5%;
        position: relative;
    }
    .btn_a button {
        margin:15px 45px;
        border-radius: 28px;
        padding:10px 40px;
        border: 2px solid #302f3a;
        background: transparent;
        color:  #302f3a;
        font-size: 1rem;
        position: relative;
    }
    .btn_a button:hover {
        color: #fff;
        transition: color 200ms linear 200ms;
        -webkit-transition: color 200ms linear 200ms;
        z-index: 3;
    }
    .btn_a .shop_a::before {
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
    .btn_a .buy_a::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        left: -.5rem;
        top: -.5rem;
        z-index: -1;
        background-color: #f8d360;
        border-radius: 28px;
        transition: all 200ms ease-out;
    }
    .btn_a button:hover::before {
        top: 0;
        left: 0;
    }
    .btn_a button:active {
        transform: translateY(3px);
    }
    .btn_a button:focus {
        outline: none;
    }
    /*-------toTop--------*/
    .toTop{
        color: #1F5572 ;
        position: absolute;
        right: 50px;
        top: 10px ;
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

    /*Footer-------------------------------------------------------------*/
    footer{
        background-color: #CCC ;
        color: #FFF ;
    }
    .f_content{
        display: flex ;
        padding: 40px ;
    }
    .f_quarter{
        width: 25% ;
        display: flex ;
        justify-content: center ;
        align-items: center ;
        border-right: 1px solid #FFF ;
        flex: 1 ;
        font-size: 16px ;
    }
    .f_quarter h2{
        font-family: "Nyala" ;
        font-size: 32px ;
    }
    .f_quarter.between{
        justify-content: space-around ;
    }
    .f_quarter.border_none{
        border: none ;
        flex: 1.5 ;
        flex-wrap: wrap ;
    }
    .f_quarter.border_none .mail{
        width: 265px ;
        height: 30px ;
        border: 2px solid #FFF ;
        border-radius: 28px ;
        margin: 16px 0 ;
        display: flex ;
        justify-content: center ;
        align-items: center ;
    }
    .mail .einput{
        width: 210px ;
        height: 24px ;
        margin-left: 5px ;
        font-size: 16px ;
        letter-spacing: normal ;
        border: none ;
        background: #CCC ;
    }
    .mail .einput:focus{
        color: #FFF ;
        outline: none ;
    }
    .mail .eput{
        display: inline-block ;
        padding: 0 5px ;
    }
    .mail .eput i{
        font-size: 26px ;
    }
    .f_quarter a{
        display: block ;
        color: #FFF ;
        padding: 9px 0px ;
    }
    .f_quarter a.aicon{
        display: inline-block ;
        margin: 20px ;
    }
    .f_quarter a.aicon i{
        font-size: 28px ;
    }
    .f_quarter a.fb{
        margin-left: 0 ;
    }
    .f_quarter a.fb i{
        font-size: 24px ;
    }
    .foot{
        text-align: center ;
        font-size: 12px ;
        background-color: #999 ;
        padding: 12px ;
        border-top: 1px solid #FFF ;
    }
/*Nav--------------------------------------------------------------*/
    nav{
        position: fixed ;
        z-index: 10 ;
        display: flex ;
        width: 20% ;
        height: 100vh ;
        top: 0 ;
        right: 0 ;
        text-align: center ;
        background-color: #ffffffcc ;
        transition: 1s ;
    }
    nav.navhide{
        right: -20% ;
    }
    nav .close{
        width: 30px ;
        height: 30px ;
        position: absolute ;
        top: 40px ;
        right: 40px ;
        cursor: pointer ;
        background: url(images/X.svg) center center no-repeat ;
    }
    .n_ul{
        width: 100% ;
        margin: 0 auto ;
        align-self: center ;
        padding: 50px ;
        
    }
    .n_ul li{
        display: flex ;
        align-content: center ;
        margin: 4px 0 ; 
    }
    .n_ul li a{
        display: block ;
        width: 100% ;
        padding: 12px ;
        color: #666 ;
        font-size: 20px ;
        z-index: 10;
    }
    .n_ul li a:hover{
        background-color: #CCC;
    }
/*Mediaquery--------------------------------------------------------------*/
    @media screen and (max-width: 376px) {
    /*--header--*/
    *{
        letter-spacing: 2px ;
    }
    header {
        padding-right: 5px;
        padding-left: 5px;
        padding-top: 10px ;
    }
    header h1 {
        left: 10px;
        top:0;
        font-size:26px;
    }
    .h_ul li {
        padding: 0 10px;
    }
    /*--banner--*/
    .headerBg_a p {
        width: 70%;
        font-size: 24px;
        left: 10%;
        top: 30%;
        font-weight: 400;
        text-align: inherit;
        letter-spacing: 5px;
    }
    .headerBg_a img {
        width: 300%;
    }
    /*--sec1--*/
    .sec1_a {
        padding-top: 20px;
    }
    /*--step--*/
    .step_a {
        width: 88px;
        height: auto;
    }
    .step_a span {
        color: #666;
    }
    .desUp_a {
        padding-bottom: 4px;
    }
    .desDown_a {
        padding-top: 50px;
    }
    .des_a {
        font-size: 16px;
        width:85px;
    }
    .step-content_a {
        width: 20px;
        height: 20px;
    }
    .step1-content_a::after {
        margin-top: 45%;
    }
    .step-content_a::after {
        width: 54px;
        margin-top: 10px;
        margin-left: 27px;
    }
    .step_a:last-child .step-content_a::after {
        width: 30px;
        visibility: hidden;
    }
    .step_a:first-child .step-content_a {
        top:-1px;
    }
    .step_a:nth-child(3) .step-content_a {
        top:0;
    }
    .step1-content_a::before {
        visibility: hidden;
    }
    .step1-content_a::after {
        margin-top:8px;
    }
    .stepDown-content_a {
        top:46px;
    }
    .step-content_a i {
        left: 2px;
        font-size: 16px;
    }
    /*--total--*/
    .total_a {
        padding:30px;
    }
    /*--table--*/
    table {
        width: 81%;
        max-width: 81%;
    }
    table thead tr th {
        border-right: 1px solid #999;
    }
    .table_a {
        display: none;
    }
    .tablePhone_a {
        display: block;
        margin: 0 9%;
        margin-top:30px;
    }
    .tablePhone_a tbody tr td figure {
        position: relative;
        width: 300px;
        height: 300px;
        overflow: hidden;

    }
    .tablePhone_a tbody tr td figure img {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
    .tablePhone_a tbody .producCotent_a {
        height: 50px;
    }
    .tablePhone_a tbody tr td {
        border:1px solid #666;
    }
    .tablePhone_a tbody .producCotent_a td {
        border-top: none;
        border-bottom: none;
        height: 50px;
        text-align: left;
    }
    .tablePhone_a tbody .producCotentL_a  {
        border-bottom: 1px solid #666;
    }
    .tablePhone_a tbody .producCotent_a td p {
        width: 70%;
        margin-left: 15%;
    }
    .tablePhone_a tbody .producCotent_a td p span {
        margin-left: 18%;
    }
    .tablePhone_a tbody .producCotentM_a td p span {
        margin-left: 35%;
    }
    
    /*--table2--*/
    .table2_a {
        width: 81%;
        max-width: 81%;
        margin-left: 34px;
    }
    .table2_a .formContent_a {
        left: 13%;
    }
    .table2_a .formContent2_a {
        left: 13%;
    }
    .table2_a .formContent3_a {
        left: 13%;
    }
    /*--button--*/
    .btn_a {
        display: block;
        margin: 10% 0;
        text-align: center;
    }
    /*--toTop--*/
    .toTop {
        right:20px;
        top: 80px;
    }
    /*--Nav--*/
    nav{
        width: 100% ;
    }
    nav.navhide{
        right: -100% ;
    }
    /*footer*/
    .f_content{
        flex-wrap: wrap ;
        padding: 20px 40px ;
    }
    .f_quarter{
        min-width: 100% ;
        border-right: none ;
        padding: 20px 0 ;
        position: relative ;
    }
    .f_quarter::before{
        content: "" ;
        border-bottom: 1px solid #FFF ;
        width: 40% ;
        height: 100% ;
        position: absolute ;
        margin: 0 auto ;
    }
    .f_quarter.border_none::before{
        content: "" ;
        border-bottom: 1px solid transparent ;
        width: 50% ;
        height: 100% ;
        position: absolute ;
        margin: 0 auto ;
    }
    .f_quarter p{
        text-align: center ;
    }
    .f_quarter a.aicon{
        width: 36px ;
        margin: 0 ;
        text-align: center ;
        margin: 15px ;
    }
    .foot{
        padding: 12px 0 ;
        letter-spacing: 2px ;
    }
    }
    </style>
</head>
<body>
    <header>
        <h1>Unibella</h1>
        <ul class="h_ul">
            <li><a class="member"></a></li>
            <li><a class="cart" ></a></li>
            <li><a class="hamburger"></a></li>
        </ul>
    </header>
<div id="container">
    <div class="headerBg_a">
        <img src="images/banner_CART.jpg" alt="">
        <p>Be Your Unique Umbrella.</p>
    </div>
    <section class="sec1_a" >
        <div class="steps-container_a">
            <div class="step_a ">
                <div class="des_a desUp_a">
                    <span>選擇付款方式</span>
                </div>
                <span class="step-content_a step1-content_a "></span> 
            </div>
            <div class="step_a">
                <span class="step-content_a stepDown-content_a"></span>
                <div class="des_a desDown_a">
                    <span>填寫運送資料</span>
                </div>
            </div>
            <div class="step_a">
                <div class="des_a  desUp_a">
                    <span>確認購物清單</span>
                </div>
                <span class="step-content_a"></span>
            </div>
            <div class="step_a">
                <span class="step-content_a stepDown-content_a"></span>
                <div class="des_a desDown_a">
                    <span>購物完成</span>
                </div>
            </div>
        </div>
        <table class="table_a">
            <thead class="thead-dark_a">
                <tr>
                  <th scope="col">商品圖片</th>
                  <th scope="col">商品名稱</th>
                  <th scope="col">數量</th>
                  <th scope="col">單價</th>
                  <th scope="col">小計</th>
                  <th scope="col">備註</th>
                  <th class="delect_a" scope="col">刪除</th>
                </tr>
              </thead>
            <tbody>
                <tr>
                  <td class="productCom_A"><figure><img src="images/Parasoltranslucent-skyblue-umbrella_800.png" alt=""></figure></td>
                  <td>1111</td>
                  <td>111</td>
                  <td>111</td>
                  <td>111</td>
                  <td>111</td>
                  <td><i class="far fa-trash-alt"></i></td>
                </tr>
                <tr>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td><i class="far fa-trash-alt"></i></td>
                </tr>
            </tbody>
        </table>
        <table class="tablePhone_a">
                <thead class="thead-dark_a">
                    <tr>
                      <th scope="col">商品圖片</th>
                    </tr>
                  </thead>
                <tbody>
                    <tr>
                      <td><figure><img src="images/Parasoltranslucent-skyblue-umbrella_800.png" alt=""></figure></td>
                    </tr>
                    <tr class="producCotent_a">
                      <td><p>商品名稱<span>我是商品</span></p></td>
                    </tr>
                    <tr class="producCotent_a producCotentM_a">
                        <td><p>數量<span>1</span></p></td>
                    </tr>
                    <tr class="producCotent_a producCotentM_a">
                        <td><p>單價<span>NT$.1850</span></p></td>
                    </tr>
                    <tr class="producCotent_a producCotentM_a">
                        <td><p>小計<span>NT$.1850</span></p></td>
                    </tr>
                    <tr class="producCotent_a producCotentM_a">
                        <td><p>備註<span></span></p></td>
                    </tr>
                    <tr class="producCotent_a  producCotentL_a">
                        <td><p>刪除<span></span></p></td>
                    </tr>

                </tbody>
        </table>
        <table class="table2_a">
            <thead>
                <tr>
                    <th scope="col">付款資料</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p class="formContent_a">付款方式
                            <span>7-11貨到付款</span>
                        </p>
                        <p class="formContent2_a">應付金額
                            <span>2400</span>
                        </p> 
                        <p class="formContent3_a">超商門市
                            <span>大安門市</span>
                        </p>    
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table2_a table3_a">
                <thead>
                    <tr>
                        <th scope="col">訂購人資訊</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p class="formContent_a">訂購人姓名
                                <span>王大明</span>
                            </p>
                            <p class="formContent2_a">訂購人手機
                                <span>0916335177</span>
                            </p>     
                        </td>
                    </tr>
                </tbody>
            </table>
        <div class="total_a" data-val="">共 X 件，總金額 NT$. 2400</div>
        <div class="btn_a">
            <button class="shop_a">繼續購物</button>
            <button class="buy_a">立即購買</button>
            <div class="toTop">
                <div class="tr"></div>
                <h5>TOP</h5>
            </div>
        </div>
        

    </section>
</div>
    <nav class="navhide">
        <div class="close"></div>
        <ul class="n_ul">
            <li><a href="">品牌介紹</a></li>
            <li><a href="">專利技術</a></li>
            <li><a href="">產品</a></li>
            <li><a href="">最新消息</a></li>
            <li><a href="">顧客服務</a></li>
            <li><a href="">會員中心</a></li>
            <li><a href="">聯絡我們</a></li>
            <li><a href="">相關連結</a></li>
            <li><a href="">Q&amp;A</a></li>
        </ul>
    </nav>
    <footer>
            <div class="f_content">
                <div class="f_quarter"><h2>Unibella</h2></div>
                <div class="f_quarter between">
                    <ul>
                        <li><a href="">品牌介紹</a></li>
                        <li><a href="">產品</a></li>
                        <li><a href="">最新消息</a></li>
                        <li><a href="">顧客服務</a></li>
                    </ul>
                    <ul>
                        <li><a href="">會員中心</a></li>
                        <li><a href="">聯絡我們</a></li>
                        <li><a href="">相關連結</a></li>
                        <li><a href="">Q&amp;A</a></li>
                    </ul>
                </div>
                <div class="f_quarter">
                    <div>
                        <p>社群</p>
                        <a href="" class="aicon fb"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="aicon"><i class="fab fa-instagram"></i></a>
                        <a href="" class="aicon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="f_quarter border_none">
                    <div>
                        <p>取得最新消息</p>
                        <div class="mail">
                            <input type="text" name="" class="einput">
                            <a href="" class="eput"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="foot">COPYRIGHT &COPY; Unibella ALL RIGHTS RESERVED</div>
        </footer>   
    <script src="http://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script>
    $(".hamburger").click(function(){
            $("nav").removeClass("navhide");
    });
    $(".close").click(function(){
            $("nav").addClass("navhide");
    });
    /*nav滑下消失*/
    var scrollLast;
    $(window).scroll(function(){
    var scrollNow=$(this).scrollTop();
    // console.log(scrollNow);
        if(scrollNow<=240){
        $("header").removeClass("hideHeader");
        }else{
        if(scrollNow>scrollLast){
            $("header").addClass("hideHeader");

        }else{
            $("header").removeClass("hideHeader");
        };
        };            
        scrollLast=scrollNow;
    });
    /*to top*/
    $(".toTop").click(function(){
        $("html,body").animate({
            scrollTop:0
        },1000);
    });

   
    

    
    </script> 
</body>
</html>