<?php
$original="2019-03-31";
$timestamp=strtotime($original);
$new_date=date("d-m-Y",$timestamp);
echo $new_date;
?>
OutPut:- 31-03-2019
