<?php
/**
 * @file
 * bysted_content_blocks.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function bysted_content_blocks_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_metadata|node|content_block|form';
  $field_group->group_name = 'group_metadata';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'content_block';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Metadata',
    'weight' => '8',
    'children' => array(
      0 => 'field_administrative_title',
      1 => 'field_categories_country',
      2 => 'field_category',
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
  $export['group_metadata|node|content_block|form'] = $field_group;

  return $export;
}
