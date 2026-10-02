<?php
session_start();
?>
<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Story ❤️</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html,body{
    width:100%;
    height:100%;
    overflow:hidden;
    font-family:Arial,"Noto Sans Bengali",sans-serif;
}

body{
    background:#03030a;
    color:#fff;
}

.scene{
    width:100%;
    height:100vh;
    position:relative;
    overflow:hidden;
    background:
        radial-gradient(circle at 70% 20%,rgba(190,80,255,.20),transparent 30%),
        radial-gradient(circle at 20% 80%,rgba(255,30,130,.14),transparent 35%),
        linear-gradient(180deg,#03030d 0%,#080314 55%,#020207 100%);
}

/* moon */

.moon{
    position:absolute;
    width:130px;
    height:130px;
    border-radius:50%;
    right:12%;
    top:9%;
    background:#fff7dc;
    box-shadow:
        0 0 30px #fff,
        0 0 90px rgba(255,230,170,.35);
}

.moon:after{
    content:"";
    position:absolute;
    width:125px;
    height:125px;
    border-radius:50%;
    background:#03030d;
    left:-35px;
    top:-10px;
}

/* stars */

.star{
    position:absolute;
    width:3px;
    height:3px;
    background:white;
    border-radius:50%;
    animation:twinkle 2s infinite alternate;
}

@keyframes twinkle{
    from{opacity:.2;transform:scale(.7)}
    to{opacity:1;transform:scale(1.4)}
}

/* road */

.road{
    position:absolute;
    bottom:-10%;
    left:0;
    width:100%;
    height:45%;
    background:
        linear-gradient(90deg,transparent 48%,rgba(255,255,255,.12) 49%,transparent 51%),
        linear-gradient(180deg,#111018,#050509);
    clip-path:polygon(40% 0,60% 0,100% 100%,0 100%);
}

/* lamp */

.lamp{
    position:absolute;
    width:5px;
    height:260px;
    background:#191820;
    bottom:30%;
}

.lamp:before{
    content:"";
    position:absolute;
    width:80px;
    height:4px;
    background:#191820;
    top:0;
    left:-40px;
}

.lamp:after{
    content:"";
    position:absolute;
    width:22px;
    height:22px;
    border-radius:50%;
    background:#ffd98a;
    box-shadow:0 0 35px 15px rgba(255,215,120,.35);
    top:5px;
    left:-9px;
}

.l1{left:12%}
.l2{left:27%;transform:scale(.75);transform-origin:bottom}
.l3{right:15%;transform:scale(.8);transform-origin:bottom}

/* grass */

.grass{
    position:absolute;
    bottom:17%;
    width:100%;
    height:15%;
    opacity:.7;
    background:
        repeating-linear-gradient(
            75deg,
            transparent 0 12px,
            rgba(190,240,210,.35) 13px 15px,
            transparent 16px 28px
        );
    transform:skewX(-5deg);
}

/* content */

.content{
    position:absolute;
    inset:0;
    z-index:10;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.card{
    width:min(720px,90%);
    padding:55px 35px;
    border:1px solid rgba(255,255,255,.15);
    border-radius:30px;
    background:rgba(255,255,255,.055);
    backdrop-filter:blur(15px);
    box-shadow:0 30px 100px rgba(0,0,0,.6);
}

.small{
    letter-spacing:6px;
    color:#ff8bc6;
    font-size:12px;
    margin-bottom:18px;
}

h1{
    font-size:clamp(45px,8vw,90px);
    line-height:1;
    font-weight:800;
    background:linear-gradient(90deg,#fff,#ff9bce,#c99aff);
    -webkit-background-clip:text;
    color:transparent;
}

.subtitle{
    margin:25px auto;
    max-width:550px;
    color:#ddd;
    font-size:18px;
    line-height:1.8;
}

.btn{
    display:inline-block;
    text-decoration:none;
    color:white;
    padding:16px 32px;
    border-radius:50px;
    background:linear-gradient(90deg,#ff2787,#8e42ff);
    box-shadow:0 0 35px rgba(255,40,140,.3);
    transition:.3s;
}

.btn:hover{
    transform:translateY(-4px) scale(1.03);
    box-shadow:0 0 50px rgba(255,40,140,.55);
}

/* hearts */

.heart{
    position:absolute;
    color:#ff6ba9;
    opacity:.5;
    animation:float 7s linear infinite;
}

@keyframes float{
    0%{transform:translateY(110vh) rotate(0deg);opacity:0}
    20%{opacity:.6}
    100%{transform:translateY(-20vh) rotate(360deg);opacity:0}
}
</style>
</head>

<body>

<div class="scene">

    <div class="moon"></div>

    <div class="star" style="left:8%;top:15%"></div>
    <div class="star" style="left:22%;top:8%"></div>
    <div class="star" style="left:42%;top:20%"></div>
    <div class="star" style="left:58%;top:10%"></div>
    <div class="star" style="left:80%;top:25%"></div>
    <div class="star" style="left:90%;top:12%"></div>

    <div class="lamp l1"></div>
    <div class="lamp l2"></div>
    <div class="lamp l3"></div>

    <div class="grass"></div>
    <div class="road"></div>

    <div class="heart" style="left:10%;animation-delay:0s">♥</div>
    <div class="heart" style="left:30%;animation-delay:2s">♥</div>
    <div class="heart" style="left:70%;animation-delay:4s">♥</div>
    <div class="heart" style="left:85%;animation-delay:1s">♥</div>

    <div class="content">

        <div class="card">

            <div class="small">A NEW STORY BEGINS</div>

            <h1>Our Story</h1>

            <div class="subtitle">
                প্রথম দেখায় ভালো লাগা থেকে<br>
                একটা নতুন গল্পের শুরু...
                <br><br>
                <span style="color:#ff9dcb">
                    কিছু কথা মুখোমুখি বলা যায় না।
                </span>
            </div>

            <a href="memory-01.php" class="btn">
                Begin Our Story ❤️
            </a>

        </div>

    </div>

</div>

</body>
</html>