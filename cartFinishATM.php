<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    if(!isset($_SESSION['user'])){
        header('Location: home.php');
        exit;
    }
    if(!isset($_SESSION['cart'])){
        header('Location: product_list3.php');
        exit;
    }

    $user_id=$_SESSION['user']['id'];
    $total_amount=0;
    $keys=array_keys($_SESSION['cart']);
    $sql=sprintf("SELECT * FROM `products` WHERE `sid` IN (%s)",implode(',',$keys));
    $result=$mysqli->query($sql);
    $cartdata=[];
    while($row=$result->fetch_assoc()){
        $row['qty']=$_SESSION['cart'][$row['sid']];
        $cartdata[$row['sid']]=$row;
        // $total_amount+=$row['qty'] * $row['price'];
    }
    $total_amount=$_SESSION['totalPrice'][1];

    $osql="INSERT INTO `orders`(`member_sid`, `amount`, `order_date`) VALUES (?, ?, NOW())";
    $stmt=$mysqli->prepare($osql);
    $stmt->bind_param('ii',$user_id,$total_amount);
    $stmt->execute();

    $oder_sid=$stmt->insert_id;     //order primary key
    $stmt->close();

    $d_sql="INSERT INTO `order_details`(`order_sid`, `product_sid`, `price`, `quantity`) VALUES (?, ?, ?, ?)";
    $d_stmt=$mysqli->prepare($d_sql);

    foreach($keys as $p_sid){       //每筆訂單的商品項目
        $d_stmt->bind_param('iiii',
            $oder_sid,
            $p_sid,
            $cartdata[$p_sid]['price'],
            $cartdata[$p_sid]['qty']
        );
        $d_stmt->execute();
        // echo $p_sid;
    }
    $d_stmt->close();
    // print_r(implode(',',$keys));
    unset($_SESSION['cart']);
    unset($_SESSION['totalQty']); unset($_SESSION['totalPrice']);        //清除購物車內容

?>
<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            height: auto ;
        }
        /*Container-------------------------------------------------------------------*/
        .headerBg_f{
            width: 100% ; 
            display: flex;
            align-items: center;
            object-fit: fill;
            position: relative;
        }
        .headerBg_f img{
            width: 100%;
        }
        .headerBg_f p{
            font-size: 30px;
            font-weight: bold;
            color:#fff;
            position: absolute;
            right: 13%;
            letter-spacing: 5px;
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
        /*table------------------------------------------------------*/
        table {
            width: 60%;
            max-width: 60%;
            margin: 0 auto;
            margin-top: 30px;
            border-collapse: collapse;
        }
        table thead tr th {
            background: #666;
            color: #fff;
            padding: 6px 0;
            border: 1px solid #666;
        }
        table tbody tr td {
            color: #666;
            height: 150px;
            border: 1px solid #666;
            line-height: 36px;
        }
        table tbody tr td p{
            width: 23%;
            max-width: 23%;
            margin: 0 auto;
        }
        /*thanks--------------------------------------------------*/
        .thanks_f{
            background-color: #f8d360;
            border: #1F5572 5px solid;
            width: 60%;
            max-width: 60%;
            margin: 50px auto ;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 380px;
            
        }
        .thanks_f img{
            width: 125px;
            height: 125px;
        }
        .thanks_f p{
            font-size: 48px;
            color: #1F5572;
            font-weight: bold;
            padding: 0 50px;
        }
        /*button-------------------------------------------------*/
        .btn_a {
            display: flex;
            justify-content: center;
            position: relative;
            margin-bottom: 5%;
            text-align:center;
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
        @import url("css/cartFinishATM_phone.css");
    </style>
<?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <div class="headerBg_f">
            <img src="images/banner_CART.jpg" alt="">
            <p>Be Your Unique Unbrella.</p>
        </div>
        <section class="credit_f">
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
            <table>
                <thead>
                    <tr>
                        <th>ATM轉帳資訊</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td > 
                            <p>
                                銀行  玉山銀行 <br>
                                銀行代號  808 <br>
                                帳戶  01000230156874
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="thanks_f">
                <img src="images/cart_check.svg" alt="">
                <p>感謝您的購買</p>
            </div>
            
        </section>
        <div class="btn_a">
                <a class="shop_a">回首頁</a>
                <a class="buy_a">回商品頁</a>
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
         /*to top*/
         $(".toTop").click(function(){
            $("html,body").animate({
                scrollTop:0
            },1000);
        });
    </script>
<?php include __DIR__.'/module_foot.php' ?>