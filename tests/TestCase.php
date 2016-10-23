<?php

use App\MenuItem;

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase {
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication() {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public static function assertPathGetsView($expected, $path, $message = '') {
        $request = Mockery::mock('\Illuminate\Http\Request');
        $request->shouldReceive('getMethod')->andReturn('GET');
        $request->shouldReceive('path')->andReturn($path);
        $request->shouldReceive('decodedPath')->andReturn($path);
        $route = Route::getRoutes()->match($request);
        $result = $route->run($request);
        self::assertInstanceOf(\Illuminate\View\View::class, $result, $message);
        self::assertSame($expected, $result->getName(), $message);
    }

    /**
     * Checks if the provided menu contains one option with the given url.
     *
     * @param string $url
     * @param MenuItem[] $menu
     * @return bool
     */
    public static function checkMenuContainsUrl($url, $menu) {
        foreach ($menu as $item) {
            if ($item->getUrl() === $url) {
                return true;
            }
        }
        return false;
    }

    public static function assertMenuContainsUrl($url, $menu, $message = '') {
        self::assertTrue(self::checkMenuContainsUrl($url, $menu), $message);
    }
}
