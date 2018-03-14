<?php require __DIR__. '/_db_connect.php'; ?>
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
            right: 13%;
            letter-spacing: 5px;
        }
        /*信用卡交易步驟三------------------------------------*/
        .total_f {
            padding: 50px;
            border: none;
            margin:0 auto;
            text-align: center; 
            color: #C1272D;
        }
        section{
            color: #666;
            margin-top: 50px;
        }
        .credit_f h6{
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        table {
            width: 60%;
            max-width: 60%;
            margin: 30px auto;
            border-collapse: collapse;
            box-sizing: content-box;
        }
        table thead tr th {
            background: #666;
            color: #fff;
            padding: 6px 0;
            border: 1px solid #666;
            box-sizing: content-box;
        }
        table tbody tr td {
            text-align: center;
            height: 60px;
            border: 1px solid #666;
            box-sizing: content-box;
        }
        table tbody tr td input{
            width: 200px;
            margin-left: 30px;
            box-sizing: content-box;
        }
        /*button-------------------------------------------------*/
        .btn_a {
            display: flex;
            justify-content: center;
            position: relative;
            margin-bottom: 5%;
        }
        .btn_a a {
            margin:15px 45px;
            border-radius: 28px;
            padding:10px 40px;
            border: 2px solid #302f3a;
            background: transparent;
            color:  #302f3a;
            font-size: 1rem;
            position: relative;
            cursor:pointer;
        }
        .btn_a a:hover {
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
        .btn_a a:hover::before {
            top: 0;
            left: 0;
        }
        .btn_a a:active {
            transform: translateY(3px);
        }
        .btn_a a:focus {
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
        @import url("css/cartCredit3_phone.css");
    </style>
    <?php include __DIR__.'/module_nav.php' ?>
    <div id="container">
        <div class="headerBg_f">
            <img src="images/banner_CART.jpg" alt="">
            <p>Be Your Unique Unbrella.</p>
        </div>
        <section class="credit_f">
            <div class="total_f" data-val="">共 X 件，總金額 NT$. 7400</div>
            <h6>信用卡交易驗證</h6>
            <table>
                <thead >
                    <tr>
                        <th>驗證</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>請輸入您收到的驗證碼
                            <input type="text">
                        </td>    
                    </tr>
                </tbody>
            </table> 
        </section>
        <div class="btn_a">
            <!-- <button class="shop_a">上一頁</button> -->
            <a class="buy_a">送出</a> 
        </div>
        <div class="toTop">
            <div class="tr"></div>
            <h5>TOP</h5>
        </div>
    </div>
    <?php include __DIR__.'/module_footer.php' ?>
    <script>
        /*hideNav*/
        var scrolllast;
        $(window).scroll(function(){
            var scrollNow=$(this).scrollTop();
            // console.log(scrollNow);
            if (scrollNow < 240) {
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
        /*to top*/
        $(".toTop").click(function(){
            $("html,body").animate({
                scrollTop:0
            },1000);
        });
    </script>
</body>
</html>