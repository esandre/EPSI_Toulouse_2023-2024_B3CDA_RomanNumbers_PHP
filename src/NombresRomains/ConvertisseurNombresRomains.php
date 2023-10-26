<?php

namespace NombresRomains;

class ConvertisseurNombresRomains
{
    public static function Convertir(int $chiffreArabe): string
    {
        return match ($chiffreArabe) {
            1 => "I",
            2 => "II",
            3 => "III",
            default => "IV"
        };
    }
}