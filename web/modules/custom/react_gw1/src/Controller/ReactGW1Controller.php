<?php

namespace Drupal\react_gw1\Controller;

use Drupal\Core\Controller\ControllerBase;
// use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Link;
use Drupal\Core\Url;

class ReactGW1Controller extends ControllerBase {

    public function renderMusicPlayer() {
        return [
            "#markup" => '<div id="react-musicplayer"></div>',
            "#attached" => [
            "library" => ["react_gw1/react_gw1"],
            ],
        ];
    }
}