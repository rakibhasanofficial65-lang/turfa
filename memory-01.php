<?php
session_start();
?>
<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>First Look ❤️</title>

<style>
*{box-sizing:border-box;margin:0;padding:0}

body{
    overflow:hidden;
    background:#05040a;
    color:white;
    font-family:Arial,"Noto Sans Bengali",sans-serif;
}

.scene{
    height:100vh;
    position:relative;
    overflow:hidden;
    background:
        radial-gradient(circle at 75% 20%,rgba(255,235,190,.2),transparent 12%),
        linear-gradient(#050414 0%,#100b19 60%,#050509 100%);
}

/* moon */

.moon{
    position:absolute;
    right:12%;
    top:8%;
    width:110px;
    height:110px;
    border-radius:50%;
    background:#fff8df;
    box-shadow:0 0 80px rgba(255,240,180,.4);
}

/* stars */

.star{
    position:absolute;
    width:3px;
    height:3px;
    border-radius:50%;
    background:#fff;
    animation:blink 2s infinite alternate;
}

@keyframes blink{
    to{opacity:.2}
}

/* road */

.road{
    position:absolute;
    bottom:-5%;
    left:20%;
    width:60%;
    height:52%;
    background:linear-gradient(90deg,#08080b,#16151c,#08080b);
    clip-path:polygon(38% 0,62% 0,100% 100%,0 100%);
}

/* grass */

.grass{
    position:absolute;
    bottom:13%;
    width:100%;
    height:16%;
    background:
    repeating-linear-gradient(
        75deg,
        transparent 0 12px,
        rgba(210,240,210,.4) 13px 15px,
        transparent 16px 28px
    );
}

/* bench */

.bench{
    position:absolute;
    width:220px;
    height:22px;
    background:#493022;
    border-radius:8px;
    left:50%;
    bottom:31%;
    transform:translateX(-50%);
    box-shadow:0 12px 20px #000;
}

.bench:before,
.bench:after{
    content:"";
    position:absolute;
    width:8px;
    height:90px;
    background:#241810;
    bottom:-75px;
}

.bench:before{left:35px}
.bench:after{right:35px}

.back{
    position:absolute;
    width:220px;
    height:70px;
    left:0;
    top:-55px;
    border-radius:10px 10px 0 0;
    background:#382319;
}

/* characters */

.person{
    position:absolute;
    bottom:32%;
    width:90px;
    height:190px;
    z-index:5;
    transition:1.5s ease;
}

.head{
    width:55px;
    height:55px;
    border-radius:50%;
    background:#d9a27d;
    position:absolute;
    left:18px;
    top:0;
    box-shadow:inset -8px -5px rgba(0,0,0,.12);
}

.hair{
    position:absolute;
    width:60px;
    height:38px;
    background:#17121a;
    border-radius:50% 50% 30% 30%;
    left:15px;
    top:-3px;
}

.body{
    position:absolute;
    width:65px;
    height:95px;
    left:13px;
    top:52px;
    border-radius:20px 20px 8px 8px;
}

.arm{
    position:absolute;
    width:15px;
    height:75px;
    border-radius:20px;
    top:60px;
    background:#d9a27d;
    transform-origin:top;
}

.arm.left{left:5px;transform:rotate(18deg)}
.arm.right{right:4px;transform:rotate(-18deg)}

.leg{
    position:absolute;
    width:18px;
    height:80px;
    background:#181722;
    top:135px;
    border-radius:15px;
}

.leg.l{left:25px}
.leg.r{right:25px}

.girl{
    left:calc(50% - 25px);
    transform:translateX(-50%);
}

.girl .body{background:#b52e70}
.girl .hair{background:#171015}

.boy{
    left:-140px;
}

.boy .body{background:#263d88}
.boy .hair{background:#101017}

/* walk */

.boy.walk{
    left:calc(50% + 65px);
    transform:translateX(-50%);
}

/* dialogue */

.dialogue{
    position:absolute;
    z-index:20;
    min-width:280px;
    max-width:430px;
    padding:18px 22px;
    border-radius:18px;
    background:rgba(15,10,25,.88);
    border:1px solid rgba(255,130,190,.5);
    box-shadow:0 15px 50px rgba(0,0,0,.5);
    text-align:center;
    opacity:0;
    transform:translateY(10px) scale(.95);
    transition:.4s;
}

.dialogue.show{
    opacity:1;
    transform:translateY(0) scale(1);
}

.dialogue:after{
    content:"";
    position:absolute;
    bottom:-10px;
    left:50%;
    border:10px solid transparent;
    border-top-color:rgba(15,10,25,.88);
    border-bottom:0;
    transform:translateX(-50%);
}

#boyDialogue{
    left:50%;
    top:20%;
    transform:translateX(-50%) translateY(10px);
}

#boyDialogue.show{
    transform:translateX(-50%) translateY(0);
}

#girlDialogue{
    left:50%;
    top:20%;
    transform:translateX(-50%) translateY(10px);
}

#girlDialogue.show{
    transform:translateX(-50%) translateY(0);
}

/* choices */

.choices{
    position:absolute;
    z-index:30;
    left:50%;
    bottom:7%;
    transform:translateX(-50%);
    display:none;
    gap:12px;
    width:min(700px,90%);
    justify-content:center;
    flex-wrap:wrap;
}

.choice{
    border:1px solid rgba(255,130,190,.4);
    background:rgba(20,10,30,.9);
    color:#fff;
    padding:14px 20px;
    border-radius:30px;
    cursor:pointer;
    transition:.3s;
}

.choice:hover{
    background:linear-gradient(90deg,#ff2787,#813dff);
    transform:translateY(-3px);
}

.choice.selected{
    background:#ff2787;
}

/* letter */

.letter{
    display:none;
    position:absolute;
    z-index:50;
    left:50%;
    top:50%;
    transform:translate(-50%,-50%);
    width:min(650px,90%);
    max-height:78vh;
    overflow:auto;
    padding:40px;
    color:#3b251c;
    background:#f6e6bd;
    border-radius:8px;
    box-shadow:0 30px 100px #000;
    font-family:Georgia,"Noto Serif Bengali",serif;
    line-height:1.9;
}

.letter h2{
    text-align:center;
    margin-bottom:20px;
}

.letter p{
    margin-bottom:15px;
}

.readBtn{
    display:block;
    margin:20px auto 0;
    padding:13px 28px;
    border:0;
    border-radius:30px;
    background:#b72b68;
    color:white;
    cursor:pointer;
}
</style>
</head>

<body>

<div class="scene">

<div class="moon"></div>

<div class="star" style="left:10%;top:15%"></div>
<div class="star" style="left:25%;top:8%"></div>
<div class="star" style="left:40%;top:20%"></div>
<div class="star" style="left:65%;top:10%"></div>
<div class="star" style="left:85%;top:23%"></div>

<div class="road"></div>
<div class="grass"></div>

<div class="bench">
    <div class="back"></div>
</div>

<!-- GIRL -->

<div class="person girl">

    <div class="hair"></div>
    <div class="head"></div>

    <div class="body"></div>

    <div class="arm left"></div>
    <div class="arm right"></div>

    <div class="leg l"></div>
    <div class="leg r"></div>

</div>

<!-- BOY -->

<div class="person boy" id="boy">

    <div class="hair"></div>
    <div class="head"></div>

    <div class="body"></div>

    <div class="arm left"></div>
    <div class="arm right"></div>

    <div class="leg l"></div>
    <div class="leg r"></div>

</div>

<div class="dialogue" id="boyDialogue">
    আমি তোমায় কিছু বলতে এবং কিছু দিতে চাই…
</div>

<div class="dialogue" id="girlDialogue">
    ঠিক আছে, বলো ❤️
</div>

<div class="choices" id="choices">

    <button class="choice" onclick="choose(1)">
        তুমি কি এটা এখনই পড়তে চাও?
    </button>

    <button class="choice" onclick="choose(2)">
        বলার পর পড়বো
    </button>

</div>

<div class="letter" id="letter">

<h2>একটা কথা বলতে চাই... ❤️</h2>

<p>
প্রথম যেদিন তোমায় দেখেছিলাম, সেদিনই তোমাকে আমার ভালো লেগেছিল।
</p>

<p>
সামনাসামনি হয়তো কথাটা বলা হয়ে ওঠেনি,
তাই আজ এভাবেই বলছি।
</p>

<p>
জানি না ঠিক কোন মুহূর্তে তোমাকে এতটা ভালো লাগতে শুরু করেছিল,
তবে তোমার মধ্যে এমন কিছু একটা আছে,
যেটা বারবার তোমার কথা মনে করিয়ে দেয়।
</p>

<p>
তোমাকে আমার ভালো লাগে।
শুধু আজকের জন্য নয়—
আমি এই ভালো লাগাটাকে আরও সুন্দর কিছুতে পরিণত করতে চাই।
</p>

<p>
আমি চাই, এই ভালো লাগাটা সময়ের সাথে হারিয়ে না যাক।
বরং ধীরে ধীরে আরও গভীর হোক,
আর একদিন এই ভালো লাগাটাই আমাদের একটা সুন্দর গল্পের শুরু হোক।
</p>

<p>
তোমাকে আমার ভালো লাগে,
আর আমি এই ভালো লাগাটাকে স্থায়ী করতে চাই। ❤️
</p>

<button class="readBtn" onclick="nextPage()">
    তারপর... ❤️
</button>

</div>

</div>

<script>

const boy=document.getElementById("boy");
const boyDialogue=document.getElementById("boyDialogue");
const girlDialogue=document.getElementById("girlDialogue");
const choices=document.getElementById("choices");
const letter=document.getElementById("letter");

setTimeout(()=>{
    boy.classList.add("walk");
},800);

setTimeout(()=>{
    boyDialogue.classList.add("show");
},2300);

setTimeout(()=>{
    boyDialogue.classList.remove("show");

    setTimeout(()=>{
        girlDialogue.classList.add("show");

        setTimeout(()=>{
            girlDialogue.classList.remove("show");

            setTimeout(()=>{
                choices.style.display="flex";
            },500);

        },2500);

    },1000);

},5300);

function choose(option){

    document.querySelectorAll(".choice").forEach(b=>{
        b.disabled=true;
        b.classList.remove("selected");
    });

    document.querySelectorAll(".choice")[option-1]
        .classList.add("selected");

    choices.style.display="none";

    /* girl thinking */

    setTimeout(()=>{

        /* small head/hand movement */
        document.querySelector(".girl").style.transform=
            "translateX(-50%) translateY(-5px) rotate(-2deg)";

        setTimeout(()=>{

            if(option===1){

                letter.style.display="block";

            }else{

                window.location.href="memory-02.php";

            }

        },1800);

    },1500);
}

function nextPage(){
    window.location.href="memory-02.php";
}

</script>

</body>
</html>