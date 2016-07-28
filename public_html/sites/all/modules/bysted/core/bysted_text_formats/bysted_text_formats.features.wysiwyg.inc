<?php
/**
 * @file
 * bysted_text_formats.features.wysiwyg.inc
 */

/**
 * Implements hook_wysiwyg_default_profiles().
 */
function bysted_text_formats_wysiwyg_default_profiles() {
  $profiles = array();

  // Exported profile: bysted_html
  $profiles['bysted_html'] = array(
    'format' => 'bysted_html',
    'editor' => 'ckeditor',
    'settings' => array(
      'default' => 1,
      'user_choose' => 0,
      'show_toggle' => 0,
      'theme' => 'advanced',
      'language' => 'en',
      'buttons' => array(
        'default' => array(
          'Bold' => 1,
          'Italic' => 1,
          'BulletedList' => 1,
          'NumberedList' => 1,
          'Link' => 1,
          'Unlink' => 1,
          'Anchor' => 1,
          'PasteFromWord' => 1,
          'ShowBlocks' => 1,
          'RemoveFormat' => 1,
          'Format' => 1,
          'Styles' => 1,
          'Table' => 1,
        ),
        'drupal_path' => array(
          'Link' => 1,
        ),
        'drupal' => array(
          'media' => 1,
        ),
      ),
      'toolbar_loc' => 'top',
      'toolbar_align' => 'left',
      'path_loc' => 'bottom',
      'resizing' => 1,
      'verify_html' => 1,
      'preformatted' => 0,
      'convert_fonts_to_spans' => 0,
      'remove_linebreaks' => 1,
      'apply_source_formatting' => 0,
      'paste_auto_cleanup_on_paste' => 1,
      'block_formats' => 'p,h2,h3,blockquote,pre',
      'css_setting' => 'theme',
      'css_path' => '',
      'css_classes' => '',
    ),
    'metatags' => array(),
    'rdf_mapping' => array(),
  );

  return $profiles;
}
