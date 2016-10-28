<?php

use App\DanielRepository;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Http\Controllers\DanielController;

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

    /**
     * Related to issue #16.
     */
    public function testPortfolioImage() {
        foreach (DanielRepository::createPortfolio() as $project) {
            foreach ($project->features as $feature) {
                if (is_array($feature[1])) {
                    foreach ($feature[1] as $line) {
                        if (is_array($line)) {
                            list($img) = explode(':', $line[1]);
                            self::assertFileExists(public_path('images/daniel/portfolio/'.$project->key.'/'.$img.'.png'));
                        }
                    }
                }
            }
        }
    }
}
