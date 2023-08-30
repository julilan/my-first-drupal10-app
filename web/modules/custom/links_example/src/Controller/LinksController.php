<?php

declare(strict_types=1);

namespace Drupal\links_example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\Core\Link;

/**
 * Returns responses for Links example routes.
 */

class LinksController extends ControllerBase
{

  public function links()
  {
    // Link to /admin/structure/block
    $url1 = Url::fromRoute('block.admin_display');
    $link1 = Link::fromTextAndUrl('Go to block admin page', $url1);
    $list[] = $link1;

    // Link to /admin/content
    $url2 = Url::fromRoute('system.admin_content');
    $link2 = Link::fromTextAndUrl('Go to content admin page', $url2);
    $list[] = $link2;

    // Link to /admin/people
    $url3 = Url::fromRoute('entity.user.collection');
    $link3 = Link::fromTextAndUrl('Go to user admin page', $url3);
    $list[] = $link3;

    // Link to front page
    $url4 = Url::fromRoute('<front>');
    $link4 = Link::fromTextAndUrl('Go to the front page', $url4);
    $list[] = $link4;

    // External link
    $url5 = Url::fromUri('https://www.drupal.org');
    $link_options = [
      'attributes' => [
        'target' => '_blank',
        'title' => 'Go to Drupal home page'
      ]
    ];
    $url5->setOptions($link_options);
    $link5 = Link::fromTextAndUrl(t('Go to Drupal home page'), $url5);
    $list[] = $link5;

    $output['links_example'] = [
      '#theme' => 'item_list',
      '#items' => $list,
      '#title' => $this->t('Links Example Module Developed for Customer'),
    ];

    return $output;
  }
}
