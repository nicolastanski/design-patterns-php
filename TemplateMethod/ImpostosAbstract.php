<?php

namespace TemplateMethod;

abstract class ImpostosAbstract
{
    private function calculaPrimeiroImpostoFixo(float $precoProduto): float
    {
        return ($precoProduto * 1.3);
    }

    private function calculaSegundoImpostoFixo(float $precoProduto): float
    {
        return ($precoProduto * 1.1);
    }

    abstract protected function calculaImpostoVariavel(float $precoProduto): float;

    public function calculaImpostosProduto(float $precoProduto): float
    {
        $precoProduto = $this->calculaPrimeiroImpostoFixo($precoProduto);

        $precoProduto = $this->calculaSegundoImpostoFixo($precoProduto);

        $precoProduto = $this->calculaimpostoAdicional($precoProduto);

        $precoProduto = $this->calculaImpostoVariavel($precoProduto);

        return $precoProduto;
    }

    protected function calculaImpostoAdicional(float $precoProduto)
    {
        return $precoProduto;
    }
}