<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
echo date("d F Y ",mktime(0,0,0,$month,$day,$year));
?>