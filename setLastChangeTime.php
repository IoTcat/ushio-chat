<?php

$redis = new redis();
$redis->connect('redis',6379);

$id = $_GET['id'];

if(!isset($id)) die();

$s = 'chat/'.$id;

$redis->set($s, (int)(microtime(true)*1000));
