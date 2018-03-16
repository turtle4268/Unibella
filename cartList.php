<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    if(!empty($_SESSION['cart'])){
        $keys=array_keys($_SESSION['cart']);
        $sql=sprintf("SELECT * FROM products WHERE sid IN (%s)",implode(',',$keys));
        $result=$mysqli->query($sql);

        $cartdata=[];
        while($row=$result->fetch_assoc()){
            $row['qty']=$_SESSION['cart'][$row['sid']];
            $cartdata[$row['sid']]=$row;
        }
    }
    unset($_SESSION['totalQty']); unset($_SESSION['totalPrice']); 
?>
<?php include __DIR__.'/module_head.php' ?>
<style>
    section{
        height: auto ;
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
        font-size: 24px;  
        color:#666;
    }
    table {
        width: 60%;
        max-width: 60%;
        margin: 0 auto;
        margin-top: 30px;
        border-collapse: collapse;
        color:#666;
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
    table tbody tr td {
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
    .delet{
        cursor: pointer ;
    }
    div.tablePhone_a {
        display:none;
    }
    .total_a {
        padding: 85px;
        border: none;
        margin:0 auto;
        text-align: center; 
        color: #C1272D; 
    }
    .btn_a {
        display: flex;
        justify-content: center;
        position: relative;
        margin-bottom: 5%;  
    }
    .btn_a a, .btn_a a:link {
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
    .textqtyne{
        display: inline-block ;
        width: 24px ;
        border-bottom: 1px solid #666 ; 
    }
    .changeQty{
        display: inline-block ;
        font-weight: bold ;
        width: 15px ;
        height: 15px ;
        background-color: #666 ;
        position: relative ;
        top: 1px ;
        -webkit-mask-repeat: no-repeat ;
        -webkit-mask-position: center ;
    }
    .minus{
        margin-right: 2px ;
        -webkit-mask-image:url(images/minus.svg);
    }
    .plus{
        margin-left: 2px ;
        -webkit-mask-image:url(images/pluse_2.svg);
    }
    /* -------toTop--------
    .toTop{
        color: #1F5572 ;
        position: relative ;
        top: -15px ;
        margin-left: 94% ;
        margin-bottom: 15px ;
        cursor: pointer ;
        width: 40px ;
        
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
    } */
    /*active-----------------------------------------------------*/
    .active_f {
            width:70%;
            margin: 0 auto;
            padding: 30px 0;
        }
        .active_f ul {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center;   
        }
        .active_f ul li {
            width: 300px;
            height: 300px;
            margin-right: 15px;
            margin-bottom: 15px;
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
            transition: all 1s ease-in-out; 
        }
        .square_f {
            background: #000000;
        }
        .active_f ul li a {
            width: 300px;
            height: 300px;
            display: block;
            z-index: 2;
            
        }
        .active_f ul .square_f img {
            max-width: 100%;
            position: relative;
            opacity: 0.4;
            transition: all .5s ease-in-out; 
        }
        .square_f p {
            font-size: 24px;
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            color: #fff;
            transition: all .5s ease-in-out;
            font-weight: 400; 

        }
        .square_f .p2 {
            margin-top:-32px;
            margin-left:-94px;
        }
        .square_f .p4 {
            margin-top:-16px;
            margin-left:-94px;
        }
        .square_f .p6 {
            margin-top:-16px;
            margin-left:-81px;
        }
        .active_f ul .square_f:before {
            width: 145%;
            height: 145%;
            top: 0;
            left: 0;
            content: '';
            background: #161414;
            position: absolute;
            transition: all 0.3s ease-in-out;
            transform: rotate(110deg) translateY(-31%) translateX(-3.3%);
        }
        /* .active_a ul .square_a.red {
            background: #581a14;
        } */
        .active_f ul .square_f:hover:before,
        .active_f ul .square_f.hover:before {
            transform: rotate(110deg) translateY(-150%);
        }
        .active_f ul .square_f:hover img{
            opacity: 1;
            transform: scale(1.1);
        }

        .active_f ul .square_f:hover p,
        .active_f ul .square_f.hover p {
            transform:translate(-160%,0);
        }
        .active_f ul .blue {
            background: #b1aeae;
        }
        .active_f ul .orange {
            background:#e0a340;
        }
        h6{
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #666;
            margin-top: 50px;
        }
        .pulse_f{
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            width: 50%;
            margin: 0 auto;
            color:#C1272D;
            padding: 100px 0;
            z-index: 2;
            animation: pulse .7s infinite alternate;
        }
        @keyframes pulse{
            0%{
                transform: scale(1);
            }
            100%{
                transform: scale(1.1);
            }
        }
    </style>
    <style>
        @import url("css/cartList_phone.css");
    </style>
<?php include __DIR__.'/module_nav.php' ?>
<div id="container">
    <div class="headerBg_a">
        <img src="images/banner_CART.jpg" alt="">
        <p>Be Your Unique Umbrella.</p>
    </div>
    <section class="sec1_a" >
        <h1>購物車列表</h1>
    <?php if(empty($cartdata)): ?>
        <p class="pulse_f">購物車目前沒有商品</p>
        <h6>最新活動</h6>
            <div class="active_f">
                <ul>
                    <li class="square_f blue" >
                            <img class="images" src="images/news_squre2_light.jpg" alt="">
                            <p class="p2">梅雨季<br>全館雨傘88折</p>
                            <a href=""></a>   
                    </li>
                    <li class="small_pic_f"><img src="images/member_square2.jpg" alt=""></li>
                    <li class="square_f orange">
                            <img class="images" src="images/news_squre4_light.jpg" alt="">
                            <p class="p4">自動傘新品上架</p>
                            <a href=""></a>
                    </li>
                </ul>
            </div> 
    <?php else: ?>
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
            <?php foreach($_SESSION['cart'] as $sid =>$qty): ?>
                <tr class="tablePhone_a" data-sid="<?= $sid ?>">
                  <td class="productCom_A"><figure><img src="images/detail/<?= $cartdata[$sid]['umbrella_id'] ?>_1.png" alt=""></figure></td>
                  <td><?= $cartdata[$sid]['umbrellaname'] ?></td>
                  <td>
                      <a class="changeQty minus"></a>
                      <div class="textqty"><?= $qty ?></div>
                      <a class="changeQty plus"></a>
                  </td>
                  <td>NT$.<?= $cartdata[$sid]['price'] ?></td>
                  <td>NT$.<?= $cartdata[$sid]['price']*$qty ?></td>
                  <td></td>
                  <td><i class="far fa-trash-alt delet"></i></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php foreach($_SESSION['cart'] as $sid =>$qty): ?>    
        <div class="tablePhone_a" data-sid="<?= $sid ?>">
            <div class="listTitle_a">商品圖片</div>
            <div class="listImg_a"><img src="images/detail/<?= $cartdata[$sid]['umbrella_id'] ?>_1.png" alt=""></div>
            <div class="listContent_a">
                <p>商品名稱<span class="listProduct_a"><?= $cartdata[$sid]['umbrellaname'] ?></span></p>
                <p>數量
                    <span class="listCS_a qty" data-qty="<?= $qty ?>">
                        <a class="changeQty minus"></a>
                        <div class="textqty"><?= $qty ?></div>
                        <a class="changeQty plus"></a>
                    </span>
                </p>
                <p>單價<span class="listCS_a price" data-price="<?= $cartdata[$sid]['price'] ?>">NT$.<i>0</i></span></p>
                <p>小計<span class="listCS_a subtotal" data-subtotal="<?= $cartdata[$sid]['price']*$qty ?>">NT$.<i>0</i></span></p>
                <p>備註<span class="listCS_a"></span></p>
                <p>刪除<span class="listCS_a"><i class="far fa-trash-alt delet"></i></span></p>
            </div>
        </div>
    <?php endforeach; ?>
        
        <div class="total_a" data-val="">共 <span class="tqty">X</span> 件，總金額 NT$. <span class="tprice">2400</span></div>
<?php endif; ?>
    </section>
<?php if(empty($cartdata)): ?>
    <div class="btn_a">
        <a class="shop_a" href="home.php">回首頁</a>
        <a class="buy_a" href="product_list3.php">回商品頁</a>
    </div>
<?php else: ?>
    <div class="btn_a">
        <a class="shop_a" href="product_list3.php">繼續購物</a>
        <?php if(isset($_SESSION['user'])): ?>
        <a class="buy_a buynext">立即購買</a>
        <?php else: ?>
        <a class="buy_a" href="member_login.php">登入會員</a>
        <?php endif; ?>
    </div>
<?php endif; ?>
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

        /*Count*/
        var totalQty,totalPrice;
        function count(){
            totalQty=0,totalPrice=0;
            $(".qty").each(function(){
                var qty=$(this).data("qty");
                // $(this).text(qty);
                totalQty+=qty;
            });
            $(".price").each(function(){
                var price=$(this).data("price");
                $(this).find("i").text(price);
            });
            $(".subtotal").each(function(){
                var subtotal=$(this).data("subtotal");
                $(this).find("i").text(subtotal);
                totalPrice+=subtotal;
            });
            $(".tqty").text(totalQty);
            $(".tprice").text(totalPrice);
        }
        count();
        /*delet*/
        $(".delet").click(function(){
            var card=$(this).closest(".tablePhone_a");
            var sid=card.data("sid");
            
            $.get("add_to_cart.php",{sid:sid},function(data){
                $(".tablePhone_a").each(function(){
                    countItems(data);
                    if(itemCount.text()==0) location.href=location.href;
                    if($(this).data("sid")==sid) $(this).remove();
                });
                count();
            },'json');
            
        });
        /*add price to session*/
        $(".buynext").click(function(){
            var tqty=totalQty,
                tprice=totalPrice;
            $.get("add_price.php",{tqty:tqty,tprice:tprice},function(data){
                // console.log(data);
                location.href="cartPayShip.php";
            });
        });
    </script> 
<?php include __DIR__.'/module_foot.php' ?>