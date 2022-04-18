<?php
$now = getdate();
$months = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];
$date = $now['mday']==1 ? "1er" : $now['mday'];
$date .= " {$months[$now['mon']-1]} {$now['year']}";
?>