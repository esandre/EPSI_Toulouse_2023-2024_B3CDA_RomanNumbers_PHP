<?php

use NombresRomains\ConvertisseurNombresRomains;
use PHPUnit\Framework\TestCase;

final class RomanNumbersTest extends TestCase
{
    /**
     * @dataProvider providerTestUnité
     */
    public function testUnité(int $chiffreArabe) {
        // ETANT DONNE le chiffre <chiffreArabe>
        // QUAND on le convertit en nombres romains
        $nombreRomain = ConvertisseurNombresRomains::Convertir($chiffreArabe);

        // ALORS on obtient "I" répété <chiffreArabe> fois
        $attendu = str_repeat('I', $chiffreArabe);
        $this->assertEquals($attendu , $nombreRomain);
    }

    public static function providerTestUnité() {
        return [[1], [2], [3]];
    }
}