<?php

namespace Drupal\links_example\Controller;

use Drupal\Core\Controller\ControllerBase;
// use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Link;
use Drupal\Core\Url;

// paths for links:
// block.admin_display = /admin/structure/block
// system.admin_content	 = /admin/content
// entity.user.collection = /admin/people	
// <front> = /

class LinksExampleController extends ControllerBase {

    public function displayLinks() {
        $url = Url::fromRoute('block.admin_display');
        $link = Link::fromTextAndUrl($this->t('Block Admin Display'), $url)->toString();
        return [
            '#markup' => $this->t('Admin links: @link', ['@link' => $link])
        ];
    }
}