<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\CacheController;

class CacheTest extends TestCase {
    public function testGetMainMenu() {
        $path = 'cache/images/daniel/portfolio/LojaGeralNET/categories.100x75.png';
        $publicPath = public_path($path);
        if (file_exists($publicPath)) {
            unlink($publicPath);
        }
        $response = $this->fetchRouteResult($path);
        self::assertTrue($response->isOk());
    }
}
