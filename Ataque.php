<?php 

require_once 'Item.php';

class Ataque extends Item 
{
    public function __construct(string $nome)
    {
        parent::__construct($nome, tamanho: 7, classe: 'Ataque');
    }
}