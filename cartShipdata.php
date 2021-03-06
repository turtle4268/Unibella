<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    unset($_SESSION['repepole']);
    unset($_SESSION['rephone']);
?>
<?php include __DIR__.'/module_head.php' ?>
    <style>
    section{
        height: auto ;
    }
    @keyframes blob {
        0% {
            transform: scale(0.5);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
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
        text-align: center;
        right: 13%;
        letter-spacing: 5px;
    }
    .hideHeader {
        opacity: 0;
    }
/*Sec1-------------------------------------------------------------*/
    .sec1_a {
        width: 100%;   
        padding-top: 50px;
    }
    .sec1_a h1 {
        text-align: center;
        font-size: 24pt;  
        color:#666;
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
        background:#f8d360;
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
        left: 3px;
        right: 0;
        top: 50%;
        line-height: 0;
        font-size: 18px;
        color: #fff;
        font-weight: bold;
    }
    .total_a {
        padding: 85px;
        border: none;
        margin:0 auto;
        text-align: center; 
        color: #C1272D;
    }
    /*----表格1-------*/
    table {
        width: 55%;
        max-width: 55%;
        margin: 0 auto;
        margin-top: 20px;
        border-collapse: collapse;
        color:#666;
    }
    table thead tr th {
        background:#666666;
        color: #fff;
        padding: 6px 0;
        border: 1px solid #999;
    }
    table tbody tr td {
        border: 1px solid #999;
        position: relative;
    }
    .table_a tbody tr td {
        height: 200px;
    }
    .table_a tbody tr td p span {
       padding: 0 9%;
    }
    .formContent_a {
        width: 100%;
        position: absolute;
        left: 34%;
        top: 30%;
    }
    .formContent2_a {
        width: 100%;
        position: absolute;
        left: 34%;
        top: 56%;
    }
    
    .formSelect_a{
        height: 30px;
    }
    .formText {
        height: 25px;   
    }
    /*----表格2-------*/
    .table2_a {
        margin-top: 0;
    }
    .table2_a tbody tr td {
        height: 50px;
    }
    .table2_a tbody tr .memo-td_a {
        height: 100px;
    }
    .table2_a tbody tr .address-td_a {
        height: 100px;
    }
    .table2_a tbody tr td .address_a {
        height: 30px;
    }
    .table2_a tbody tr td .notice_a  {
        margin-left: 64px;
    }
    .table2_a tbody tr .address-td_a p span {
        margin-left: 0;
    }
    .table2_a tbody tr td p {
        padding-left: 15px;
    }
    .table2_a tbody tr td p * {
        width: 25%;
        margin-left: 20px;
    }
    .table2_a tbody tr td p .memo_a {
        width: 85%;
        height: 80px;
    }
    .table2_a tbody tr td p span {
        padding:0;
    }
    .table2_a tbody tr td .invoiceRadios_a {
        float: left;
    }
    .table2_a tbody tr .invoice-td_a p {
        margin-top: 22px;
        float: left;
    }
    .formRadios_a {
        width: 18px;
        margin: 25px 20px;
    }
    /*----theSame-------*/
    .theSame_a {
        padding:10px 0;
        width:55%;
        margin:10px auto 0 auto;
    }
    .theSame_a label {
        margin-left:5px;
    }
    
    /*----按鈕-------*/
    .btn_a {
        display: flex;
        justify-content: center;
        margin-top: 5%;
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
    .btn_a .goCart_a::before {
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
    .btn_a .next_a::before {
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
        @import url("css/cartShipdata_phone.css");
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
                <span class="step-content_a step1-content_a "><i class="fa fa-check"></i></span> 
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
        <div class="total_a" data-val="">共 <?= $_SESSION['totalQty'] ?> 件，總金額 NT$. <?= $_SESSION['newprice'] ?></div>
        <table class="table_a">
                <thead class="thead-dark_a">
                    <tr>
                        <th scope="col">付款資料</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <p class="formContent_a">付款方式
                            <span>ATM付款</span>
                        </p>
                        <p class="formContent2_a">應付金額
                            <span><?= $_SESSION['newprice'] ?></span>
                        </p>     
                        </td>
                    </tr>
                </tbody>
        </table>
        <div class="theSame_a"><input type="checkbox" class="same"><label for="">同會員資料</label></div>
        <table class="table2_a">
            <thead class="thead-dark_a">
                <tr>
                    <th scope="col">運送資料</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>姓名
                            <input type="text" id="name" value="">
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>手機
                            <input type="text" id="phone" value="">
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="memo-td_a">
                        <p>備註
                            <input type="textarea" class="memo_a">
                        </p>
                    </td>
                </tr>
                    <td class="address-td_a">
                        <p class="address_a">
                            <span>地址</span>
                            <input type="text" id="address" value="">                           
                        </p>
                        <p class="notice_a">注意事項
                        <br>外島、離島地區無宅配服務，將會以郵局包裹或 7-11 到貨方式寄送
                        </p>
                    </td>
                <tr>
                    <td class="invoice-td_a">
                        <p>發票</p>
                        <div class="invoiceRadios_a">
                            <input class="formRadios_a" type="radio" name="Radios" id="Radios1" value="1"><label for="Radios1">捐贈發票</label>
                            <br>
                            <input class="formRadios_a" type="radio" name="Radios" id="Radios2" value="2"><label for="Radios2">電子發票</label>
                            <br>
                            <input class="formRadios_a" type="radio" name="Radios" id="Radios3" value="3"><label for="Radios3">三聯式發票</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <div class="btn_a">
        <a class="goCart_a" href="cartPayShip.php">上一步</a>
        <a class="next_a" >下一步</a>
        
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

    // stepProcess
    /* var stepContent = $(".step-content_a"),
    nexBtn = $(".next_a"),
    goCartBtn = $(".goCart_a");
    var i = 0;
    Next btn click
    $(nexBtn).click(function() {
        if (i < stepContent.length) {
            $(stepContent[i]).addClass("active")
            .html('<i class="fa fa-check" aria-hidden="true"></i>');
            $(goCartBtn).attr('disabled', false);
            i = i + 1;
        } else {
            return false;
        }
    });
    Prev btn click
    $(goCartBtn).click(function() {
        if (i < 1) {
            $(goCartBtn).attr('disabled', 'disabled');
            return false;
        } else {
            i = i - 1;
            if ($(stepContent[i]).hasClass("active")) {
            $(stepContent[i]).removeClass("active");
            }
        }
    });*/
    /*to top*/
    $(".toTop").click(function(){
        $("html,body").animate({
            scrollTop:0
        },1000);
    });
    
    /*同會員資料 */
    $(".same").click(function(){
        if($(this).prop("checked")){  
            $("#name").val("<?= $_SESSION['user']['name'] ?>");
            $("#phone").val("<?= $_SESSION['user']['mobile'] ?>");
            $("#address").val("<?= $_SESSION['user']['address'] ?>");
        }else{
            $("#name").val("");
            $("#phone").val("");
            $("#address").val("");
        }
    });
    /*Next*/
    $(".next_a").click(function(){
        var name=$("#name").val(),
            phone=$("#phone").val(),
            address=$("#address").val(),
            radio=$("input[name='Radios']:checked").val();
        if((name=="") || (phone=="") || (address=="") || (radio==undefined)){
            // alert("請填入收件資料");
            $("#lightbox_f").find("#lightbox-panel_f p").text("請填入收件資料");
            $("#lightbox_f").show();
        }else{
            var repepole=name,
                rephone=phone;
            $.get("add_recipient.php",{repepole:repepole,rephone:rephone},function(data){
                console.log(data);
                location.href="cartConfirmList.php";
            });
            
        }
    });
   
    </script> 
<?php include __DIR__.'/module_foot.php' ?>