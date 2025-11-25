<?php

require_once 'Inventario.php';
require_once 'Item.php';

class Player
{
    private string $nickname;
    private int $level;
    private Inventario $inventario;

    public function __construct(string $nickname)
    {
        $this->setNickname($nickname);
        $this->level = 1;
        $this->inventario = new Inventario();
    }

    public function setNickname(string $nickname) : void 
    {
        if (trim($nickname) == null) {
            $nickname = 'Sem Nome';
        }
        $this->nickname = $nickname;
    }

    public function getNickname() : string 
    {
        return $this->nickname;
    }

    public function getLevel() : int 
    {
        return $this->level;
    }

    public function coletarItem(Item $item) : void 
    {
        $this->inventario->adicionar($item);
    }

    public function droparItem(Item $item) : void
    {
        $this->inventario->remover($item);
    }

    public function subirNivel() : void 
    {
        $this->level += 1;
        $invUp = $this->inventario->getCapacidadeMaxima() + $this->level * 3;
        $this->inventario->setCapacidadeMaxima($invUp);
    }

    public function inventario() : string 
    {
        $itensTxt = '<ul style="list-style: square;">';
        foreach($this->inventario->getItens() as $item) {
            $itensTxt .= "<li>" . $item->itemToString() . "</li>";
        }
        $itensTxt .= "</ul>";
        $itensTxt .= "<h2>Capacidade Livre: " . $this->inventario->capacidadeLivre() . "</h2>";
        return $itensTxt;
    }

    public function __toString() : string
    {
        if ($this->inventario->capacidadeLivre() == 20) {
            return '<h1 style="color: blue">Jogador: ' . $this->nickname . '</h1> <h1 style="color: gold;">Level: ' . $this->level . '</h1>' . "<h1> Capacidade de Inventário: " . $this->inventario->getCapacidadeMaxima() . "</h1>" . "<h2>Inventário Vazio</h2>" . "<hr>";
        }
        return '<h1 style="color: blue">Jogador: ' . $this->nickname . '</h1> <h1 style="color: gold;">Level: ' . $this->level . '</h1>' . "<h1> Capacidade de Inventário: " . $this->inventario->getCapacidadeMaxima() . "</h1>" . "<hr>" ."<h1> Itens no Inventário: </h1>" . $this->inventario() . "<hr>";
    }
}