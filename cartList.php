<style>
    <style>
    /*container-------------------------------------------------------------*/
    #container {
        width: 100%;  
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
        font-size: 30px;
        font-weight: bold;
        color:#fff;
        position: absolute;
        right: 13%;
        letter-spacing: 5px;
    }
    .hideHeader {
        opacity: 0;
    }
    /*Sec1-------------------------------------------------------------*/
    .sec1_a {
        width: 100%;   
        padding-top: 50px;
    }
    .sec1_a h1 {
        text-align: center;
        font-size: 24pt;  
        color:#666;
    }
    table {
        width: 60%;
        max-width: 60%;
        margin: 0 auto;
        margin-top: 30px;
        border-collapse: collapse;
        color:#666;
    }
    table tbody tr td i.far {
        font-size: 20px;
    }
    table thead tr th {
        background: #666;
        color: #fff;
        padding: 6px 0;
        border: 1px solid #999;
        border-right: 1px solid #fff;
    }
    .delect_a {
        border-right: 1px solid #999;
    }
    table tbody tr td {
        text-align: center;
        height: 200px;
        border: 1px solid #999;
    }
    .table_a tbody tr .productCom_A {
        width: 300px;
        height: 300px;
    
    }
    .table_a tbody tr .productCom_A figure {
        width: 300px;
        height: 300px;
        overflow: hidden;
    }
    .table_a tbody tr td img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        
    }
    
    .tablePhone_a {
        display:none;
    }
    .total_a {
        padding: 85px;
        border: none;
        margin:0 auto;
        text-align: center; 
        color: #C1272D;
        
    }
    .btn_a {
        display: flex;
        justify-content: center;
        position: relative;
        margin-bottom: 5%;
    }
    .btn_a button {
        margin:15px 45px;
        border-radius: 28px;
        padding:10px 40px;
        border: 2px solid #302f3a;
        background: transparent;
        color:  #302f3a;
        font-size: 1rem;
        position: relative;
    }
    .btn_a button:hover {
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
    .btn_a button:hover::before {
        top: 0;
        left: 0;
    }
    .btn_a button:active {
        transform: translateY(3px);
    }
    .btn_a button:focus {
        outline: none;
    }
    /*-------toTop--------*/
    .toTop{
        color: #1F5572 ;
        position: absolute;
        right: 50px;
        top: 10px ;
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
  
     /*Mediaquery--------------------------------------------------------------*/
     @media screen and (max-width: 376px) {
    /*--header--*/
    *{
        letter-spacing: 2px ;
    }
    header {
        padding-right: 5px;
        padding-left: 5px;
        padding-top: 10px ;
    }
    header h1 {
        left: 10px;
        top:0;
        font-size:26px;
    }
    .h_ul li {
        padding: 0 10px;
    }
    /*--banner--*/
    .headerBg_a p {
        width: 70%;
        font-size: 24px;
        left: 10%;
        top: 30%;
        font-weight: 400;
        text-align: inherit;
    }
    .headerBg_a img {
        width: 300%;
    }
    /*--sec1--*/
    .sec1_a {
        padding-top: 20px;
    }
    /*--total--*/
    .total_a {
        padding:50px;
    }
    /*--table--*/
    table {
        width: 75%;
        max-width: 75%;
    }
    table thead tr th {
        border-right: 1px solid #999;
    }
    .table_a {
        display: none;
    }
    .tablePhone_a {
        display: block;
        margin: 0 9%;
        margin-top:30px;
    }
    .tablePhone_a tbody tr td figure {
        position: relative;
        width: 300px;
        height: 300px;
        overflow: hidden;

    }
    .tablePhone_a tbody tr td figure img {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
    .tablePhone_a tbody .producCotent_a {
        height: 50px;
    }
    .tablePhone_a tbody .producCotent_a td {
        border-top: none;
        border-bottom: none;
        height: 50px;
        text-align: left;
    }
    .tablePhone_a tbody .producCotentL_a  {
        border-bottom: 1px solid #666;
    }
    .tablePhone_a tbody .producCotent_a td p {
        width: 70%;
        margin-left: 15%;
    }
    .tablePhone_a tbody .producCotent_a td p span {
        margin-left: 18%;
    }
    .tablePhone_a tbody .producCotentM_a td p span {
        margin-left: 35%;
    }
  
    /*--button--*/
    .btn_a {
        display: block;
        margin: 0 0;
        text-align: center;
        margin-bottom: 15%;
    }
    /*--toTop--*/
    .toTop {
        right:20px;
        top: 80px;
    }
    /*--Nav--*/
    nav{
        width: 100% ;
    }
    nav.navhide{
        right: -100% ;
    }
    /*footer*/
    .f_content{
        flex-wrap: wrap ;
        padding: 20px 40px ;
    }
    .f_quarter{
        min-width: 100% ;
        border-right: none ;
        padding: 20px 0 ;
        position: relative ;
    }
    .f_quarter::before{
        content: "" ;
        border-bottom: 1px solid #FFF ;
        width: 40% ;
        height: 100% ;
        position: absolute ;
        margin: 0 auto ;
    }
    .f_quarter.border_none::before{
        content: "" ;
        border-bottom: 1px solid transparent ;
        width: 50% ;
        height: 100% ;
        position: absolute ;
        margin: 0 auto ;
    }
    .f_quarter p{
        text-align: center ;
    }
    .f_quarter a.aicon{
        width: 36px ;
        margin: 0 ;
        text-align: center ;
        margin: 15px ;
    }
    .foot{
        padding: 12px 0 ;
        letter-spacing: 2px ;
    }
    }
    </style>
<?php include __DIR__.'/module_nav.php' ?>
<div id="container">
    <div class="headerBg_a">
        <img src="images/banner_CART.jpg" alt="">
        <p>Be Your Unique Umbrella.</p>
    </div>
    <section class="sec1_a" >
        
        <h1>購物車列表</h1>
        <table class="table_a">
            <thead class="thead-dark_a">
                <tr>
                  <th scope="col">商品圖片</th>
                  <th scope="col">商品名稱</th>
                  <th scope="col">數量</th>
                  <th scope="col">單價</th>
                  <th scope="col">小計</th>
                  <th scope="col">備註</th>
                  <th class="delect_a" scope="col">刪除</th>
                </tr>
              </thead>
            <tbody>
                <tr>
                  <td class="productCom_A"><figure><img src="images/Parasoltranslucent-skyblue-umbrella_800.png" alt=""></figure></td>
                  <td>我是商品</td>
                  <td>1</td>
                  <td>NT$.1850</td>
                  <td>NT$.1850</td>
                  <td></td>
                  <td><i class="far fa-trash-alt"></i></td>
                </tr>
                <tr>
                  <td class="productCom_A"><figure><img src="images/Parasoltranslucent-skyblue-umbrella_800.png" alt=""></figure></td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td><i class="far fa-trash-alt"></i></td>
                </tr>
            </tbody>
        </table>
        <table class="tablePhone_a">
                <thead class="thead-dark_a">
                    <tr>
                      <th scope="col">商品圖片</th>
                    </tr>
                  </thead>
                <tbody>
                    <tr>
                      <td><figure><img src="images/Parasoltranslucent-skyblue-umbrella_800.png" alt=""></figure></td>
                    </tr>
                    <tr class="producCotent_a">
                      <td><p>商品名稱<span>我是商品</span></p></td>
                    </tr>
                    <tr class="producCotent_a producCotentM_a">
                        <td><p>數量<span>1</span></p></td>
                    </tr>
                    <tr class="producCotent_a producCotentM_a">
                        <td><p>單價<span>NT$.1850</span></p></td>
                    </tr>
                    <tr class="producCotent_a producCotentM_a">
                        <td><p>小計<span>NT$.1850</span></p></td>
                    </tr>
                    <tr class="producCotent_a producCotentM_a">
                        <td><p>備註<span></span></p></td>
                    </tr>
                    <tr class="producCotent_a  producCotentL_a">
                        <td><p>刪除<span></span></p></td>
                    </tr>

                </tbody>
        </table>
        <div class="total_a" data-val="">共 X 件，總金額 NT$. 2400</div>
        <div class="btn_a">
            <button class="shop_a">繼續購物</button>
            <button class="buy_a">立即購買</button>
            <div class="toTop">
                <div class="tr"></div>
                <h5>TOP</h5>
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
<?php include __DIR__.'/module_foot.php' ?>