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
            left: 50%;
            margin-left: -250px;
            letter-spacing: 5px;
        }

        
        /*parallax-cloud--------------------------------------------*/
        /* .clouds1_f {
            position: absolute;
            left: 50%;
            width: 100%;
            margin-left: -50%;
            top: 50vh;
        }
        .parallax_f {
            position: fixed;
            width: 100%;
        }
        #parallax1_f {
            z-index: 5;
        }
        #parallax2_f {
            z-index: 2
        }
        #parallax3_f {
            z-index: 1;
        }
        #parallax4_f {
            z-index: 3;
        }
        #parallax5_f {
            z-index: 4;
        }
        #parallax6_f {
            z-index: 6;
        }
        .cloud_f {
            position: absolute;
            display: block;
            width: 450px;
            height: 300px;
        }
        .cloud1_f {
            background: url(images/cloud1.png) no-repeat;
            left: -100px;
        }
        .cloud1-2_f {
            left: 600px;
        }
        .cloud2_f {
            background: url(images/cloud2.png) no-repeat;
            left: 200px;
        }
        .cloud2-2_f {
            left: 900px;
        }
        .cloud3_f {
            background: url(images/cloud3.png) no-repeat;
            left: 500px;
        }
        .cloud3-2_f {
            left: 1200px;
        }
        .cloud4_f {
            background: url(images/cloud4.png) no-repeat;
            left: 700px;
        }
        .cloud4-2_f {
            left: 1400px;
        }
        .cloud5_f {
            background: url(images/cloud5.png) no-repeat;
            left: 1000px;
        }
        .cloud5-2_f {
            left: 20px;
        }
        .cloud6_f {
            background: url(images/cloud6.png) no-repeat;
            left: 1300px;
        }
        .cloud6-2_f {
            left: 320px;
        } */
        /*section--------------------------------------------*/
        .fix_a h1 {
            text-align:center;
            padding-top:50px;
        }
        .return_a, .warranty_a {
            width:48%;
            margin:0 auto;
        }
        .warrantyCon_a {
            line-height: 36px;
            text-align: justify;
            padding: 50px 0 60px 0;
        }
        .returnCon_a{
            line-height: 30px;
            text-align: justify;
            padding: 50px 0 60px 0;
        }
        .fixNotice_a {
            padding-left:4%;
        }
        .warranty_a span {
            padding-bottom:20px;
            display:block;
        }
        .fixNotice_a li {
            padding:20px 0 20px 0px;
            list-style:disc;  
        }
        .return_a span {
            padding:10px 0 10px 0;
        }
        .notice_a {
            padding: 50px 0 60px 0;
            width:48%;
            margin:0 auto;
        }
        .notice_a ul {
            padding-left: 4%;
        }
        .notice_a ul li {
            padding:20px 0 20px 0px;
            list-style:disc;   
        }


    </style>
    <style>
        @import url("css/fix_phone.css");
    </style>
