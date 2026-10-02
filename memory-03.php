<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Will You? ❤️</title>

<style>
*{box-sizing:border-box;margin:0;padding:0}

body{
    overflow:hidden;
    background:#030308;
    color:white;
    font-family:Arial,"Noto Sans Bengali",sans-serif;
}

.scene{
    width:100%;
    height:100vh;
    position:relative;
    overflow:hidden;
    background:
    radial-gradient(circle at 70% 18%,rgba(255,230,180,.17),transparent 18%),
    linear-gradient(#02020a,#120813 65%,#020205);
}

.moon{
    position:absolute;
    top:7%;
    right:13%;
    width:125px;
    height:125px;
    border-radius:50%;
    background:#fff7d7;
    box-shadow:0 0 90px rgba(255,235,170,.5);
}

.moon:before{
    content:"";
    position:absolute;
    width:25px;
    height:25px;
    border-radius:50%;
    background:#ddd5bb;
    left:25px;
    top:35px;
    opacity:.5;
}

.road{
    position:absolute;
    bottom:-10%;
    left:15%;
    width:70%;
    height:55%;
    background:linear-gradient(90deg,#08080a,#18171d,#08080a);
    clip-path:polygon(38% 0,62% 0,100% 100%,0 100%);
}

.grass{
    position:absolute;
    bottom:10%;
    width:100%;
    height:20%;
    opacity:.6;
    background:
    repeating-linear-gradient(
        75deg,
        transparent 0 12px,
        rgba(190,230,200,.4) 13px 15px,
        transparent 16px 29px
    );
}

/* tree */

.tree{
    position:absolute;
    left:8%;
    bottom:20%;
    width:30px;
    height:300px;
    background:#21150f;
}

.tree:before{
    content:"";
    position:absolute;
    width:300px;
    height:220px;
    left:-130px;
    top:-90px;
    border-radius:50%;
    background:
    radial-gradient(circle,#243c2b 0 35%,transparent 36%),
    radial-gradient(circle at 30% 50%,#304e36 0 30%,transparent 31%),
    radial-gradient(circle at 70% 40%,#203827 0 32%,transparent 33%);
}

/* bench */

.bench{
    position:absolute;
    left:50%;
    bottom:30%;
    width:230px;
    height:20px;
    transform:translateX(-50%);
    background:#4b2d20;
    border-radius:8px;
}

.bench:before,
.bench:after{
    content:"";
    position:absolute;
    width:8px;
    height:80px;
    background:#24150e;
    bottom:-70px;
}

.bench:before{left:35px}
.bench:after{right:35px}

/* people */

.person{
    position:absolute;
    width:90px;
    height:190px;
    bottom:30%;
    z-index:5;
}

.head{
    position:absolute;
    width:55px;
    height:55px;
    left:18px;
    border-radius:50%;
    background:#dca37c;
}

.hair{
    position:absolute;
    width:60px;
    height:38px;
    left:15px;
    top:-3px;
    border-radius:50%;
    background:#151016;
}

.body{
    position:absolute;
    width:65px;
    height:95px;
    left:13px;
    top:52px;
    border-radius:20px;
}

.arm{
    position:absolute;
    top:60px;
    width:15px;
    height:75px;
    border-radius:20px;
    background:#dca37c;
    transform-origin:top;
}

.arm.left{left:5px;transform:rotate(20deg)}
.arm.right{right:4px;transform:rotate(-20deg)}

.girl{
    left:calc(50% - 35px);
    transform:translateX(-50%);
}

.girl .body{background:#b82d70}

.boy{
    left:calc(50% + 65px);
    transform:translateX(-50%);
    transition:1.5s ease;
}

.boy .body{background:#29428d}

/* kneel */

.boy.kneel{
    bottom:23%;
    transform:
        translateX(-50%)
        rotate(-5deg)
        scale(.95);
}

.boy.kneel .leg{
    display:none;
}

.boy.kneel .arm.right{
    transform:rotate(-65deg);
}

/* ring */

.ring{
    position:absolute;
    right:-5px;
    top:105px;
    width:30px;
    height:30px;
    border:4px solid #ffd76e;
    border-radius:50%;
    box-shadow:0 0 20px #ffd76e;
    animation:ringGlow 1s infinite alternate;
}

@keyframes ringGlow{
    to{
        box-shadow:0 0 35px #ffd76e;
    }
}

/* dialogue */

.dialogue{
    position:absolute;
    z-index:30;
    top:16%;
    left:50%;
    width:min(600px,90%);
    padding:24px;
    text-align:center;
    border-radius:22px;
    background:rgba(12,7,20,.92);
    border:1px solid rgba(255,130,190,.55);
    box-shadow:0 20px 70px #000;
    opacity:0;
    transform:translateX(-50%) translateY(20px);
    transition:.6s;
}

.dialogue.show{
    opacity:1;
    transform:translateX(-50%) translateY(0);
}

.question{
    font-size:24px;
    line-height:1.6;
}

.choices{
    display:none;
    position:absolute;
    z-index:40;
    bottom:7%;
    left:50%;
    transform:translateX(-50%);
    width:90%;
    justify-content:center;
    gap:15px;
    flex-wrap:wrap;
}

.choice{
    padding:15px 27px;
    border-radius:50px;
    background:rgba(20,8,30,.95);
    color:#fff;
    border:1px solid #dc5b98;
    cursor:pointer;
    transition:.3s;
}

.choice:hover{
    background:linear-gradient(90deg,#ff2c83,#823dff);
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
<div class="tree"></div>
<div class="grass"></div>
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

    <div class="ring"></div>

</div>

<div class="dialogue" id="dialogue">

    <div class="question">
        আমরা কি সারাজীবন একসাথে হাত ধরে চলতে পারি?
        <br>
        <span style="color:#ff82b8">
            ❤️
        </span>
    </div>

</div>

<div class="choices" id="choices">

<button class="choice" onclick="choose(1)">
    হ্যাঁ, পারি ❤️
</button>

<button class="choice" onclick="choose(2)">
    Text করে বলবো
</button>

</div>

</div>

<script>

const boy=document.getElementById("boy");
const dialogue=document.getElementById("dialogue");
const choices=document.getElementById("choices");

setTimeout(()=>{

    boy.classList.add("kneel");

},1200);

setTimeout(()=>{

    dialogue.classList.add("show");

},2700);

setTimeout(()=>{

    dialogue.classList.remove("show");

    setTimeout(()=>{
        choices.style.display="flex";
    },1000);

},6200);

function choose(option){

    document.querySelectorAll(".choice").forEach(btn=>{
        btn.disabled=true;
    });

    choices.style.display="none";

    /* girl thinks */

    setTimeout(()=>{

        const girl=document.querySelector(".girl");

        girl.style.transform=
        "translateX(-50%) rotate(-5deg) scale(1.03)";

        setTimeout(()=>{

            window.location.href="final.php";

        },1800);

    },1500);

}

</script>

</body>
</html>