<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\DanielRepository;

use App\MenuItem;

class DanielController extends Controller {
    public function getPerson() {
        return 'Daniel';
    }

    public function getMainMenu() {
        $portfolio = MenuItem::create('Portfolio');
        $portfolio->addSubItem(MenuItem::create('Overview', $this->getPerson().'/Portfolio'));
        $portfolio->addSubItem(MenuItem::create());
        foreach (DanielRepository::createPortfolio() as $p) {
            $portfolio->addSubItem(MenuItem::create($p->title, $this->getPerson().'/Portfolio/'.$p->key));
        }

        return [
            MenuItem::create('About Me', $this->getPerson().'/About'),
            $portfolio,
        ];
    }

    public function get($area = 'About', $subarea = null) {
        switch ($area) {
            case 'About':
                return view('daniel.about');
            case 'Portfolio':
                return $this->getPortfolio($subarea);
            default:
                abort(404);
        }
    }

    private function getPortfolio($key) {
        $projects = DanielRepository::createPortfolio();
        if ($key == null) {
            $projects = array_reverse($projects);
            return view('daniel.portfolio', ['projects' => $projects]);
        }
        // has key, show specific project
        if (!array_key_exists($key, $projects)) {
            abort(404, 'Portfolio item not found.');
        }
        return view('daniel.portfolio_project', ['project' => $projects[$key]]);
    }
}
