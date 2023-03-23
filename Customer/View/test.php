<?php
$date = date("Y-m-d");
$newDate = date('Y-m-d', strtotime(' + 4 months'));

echo $date;
echo $newDate;
?>