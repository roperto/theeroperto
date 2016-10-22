<?php

use App\TheeRoperto;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TheeRopertoTest extends TestCase {
    /**
     * Checks if we are all in there.
     *
     * @return void
     */
    public function testGetNames() {
        self::assertSame(['Christina', 'Daniel', 'Luigi', 'Amelia',], TheeRoperto::getNames());
    }
}
