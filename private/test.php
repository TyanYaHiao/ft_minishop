#!/usr/bin/php
<?php
 $str = "a:1:{i:0;a:2:{s:5:\"login\";s:3:\"qwe\";s:6:\"passwd\";s:128:\"19fa61d75522a4669b44e39c1d2e1726c530232130d407f89afee0964997f7a73e83be698b288febcf88e3e03c4f0757ea8964e59b63d93708b138cc42a66eb3\";}}";
 $array = unserialize($str);
// print '<pre>';
 print $array[0]['passwd'] . "\n" . hash("whirlpool", "qwe");