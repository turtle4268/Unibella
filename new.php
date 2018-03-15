<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            height: auto ;
        }
/*container-------------------------------------------------------------*/
    .container_a {
        width: 100%;  
        /* height: 180vh;    */
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
        /* width: 100%; */
        font-size: 30px;
        font-weight: bold;
        color:#fff;
        position: absolute;
        text-align: center;
        right: 13%;
        letter-spacing: 5px;
    }
    .hideHeader {
        opacity: 0;
    }
/*Sec1 active-------------------------------------------------------------*/
    .sec1_a{
        width: 100%;    
    }
    .sec1_a h1 {
        text-align: center;
        font-size: 24pt;
    }
    .active_a {
        width:70%;
        margin: 0 auto;
        padding-top: 50px;
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
        width: 300px;
        height: 300px;
        display: block;
        z-index: 2;
        
    }
    .active_a ul .square_a img {
        max-width: 100%;
        position: relative;
        opacity: 0.4;
        transition: all .5s ease-in-out;
        height:100%; 
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
        margin-left:-150px;
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

/*Sec2 new-------------------------------------------------------------*/
    .sec2_a {
        width: 100%;
        /* height: 100vh; */
        margin-top: 10%;
        position: relative;
    }
    .sec2_a h1 {
        text-align: center;
        font-size: 24pt;
    }
    .new_a {
        display: flex;
        padding-top: 50px;
    }
    .newText_a {
        position: absolute;
        top: 92px;
        left: 0;
        z-index: 3;
        height: 85%;
        width:100%;
        font-size: 20px;
        transform: translateX(-100%);
        transition: all .5s;
        display:flex;
        align-items:center;
        background:#fff;
       
    }
    .newText_a .newClose_a {
        width: 20px;
        height: 20px;
        position: absolute;
        top: 20px;
        right: 20px;
        background: url(images/X.svg) center center no-repeat ;
    }
    .newClose_a {
        cursor:pointer;
    }
    .newP_a {
        position: absolute;
        transition: all .5s;
        margin:0 5%;
        opacity:0;
    }
    .newP_a p {
        
        color:#666;
    }
    .newPShow_a {
        opacity:1; 
    }
    .newP2_a p{
        text-align:center;
    }
    .textShow_a {
        transform: translateX(0);
        
    }
    .yellow_a {
        background: #ffdb54;
        width: 50%;
        height: 500px;
        position: relative;
    }
    .timeline ul li {
        list-style-type: none;
        position: relative;
        width: 6px;
        margin: 0 auto;
        padding-top: 45px;
        background: #fff;
        height: 68px;
    }
    .timeline ul li::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 22.5px;
        transform: translateX(-50%);
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: inherit;
        cursor: pointer;
    }
    .blue_a {
        background: #1f5572;
        width: 50%;
        height: 500px;
        position: relative;
        z-index: 2;
    }
    .newContent_a {
        position: relative;
        top:11%;
        left: 20%;
        width: 89%;
        height: 75%;
        border: 3px solid #fff;
        z-index: 3;
        overflow: hidden;
    }
    .newConHide {
        display: none;
    }
    .newContent_a a.newspaper_a {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        width: 230px;
        height: 250px;
        transition: all 1s;
        display: block;
    }
    .newContent_a .newspaper_a img {
        width:100%;
        transition: all 1s;
    }
    .newContent_a a.newspaper1_a {
        top: 41%;
        left: -7%;
        transform: rotate(-30deg);
    }
    .newContent_a a.newspaper2_a {
        top: -7%;
        left: -10%;
        transform: rotate(30deg);
    }
    .newContent_a a.newspaper3_a {
        top: 40%;
        left: 48%;
        transform: rotate(-8deg);
    }
    .newContent_a a.newspaper4_a {
        top: 43%;
        left: 76%;
    }
    .newContent_a a.newspaper5_a {
        top: -5%;
        left: 16%;
        transform: rotate(-15deg);
        
    }
    .newContent_a a.newspaper6_a {
        top: -9%;
        left: 35%;
        transform: rotate(-7deg);
    }
    .newContent_a a.newspaper7_a {
        top: 43%;
        left: 22%;
        transform: rotate(-4deg);
        
    }
    .newContent_a a.newspaper8_a {
        top: -10%;
        left: 69%;
        transform: rotate(83deg);
        
    }
    
    .newLink_a {
        position: absolute;
        top:15%;
        left: 30%;
        height: 100%;
    }
    .newLink_a a {
        display: block;
        position: relative;
        bottom: 23px;
        left: 40px;
        width: 400px;
        color: #fff;
        cursor: pointer;
        text-align: justify;
    }
    .scale {
        transform: scale(1.5) !important;
        transition: all 1s;
        z-index: 10 !important;
    }
    </style>
