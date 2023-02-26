<?php
//header('charset=UTF-8');
$string = file_get_contents("../asset/equips");
$json = json_decode($string, true);

$return_string = "";

$selected_equips = explode(",", $_POST['sending_values']);

if (count($selected_equips) == 0) {
    return "請勾選上面裝備";
}

sort($selected_equips);

$attack_speed = 0;
$physical_attack = 0;
$run_speed = 0;
$big_attack = 0;
$name = "";
$physical_attack_life_back = 0;
$magic_attack = 0;
$cool_down = 0;
$filter = 0;
$max_life = 0;
$magic_defense = 0;
$tooltip_tip = "";
$life_back = 0;
$max_magic = 0;
$physical_defense = 0;
$magic_back = 0;
$money = 0;

foreach ($selected_equips as $key => $value) {
    if ($name == "") {
        $name = $name . $json['equips'][$value]['name'];
    } else {
        $name = $name . " + " . $json['equips'][$value]['name'];
    }
    $attack_speed = $attack_speed + $json['equips'][$value]['attack_speed'];
    $physical_attack = $physical_attack + $json['equips'][$value]['physical_attack'];
    $run_speed = $run_speed + $json['equips'][$value]['run_speed'];
    $big_attack = $big_attack + $json['equips'][$value]['big_attack'];
    $physical_attack_life_back = $physical_attack_life_back + $json['equips'][$value]['physical_attack_life_back'];
    $magic_attack = $magic_attack + $json['equips'][$value]['magic_attack'];
    $cool_down = $cool_down + $json['equips'][$value]['cool_down'];
    $max_life = $max_life + $json['equips'][$value]['max_life'];
    $magic_defense = $magic_defense + $json['equips'][$value]['magic_defense'];
    $life_back = $life_back + $json['equips'][$value]['life_back'];
    $max_magic = $max_magic + $json['equips'][$value]['max_magic'];
    $physical_defense = $physical_defense + $json['equips'][$value]['physical_defense'];
    $magic_back = $magic_back + $json['equips'][$value]['magic_back'];
    $money = $money + $json['equips'][$value]['money'];
    if (empty($json['equips'][$value]['tooltip_tip']) == false) {
        $tmp_tooltip = explode("\n", $json['equips'][$value]['tooltip_tip']);
        foreach ($tmp_tooltip as $tmp_ley => $tmp_value) {
            if (strpos($tooltip_tip, $tmp_value) === FALSE) {
                $tooltip_tip = $tooltip_tip . $tmp_value . "<br>";
            }
        }
    }    
}

if ($name != "") {
    $return_string .= "選取裝備: ".$name."\n";
    $return_string .= "<br>";
}       

if ($money != 0) {
    $return_string .= "金額: ".$money."\n";
    $return_string .= "<br>";
}
if ($physical_attack != 0) {
    $return_string .= "物理攻擊: " . $physical_attack;
    $return_string .= "<br>";
}
if ($magic_attack != 0) {
    $return_string .= "魔法攻擊: " . $magic_attack;
    $return_string .= "<br>";
}
if ($physical_defense != 0) {
    $return_string .= "物理防禦: " . $physical_defense;
    $return_string .= "<br>";
}
if ($magic_defense != 0) {
    $return_string .= "魔法防禦: " . $magic_defense;
    $return_string .= "<br>";
}
if ($max_life != 0) {
    $return_string .= "最大生命: " . $max_life;
    $return_string .= "<br>";
}
if ($attack_speed != 0) {
    $return_string .= "攻擊速度: " . $attack_speed . "%";
    $return_string .= "<br>";
}
if ($physical_attack_life_back != 0) {
    $return_string .= "物理吸血: " . $physical_attack_life_back . "%";
    $return_string .= "<br>";
}
if ($cool_down != 0) {
    $return_string .= "冷卻縮減: " . $cool_down . "%";
    $return_string .= "<br>";
}
if ($big_attack != 0) {
    $return_string .= "暴擊率: " . $big_attack . "%";
    $return_string .= "<br>";
}
if ($run_speed != 0) {
    $return_string .= "跑速: " . $run_speed . "%";
    $return_string .= "<br>";
}
if ($max_magic != 0) {
    $return_string .= "最大魔力: " . $max_magic;
    $return_string .= "<br>";
}
if ($life_back != 0) {
    $return_string .= "每5秒回血: " . $life_back;
    $return_string .= "<br>";
}
if ($magic_back != 0) {
    $return_string .= "每5秒回魔: " . $magic_back;
    $return_string .= "<br>";
}
if ($tooltip_tip != "") {
    $return_string .= $tooltip_tip;
}

echo json_encode($return_string);
?>