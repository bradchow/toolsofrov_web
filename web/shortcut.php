<html>
<head>
<meta charset="UTF-8" />
<!--meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"-->
<!--meta name=”viewport” content=”width=device-width, initial-scale=1, maximum-scale=1″-->
<meta name="viewport" content="width=device-width">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
    
    $(".goMaxMagicDefence").click(function(){
        $('html, body').animate({scrollTop: $("#MaxMagicDefence").offset().top}, 750);
    });
    
    $(".goMagicDefenceAndAttack").click(function(){
        $('html, body').animate({scrollTop: $("#MagicDefenceAndAttack").offset().top}, 750);
    });
    
    $(".goMaxPhysicalDefence").click(function(){
        $('html, body').animate({scrollTop: $("#MaxPhysicalDefence").offset().top}, 750);
    });
    
    $(".goPhysicalDefenceAndAttack").click(function(){
        $('html, body').animate({scrollTop: $("#PhysicalDefenceAndAttack").offset().top}, 750);
    });
    
    $(".goMain").click(function(){
        $('html, body').animate({scrollTop: $("#Main").offset().top}, 750);
    });
    
    $(".goPhysicalDefenceAndMagicAttack").click(function(){
        $('html, body').animate({scrollTop: $("#PhysicalDefenceAndMagicAttack").offset().top}, 750);
    });
    
    $(".goMaxMagic").click(function(){
        $('html, body').animate({scrollTop: $("#MaxMagic").offset().top}, 750);
    });
    
    $(".goMaxCoolDown").click(function(){
        $('html, body').animate({scrollTop: $("#MaxCoolDown").offset().top}, 750);
    });
    
    $(".goMaxLife").click(function(){
        $('html, body').animate({scrollTop: $("#MaxLife").offset().top}, 750);
    });
    
    $(".goMaxLifeAndMagicAttack").click(function(){
        $('html, body').animate({scrollTop: $("#MaxLifeAndMagicAttack").offset().top}, 750);
    });
    
    $(".goMaxLifePhysicalDefense").click(function(){
        $('html, body').animate({scrollTop: $("#MaxLifePhysicalDefense").offset().top}, 750);
    });
    
    $(".goPhysicalAttack").click(function(){
        $('html, body').animate({scrollTop: $("#PhysicalAttack").offset().top}, 750);
    });
    
    $(".goMagicAttack").click(function(){
        $('html, body').animate({scrollTop: $("#MagicAttack").offset().top}, 750);
    });
});
</script>
<link rel="Shortcut Icon" type="image/x-icon" href="images/favicon.ico" />
<style type="text/css">
.equipsPic {
    vertical-align:middle;
}
.filter_0, .filter_1, .filter_2, .filter_3, .filter_4 {
    display: inline-block;
    padding: 2;
    width: 150;
}
</style>
</head>
<title>傳說小工具 快速查找</title>
<body>
<a href="index.php">回傳說小工具</a><BR>
<p id="Main"><b>快速查找：</b></p>
<button type="button" class="goMaxMagicDefence">最高魔防</button><!--button type="button" class="goMagicDefenceAndAttack">最高魔防 + 魔攻</button-->
<BR>
<button type="button" class="goMaxPhysicalDefence">最高物防</button><button type="button" class="goPhysicalDefenceAndAttack">最高物防 + 物攻</button><button type="button" class="goPhysicalDefenceAndMagicAttack">最高物防 + 魔攻</button>
<BR>
<button type="button" class="goMaxMagic">最大魔力</button><button type="button" class="goMaxCoolDown">最高冷卻縮減</button>
<BR>
<button type="button" class="goMaxLife">最大生命</button><button type="button" class="goMaxLifeAndMagicAttack">最大生命 + 魔攻</button><button type="button" class="goMaxLifePhysicalDefense">最大生命 + 物防</button>
<BR>
<button type="button" class="goPhysicalAttack">最高物理攻擊</button><button type="button" class="goMagicAttack">最高魔法攻擊</button>
<BR><BR>
<p id="MaxMagicDefence"><b>最高魔防：</b></p>
<img src="images/e71.png"><BR>
仙靈吊墜<BR>
金額: 2320<BR>
魔法防禦: 200<BR>
最大生命: 1000<BR>
冷卻縮減: 10%<BR>
唯一被動-仙靈：脫戰時獲得一個吸收（400+英雄等級*60）點魔法傷害的護盾<BR>
唯一被動-調和：獲得8~112點魔法防禦（隨等級成長）<BR>
<BR>
<img src="images/e70.png"><BR>
德魯伊戰甲<BR>
金額: 1960<BR>
魔法防禦: 200<BR>
最大生命: 1200<BR>
跑速: 5%<BR>
唯一被動-恢復：受到傷害會在2秒內回復8%的生命，這個效果有10秒CD<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="MaxPhysicalDefence"><b>最高物防：</b></p>
<img src="images/e69.png"><BR>
聖騎戰盾<BR>
金額: 2180<BR>
物理防禦: 360<BR>
冷卻縮減: 20%<BR>
最大魔力: 400<BR>
唯一被動-強化守護：減少附近敵人30%攻速<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="PhysicalDefenceAndAttack"><b>最高物防 + 物攻：</b></p>
<img src="images/e12.png"><BR>
拘魂刀<BR>
金額: 2000<BR>
物理防禦: 180<BR>
物理攻擊: 100<BR>
冷卻縮減: 10%<BR>
唯一被動-拘魂：造成傷害使得目標的生命恢復效果減少40%，持續1.5秒（如果該傷害是普攻觸發，則持續時間延長至3秒）<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="PhysicalDefenceAndMagicAttack"><b>最高物防 + 魔攻：</b></p>
<img src="images/e48.png"><BR>
惡魔的微笑<BR>
金額: 1800<BR>
魔法攻擊: 120<BR>
物理防禦: 200<BR>
冷卻縮減: 10%<BR>
每5秒回魔: 30<BR>
唯一被動-痛苦灼燒：技能傷害會每秒造成（目標當前生命值2%+60）的魔法傷害，持續 3 秒。（對野怪傷害上限80）。<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="MaxMagic"><b>最大魔力：</b></p>
<img src="images/e46.png"><BR>
暮光之刃<BR>
金額: 1970<BR>
魔法攻擊: 180<BR>
跑速: 8%<BR>
最大魔力: 400<BR>
唯一被動-暮光：普通攻擊造成基於自身魔法攻擊20%的魔法傷害<BR>
唯一被動-急刃：普攻命中後獲得 50% 攻速加成，持續 4 秒，冷卻時間 10 秒<BR>
<BR>
<img src="images/e69.png"><BR>
聖騎戰盾<BR>
金額: 2180<BR>
物理防禦: 360<BR>
冷卻縮減: 20%<BR>
最大魔力: 400<BR>
唯一被動-強化守護：減少附近敵人30%攻速<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="MaxCoolDown"><b>最高冷卻縮減：</b></p>
<img src="images/e69.png"><BR>
聖騎戰盾<BR>
金額: 2180<BR>
物理防禦: 360<BR>
冷卻縮減: 20%<BR>
最大魔力: 400<BR>
唯一被動-強化守護：減少附近敵人30%攻速<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="MaxLife"><b>最大生命：</b></p>
<img src="images/e75.png"><BR>
長生護符<BR>
金額: 1980<BR>
最大生命: 2000<BR>
冷卻縮減: 10%<BR>
唯一被動-長生：脫戰後每秒回復4%最大生命<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="MaxLifeAndMagicAttack"><b>最大生命 + 魔攻：</b></p>
<img src="images/e51.png"><BR>
神聖法典<BR>
金額: 2990<BR>
魔法攻擊: 400<BR>
唯一被動-戒律：增加1400點最大生命<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="MaxLifePhysicalDefense"><b>最大生命 + 物防：</b></p>
<img src="images/e68.png"><BR>
護衛軍戰盾<BR>
金額: 2100<BR>
物理防禦: 300<BR>
最大生命: 1200<BR>
唯一被動-守護：受到攻擊會減少攻擊者 30% 攻擊速度與 15% 移動速度，持續2秒<BR>
<BR>
<img src="images/e64.png"><BR>
尖刺甲胄<BR>
金額: 1940<BR>
物理防禦: 300<BR>
最大生命: 1200<BR>
唯一被動-反噬：受到物理傷害時，會將傷害量的15%以魔法傷害的形式反彈給對方（按照計算傷害減免之前的初始傷害值計算）<BR>
<BR>
<img src="images/e66.png"><BR>
衝鋒戰甲<BR>
金額: 1900<BR>
物理防禦: 225<BR>
最大生命: 1200<BR>
跑速: 5%<BR>
唯一被動-衝鋒：受到傷害獲得1層增益，每層提供1%跑速和2%傷害輸出率，最高5層<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="PhysicalAttack"><b>最高物理攻擊：</b></p>
<img src="images/e23.png"><BR>
王者之劍<BR>
金額: 2950<BR>
物理攻擊: 200<BR>
唯一被動-破軍：目標生命低於50%時，傷害提高30%<BR>
<button type="button" class="goMain">回快速查找</button><BR>

<p id="MagicAttack"><b>最高魔法攻擊：</b></p>
<img src="images/e51.png"><BR>
神聖法典<BR>
金額: 2990<BR>
魔法攻擊: 400<BR>
唯一被動-戒律：增加1400點最大生命<BR>
<button type="button" class="goMain">回快速查找</button><BR>
<BR><BR><p><b><a href="news.php">最新消息</a></b></p>
</body>
</html>
