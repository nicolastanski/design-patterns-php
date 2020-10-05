<?php

namespace Memento;

class TextoCareTaker
{
    protected $estadosTexto = [];

    public function adicionarMemento(TextoMemento $textoMemento)
    {
        $this->estadosTexto[] = $textoMemento;
    }

    public function retornaUltimoEstadoSalvo(): TextoMemento
    {
        if (empty($this->estadosTexto)) {
            return null;
        }

        $textoMemento = end($this->estadosTexto);
        unset($this->estadosMemento[sizeof($this->estadosTexto) - 1]);

        return $textoMemento;
    }
}