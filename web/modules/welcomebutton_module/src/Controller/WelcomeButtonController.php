<?php

namespace Drupal\welcomebutton_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class WelcomeButtonController extends ControllerBase {

    public function welcomeButton() {
        return [
            '#markup' => '<button>button</button>',
        ];
    }

}