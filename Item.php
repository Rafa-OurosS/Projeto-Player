<?php 

class Item 
{
    private string $nome;
    private int $tamanho;
    private string $classe;

    public function __construct(string $nome, int $tamanho, string $classe)
    {
        $this->setNome($nome);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function setNome(string $nome) : void 
    {
        if (trim($nome) == null) {
            $nome = "Item sem Nome";
        }
        $this->nome = $nome;
    }

    public function getNome() : string 
    {
        return $this->nome;
    }

    public function setTamanho(int $tamanho) : void 
    {
        if ($tamanho <= 0) {
            $tamanho = 7;
        }
        $this->tamanho = $tamanho;
    }

    public function getTamanho() : int 
    {
        return $this->tamanho;
    }

    public function setClasse(string $classe) : void 
    {
        if (strlen($classe) == 0 || trim($classe) == null) {
            $classe = "Ataque";
        }
        $this->classe = $classe;
    }

    public function getClasse() : string 
    {
        return $this->classe;
    }

    public function itemToString() : string
    {
        return 
        '<h2>Item: ' . $this->getNome() . '</h2>' .
        '<h2>Tamanho: ' . $this->getTamanho() . '</h2>' . 
        '<h2>Classe: ' . $this->getClasse() . '</h2>';
    }
}