<?php

require_once 'Item.php';

class Inventario
{
    private int $capacidadeMaxima;
    private array $itens;

    public function __construct()
    {
        $this->capacidadeMaxima = 20;
        $this->itens = [];
    }

    public function getCapacidadeMaxima() : int
    {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima) : void
    {
        if ($capacidadeMaxima < 0) {
            $capacidadeMaxima = 0;
        }
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function getItens() : array
    {
        return $this->itens;
    }

    public function capacidadeLivre() : int
    {
        $espacoOcupado = 0;

        foreach ($this->itens as $item) {
            $espacoOcupado += $item->getTamanho();
        }

        return $this->capacidadeMaxima - $espacoOcupado;
    }

    // Adiciona o item apenas se possivel
    public function adicionar(Item $item) : bool
    {
        if ($item->getTamanho() <= $this->capacidadeLivre()) {
            $this->itens[] = $item;
            return true;
        }

        return false;
    }

    public function remover(Item $item) : bool
    {
        foreach ($this->itens as $indice => $i) {
            if ($i === $item) {
                unset($this->itens[$indice]);
                $this->itens = array_values($this->itens); // reorganiza índices desse array
                return true;
            }
        }

        return false;
    }
}