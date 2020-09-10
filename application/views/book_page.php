<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$i = 1;
    foreach($books as $mybook){
        echo "Book".$i." : ".$mybook."</br>";
        $i++;
    }
?>
