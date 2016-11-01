<?php

use App\Http\Controllers\DanielController;
use App\Models\PortfolioProject;
use App\Repository\Daniel\PortfolioProjectsRepository;

class DanielTest extends TestCase {
    public function testControllerRoutes() {
        self::assertPathGetsView('daniel.about', 'Daniel');
    }

    public function testGetPerson() {
        self::assertSame('Daniel', (new DanielController())->getPerson());
    }

    public function testGetMainMenu() {
        $menu = (new DanielController())->getMainMenu();
        self::assertMenuContainsUrl('Daniel/About', $menu);
        self::assertMenuContainsUrl('Daniel/Portfolio', $menu);
        self::assertMenuContainsUrl('Daniel/Projects', $menu);
    }
}
