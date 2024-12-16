<?php
try{
$conne = new PDO("mysql:host=localhost;dbname=unite_tiaret",'root','');
}catch(PDOException $e)
{
    die("conncetion impossible".$e->getMessage());
}