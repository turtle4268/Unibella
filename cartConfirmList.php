<?php require __DIR__. '/_db_connect.php'; ?>
<?php include __DIR__.'/module_head.php' ?>
    <style>
    section{
        height: auto ;
    }
    /*container-------------------------------------------------------------*/
    #container {
        width: 100%;  
        /* height: 180vh;    */
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
    .btn_a a {
        margin:15px 45px;
        border-radius: 28px;
        padding:10px 40px;
        border: 2px solid #302f3a;
        background: transparent;
        color:  #302f3a;
        font-size: 1rem;
        position: relative;
        cursor:pointer;
    }
    .btn_a a:hover {
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
    .btn_a a:hover::before {
        top: 0;
        left: 0;
    }
    .btn_a a:active {
        transform: translateY(3px);
    }
    .btn_a a:focus {
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
        @import url("css/cartConfirmList_phone.css");
    </style>
    <?php include __DIR__.'/module_nav.php' ?>
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
    </section>
    <div class="btn_a">
        <a class="shop_a">繼續購物</a>
        <a class="buy_a">回首頁</a>
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
    /*to top*/
    $(".toTop").click(function(){
        $("html,body").animate({
            scrollTop:0
        },1000);
    });

   
    

    
    </script> 
<?php include __DIR__.'/module_foot.php' ?>