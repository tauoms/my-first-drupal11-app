<?php

namespace Drupal\welcomebutton_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class WelcomeButtonController extends ControllerBase {

    public function welcomeButton() {
        return new Response('Print name: Tuomas K');
    }

}