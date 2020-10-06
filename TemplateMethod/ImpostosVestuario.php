<?php

namespace TemplateMethod;

class ImpostosVestuario extends ImpostosAbstract
{
    public function calculaImpostoVariavel(float $precoProduto): float
    {
        return ($precoProduto * 1.15);
    }    
}