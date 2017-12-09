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
    $values = array();
    foreach($file_texts as $kk => $file_text){
        $values[] = array();

        $lines = explode("\n", $file_text);
        foreach ($lines as $k => $line) {
            if ($k == 0){
                $final_js .= "data.addColumn('number', '". trim($line)."');\n";
                continue;
            }
            $cells = explode(",", $line);
            $dates[] = $cells[0];
            $values[$kk][] = $cells[1];
//            $date_parts = explode("-", $cells[0]);
//            $rows_js[] = "[new Date(".$date_parts[0].", ".$date_parts[1].", ".$date_parts[2]."), ".$cells[1]."]";
        }

    }

    # well, dates filled
    $unique_dates = array_unique($dates);
    foreach ($unique_dates as $date){
        $date_parts = explode("-", $date);
        $row_js = "[new Date(".$date_parts[0].", ".$date_parts[1].", ".$date_parts[2].") ";
//        echo $date . "\n";
        foreach($file_texts as $kk => $file_text){
//            echo $kk . "\n";
            $found = false;
            $lines = explode("\n", $file_text);
            foreach ($lines as $k => $line) {
                $cells = explode(",", $line);
                $date_to_add = $cells[0];
                if ($date == $date_to_add){
                    $found = $cells[1];
                }
            }
            if (!$found){
                $row_js .= ", null";
            }else{
                $row_js .= ",".$found;
            }
        }
        $row_js .= "]";
        $rows_js[] = $row_js;
    }

    $rows_js = "data.addRows([" . implode(",\n", $rows_js) .  "]);";
    echo $final_js . $rows_js;
}
