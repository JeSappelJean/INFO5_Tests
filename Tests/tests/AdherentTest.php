<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class AdherentTest extends TestCase {

    // Test 1 : Verifier si l'on outrepasse les accents
    public function testAccentSkipped(): void {
        $this->assertEquals(
            'Come',
            Adherent::skip_accents('Côme')
        );
    }

    // Test 2 : Vérifier si l'id est concaténé correctement
    public function testConcatenation(): void {
        $this->assertEquals(
            'STEPHANEBONHOMME1964-03-08',
            Adherent::concatenate_id('Stéphane','Bonhomme',new DateTime('1964-03-08'))
        );
    }

}
