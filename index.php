<?php 
    session_start();
    unset($_SESSION['seepass']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unibella</title>
    <style>
        *{
            margin: 0 ;
            padding: 0 ;
            list-style-type: none ;
            text-decoration: none ;
            font-family: "微軟正黑體" ;
            font-weight: normal ;
            letter-spacing: 3px ;
            box-sizing: border-box ;
        }
        #container{
            width: 100% ;
            height: 100vh ;
            background-color: #1F5572 ;
            display: flex ;
            justify-content: center ;
            align-items: center ;
        }
        p{
            color: #F8CF4E ;
            text-align: center ;
            margin-bottom: 15px ;
        }
        a{
            display: block ;
            cursor: pointer ;
            background-color: transparent;
            font-size: 16px ;
            color: #f8cf4e;
            border: 2px solid #f8cf4e;
            border-radius: 50px;
            padding: 5px 50px;
            margin-top: 20px;
            transition: 0.3s ;
        }
        a:hover{
            background-color: #f8cf4e;
            color: #1f5572;           
            border: 2px solid #f8cf4e;
        }
        /*lightbox---------------------------------------*/
        #lightbox_f {
            display:none;
            background: #ffffff90;
            position:fixed;
            top:0px;
            left:0px;
            min-width:100%;
            min-height:100%;
            z-index:15;
        }
        #lightbox-panel_f p{
            color:#1F5572;
            text-align:center;
            font-weight:bold;
            margin :50px 0 30px;
        }
        #lightbox-panel_f a{
            text-decoration: none;
            color: #fff;
            background:#1F5572;
            padding:10px 20px;
            box-sizing:content-box;
            border-radius:30px;
            display:block;
            width:100px;
            margin: 0 auto;
            text-align:center;
            }
        
        #lightbox-panel_f {
            /* display:none; */
            position:fixed;
            top:50%;
            left:50%;
            margin-left:-200px;
            margin-top:-100px;
            width:400px;
            height:200px;
            background:#FFFFFF;
            z-index:16;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, .3) ;
        }
    </style>
</head>
<body>
    <div id="lightbox_f">
        <div id="lightbox-panel_f">
            <p>帳號或密碼錯誤</p>
            <a id="close-panel_f">我知道了</a>
        </div>
    </div>
    <div id="container">
        <div class="pass">
            <p>請輸入登入碼:</p>
            <input type="password" name="" id="seepass">
            <a class="sent">送出</a>
        </div>
    </div>
</body>
<script src="http://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script>
    /*Light box*/
    $("#close-panel_f").click(function(){
        $(this).closest("#lightbox_f").hide();
    });
    $(".sent").click(function(){
        var seepass=$("#seepass").val();
        if(seepass=="guava"){
            $.get("add_pass.php",{seepass:seepass},function(data){
                // console.log(data);
                if(data=="1"){
                    // console.log("1");
                    location.href="./home.php";
                }else{
                    // console.log("0");
                }
            });
        }else{
            $("#lightbox_f").find("#lightbox-panel_f p").text("密碼錯誤");
            $("#lightbox_f").show();
        }
    
    });
</script>
</html>