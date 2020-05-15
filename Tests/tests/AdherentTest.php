<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class AdherentTest extends TestCase {

    // Test 1 : Verifier si l'on outrepasse les accents
    public function testAccentSkipped(): void {
        $this->assertEquals(
            'JeanCome',
            Adherent::skip_accents('Jean-Côme')
        );
    }

}
