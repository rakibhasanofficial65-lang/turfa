<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>I Love You ❤️</title>

<style>
*{box-sizing:border-box;margin:0;padding:0}

body{
    margin:0;
    overflow:hidden;
    font-family:Arial,"Noto Sans Bengali",sans-serif;
    background:#050309;
    color:#fff;
}

.scene{
    height:100vh;
    position:relative;
    overflow:hidden;
    background:
    radial-gradient(circle at 50% 20%,rgba(255,150,190,.16),transparent 20%),
    linear-gradient(#03030d,#130714 70%,#030307);
}

.moon{
    position:absolute;
    right:12%;
    top:8%;
    width:120px;
    height:120px;
    border-radius:50%;
    background:#fff8dc;
    box-shadow:0 0 80px rgba(255,230,160,.4);
}

.road{
    position:absolute;
    bottom:-5%;
    left:20%;
    width:60%;
    height:52%;
    background:linear-gradient(90deg,#08080c,#19171e,#08080c);
    clip-path:polygon(38% 0,62% 0,100% 100%,0 100%);
}

.bench{
    position:absolute;
    bottom:31%;
    left:50%;
    width:230px;
    height:22px;
    transform:translateX(-50%);
    background:#482b20;
    border-radius:8px;
}

.bench:before,
.bench:after{
    content:"";
    position:absolute;
    width:8px;
    height:80px;
    background:#23160f;
    bottom:-70px;
}

.bench:before{left:35px}
.bench:after{right:35px}

/* characters */

.person{
    position:absolute;
    bottom:31%;
    width:90px;
    height:190px;
    z-index:5;
}

.head{
    position:absolute;
    top:0;
    left:18px;
    width:55px;
    height:55px;
    border-radius:50%;
    background:#dca47f;
}

.hair{
    position:absolute;
    top:-3px;
    left:15px;
    width:60px;
    height:38px;
    border-radius:50%;
    background:#171018;
}

.body{
    position:absolute;
    top:52px;
    left:13px;
    width:65px;
    height:95px;
    border-radius:20px 20px 8px 8px;
}

.arm{
    position:absolute;
    top:60px;
    width:15px;
    height:75px;
    border-radius:20px;
    background:#dca47f;
    transform-origin:top;
}

.arm.left{left:5px;transform:rotate(20deg)}
.arm.right{right:4px;transform:rotate(-20deg)}

.girl{
    left:calc(50% - 25px);
    transform:translateX(-50%);
}

.girl .body{background:#ad286c}

.boy{
    left:calc(50% + 65px);
    transform:translateX(-50%);
}

.boy .body{background:#263e88}

.rose{
    position:absolute;
    right:-12px;
    top:125px;
    width:55px;
    height:55px;
    z-index:15;
}

.flower{
    position:absolute;
    width:18px;
    height:18px;
    background:#ff2c68;
    border-radius:50%;
    box-shadow:
    10px 0 #ff2c68,
    0 10px #ff2c68,
    10px 10px #ff2c68;
}

.stem{
    position:absolute;
    width:5px;
    height:65px;
    background:#3f8a48;
    left:12px;
    top:15px;
    transform:rotate(-8deg);
}

/* dialogue */

.dialogue{
    position:absolute;
    z-index:20;
    top:18%;
    left:50%;
    transform:translateX(-50%) translateY(15px);
    width:min(500px,90%);
    padding:20px;
    border-radius:20px;
    text-align:center;
    background:rgba(15,8,22,.9);
    border:1px solid rgba(255,100,170,.5);
    box-shadow:0 20px 60px #000;
    opacity:0;
    transition:.5s;
}

.dialogue.show{
    opacity:1;
    transform:translateX(-50%) translateY(0);
}

.choices{
    display:none;
    position:absolute;
    bottom:7%;
    left:50%;
    transform:translateX(-50%);
    z-index:30;
    gap:15px;
    justify-content:center;
    flex-wrap:wrap;
    width:90%;
}

.choice{
    padding:15px 25px;
    border-radius:50px;
    color:white;
    background:rgba(25,10,30,.95);
    border:1px solid #d85591;
    cursor:pointer;
    transition:.3s;
}

.choice:hover{
    background:linear-gradient(90deg,#ff277e,#823cff);
    transform:translateY(-4px);
}

.choice:disabled{
    opacity:.5;
}
</style>
</head>

<body>

<div class="scene">

<div class="moon"></div>
<div class="road"></div>
<div class="bench"></div>

<div class="person girl">
    <div class="hair"></div>
    <div class="head"></div>
    <div class="body"></div>
    <div class="arm left"></div>
    <div class="arm right"></div>
</div>

<div class="person boy" id="boy">
    <div class="hair"></div>
    <div class="head"></div>
    <div class="body"></div>
    <div class="arm left"></div>
    <div class="arm right"></div>

    <div class="rose">
        <div class="flower"></div>
        <div class="stem"></div>
    </div>
</div>

<div class="dialogue" id="dialogue">
    <b style="font-size:28px;color:#ff8ab8">
        I love you... ❤️
    </b>
    <br><br>
    আমি তোমাকে সত্যিই ভালোবাসতে চাই।
</div>

<div class="choices" id="choices">

<button class="choice" onclick="choose(1)">
    I love you ❤️
</button>

<button class="choice" onclick="choose(2)">
    Text করে বলবো
</button>

</div>

</div>

<script>

const dialogue=document.getElementById("dialogue");
const choices=document.getElementById("choices");

setTimeout(()=>{
    dialogue.classList.add("show");
},1200);

setTimeout(()=>{
    dialogue.classList.remove("show");

    setTimeout(()=>{
        choices.style.display="flex";
    },1000);

},4700);

function choose(option){

    document.querySelectorAll(".choice").forEach(x=>{
        x.disabled=true;
    });

    choices.style.display="none";

    const girl=document.querySelector(".girl");

    /* thinking */
    setTimeout(()=>{
        girl.style.transform=
        "translateX(-50%) rotate(-3deg)";

        setTimeout(()=>{

            window.location.href="memory-03.php";

        },1700);

    },1300);
}

</script>

</body>
</html>