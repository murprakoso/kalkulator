<?php

namespace Murprakoso\Kalkulator;

/**
 * Basic Calculator.
 *
 */
class BasicCalculator
{
    /**
     * Menjumlahkan semua data dalam sebuah array.
     *
     * @param array $data
     * @return integer
     */
    public static function add(array $data)
    {
        return array_sum($data);
    }

    /**
     * Mengalikan semua data dalam sebuah array.
     *
     * @param array $data
     * @return integer
     */
    public static function multiply(array $data)
    {
        return array_product($data);
    }

    /**
     * Mengurangkan semua data dalam sebuah array.
     *
     * @param array $data
     * @return integer
     */
    public static function subtract(array $data)
    {
        $result = $data[0];

        for ($i = 1; $i < count($data); $i++) {
            $result -= $data[$i];
        }

        return $result;
    }

    /**
     * Membagi semua data dalam sebuah array.
     *
     * @param array $data
     * @return integer
     */
    public static function division(array $data)
    {
        $result = $data[0];

        for ($i = 1; $i < count($data); $i++) {
            $result /= $data[$i];
        }

        return $result;
    }
}
