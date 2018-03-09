<?php include __DIR__.'/module_head.php' ?>
    <style>
        section{
            text-align: center ;
            overflow: hidden ;
            color: #FFF ;
            padding-top: 5% ;
        }
        h1{
            font-size: 72px ;
        }
        h3{
            font-size: 36px ;
        }
        /*Header--------------------------------------------------------*/
        header{
            transition: 0.5s ;
            /* filter: drop-shadow(0 0 1px #0000004d) ; */
        }
        header a{
            transition: 0.5s ;
        }
        /*Left aside--------------------------------------------------------------------*/
        .l_aside{
            position: fixed ;
            justify-content: center ;
            top: 30% ;
            left: -2% ;
            width: 10% ;
            z-index: 5 ;
            color: #FFF ;
            transition: 0.5s ;
            filter: drop-shadow(0 0 1px #0000004d) ;
        }
        .l_aside.hide{
            left: -7% ;
        }
        .scroll_f{
            width: 50px ;
            margin: 0 auto ;
        }
        .scroll h4{
            width: 50px ;
            margin: 0 auto ;
            position: relative ;
            top: 25px ;
            font-size: 12px;
            animation: scroll_word 1s linear infinite;
        }
        .scroll .line_f{
            height: 70px;
            width: 1px;
            background-color: #FFF ;
            opacity: 0.8 ;
            margin: 0 auto ;
            position: relative ;
            top: 18px ;
            transition: 0.5s ;
        }
        .so_f{
            width: 15px ;
            margin: 0 auto ;
            position: relative;
            left: 15px ;
        }
        .so_f .s_f{
            width: 8px;
            height: 8px;
            margin: 5px auto;
            -webkit-mask-image: url(images/icon_scroll.svg) ;
            background-color:#FFF;
            animation: scroll_so .5s linear infinite;
            animation-direction: alternate;
        }.so_f .s_1_f{ 
            animation-delay: .1s;
        }
        .so_f .s_2_f{
            animation-delay: .2s;  
        }
        .so_f .s_3_f{
            animation-delay: .3s;
        }
        .l_aside .item{
            margin-bottom: 15px ;
        }
        .l_aside .left_a{
            position: relative ;
            top: 30px ;
        }
        .l_aside a{
            display: block ;
            color: #FFF ;
            margin: 20px 0 ;
            transition: 0.5s ;
        }
        .l_aside a i{
            font-size: 18px ;
            width: 100% ;
            text-align: center ;
        }
        /*black*/
        .l_aside.black{
            color: #666 ;
        }
        .l_aside.black .scroll .line_f{
            background-color: #666 ;
        }
        .l_aside.black .so_f .s_f{
            background-color: #666 ;
        }
        .l_aside.black a{
            color: #666 ;
        }
       @keyframes scroll_word{
            0% {
                opacity: 1;
                -webkit-transform: translateY(0) rotate(-90deg);
                transform: translateY(0) rotate(-90deg);
            }
            100% {
                opacity: .3;
                -webkit-transform: translateY(6px) rotate(-90deg);
                transform: translateY(6px) rotate(-90deg);
            }
       }
       @keyframes scroll_so {
            0%   { opacity: .2; }
            50%  { opacity: .5; }
            100% { opacity: 1; }
        }
        /*Right aside-------------------------------------------------------------------*/
        .r_aside{
            position: fixed ;
            z-index: 3 ;
            display: flex ;
            top: 45% ;
            right: 0 ;
            padding-right: 20px ; 
            filter: drop-shadow(0 0 1px #0000004d) ;
        }
        .r_aside ul li{
            width: 14px ;
            height: 14px ;
            margin: 18px ;
            border-radius: 50% ;
            background-color: #FFF ;
            opacity: 0.4 ;
            transition: 0.5s ;
            cursor: pointer ;
        }
        .r_aside ul li.smallcircle{
            width: 10px ;
            height: 10px ;
            margin: 18px auto ;
        }
        .r_aside ul li.act{
            opacity: 1 ;
        }
        /*black*/
        .r_aside.black ul li{
            background-color: #666 ;
        }
        /*Container-------------------------------------------------------------------*/
        .fadeOut{
            opacity: 0 ;
        }
        /*Top-------------------------*/
        #top{
            padding-top: 0 ;
        }
        .full{
            width: 100vw ;
            height: 100vh ;
            text-align: center ;
            position: relative ;
            color: #FFF ;
        }
        .rain{
            background-color: #1F5572 ;
        }
        .sun{
            background-color: #F8CF4E ;
            float: right ;
            right: -17px ;
        }
        .full .umbrella{
            width: 80% ;
            padding-bottom: 80% ;
            max-width: 800px ;
            max-height: 800px ;
            margin: 0 auto ;
            position: relative ;
            bottom: -200px ;
            left: -7px ;
            background-size: cover ;
            filter: drop-shadow(0 0 16px #0000004d) ;
        }
        .full .umbrella h2{
            width: 100% ;
            max-width: 800px ;
            margin: 0 auto ;
            font-size: 36px ;
            letter-spacing: 6px ;
            position: absolute ;
            top: 36% ; ;
            z-index: 3 ;
            transition: 0.4s 0.5s ;
            cursor: default ;
        }
        .full.rain h2{
            color: #F8CF4E ;
        }
        .full.sun h2{
            color: #1F5572 ;
        }
        .half{
            width: 50% ;
            height: 100% ;
            overflow: hidden ;
            float: left ;
            transition: 1s ;
        }
        .halfTofull{
            width: 100% ;
        }
        .halfTonull{
            width: 0% ;
        }
        .intro{
            width: 354px ;
            height: 354px ;
            border-radius: 50% ;
            position: absolute ;
            top: 15% ;
            display: flex ;
            align-items: center ;
            transition: 0.5s 0.4s ;
        }
        .intro p{
            width: 65% ;
            height: max-content ;
            margin: 0 auto ;
            line-height: 32px ;
        }
        .intro_r{
            left: 8% ;
            background-color: #1D7FB5 ;
        }
        .intro_l{
            right: 8% ;
            background-color: #E5BD17 ;
        }
        .back{
            width: 26%;
            height: 40% ;
            color: #FFF ;
            font-size: 20px ;
            text-align: center ;
            padding-top: 10px ;
            box-sizing: border-box ;
            bottom: -47% ;
            position: absolute ;
            letter-spacing: 3px ;
        }
        .back_l{
            background-color: #1F5572 ;
            transform: rotateZ(60deg) ;
            transform-origin: right top ;
            cursor: pointer ;
            left: -15%;
        }
        .back_r{
            background-color: #F8CF4E;
            transform: rotateZ(-60deg) ;
            transform-origin: left top ;
            cursor: pointer ;
            right: -15%;
        }
        /*Location----------------------*/
        @keyframes wave{
            0%{
                opacity: 0 ;
            }
            33.3%{
                opacity: 0 ;
            }
            66.6%{
                opacity: 1 ;
            }
            100%{
                opacity: 1 ;
            }
        }
        @keyframes shake {
            50% { transform: rotate(0deg); }
            60% { transform: rotate(8deg); }
            70% { transform: rotate(-8deg); }
            80% { transform: rotate(4deg); }
            90% { transform: rotate(-4deg); }
            100% { transform: rotate(0deg); }
        }
        #location{
            background-image: url(images/home_locatoin.jpg) ;
            background-size: cover ;
            position: relative ;
        }
        #location .phone{
            width: 22% ;
            padding-top: 40% ;
            background-image: url(images/home_phone.svg) ;
            background-size: cover ;
            position: absolute ;
            bottom: -30px ;
            right: 9% ;
        }
        #location .umbrella{
            background-size: cover ;
            width: 36% ;
            /* padding-bottom: 36% ; */
            max-width: 550px ;
            position: absolute ;
            top: 15% ;
            left: 5% ;
            transform-origin:  center ;
            animation: shake 4s infinite ;
        }
        #location .umbrella img{
            transform: rotateZ(-25deg) ;
        }
        /*wave svg*/
        #location svg{
            width: 60px ;
        }
        svg .wave1{
            animation: wave 1.5s infinite ;
        }
        svg .wave2{
            animation: wave 1.5s 0.2s infinite ;
        }
        svg .wave3{
            animation: wave 1.5s 0.4s infinite ;
        }
        #location .umbrella svg{
            transform: rotate(120deg) ;
            position: relative ;
            left: 32% ;
            top: -140px ;
        }
        #location .phone svg{
            position: absolute ;
            top: -60px ;
            left: -60px ;
        }
        .content{
            max-width: 290px ;
            text-align: left ;
            margin: 0 auto ;
            line-height: 32px ;
        }
        .content h3{
            margin-bottom: 50px ;
        }
        #location .content{
            position: relative ;
            left: 2% ;
            top: 30% ;
        }
        /*Light-------------------------*/
        @keyframes float {
            0%{
                transform: translateY(0px) ;
            }
            100%{
                transform: translateY(-20px) ;
            }
        }
        #light{
            background-image: url(images/home_light.jpg) ;
            background-size: cover ;
            position: relative ;
        }
        #light .scale{
            background-image: url(images/home_scale.svg) ;
            background-size: cover ;
            width: 38% ;
            padding-bottom: 28% ;
            position: absolute ;
            bottom: -30px ;
            right: 9% ;
        }
        #light .umbrella{
            background-size: cover ;
            width: 100% ;
            padding-bottom: 100% ;
            max-width: 550px ;
            position: absolute ;
            top: -70% ;
            right: 7% ;
            animation: float 2s linear infinite ;
            animation-direction: alternate;
        }
        #light .umbrella img{
            transform: rotateZ(32deg) ;
        }
        #light .content{
            position: relative ;
            left: -20% ;
            top: 25% ;
        }
        /*Popular-----------------------*/
        #popular{
            display: flex ;
            flex-wrap: wrap ;
            justify-content: center ;
        }
        #popular h4{
            font-size: 24px ;
            font-weight: bold ;
            color: #666 ;
            align-self: baseline ;
        }
        .cards{
            display: flex ;
            justify-content: center ;
            min-width: 100% ;
            margin-top: 10px ;
        }
        #popular .card{
            max-width: 400px ;
            height: auto ;
            display: inline-block ;
            margin: 0 2% ;
            color: #000 ;
        }
        .card .product{
            width: 95% ;
            margin: 0 auto ;
            background-size: cover ;
            position: relative ;
            z-index: 2 ;
        }
        .product img{
            transform: rotate(-20deg) ;
        }
        .product:before{
            position: absolute ;
            top: 5% ;
            left: 11% ;
            content: "" ;
            width: 75% ;
            padding-bottom: 75% ;
            border-radius: 50% ;
            background: #F8CF4E ;
            z-index: -1 ;
        }
        .card .name{
            color: #808080 ;
            border-bottom: 1px solid #808080 ;
            width: 76px ;
            margin: 20px auto ;
            line-height: 24px ;
        }
        .card .price{
            font-size: 18px ;
            font-weight: bold ;
        }
        .toTop{
            color: #1F5572 ;
            position: relative ;
            top: 15px ;
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
        }
        @keyframes scroll_top {
            0%   { opacity: .2; top: 2px; }
            50%  { opacity: .5; }
            100% { opacity: 1; top: -4px ;}
        }
        /*下雨動畫----------------------------------------------------*/
        .rain svg{
            position: absolute;
            left: 20px;
        }
        /*太陽動畫---------------------------------------------------*/
       .sun svg{
            position: absolute;
            left: -80px;
            top: -86px; 
        }
        .sunlight_f{
            opacity: 0;
            height:0;
        }
        .sunlight1_f{
            animation: shine 1.5s linear  2.5s infinite alternate;
        }
        .sunlight2_f{
            animation: shine 1.5s linear  3.1s infinite alternate;
        }
        .sunlight3_f{
            animation: shine 1.5s linear  2.7s infinite alternate;
        }
        .sunlight4_f{
            animation: shine 1.5s linear  2.9s infinite alternate;
        }
        .sunlight5_f{
            animation: shine 1.5s linear  2.5s infinite alternate;
        }
        .sunlight6_f{
            animation: shine 1.5s linear  2.8s infinite alternate;
        }
        @keyframes shine{
            0% {
                opacity: 1;
            }
            33.3%{
                opacity: .7;
            }
            66.6%{
                opacity: .4;
            }
            100%{
                opacity: .1;
            }
        }
    </style>
    <style>
        @import url("css/home_phone.css");
    </style>
    <?php include __DIR__.'/module_nav.php' ?>
    <aside class="l_aside">
        <div class="scroll item">
            <div class="scroll_f">
                <h4>Scroll</h4>
                <div class="so_f">
                    <div class="s_f s_1_f"></div>
                    <div class="s_f s_2_f"></div>
                    <div class="s_f s_3_f"></div>
                </div>
                <div class="line_f"></div>
            </div>
        </div>
        <div class="item left_a">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
        </div>      
    </aside>
    <aside class="r_aside">
        <ul>
            <li class="act"></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="smallcircle"></li>
        </ul>
    </aside>
    <div id="container">
        <section id="top">
            <div class="half rain_half">
                <div class="rain full">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                        width="1580" height="833" x="0" y="0"  xml:space="preserve" enable-background="new 0 0 400 400">
                        <style type="text/css"> .cls-1{fill:#83D6FF; display: inline;}</style>
                        <g id="rain1" class="rain1">
                                <path class="cls-1" d="M1537,102.67s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1537,102.67,1537,102.67Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1471,171.05s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1471,171.05,1471,171.05Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1537,442.77s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1537,442.77,1537,442.77Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1264.22,356.39s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1264.22,356.39,1264.22,356.39Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1116.88,408.46s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1116.88,408.46,1116.88,408.46Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M992.78,763.75s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S992.78,763.75,992.78,763.75Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1413.19,494.36s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1413.19,494.36,1413.19,494.36Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M748.37,277.09s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S748.37,277.09,748.37,277.09Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1026.87,87.06s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1026.87,87.06,1026.87,87.06Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M839.87,36.46s-5.08,8.29-5.08,12.54,2.28,6,5.08,6S845,53.39,845,49,839.87,36.46,839.87,36.46Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M676.71,96.34s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S676.71,96.34,676.71,96.34Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M944,256.52S939,264.81,939,269.06s2.28,6,5.08,6,5.08-1.63,5.08-6S944,256.52,944,256.52Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M638.78,231.33s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S638.78,231.33,638.78,231.33Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M592.86,442.77s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S592.86,442.77,592.86,442.77Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M758.54,417.74s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S758.54,417.74,758.54,417.74Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M706.54,728.14s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S706.54,728.14,706.54,728.14Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M533.54,605s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S533.54,605,533.54,605Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M363.78,535.77s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S363.78,535.77,363.78,535.77Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M296.84,682.36s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S296.84,682.36,296.84,682.36Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M130.85,754.44s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S130.85,754.44,130.85,754.44Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M210.64,526.49s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S210.64,526.49,210.64,526.49Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M59.9,465.81s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S59.9,465.81,59.9,465.81Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M368.87,341.66s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S368.87,341.66,368.87,341.66Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M296.84,155.31s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S296.84,155.31,296.84,155.31Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M100,348.54s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S100,348.54,100,348.54Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M133.94,57.82s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S133.94,57.82,133.94,57.82Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M404.87,198.57s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S404.87,198.57,404.87,198.57Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1280,164.59s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1280,164.59,1280,164.59Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1433.57,763.75s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1433.57,763.75,1433.57,763.75Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1133.66,728.14s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1133.66,728.14,1133.66,728.14Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1372,660.89s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1372,660.89,1372,660.89Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1098.87,522s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1098.87,522,1098.87,522Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M862.68,605s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S862.68,605,862.68,605Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1298.77,65.33s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1298.77,65.33,1298.77,65.33Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1492.2,265.8s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1492.2,265.8,1492.2,265.8Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1449.53,365.67s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1449.53,365.67,1449.53,365.67Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1411.2,126.55s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1411.2,126.55,1411.2,126.55Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1248.87,262.16s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1248.87,262.16,1248.87,262.16Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1336.86,564.69s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1336.86,564.69,1336.86,564.69Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M801.51,500s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S801.51,500,801.51,500Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M482.06,419.74s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S482.06,419.74,482.06,419.74Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M406.87,623.72s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S406.87,623.72,406.87,623.72Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M590.87,678.72s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S590.87,678.72,590.87,678.72Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M262.86,760.08s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S262.86,760.08,262.86,760.08Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M128.86,527.65s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S128.86,527.65,128.86,527.65Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M201.11,387.24s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S201.11,387.24,201.11,387.24Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M837.87,258.52s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S837.87,258.52,837.87,258.52Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M908.4,744.3s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S908.4,744.3,908.4,744.3Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1338.85,733.78s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1338.85,733.78,1338.85,733.78Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1174.86,83.42s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1174.86,83.42,1174.86,83.42Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1356.48,409.62s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1356.48,409.62,1356.48,409.62Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M957.54,531.29s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S957.54,531.29,957.54,531.29Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1074.5,330.3s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1074.5,330.3,1074.5,330.3Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M944,150.83s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S944,150.83,944,150.83Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M478.29,498.59s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S478.29,498.59,478.29,498.59Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M689.33,344.06s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S689.33,344.06,689.33,344.06Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M545,116.43s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S545,116.43,545,116.43Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M245.1,258.85s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S245.1,258.85,245.1,258.85Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M206.87,656.41s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S206.87,656.41,206.87,656.41Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1208.76,649.53s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1208.76,649.53,1208.76,649.53Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1547.28,741.06s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1547.28,741.06,1547.28,741.06Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1403.66,231.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1403.66,231.33,1403.66,231.33Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1133.66,180.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1133.66,180.33,1133.66,180.33Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M784.4,130.19s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S784.4,130.19,784.4,130.19Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M59.9,137.07s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S59.9,137.07,59.9,137.07Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M900.87,373.48s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S900.87,373.48,900.87,373.48Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M689.33,554.57s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S689.33,554.57,689.33,554.57Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M351.85,67.1s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S351.85,67.1,351.85,67.1Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M508.25,258.85s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S508.25,258.85,508.25,258.85Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M296.84,461.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S296.84,461.33,296.84,461.33Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M416.83,713.32s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S416.83,713.32,416.83,713.32Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M82.35,642.65s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S82.35,642.65,82.35,642.65Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M819.71,714.38s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S819.71,714.38,819.71,714.38Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M146.56,194.09S139,206.39,139,212.68s3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S146.56,194.09,146.56,194.09Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1034.4,656.41s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1034.4,656.41,1034.4,656.41Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1231.66,461.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1231.66,461.33,1231.66,461.33Z" transform="translate(-52.36 -36.46)"/>
                                <path class="cls-1" d="M1484.66,568.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1484.66,568.33,1484.66,568.33Z" transform="translate(-52.36 -36.46)"/>
                            </g>
                        <g id="rain2" class="rain2">
                            <path class="cls-1" d="M1537,102.67s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1537,102.67,1537,102.67Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1471,171.05s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1471,171.05,1471,171.05Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1537,442.77s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1537,442.77,1537,442.77Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1264.22,356.39s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1264.22,356.39,1264.22,356.39Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1116.88,408.46s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1116.88,408.46,1116.88,408.46Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M992.78,763.75s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S992.78,763.75,992.78,763.75Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1413.19,494.36s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1413.19,494.36,1413.19,494.36Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M748.37,277.09s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S748.37,277.09,748.37,277.09Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1026.87,87.06s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1026.87,87.06,1026.87,87.06Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M839.87,36.46s-5.08,8.29-5.08,12.54,2.28,6,5.08,6S845,53.39,845,49,839.87,36.46,839.87,36.46Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M676.71,96.34s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S676.71,96.34,676.71,96.34Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M944,256.52S939,264.81,939,269.06s2.28,6,5.08,6,5.08-1.63,5.08-6S944,256.52,944,256.52Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M638.78,231.33s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S638.78,231.33,638.78,231.33Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M592.86,442.77s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S592.86,442.77,592.86,442.77Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M758.54,417.74s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S758.54,417.74,758.54,417.74Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M706.54,728.14s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S706.54,728.14,706.54,728.14Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M533.54,605s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S533.54,605,533.54,605Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M363.78,535.77s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S363.78,535.77,363.78,535.77Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M296.84,682.36s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S296.84,682.36,296.84,682.36Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M130.85,754.44s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S130.85,754.44,130.85,754.44Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M210.64,526.49s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S210.64,526.49,210.64,526.49Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M59.9,465.81s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S59.9,465.81,59.9,465.81Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M368.87,341.66s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S368.87,341.66,368.87,341.66Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M296.84,155.31s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S296.84,155.31,296.84,155.31Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M100,348.54s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S100,348.54,100,348.54Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M133.94,57.82s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S133.94,57.82,133.94,57.82Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M404.87,198.57s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S404.87,198.57,404.87,198.57Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1280,164.59s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1280,164.59,1280,164.59Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1433.57,763.75s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1433.57,763.75,1433.57,763.75Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1133.66,728.14s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1133.66,728.14,1133.66,728.14Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1372,660.89s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1372,660.89,1372,660.89Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1098.87,522s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S1098.87,522,1098.87,522Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M862.68,605s-5.08,8.29-5.08,12.54,2.28,6,5.08,6,5.08-1.63,5.08-6S862.68,605,862.68,605Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1298.77,65.33s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1298.77,65.33,1298.77,65.33Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1492.2,265.8s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1492.2,265.8,1492.2,265.8Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1449.53,365.67s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1449.53,365.67,1449.53,365.67Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1411.2,126.55s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1411.2,126.55,1411.2,126.55Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1248.87,262.16s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1248.87,262.16,1248.87,262.16Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1336.86,564.69s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1336.86,564.69,1336.86,564.69Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M801.51,500s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S801.51,500,801.51,500Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M482.06,419.74s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S482.06,419.74,482.06,419.74Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M406.87,623.72s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S406.87,623.72,406.87,623.72Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M590.87,678.72s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S590.87,678.72,590.87,678.72Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M262.86,760.08s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S262.86,760.08,262.86,760.08Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M128.86,527.65s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S128.86,527.65,128.86,527.65Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M201.11,387.24s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S201.11,387.24,201.11,387.24Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M837.87,258.52s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S837.87,258.52,837.87,258.52Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M908.4,744.3s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S908.4,744.3,908.4,744.3Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1338.85,733.78s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1338.85,733.78,1338.85,733.78Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1174.86,83.42s-2,3.25-2,4.92.89,2.36,2,2.36,2-.64,2-2.36S1174.86,83.42,1174.86,83.42Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1356.48,409.62s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1356.48,409.62,1356.48,409.62Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M957.54,531.29s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S957.54,531.29,957.54,531.29Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1074.5,330.3s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1074.5,330.3,1074.5,330.3Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M944,150.83s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S944,150.83,944,150.83Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M478.29,498.59s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S478.29,498.59,478.29,498.59Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M689.33,344.06s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S689.33,344.06,689.33,344.06Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M545,116.43s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S545,116.43,545,116.43Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M245.1,258.85s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S245.1,258.85,245.1,258.85Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M206.87,656.41s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S206.87,656.41,206.87,656.41Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1208.76,649.53s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1208.76,649.53,1208.76,649.53Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1547.28,741.06s-3.77,6.15-3.77,9.3,1.69,4.47,3.77,4.47,3.77-1.21,3.77-4.47S1547.28,741.06,1547.28,741.06Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1403.66,231.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1403.66,231.33,1403.66,231.33Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1133.66,180.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1133.66,180.33,1133.66,180.33Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M784.4,130.19s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S784.4,130.19,784.4,130.19Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M59.9,137.07s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S59.9,137.07,59.9,137.07Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M900.87,373.48s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S900.87,373.48,900.87,373.48Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M689.33,554.57s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S689.33,554.57,689.33,554.57Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M351.85,67.1s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S351.85,67.1,351.85,67.1Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M508.25,258.85s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S508.25,258.85,508.25,258.85Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M296.84,461.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S296.84,461.33,296.84,461.33Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M416.83,713.32s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S416.83,713.32,416.83,713.32Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M82.35,642.65s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S82.35,642.65,82.35,642.65Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M819.71,714.38s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S819.71,714.38,819.71,714.38Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M146.56,194.09S139,206.39,139,212.68s3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S146.56,194.09,146.56,194.09Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1034.4,656.41s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1034.4,656.41,1034.4,656.41Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1231.66,461.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1231.66,461.33,1231.66,461.33Z" transform="translate(-52.36 -36.46)"/>
                            <path class="cls-1" d="M1484.66,568.33s-7.54,12.29-7.54,18.59,3.38,8.93,7.54,8.93,7.54-2.41,7.54-8.93S1484.66,568.33,1484.66,568.33Z" transform="translate(-52.36 -36.46)"/>
                        </g>
                    </svg> 

                    <div class="umbrella">
                        <img src="images/home_umbrella_y.png" alt="">
                        <h2>Be Your Unique Unbrella.</h2>
                    </div>
                    <div class="intro intro_r fadeOut">
                        <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝
                        相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝</p>
                    </div>
                    <div class="back_r back">BACK</div>
                </div>
            </div>
            <div class="half">
                <div class="sun full">

                     <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="1570" height="880" viewBox="0 0 1570 833" style="enable-background:new 0 0 1580 833;" xml:space="preserve">
                        <defs><style>.cls-3{fill:#fff8b8;}</style></defs>
                        <g id="sun">
                            <rect class="cls-3 sunlight1_f sunlight_f" x="415.27" y="-216.12" width="22.82" height="950.52" transform="translate(445.24 -239.72) rotate(60.86)"/>
                            <rect class="cls-3 sunlight1_f sunlight_f" x="438.84" y="-212.11" width="2.42" height="972.31" transform="translate(413 -211) rotate(59.5)"/>
                            <rect class="cls-3 sunlight2_f sunlight_f" x="490.14" y="-194.81" width="36.78" height="1329.43" transform="translate(521.08 -222.37) rotate(48.3)"/>
                            <rect class="cls-3 sunlight3_f sunlight_f" x="866.89" y="-134.78" width="6.44" height="877.85" transform="translate(492.65 -536.76) rotate(46.56)"/>
                            <rect class="cls-3 sunlight4_f sunlight_f" x="979.46" y="-76.73" width="5.8" height="759.48" transform="translate(418.33 -556.47) rotate(39.58)"/>
                            <rect class="cls-3 sunlight4_f sunlight_f" x="1002.28" y="-60.98" width="20" height="721.46" transform="translate(423.11 -576.29) rotate(39.58)"/>
                            <rect class="cls-3 sunlight5_f sunlight_f" x="1125.91" y="-10.67" width="36.78" height="658.56" transform="translate(301.98 -495.79) rotate(28.03)"/>
                            <rect class="cls-3 sunlight6_f sunlight_f" x="1389.8" y="30.68" width="22.82" height="892.87" transform="translate(86.42 -202.86) rotate(8.54)"/>
                            <rect class="cls-3 sunlight6_f sunlight_f" x="1419.38" y="33.7" width="2.26" height="894.81" transform="translate(82 -200) rotate(8)"/> 
                        </g>
                    </svg>

                    <div class="umbrella">
                        <img src="images/home_umbrella_b.png" alt="">
                        <h2>Be Your Unique Unbrella.</h2>
                    </div>
                    <div class="intro intro_l fadeOut">
                        <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝
                        相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝</p>
                    </div>
                    <div class="back_l back">BACK</div>
                </div>
            </div>
        </section>
        <section class="clear" id="location">
            <div>
                <div class="umbrella">
                    <img src="images/home_umbrella_y.png" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.45 106.45">
                        <defs>
                            <style>.cls-2{fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:5px;}</style>
                        </defs>
                        <title>資產 2</title>
                        <g id="圖層_2" data-name="圖層 2">
                            <g id="圖層_1-2" data-name="圖層 1">
                                <path class="cls-2 wave3" d="M2.5,103.95A101.45,101.45,0,0,1,103.95,2.5"/>
                                <path class="cls-2 wave2" d="M32.21,103.95a71.73,71.73,0,0,1,71.73-71.73"/>
                                <path class="cls-2 wave1" d="M64.17,103.95a39.78,39.78,0,0,1,39.78-39.78"/>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="phone">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.45 106.45">
                    <defs>
                        <style>.cls-2{fill:none;stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:5px;}</style>
                    </defs>
                    <title>資產 2</title>
                    <g id="圖層_2" data-name="圖層 2">
                        <g id="圖層_1-2" data-name="圖層 1">
                            <path class="cls-2 wave3" d="M2.5,103.95A101.45,101.45,0,0,1,103.95,2.5"/>
                            <path class="cls-2 wave2" d="M32.21,103.95a71.73,71.73,0,0,1,71.73-71.73"/>
                            <path class="cls-2 wave1" d="M64.17,103.95a39.78,39.78,0,0,1,39.78-39.78"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="content">
                <h3>定位系統</h3>
                <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今江東逝水，白髮漁樵江渚上，古今</p>
            </div>
        </section>
        <section class="" id="light">
               <div class="scale">
                    <div class="umbrella">
                <img src="images/home_umbrella_light.png" alt="">
            </div>
               </div>
             
            <div class="content">
                <h3>極輕</h3>
                <p>青山依舊在，幾度夕陽紅。慣看秋月春風。一壺濁酒喜相逢，浪花淘盡英雄。是非成敗轉頭空，滾滾長江東逝水，白髮漁樵江渚上，古今江東逝水，白髮漁樵江渚上，古今</p>
            </div>
        </section>
        <section id="popular">
            <h4>人氣商品</h4>
            <div class="cards">
               <div class="card">
                    <div class="product">
                        <img src="images/home_umbrella_b.png" alt="">
                    </div>
                    <p class="name">夏日風情</p>
                    <p class="price">NT. 1980</p>
                </div>
                <div class="card">
                    <div class="product">
                        <img src="images/home_umbrella_b.png" alt="">
                    </div>
                    <p class="name">夏日風情</p>
                    <p class="price">NT. 1980</p>
                </div>
                <div class="card">
                    <div class="product">
                        <img src="images/home_umbrella_b.png" alt="">
                    </div>
                    <p class="name">夏日風情</p>
                    <p class="price">NT. 1980</p>
                </div> 
            </div>
            <div class="toTop">
                <div class="tr"></div>
                <h5>TOP</h5>
            </div>
        </section>
    </div>
    <?php include __DIR__.'/module_footer.php' ?>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script>
        var $Header=$("header"),
            $Laside=$(".l_aside"),
            $Raside=$(".r_aside"),
            $Half=$(".half"),
            $Back=$(".back"),
            $Totop=$(".toTop");
        var Ttop=$("#top").offset().top ,
            Tlocation=$("#location").offset().top ,
            Tlight=$("#light").offset().top ,
            Tpopular=$("#popular").offset().top ,
            Tfooter=$("footer").offset().top ,
            full=$("body").height();
        var nowscrollTop=$(window).scrollTop();
        //console.log(Ttop,Tlocation,Tlight,Tpopular,Tfooter,full) ;
        var position=[Ttop,Tlocation,Tlight,Tpopular,Tpopular+(full-Tfooter)];
        var nowPosition=0;
        var log;
        var scrolllast;
        var ifact=false ;
        function addBlack(){
            $Header.addClass("black");
            $Laside.addClass("black");
            $Raside.addClass("black");
        }
        function removeBlack(){
            $Header.removeClass("black");
            $Laside.removeClass("black");
            $Raside.removeClass("black");
        }
        function rightAct(now){
            $(".r_aside ul li").eq(now).addClass("act").siblings().removeClass("act");
        }
        function fullpageScroll(now){
            $("html,body").animate({
                    scrollTop:position[nowPosition]
                },1000,function(){
                    ifact=false;
                    if(now>=3){
                        addBlack();
                    }else{
                        removeBlack();
                    }
                    if(now>3){
                        $Laside.addClass("hide");
                    }else{
                        $Laside.removeClass("hide");
                    }
            });
            rightAct(now);
        }
        /*手機hideNav*/
        function hideNav(){
            $(window).scroll(function(){
                var scrollNow=$(this).scrollTop();
                // console.log(scrollNow);
                if(scrollNow>=position[1]-65){
                    addBlack();
                }else{
                    removeBlack();
                }
                if (scrollNow<=65) {  //在80以內不會縮回
                    $Header.removeClass("hide");
                } else {
                    if (scrollNow>scrolllast) {
                        $Header.addClass("hide");
                    } else {
                        $Header.removeClass("hide");
                    }
                }
                scrolllast=scrollNow;
            });
        }
        /*滾輪事件*/
        function mouseWheel(){
            $(document).on('DOMMouseScroll mousewheel',function(e){
                //火狐以外 => mousewheel
                //火狐 => DOMMouseScroll
                e.preventDefault();
                log=e.originalEvent.wheelDelta || -e.originalEvent.detail;
                if(log<0 && !ifact){
                    // console.log("down");
                    nowPosition++;
                    ifact=true;
                    if(nowPosition>4) {
                        nowPosition=4;
                        ifact=false;
                    }else{
                        fullpageScroll(nowPosition);
                    }
                }else if(log>0 && !ifact){
                    // console.log("up");
                    nowPosition--;
                    ifact=true;
                    if(nowPosition<0) {
                        nowPosition=0;
                        ifact=false;
                    }else{
                        fullpageScroll(nowPosition);
                    }
                }
            });
        }
        $(document).ready(function(){ 
            // console.log($(window).width());
            /*目前位置*/
            switch (nowscrollTop) {
                case Ttop:
                    nowPosition=0;
                    rightAct(nowPosition);
                    break;
                case Tlocation:
                    nowPosition=1;
                    rightAct(nowPosition);
                    break;
                case Tlight:
                    nowPosition=2;
                    rightAct(nowPosition);
                    break;
                case Tpopular:
                    nowPosition=3;
                    rightAct(nowPosition);
                    addBlack();
                    break;
                default:
                    nowPosition=4;
                    rightAct(nowPosition);
                    addBlack();
                    $Laside.addClass("hide");
                    break;
            }
            /*手機*/
            if($(window).width()<376){
                hideNav();
            }else{
                mouseWheel();
            }
        });
        /*Top*/
        $Half.click(function(){
            $(this).addClass("halfTofull").siblings().addClass("halfTonull");
            $(".half h2").addClass("fadeOut");
            $(this).find(".intro").removeClass("fadeOut");
        });
        $Back.click(function(e){
            $(this).closest(".half").removeClass("halfTofull").siblings().removeClass("halfTonull");
            $(".half h2").removeClass("fadeOut");
            $(this).closest(".half").find(".intro").addClass("fadeOut");
            e.stopPropagation();    //不讓父元素動作(阻止事件冒泡)
        });
        /*right aside*/
        $(".r_aside ul").on("click","li",function(){
            nowPosition=$(this).index();
            fullpageScroll(nowPosition);
        });
        /*to top*/
        $Totop.click(function(){
            nowPosition=0 ;
            fullpageScroll(nowPosition);
        });
        //下雨
        $(document).ready(function(){
        TweenMax.set(".rain2", {y:-700});
        TweenMax.to(".rain1, .rain2 ", 2 , {y:"+=700", repeat:-1, ease:Linear.easeNone});
        });
        //太陽
        var tmax_options = { delay: 0}
        var tl = new TimelineMax(tmax_options);
           function light (){
               
                tl.to(".sunlight1_f, .sunlight3_f, .sunlight5_f",1.8, {opacity:1,height:1300, ease:Linear.easeNone})
                  .to(".sunlight2_f, .sunlight4_f, .sunlight6_f",1.8, {opacity:1,height:1300, ease:Linear.easeNone},1.2)
            }    
        light ();
    </script>
<?php include __DIR__.'/module_foot.php' ?>