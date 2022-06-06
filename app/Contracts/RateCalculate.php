<?php

namespace App\Contracts;

interface RateCalculate
{
    /**
     * Seleciona o estado da qual se trata a tabela de Custa
     *
     * @param string $state
     * @return void
     */
    public static function state($state);
}
