<?php

if ($_POST["link"]){
    $ss = $_POST["begin"] . '@' . $_POST["end"]."@".$_POST["name"]."@".$_POST['link']."\n";
    file_put_contents("events.txt", $ss, FILE_APPEND);
}