<?php

$file_texts = array();
foreach($_POST as $k => $el){
    if (substr($k, 0, 1) == "s"){
//        echo $k;
//        echo $el;
        $file_texts[] = file_get_contents('../data/'.$k.'.txt');
    }
}
if (sizeof($file_texts) > 0){
    $final_js = "data.addColumn('date', 'Date');\n";
    $rows_js = array();

    $dates = array();
    foreach($file_texts as $file_text){
        $lines = explode("\n", $file_text);
        foreach ($lines as $k => $line) {
            if ($k == 0){
                $final_js .= "data.addColumn('number', '". trim($line)."');\n";
                continue;
            }
            $cells = explode(",", $line);
            $date_parts = explode("-", $cells[0]);
            $rows_js[] = "[new Date(".$date_parts[0].", ".$date_parts[1].", ".$date_parts[2]."), ".$cells[1]."]";
        }

    }

    $rows_js = "data.addRows([" . implode(",\n", $rows_js) .  "]);";
    echo $final_js . $rows_js;
}
