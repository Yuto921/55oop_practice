<?php

require_once('BradleyStevens.php');
require_once('Player.php');
require_once('LeBronJames.php');

$yuto = new Player('yuto', 'PG', '174');

$yuto->shoot('ゆうと');
$yuto->showShootResult('ゆうと');

$yuto->shoot('ゆうと');
$yuto->shoot('ゆうと');
$yuto->shoot('ゆうと');
$yuto->shoot('ゆうと');

$yuto->showShootResult('ゆうと');

$LeBron = new Player('LeBron', 'SF', '203');

$LeBron->shoot('レブロン');

$Bradley = new BradleyStevens();
$Bradley->getPlayer($LeBron);
$Bradley->showPlayers();
$Bradley->getPlayer($yuto);
$Bradley->showPlayers();

