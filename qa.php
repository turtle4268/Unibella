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
        margin-bottom: 15%;

    }
    .qaContent_a h3 {
        margin-top:30px;
        margin-bottom:15px;
        padding:0 20px;
        font-size:20px;
    }
    .questionT_a {
        padding-left: 45px;
        padding-right:45px;
        padding-top: 20px;
        padding-bottom: 20px;
        cursor: pointer;
        font-size:18px;

        
    }
    .questionP_a {
        display:none;
        transition:.1s;
        font-size:18px;
        
    }
    .questionP_a span {
        color:red;
    }
    .qaChange {
        color:red;
    }

    .qaContent_a p {
        padding-left: 45px;
        padding-right: 45px;
        line-height: 30px;
    }
    .space_a {
        padding: 25px;
        display: block;
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
            <div class="qaTitle_a"><h1>常見問題</h1></div>
            <div class="qaContent_a">
                <span class="space_a"></span>
                <h3 class="qaGroup1_a">一、會員常見問題</h3>
                <ul>
                    <li class="questionT_a">Q1.如何加入會員</li>
                    <li class="questionP_a">
                        <p>
                        您可點選上方的會員中心圖示，並點選「註冊」後即可加入會員哦！
                        </p>
                    </li>
                    <li class="questionT_a">Q2.如何登入會員</li>
                    <li class="questionP_a">
                        <p>
                        請點選網頁上方的會員中心圖示，輸入您的會員帳號(手機號碼)、密碼，及驗證圖碼即可登入
                        </p>
                    </li>
                    <li class="questionT_a">Q3.如何修改個人資料及密碼？</li>
                    <li class="questionP_a">
                        <p>
                        請先點選網頁上方的會員中心圖示，登入會員後點選「會員中心」，點選「會員資料管理」 ，即可選擇您想要修改的個人資料或密碼。
                        </p>
                    </li>
                    <li class="questionT_a">Q4.忘記密碼怎麼辦？</li>
                    <li class="questionP_a">
                        <p>
                        請點選上方「登入/註冊」，於「忘記密碼」欄輸入註冊的電話號碼按下發送簡訊，系統即會發送一組新密碼簡訊至手機。
                        <br>登入後請至「會員中心」重新更改密碼。
                        <br><span>※為保障個人資料的安全性，客服人員無法查詢您的密碼。</span>
                        </p>
                    </li>
                </ul>
                <h3 class="qaGroup2_a">二、訂購說明</h3>
                <ul>
                    <li class="questionT_a">Q1.如何訂購商品？</li>
                    <li class="questionP_a">
                        <p>購物流程：
                        <br>① 選擇商品                   
                        <br>② 點選「加到購物車」前往結帳                       　
                        <br>③ 登入會員                      　
                        <br>④ 輸入帳號密碼                       　
                        <br>⑤ 確認金額及送貨資訊                       　
                        <br>⑥ 完成購物
                        </p>
                    </li>
                    <li class="questionT_a">Q1.訂單成立後，可以取消或修改訂單嗎？</li>
                    <li class="questionP_a">
                        <p>一、如要取消訂單，可於訂單剛送出，客服人員尚未處理訂單前，會員中心>消費訂單紀錄>訂單明細點選「取消訂單」即可。
                        <br>
                        二、如要修改訂單內容，請按照上方步驟取消訂單後重新下訂。
                        <br>
                        三、若訂單出貨狀態已轉為揀貨中，便無法自行取消，請於服務時間內盡速來電客服協助處理
                        </p>
                    </li>
                    <li class="questionT_a">Q2.如何刪除購物車內商品？</li>
                    <li class="questionP_a">
                        <p>請先前往結帳，結帳時下方會顯示出購物車內所有商品，可點選商品金額右方垃圾桶圖示取消商品。
                        </p>
                    </li>
                    <li class="questionT_a">Q3.如何查詢訂單進度？</li>
                    <li class="questionP_a">
                        <p>請登入會員中心>消費訂單紀錄，點選欲查詢的訂單右方「明細」即可查詢該訂單的處理狀態。
                        </p>
                    </li>
                </ul>
                <h3 class="qaGroup3_a">三、配送方式</h3>
                <ul>
                    <li class="questionT_a">Q1.目前提供哪些運送方式？</li>
                    <li class="questionP_a">
                        <p>
                        貨運宅配:
                        無任何運送限制
                        </p>
                    </li>
                </ul>
                <ul>
                    <li class="questionT_a">Q2.訂購商品後需幾天的時間才可以收到商品呢？</li>
                    <li class="questionP_a">
                        <p>
                        依存貨狀態，分為「現貨商品」及「預購商品」：
                        <br>現貨商品:3-5個工作天
                        <br>預購商品:20-25個工作天
                        <br>
                        <br><span>※ 訂單內若有現貨和預購商品，需等商品皆到貨後才會安排出貨，若需分批出貨請分開成立訂單。</span>
                        <br><span>※ 工作天不包含六、日與國定假日。</span>
                        </p>
                    </li>
                </ul>
                <h3 class="qaGroup4_a">四、退換貨說明</h3>
                <ul>
                    <li class="questionT_a">Q1.商品鑑賞期</li>
                    <li class="questionP_a">
                        <p>Unibella提供10天鑑賞期服務
                        <br>我們提供每筆訂單一次退換貨的免費服務
                        <br>
                        <br>換貨:
                        <br>若您收到商品後發現瑕疵或是錯誤商品，想要更換同款或是等值商品
                        <br>請勿點選『退貨按鈕』
                        <br>請來電聯繫我們的客服人員02-2225-2213，我們將為您安排後續的處理方式。
                        <br>
                        <br>退貨:
                        <br>一、10天鑑賞期指收到商品10天內(包含例假日)提出申請。 
                        <br>
                        二、如發生以下情況將無法受理換貨:
                        <br>超過十天鑑賞期／商品過度使用（使用痕跡明顯）／傘面磨損或破損／傘面髒污，無法清潔／傘骨及握把有磨損污漬／附屬配件短缺。
                        <br>
                        三、請將商品（連同配件/服務卡/發票）恢復包裝，Unibella收到退貨申請後會派宅配於五個工作天內去取回商品。
                        <br>
                        四、請將商品包裝完整，包裝時避免雨傘外露，以免運送過程中發生損壞，收件人請填寫『Unibella』。
                        <br>
                        五、不論換貨理由為何，如因換貨造成訂金額未達活動標準，將會取消原活動優惠以原價計算。
                        <br>
                        <br>
                        <span>※辦理退換後宅配聯繫多次並超過十天收不回商品者本公司有權利取消此退貨並不予換款。</span>
                        <br>
                        <span>※在收到退回商品時，如遇不符換貨規範，Unibella會將商品寄回，屆時運費尚須由消費者自行負擔。（來回運費為120元）</span>
                        </p>
                    </li>
                    <li class="questionT_a">Q2.退款方式？</li>
                    <li class="questionP_a">
                        <p>
                        若訂購方式為【信用卡付款】
                        <br>一、由於訂單成立後系統將會自動向信用卡銀行請款，我們將在收到退貨後隔日起算7~14個工作天內為您進行退款申請作業。
                        <br>二、按照信用卡規定，退貨時，必須透過銀行退款，不得直接退給消費者現金。因此退款將會與您的發卡銀行申請刷退。
                        <br>三、因為銀行需要一些作業時間，您可能會在當期或下一期的信用卡帳單上看到該筆訂單的退款明細，具體刷退日期煩請自行與發卡銀行聯繫確認。
                        <br>
                        <br>
                        若訂購方式為【貨到付款】
                        <br>一、貨到付款申請退貨時，退款方式如下
                        <br>填寫:退款銀行名稱 / 分行名稱 / 戶名 / 帳號，商品收回後7~14個工作天會完成退款作業。
                        <br>二、退款作業時間約需七個工作天（以收到退貨商品隔日開始起算不含假日），請再多一點耐心，我們將會儘快處理
                        <br>
                        <br>
                        <br><span>※注意事項※</span>
                        <br><span>退款帳戶請於退貨時自行登入會員中心填寫退款資訊，如因資料錯誤而造成退款時間延誤，本司概不負責。</span>
                        </p>
                    </li>
                    <li class="questionT_a">Q3.退貨商品什麼時候會收走？</li>
                    <li class="questionP_a">
                        <p>
                        至會員中心申請退貨後，下一個工作日會通知物流進行取件作業（遇六日及國定假日順延），
                        物流收到通之後隔天進行取件，預計五個工作天內收回商品。
                        <br>
                        <br>例：週一申請退貨，週二通知物流取件，週三開始進行收件；
                        週五申請退貨，下週一通知物流取件，週二開始進行收件。
                        <br>
                        <br>
                        因物流資料傳輸作業需要時間，請於收到商品後隔天至官網會員中心辦理退貨，
                        <br>並於收到商品後10天內至官網申請。
                        <br>
                        <br> 若申請退貨後五個工作天內未收到物流人員取件通知請來信或來電詢問。

                        </p>
                        
                    </li>
                </ul>
                <span class="space_a"></span>

            </div>
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

        //qa 
       $(".questionT_a").click(function(){
            var $questionP_a=$(this).next('.questionP_a');
            if(!$questionP_a.is(':visible')){
				$('.qaContent_a ul li.questionP_a:visible').slideUp();
			}
            $questionP_a.slideToggle();
            $(this).addClass("qaChange").siblings().removeClass("qaChange");
           
        })
        
            
  

    </script> 
<?php include __DIR__.'/module_foot.php' ?>