<?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <div class="headerBg_f">
            <img src="images/banner_FIX.jpg" alt="">
            <p>Be Your Unique Unbrella.</p>
        </div>
        <section class="fix_a">
            <!-- 飄動的雲 -->
            <!-- <div class="clouds1_f">
                    <div id="parallax1_f" class="parallax_f">
                        <div class="cloud1_f cloud_f"></div>
                        <div class="cloud1_f cloud1-2_f cloud_f"></div>
                    </div>
                    <div id="parallax2_f" class="parallax_f">
                        <div class="cloud2_f cloud_f"></div>
                        <div class="cloud2_f cloud2-2_f cloud_f"></div>
                    </div>
                    <div id="parallax3_f" class="parallax_f">
                        <div class="cloud3_f cloud_f"></div>
                        <div class="cloud3_f cloud3-2_f cloud_f"></div>
                    </div>
                    <div id="parallax4_f" class="parallax_f">
                        <div class="cloud4_f cloud_f"></div>
                        <div class="cloud4_f cloud4-2_f cloud_f"></div>
                    </div>
                    <div id="parallax5_f" class="parallax_f">
                        <div class="cloud5_f cloud_f"></div>
                        <div class="cloud5_f cloud5-2_f cloud_f"></div>
                    </div>
                    <div id="parallax6_f" class="parallax_f">
                        <div class="cloud6_f cloud_f"></div>
                        <div class="cloud6_f cloud6-2_f cloud_f"></div>
                    </div>
            </div> -->
            <h1>保固維修</h1>
            <div class="warranty_a">
                <p class="warrantyCon_a">感謝親愛的客戶購買Unibella的產品，雨傘為生活日常用品(消耗品)，
                因個人使用習慣不同或正常零件的耗損而導致產品的損壞，為了讓消費者了解我們維修保固的標準，
                故提供以下的維修判定以供參考！</p>
                <span>下列情況下，我們無法為您處理維修品，敬請見諒，謝謝！</span>
                <ul class="fixNotice_a">
                    <li>直傘中棒凹折或斷裂，無零件可供更換</li>
                    <li>傘套和傘布破洞、破裂或汙損</li>
                    <li>生產製造超過三年且無相關零件備品時</li>
                    <li>經實際損壞情況判定無法維修時</li>
                    <li>非本公司之產品</li>
                </ul>
            </div>
            <div class="return_a">
                <p class="returnCon_a">    
                    <span>如果您購買的傘有損壞，我們提供以下服務:</span>
                    <br>
                    <br><span>1. 7天內無條件退換貨:</span>
                    <br><span>限虛擬通路，7天內購買可直接退換貨。</span>
                    <br>
                    <br><span>2. 購買超過7天:</span>
                    <br><span>依損壞狀況酌收工本費，您可選擇：</span>
                    <br>
                    <br><span>(1) 將商品連同工本費一同寄到我司(單程運費由買家支付)，</span>
                    <span>維修期間為收到維修品後兩週內，我們修好會直接寄回您的原地址。</span>
                    <br>
                    <br><span>(2) 將維修品拿回原購買處，店家會通知我們收取維修品，並由店家代收工本費，</span>
                    <span>維修期間為我們從店家收到維修品後兩週內，我們修好會送回原店家，</span>
                    <span>並請店家通知您取貨。</span>
                </p>
            </div>
            <h1>注意事項</h1>
            <div class="notice_a">
                <ul>
                    <li>傘布若弄濕請晾乾後再收藏，避免金屬配件生鏽，如此可以延長雨傘使用壽命</li>
                    <li>自傘袋內取出傘體時，輕甩傘體使傘布自然鬆開，以方便開傘動作</li>
                    <li>收傘時請務必順著折痕整理，將傘布折疊整齊，以避免傘布遭傘骨夾壓而導致毀損</li>
                    <li>欲將傘體收回傘套袋時，請逆時針方向輕轉入傘袋內</li>
                </ul>

            </div>    
        </section>


    <?php include __DIR__.'/module_footer.php' ?>
    <script>
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
        var scrollHeaderLast;
        $(window).scroll(function(){
            
            //第一層雲
            var scrollC1 = $(window).scrollTop();
            $(".clouds1_f #parallax1_f").css('top', (50 - (scrollC1 * .45)) + 'vh');
            $(".clouds1_f #parallax2_f").css('top', (50 - (scrollC1 * .35)) + 'vh');
            $(".clouds1_f #parallax3_f").css('top', (50 - (scrollC1 * .3)) + 'vh');
            $(".clouds1_f #parallax4_f").css('top', (50 - (scrollC1 * .25)) + 'vh');
            $(".clouds1_f #parallax5_f").css('top', (50 - (scrollC1 * .5)) + 'vh');
            $(".clouds1_f #parallax6_f").css('top', (50 - (scrollC1 * .4)) + 'vh');
        });

        //svg line
        $('.box1').mouseenter(function(){
      $('.counter1 path').addClass("active");
      $('.outline1 path').addClass("active");
    })

    $('.box1').mouseleave(function(){
      $('.outline1 path').removeClass('active');
      $('.counter1 path').removeClass('active');
    })
    $('.box2').mouseenter(function(){
      $('.counter2 path').addClass("active");
      $('.outline2 path').addClass("active");
    })

    $('.box2').mouseleave(function(){
      $('.outline2 path').removeClass('active');
      $('.counter2 path').removeClass('active');
    })
    $('.box3').mouseenter(function(){
      $('.counter3 path').addClass("active");
      $('.outline3 path').addClass("active");
    })

    $('.box3').mouseleave(function(){
      $('.outline3 path').removeClass('active');
      $('.counter3 path').removeClass('active');
    })
    $('.box4').mouseenter(function(){
      $('.counter4 path').addClass("active");
      $('.outline4 path').addClass("active");
    })

    $('.box4').mouseleave(function(){
      $('.outline4 path').removeClass('active');
      $('.counter4 path').removeClass('active');
    })


    </script>
<?php include __DIR__.'/module_foot.php' ?>