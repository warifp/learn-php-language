<?php

exec('ls *.php > filelist.txt');

$datas = file_get_contents('filelist.txt');
$datas = explode("\n", str_replace("\r", "", $datas));

foreach ($datas as $key => $data) {
    if ($data) {
        if ($data !== 'index.php') {
            exec('php ' . $data);
        }
    }
}

// unlink('filelist.txt');
