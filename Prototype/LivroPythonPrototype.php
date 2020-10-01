<?php

namespace Prototype;

class LivroPythonPrototype extends LivroPrototype
{
    public function __construct()
    {
        $this->setAssunto('Python');
    }

    public function __clone()
    {
        echo "Livro clonado \n";
    }
}