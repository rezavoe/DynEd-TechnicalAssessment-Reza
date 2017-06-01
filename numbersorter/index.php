<?php
/*
File usia.txt didownload di : http://idbuild.id.dyned.com/12314/usia.txt
1 Juni 2017 oleh Reza Adhi (reza.historee@gmail.com) untuk technical assessment DynEd
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('memory_limit', "2048M"); // Mencegah memory exhaustion
ini_set('max_execution_time', 300); // 5 menit
header("Content-Type: text/plain");
$lines = file("./number_cache.txt", FILE_IGNORE_NEW_LINES);
sort($lines, SORT_NUMERIC);
$sorted_lines = implode("\n", $lines);
file_put_contents("./usia_sorted.txt", $sorted_lines);
?>