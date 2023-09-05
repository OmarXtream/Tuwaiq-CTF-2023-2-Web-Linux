<?php
include('flag.php');

$num = $_GET['num']?: 0;
$checksum = $_GET['checksum']?: 0;

if (md5($num + hexdec(md5($flag))) === $checksum)
    echo "Got flag: {$flag} <br>";
else
    highlight_file(__FILE__);