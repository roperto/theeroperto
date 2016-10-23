<?php

namespace App\Http\Controllers;

use App\TheeRoperto;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
        view()->share('theeroperto', [
            'names' => TheeRoperto::getNames(),
            'person' => $this->getPerson(),
            'menu' => $this->getMainMenu(),
        ]);
    }

    abstract function getPerson();
    abstract function getMainMenu();
}
