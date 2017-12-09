<?php

foreach($_POST as $k => $el){
    if (substr($k, 0, 1) == "s"){
        echo $k;
        echo $el;
    }
}