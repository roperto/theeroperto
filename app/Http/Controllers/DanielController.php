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
        return [
            MenuItem::create('About Me', $this->getPerson().'/About'),
        ];
    }

    public function get($area = 'About') {
        switch ($area) {
            case 'About':
                return view('daniel.about');
            default:
                abort(404);
        }
    }
}
