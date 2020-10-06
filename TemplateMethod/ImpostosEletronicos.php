<?php

namespace TemplateMethod;

class ImpostosEletronicos extends ImpostosAbstract
{
    public function calculaImpostoVariavel(float $precoProduto): float
    {
        $precoProduto = ($precoProduto * 1.2);

        return $precoProduto;
    }

    protected function calculaImpostoAdicional(float $precoProduto)
    {
        return $precoProduto - ($precoProduto * 0.1);
    }
}