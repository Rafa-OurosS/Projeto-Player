<?php

require_once 'Player.php';
require_once 'Item.php';
require_once 'Ataque.php';
require_once 'Defesa.php';
require_once 'Magia.php';

$atq = new Ataque('Espada Longa');
$dfs = new Defesa('Escudo Grande');
$mgc = new Magia('Bola de Fogo');

echo $atq->itemToString();
echo $dfs->itemToString();
echo $mgc->itemToString();