<?php

if ($_POST["link"]){
    $ss = $_POST["begin"] . '@' . $_POST["end"]."@".$_POST["name"]."@".$_POST['link']."\n";
    file_put_contents("events.txt", $ss, FILE_APPEND);
}

$content = file_get_contents("events.txt");
$lines = explode("\n", $content);
$colors = array('default', 'primary', 'success', 'info', 'warning', 'danger');
foreach($lines as $line){
    $d = explode("@", $line);
    if (sizeof($d) < 3){
        continue;
    }

    $color = array_rand($colors);
    echo '<span class="ggg label label-'.$colors[$color].'">'.$d[0] . ' - ' . $d[1].
        ": ".$d[2].' <a href="'.$d[3].'">ссылка</a></span> ';
}

