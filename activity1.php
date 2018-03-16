<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            height: auto ;
        }
        header a{
            background-color: #666 ;
        }
        /*Container-------------------------------------------------------------------*/
        #container{
            color:#666;
        }
        .toppic_f{
            display:flex;
            justify-content:space-between;
            margin-top:100px;
            
        }
        .toppic_f img{
            display:block;
        }
        .toppic_left_f{
            position:relative;
        }
        .toppic_left_word_f{
            position:absolute;
            width:100%;
            left:50%;
            margin-left:-270px;
            z-index:2;
        }
        .toppic_left_word_f h2{
            margin:100px 0 30px;
            font-weight:bold;
        }
        .toppic_left_word_f p{
            line-height:32px;
            margin-top:30px;
            text-align:justify;

        }
        /*--------------------------------------------*/
        .toppic_left_f img{
            animation-name: leftPic;
            animation-duration: 1.5s;
            /* animation-delay:.8s; */

        }
        @keyframes leftPic{
            0%{
                opacity:0;
                transform:translateY(200px);
            }
            100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        /*--------------------------------------------*/
        .toppic_right_f figure{
            position:relative;
            overflow:hidden;
        }
        .toppic_right_f figure .right_top{
            animation-name: rightTop;
            animation-duration: 1s;
            animation-delay:.8s;
            opacity:0;
            animation-fill-mode:forwards;
        }
        @keyframes rightTop{
            0%{
                opacity:0;
                transform:translateY(-200px);
            }
            100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .toppic_right_f .blue{
            position:absolute;
            right:0;
            bottom:15%;
            width:91%;
            height:65px;
            background-color:#1F5572;
            animation-name: rightBlue;
            animation-duration: 1s;
            animation-delay:1.5s;
            opacity:0;
            animation-fill-mode:forwards;
        } 
        @keyframes rightBlue{
            0%{
                opacity:0;
                transform:translateX(200px);
            }
            100%{
                opacity:1;
                transform:translateX(0);
            }
        }
        .toppic_right_f .blue img{
            width:60%;
            margin: 2%;
        }
        /*--------------------------------------------*/
        .right_bottom{
            opacity:0;
        }
        .right_bottom_active{
            animation-name: rightBottom;
            animation-duration: 1s;
            animation-delay:.5s;
            opacity:0;
            animation-fill-mode:forwards;
        }
        @keyframes rightBottom{
            0%{
                opacity:0;
                transform:translateY(200px);
            }
            100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .toppic_left_word_f{
            opacity:0;
        }
        .toppic_left_word_active_f{
            animation-name: rightBottom;
            animation-duration: 1s;
            animation-delay:.5s;
            opacity:0;
            animation-fill-mode:forwards;
        }
        /*--------------------------------------------*/
        .section2{
            display:flex;
            align-items:center;
            opacity:0;
        }
        .section2 p{
            padding:0 100px;
            box-sizing:content-box;
            line-height:32px; 
            text-align:justify;
        }
        .section3{
            display:flex;
            justify-content:space-between;
            opacity:0;
        }
        .section4{
            width:65%;
            margin : 0 auto;
            opacity:0;
        }
        .section4 h2{
            font-weight:bold;
            margin:100px auto 50px;
            text-align:center;
        }
        .section4 p{
            line-height:32px; 
            text-align:justify;
            margin-bottom:50px;
        }
        .section5{
            display:flex;
            opacity:0;
        }
        .section6{
            opacity:0;  
        }
        .section6 h2{
            font-weight:bold;
            text-align:center;
            line-height:48px;
            margin:0 0 60px; 
        }
    </style>
    <style>
        @import url("css/fix_phone.css");
    </style>
<?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <section class="toppic_f">
            <div class="toppic_left_f">
                <img src="images/aHR0cDovL3d3dy5tb2xzc2kuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxNy8wMS9kMzAwZjUxNGQ4N2I2MzVkMDk3YWE2N2UyNjYxYzQ5Yy5qcGc_p_p100_p_3D.jpg" alt="">
                <div class="toppic_left_word_f">
                    <h2>Unibella X Flabjacks聯名新款 | Everything is Okay</h2>
                    <p>新年伊始，人們再次開始清算理想，盤算未來。
                    居住的城市總有霧霾，嚮往的旅行沒有足夠的假期，房貸車貸還沒還清，想跳槽卻沒有勇氣……想想生活總有這樣那樣的不如意，情緒常常陰雲密布容易“下雨” …… 
                    來自香港的視覺設計師Ton Mak ，在她眼裡，沒有什麼是不能用一句Everything is Okay解決的，而它也創造了一個萌物Flabjacks，外號：“小胖團”。
                    </p>
                </div>
            </div>
            <div class="toppic_right_f">
                <figure>
                    <img src="images/nextdesigner.svg" alt="" class="right_top">
                    <div class="blue">
                        <img src="images/comeing_soon.svg" alt="">
                    </div>
                </figure>
                <figure class="right_bottom"><img src="images/aHR0cDovL3d3dy5tb2xzc2kuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxNy8wMS8yYmU5ODNlYjlkNjFkMjVkYzQ2YmNmMmZkNjU5ZjYxNy5qcGc_p_p100_p_3D.jpg" alt=""></figure>
            </div>
        </section>

        <section class="section2">
            <img src="images/aHR0cDovL3d3dy5tb2xzc2kuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxNy8wMS83MTNhNmVhODBkY2QyMGNjY2M4ZDg5OTAwOTdmYWFmMi5naWY_p_p100_p_3D (1).gif" alt="">
            <p>冷趣味，萌感，創造力十足的元氣女孩Ton Mak和Unibella一拍即合，在2017年伊始推出聯名合作的設計款雨傘，帶給我們生活的詼諧和溫暖。
                我們就叫這把傘：Everything is Okay！希望擁有這把傘的你，可以拋開過往所有的不快，大膽前行。</p>
        </section>
        <section class="section3">
            <figure><img src="images/aHR0cDovL3d3dy5tb2xzc2kuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxNy8wMS9kMzJhNTgzYTlkNTllYTY5NGI2NTU1YjIxMjAxMzAyZC5qcGc_p_p100_p_3D.jpg" alt=""></figure>
            <figure><img src="images/aHR0cDovL3d3dy5tb2xzc2kuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxNy8wMS85OGY0YzJmMzNiMGExMmY1N2U4M2RlYTY2YzM0NDFhMS5qcGc_p_p100_p_3D.jpg" alt=""></figure>   
        </section>
        <section class="section4">
            <h2>合作：當FLABJACKS 遇見Unibella</h2>
            <p>Unibella對Ton可謂一見鍾情，我們偶遇在上海嘉里中心，專注繪畫的Ton ，散發一股特立獨行又認真的魅力。
                <br>
                <br>
                她的卡通形象：呆萌的Flabjacks更是直觀地傳達給人“開心”的情緒，這就是Unibella一直想告訴給人們的“當你遇到一點壞天氣的時候，當你遇到不快的時候，如何樂觀面對和打敗它們”。
                <br>
                <br>
                “Everything is Okay”一款設計師聯名合作傘便就此誕生。
            </p>
        </section>
        <section class="section5">
            <figure><img src="images/aHR0cDovL3d3dy5tb2xzc2kuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxNy8wMS8wY2M2ZTM0ZjA0MzVlNjhmMzIyMzUxOTVkODcyZTJlNC5qcGc_p_p100_p_3D.jpg" alt=""></figure>
            <figure><img src="images/aHR0cDovL3d3dy5tb2xzc2kuY29tL3FmeS1jb250ZW50L3VwbG9hZHMvMjAxNy8wMS8yNjk2Y2JiMDQ4Y2UzY2I0M2IyZmNkZDUzY2Q1MGEyYS5qcGc_p_p100_p_3D.jpg" alt=""></figure>
        </section>
        <section class="section6">
            <h2>Unibella X Flabjacks三折傘、<br>
            Unibella X Flabjacks直柄傘 即將上市!
            </h2>
        </section>
    </div>    
    <!-- <?php include __DIR__.'/module_footer.php' ?> -->
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

            if (scrollNow > 500) {
                $(".toppic_left_word_f").addClass("toppic_left_word_active_f");
            } else {
                $(".toppic_left_word_f").removeClass("toppic_left_word_active_f");   
            };

            if (scrollNow > 900) {
                $(".section2").addClass("toppic_left_word_active_f");
            } else {
                $(".section2").removeClass("toppic_left_word_active_f");   
            }
            if (scrollNow > 1500) {
                $(".section3").addClass("toppic_left_word_active_f");
            } else {
                $(".section3").removeClass("toppic_left_word_active_f");   
            }
            if (scrollNow > 2100) {
                $(".section4").addClass("toppic_left_word_active_f");
            } else {
                $(".section4").removeClass("toppic_left_word_active_f");   
            }
            if (scrollNow > 2700) {
                $(".section5, .section6").addClass("toppic_left_word_active_f");
            } else {
                $(".section5, .section6").removeClass("toppic_left_word_active_f");   
            }
        });
        var scrollHeaderLast;
        
    </script>
<?php include __DIR__.'/module_foot.php' ?>