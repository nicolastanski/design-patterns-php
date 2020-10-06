<?php

namespace Observer;

class ControleEstoqueSubject implements Subject
{
    private $observers;

    public function atualizaEstoqueProduto(string $codigoProduto, int $novaQuantidade)
    {
        // Simula baixas no estoque

        if ($novaQuantidade == 0) {
            $this->notificarObservers($codigoProduto);
        }
    }

    public function adicionarObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removerObserver(Observer $observerRemover): bool
    {
        foreach($this->observers as $index => $observer) {
            if ($observer === $observerRemover) {
                unset($this->observers[$index]);
                return true;
            }
        }

        return false;
    }

    public function notificarObservers(string $codigoProduto)
    {
        foreach($this->observers as $observer) {
            $observer->atualizado($codigoProduto);
        }
    }
}