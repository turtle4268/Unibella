<?php require __DIR__. '/_db_connect.php'; ?>
<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            height: auto ;
        }
        header a{
            background-color: #666;
        }
        /*section1-----------------------------------------------------------*/
        section {
            color: #666;
        }
        .pic1_f {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            object-fit: fill;
            position: relative;
        }
        .pic1_f img {
            width: 100%;
        }
        .pic1_f p {
            color: #666;
            font-weight: 800;
            font-size: 36px;
            position: absolute;
        }
        .word1_f {
            width: 60%;
            ;
            margin: 0 auto;
            transform: translateY(250px);
            opacity: 0;
            transition: all 1.5s;
        }
        .word1_f h3 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            padding-top: 50px;
        }
        .word1_f p {
            line-height: 36px;
            padding: 50px 0 100px 0;
            text-align: justify;
        }
        .scroll_all_f {
            position: absolute;
            top: 85vh;
        }
        .scroll_f {
            display: flex;
            position: absolute;
            bottom: 80px;
            transform: rotate(-90deg);
            align-items: center;
            z-index: 10;
            left: -65px;
        }
        .scroll_f h4 {
            font-size: 16px;
            animation: scroll_word 1s linear infinite;
        }
        .scroll_f .line_f {
            height: 1px;
            width: 70px;
            background-color: #666;
            margin-right: 20px;
        }
        .so_f {
            position: absolute;
            bottom: 100px;
            margin-left: 25px;
        }
        .so_f .s_f {
            width: 12px;
            height: 12px;
            margin: 5px;
            animation: scroll_so .5s linear infinite;
            animation-direction: alternate;
        }
        .so_f .s_1_f {
            -webkit-mask-image: url(images/icon_scroll.svg);
            background-color: rgb(127, 202, 235);
            animation-delay: .1s;
        }
        .so_f .s_2_f {
            -webkit-mask-image: url(images/icon_scroll.svg);
            background-color: #29ABE2;
            animation-delay: .2s;
        }
        .so_f .s_3_f {
            -webkit-mask-image: url(images/icon_scroll.svg);
            background-color: #0071BC;
            animation-delay: .3s;
        }
        @keyframes scroll_word {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
            100% {
                opacity: .3;
                -webkit-transform: translateX(-6px);
                transform: translateX(-6px);
            }
        }
        @keyframes scroll_so {
            0% { opacity: .2; }
            50% { opacity: .5;}
            100% { opacity: 1;}
        }
        .word1_hide_f {
            transform: translateY(0px);
            opacity: 1;
            transition: all 1.2s;
        }
        /* .word1_hide2_f{
            transform: translateY(200px);
            opacity: 0;
			transition: all .5s;
        } */
        /*section1-parallax-cloud--------------------------------------------*/
        .clouds1_f {
            position: absolute;
            left: 50%;
            width: 100%;
            margin-left: -50%;
            top: 80vh;
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
        /*section2_cloud_top-------------------------------------------------*/
        .clouds2_f {
            position: absolute;
            left: 50%;
            width: 100%;
            margin-left: -50%;
            top: 140vh;
        }
        /*section2-----------------------------------------------------------*/
        .pic2_f {
            width: 100%;
            display: flex;
            align-items: center;
            object-fit: fill;
        }
        .pic2_f img {
            display: block;
            width: 100%;
            transition: all 1.2s;
        }
        .pic2_img_active_f {
            opacity: 0;
            transform: translateY(600px);
            transition: all 1.5s;
        }
        .pic2_f p {
            color: white;
            font-weight: 800;
            font-size: 36px;
            position: absolute;
            margin-left: 150px;
            transition: all 1.5s;
        }
        .pic2_p_active_f {
            opacity: 0;
            transform: translateY(-300px);
            transition: all 1.5s;
        }
        .word2_f {
            width: 70%;
            margin: 0 auto;
            padding: 80px 0;
            display: flex;
            justify-content: space-between;
        }
        .word2_f p {
            padding-top: 50px;
            text-align: justify;
        }
        .word2_f ul {
            line-height: 36px;
            margin-left: 20px;
            padding: 30px 0;
        }
        .word2_f li {
            list-style: disc;
        }
        .word2_in_f {
            opacity: 0;
            transform: translateY(350px);
            transition: all 1.5s;
        }
        .word2_in_active_f {
            opacity: 1;
            transform: translateY(0);
            transition: all 1.5s;
        }
        .small_pic_f {
            position: relative;
            top: -30px;

        }
        .small_pic_f img {
            opacity: 0;
            transform: translateY(150px);
            transition: all 1.5s;
        }
        .small_pic_active_f {
            opacity: 1 !important;
            transform: translateY(0px) !important;
            transition: all 1.5s !important;
        }
        .yellow_f {
            width: 183px;
            height: 183px;
            background-color: rgba(255, 222, 82, .5);
            position: absolute;
            bottom: -50px;
            left: -100px;
            z-index: 2;
            opacity: 0;
            transform: scaleY(2.5);
            transform-origin: bottom;
            transition: all 1.5s;
        }
        .yellow_active_f {
            opacity: 1;
            transform: scaleY(1);
            transform-origin: bottom;
            transition: all 1.5s;
        }
        /*section3-----------------------------------------------------------*/
        .pic3_f {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            object-fit: fill;
        }
        .pic3_f img {
            width: 100%;
            display: block;
            transition: all 1.2s;
        }
        .pic3_img_active_f {
            opacity: 0;
            transform: translateY(600px);
            transition: all 1.5s;
        }
        .pic3_f p {
            color: #666;
            font-weight: 800;
            font-size: 36px;
            position: absolute;
            padding-right: 200px;
            transition: all 1.5s;
            overflow: hidden;
        }
        .pic3_p_active_f {
            opacity: 0;
            transform: translateY(-200px);
            transition: all 1.5s;
        }
        /*Clouds3---------------------------------------*/
        .clouds3_f {
            position: absolute;
            left: 50%;
            width: 100%;
            margin-left: -50%;
            top: 140vh;
        }
        /*word3--------------------------------------------*/
        .word3_f {
            width: 60%;
            margin: 0 auto;
            padding: 100px 0;
        }
        .word3_f h6 {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            position: relative;
            z-index: 10;
        }
        .location_f,
        .light_f,
        .wind_f,
        .uv_f {
            display: flex;
            justify-content: space-between;
            padding: 50px 0 30px;
            opacity: 0;
            transition: transform .8s, opacity 1.5s;
            transform: translateY(100px);
        }
        .location_active_f,
        .light_active_f,
        .wind_active_f,
        .uv_active_f {
            opacity: 1;
            transform: translateY(0);
            transition: transform .8s, opacity 1.5s;
        }
        .word3_f img {
            width: 225px;
            height: 225px;
        }
        .article_f {
            padding-top: 25px;
            width: 620px;
            line-height: 30px;
            text-align: justify;
        }
        .word3_f h5 {
            font-size: 18px;
            font-weight: bold;
            padding: 20px 0;
        }
        /*toTop*/
        .toTop{
            color: #1F5572 ;
            position: relative ;
            top: -15px ;
            margin-left: 94% ;
            cursor: pointer ;
            text-align: center ;
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
    @import url("css/introduce_phone.css");
</style>
<?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <section class="pic1_f">
            <img src="images/intro_big1.jpg" alt="">
            <p>Be Your Unique Umbrella.</p>
            <div class="scroll_all_f">
                <div class="scroll_f">
                    <div class="line_f"></div>
                    <h4>Scroll</h4>
                </div>
                <div class="so_f">
                    <div class="s_f s_1_f"></div>
                    <div class="s_f s_2_f"></div>
                    <div class="s_f s_3_f"></div>
                </div>
            </div>
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
        <section class="word1_f">
            <h3>品牌故事</h3>
            <p>我們的產品持久耐用，使用最好的材料精心製作，結合審美與耐久性，對消費者來說完美的現代消費。
                <br>
                <br> 特別強大的雨傘 將功能性能與大都市風格相結合，並通過提供一系列的技術改進，在設計上符合其高審美標準，並經過設計師，工業工程師和其他創意專業人士所挑選， 我們的顧客認為購買一把能夠維持多年的高品質產品比層出不窮的替代產品更好。
                <br>
                <br> 我們的雨傘和功能結合優雅和完美的表現，購買UNIBELLA雨傘是您長期投資的一個選擇，我們的客戶喜歡購買一個可以持續多年的高品質產品勝過一個需要常常更換的低品質產品。
                <br>
                <br> UNIBELLA雨傘設計為極致的耐用性，並使用96個艱苦的步驟精心製作，作為對質量承諾的證明，UNIBELLA以無條件的終身保證為每一把傘提供支持。
            </p>

        </section>
        <section class="pic2_f">
            <img src="images/intro_big2.jpg" alt="">
            <p>Be Your Unique Umbrella.</p>

            <div class="clouds2_f">
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
        <section class="word2_f">
            <div class="word2_in_f">
                <p>U N I B E L L A 指導原則：</p>
                <ul>
                    <li>應用最高的標準，不妥協的品質，耐用性和可靠性。</li>
                    <li>保持對細節和工藝的狂熱關注。</li>
                    <li>保持我們產品設計和生產的持續改進。</li>
                    <li>將我們客戶的反饋作為我們產品開發過程的重要組成部分。</li>
                    <li>努力開發滿意的客戶。</li>
                </ul>
            </div>
            <div class="small_pic_f">
                <div class="yellow_f"></div>
                <img src="images/intro_small_pic.png" alt="" class="">
            </div>
        </section>
        <section class="pic3_f">
            <img src="images/intro_big3.jpg" alt="">
            <p>Be Your Unique Umbrella.</p>
            <div class="clouds3_f">
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
        <section class="word3_f">
            <h6>專業技術</h6>
            <div class="location_f">
                <img src="images/icon_location.svg" alt="">
                <div class="article_f">
                    <h5>定位系統</h5>
                    <p>Unibella智慧雨傘，透過雨傘內部的接收器與手機連線， 當使用者離開雨傘的區域範圍（30/50 公尺）時，手機端會通知您忘記將雨傘帶走。 同時也會記錄最後遺失的位置，讓您不再為遺失傘而煩惱。
                    </p>
                </div>

            </div>
            <div class="light_f">
                <div class="article_f">
                    <h5>極輕</h5>
                    <p>傘骨採用FRP玻璃纖維製作，除了抗風性佳， 更減輕雨傘重量，不論放在背包或拿在手上都不會過度負擔。
                    </p>
                </div>
                <img src="images/icon_light.svg" alt="" class="gototop_f">
            </div>
            <div class="wind_f">
                <img src="images/icon_wind.svg" alt="">
                <div class="article_f">
                    <h5>超強抗風</h5>
                    <p>使用FRP玻璃纖維骨架，具高韌性彈力佳、不易折斷抗風性佳、回覆性佳。 (雨傘工業裡最常見廣泛運用的素材，其中以白色玻璃纖維品質最穩定、耐用性最高)
                    </p>
                </div>
            </div>
            <div class="uv_f">
                <div class="article_f">
                    <h5>專業抗UV</h5>
                    <p>傘面使用高密度防潑水PG傘布，屬於一級防紫外線的傘布， 不易磨損、柔軟舒適、清洗方便、 傘布較厚，防紫外線效果極佳。
                    </p>
                </div>
                <img src="images/icon_UV.svg" alt="" class="gototop_f">
            </div>
        </section>
        <div class="toTop">
            <div class="tr"></div>
            <h5>TOP</h5>
        </div>
    </div>

    <?php include __DIR__.'/module_footer.php' ?>
    <script>
        var scrollHeaderLast;
        $(window).scroll(function () {
            //header
            var scrollHeader = $(this).scrollTop();
            if (scrollHeader < 350) {
                $("header").removeClass("hide black");
                
            } else {
                if (scrollHeader > scrollHeaderLast) {
                    $("header").addClass("hide black");
                } else {
                    $("header").removeClass("hide");
                }
            };
            scrollHeaderLast = scrollHeader;
            //第一層雲
            var scrollC1 = $(window).scrollTop();
            // var topCSS1 = $(".clouds1_f").css('top');
            // console.log(topCSS1);
            $(".clouds1_f #parallax1_f").css('top', (85 - (scrollC1 * .45)) + 'vh');//5
            $(".clouds1_f #parallax2_f").css('top', (85 - (scrollC1 * .35)) + 'vh');//3
            $(".clouds1_f #parallax3_f").css('top', (85 - (scrollC1 * .3)) + 'vh');//2
            $(".clouds1_f #parallax4_f").css('top', (85 - (scrollC1 * .25)) + 'vh');//1 0.05
            $(".clouds1_f #parallax5_f").css('top', (85 - (scrollC1 * .5)) + 'vh');//6
            $(".clouds1_f #parallax6_f").css('top', (85 - (scrollC1 * .4)) + 'vh');//4
            //scroll icon
            var scrollicon = $(this).scrollTop();
            if (scrollicon > 60) {
                $(".scroll_f, .so_f").fadeOut(400);
                $(".scroll_all_f").css('top', (85 - scrollicon * .3) + 'vh');
            } else {
                $(".scroll_f, .so_f").fadeIn(400);
                $(".scroll_all_f").css('top', (85 - scrollicon * .3) + 'vh');
            };

            //品牌介紹文字
            var scrollWord1 = $(this).scrollTop();
            if (scrollWord1 > 350) {
                $(".word1_f").addClass("word1_hide_f");
            } else {
                $(".word1_f").removeClass("word1_hide_f");
            };
            //品牌介紹文字phone
            var WordPhone1 = $(this).scrollTop();
            if (WordPhone1 > 200) {
                $(".word1_f").addClass("word1_phone_hide_f");
            } else {
                $(".word1_f").removeClass("word1_phone_hide_f");
            }

            //水滴圖片
            var scrollPic2 = $(this).scrollTop();
            if (scrollPic2 < 700) {
                $(".pic2_f img").addClass("pic2_img_active_f");
                $(".pic2_f p").addClass("pic2_p_active_f");
            } else {
                $(".pic2_f img").removeClass("pic2_img_active_f");
                setTimeout(function () {
                    $(".pic2_f p").removeClass("pic2_p_active_f");
                }, 600);
            };
            //水滴圖片 phone
            var PhonePic2 = $(this).scrollTop();
            if (PhonePic2 < 1300) {
                $(".pic2_f img").addClass("pic2_img_active_phone_f");
                $(".pic2_f p").addClass("pic2_p_active_phone_f");
            } else {
                $(".pic2_f img").removeClass("pic2_img_active_phone_f");
                setTimeout(function () {
                    $(".pic2_f p").removeClass("pic2_p_active_phone_f");
                }, 600);
            };

            //第二層雲
            var scrollC2 = $(window).scrollTop();
            var mi = scrollC2 - 1000;
            if (scrollC2 > 1000) {
                $(".clouds2_f #parallax1_f").css('top', (140 - mi * .29) + 'vh');//4
                $(".clouds2_f #parallax2_f").css('top', (140 - mi * .26) + 'vh');//3
                $(".clouds2_f #parallax3_f").css('top', (140 - mi * .23) + 'vh');//2 0.05
                $(".clouds2_f #parallax4_f").css('top', (140 - mi * .2) + 'vh');//1 0.007
                $(".clouds2_f #parallax5_f").css('top', (140 - mi * .35) + 'vh');//6
                $(".clouds2_f #parallax6_f").css('top', (140 - mi * .32) + 'vh');//5
            } else {

                $("clouds2_f").css('top', 140 + 'vh');
            };
            //unibella指導原則
            var scrollWord2 = $(this).scrollTop();
            if (scrollWord2 > 1400) {
                $(".word2_in_f").addClass("word2_in_active_f");
                $(".small_pic_f img").addClass("small_pic_active_f");
                $(".yellow_f").addClass("yellow_active_f");
            } else {
                $(".word2_in_f").removeClass("word2_in_active_f");
                $(".small_pic_f img").removeClass("small_pic_active_f");
                $(".yellow_f").removeClass("yellow_active_f");
            };
            var PhoneWord2 = $(this).scrollTop();
            if (PhoneWord2 > 1700) {
                $(".word2_in_f").addClass("word2_in_active_phone_f");
            } else {
                $(".word2_in_f").removeClass("word2_in_active_phone_f");
            };

            //漣漪圖片
            var scrollPic3 = $(this).scrollTop();
            if (scrollPic3 < 1900) {
                $(".pic3_f img").addClass("pic3_img_active_f");
                $(".pic3_f p").addClass("pic3_p_active_f");
            } else {
                $(".pic3_f img").removeClass("pic3_img_active_f");
                $(".pic3_f p").removeClass("pic3_p_active_f");
            };
            var PhonePic3 = $(this).scrollTop();
            if (PhonePic3 < 2200) {
                $(".pic3_f img").addClass("pic3_img_active_phone_f");
                $(".pic3_f p").addClass("pic3_p_active_phone_f");
            } else {
                $(".pic3_f img").removeClass("pic3_img_active_phone_f");
                $(".pic3_f p").removeClass("pic3_p_active_phone_f");
            };

            //第三層雲
            var scrollC3 = $(window).scrollTop();
            var mi2 = scrollC3 - 2100;
            if (scrollC3 > 1000) {
                $(".clouds3_f #parallax1_f").css('top', (140 - mi2 * .29) + 'vh');//4
                $(".clouds3_f #parallax2_f").css('top', (140 - mi2 * .26) + 'vh');//3
                $(".clouds3_f #parallax3_f").css('top', (140 - mi2 * .23) + 'vh');//2 0.05
                $(".clouds3_f #parallax4_f").css('top', (140 - mi2 * .2) + 'vh');//1 0.007
                $(".clouds3_f #parallax5_f").css('top', (140 - mi2 * .35) + 'vh');//6
                $(".clouds3_f #parallax6_f").css('top', (140 - mi2 * .32) + 'vh');//5
            } else {
                $("clouds3_f").css('top', 140 + 'vh');
            };
            //icon們
            var scrollcricle = $(this).scrollTop();
            if (scrollcricle > 2400) {
                $(".location_f").addClass("location_active_f");
                $(".word3_f h6").fadeIn(800);
            } else {
                $(".location_f").removeClass("location_active_f");
                $(".word3_f h6").fadeOut(500);
            };
            if (scrollcricle > 2800) {
                $(".light_f").addClass("light_active_f");
            } else {
                $(".light_f").removeClass("light_active_f");
            };
            if (scrollcricle > 3100) {
                $(".wind_f").addClass("wind_active_f");
            } else {
                $(".wind_f").removeClass("wind_active_f");
            };
            if (scrollcricle > 3400) {
                $(".uv_f").addClass("uv_active_f");
            } else {
                $(".uv_f").removeClass("uv_active_f");
            };
            //icons PHONE
            var PhoneCircle = $(this).scrollTop();
            if (PhoneCircle > 2600) {
                $(".location_f").addClass("location_active_phone_f");
            } else {
                $(".location_f").removeClass("location_active_phone_f");
            };
            if (PhoneCircle > 3300) {
                $(".light_f").addClass("light_active_phone_f");
            } else {
                $(".light_f").removeClass("light_active_phone_f");
            };
            if (PhoneCircle > 3900) {
                $(".wind_f").addClass("wind_active_phone_f");
            } else {
                $(".wind_f").removeClass("wind_active_phone_f");
            };
            if (PhoneCircle > 4500) {
                $(".uv_f").addClass("uv_active_phone_f");
            } else {
                $(".uv_f").removeClass("uv_active_phone_f");
            };
            console.log(scrollC2);
        });
        /*to top*/
        $(".toTop").click(function(){
            $("html,body").animate({
                    scrollTop:0
                },1000,);
        });
    </script>
<?php include __DIR__.'/module_foot.php' ?>