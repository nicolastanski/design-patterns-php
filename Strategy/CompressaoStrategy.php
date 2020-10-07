<?php

namespace Strategy;

abstract class CompressaoStrategy
{
    public function renomearArquivoEmOrdem()
    {
        echo 'Arquivos renomeados';
    }

    abstract public function comprimir(string $caminhoArquivos): bool;
}