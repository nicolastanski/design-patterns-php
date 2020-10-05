<?php

namespace Memento;

class Texto
{
    protected $texoCareTaker;

    public function __construct()
    {
        $this->textoCareTaker = new TextoCareTaker();
        $this->texto = '';
    }

    public function escreverTexto(string $texto)
    {
        $this->textoCareTaker->adicionarMemento(new TextoMemento($this->texto));
        $this->texto .= $texto;
    }

    public function desfazerEscrita()
    {
        $this->texto = $this
            ->textoCareTaker
            ->retornaUltimoEstadoSalvo()
            ->getTexto();
    }

    public function retornarTexto(): string
    {
        return $this->texto;
    }
}