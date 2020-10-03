<?php

namespace Facade;

class ModuloApiSms
{
    public function geraTokenApi(string $apiKey, string $apiPass): string
    {
        // Simula a geração de um token através da API de envio e SMS
        return 'TOKEN_RETORNADO_API';
    }

    public function enviaSms(
        string $tokenApi,
        string $nomeRemetente,
        string $nomeDestinatario,
        string $telefoneDestinatario,
        string $mensagem
    ): bool {
        echo "SMS enviado com sucesso.\n";

        return true;
    }
}