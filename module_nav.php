<header>
    <h1><a href="./home.html"></a></h1>
    <ul class="h_ul">
        <li><a class="member"></a></li>
        <li><a class="cart"></a></li>
        <li><a class="hamburger"></a></li>
    </ul>
</header>
<nav class="navhide">
    <div class="close"></div>
    <ul class="n_ul">
        <li><a href="introduce.html">品牌介紹</a></li>
        <li><a href="product_list.php">產品</a></li>
        <li><a href="new.html">最新消息</a></li>
        <li><a href="">顧客服務</a></li>
        <li><a href="">會員中心</a></li>
        <li><a href="contact.html">聯絡我們</a></li>
        <li><a href="">相關連結</a></li>
        <li><a href="qa.html">Q&amp;A</a></li>
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