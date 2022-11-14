<?php

/**
 * @file
 * Post update hooks for CivicTheme Default Demo Content.
 */

use Drupal\civictheme_content\Helper;
use Drupal\Core\Utility\UpdateException;

/**
 * Sets homepage.
 *
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
function civictheme_content_default_post_update_set_homepage() {
  try {
    Helper::setHomepageFromNode("Your organisation's tagline");
  }
  catch (\Exception $e) {
    throw new UpdateException($e->getMessage());
  }
}

/**
 * Sets site slogan.
 *
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
function civictheme_content_default_post_update_set_site_slogan() {
  \Drupal::service('config.factory')->getEditable('system.site')
    ->set('slogan', 'A design system by Salsa Digital')
    ->save();
}
