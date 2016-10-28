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

        $projects = MenuItem::create('Projects');
        $projects->addSubItem(MenuItem::create('Overview', $this->getPerson().'/Projects'));
        $projects->addSubItem(MenuItem::create());
        foreach (DanielRepository::createProjects() as $p) {
            $projects->addSubItem(MenuItem::create($p->title, $this->getPerson().'/Projects/'.$p->key));
        }

        return [
            MenuItem::create('About Me', $this->getPerson().'/About'),
            $portfolio,
            $projects,
        ];
    }

    public function get($area = 'About', $subarea = null, $item = null) {
        switch ($area) {
            case 'About':
                return view('daniel.about');
            case 'Portfolio':
                return $this->getPortfolio($subarea);
            case 'Projects':
                return $this->getProjects($subarea, $item);
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

    private function getProjects($key, $part) {
        $projects = DanielRepository::createProjects();
        $view = 'daniel.projects';

        if ($key == null)
            return view($view, ['projects' => $projects]);
        if (!array_key_exists($key, $projects))
            abort(404, 'Project not found.');

        $view .= '.'.preg_replace("/[^a-z]+/", "", strtolower($key));

        // check projects that require part
        if (in_array($key, ['GNLC', 'University'])) {
            if ($part == 'Overview')
                abort(404, 'Overview is not a separate part.');
            if ($part == null)
                $part = 'Overview';
            $view .= '.'.preg_replace("/[^a-z\\d\\-]+/", "", strtolower($part));
        } else {
            if ($part != null)
                abort(404, 'Project not splitted into parts.');
        }
        if (!view()->exists($view))
            abort(404, 'Project page is not valid.');
        return view($view, ['project' => $projects[$key]]);
    }
}
