<?php
/**
 * @file
 * bysted_search_page.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function bysted_search_page_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'search_node_panel_context';
  $handler->task = 'search';
  $handler->subtask = 'node';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Search Node',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
  );
  $display = new panels_display();
  $display->layout = '6_3_3_stacked';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'sidebar' => NULL,
      'middle' => NULL,
      'content' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-1';
    $pane->panel = 'content';
    $pane->type = 'search_result';
    $pane->subtype = 'search_result';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'type' => 'node',
      'log' => 1,
      'override_empty' => 0,
      'empty_title' => '',
      'empty' => '',
      'empty_format' => 'plain_text',
      'override_no_key' => 0,
      'no_key_title' => '',
      'no_key' => '',
      'no_key_format' => 'plain_text',
      'context' => 'argument_string_1',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-1'] = $pane;
    $display->panels['content'][0] = 'new-1';
    $pane = new stdClass();
    $pane->pid = 'new-2';
    $pane->panel = 'top';
    $pane->type = 'search_form';
    $pane->subtype = 'search_form';
    $pane->shown = FALSE;
    $pane->access = array();
    $pane->configuration = array(
      'type' => 'node',
      'form' => 'advanced',
      'path_type' => 'default',
      'path' => '',
      'override_prompt' => 0,
      'prompt' => '',
      'context' => 'empty',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-2'] = $pane;
    $display->panels['top'][0] = 'new-2';
    $pane = new stdClass();
    $pane->pid = 'new-3';
    $pane->panel = 'top';
    $pane->type = 'block';
    $pane->subtype = 'search-form';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $display->content['new-3'] = $pane;
    $display->panels['top'][1] = 'new-3';
  $display->hide_title = PANELS_TITLE_PANE;
  $display->title_pane = 'new-1';
  $handler->conf['display'] = $display;
  $export['search_node_panel_context'] = $handler;

  return $export;
}
