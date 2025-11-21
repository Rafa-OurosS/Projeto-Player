<?php 

require_once 'Item.php';

class Inventario 
{
    private int $capacidadeMaxima = 20;
    private array $itens;

    public function __construct()
    {
        $this->itens = [];        
    }

    public function getCapacidadeMaxima() : int 
    {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima) : void 
    {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function adicionar(Item $item) : void 
    {
        $this->itens[] = $item;
    }
    
    public function remover(string $nome) : void 
    {
        foreach ($this->itens as $i => $item) {
            if ($item->getNome() == $nome) {
                unset($this->itens[$i]);
            }
        }

        $this->itens = array_values($this->itens);
    }
}