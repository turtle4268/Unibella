<?php require __DIR__. '/_db_connect.php'; ?>
<?php 
    if(!isset($_GET['sid'])) {
        header("Location:product_list3.php");
        exit;
    }
    $sid=intval($_GET['sid']);
    // $sid=isset($_GET['sid'])?intval($_GET['sid']):5;

    $sql=sprintf("SELECT * FROM `products` WHERE `sid`=$sid ");
    $result=$mysqli->query($sql);
    $row=$result->fetch_assoc();
    $row['detailA']=nl2br($row['detailA']);
    $row['detailB']=nl2br($row['detailB']);
?>
<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            height: auto ;
        }
        header a{
            background-color: #666;
        }
    /*Container-------------------------------------------------------------------*/
    /*section1---productMain_y-----------------------------------------------------------------------------------*/
        .productMain_y{          
            display: flex;
        	justify-content:center;
			align-items:center; 
            position: relative;
        }
        .productBg_y{
        	width: 100%;
            object-fit: cover;
            /* height: 100vh;
            background:url(images/products_bg.jpg) no-repeat center center;
            background-size: cover; */
        }
        .productBg_y img{
            width:100%;          
        }
        .productBg_phone_y{
            display: none;
        }
        .box_y{
            position: absolute;
            top: 50%;
            background: #fff;
            left: 50%;
            width: 320px;
            height: 320px;
            margin-left: -185px;
            margin-top: -180px;
            border-radius: 50%;
            box-shadow: 0 0 0 0px rgba(31, 85, 114, 0), 0 0 0 0px rgba(255, 255, 255, 0);
        }
        .ripple_y{
            transition: all 1s ease ;
            animation: ripple 1s linear ;
        }
        @keyframes ripple {
            0% {
                box-shadow: 0 0 0 0px rgba(31, 85, 114, 0.09), 0 0 0 0px rgba(255, 255, 255, 0.4);
            }
            100% {
                box-shadow: 0 0 0 250px rgba(216, 216, 216, 0), 0 0 0 100px rgba(255, 255, 255, 0);
            }
        }
        /*productInfor_y---------------------------------------------*/
         .productInforBox_y{
            width: 100%;
            display: flex;
            align-items: center;
	        justify-content: space-between;
            position: absolute;
        }
        .productInfor_y{
            /* flex: ; */
            width: 25%;
            background: #d8d8d8;
            color: #808080;
            padding: 1% 0 2% 5%;
            margin-top: 2%;
            margin-right: 3%;
            text-align: center;
        }
        .productTxt_y{
        	color: #808080;
            font-weight: bold;
            text-align:justify; 
            /* position: absolute;     	 */
            letter-spacing: 8px;
        }
        .productInfor_y p{
            text-align:justify;
            line-height: 1.8em;
            font-weight: bold;
            letter-spacing: 5px;
        }
        /*button--------*/
        .qtyBox_y{
            display: flex;
            align-items: center;
            justify-content: center;    
            margin-top: .5em;     
        }
        .qtyLable_y{
            color: #666;
        }
        .qtySelect_y{
            background-color:#d8d8d8;
            color: #000;
            font-weight:bold; 
            font-size: 16px;
            border: none;
            border-bottom: 1px solid #666;
            width:200px;
            height: 30px; 
            padding: 0 0 0 29%; 
            cursor: pointer;       
        }
        Select:focus{
            outline: none;
        }
        .buyBtn_y{
            display:block;
            width: 260px;
            background-color: #f8cf4e;
            font-size: 20px;
            letter-spacing: 5px;
            color: #fff;
            text-shadow: 0 0 1px #0000005d;
            border: 2px solid #f8cf4e;
            border-radius: 50px;
            padding: 10px 30px;
            margin-top: 1em;
            cursor: pointer;
            filter: drop-shadow(0 0 1px #0000004d) ;
            transition: 0.8s ; 
        }
        .buyBtn_y:hover{
            background-color: #e8b136;
            text-shadow: 0 0 1px #0000004d;
            border: 2px solid #e8b136;
            filter: drop-shadow(0 0 1px #0000004d) ;
        }
        .cartBtn_y{
            display:block;
            width: 260px;
            height: 55px;
            background-color: transparent;
            font-size: 1.5em;
            color: #1f5572;
            border: 2px solid #1f5572;
            border-radius: 50px;
            padding: 10px 30px;
            margin-top: 1em;
            transition: 0.5s ;
        }
        .cartBtn_y:hover{
            background-color: #1f5572;
            color: #f8cf4e;           
            border: 2px solid #1f5572;        
        }
        .blueBtn_y p{
            /* display:block; */
            text-align:center;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 3px;
            float: left;
        }
        .cartBtnPic_y{
            display: block;
            width:25px;
            height: 25px;
            margin: 3px 15px 3px 30px;
            background-color: #1f5572 ;
            -webkit-mask-repeat: no-repeat ;
            -webkit-mask-position: center ;
            transition: 0.5s ;
            float: left;
            -webkit-mask-image: url(images/icon_cart_blue.svg) ;
        }
        .cartBtn_y:hover .cartBtnPic_y{
            background-color: #f8cf4e ;
            -webkit-mask-repeat: no-repeat ;
            -webkit-mask-position: center ;
            transition: 0.5s ;
            animation: rotate .5s infinite ease;
        }
        @keyframes rotate{
            0%{
                transform: rotate(0deg);
            }
            25%{
                transform: rotate(15deg);
            }
            75%{
                transform: rotate(-15deg);
            }
            100%{
                transform: rotate(0deg);
            }
        }
        .addBtn_y{
            display:block;
            width:230px;
            height: 55px;
            background-color: transparent;
            color: #1f5572;
            border: 2px solid #1f5572;
            border-radius: 50px;
            padding: 13px 23px;
            margin-top: 1em;
            cursor: pointer;
            transition: 0.5s ;
        }
        .addBtn_y:hover{
            background-color: #1f5572;
            color: #f8cf4e;           
            border: 2px solid #1f5572;        
        }
        .addBtnPic_y{
            display: block;
            width:25px;
            height: 25px;
            margin: 0 15px 0 23px;
            background-color: #1f5572 ;
            -webkit-mask-repeat: no-repeat ;
            -webkit-mask-position: center ;
            transition: 0.5s ;
            float: left;
            -webkit-mask-image: url(images/icon_heart_blue.svg) ;
        }
        .addBtn_y:hover .addBtnPic_y{
            background-color: #f8cf4e ;
            /* -webkit-mask-repeat: no-repeat ;
            -webkit-mask-position: center ;
            transition: 0.5s ; */
            animation: pulse .5s infinite alternate;
        }
        .addBtn_y.act{
            background-color: #1f5572;
            color: #f8cf4e;           
            border: 2px solid #1f5572;
        }
        .addBtn_y.act .addBtnPic_y{
            background-color: #f8cf4e ;
        }
        @keyframes pulse{
            0%{
                transform: scale(1);
            }
            50%{
                transform: scale(1.2);
            }
            100%{
                transform: scale(1);
            }
        }
        /*hide button*/
        .buyForm2_y{
            display: none;
        }
        /*productSlideBox_y-----------------------------------------*/
        .productSlideBox_y{
            /* flex: ; */
			width: 40%;
			/* background: #000; */
            position: relative;
            /* padding: 3% 5%; */
            margin: 0 5% 2% 0;
            /* display: none; */
		} 
		.productSlide_y{			
            overflow: hidden;
            transition: all .8s;
        }
        .SlidePic_y{
            width:300%;
            display: flex;
            align-items: center;
	        justify-content: center;
            position: relative;
            left:0;
            transition: all .8s; 
           
        }
		.SlidePic_y li{
			list-style: none;
			width: 33.3%;
		}
        .productSlide_y img{
			display: block;
			width: 100%;
			height: 100%;
            object-fit: cover;
            filter:drop-shadow(0 0 5px #0000004d);
        }
        .imgBright{
            transition: all 1s ease ;
            animation: bright 1.3s alternate;
        }
        @keyframes bright{
            0%{
                filter: brightness(100%);
                filter: contrast(1);
                transform: scale(.8);
            }
            50%{
                filter: brightness(150%);
                filter: contrast(1.2);
            }
            100%{
                filter: brightness(100%);
                filter: contrast(1);
                transform: scale(1);
            }
        }
        .slidePage_y{
            /* width: 50%;
            height: 15%; */
			position: absolute;
			/* bottom: 0; */
			left: 50%;
            /* margin-bottom: -15%; */
			margin-left: -15%;
			text-align: center;
            width: 30%;
            margin-top: -20px;
		}
		.slidePage_y li{
			list-style: none;
			display: inline-block;
			width: 15px;
			height: 15px;
			background-color: #1F5572;
            opacity: .5;
			border-radius: 50%;
			margin:5px;
			cursor: pointer;
		}
		.slidePage_y li:hover{
			background: #1F5572;
			opacity: 1;
		}
        .slideArrow_y{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: absolute;
            top:50%;
            /* left: 0;   */            
        }  
        .sa_y{
            display: block;
			width: 4%;
			height: 4%;
            z-index: 1;
            cursor: pointer;
        }
        .slideArrow_left_y{
            animation: arrow_l 1s linear infinite;
            animation-direction: alternate;
        }
        @keyframes arrow_l {
            0% {
                opacity: .5;
                transform: translateX(0px);
            }
            50% {
                opacity: .8;
                transform: translateX(5px);
            }
            100% {
                opacity: 1;
                transform: translateX(8px);
            }
        }
        .slideArrow_right_y{
            animation: arrow_r 1s linear infinite;
            animation-direction: alternate;
        }
        @keyframes arrow_r {
            0% {
                opacity: .5;
                transform: translateX(0px);
            }
            50% {
                opacity: .8;
                transform: translateX(-5px);
            }
            100% {
                opacity: 1;
                transform: translateX(-8px);
            }
        }
        .sa_y img{
            display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
        }
    /*productPrice_y----------------------------------------------*/
        .productPrice_y{
            /* flex: ; */
            width: 25%;
            padding: 2% 0 2% 0;
            background:#d8d8d8;
        }
        .price_y{
            font-size: 30px;
            font-weight: bold;
            color:#1F5572;
        }  
    /*section2---productTag_y------------------------------------------------------------------------------*/
        .productTag_y{
            width: 70%;
            height: 100%;
            margin: 5% auto 0 auto;
        }
        .tagFour_y{
            display: flex;
            align-items: center;
	        justify-content: center;
            text-align: center;
            border-bottom:1px solid #666;
            /* padding-left: 30px; */
        }
        .tagFour_y li{
            font-size: 21px;
            font-weight: bold;
            color: #666;
            padding: 10px 30px;
            border-top: 1px solid #666;
            border-left: 1px solid #666;
            border-right: 1px solid #666;
            border-radius: 15px 15px 0 0;
            list-style: none;
            cursor: pointer;
            transition: 0.5s ;
        }
        /* .tag_last { border-right: 1px solid #333; } */
        .tagFour_y li:hover {
            background-color: #666;
            color: #fff;
            transition: 0.5s ;
        }
        .tagFour_y li.color_y {
            background-color: #666;
            color: #fff;
        }
    /*tagTxtBox_y----------------------------------------------*/
        .tagTxtBox_y{
            width: 80%;
            height: 470px;
            margin: 5% auto;
            overflow: hidden;
        }
        .tagTxt_y{
            width: 100%;
            height: 100%;
            display: flex;
            align-content: center;
            justify-content: center;
            overflow: hidden;
        }
        .tagTxt1_y{
            width: 80%;
            height: 100%;
            display: flex;
            align-content: center;
            justify-content: space-around;
            margin-top:80px;
            
        }
        .detail_y{
            font-size:18px;
            color:#666;
            line-height:36px;
        }
        .sizePic_y{
            flex: 2;
            margin-top:50px;
        }
        .sizeWord_y{
            flex: 1.5;
            margin-top:50px;
        }
        .tagTxt_y img{
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }
        .feature_y{
            width: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
	        justify-content: space-around;
            text-align: center;
            /* padding: 50px 0; */
            margin-top:50px;
        }
        .feature_y li{
            width: 33.3%;
            /* margin: 25px; */
            padding: 25px;
        }
        .feature_y p{
            color: #666;
            /* margin: 25px; */
            padding: 50px 0 50px 10px ;
        }
        .caution_y{
            width: 80%;
            /* height: 50vh ; */
            margin: 0 auto;
        }
        .caution_y h3{
            font-size: 21px;
            font-weight: bold;
            color: #666;
            border-bottom: 1px solid #666;
            text-align: center;
            padding: 10px 0 20px 0;
        }
        .caution_y p{
            width: 90%;
            height: 100%;
            margin: 0 auto;
            line-height: 2.5em;
            color: #666;
            text-align: left;
            padding: 50px 0;
        }
        /*Popular------------------------------------------------------------------------------------------*/
        #popular{
            display: flex ;
            flex-wrap: wrap ;
            justify-content: center ;
            width: 100vw ;
            max-width: 100% ;
            height: 90vh ;      /*y改*/
            text-align: center ;
            overflow: hidden ;
            color: #FFF ;
            padding-top: 5% ;
        }
        .cards{
            display: flex ;
            justify-content: center ;
            min-width: 100% ;
            margin-top: 50px ;
        }
        #popular .card{
            max-width: 400px ;
            height: auto ;
            display: inline-block ;
            margin: 0 2% ;
            color: #000 ;
        }
        .card .product{
            width: 95% ;
            margin: 0 auto ;
            background-size: cover ;
            position: relative ;
            z-index: 2 ;
        }
        .product img{
            transform: rotate(-20deg) ;
            width: 100% ;     /*y改*/
            height: 100% ;     /*y改*/
        }
        .product:before{
            position: absolute ;
            top: 5% ;
            left: 11% ;
            content: "" ;
            width: 75% ;
            padding-bottom: 75% ;
            border-radius: 50% ;
            background: #F8CF4E ;
            z-index: -1 ;
        }
        .card .name{
            color: #808080 ;
            border-bottom: 1px solid #808080 ;
            width: 76px ;
            margin: 20px auto ;
            line-height: 24px ;
        }
        .card .price{
            font-size: 18px ;
            font-weight: bold ;
        }
        /*lineMiddle_y-----------------------*/
        .line_y{
            text-align: center;
            background-color: #fff;
            width: 100%;
            height: 10px;
        }
        .lineMiddle_y:before{
            content: '';
            display: block;
            height: 1px;
            width: 100%;
            background-color: #666;
            top: 10px;/*调节线高*/
            left: 0;
        }
        .lineTxt_y{
            color: #666;
            display: inline-block;
            background: #fff;
            padding: 0 18px 0 18px;
            position: relative;
            top: -13px;
            font-size: 18px;
            font-weight: bold;
        }
        /*toTop-----------------------*/
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
        }
        @keyframes scroll_top {
            0%   { opacity: .2; top: 2px; }
            50%  { opacity: .5; }
            100% { opacity: 1; top: -4px ;}
        }
    </style>
    <style>
        @import url("css/product_detail_phone.css");
    </style>
    <?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <section class="productMain_y"> 
            <div class="box_y"></div>
            <div class="productBg_y">
                <img src="images/products_bg.jpg" alt="product_background">
            </div>
            <div class="productBg_phone_y">
                <div class="box_phone_y"></div>
                <img src="images/products_bg_none.jpg" alt="product_background">
                <div class="b_cloud">
                    <img src="images/all_clouds.png" alt="">
                </div>
            </div>
            <div class="productInforBox_y" data-sid="<?= $row['sid'] ?>">
                <div class="productInfor_y">
                    <h2 class="productTxt_y"><?= $row['umbrellaname'] ?></h2>
                    <br>
                    <p><?= $row['introduction'] ?></p>  
                    <br> 
                    <div class="buyForm1_y">
                        <form>
                            <div class="qtyBox_y">
                                <label for="" class="qtyLable_y">數量</label>
                                <select class="qtySelect_y">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>            
                                </select> 
                            </div> 
                            <br>
                            <a class="buyBtn_y">立即購買</a>
                            <a class="cartBtn_y blueBtn_y">
                                <div class="cartBtnPic_y"></div>
                                <p>加入購物車</p>
                            </a>
                        </form>
                    </div>
                </div>
                <div class="productSlideBox_y">
                    <div class="slideArrow_y">
                        <div class="sa_y slideArrow_left_y">
                          <img src="images/icon_arrow_left.svg" alt="">  
                        </div>
                        <div class="sa_y slideArrow_right_y">
                            <img src="images/icon_arrow_right.svg" alt="">
                        </div>
                    </div>
                    <div class="productSlide_y">
                    <ul class="SlidePic_y">
                        <li class="slidePicLi_y slide1_y"><img src="images/detail/<?= $row['umbrella_id'] ?>_1.png" alt=""></li>
                        <li class="slidePicLi_y slide2_y"><img src="images/detail/<?= $row['umbrella_id'] ?>_2.png" alt=""></li>
                        <li class="slidePicLi_y slide3_y"><img src="images/detail/<?= $row['umbrella_id'] ?>_3.png" alt=""></li>
                    </ul>
                    </div>
                    <ul class="slidePage_y">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>                  
                </div> <!--productSlideBox_y-->
                <div class="productPrice_y">
                    <p class="price_y">NT. <?= $row['price'] ?></p>
                    <br>
                    <a class="addBtn_y blueBtn_y <?= isset($_SESSION['love'][$row['sid']])?'act':'' ?>">
                        <div class="addBtnPic_y"></div>
                        <p><?= isset($_SESSION['love'][$row['sid']])?'已加入收藏':'加入收藏' ?></p>
                    </a>
                    <div class="buyForm2_y">
                        <form action="">
                            <div class="qtyBox_y">
                                <label for="" class="qtyLable_y">數量</label>
                                <select class="qtySelect_y">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <br>
                            <a class="buyBtn_y">立即購買</a>
                            <a class="cartBtn_y blueBtn_y">
                                <div class="cartBtnPic_y"></div>
                                <p>加入購物車</p>
                            </a>
                        </form>
                    </div>
                </div>
            </div> <!--productInforBox_y-->
        </section>
        <section class="productTag_y">
            <div class="tagFourBox_y">
                <ul class="tagFour_y">
                    <li class="tagDetail_y color_y" data-content="tag1">商品明細</li>
                    <li class="tagSize_y" data-content="tag2">商品規格</li>
                    <li class="tagFeature_y" data-content="tag3">商品特色</li>
                    <li class="tagLocal_y" data-content="tag4">定位系統介紹</li>
                </ul>
                <div class="tagTxtBox_y">
                    <div class="tagTxt_y" id="tag1">
                        <div class="tagTxt1_y">
                            <div class="detail_y detailA_y"><?= $row['detailA'] ?></div>
                            <div class="detail_y"><?= $row['detailB'] ?></div>
                        </div>
                    </div>
                    <div class="tagTxt_y" id="tag2">
                            <div class="sizePic_y"><img src="images/size_fold_pic.svg" alt=""></div>
                            <div class="sizeWord_y"><img src="images/size_fold_word.svg" alt=""></div>
                    </div>
                    <div class="tagTxt_y" id="tag3">
                        <ul class="feature_y">
                            <li>
                                <img src="images/icon_location.svg" alt="">
                                <p>傘定位系統</p>
                            </li>
                            <li>
                                <img src="images/icon_location.svg" alt="">
                                <p>傘定位系統</p>
                            <li class="phone_none_y">
                                <img src="images/icon_location.svg" alt="">
                                <p>傘定位系統</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tagTxt_y" id="tag4">
                        <div class="video_y"><img src="images/intro_video.png" alt=""></div>
                    </div>
                </div> <!--tagTxtBox_y-->
                <div class="caution_y">
                    <h3>注意事項</h3>
                    <p>保養說明保養說明，保養說明保養說明保養說明，保養說明保養說明，保養說明，保養說明保養說明，保養說明保養說明，保養說明保養說明保養說明，保養說明保養說明，保養說明，保養說明保養說明，保養說明保養說明，保養說明保養說明保養說明，保養說明保養說明，保養說明，保養說明保養說明，保養說明保養說明，保養說明保養說明保養說明，保養說明保養說明，保養說明，保養說明保養說明，保養說明保養說明，保養說明保養說明保養說明，保養說明保養說明，保養說明，保養說明保養說明，保養說明保養說明保養說明，保養說明保養說明，保養說明保養說明保養說明，保養說明保養說明，保養說明保養說明保養說明，保養說明保養說明，保養說明保養說明保養說明</p>
                </div>
            </div> <!--tagFourBox_y-->
        </section>
        <section id="popular">
            <div class="line_y">
                <div class="lineMiddle_y"><div class="lineTxt_y">你可能會喜歡</div></div>
            </div>
            <!-- <h4>你可能會喜歡</h4> -->
            <div class="cards">
                <div class="card">
                    <div class="product">
                        <img src="images/home_umbrella_b.png" alt="">
                    </div>
                    <p class="name">夏日風情</p>
                    <p class="price">NT. 1980</p>
                </div>
                <div class="card">
                    <div class="product">
                        <img src="images/home_umbrella_b.png" alt="">
                    </div>
                    <p class="name">夏日風情</p>
                    <p class="price">NT. 1980</p>
                </div>
                <div class="card">
                    <div class="product">
                        <img src="images/home_umbrella_b.png" alt="">
                    </div>
                    <p class="name">夏日風情</p>
                    <p class="price">NT. 1980</p>
                </div>
            </div>
            <div class="toTop">
                <div class="tr"></div>
                <h5>TOP</h5>
            </div>
        </section>
    </div>
    <?php include __DIR__.'/module_footer.php' ?>
    <script src="js/animate-one.js"></script>
    <script>
        /*to top*/
        $(".toTop").click(function () {
            $("html,body").animate({
                scrollTop: 0
            }, 1000);
        });
        /*Slider*/
        var nowSlide = 0; 
        $(".slidePage_y li").first().css("opacity", 1);
        $(".SlidePic_y li").first().addClass("imgBright");  
        $(".box_y, .box_phone_y").addClass("ripple_y").one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function(e) {
                $(".box_y, .box_phone_y").removeClass("ripple_y");
            });;
        $(".slidePage_y li").click(function () {
            // console.log($(this).index());
            $(".SlidePic_y img").first().removeClass("imgBright");
            nowSlide = $(this).index();
            moveSlide(nowSlide);                
        });
        function moveSlide(nowSlide) {            
            $(".slidePage_y li").eq(nowSlide).css("opacity", 1).siblings().css("opacity", .5);
            $(".SlidePic_y").css("left", 0 - ($(".slidePage_y li").eq(nowSlide).index() * (300/3))+ "%");
            $(".SlidePic_y li").eq(nowSlide).addClass("imgBright").siblings().removeClass("imgBright");
            // $(".box_y").addClass("ripple_y");
            // $('.box_y, .box_phone_y').removeClass('ripple_y');
            //     setTimeout(function () {
            //         $('.box_y, .box_phone_y').addClass('ripple_y');
            //     }, 1);
            //  $(".box_y, .box_phone_y").addClass("ripple_y");
           $(".box_y, .box_phone_y").addClass("ripple_y").one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function(e) {
                $(".box_y, .box_phone_y").removeClass("ripple_y");
            });
        }
        $(".slideArrow_left_y").click(function () {
            nowSlide = nowSlide - 1; 
            if (nowSlide < 0) {
                nowSlide = 3 - 1; 
            } 
            moveSlide(nowSlide);
            console.log(nowSlide);
        });
        $(".slideArrow_right_y").click(function () {
            nowSlide = nowSlide + 1; 
            if ((nowSlide + 1) > 3) {
                nowSlide = 0; 
            }
            moveSlide(nowSlide);
            console.log(nowSlide);
        });
        /*tags*/
        $(".tagTxt_y").hide();
        $(".tagTxt_y:first").show();
        $(".tagFour_y li").click(function () {

            $(".tagTxt_y").hide();
            var activeTag = $(this).attr("data-content");
            $("#" + activeTag).fadeIn();

            $(".tagFour_y li").removeClass("color_y");
            $(this).addClass("color_y");
        });
        // $('ul.tagFour_y li').last().addClass("tag_last");
        /*hideNav*/
        var scrolllast;
        $(window).scroll(function(){
            var scrollNow=$(this).scrollTop();
            // console.log(scrollNow);
            if (scrollNow < 100) {
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
        /*add to cart*/
        $(".cartBtn_y").click(function(){
            var card=$(this).closest(".productInforBox_y");
            var sid=card.data('sid');
            var form=$(this).closest("form");
            var combo=form.find("select");  
            var qty=combo.val();

            // alert(sid+" : "+qty);

            $.get('add_to_cart.php',{sid:sid,qty:qty},function(data){
                console.log(data);
                alert("商品已加入購物車");
                // countItems(data);
            },"json");
        });
        /*add to love*/
        $(".addBtn_y").click(function(){
            var card=$(this).closest(".productInforBox_y");
            var sid=card.data('sid');
            // alert(sid+" : "+qty);

            $.get('add_to_love.php',{sid:sid},function(data){
                console.log(data);
                alert("商品已加入收藏");
                location.href=location.href;
                // countItems(data);
            },"json");
        });
    </script>
<?php include __DIR__.'/module_foot.php' ?>