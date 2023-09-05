<?php
include('flag.php');

function is_correct_flag($f)
{
    global $db;
    $st = $db->prepare('SELECT 1 FROM Flags WHERE flag LIKE ?');
    $st->bindValue(1, $f);
    if ($st->execute() && $st->fetch())
        return 'Hit';
    return 'Miss';
}

$search = $_GET['search'] ?? '';
if ($search)
    echo is_correct_flag(str_replace('%', '', $search));
else
    highlight_file(__FILE__);
?>
