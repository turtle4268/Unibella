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
        /* body{
            background-color: black;
        } */
        section{
            height: 100vh;
        }
        .clouds1_f {
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
        <section>
            <!-- 飄動的雲 -->
            <div class="clouds1_f">
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
                    </div>
        </section>
    </div>

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
    </script>
<?php include __DIR__.'/module_foot.php' ?>