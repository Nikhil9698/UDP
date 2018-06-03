<?php    
 $buf_size = 1024;
 $socket = stream_socket_server("udp://127.0.0.1:9698", $errno, $errstr, STREAM_SERVER_BIND);
 do {
   $str = stream_socket_recvfrom($socket, $buf_size, 0, $peer); 
   $str = "abc";
   stream_socket_sendto($socket, $str, strlen($str), 0, $peer);    
 } while (true);
?>
