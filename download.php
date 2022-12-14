<?php
    $filename = 'input.txt';
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false); // required for certain browsers
    header('Content-Type: text/html; charset=UTF-8');

    header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . filesize($filename));

    readfile($filename);
    exit;
?>