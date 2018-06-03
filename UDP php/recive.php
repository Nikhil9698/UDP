<?php
 $fp = stream_socket_client("udp://127.0.0.1:9698", $errno, $errstr);
 if (!$fp) {
    echo "$errno - $errstr<br />\n";
 } else {      
    fwrite($fp, "1 2 3");    
    echo fread($fp, 15);
    fclose($fp);
 }
?>
