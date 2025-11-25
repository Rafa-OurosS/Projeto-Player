<?php

require_once 'Player.php';
require_once 'Item.php';
require_once 'Ataque.php';
require_once 'Defesa.php';
require_once 'Magia.php';
require_once 'Inventario.php';

$p1 = new Player("Jaime");
$p2 = new Player("Solaire");

$atq1 = new Ataque('Espada Longa');
$atq2 = new Ataque('Machado de Batalha');

$dfs1 = new Defesa('Escudo Grande');
$dfs2 = new Defesa('Escudo Médio');

$mgc1 = new Magia('Bola de Fogo');
$mgc2 = new Magia('Lança da Luz Solar');

$p1->coletarItem($atq1);
$p1->coletarItem($atq2);
$p1->coletarItem($dfs1);
$p1->coletarItem($mgc1);

echo $p1->__toString();
$p1->subirNivel();
$p1->coletarItem($dfs2);     
echo $p1->__toString();

echo $p2->__toString();
$p2->coletarItem($mgc2);
echo $p2->__toString();