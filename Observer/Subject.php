<?php

namespace Observer;

interface Subject
{
    public function adicionarObserver(Observer $observer);

    public function removerObserver(Observer $observer): bool;

    public function notificarObservers(string $codigoProduto);
}