<?php
/**
 * @file
 * bysted_text_formats.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function bysted_text_formats_filter_default_formats() {
  $formats = array();

  // Exported format: HTML
  $formats['bysted_html'] = array(
    'format' => 'bysted_html',
    'name' => 'HTML',
    'cache' => '1',
    'status' => '1',
    'weight' => '0',
    'filters' => array(
      'filter_html' => array(
        'weight' => '-10',
        'status' => '1',
        'settings' => array(
          'allowed_html' => '<a> <em> <strong> <cite> <blockquote> <code> <ul> <ol> <li> <dl> <dt> <dd> <h2> <h3> <p> <table> <thead> <tbody> <tfoot> <tr> <td> <th> <br> <b>',
          'filter_html_help' => 1,
          'filter_html_nofollow' => 0,
        ),
      ),
      'ckeditor_link_filter' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_url' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(
          'filter_url_length' => '72',
        ),
      ),
      'media_filter' => array(
        'weight' => '2',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_htmlcorrector' => array(
        'weight' => '10',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  return $formats;
}
