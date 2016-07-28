<?php
/**
 * @file
 * bysted_design_element.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function bysted_design_element_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_list_settings|node|element|form';
  $field_group->group_name = 'group_list_settings';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'element';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'List settings',
    'weight' => '7',
    'children' => array(
      0 => 'field_list_image',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_list_settings|node|element|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_terms|node|element|form';
  $field_group->group_name = 'group_terms';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'element';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Categories',
    'weight' => '6',
    'children' => array(
      0 => 'field_categories',
      1 => 'field_categories_type',
      2 => 'field_categories_country',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_terms|node|element|form'] = $field_group;

  return $export;
}
