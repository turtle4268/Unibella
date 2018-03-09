<?php include __DIR__.'/module_head.php' ?>
    <style>
    section{
        height: auto ;
    }
    header a{
        background-color: #666;
    }
    /*container---------------------------------------------------*/
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
        width: 100%;
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        position: absolute;
        color: #fff;
    }
    .hideHeader {
        opacity: 0;
    }
        
    /*Sec1-------------------------------------------------------------*/
    .sec1_a {
        width: 100%;       
        }
    .qaTitle_a {
        font-size: 1.5rem;
        padding-top: 50px;
        margin: 0 auto;
        text-align: center;
    }
    .qaContent_a {
        width: 80%;
        border:1px solid #000;
        margin: 0 auto;
        margin-top: 4%;
        text-align: justify;

    }
    .qaContent_a h3 {
        padding-left: 4%;
        padding-top: 7%;
    }
    .qaContent_a p {
        padding-left: 7%;
        padding-top: 4%;
        padding-right: 3.5%;
    }
    .space_a {
        padding: 40px;
        display: block;
    }
    /*Pagelist*/
    .pagelist{
        min-width: 100% ;
        display: flex ;
        justify-content: center ;
        margin: 50px 0 50px;
    }
    .pagelist .pageitem a{
        display: block ;
        margin: 8px ;
        border-bottom: 1px solid transparent ;
        text-align: center ;
        cursor: pointer;
    }
    .pagelist .pageitem a.act{
        border-bottom: 1px solid #666 ;
    }
    </style>
    <style>
        @import url("css/qa_phone.css");
    </style>
<?php include __DIR__.'/module_nav.php' ?>
    <div class="container_a">
        <div class="headerBg_a">
            <p>Be Your Unique Umbrella.</p>
            <img src="images/banner_QA.jpg" alt="">  
        </div>
        <section class="sec1_a">
            <div class="qaTitle_a"><h1>Q&amp;A</h1></div>
            <div class="qaContent_a">
                <h3>關於訂購</h3>
                <p>(1) 請您結帳前務必確認訂單內容（您購買的商品名稱、數量及顏色），因系統統一作業，且為避免延誤配送，
                    成立訂單後恕無法為您修改商品明細、拆併訂單、更改付款及配送方式。
                <br>
                <br>
                (2) 若僅先將商品點選「放入購物車」時，不算完成該商品的訂購，系統亦不會保留庫存量。故若遇到未完成結帳流程，
                且此商品已售完的狀況，將無法繼續進行結帳。商品加入購物車但未結帳前，商品庫存分配將以結帳順序為依據。
                <br>
                <br>
                (3) 若您需要取消訂單，請先至我的訂單查詢訂單狀態為“訂單處理中”，方可於客服時間內來電告知取消訂單；若訂單狀態為“已出貨”，則無法取消訂單。
                <br>
                <br>
                (4) 若重新訂購時商品的庫存及價格有變動，請以訂購當時網頁所顯示的資訊為準。
                <br>
                <br>
                (5) 當商品出貨送達指定地點，若未被領取或拒收，會員資料中將會產生未取件記錄。
                未取件記錄達３次以上（含３次），未來訂購將無法再選擇使用該配送方式。
                <br>
                <br>
                (6) 每週日暫停出貨，週六下午三點後的訂單會於週一統一出貨。
                <br>
                <br>
                (7) 若訂單內的收件地址與手機號碼須修正，請務必與客服聯繫以便修改。但若已進入出貨流程恕無法更改。
                </p>
                <h3>關於退換貨</h3>
                <p>無法退換貨商品:
                    <br>
                    <br>樣式不符。
                    <br>
                    <br>尺寸誤差。
                    <br>
                    <br>同批布料對花誤差。
                    <br>
                    <br>螢幕產生之色差。
                    <br>
                    <br>退換貨注意事項
                    <br>
                    <br>退換貨的商品必須保留完整包裝 ( 包含商品本體、附件、內外包裝等 )，並且為全新狀態。
                    <br>
                    <br>退貨處理須３-５個工作天 ( 不含寄運天數 )，請您耐心等候。
                    <br>
                    <br>商品退貨時，運費需請會員自行負擔。
                    <span class="space_a"></span>
                </p>
            </div>
            <ul class="pagelist">
                <li class="pageitem"><a><i class="fas fa-angle-double-left"></i></a></li>
                <li class="pageitem"><a class="act">1</a></li>
                <li class="pageitem"><a>2</a></li>
                <li class="pageitem"><a>3</a></li>
                <li class="pageitem"><a><i class="fas fa-angle-double-right"></i></a></li>
            </ul>
        </section>
    </div>
    <?php include __DIR__.'/module_footer.php' ?>
    <script>
        /*navHide*/
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
    </script> 
<?php include __DIR__.'/module_foot.php' ?>