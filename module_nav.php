<header>
    <h1><a href="home.php"></a></h1>
    <ul class="h_ul">
        <li><a class="member" href="member_center.php"></a></li>
        <li><a class="cart" href="cartList.php"></a></li>
        <li><a class="hamburger"></a></li>
    </ul>
</header>
<nav class="navhide">
    <div class="close"></div>
    <ul class="n_ul">
        <li><a href="introduce.php">品牌介紹</a></li>
        <li><a href="product_list.php">產品</a></li>
        <li><a href="new.php">最新消息</a></li>
        <li><a href="">顧客服務</a></li>
        <li><a href="member_center.php">會員中心</a></li>
        <li><a href="contact.php">聯絡我們</a></li>
        <li><a href="store.php">門市資訊</a></li>
        <li><a href="qa.php">Q&amp;A</a></li>
    </ul>
</nav>
<script>
    var $Nav=$("nav"),
        $Hamburger=$(".hamburger"),
        $Close=$(".close");
    /*Hamburger*/
    $Hamburger.click(function(){
        $Nav.removeClass("navhide");
    });
    $Close.click(function(){
        $Nav.addClass("navhide");
    });
</script>