<style>
    @import url("css/new_phone.css");
</style>
    <?php include __DIR__.'/module_nav.php' ?>
    <div class="container_a">
        <div class="headerBg_a">
            <img src="images/banner_NEWS.jpg" alt="">
            <p>Be Your Unique Umbrella.</p>
        </div>
        <section class="sec1_a">
            <h1>最新活動</h1>
            <div class="active_a">
                <ul>
                    <li class="squarePhone_a"><img src="images/news_square1.jpg" alt=""></li>
                    <li class="square_a blue" >
                            <a href="#">
                            <img class="images" src="images/news_squre2_light.jpg" alt="">
                            <p class="p2">梅雨季<br>全館雨傘85折</p>
                            </a>   
                    </li>
                    <li class="squarePhone_a"><img src="images/news_square3.jpg" alt=""></li>
                    <li class="square_a orange">
                            <a href="activity1.php">
                            <img class="images" src="images/news_squre4_light.jpg" alt="">
                            <p class="p4">Unibella X Flabjacks聯名新款</p>
                            </a>
                    </li>
                    <li class="squarePhone_a"><img src="images/news_square5.jpg" alt=""></li>
                    <li class="square_a orange">
                            <a href="#">
                            <img class="images" src="images/news_squre6_light.jpg" alt="">
                            <p class="p6">陽傘新色上架</p>
                            </a>
                    </li>
                </ul>
            </div>
        </section>
        <div class="sec2_a">
            <h1>新聞媒體</h1>
            <section class="new_a">
                <div class="yellow_a">
                    <div class="newContent_a">
                    <a class="newspaper_a newspaper1_a paperText" id="img1" data-text="text1"><img src="images/newspaper1.jpg" alt=""></a> 
                    <a class="newspaper_a newspaper2_a" id="img2"><img src="images/newspaper2.jpg" alt=""></a>
                    <a class="newspaper_a newspaper3_a" id="img3"><img src="images/newspaper3.jpg" alt=""></a>
                    <a class="newspaper_a newspaper4_a paperText" id="img4" data-text="text2"><img src="images/newspaper4.jpg" alt=""></a>
                    <a class="newspaper_a newspaper5_a paperText" id="img5" data-text="text3"><img src="images/newspaper5.jpg" alt=""></a>
                    <a class="newspaper_a newspaper6_a paperText" id="img6" data-text="text4"><img src="images/newspaper1.jpg" alt=""></a> 
                    <a class="newspaper_a newspaper7_a paperText" id="img7" data-text="text5"><img src="images/newspaper2.jpg" alt=""></a>
                    <a class="newspaper_a newspaper8_a" id="img8"><img src="images/newspaper3.jpg" alt=""></a>
                    </div>
                    
                    
                </div>
                <div class="blue_a timeline">
                    <ul class="newLink_a">
                        <li data-img="img4"><a>2018.04.01 Unibella X Flabjacks聯名新款</a></li>
                        <li data-img="img1"><a>2017.11.16 Unibella教你玩轉雨傘成為雨天焦點</a></li>
                        <li data-img="img6"><a>2017.03.05 Unibella x 北藝風特展商品開始預購</a></li>
                        <li data-img="img7"><a>2016.11.16 智能雨傘正夯，讓你與傘不散</a></li>
                        <li data-img="img5"><a>2015.07.05 Unibella：製造持久耐用的雨傘</a></li>
                    </ul>
                </div>
            </section>
            <section class="newText_a">
                <div class="newClose_a" ></div>
                <div class="newP_a" id="text1">
                    <p>誰說雨天就不適合時尚出行，一把Unibella的傘就可以讓你鲜亮出街，成為雨天這個秀場的焦點。
                    一起来看看如何玩轉雨傘，成為眾人瞩目和追捧的時尚潮人。<br><br>
                    彩色傘：想驚艷就得高明度别以為只有服裝才可以高明度，傘界現在也正流行。
                    要知道選對一把色彩明豔的傘可以勝過配飾的，美國歌壇小天后蕾哈娜就經常在傘上下足功夫，
                    而歌手兼設計師的格温-斯蒂芬妮則是绝對的色彩搭配高手。<br><br>
                    Unibella彩色傘搭配建議：當傘颜色已足夠鮮明時，服飾元素就盡可能極簡，避免將自己扮成調色盤，盡量選擇黑色和白色来與之搭配。<br><br>
                    纯黑傘：經典百搭永不出錯黑色的傘也被眾女星所喜爱，不僅低調，實用指數也是百分百，90后童星Dakota Fanning经典黑白配現身街頭，黑色的傘與長靴和手袋相呼應。</p>
                </div>
                <div class="newP_a newP2_a" id="text2">
                    <p> 
                    Unibella對Ton可謂一見鍾情，我們偶遇在上海嘉里中心，專注繪畫的Ton ，散發一股特立獨行又認真的魅力。<br><br> 
                    她的卡通形象：呆萌的Flabjacks更是直觀地傳達給人“開心”的情緒，
                    這就是Unibella一直想告訴給人們的“當你遇到一點壞天氣的時候，當你遇到不快的時候，
                    如何樂觀面對和打敗它們”。 <br><br>
                    "Everything is Okay" 一款設計師聯名合作傘便就此誕生。
                    </p>
                </div>
                <div class="newP_a" id="text3">
                    <p>對於Unibella而言，成功地將您的產品推向市場要比推出正確的產品設計困難得多。
                    為了研發能長久使用的產品我們避免慣性妥協，特別是製造商經常與客戶達成最低價格的合作，
                    工廠將尋求節省資金和提高效率的方法。他們可能會改變供應商在材料上的細微差別，
                    或抵制生產中的太多質量的檢查。您可能會收到請求，忽略產品的某種美感以簡化裝配。
                    這些妥協可能看起來很小，但總體上它們會對產品產生重大影響。
                    當你被要求妥協時，必須堅持材料的真實性，並尋找方法來改善您的產品組裝方式，
                    同時不犧牲那些重要且通常很小的設計細節。 
                    在生產開始時實施質量控制計劃，而不是結束，
                    許多公司等到生產完成後才進行質量檢查，確保在庫存出貨之前一切正常。
                    這是一個大錯誤，生產完成後，幾乎無法解決任何產品問題。
                    一旦零件和材料到達，與您的製造商一起在流程開始時做好質量檢查。</p>
                </div>
                <div class="newP_a" id="text4">
                    <p> 亞洲地區，尤其女性無時無刻都在撐傘，晴天、下雨天、颱風天，你想到的日子都有傘的陪伴，可是常常走到哪忘到哪，這樣的情形可說是常常發生你我的日常生活當中。
                    為了解決這個問題，來自台灣的新創品牌Unibella，打造最新科技智能傘，當使用者離開雨傘的區域範圍（30/50 公尺）手機端會通知您忘記將雨傘帶走，同時也會記錄最後遺失的位置，就算外出臨時擺在便利商店也不會再忘記。</p>
                </div>
                <div class="newP_a" id="text5">
                    <p>亞洲地區，尤其女性無時無刻都在撐傘，晴天、下雨天、颱風天，你想到的日子都有傘的陪伴，可是常常走到哪忘到哪，這樣的情形可說是常常發生你我的日常生活當中。
                    為了解決這個問題，來自台灣的新創品牌Unibella，打造最新科技智能傘，當使用者離開雨傘的區域範圍（30/50 公尺）手機端會通知您忘記將雨傘帶走，同時也會記錄最後遺失的位置，就算外出臨時擺在便利商店也不會再忘記。</p>
                </div>
            </section>

            
        </div>
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

        $(".newLink_a li").click(function () {
            var scaleImg = $(this).attr("data-img");
            $(".yellow_a .newspaper_a").removeClass("scale");
            $("#" + scaleImg).addClass("scale");
        });

        //newText
        $(".paperText").click(function () {
            var text = $(this).attr("data-text");
            $(".yellow_a .newspaper_a").removeClass("scale");
        // console.log(text);
            $("#" + text).addClass("newPShow_a").siblings().removeClass("newPShow_a");
            $(".newText_a").addClass("textShow_a");
            $(".newContent_a").addClass("newConHide");
        });
        $(".newClose_a").click(function(){
            $(".newText_a").removeClass("textShow_a");
            $(".newContent_a").removeClass("newConHide");

        });


    </script> 
<?php include __DIR__.'/module_foot.php' ?>