<?php

namespace DrupalPatternLab\TwigExtensions;

/**
 * Adapts Pattern Lab's Twig extensions for Drupal.
 */
class ExtensionAdapter extends \Twig_Extension {

  /**
   * Creates the adapter twig extension.
   *
   * This will load from the default Pattern Lab twig extension locations.
   */
  public function __construct() {
    ExtensionLoader::init();
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return ExtensionLoader::get('functions');
  }

  /**
   * {@inheritdoc}
   */
  public function getFilters() {
    return ExtensionLoader::get('filters');
  }

  /**
   * {@inheritdoc}
   */
  public function getTokenParsers() {
    return ExtensionLoader::get('parsers');
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'patternlab_ext_adapter';
  }

}
