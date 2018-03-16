<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unibella</title>
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <link rel="icon" href="images/small_logo.ico" type="image/ico" />
    <script src="http://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <style>
        @import url("css/sample_phone.css");
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
        a{
            cursor: pointer ;
        }
        img{
            width: 100% ;
        }
        section{
            width: 100vw ;
            max-width: 100% ;
            height: 100vh ;
            background-color: #FFF ;
        }
     /*Header--------------------------------------------------------*/
        header{
            position: fixed ;
            z-index: 5 ;
            width: 100% ;
            height: 80px ;
            display: flex ;
            justify-content: space-between ;
            color: #FFF ;
            padding: 0 40px ;
            padding-top: 28px ;
            /* box-sizing: border-box ; */
            transition: 0.5s ;
            top: 0 ;
        }
        header a{
            background-color: #FFF ;
            transition: 0.5s ;
        }
        header h1 a{
            display: block ;
            width: 145px ;
            height: 43px ;
            -webkit-mask-image: url(images/logo_new.svg) ;
            margin-top: -12px ;
        }
        .h_ul li{
            display: inline-block ;
            padding: 0 15px ;
        }
        .h_ul li a{
            display: block ;
            width: 25px ;
            height: 25px ;
            cursor: pointer ;
            -webkit-mask-repeat: no-repeat ;
            -webkit-mask-position: center ;
        }
        .logout{
            -webkit-mask-image: url(images/logout.svg) ;
        }
        .member{
            -webkit-mask-image: url(images/icon_MEMBER.svg) ;
        }
        .cart{
            -webkit-mask-image: url(images/icon_CART.svg) ;
        }
        .hamburger{
            -webkit-mask-image: url(images/icon_MENU.svg) ;
        }
        header.hide{
            top: -100px ;
        }
        /*Black*/
        header.black{
            color: #666 ;
            background-color: #ffffffcc ;
        }
        header.black a{
            background-color: #666 ;
        }
    /*Footer-------------------------------------------------------------*/
        footer{
            background-color: #CCC ;
            color: #FFF ;
        }
        .f_content{
            display: flex ;
            padding: 40px ;
        }
        .f_quarter{
            width: 25% ;
            display: flex ;
            justify-content: center ;
            align-items: center ;
            border-right: 1px solid #FFF ;
            flex: 1 ;
            font-size: 16px ;
        }
        .f_quarter h2 a{
            display: block ;
            width: 120px ;
            height: 36px ;
            -webkit-mask-image: url(images/logo_new.svg) ;
            background-color: #FFF ;
        }
        .f_quarter.between{
            justify-content: space-around ;
        }
        .f_quarter.border_none{
            border: none ;
            flex: 1.5 ;
            flex-wrap: wrap ;
        }
        .f_quarter.border_none .mail{
            width: 265px ;
            height: 30px ;
            border: 2px solid #FFF ;
            border-radius: 28px ;
            margin: 16px 0 ;
            display: flex ;
            justify-content: center ;
            align-items: center ;
        }
        .mail .einput{
            width: 210px ;
            height: 24px ;
            margin-left: 5px ;
            font-size: 16px ;
            letter-spacing: normal ;
            border: none ;
            background: #CCC ;
        }
        .mail .einput:focus{
            color: #FFF ;
            outline: none ;
        }
        .mail .eput{
            display: inline-block ;
            padding: 0 5px ;
        }
        .mail .eput i{
            font-size: 26px ;
        }
        .f_quarter a{
            display: block ;
            color: #FFF ;
            padding: 9px 0px ;
        }
        .f_quarter a.aicon{
            display: inline-block ;
            margin: 20px ;
        }
        .f_quarter a.aicon i{
            font-size: 28px ;
        }
        .f_quarter a.fb{
            margin-left: 0 ;
        }
        .f_quarter a.fb i{
            font-size: 24px ;
        }
        .foot{
            text-align: center ;
            font-size: 12px ;
            background-color: #999 ;
            padding: 12px ;
            border-top: 1px solid #FFF ;
        }
    /*Nav--------------------------------------------------------------*/
        nav{
            position: fixed ;
            z-index: 10 ;
            display: flex ;
            width: 20% ;
            height: 100vh ;
            top: 0 ;
            right: 0 ;
            text-align: center ;
            background-color: #ffffffcc ;
            transition: 1s ;
        }
        nav.navhide{
            right: -20% ;
        }
        nav .close{
            width: 25px ;
            height: 25px ;
            position: absolute ;
            top: 28px ;
            right: 56px ;
            cursor: pointer ;
            background: url(images/X.svg) center center no-repeat ;
        }
        .n_ul{
            width: 100% ;
            margin: 0 auto ;
            align-self: center ;
        }
        .n_ul li{
            display: flex ;
            align-content: center ;
            /* margin: 4px 0 ;  */
        }
        .n_ul li a{
            display: block ;
            width: 100% ;
            padding: 12px ;
            color: #666 ;
            font-size: 18px ;
            position: relative ;
        }
        .n_ul li a::before{
            content: "" ;
            position: absolute ;
            width: 0% ;
            height: 100% ;
            left: 0 ;
            top: 0 ;
            z-index: -1 ;
            background-color: #CCC;
            transition: 0.4s ;
        }
        .n_ul li a:hover::before{
            width: 100% ;
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
    