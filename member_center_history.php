<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    if(!isset($_SESSION['user'])){
        header('Location:member_login.php');
        exit;
    }
    $t=date("Y-m-d H:i:s",time()-60*60*24*7);
    $t2=date("Y-m-d H:i:s",time()-60*60*24*30);
    $t2=date("Y-m-d H:i:s",time()-60*60*24*90);
    $t2=date("Y-m-d H:i:s",time()-60*60*24*180);

  
    $user=$_SESSION['user']['id'];
    $sql = "SELECT
        o.*,
        d.`product_sid`,
        d.`price`,
        d.`quantity`,
        p.`umbrellaname`,
        p.`umbrella_id`

        FROM `orders` o
        JOIN `order_details` d
            ON o.sid=d.order_sid
        JOIN `products` p
            ON p.sid=d.product_sid
        WHERE o.order_date>'$t' AND o.`member_sid`= $user ORDER BY order_date DESC";

        $oresult=$mysqli->query($sql);
        $history=array();
        while($row=$oresult->fetch_assoc()){
            if(! isset($history[$row['sid']])) {
                $history[$row['sid']] = array(
                        'sid' => $row['sid'],
                        'amount' => $row['amount'],
                        'order_date' => $row['order_date'],
                        'data' => array()
                );
            }
            $history[$row['sid']]['data'][] = $row;
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
        .l_aside_y ul .history_f{ /*f加 顯示目前頁面li的顏色*/
            background: #e6e6e6;
        }
        .fa-angle-down{
            display: none;
        }
        .l_p_ul_y{
            display:none;
        }
        /*main_y-------------------------------------*/
        .main_y{
            text-align: center;
            position: relative;/*f改*/
        }
        .main_y h2{
            margin: 50px auto;
            font-weight: bold;
            color: #666;
        }
        /*radio---------------------------*/
        .dateRange_y ul{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dateRange_y ul li{
            padding: 10px 30px 0 30px;
            color: #666;/*f改*/
        }
        /* input[type="radio"]{
        visibility: hidden;
        } */
        /*table---------------------------*/
        table caption{
            text-align: left;
        }
        table {
            width: 90%; /*f改*/
            max-width: 90%; /*f改*/
            margin: 100px auto 0;
            border-collapse: collapse;
            color: #666; 
        }
        table thead tr th {
            background: #666;/*f改*/
            color: #fff;
            padding: 6px 0;
            border: 1px solid #666;/*f改*/
            border-right: 1px solid #fff;
        }
        .buyList_y td {
            text-align: center;
            height: 200px;
            border: 1px solid #666;/*f改*/
        }
        .buyList_y .history_pic_f{
            width: 300px;
            height: 300px;
            overflow: hidden;
        }
        .buyList_y .history_pic_f img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .total_y td{
            text-align: center;
            border: 1px solid #666;/*f改*/
            padding: 10px 0;
        }
        tbody a{
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            background: #FFF;
            cursor: pointer;
            color: #1F5572;
            /* border-bottom: 1px solid #1F5572; */
        }
        .tablePhone_a {
            display:none;
        }
        
        /*active_y-------------------------------------*/
        .active_y{
            margin-top: 15%;
            margin-bottom: 10%;
        }
        .active_a {
            width:100%;
            margin: 0 auto;
            /* padding-top: 50px; */
        }
        .active_a ul {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center;   
        }
        .active_a ul li {
            width: 300px;
            height: 300px;
            margin-right: 15px;
            margin-bottom: 15px;
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
            transition: all 1s ease-in-out; 
        }
        .square_a {
            background: #000000;
        }
        .active_a ul li a {
            width: 100%;
            height: 100%;
            display: block;
            z-index: 2;
            
        }
        .active_a ul .square_a img {
            max-width: 100%;
            position: relative;
            opacity: 0.4;
            transition: all .5s ease-in-out; 
        }
        .square_a p {
            font-size: 24px;
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            color: #fff;
            transition: all .5s ease-in-out; 

        }
        .square_a .p2 {
            margin-top:-32px;
            margin-left:-94px;
        }
        .square_a .p4 {
            margin-top:-16px;
            margin-left:-94px;
        }
        .square_a .p6 {
            margin-top:-16px;
            margin-left:-81px;
        }
        .active_a ul .square_a:before {
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
        .active_a ul .square_a:hover:before,
        .active_a ul .square_a.hover:before {
            transform: rotate(110deg) translateY(-150%);
        }
        .active_a ul .square_a:hover img{
            opacity: 1;
            transform: scale(1.1);
        }

        .active_a ul .square_a:hover p,
        .active_a ul .square_a.hover p {
            transform:translate(-160%,0);
        }
        .active_a ul .blue {
            background: #b1aeae;
        }
        .active_a ul .orange {
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
        /*-------toTop--------*//*f加*/
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
        .dateW_y{
            width:135px;
        }
    </style>
    <style>
        @import url("css/member_center_history_phone.css");
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
                <h2>查詢訂購紀錄</h2>
                <div class="dateRange_y">
                    <form action="">
                    <ul>
                        <li class="now_y"><input type="radio" name="radio-btn" value="now" checked="checked"/>&nbsp;最近</li>
                        <li><input type="radio" name="radio-btn" value="one" />&nbsp;一個月內</li>
                        <li><input type="radio" name="radio-btn" value="tree"/>&nbsp;三個月內</li>
                        <li><input type="radio" name="radio-btn" value="six"/>&nbsp;六個月內</li>
                    </ul>
                    </form>
                </div>
    <?php if(empty($history)): ?>
                <p class="pulse_f">您目前尚無訂購紀錄。</p>
                <div class="active_y">
                    <h2>最新活動</h2>
                    <div class="active_a">
                        <ul>
                            <li class="square_a blue">
                                <a href="product_list3.php">
                                    <img class="images" src="images/news_squre2_light.jpg" alt="">
                                    <p class="p2">梅雨季
                                    <br>全館雨傘85折</p>
                                </a>
                            </li>
                            <li>
                                <img src="images/member_square2.jpg" alt="">
                            </li>
                            <li class="square_a orange">
                                <a href="activity2.php">
                                    <img class="images" src="images/news_squre4_light.jpg" alt="">
                                    <p class="p4">陽傘新色上架</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
    <?php else: ?>            
        <?php foreach($history as $value): ?>
                <table class="table_history_y">
                    <caption>訂單編號:<?= $value['sid'] ?></caption>
                    <thead class="thead-dark_a">
                        <tr>
                            <th scope="col">日期</th>
                            <th scope="col">商品圖片</th>
                            <th scope="col">商品名稱</th>
                            <th scope="col">數量</th>
                            <th scope="col">單價</th>
                            <th scope="col">小計</th>
                            <th scope="col">狀態</th>
                            <th class="delect_a" scope="col" style="border-right: 1px solid #666;">取消訂單</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php foreach($value['data'] as $data): ?>
                        <tr class="buyList_y">
                            <td class="dateW_y"><?= $data['order_date'] ?></td>
                            <td class="history_pic_f"><img src="images/detail/<?= $data['umbrella_id'] ?>_1.png" alt=""></td>
                            <td><?= $data['umbrellaname'] ?></td>
                            <td><?= $data['quantity'] ?></td>
                            <td>NT$.<?= $data['price'] ?></td>
                            <td>NT$.<?= $data['price']*$data['quantity'] ?></td>
                            <td>已收到訂單</td>
                            <td><a href="">取消訂單</a></td>
                        </tr>
                <?php endforeach; ?>
                        <tr class="total_y">
                            <td colspan="5"></td>
                            <td colspan="3">總金額 :<?= $value['amount'] ?> </td>
                        </tr>
                    </tbody>
                </table>

                <table class="tablePhone_a">
                    <caption>訂單編號:<?= $value['sid'] ?></caption>
                    <thead class="thead-dark_a">
                        <tr>
                        <th scope="col">日期</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="phoneListDate_y">
                        <td><?= $data['order_date'] ?></td>
                        </tr>
                    </tbody>
                <?php foreach($value['data'] as $data): ?>
                    <thead class="thead-dark_a">
                        <tr>
                        <th scope="col">商品圖片</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="phoneList_y">
                        <td><figure><img src="images/detail/<?= $data['umbrella_id'] ?>_1.png" alt=""></figure></td>
                        </tr>
                        <tr class="producCotent_a">
                        <td><p>商品名稱<span><?= $data['umbrellaname'] ?></span></p></td>
                        </tr>
                        <tr class="producCotent_a producCotentM_a">
                            <td><p>數量<span><?= $data['quantity'] ?></span></p></td>
                        </tr>
                        <tr class="producCotent_a producCotentM_a">
                            <td><p>單價<span>NT$.<?= $data['price'] ?></span></p></td>
                        </tr>
                        <tr class="producCotent_a producCotentM_a">
                            <td><p>小計<span>NT$.<?= $data['price']*$data['quantity'] ?></span></p></td>
                        </tr>
                        <tr class="producCotent_a producCotentM_a">
                            <td><p>狀態<span>已收到訂單</span></p></td>
                        </tr>
                        <tr class="producCotent_a  producCotentL_a">
                            <td class="delect_a"><a href="">取消訂單</a></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
                     
                        <tr class="total_y">
                            <td><p>總金額 : <span><?= $value['amount'] ?></span></p></td>
                        </tr>
                    </tbody>
                 </table>
        <?php endforeach; ?>
    <?php endif; ?>
       
               

                
            </div> <!--main_y-->
        </div> <!--mainBox_y-->
        <div class="toTop"><!--f加-->
            <div class="tr"></div>
            <h5>TOP</h5>
        </div>
    </div> <!--container-->
    <?php include __DIR__.'/module_footer.php' ?>
    <script>
        /*to top*//*f加*/
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
        /*手機375_memberList*/
        $(".l_p_ul_y").hide();
        $(".fa-angle-down").click(function () {
            $(".fa-angle-down").toggleClass("rotate");
            $(".l_p_ul_y").slideToggle();
        });

    </script>
<?php include __DIR__.'/module_foot.php' ?>