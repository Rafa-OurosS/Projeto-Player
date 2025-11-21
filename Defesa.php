<?php 

require_once 'Item.php';

class Defesa extends Item 
{
    public function __construct(string $nome)
    {
        parent::__construct($nome, tamanho: 4, classe: 'Defesa');
    }
}