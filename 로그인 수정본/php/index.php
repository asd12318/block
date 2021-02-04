<!-- <<?php
include "./intro_db.php";
 ?> -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shorcut icon" href="../imges/파비콘.png">
    <link rel="icon" href="../imges/파비콘.png">
    <title>Photogram</title>

    <link rel="stylesheet" href="../css/index.css">
    <script src="../lib/jquery-3.5.1.js"></script>
    <script src="../js/index.js"></script>
</head>
<body>
    <div id="header">
        <div id="logo"><a href="../index.html"> <img src="../imges/logo.jpg" alt=""></a></div>
        <div id='login'><button onclick="" id="login_btn">Logout</button></div>
    </div>

    <div id="container">
        <div class="photo_box">
            <button id="prev" ></button>

            <div class="rolling_panel">
                <ul>
                    <li >
                        <img src="../imges/꽃.jpg" >
                        <div class="desc"><b>꽃</b><span>꽃은 이쁘다</span></div>
                    </li>
                    <li >
                        <img src="../imges/꽃2.jpg" >
                        <div class="desc"><b>꽃2</b><span>꽃2는 이쁘다</span></div>
                    </li>
                    <li >
                        <img src="../imges/남산.jpg">
                        <div class="desc"><b>남산</b><span>벚꽃 질때 여기가면 벚꽃 절정임 ㅇㅋ? 여친생기면 써먹도록</span></div>
                    </li>
                    <li >
                        <img src="../imges/벚꽃2.jpeg">
                        <div class="desc"><b>벚꽃2</b><span>왜 있엉? 무슨일이야</span></div>
                    </li>
                    <li>
                        <img src="../imges/길.jpg" >
                        <div class="desc"><b>길</b><span>벚꽃길 혼자 울면서 걷쥬?</span></div>
                    </li>
                </ul>

            </div>

            <button id="next"></button>


        </div>

    </div>
</body>
</html>
