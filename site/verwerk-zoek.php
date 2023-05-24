<?php
$zoekterm = $_POST['toolsearch'];

if (empty($zoekterm))
{
    header('location: index.php');
    exit;
}

require 'database.php';

