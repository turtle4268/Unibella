<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    if(empty($_SESSION['cart'])){
        header("Location:cartList.php");
    }
?>
<?php include __DIR__.'/module_head.php' ?>
    <style>
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
    section{
        height: auto ;
    }
/*container-------------------------------------------------------------*/
    #container {
        width: 100%;  
    }
/*container banner-------------------------------------------------------------*/
    .headerBg_a {
        width: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        /* width: 100% ; 
        display: flex;
         align-items: center;
        object-fit: fill;
        position: relative; */
    }
    .headerBg_a img {
        width: 100%;
        height: 100%;
        object-fit: cover;

    }
    .headerBg_a p {
        /* width: 100%; */
        font-size: 30px;
        font-weight: bold;
        color:#fff;
        position: absolute;
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
        color: #666;
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
    /*----表格-------*/
    
    table {
        width: 55%;
        max-width: 55%;
        margin: 0 auto;
        margin-top: 20px;
        border-collapse: collapse;
        color: #666;
    }
    table thead tr th {
        background:#666666;
        color: #fff;
        padding: 6px 0;
        border: 1px solid #999;
    }
    .delect_a {
        border-right: 1px solid #999;
    }
    table tbody tr td {
        height: 200px;
        border: 1px solid #999;
    }
    .formRadios_a {
        width: 18px;
        height: 17px;
        margin: 25px 20px;
    }
    .formSelect_a{
        height: 30px;
    }
    .formText {
        height: 25px;   
        color: #ccc ;
    }
    /*form2*/
    .table2_a {
        margin-top: 8%;
        position: absolute;
        top: 0;
    }
    .table3_a {
        margin-top: 8%;
        position: absolute;
        top: 0;
    }
    .table2_a tbody tr td p {
        width: 90%;
        margin: 10px auto;

    }
    .table3_a tbody tr td p {
        width: 90%;
        margin: 0 auto;
       
    }
    /*----*/
    .payNotive_a {
        width:55%; 
        margin: 50px auto;
    }
    .seven11_a {
        width:98%; 
        border: 1px solid #999;
        display: none;
    }
    .atm_a {
        width:98%; 
        /* background: #F8CF4E; */
        border: 1px solid #999;
        display: none;
    }
    .seven11_a p, .atm_a p, .visa_a p {
        width: 99%;
        margin: 0 auto;
        color: #666;
    }
    .title_a {
        width: 98%;
        text-align: center;
        border: 1px solid #999;
        background: #666;
        color: #fff;
    }
    .visa_a {
        width:98%; 
        /* background: #F8CF4E; */
        border: 1px solid #999;
        display: none;
    }
    .show {
        display: block;
    }
    /*----選擇付款運送方式-------*/
    .choose-container_a {
        width: 100%;
        text-align: center;
        display: flex;
        justify-content: center;
        margin: 0 auto;
        overflow: hidden;
        color: #666;
    }
    .choose_a {
        width: 120px;
        height: 150px;
    }
    .choose_a .text_a {
        width: 120px;
    }
    .chooseDes_a {
        padding:50px 0;
    }
    /*----按鈕-------*/
    .btn_a {
        display: flex;
        justify-content: center;
        margin-bottom: 5%;
        margin-top: 5%;
        position: relative;
    }
    .btn_a a {
        margin:15px 45px;
        border-radius: 28px;
        padding:10px 30px;
        border: 2px solid #302f3a;
        background: transparent;
        color:  #302f3a;
        font-size: 1rem;
        position: relative;
        cursor:pointer;
    }
    /* .btn_a .goCart_a {
        padding:10px 30px;  
    }
    .btn_a .next_a {
        padding:10px 42px;
    } */
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
        outline: none;
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
        @import url("css/cartPayShip_phone.css");
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
        <div class="total_a" data-val="">共 <?= $_SESSION['totalQty'] ?> 件，總金額 NT$. <?= $_SESSION['totalPrice'] ?></div>
        <table class="table_a">
            <thead class="thead-dark_a">
                <tr>
                    <th scope="col">折扣優惠</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input class="formRadios_a" type="radio" name="Radios" id="Radios1" value="option1" checked="checked">
                        <select name="" class="formSelect_a discount">
                            <option value="0">--</option>
                            <option value="0.15" selected="selected">梅雨季全館85折</option>
                        </select>
                        <br>
                        <input class="formRadios_a" type="radio" name="Radios" id="Radios2" value="option2" disabled="disabled">
                        <input type="text" class="formText" placeholder="請輸入折扣碼"  disabled="disabled">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="choose-container_a">
            <div class="choose_a">
                <div class="chooseDes_a">
                    <span>付款方式</span>
                </div>
                <select name="" id="payWay" class="payWay_a">
                    <option value="0" class="payWayO_a">--</option>
                    <option value="1" class="payWayO_a">ATM</option>
                    <option value="2" class="payWayO_a">信用卡付款</option>
                </select>
            </div>
            <div class="choose_a">
                <div class="chooseDes_a">
                    <span>-</span>
                </div>
            </div>
            <div class="choose_a">
                <div class="chooseDes_a">
                    <span>折抵優惠</span>
                </div>
                <input type="text" class="text_a distext" disabled="disabled">
            </div>
            <div class="choose_a">
                <div class="chooseDes_a">
                    <span>+</span>
                </div>
            </div>
            <div class="choose_a">
                <div class="chooseDes_a">
                    <span>運送方式</span>
                </div>
                <select name="" id="shipWay" class="shipWay_a">
                    <option value="0" selected="">--</option>
                    <option value="70">宅配 70元</option>
                </select>
            </div>
            <div class="choose_a">
                <div class="chooseDes_a">
                    <span>=</span>
                </div>
            </div>
            <div class="choose_a">
                <div class="chooseDes_a">
                    <span>應付金額</span>
                </div>
                <input type="text" class="text_a price" data-price="<?= $_SESSION['totalPrice'] ?>" disabled="disabled">
            </div>
        </div>
    <div class="payNotive_a">
        <div class="title_a">付款注意需知</div>
        <div class="seven11_a">
            <p>如不能100%配合，請勿使用7-11取貨付款喔！
            <br>商品金額【2000元以下】方可使用7-11取貨付款服務，2000元以上請使用【宅急便】的運送方式。	
            <br>
            <br>選擇7-11取貨付款，不需要先匯款，等商品寄出之後，我們會發送mail以及簡訊通知，請自行於指定日期後的7日內到指定門市取貨付款即可。PS.簡訊發送依系統內訂單手機為主，請確認現用手機號碼與註冊號碼是否相同避免漏收簡訊，且勿與電信公司設定"拒收加值簡訊"的服務，否則將無法收到貨到通知簡訊唷！
            <br>
            <br>為了防範少部分慣性不領取包裹的消費者，寄出包裹若遭超商退回，若累積一次未領取包裹者，將直接加入黑名單喔。
            <br>	
            <br>包裹限制大小為長+寬+高三邊總和90公分(含)以下，單邊最長小於(含)30公分，賣場所有靴款、長大衣類、大包包款，皆因體積過大的關係無法使用超商取貨的付款方式，請購買此類款式的買家務必選擇「宅急便」或 「貨到付款／線上刷卡」的方式。若出貨中發現體積超過限制，將保留訂單，並以mail通知，請於三日內回覆，超過期限將直接入庫取消訂單喔！
            <br>
            <br>包裹若因門市管理問題等種種原因遭退回，商品無法順利送達，當門市系統回報此訊息時，客服人員會另外以簡訊或email通知您。
            <br>
            <br>歡迎隨時到「系統的-訂單商品查詢」查詢您目前訂單處理進度。
            <br>
            <br>7-11取貨最低代收款為$50，若使用購物金折抵需注意喔！</p>
        </div>
        <div class="atm_a">
            <p>
            我們會給您一組繳款的虛擬帳號，每筆交易所產生的虛擬帳號均不相同，所以請留意金額務必正確，也請勿重複匯入喔！
            該虛擬帳號以三天為期限，請務必於三天內完成匯款，超過期限該筆訂單與虛擬帳號將自動作廢，若仍須購買只能重新填單喔！
            </p>
         </div>
         <div class="visa_a">
            <p>
            為確保網路交易安全，您了解本公司得就本件交易資料向發卡銀行及持卡人照會是否屬實，核對無誤後付款才算完成。
            提醒您，如有冒用他人信用卡或其他個人資料而為交易者，經查獲必移送法辦。
            </p>
        </div>
        
    </div> 
    </section>
    <div class="btn_a">
        <a class="goCart_a" href="cartList.php">回購物車</a>
        <a class="next_a">下一步</a>
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

        // stepProcess
        // var stepContent = $(".step-content_a"),
        //     nexBtn = $(".next_a"),
        //     goCartBtn = $(".goCart_a");
        // var i = 0;
        // Next btn click
        // $(nexBtn).click(function() {
        //     if (i < stepContent.length) {
        //         $(stepContent[i]).addClass("active")
        //         .html('<i class="fa fa-check" aria-hidden="true"></i>');
        //         $(goCartBtn).attr('disabled', false);
        //         i = i + 1;
        //     } else {
        //         return false;
        //     }
        // });

        /*to top*/
        $(".toTop").click(function(){
            $("html,body").animate({
                scrollTop:0
            },1000);
        });

        //payWay shipWay 
        $( ".payWay_a" ).change(function() {
            console.log($(this).val());
            var payWayVal=$(this).val();
            var shipWayVal=$(" shipWay_a").index();
            if(payWayVal==1){
                $(".atm_a").addClass('show'); 
                $(".visa_a").removeClass('show');
                // $("body").find(".shipWayO_a").eq(1).css("display","block");
            } else if(payWayVal==2){
                $(".visa_a").addClass('show');
                $(".atm_a").removeClass('show');
                // $("body").find(".shipWayO_a").eq(1).css("display","block");
            }else {
                $(".visa_a").removeClass('show');
                $(".seven11_a").removeClass('show');
                $(".atm_a").removeClass('show');
            }
        });
        $("#shipWay").change(function(){
            checkprice();
        });
        /*price*/
        var total=0;
        function checkprice(){
            var price=parseInt($(".price").data("price"));
            var ship=parseInt($("#shipWay").val());
            var discount=parseFloat($(".discount").val());
            discount=price*discount;
            total=price-discount+ship;
            $(".distext").val(discount);
            $(".price").val(total);
            console.log(total);
        }
        checkprice();

        /*hide next*/
        function hidenext(){
            var payway=$("#payWay").val(),shipway=$("#shipWay").val();
            if(payway==0 || shipway==0) {
                $(".next_a").hide();
            }else{
                $(".next_a").show();
            }
        }
        $("select").change(function(){
            hidenext();
        });
        hidenext();
        /*pre page*/
        $(".goCart_a").click(function(){
            
            location.href="cartList.php";
        });
        /*next page */
        $(".next_a").click(function(){
            var nextstep=$("#payWay").val();
            var tqty=<?= $_SESSION['totalQty'] ?>;
            tprice=total;
            console.log(tprice);
            switch (nextstep) {
                case "1":
                    $.get("add_price.php",{tqty:tqty,tprice:tprice},function(data){
                        // console.log(data);
                    });
                    location.href="cartFinishATM.php";
                    break;
                case "2":
                    $.get("add_price.php",{tqty:tqty,tprice:tprice},function(data){
                        // console.log(data);
                    });
                    location.href="cartCredietcard1.php"
                    break;
            
                default:
                    break;
            }
        });

    </script> 
<?php include __DIR__.'/module_foot.php' ?>