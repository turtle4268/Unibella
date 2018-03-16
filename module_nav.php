<div id="lightbox_f">
    <div id="lightbox-panel_f">
        <p>帳號或密碼錯誤</p>
        <a id="close-panel_f">我知道了</a>
    </div>
</div>
<header>
    <h1><a href="home.php"></a></h1>
    <ul class="h_ul">
<?php if(isset($_SESSION['user'])): ?>
        <li><a class="logout" href="logout.php"></a></li>
<?php else: ?>
        <li><a class="member" href="member_login.php"></a></li>
<?php endif; ?>
        <li><a class="cart" href="cartList.php"></a><span class="itemCount">99</span></li>
        <li><a class="hamburger"></a></li>
    </ul>
</header>
<nav class="navhide">
    <div class="close"></div>
    <ul class="n_ul">
        <li><a href="introduce.php">品牌介紹</a></li>
        <li><a href="product_list3.php">產品</a></li>
        <li><a href="new.php">最新消息</a></li>
        <li><a href="member_center.php">會員中心</a></li>
        <li><a href="store.php">門市資訊</a></li>
        <li><a href="fix.php">顧客服務</a></li>
        <li><a href="contact.php">聯絡我們</a></li>
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
    /*Light box*/
    $("#close-panel_f").click(function(){
        $(this).closest("#lightbox_f").hide();
    });
    /*count item cart*/
    var itemCount=$(".itemCount");
    itemCount.hide();
    var countItems=function(obj){
        itemCount.hide();
        var sum=0;
        for(var s in obj){
            sum+= obj[s];
        }
        itemCount.text(sum);
        itemCount.fadeIn();
        if(sum==0) {
            itemCount.hide();
        }
    };
    /*love count */
    // var countLoves=function(obj){
    //     var sum=0;
    //     for(var s in obj){
    //         sum+= obj[s];
    //     }
    //     console.log(sum);
    //     return sum;

    // };
    $.get('add_to_cart.php',function(data){
        countItems(data);
    },'json');
</script>