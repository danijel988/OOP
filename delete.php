<?php
include_once './include/entries.php';
$id = $_GET["del"];
$entry = new Entry();
$entry->Delete($id);
echo 'Row has been deleted';
header('location:index.php');
exit();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

