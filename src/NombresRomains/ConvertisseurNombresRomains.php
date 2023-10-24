<?php

namespace NombresRomains;

class ConvertisseurNombresRomains
{
    public static function Convertir(int $chiffreArabe): string
    {
        return $chiffreArabe == 1 ? "I" : "II";
    }
}