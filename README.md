# Drupal Twig Components Plugin for Pattern Lab

The Drupal Twig Components Plugin provides stand-alone implementations of Drupal 8's custom Twig filters, functions and tags while also allowing Drupal to use any additional custom Twig filters, functions and tags added to Pattern Lab.

It is a component of [Pattern Lab Twig Standard Edition for Drupal](https://github.com/pattern-lab/edition-php-drupal-standard), which can be used to develop a Drupal compatible pattern library.

Twig filter, function, tag and test add-ons should be created in the `dist` folder, and this library should be required by both the Drupal 8 and Pattern Lab project to ensure that both environments are using a consistant set of Twig extensions.
