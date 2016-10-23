<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Http\Controllers\DanielController;

class DanielTest extends TestCase {
    public function testControllerRoutes() {
        self::assertPathGetsView('daniel.about', 'Daniel');

        //
        //        $controller = new DanielController();
        //        $name = $controller->getPerson();
        //        $menu = $controller->getMainMenu();
        //        foreach ($menu as $k => $v) {
        //            $this->visit("{$name}/{$k}")->assertResponseOk();
        //        }
    }

    public function testGetPerson() {
        self::assertSame('Daniel', (new DanielController())->getPerson());
    }

    public function testGetMainMenu() {
        self::assertMenuContainsUrl('Daniel/About', (new DanielController())->getMainMenu());
    }
}
