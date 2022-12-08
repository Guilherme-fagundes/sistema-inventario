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

    /**
     * number
     * Formata valores float para reais
     * EX: 19.9 => R$ 19,90
     *
     * @param  float $price
     * @return string
     */
    public static function number(float $price): string
    {
        return number_format($price, 2, ',', '.');
    }
}
