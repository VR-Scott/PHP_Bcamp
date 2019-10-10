#!/usr/bin/php
<?php
  if ($argc == 1)
       exit;
   $d = array(1=>"lundi",2=>"mardi",3=>"mercredi", 4=>"jeudi",
   5=>"vendredi",6=>"samedi",7=>"dimanche");
   $m = array(1=>"janvier",2=>"février",3=>"mars",4=>"avril",
   5=>"mai",6=>"juin",7=>"juillet",8=>"aout",9=>"septembre",
   10=>"octobre",11=>"novembre",12=>"decembre");
   $out = preg_split('/\s+/', trim($argv[1], " "));
   if (count($out) != 5)
   {
       echo "Wrong Format\n";
       exit;
   }
   else if (!preg_match('/^(?:[2][0-4]|[01][1-9]|10):([0-5][0-9]):([0-5][0-9])$/',$out[4]))
   {
       echo "Wrong Format\n";
       exit;
   }
   $out[0] = array_search(lcfirst($out[0]),$d);
   $out[2] = array_search(lcfirst($out[2]), $m);
   if ((!is_numeric($out[1]) || $out[0] == false || $out[2] == false || count($out[4] = preg_split('/:/', $out[4])) != 3))
   {
       echo "Wrong Format\n";
       exit;
   }
   date_default_timezone_set("Europe/Paris");
   echo mktime($out[4][0], $out[4][1], $out[4][2], $out[2], $out[1], $out[3])."\n";
?>