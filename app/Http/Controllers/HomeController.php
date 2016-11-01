<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\MenuItem;

class HomeController extends TheeRopertoController {
    public function getIndex() {
        return view('home.index');
    }

    public function getPerson() {
        return null;
    }

    public function getMainMenu() {
        return null;
    }
}
