<?php

namespace App\Helpers;

class Formatter
{

    public function __construct()
    {

    }


    /**
     * jmaskToDecimal
     *
     * Formata os valores de jmaskMoney para valores decimais
     *
     * @param  string $value
     * @return float
     */
    public static function jmaskToDecimal(string $value = null): float
    {
        $result = (float) implode('.', explode(',', $value));

        return $result;
        $data = null;
        $value = null;
    }
}
