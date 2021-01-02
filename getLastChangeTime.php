<?php

$redis = new redis();
$redis->connect('redis',6379);

$id = $_GET['id'];

if(!isset($id)) die();

$s = 'chat/'.$id;

if($redis->get($s)) echo $redis->get($s);
else echo 0;
