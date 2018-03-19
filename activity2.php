<?php require __DIR__. '/_db_connect.php'; ?>
<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            height: auto ;
        }
        header a{
            background-color: #666 ;
        }
        /*Container-------------------------------------------------------------------*/
        /*section1---------------------------------*/
        .section1_y{
            background:url("images/activity2_bg.jpg");
            background-repeat: no-repeat;
            background-position: center center;;
            background-size:cover;
            width:100vw;
            height:100vh;
            position:relative;
        }
        .text1_y{
            position:absolute;
            top:40%;
            left:53%;
            margin-left:-300px;
            margin-top:-78px; 
            color:#fff;
        }
        .bigLogo_y{
            -webkit-mask-image: url(images/logo_new.svg) ;
            -webkit-mask-repeat: no-repeat ;
            -webkit-mask-position: center ;
            background-color:#fff;
            width:526px;
            height:156px;   
        }
        .title_y{
            font-size:36px;
            margin: 20px 0 0 -58px;
            letter-spacing:10px;
        }
        .titleP_y{
            font-size:18px;
            margin: 0 0 0 90px;
        }
       
        .umbrellaR_y{
            width:285px;
            height:285px;
            position:absolute;
            top:60%;
            /* display:flex;
            align-items:center;
            justify-content:center;*/
        } 
        .umbrella1_y{
            position:absolute;
            top:-55%;
            left:30%;
            z-index:1;
            filter: drop-shadow(3px 0 15px rgba(0, 0, 0, .3)) ;
            animation:rotate 3s infinite alternate ease-out;       
        }
        @keyframes rotate{
            0%{
                transform:rotate(0);
            }
            100%{
                transform:rotate(360deg);
            }
        }
        .umbrella2_y{
            position:absolute;
            top:10%;
            left:335%;
            z-index:1;
            filter: drop-shadow(3px 0 15px rgba(0, 0, 0, .3)) ;
            animation:rotate 3.5s linear infinite ;
        }
        .umbrella3_y{
            position:absolute;
            top:-170%;
            left:355%;
            z-index:1;
            filter: drop-shadow(3px 0 15px rgba(0, 0, 0, .3)) ;
            animation:rotate 4s infinite;
        }
        .umbrellaF_y{
            width:285px;
            height:285px;
            /* position:absolute; */
            display:flex;
            align-items:center;
            justify-content:center;
        }
        /*section2---------------------------------*/ 
        .section2_y{
            background:url("images/activity2_bg2.jpg")no-repeat center center;
            background-size:cover;
            width:100vw;
            height:100vh;
            position:relative;     
        }
        .main_y{
            text-align:center;
            padding:85px 0;
        }
        .mainTxt_y{
            font-size:18px;
        }
        /*Popular-----------------------*/
        .popular{
            display: flex ;
            flex-wrap: wrap ;
            justify-content: center ;
            padding:70px 0;
        }
        .popular h4{
            font-size: 24px ;
            font-weight: bold ;
            color: #666 ;
            align-self: baseline ;
        }
        .cards{
            display: flex ;
            justify-content: center ;
            min-width: 100% ;
            margin-top: 10px ;
        }
        .popular .card{
            max-width: 400px ;
            height: auto ;
            display: inline-block ;
            margin: 0 2% ;
            color: #000 ;
            cursor: pointer ;
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
            filter: drop-shadow(0 0 8px #0000004d) ;
        }
        /* .product:before{
            position: absolute ;
            top: 5% ;
            left: 11% ;
            content: "" ;
            width: 75% ;
            padding-bottom: 75% ;
            border-radius: 50% ;
            background: #F8CF4E ;
            z-index: -1 ;
        } */
        .card .name{
            color: #808080 ;
            text-align: center ;
            /* width: 76px ; */
            margin: 20px auto ;
            line-height: 24px ;
            position: relative ;
        }
        .card .name:before{ 
            position :absolute ;
            content: "" ;
            width: 80px ;
            height: 100% ;
            margin: 0 auto ;
            left: 50% ;
            margin-left: -40px ;
            border-bottom: 1px solid #808080 ;
        }
        .card .price{
            font-size: 18px ;
            font-weight: bold ;
        }
        .popularTxt_y{
            /* position:absolute; */
            text-align:center;
            /* margin:0 auto; */
        }
    </style>
    <style>
        @import url("css/activity2_phone.css");
    </style>
<?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <section class="section1_y">
            <div class="text1_y">
                <div class="bigLogo_y"></div>
                <h2 class="title_y">Unibella新色陽傘<span>「傘」</span>亮登場</h2>
                <br>
                <p class="titleP_y">人生會有雨天和晴天，但總會雨過天晴</p>
            </div>
            <div class="umbrellaR_y">
                <img class="umbrella1_y" src="images/detail/PCF003_2.png" alt="">
                <img class="umbrella2_y" src="images/detail/PCF001_2.png" alt="">
                <img class="umbrella3_y" src="images/detail/PNS002_2.png" alt="">
            </div>
        </section>
        <section class="section2_y">
            <div class="main_y">
                <P class="mainTxt_y">專克強風暴雨的傘為您撐腰&nbsp;X&nbsp;專攻烈陽的傘為您撐起防護罩</P> 
                <br>
                <p class="mainTxt_y">延長傘的使用壽命，讓它能永久陪伴您</p>
                <div class="popular">
                    <div class="cards">
                        <div class="card" data-sid="158">
                            <div class="product">
                                <img src="images/detail/PCF003_2.png" alt="">
                            </div>
                            <p class="name">命定洛可可</p>
                            <p class="price">NT. 2270</p>
                        </div>
                        <div class="card" data-sid="156">
                            <div class="product">
                                <img src="images/detail/PCF001_2.png" alt="">
                            </div>
                            <p class="name">寧靜的綻放</p>
                            <p class="price">NT. 2270</p>
                        </div>
                        <div class="card" data-sid="147">
                            <div class="product">
                                <img src="images/detail/PNS002_2.png" alt="">
                            </div>
                            <p class="name">哥本哈根的海</p>
                            <p class="price">NT. 1620</p>
                        </div> 
                    </div>
                </div>
                    <!-- <p class="popularTxt_y">
                        遮陽傘的傘布本身就有防紫外線的作用，相對於晴雨傘的傘布內側是防曬膠層，
                        <br>經過高溫曝曬會漸漸被破壞而剝落，所以它的防曬效果要弱於遮陽傘。
                        
                    </p>  -->
            </div>         
        </section>
    </div>    
    <?php //include __DIR__.'/module_footer.php' ?>
    <script>
        /*hideNav*/
        var scrolllast;
        $(window).scroll(function(){
            var scrollNow=$(this).scrollTop();
            console.log(scrollNow);
            if (scrollNow < 150) {
                $("header").removeClass("hide black");
                $(".right_bottom").addClass("right_bottom_active");
            } else {
                if (scrollNow > scrolllast) {
                    $("header").addClass("hide black");
                } else {
                    $("header").removeClass("hide");
                }
            }
            scrolllast=scrollNow;
        });
        /*to product*/
        $(".card").click(function(){
            var sid=$(this).data("sid");
            console.log(sid);
            location.href="product_detail.php?sid="+sid;
        });
    </script>
<?php include __DIR__.'/module_foot.php' ?>