<?php
function pre($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
function pr($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    exit;
}
