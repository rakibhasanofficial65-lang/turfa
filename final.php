<!DOCTYPE html>
<html lang="bn">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title>Your Answer ❤️</title>

<style>

*{
    box-sizing:border-box;
    margin:0;
    padding:0;
}

body{
    min-height:100vh;
    overflow:hidden;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial,"Noto Sans Bengali",sans-serif;
    color:white;

    background:
    radial-gradient(circle at 50% 30%,rgba(255,100,170,.18),transparent 25%),
    radial-gradient(circle at 80% 80%,rgba(120,60,255,.15),transparent 30%),
    linear-gradient(135deg,#03030a,#100512,#030308);
}

.moon{
    position:fixed;
    top:8%;
    right:10%;
    width:100px;
    height:100px;
    border-radius:50%;
    background:#fff5d5;
    box-shadow:0 0 80px rgba(255,235,170,.4);
}

.container{
    width:min(650px,90%);
    padding:45px 30px;
    text-align:center;
    border-radius:30px;

    background:rgba(255,255,255,.055);
    border:1px solid rgba(255,150,200,.2);

    backdrop-filter:blur(18px);

    box-shadow:
    0 30px 100px rgba(0,0,0,.7);
}

.icon{
    font-size:55px;
    margin-bottom:15px;
}

h1{
    font-size:clamp(30px,5vw,48px);
    margin-bottom:20px;

    background:linear-gradient(
        90deg,
        #fff,
        #ff91c3,
        #c595ff
    );

    -webkit-background-clip:text;
    color:transparent;
}

.message{
    color:#ddd;
    font-size:18px;
    line-height:1.8;
    margin-bottom:28px;
}

textarea{
    width:100%;
    min-height:160px;
    resize:none;

    padding:18px;

    color:white;

    background:rgba(0,0,0,.35);

    border:1px solid rgba(255,130,190,.3);

    border-radius:18px;

    outline:none;

    font-family:inherit;
    font-size:16px;
}

textarea:focus{
    border-color:#ff6fae;
    box-shadow:0 0 25px rgba(255,70,150,.15);
}

button{
    margin-top:18px;
    border:0;

    padding:15px 35px;

    border-radius:50px;

    color:white;

    background:
    linear-gradient(
        90deg,
        #ff2783,
        #813eff
    );

    cursor:pointer;

    font-size:16px;

    transition:.3s;
}

button:hover{
    transform:translateY(-3px) scale(1.03);
    box-shadow:0 10px 35px rgba(255,40,130,.35);
}

#sent{
    display:none;
    margin-top:25px;
    color:#ff9ac6;
    line-height:1.7;
}

.heart{
    position:fixed;
    color:#ff71ad;
    animation:float 8s linear infinite;
    opacity:.5;
}

@keyframes float{

    0%{
        transform:translateY(110vh) rotate(0);
        opacity:0;
    }

    20%{
        opacity:.6;
    }

    100%{
        transform:translateY(-20vh) rotate(360deg);
        opacity:0;
    }

}

</style>

</head>

<body>

<div class="moon"></div>

<div class="heart" style="left:10%;animation-delay:1s">♥</div>
<div class="heart" style="left:25%;animation-delay:3s">♥</div>
<div class="heart" style="left:70%;animation-delay:5s">♥</div>
<div class="heart" style="left:90%;animation-delay:2s">♥</div>

<div class="container">

    <div class="icon">💌</div>

    <h1>এবার তোমার কথা... ❤️</h1>

    <div class="message">

        কোনো দ্বিধা ছাড়াই কিছু বলার থাকলে বলে দাও।<br>

        আমি তোমার উত্তর শোনার জন্য প্রস্তুত।

        <br><br>

        <span style="color:#ff8dbd">
            তোমার মনের কথাটাই সবচেয়ে গুরুত্বপূর্ণ।
        </span>

    </div>

    <textarea
        id="answer"
        placeholder="এখানে তোমার মনের কথাটা লিখতে পারো...">
    </textarea>

    <button onclick="sendAnswer()">
        Send My Answer ❤️
    </button>

    <div id="sent">

        তোমার কথাটা আমার কাছে পৌঁছে গেছে। ❤️

        <br>

        ধন্যবাদ, নিজের মনের কথাটা বলার জন্য।

    </div>

</div>

<script>

function sendAnswer(){

    const answer=document.getElementById("answer").value.trim();

    if(!answer){

        alert("আগে তোমার মনের কথাটা লিখো ❤️");

        return;
    }

    document.getElementById("answer").style.display="none";

    document.querySelector("button").style.display="none";

    document.getElementById("sent").style.display="block";

}

</script>

</body>
</html>