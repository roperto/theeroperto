<?php
use Illuminate\Http\Request;

/**
 * Class CacheTest
 */
class CacheTest extends TestCase {
    public function testGetMainMenu() {
        $path = 'cache/images/daniel/portfolio/LojaGeralNET/categories.100x75.png';
        $publicPath = public_path($path);
        if (file_exists($publicPath)) {
            unlink($publicPath);
        }
        /** @var Request $response */
        $response = static::fetchRouteResult($path);
        self::assertTrue($response->isOk());
        list($width, $height) = getimagesizefromstring($response->getContent());
        self::assertSame(100, $width);
        self::assertSame(75, $height);
    }
}
