<?php
session_start();
 $code =  $_SESSION['code'];
 $code_m =  $_SESSION['code_m'];
 echo $code.";".$code_m;

?>