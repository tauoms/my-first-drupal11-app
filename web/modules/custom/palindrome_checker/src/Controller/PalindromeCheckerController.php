<?php

namespace Drupal\palindrome_checker\Controller;

use Drupal\Core\Controller\ControllerBase;
// use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\Request;

class PalindromeCheckerController extends ControllerBase {

    public function check_palindrome() {
        $url = Url::fromRoute('palindrome_checker.form');
        $link = Link::fromTextAndUrl($this->t('Go to the form'), $url)->toString();
        return [
            '#markup' => $this->t('Hello, @urlName! @link', ['@link' => $link])
        ];
    }
    public function greeting($url_name) {
        return [
            '#markup' => $this->t('Hello, @name!', ['@name' => $url_name])
        ];
    }

}