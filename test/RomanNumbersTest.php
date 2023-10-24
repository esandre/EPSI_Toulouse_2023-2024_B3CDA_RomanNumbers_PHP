<?php

use NombresRomains\ConvertisseurNombresRomains;
use PHPUnit\Framework\TestCase;

final class RomanNumbersTest extends TestCase
{
    public function testUn() {
        // ETANT DONNE le chiffre 1
        $chiffreArabe = 1;

        // QUAND on le convertit en nombres romains
        $nombreRomain = ConvertisseurNombresRomains::Convertir($chiffreArabe);

        // ALORS on obtient "I"
        $this->assertEquals('I', $nombreRomain);
    }

    public function testDeux() {
        // ETANT DONNE le chiffre 2
        $chiffreArabe = 2;

        // QUAND on le convertit en nombres romains
        $nombreRomain = ConvertisseurNombresRomains::Convertir($chiffreArabe);

        // ALORS on obtient "II"
        $this->assertEquals('II', $nombreRomain);
    }
}