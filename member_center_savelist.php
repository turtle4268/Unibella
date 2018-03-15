<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    if(!isset($_SESSION['user'])){
        header('Location:member_login.php');
        exit;
    }
    $user=$_SESSION['user']['id'];
    $sql="SELECT * FROM `loves` l JOIN `products` p ON p.sid=l.product_sid WHERE `member_sid`={$_SESSION['user']['id']} ORDER BY `create_at` DESC";
    $result=$mysqli->query($sql);

    $loves=array();
    while($row=$result->fetch_assoc()){
        $loves[]=$row;
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
        .l_aside_y ul .save_f{ /*f加 顯示目前頁面li的顏色*/
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
        /*table--------------------------------------------*/
        table {
            width: 85%;
            max-width: 85%;
            margin:  0 auto;
            border-collapse: collapse;
        }
        table thead{
            background: #666;
            color: white;
        }
        table thead th{
            padding: 6px 0;
            border: 1px solid #666;
            border-right: 1px solid #fff;
        }
        tbody tr td {
            text-align: center;
            border: 1px solid #666;
            color: #666;
        }
        tbody tr .save_pic_f {
            width: 300px;
            height: 300px;
            overflow: hidden;
        }
        tbody tr .save_pic_f img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        tbody tr td i.far {
            font-size: 20px;
        }
        div.tablePhone_a {
            display:none;
        }
        /*tbody button樣式修改*/
        tbody button {
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            background: #FFF;
            cursor: pointer;
        }
        tbody .addcart_f{
            color: #1F5572;
            border-bottom: 1px solid #1F5572;
        }
        tbody .delete_f{
            color:#666;
        }
        /*下方按鈕------------*/
        .btn_a {
            display: flex;
            justify-content: center;
            position: relative;
            margin : 5% 0;
        }
        .shop_a{
            margin:15px 45px;
            border-radius: 28px;
            padding:10px 40px;
            border: 2px solid #302f3a;
            background: transparent;
            color:  #302f3a;
            font-size: 1rem;
            position: relative;
        }
        .buy_a{
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
        @import url("css/member_center_savelist_phone.css");
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
                <h2>收藏列表</h2>
                <table class="tableSave_y">
                    <thead>
                        <tr>
                            <th>商品圖片</th>
                            <th>商品名稱</th>
                            <th>單價</th>
                            <th>加入購物車</th>
                            <th style="border-right:1px solid #666;">刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php foreach($loves as $value): ?>
                        <tr class="card" data-sid="<?= $value['product_sid'] ?>">
                            <td class="save_pic_f"><img src="images/detail/<?= $value['umbrella_id'] ?>_1.png" alt=""></td>
                            <td><?= $value['umbrellaname'] ?></td>
                            <td>NT$.<?= $value['price'] ?></td>
                            <td><button class="addcart_f">加入購物車</button></td>
                            <td><button class="delete_f"><i class="far fa-trash-alt"></i></button></td>
                        </tr>
                <?php endforeach; ?>
                    </tbody>
                    <table class="tablePhone_a">
                <?php foreach($loves as $value): ?>
                    <div class="tablePhone_a card" data-sid="<?= $value['product_sid'] ?>">
                        <div class="listTitle_a">商品圖片</div>
                        <div class="listImg_a"><img src="images/detail/<?= $value['umbrella_id'] ?>_1.png" alt=""></div>
                        <div class="listContent_a">
                            <p>商品名稱<span class="listProduct_a"><?= $value['umbrellaname'] ?></span></p>
                            <p>單價<span class="listCS_a price">NT$.<?= $value['price'] ?></span></p>
                            <p>加入購物車<span class="listCS_a"></span></p>
                            <p>刪除<span class="listCS_a"><i class="far fa-trash-alt delet"></i></span></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                     
                 </table>
                </table> 
                <div class="btn_a">
                    <button class="shop_a">繼續購物</button>
                    <button class="buy_a">前往購物車</button>
                </div> 
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