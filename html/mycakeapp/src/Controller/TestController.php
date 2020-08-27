<?php

namespace App\Controller;

use App\Controller\AppController;

class TestController extends AppController {

public function initialize() {
    $this->viewBuilder()->setLayout('test');
}

public function test() {

}

}