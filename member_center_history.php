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

    // $o_sql="SELECT * FROM `orders` WHERE `member_sid`={$_SESSION['user']['id']} AND order_date > '$t' ORDER BY `order_date` DESC";
    // $o_result=$mysqli->query($o_sql);

    // $o_data=[];
    // $o_keys=[];
    // while($r=$o_result->fetch_assoc()){
    //     $o_data[]=$r;
    //     $o_keys[]=$r['sid'];
    // }
    // $d_sql=sprintf("SELECT `order_details`.*, `products`.`umbrellaname`, `products`.`umbrella_id`, `products`.`price` 
    //                 FROM `order_details` JOIN `products` ON `order_details`.product_sid=`products`.sid WHERE `order_details`.`order_sid` in (%s)", implode(',', $o_keys));
    // $d_result=$mysqli->query($d_sql);
    // $data=array();
    // while($row=$d_result->fetch_assoc()){
    //     $data[]=$row;
    // }
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
            border-bottom: 1px solid #1F5572;
        }
        .tablePhone_a {
            display:none;
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
                <pre><?php /*print_r($history);*/ ?> </pre>
                
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
                            <td><?= $data['order_date'] ?></td>
                            <td class="history_pic_f"><img src="images/detail/<?= $data['umbrella_id'] ?>_1.png" alt=""></td>
                            <td><?= $data['umbrellaname'] ?></td>
                            <td><?= $data['quantity'] ?></td>
                            <td>NT$.<?= $data['price'] ?></td>
                            <td>NT$.<?= $data['price']*$data['quantity'] ?></td>
                            <td>出貨中</td>
                            <td><a href="">取消訂單</a></td>
                        </tr>
                <?php endforeach; ?>
                        <tr class="total_y">
                            <td colspan="5"></td>
                            <td colspan="3">總金額 :<?= $value['amount'] ?> </td>
                        </tr>
                    </tbody>
                </table>
        <?php endforeach; ?>
   <?php /*             <table class="table_history_y">
                    <caption>訂單編號:20180102</caption>
                    <thead class="thead-dark_a">
                        <tr>
                            <th scope="col">日期</th>
                            <th scope="col">商品圖片</th>
                            <th scope="col">商品名稱</th>
                            <th scope="col">數量</th>
                            <th scope="col">單價</th>
                            <th scope="col">小計</th>
                            <th scope="col">狀態</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="buyList_y">
                            <td>2018/01/16</td>
                            <td class="history_pic_f"><img src="images/Parasoltranslucent-skyblue-umbrella_800.png" alt=""></td>
                            <td>我是商品</td>
                            <td>3</td>
                            <td>NT$.1200</td>
                            <td>NT$.3600</td>
                            <td>已取貨</td>
                        </tr>
                        <tr class="total_y">
                            <td colspan="5"></td>
                            <td colspan="2">總金額 : </td>
                        </tr>
                    </tbody>
                </table>
                <table class="tablePhone_a">
                    <caption>訂單編號:20180215</caption>
                    <thead class="thead-dark_a">
                        <tr>
                        <th scope="col">日期</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="phoneListDate_y">
                        <td>2018/02/15</td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark_a">
                        <tr>
                        <th scope="col">商品圖片</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="phoneList_y">
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
                            <td><p>狀態<span>出貨中</span></p></td>
                        </tr>
                        <tr class="producCotent_a  producCotentL_a">
                            <td><a href="">取消訂單</a></td>
                        </tr>
                    </tbody>
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
                            <td><p>狀態<span>出貨中</span></p></td>
                        </tr>
                        <tr class="producCotent_a  producCotentL_a">
                            <td><a href="">取消訂單</a></td>
                        </tr>
                        <tr class="total_y">
                            <td><p>總金額 : <span></span></p></td>
                        </tr>
                    </tbody>
                 </table>
                 <table class="tablePhone_a">
                    <caption>訂單編號:20180116</caption>
                    <thead class="thead-dark_a">
                        <tr>
                        <th scope="col">日期</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="phoneListDate_y">
                        <td>2018/02/15</td>
                        </tr>
                    </tbody>
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
                            <td><p>狀態<span>已取貨</span></p></td>
                        </tr>
                        <tr class="total_y">
                            <td><p>總金額 : <span></span></p></td>
                        </tr>
                    </tbody>
                </table> */?>
                
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
        /*手機375_memberList*/
        $(".l_p_ul_y").hide();
        $(".fa-angle-down").click(function () {
            $(".fa-angle-down").toggleClass("rotate");
            $(".l_p_ul_y").slideToggle();
        });

    </script>
<?php include __DIR__.'/module_foot.php' ?>