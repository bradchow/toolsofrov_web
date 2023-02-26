<html>                                                                                                  
<head>
<meta charset="UTF-8" />
<!--meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"-->
<!--meta name=”viewport” content=”width=device-width, initial-scale=1, maximum-scale=1″-->
<meta name="viewport" content="width=device-width">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
    var selected_equips = "";                                     
    //讓 radio button 較好按
    $("#p_filter_0").click(function(){
        $("#filter_0").prop('checked', true);
        hideFilters();
    });
    $("#p_filter_1").click(function(){
        $("#filter_1").prop('checked', true);
        hideFilters();
    });
    $("#p_filter_2").click(function(){
        $("#filter_2").prop('checked', true);
        hideFilters();
    });
    $("#p_filter_3").click(function(){
        $("#filter_3").prop('checked', true);
        hideFilters();
    });
    $("#p_filter_4").click(function(){
        $("#filter_4").prop('checked', true);
        hideFilters();
    });
    $("#p_filter_5").click(function(){
        $("#filter_5").prop('checked', true);
        hideFilters();
    });
    $("#p_filter_6").click(function(){
        $("#filter_6").prop('checked', true);
        hideFilters();
    });

    function isItemSelected(item) {
        item = item.toString();
        if (selected_equips == "") {
            return 0;
        } else {
            var res = selected_equips.split(",");
            if (res.indexOf(item) == -1) {
                return 0;
            } else {
                return 1;
            }
        }
    }
    
    function addItemSelected(item) {
        if (selected_equips == "") {
            selected_equips = selected_equips + item;
        } else {
            selected_equips = selected_equips + "," + item;
        }
    }
    
    function removeItemSelected(item) {
        item = item.toString();
        var res = selected_equips.split(",");
        var a = res.indexOf(item);
        if (a != -1) {
            res.splice(a, 1);
            selected_equips = res.toString();
        }
    }
    
    //讓 Checkbox 較好按
<?php
    //TODO 1. clear function 2. 最多只能選六種裝備後，會被清空
    //按下 div 背景顏色變化
    for ($i=0;$i<112;$i++) {
        echo "\$(\"#equips_$i\").click(function(){";
        echo "  var r = isItemSelected($i);";
        echo "  if (r == 0) {";
        //echo "      alert(isItemSelected(r));";
        echo "      var res = selected_equips.split(\",\");";
        echo "      if (res.length >= 6) {";
        echo "          alert(\"最多只能選六種裝備\");";
        echo "      } else {";
        echo "          addItemSelected($i);";
        echo "          \$(\"#equips_$i\").css(\"background-color\",\"#DBDBDB\");";
        echo "          requestToServer();";
        echo "      }";
        echo "  } else {";
        //echo "      alert(isItemSelected(r));";
        echo "      removeItemSelected($i);";
        echo "      \$(\"#equips_$i\").css(\"background-color\",\"#FFFFFF\");";
        echo "      requestToServer();";
        echo "  }";
        echo "});";
    }
?>

    $(".gotoResult").click(function(){
        $('html, body').animate({scrollTop: $("#ResultPlace").offset().top}, 750);
    });
    
    $(".gotoEquips").click(function(){
        $('html, body').animate({scrollTop: $("#EquipsPlace").offset().top}, 750);
    });
    
    $(".clear").click(function(){
        $("#filter_0").prop('checked', true);
        hideFilters();
        // 只差把每個圖底色變白
<?php
        for ($i=0;$i<112;$i++) {
            echo "\$(\"#equips_$i\").css(\"background-color\",\"#FFFFFF\");";
        }
?>
        selected_equips = "";
        requestToServer();
        $('html, body').animate({scrollTop: $("#EquipsPlace").offset().top}, 750);
    });
    
    $("#filter_0, #filter_1, #filter_2, #filter_3, #filter_4, #filter_5").change(hideFilters);
    
    function hideFilters() {
        $(".filter_0, .filter_1, .filter_2, .filter_3, .filter_4, .filter_5").show();
        if ($('input[name=filter]:checked').val() == 1) {
            $(".filter_1, .filter_2, .filter_3, .filter_4, .filter_5").hide();
        } else if ($('input[name=filter]:checked').val() == 2) {
            $(".filter_0, .filter_2, .filter_3, .filter_4, .filter_5").hide();
        } else if ($('input[name=filter]:checked').val() == 3) {
            $(".filter_0, .filter_1, .filter_3, .filter_4, .filter_5").hide();
        } else if ($('input[name=filter]:checked').val() == 4) {
            $(".filter_0, .filter_1, .filter_2, .filter_4, .filter_5").hide();
        } else if ($('input[name=filter]:checked').val() == 5) {
            $(".filter_0, .filter_1, .filter_2, .filter_3, .filter_5").hide();
        } else if ($('input[name=filter]:checked').val() == 6) {
            $(".filter_0, .filter_1, .filter_2, .filter_3, .filter_4").hide();
        }
    }

    function requestToServer() {
        if (selected_equips == "") {
            $('#result').html("請勾選上面裝備");
        } else {
            var res = selected_equips.split(",");
            if (res.length >= 6) {
                $('html, body').animate({scrollTop: $("#ResultPlace").offset().top}, 750);
            }
            res = res.toString();
            $.ajax({
                type: "POST",
                url: "updateResult.php",
                dataType: 'json',
                data: { sending_values: res},
                cache: false,
                success: function(response) {
                    $('#result').html(response);
                },
                error: function(jqXHR) {
                    alert("發生錯誤: " + jqXHR.status);
                }
            })
        }
    }
});
</script>
<link rel="Shortcut Icon" type="image/x-icon" href="images/favicon.ico" />
<style type="text/css">
.equipsPic {
    vertical-align:middle;
}
.filter_0, .filter_1, .filter_2, .filter_3, .filter_4, .filter_5 {
    display: inline-block;
    padding: 2;
    width: 150;
}
</style>
</head>
<title>傳說小工具</title>
<body>
<a href="shortcut.php">前往快速查找區</a><BR>
<button type="button" class="gotoResult">看總結</button><button type="button" class="gotoEquips">選裝備</button><button type="button" class="clear">清除</button>
<p id="EquipsPlace"><b>選擇裝備種類過濾：</b></p>
<span id="p_filter_0"><input id="filter_0" type="radio" name="filter" value="0" checked="checked">全部 </span>
<?php

$string = file_get_contents("../asset/equips");
$json = json_decode($string, true);

foreach ($json['filter_category'] as $key => $value) {
    $radio_key = $key+1;
    echo "<span id=\"p_filter_$radio_key\"><input id=\"filter_$radio_key\" type=\"radio\" name=\"filter\" value=\"$radio_key\">$value </span>";
    if ($key == 1) {
        //echo "<br>";
    }
}
echo "<br>";
echo "<p><b>選擇裝備：</b></p>";

//顯示裝備
for ($i=0;$i<count($json['equips']);$i++) {
    $equips_name = $json['equips'][$i]['name'];
    $equips_class = $json['equips'][$i]['filter'];
    echo "<div class=\"filter_$equips_class\" id=\"equips_$i\"><img class=\"equipsPic\" width=\"60\" height=\"60\" src=\"images\\e$i.png\">$equips_name</div>";
}
?>

<p id="ResultPlace"><b>裝備總結：</b></p>
<p id="result">請勾選上面裝備</p>
<button type="button" class="gotoResult">看總結</button><button type="button" class="gotoEquips">選裝備</button><button type="button" class="clear">清除</button>
<BR><BR>
<p><b><a href="news.php">最新消息</a></b></p>
</body>
</html>
