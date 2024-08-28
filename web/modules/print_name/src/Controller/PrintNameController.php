<?php

namespace Drupal\print_name\Controller;

use Drupal\Core\Controller\ControllerBase;
// use Symfony\Component\HttpFoundation\Response;

class PrintNameController extends ControllerBase {

    public function print_name() {
        //return new Response('Print name: Tuomas K')
        return [
            '#markup' => $this->t('Print name: Tuomas K'),
        ];
    }

}