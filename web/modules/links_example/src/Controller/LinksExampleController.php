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
        $blockAdminDispUrl = Url::fromRoute('block.admin_display');
        $blockAdminDispLink = Link::fromTextAndUrl($this->t('Block Admin Display'), $blockAdminDispUrl)->toString();

        $sysAdConUrl = Url::fromRoute('system.admin_content');
        $sysAdConLink = Link::fromTextAndUrl($this->t('System Admin Content'), $sysAdConUrl)->toString();

        $entUserColUrl = Url::fromRoute('entity.user.collection');
        $entUserColLink = Link::fromTextAndUrl($this->t('Entity User Collection'), $entUserColUrl)->toString();

        $frontUrl = Url::fromRoute('<front>');
        $frontLink = Link::fromTextAndUrl($this->t('Front Page'), $frontUrl)->toString();

        return [
            '#prefix' => '<ul>',
            '#suffix' => '</ul>',
            '#markup' => '<li>' . $blockAdminDispLink . '</li>' .
                         '<li>' . $sysAdConLink . '</li>' .
                         '<li>' . $entUserColLink . '</li>' .
                         '<li>' . $frontLink . '</li>'
        ];
    }
}