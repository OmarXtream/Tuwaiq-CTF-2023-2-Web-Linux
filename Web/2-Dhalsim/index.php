<?php
include('flag.php');

switch ($_GET['option']) {
    case 'welcome':
        echo 'Welcome hacker<br>';
        break;

    case 'debug':
        if (!preg_match('/^[h-x]{5}\D+\d{4}[^e-j]{3,}$/',$_SERVER['HTTP_USER_AGENT']))
        break;

    case rand(): // You cannot guess this, trust me!
        echo "<h2>You got the flag: {$flag}</h2><br>";
        break;

    default:
        highlight_file(__FILE__);
}