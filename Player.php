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

    // Mexi na funcao setNickname, se quebrar volta aq

    // No caso eu tirei a verificacao com strlen pq em retrospect notei que nao faz sentido

    // fiz o mesmo com TODAS AS validacoes de string

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

    // Tem que fazer as classes de Item, e Inventário pra continuar com as funcoes:
    /*
        -> coletarItem()
        -> soltarItem()
    */


/* Precisa mexer MUITO aqui ainda 
    public function coletarItem(Item $item) : bool 
    {
        if ($item->getTamanho() <= $this->inventario->getCapacidadeMaxima()) {
            $this->inventario->adicionar($item);
            $this->inventario->getCapacidadeMaxima() += $item->getTamanho();
        }
    }
*/
    public function subirNivel() : void 
    {
        $this->level += 1;
        $invUp = $this->inventario->getCapacidadeMaxima() + $this->level * 3;
        $this->inventario->setCapacidadeMaxima($invUp);
    }

    public function __toString() : string
    {
        return '<h1 style="color: blue">Jogador: ' . $this->nickname . '</h1> <h1 style="color: gold;">Level: ' . $this->level . '</h1>' . "<h1> Capacidade de Inventário: " . $this->inventario->getCapacidadeMaxima() . "</h1>";
    }
}