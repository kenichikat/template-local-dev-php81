<?php

// strip_tags
//  https://www.php.net/manual/ja/function.strip-tags.php

$str = "<p>hoge</p><br>";
echo strip_tags($str)."\n";
// <br>は残す
echo strip_tags($str, "<br>")."\n";


// array_push
//  https://www.php.net/manual/ja/function.array-push.php
$arr = array(1, 2, 3, 4);

array_push($arr, 5);
//var_dump($arr);
echo implode(",", $arr)."\n";


// array_merge
//  https://www.php.net/manual/ja/function.array-merge.php
$arr2 = array(10, 20, 30, 40);
echo implode(",", array_merge($arr, $arr2))."\n";


/* time, mktime, date
    https://www.php.net/manual/ja/function.time
    https://www.php.net/manual/ja/function.mktime.php
    https://www.php.net/manual/ja/function.date.php
*/
date_default_timezone_set('Asia/Tokyo');

$now = time();
echo "unix timestamp: $now\n";
echo date("Y/m/d H:i:s\n", $now);

echo date("Y/m/d H:i:s\n", mktime(0, 0, 0, 10, 6, 2022));

sleep(3);
echo date("Y/m/d H:i:s\n");
