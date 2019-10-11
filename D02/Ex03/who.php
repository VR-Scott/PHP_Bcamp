#!/usr/bin/php
<?php

$fd = fopen("/var/run/utmpx", "r");
$out = array();
while ($inout = fread($fd, 628))
{
    $inout = unpack("a256user/a4id/a32inout/ipid/itype/I2time", $inout);
    if (strcmp($inout['type'], "7") == 0)
        array_push($out, $inout);
}
date_default_timezone_set("Africa/Johannesburg");

foreach($out as $user)
{
    printf("%s	 %s  %s\n", $user['user'], $user['inout'], date("M j H:i", $user['time1']));
}
?>