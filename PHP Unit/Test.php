<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "ProsesLogin.php";

// Class untuk run Testing.
class Test extends TestCase
{
    public function testLogin()
    {
        // Kita pakai class yang mau kita test.
        $Pl = new ProsesLogin();

        // Kita masukan parameter 2 kata, yang harusnya dapat output 2.
        $TestSentence = "Berhasil Login"; // 2 Kata ..
        $ProsesLogin = $Pl->loginProses($TestSentence);

        //Output Notifikasi berhasil login
        $this->assertEquals(2, $ProsesLogin); 
    }
}