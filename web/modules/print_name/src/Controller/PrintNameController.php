<?php

namespace Drupal\print_name\Controller;

use Drupal\Core\Controller\ControllerBase;
// use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\Request;

class PrintNameController extends ControllerBase {

    public function print_name(Request $request) {
        //return new Response('Print name: Tuomas K')
        $url = Url::fromRoute('print_name.form');
        $link = Link::fromTextAndUrl($this->t('Go to the form'), $url)->toString();
        return [
            '#markup' => $this->t('Hello, @urlName! @link', ['@link' => $link, '@urlName' => $request->get('url_name')])
        ];
    }

}