<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'testing',
  1 => 'standard',
  2 => 'minimal',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'contact' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'rdf_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'rdf' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'help' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'file_module_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'file' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'module_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'error_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'image_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'session_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'update_test_1' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.20',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'filter_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.20',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'batch_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'common_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'form_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'update_script_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'theme_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'update_test_2' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.20',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'file_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'system_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'menu_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'database_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.20',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'path_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'update_test_3' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'ajax_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/upgrade.filter.test',
            35 => 'tests/upgrade/upgrade.forum.test',
            36 => 'tests/upgrade/upgrade.locale.test',
            37 => 'tests/upgrade/upgrade.menu.test',
            38 => 'tests/upgrade/upgrade.node.test',
            39 => 'tests/upgrade/upgrade.taxonomy.test',
            40 => 'tests/upgrade/upgrade.trigger.test',
            41 => 'tests/upgrade/upgrade.translatable.test',
            42 => 'tests/upgrade/upgrade.upload.test',
            43 => 'tests/upgrade/upgrade.user.test',
            44 => 'tests/upgrade/update.aggregator.test',
            45 => 'tests/upgrade/update.trigger.test',
            46 => 'tests/upgrade/update.field.test',
            47 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'contextual' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'field_ui' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'locale_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.20',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'locale' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'block_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'block' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'menu' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'tracker' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'profile' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'statistics' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'image_module_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'image' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'blog' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'overlay' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'forum' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'shortcut' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'system' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7077',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'poll' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'syslog' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'options' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'list_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.20',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'list' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'text' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'number' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'field_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.20',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'field' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'update_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.20',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.20',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.20',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'update' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.20',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'book' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'openid_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'openid' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.20',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'dashboard' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.20',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'php' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'comment' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'user_form_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'user' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'translation_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.20',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'translation' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'node_access_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'node_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'node' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'trigger_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.20',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'trigger' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'dblog' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'search' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'toolbar' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.20',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'color' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'filter' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'path' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.20',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
        ),
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'bartik' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
        ),
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'garland' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
        ),
        'project' => 'drupal',
        'version' => '7.20',
      ),
      'stark' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.20',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
        ),
        'project' => 'drupal',
        'version' => '7.20',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.20',
        'description' => 'This platform is running Drupal 7.20',
      ),
    ),
    'profiles' => 
    array (
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/profiles/testing/testing.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.20',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.20',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.20',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.20',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1361393684',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.20',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'coder_review_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/coder/coder_review/tests/coder_review_test/coder_review_test.module',
        'basename' => 'coder_review_test.module',
        'name' => 'coder_review_test',
        'info' => 
        array (
          'name' => 'Coder Review Test',
          'package' => 'Coder',
          'core' => '7.x',
          'hidden' => true,
          'files' => 
          array (
            0 => 'coder_review_test.module',
          ),
          'version' => '7.x-2.0-beta2',
          'project' => 'coder',
          'datestamp' => '1359576476',
          'dependencies' => 
          array (
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'coder',
        'version' => '7.x-2.0-beta2',
      ),
      'coder_review' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/coder/coder_review/coder_review.module',
        'basename' => 'coder_review.module',
        'name' => 'coder_review',
        'info' => 
        array (
          'name' => 'Coder Review',
          'description' => '"Developer module" which reviews your code identifying coding style problems and where updates to the API are required.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'coder',
          ),
          'files' => 
          array (
            0 => 'tests/coder_review_test_case.tinc',
            1 => 'tests/coder_review_6x.test',
            2 => 'tests/coder_review_7x.test',
            3 => 'tests/coder_review_comment.test',
            4 => 'tests/coder_review_i18n.test',
            5 => 'tests/coder_review_security.test',
            6 => 'tests/coder_review_sql.test',
            7 => 'tests/coder_review_style.test',
            8 => 'tests/coder_review_sniffer.test',
          ),
          'version' => '7.x-2.0-beta2',
          'project' => 'coder',
          'datestamp' => '1359576476',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.0-beta2',
      ),
      'example' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/coder/coder_upgrade/tests/new/samples/example.module',
        'basename' => 'example.module',
        'name' => 'example',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'coder_upgrade' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/coder/coder_upgrade/coder_upgrade.module',
        'basename' => 'coder_upgrade.module',
        'name' => 'coder_upgrade',
        'info' => 
        array (
          'name' => 'Coder Upgrade',
          'description' => 'Modifies source code to assist with the upgrade of a module for changes to a relied upon API.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'gplib (<2.0)',
          ),
          'files' => 
          array (
            0 => 'coder_upgrade.test',
          ),
          'configure' => 'admin/config/development/coder/upgrade/settings',
          'version' => '7.x-2.0-beta2',
          'project' => 'coder',
          'datestamp' => '1359576476',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.0-beta2',
      ),
      'bad' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/coder/coder_sniffer/Test/bad.module',
        'basename' => 'bad.module',
        'name' => 'bad',
        'info' => 
        array (
          'files' => 
          array (
            0 => 'includes/non-existing.php',
            1 => 'bad.tpl.php',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-beta2',
          'core' => '7.x',
          'project' => 'coder',
          'datestamp' => '1359576476',
          'dependencies' => 
          array (
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.0-beta2',
      ),
      'coder' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/coder/coder.module',
        'basename' => 'coder.module',
        'name' => 'coder',
        'info' => 
        array (
          'name' => 'Coder',
          'description' => 'Developer Module that assists with code review and version upgrade',
          'package' => 'Development',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'coder.module',
          ),
          'version' => '7.x-2.0-beta2',
          'project' => 'coder',
          'datestamp' => '1359576476',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'coder',
        'version' => '7.x-2.0-beta2',
      ),
      'devel_generate' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel_themer' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/development/devel_themer/devel_themer.module',
        'basename' => 'devel_themer.module',
        'name' => 'devel_themer',
        'info' => 
        array (
          'name' => 'Theme developer',
          'description' => 'Essential theme API information for theme developers',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel',
            1 => 'simplehtmldom',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'devel_themer.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'devel_themer',
          'datestamp' => '1355878241',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'devel_themer',
        'version' => '7.x-1.x-dev',
      ),
      'bysted_standard_page_designguide_' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/products/bysted_standard_page_designguide_/bysted_standard_page_designguide_.module',
        'basename' => 'bysted_standard_page_designguide_.module',
        'name' => 'bysted_standard_page_designguide_',
        'info' => 
        array (
          'name' => 'Standard Page (designguide)',
          'description' => 'Standard pages for the designguide.',
          'core' => '7.x',
          'package' => 'Bysted: Product',
          'php' => '5.2.4',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'page_manager',
          ),
          'datestamp' => '1346328720',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_handlers' => 
            array (
              0 => 'node_view_panel_context_2',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_annotated_image' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/services/bysted_annotated_image/bysted_annotated_image.module',
        'basename' => 'bysted_annotated_image.module',
        'name' => 'bysted_annotated_image',
        'info' => 
        array (
          'name' => 'Image with notes',
          'core' => '7.x',
          'package' => 'Bysted: Service',
          'php' => '5.2.4',
          'version' => '7.x-1.0-dev',
          'project' => 'bysted_annotated_image',
          'dependencies' => 
          array (
            0 => 'annotatable_image',
            1 => 'bysted_core_dependencies',
            2 => 'bysted_design_element',
            3 => 'features',
            4 => 'field_collection',
            5 => 'i18n_taxonomy',
            6 => 'image',
            7 => 'strongarm',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'field_collection_item-field_notes-field_note',
              1 => 'field_collection_item-field_notes-field_title',
              2 => 'node-bysted_image_guideline-body',
              3 => 'node-bysted_image_guideline-field_annotated_image',
              4 => 'node-bysted_image_guideline-field_categories',
              5 => 'node-bysted_image_guideline-field_list_image',
              6 => 'node-bysted_image_guideline-field_notes',
              7 => 'node-bysted_image_guideline-field_related_design_elements',
              8 => 'node-bysted_image_guideline-field_subtitle',
            ),
            'image' => 
            array (
              0 => 'annotated_image',
            ),
            'node' => 
            array (
              0 => 'bysted_image_guideline',
            ),
            'variable' => 
            array (
              0 => 'field_bundle_settings_node__bysted_image_guideline',
              1 => 'i18n_node_extended_bysted_image_guideline',
              2 => 'i18n_node_options_bysted_image_guideline',
              3 => 'language_content_type_bysted_image_guideline',
              4 => 'menu_options_bysted_image_guideline',
              5 => 'menu_parent_bysted_image_guideline',
              6 => 'node_options_bysted_image_guideline',
              7 => 'node_preview_bysted_image_guideline',
              8 => 'node_submitted_bysted_image_guideline',
            ),
          ),
          'description' => '',
        ),
        'schema_version' => 0,
        'project' => 'bysted_annotated_image',
        'version' => '7.x-1.0-dev',
      ),
      'bysted_design_element' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/services/bysted_design_element/bysted_design_element.module',
        'basename' => 'bysted_design_element.module',
        'name' => 'bysted_design_element',
        'info' => 
        array (
          'name' => 'Design Element',
          'description' => 'Design element content type.',
          'core' => '7.x',
          'package' => 'Bysted: Service',
          'php' => '5.2.4',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'bysted_core_dependencies',
            1 => 'bysted_design_variant',
            2 => 'ctools',
            3 => 'features',
            4 => 'field_group',
            5 => 'file',
            6 => 'image',
            7 => 'media',
            8 => 'node_reference',
            9 => 'og',
            10 => 'strongarm',
            11 => 'taxonomy',
          ),
          'datestamp' => '1346328720',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'field_group:field_group:1',
              1 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-element-body',
              1 => 'node-element-field_categories',
              2 => 'node-element-field_categories_country',
              3 => 'node-element-field_categories_type',
              4 => 'node-element-field_download_package',
              5 => 'node-element-field_list_image',
              6 => 'node-element-field_related_design_elements',
              7 => 'node-element-field_subtitle',
              8 => 'node-element-field_variants',
            ),
            'field_group' => 
            array (
              0 => 'group_list_settings|node|element|form',
              1 => 'group_terms|node|element|form',
            ),
            'image' => 
            array (
              0 => 'element_list_image',
            ),
            'node' => 
            array (
              0 => 'element',
            ),
            'taxonomy' => 
            array (
              0 => 'media',
              1 => 'target_country',
              2 => 'type_of_element',
            ),
            'variable' => 
            array (
              0 => 'field_bundle_settings_node__element',
              1 => 'i18n_node_extended_element',
              2 => 'i18n_node_options_element',
              3 => 'language_content_type_element',
              4 => 'menu_options_element',
              5 => 'menu_parent_element',
              6 => 'node_options_element',
              7 => 'node_preview_element',
              8 => 'node_submitted_element',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_content_blocks' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/services/bysted_content_blocks/bysted_content_blocks.module',
        'basename' => 'bysted_content_blocks.module',
        'name' => 'bysted_content_blocks',
        'info' => 
        array (
          'name' => 'Content Blocks',
          'description' => 'Content type for creating blocks and spots.',
          'core' => '7.x',
          'package' => 'Bysted: Service',
          'php' => '5.2.4',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'bysted_design_element',
            1 => 'ctools',
            2 => 'features',
            3 => 'field_group',
            4 => 'field_sql_storage',
            5 => 'image',
            6 => 'link',
            7 => 'media',
            8 => 'node',
            9 => 'options',
            10 => 'strongarm',
            11 => 'taxonomy',
            12 => 'text',
          ),
          'datestamp' => '1346328720',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'field_group:field_group:1',
              1 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-content_block-body',
              1 => 'node-content_block-field_administrative_title',
              2 => 'node-content_block-field_categories_country',
              3 => 'node-content_block-field_category',
              4 => 'node-content_block-field_download',
              5 => 'node-content_block-field_link',
              6 => 'node-content_block-field_list_image',
            ),
            'field_group' => 
            array (
              0 => 'group_metadata|node|content_block|form',
            ),
            'node' => 
            array (
              0 => 'content_block',
            ),
            'taxonomy' => 
            array (
              0 => 'category',
            ),
            'variable' => 
            array (
              0 => 'field_bundle_settings_node__content_block',
              1 => 'i18n_node_extended_content_block',
              2 => 'i18n_node_options_content_block',
              3 => 'language_content_type_content_block',
              4 => 'menu_options_content_block',
              5 => 'menu_parent_content_block',
              6 => 'node_options_content_block',
              7 => 'node_preview_content_block',
              8 => 'node_submitted_content_block',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_standard_page' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/services/bysted_standard_page/bysted_standard_page.module',
        'basename' => 'bysted_standard_page.module',
        'name' => 'bysted_standard_page',
        'info' => 
        array (
          'name' => 'Standard Page',
          'description' => 'A standard page with title, image, body field and blocks for related information.',
          'core' => '7.x',
          'package' => 'Bysted: Service',
          'php' => '5.2.4',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'bysted_core_dependencies',
            1 => 'bysted_related_design_elements',
            2 => 'ctools',
            3 => 'features',
            4 => 'field_collection',
            5 => 'field_group',
            6 => 'image',
            7 => 'media',
            8 => 'node_reference',
            9 => 'strongarm',
          ),
          'datestamp' => '1346328720',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'field_group:field_group:1',
              1 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-bysted_page-body',
              1 => 'node-bysted_page-field_related_elements',
              2 => 'node-bysted_page-field_subtitle',
              3 => 'node-bysted_page-field_title_image',
            ),
            'field_group' => 
            array (
              0 => 'group_related_content|node|bysted_page|form',
            ),
            'image' => 
            array (
              0 => 'page_list',
              1 => 'page_title_wide',
            ),
            'node' => 
            array (
              0 => 'bysted_page',
            ),
            'variable' => 
            array (
              0 => 'field_bundle_settings_node__bysted_page',
              1 => 'i18n_node_extended_bysted_page',
              2 => 'i18n_node_options_bysted_page',
              3 => 'language_content_type_bysted_page',
              4 => 'menu_options_bysted_page',
              5 => 'menu_parent_bysted_page',
              6 => 'node_options_bysted_page',
              7 => 'node_preview_bysted_page',
              8 => 'node_submitted_bysted_page',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_design_variant' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/services/bysted_design_variant/bysted_design_variant.module',
        'basename' => 'bysted_design_variant.module',
        'name' => 'bysted_design_variant',
        'info' => 
        array (
          'name' => 'Design Variant',
          'description' => 'Design variant content type.',
          'core' => '7.x',
          'package' => 'Bysted: Service',
          'php' => '5.2.4',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'bysted_core_dependencies',
            1 => 'ctools',
            2 => 'features',
            3 => 'file',
            4 => 'image',
            5 => 'list',
            6 => 'media',
            7 => 'og',
            8 => 'options',
            9 => 'strongarm',
          ),
          'datestamp' => '1346328720',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-variant-body',
              1 => 'node-variant-field_download',
              2 => 'node-variant-field_variant_images',
            ),
            'image' => 
            array (
              0 => 'variant_list',
            ),
            'node' => 
            array (
              0 => 'variant',
            ),
            'variable' => 
            array (
              0 => 'field_bundle_settings_node__variant',
              1 => 'i18n_node_extended_variant',
              2 => 'i18n_node_options_variant',
              3 => 'language_content_type_variant',
              4 => 'menu_options_variant',
              5 => 'menu_parent_variant',
              6 => 'node_options_variant',
              7 => 'node_preview_variant',
              8 => 'node_submitted_variant',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_user_roles' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/core/bysted_user_roles/bysted_user_roles.module',
        'basename' => 'bysted_user_roles.module',
        'name' => 'bysted_user_roles',
        'info' => 
        array (
          'name' => 'User roles',
          'core' => '7.x',
          'package' => 'Bysted: Core',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'features',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'user_role' => 
            array (
              0 => 'Editor',
              1 => 'Site administrator',
            ),
          ),
          'datestamp' => '1346328720',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_text_formats' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/core/bysted_text_formats/bysted_text_formats.module',
        'basename' => 'bysted_text_formats.module',
        'name' => 'bysted_text_formats',
        'info' => 
        array (
          'name' => 'Text formats',
          'core' => '7.x',
          'package' => 'Bysted: Core',
          'php' => '5.2.4',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'ckeditor_link',
            1 => 'features',
            2 => 'media',
            3 => 'wysiwyg',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'filter' => 
            array (
              0 => 'bysted_html',
            ),
            'wysiwyg' => 
            array (
              0 => 'bysted_html',
            ),
          ),
          'datestamp' => '1346328720',
          'description' => '',
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_core_dependencies' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/core/bysted_core_dependencies/bysted_core_dependencies.module',
        'basename' => 'bysted_core_dependencies.module',
        'name' => 'bysted_core_dependencies',
        'info' => 
        array (
          'name' => 'Bysted Core Dependencies',
          'description' => 'A single reference for all Bysted core feature dependencies.',
          'core' => '7.x',
          'package' => 'Bysted: Core',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'bysted_text_formats',
            1 => 'bysted_user_roles',
            2 => 'bysted_linkit_profiles',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
          ),
          'datestamp' => '1346328720',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_linkit_profiles' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/core/bysted_linkit_profiles/bysted_linkit_profiles.module',
        'basename' => 'bysted_linkit_profiles.module',
        'name' => 'bysted_linkit_profiles',
        'info' => 
        array (
          'name' => 'Linkit Profiles',
          'description' => 'Linkit Profiles for Bystedcore.',
          'core' => '7.x',
          'package' => 'Bysted: Core',
          'version' => '7.x-1.0-dev',
          'project' => 'bysted_linkit_profiles',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'linkit',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'linkit:linkit_profiles:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'linkit_profiles' => 
            array (
              0 => 'bysted_default_linkit',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bysted_linkit_profiles',
        'version' => '7.x-1.0-dev',
      ),
      'bysted_related_design_elements' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/extensions/bysted_related_design_elements/bysted_related_design_elements.module',
        'basename' => 'bysted_related_design_elements.module',
        'name' => 'bysted_related_design_elements',
        'info' => 
        array (
          'name' => 'Related design elements',
          'description' => 'Extends pages with related design elements field.',
          'core' => '7.x',
          'package' => 'Bysted: Extensions',
          'php' => '5.2.4',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'field_group',
            2 => 'field_sql_storage',
            3 => 'node_reference',
          ),
          'datestamp' => '1346328720',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'field_group:field_group:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-bysted_page-field_related_design_elements',
            ),
            'field_group' => 
            array (
              0 => 'group_design_elements|node|bysted_page|form',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_related_elements_displays' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/displays/bysted_related_elements_displays/bysted_related_elements_displays.module',
        'basename' => 'bysted_related_elements_displays.module',
        'name' => 'bysted_related_elements_displays',
        'info' => 
        array (
          'name' => 'Related Design Elements',
          'description' => 'Related elements views for designguide.',
          'core' => '7.x',
          'package' => 'Bysted: Display',
          'php' => '5.2.4',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'datestamp' => '1346328720',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'views_view' => 
            array (
              0 => 'bc_related_elements',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_design_element_lists' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/displays/bysted_design_element_lists/bysted_design_element_lists.module',
        'basename' => 'bysted_design_element_lists.module',
        'name' => 'bysted_design_element_lists',
        'info' => 
        array (
          'name' => 'Design Element Lists',
          'description' => 'Lists of design elements with various filters.',
          'core' => '7.x',
          'package' => 'Bysted: Display',
          'php' => '5.2.4',
          'version' => '7.x-1.0-dev',
          'project' => 'bysted_design_element_lists',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'page_manager',
            2 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_pages' => 
            array (
              0 => 'element_list',
            ),
            'views_view' => 
            array (
              0 => 'element_list',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'bysted_design_element_lists',
        'version' => '7.x-1.0-dev',
      ),
      'bysted_visual_guideline_display' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/displays/bysted_visual_guideline_display/bysted_visual_guideline_display.module',
        'basename' => 'bysted_visual_guideline_display.module',
        'name' => 'bysted_visual_guideline_display',
        'info' => 
        array (
          'name' => 'Visual guideline',
          'core' => '7.x',
          'package' => 'Bysted: Display',
          'version' => '7.x-1.0-dev',
          'project' => 'bysted_visual_guideline_display',
          'dependencies' => 
          array (
            0 => 'bysted_annotated_image',
            1 => 'bysted_core_dependencies',
            2 => 'ctools',
            3 => 'page_manager',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_handlers' => 
            array (
              0 => 'node_view_panel_context_4',
            ),
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bysted_visual_guideline_display',
        'version' => '7.x-1.0-dev',
      ),
      'bysted_search_page' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/displays/bysted_search_page/bysted_search_page.module',
        'basename' => 'bysted_search_page.module',
        'name' => 'bysted_search_page',
        'info' => 
        array (
          'name' => 'Custom Search Page',
          'description' => 'Custom search page layout using panels.',
          'core' => '7.x',
          'package' => 'Bysted: Display',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'bysted_core_dependencies',
            1 => 'ctools',
            2 => 'page_manager',
            3 => 'search',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_handlers' => 
            array (
              0 => 'search_node_panel_context',
            ),
          ),
          'datestamp' => '1346328720',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'bysted_design_element_pages' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/bysted/displays/bysted_design_element_pages/bysted_design_element_pages.module',
        'basename' => 'bysted_design_element_pages.module',
        'name' => 'bysted_design_element_pages',
        'info' => 
        array (
          'name' => 'Design Element Pages',
          'description' => 'Panels pages for design elements.',
          'core' => '7.x',
          'package' => 'Bysted: Products',
          'php' => '5.2.4',
          'version' => 'unknown',
          'project' => 'bystedcore',
          'dependencies' => 
          array (
            0 => 'bysted_core_dependencies',
            1 => 'bysted_design_element',
            2 => 'bysted_related_elements_displays',
            3 => 'ctools',
            4 => 'page_manager',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_handlers' => 
            array (
              0 => 'node_view_panel_context',
            ),
          ),
          'datestamp' => '1346328720',
        ),
        'schema_version' => 0,
        'project' => 'bystedcore',
        'version' => 'unknown',
      ),
      'flexslider_fields' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/flexslider/flexslider_fields/flexslider_fields.module',
        'basename' => 'flexslider_fields.module',
        'name' => 'flexslider_fields',
        'info' => 
        array (
          'name' => 'Flex Slider Fields',
          'description' => 'Adds a display mode in Fields for FlexSlider',
          'core' => '7.x',
          'package' => 'Flex Slider',
          'dependencies' => 
          array (
            0 => 'flexslider',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'flexslider',
          'datestamp' => '1337289957',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-1.0-rc3',
      ),
      'flexslider_views' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/flexslider/flexslider_views/flexslider_views.module',
        'basename' => 'flexslider_views.module',
        'name' => 'flexslider_views',
        'info' => 
        array (
          'name' => 'Flex Slider Views Style',
          'description' => 'Adds a Views style plugin for FlexSlider',
          'core' => '7.x',
          'package' => 'Flex Slider',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'flexslider',
          ),
          'files' => 
          array (
            0 => 'flexslider_views.module',
            1 => 'flexslider_views.views.inc',
            2 => 'flexslider_views_plugin_style_flexslider.inc',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'flexslider',
          'datestamp' => '1337289957',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-1.0-rc3',
      ),
      'flexslider_views_slideshow' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/flexslider/flexslider_views_slideshow/flexslider_views_slideshow.module',
        'basename' => 'flexslider_views_slideshow.module',
        'name' => 'flexslider_views_slideshow',
        'info' => 
        array (
          'name' => 'Flex Slider Views Slideshow',
          'description' => 'Integrate the FlexSlider library with Views Slideshow',
          'core' => '7.x',
          'package' => 'Flex Slider',
          'dependencies' => 
          array (
            0 => 'flexslider',
            1 => 'views_slideshow',
          ),
          'files' => 
          array (
            0 => 'flexslider_views_slideshow.module',
            1 => 'flexslider_views_slideshow.views_slideshow.inc',
            2 => 'theme/flexslider_views_slideshow.theme.inc',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'flexslider',
          'datestamp' => '1337289957',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'flexslider',
        'version' => '7.x-1.0-rc3',
      ),
      'flexslider' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/flexslider/flexslider.module',
        'basename' => 'flexslider.module',
        'name' => 'flexslider',
        'info' => 
        array (
          'name' => 'Flex Slider',
          'description' => 'Integrate the Flex Slider library with Drupal',
          'core' => '7.x',
          'package' => 'Flex Slider',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'ctools',
            2 => 'image',
          ),
          'files' => 
          array (
            0 => 'flexslider.module',
            1 => 'theme/flexslider.theme.inc',
            2 => 'flexslider.test',
          ),
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'assets/css/flexslider_img.css',
            ),
          ),
          'configure' => 'admin/config/media/flexslider',
          'version' => '7.x-1.0-rc3',
          'project' => 'flexslider',
          'datestamp' => '1337289957',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'flexslider',
        'version' => '7.x-1.0-rc3',
      ),
      'mediafield' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.0-unstable7',
          'project' => 'media',
          'datestamp' => '1353227523',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-unstable7',
      ),
      'media_internet' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
          ),
          'version' => '7.x-2.0-unstable7',
          'project' => 'media',
          'datestamp' => '1353227523',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-unstable7',
      ),
      'media' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'views',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserUpload.inc',
            4 => 'includes/MediaBrowserView.inc',
            5 => 'includes/MediaEntityTranslationHandler.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
            9 => 'tests/media.entity.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-unstable7',
          'project' => 'media',
          'datestamp' => '1353227523',
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'media',
        'version' => '7.x-2.0-unstable7',
      ),
      'content_access_rules' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/content_access/content_access_rules/content_access_rules.module',
        'basename' => 'content_access_rules.module',
        'name' => 'content_access_rules',
        'info' => 
        array (
          'name' => 'Content Access Rules Integrations',
          'description' => 'Integrates Rules with Content access. Allows to act on access events, conditions, and actions.',
          'package' => 'Access control',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'content_access',
            1 => 'rules',
          ),
          'files' => 
          array (
            0 => 'content_access.rules.inc',
          ),
          'version' => '7.x-1.2-beta1',
          'project' => 'content_access',
          'datestamp' => '1311517015',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'content_access',
        'version' => '7.x-1.2-beta1',
      ),
      'content_access' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/content_access/content_access.module',
        'basename' => 'content_access.module',
        'name' => 'content_access',
        'info' => 
        array (
          'name' => 'Content Access',
          'description' => 'Provides flexible content access control.',
          'core' => '7.x',
          'package' => 'Access control',
          'files' => 
          array (
            0 => 'content_access.rules.inc',
            1 => 'tests/content_access.test',
            2 => 'tests/content_access_acl.test',
          ),
          'version' => '7.x-1.2-beta1',
          'project' => 'content_access',
          'datestamp' => '1311517015',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'content_access',
        'version' => '7.x-1.2-beta1',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'google_analytics',
          'datestamp' => '1351810914',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'google_analytics',
        'version' => '7.x-1.3',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate.module',
            1 => 'backup_migrate.install',
            2 => 'includes/destinations.inc',
            3 => 'includes/profiles.inc',
            4 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-2.4',
          'project' => 'backup_migrate',
          'datestamp' => '1338903073',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'backup_migrate',
        'version' => '7.x-2.4',
      ),
      'mailchimp_activity' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/mailchimp/modules/mailchimp_activity/mailchimp_activity.module',
        'basename' => 'mailchimp_activity.module',
        'name' => 'mailchimp_activity',
        'info' => 
        array (
          'name' => 'MailChimp Activity',
          'description' => 'View activity for an email address associated with any entity.',
          'package' => 'MailChimp',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'mailchimp',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'mailchimp_activity.entity.inc',
            1 => 'mailchimp_activity.ui_controller.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'mailchimp',
          'datestamp' => '1359482747',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mailchimp',
        'version' => '7.x-2.10',
      ),
      'mailchimp_lists' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/mailchimp/modules/mailchimp_lists/mailchimp_lists.module',
        'basename' => 'mailchimp_lists.module',
        'name' => 'mailchimp_lists',
        'info' => 
        array (
          'name' => 'MailChimp Lists',
          'description' => 'Manage and integrate MailChimp lists.',
          'package' => 'MailChimp',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'mailchimp',
            1 => 'entity',
            2 => 'entity_token',
          ),
          'configure' => 'admin/config/services/mailchimp/lists',
          'files' => 
          array (
            0 => 'mailchimp_lists.entity.inc',
            1 => 'mailchimp_lists.admin.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'mailchimp',
          'datestamp' => '1359482747',
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'mailchimp',
        'version' => '7.x-2.10',
      ),
      'mailchimp_campaign' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/mailchimp/modules/mailchimp_campaign/mailchimp_campaign.module',
        'basename' => 'mailchimp_campaign.module',
        'name' => 'mailchimp_campaign',
        'info' => 
        array (
          'name' => 'MailChimp Campaigns',
          'description' => 'Create, send and import MailChimp campaigns.',
          'package' => 'MailChimp',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'mailchimp_lists',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'mailchimp_campaign.admin.inc',
            1 => 'mailchimp_campaign.entity.inc',
          ),
          'configure' => 'admin/config/services/mailchimp/campaigns',
          'version' => '7.x-2.10',
          'project' => 'mailchimp',
          'datestamp' => '1359482747',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mailchimp',
        'version' => '7.x-2.10',
      ),
      'mailchimp' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/mailchimp/mailchimp.module',
        'basename' => 'mailchimp.module',
        'name' => 'mailchimp',
        'info' => 
        array (
          'name' => 'MailChimp',
          'description' => 'MailChimp email service integration.',
          'package' => 'MailChimp',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/mailchimp.inc',
          ),
          'dependencies' => 
          array (
            0 => 'libraries (>=2)',
          ),
          'configure' => 'admin/config/services/mailchimp',
          'version' => '7.x-2.10',
          'project' => 'mailchimp',
          'datestamp' => '1359482747',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'mailchimp',
        'version' => '7.x-2.10',
      ),
      'context_inline_editor' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/context_inline_editor/context_inline_editor.module',
        'basename' => 'context_inline_editor.module',
        'name' => 'context_inline_editor',
        'info' => 
        array (
          'name' => 'Context inline editor',
          'description' => 'Adds the Context UI module\'s inline editor feature to a link in the shortcut bar',
          'dependencies' => 
          array (
            0 => 'context_ui',
            1 => 'toolbar',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'context_inline_editor.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'context_inline_editor',
          'datestamp' => '1312676044',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context_inline_editor',
        'version' => '7.x-1.x-dev',
      ),
      'l10n_update' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/l10n_update/l10n_update.module',
        'basename' => 'l10n_update.module',
        'name' => 'l10n_update',
        'info' => 
        array (
          'name' => 'Localization update',
          'description' => 'Provides automatic downloads and updates for translations.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'files' => 
          array (
            0 => 'l10n_update.admin.inc',
            1 => 'l10n_update.api.php',
            2 => 'l10n_update.batch.inc',
            3 => 'l10n_update.check.inc',
            4 => 'l10n_update.drush.inc',
            5 => 'l10n_update.inc',
            6 => 'l10n_update.install',
            7 => 'l10n_update.locale.inc',
            8 => 'l10n_update.module',
            9 => 'l10n_update.parser.inc',
            10 => 'l10n_update.project.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'l10n_update',
          'datestamp' => '1328563848',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'l10n_update',
        'version' => '7.x-1.0-beta3',
      ),
      'redirect' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'redirect.module',
            1 => 'redirect.admin.inc',
            2 => 'redirect.install',
            3 => 'redirect.test',
            4 => 'views/redirect.views.inc',
            5 => 'views/redirect_handler_filter_redirect_type.inc',
            6 => 'views/redirect_handler_field_redirect_source.inc',
            7 => 'views/redirect_handler_field_redirect_redirect.inc',
            8 => 'views/redirect_handler_field_redirect_operations.inc',
            9 => 'views/redirect_handler_field_redirect_link_edit.inc',
            10 => 'views/redirect_handler_field_redirect_link_delete.inc',
          ),
          'configure' => 'admin/config/search/redirect/settings',
          'version' => '7.x-1.0-rc1',
          'project' => 'redirect',
          'datestamp' => '1347989995',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'redirect',
        'version' => '7.x-1.0-rc1',
      ),
      'file_entity_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/file_entity/tests/file_entity_test.module',
        'basename' => 'file_entity_test.module',
        'name' => 'file_entity_test',
        'info' => 
        array (
          'name' => 'File Entity Test',
          'description' => 'Support module for File Entity tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-unstable7',
          'project' => 'file_entity',
          'datestamp' => '1353226911',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'file_entity',
        'version' => '7.x-2.0-unstable7',
      ),
      'file_entity' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_rendered.inc',
            2 => 'views/views_handler_field_file_type.inc',
            3 => 'views/views_handler_filter_file_type.inc',
            4 => 'views/views_plugin_row_file_view.inc',
            5 => 'tests/file_entity.test',
          ),
          'configure' => 'admin/structure/file-types',
          'version' => '7.x-2.0-unstable7',
          'project' => 'file_entity',
          'datestamp' => '1353226911',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'file_entity',
        'version' => '7.x-2.0-unstable7',
      ),
      'ckeditor_link' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ckeditor_link/ckeditor_link.module',
        'basename' => 'ckeditor_link.module',
        'name' => 'ckeditor_link',
        'info' => 
        array (
          'name' => 'CKEditor Link',
          'description' => 'Easily create links to Drupal internal paths through CKEditor.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/ckeditor_link',
          'version' => '7.x-2.3',
          'project' => 'ckeditor_link',
          'datestamp' => '1358413212',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ckeditor_link',
        'version' => '7.x-2.3',
      ),
      'i18n_variable' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_variable/i18n_variable.module',
        'basename' => 'i18n_variable.module',
        'name' => 'i18n_variable',
        'info' => 
        array (
          'name' => 'Variable translation',
          'description' => 'Multilingual variables that switch language depending on page language.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'variable_store (7.x-2.x)',
            2 => 'variable_realm (7.x-2.x)',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/variable',
          'files' => 
          array (
            0 => 'i18n_variable.class.inc',
            1 => 'i18n_variable.test',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_string' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_string/i18n_string.module',
        'basename' => 'i18n_string.module',
        'name' => 'i18n_string',
        'info' => 
        array (
          'name' => 'String translation',
          'description' => 'Provides support for translation of user defined strings.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_string.admin.inc',
            1 => 'i18n_string.inc',
            2 => 'i18n_string.test',
          ),
          'configure' => 'admin/config/regional/i18n/strings',
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_sync' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_sync/i18n_sync.module',
        'basename' => 'i18n_sync.module',
        'name' => 'i18n_sync',
        'info' => 
        array (
          'name' => 'Synchronize translations',
          'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_sync.module',
            1 => 'i18n_sync.install',
            2 => 'i18n_sync.module.inc',
            3 => 'i18n_sync.node.inc',
            4 => 'i18n_sync.test',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_forum' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_forum/i18n_forum.module',
        'basename' => 'i18n_forum.module',
        'name' => 'i18n_forum',
        'info' => 
        array (
          'name' => 'Multilingual forum',
          'description' => 'Enables multilingual forum, translates names and containers.',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'i18n_taxonomy',
            2 => 'i18n_node',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_forum.test',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_block' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_block/i18n_block.module',
        'basename' => 'i18n_block.module',
        'name' => 'i18n_block',
        'info' => 
        array (
          'name' => 'Block languages',
          'description' => 'Enables language selector for blocks and optional block translation.',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_block.inc',
            1 => 'i18n_block.test',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_menu' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_menu/i18n_menu.module',
        'basename' => 'i18n_menu.module',
        'name' => 'i18n_menu',
        'info' => 
        array (
          'name' => 'Menu translation',
          'description' => 'Supports translatable custom menu items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'menu',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_menu.inc',
            1 => 'i18n_menu.test',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_contact' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_contact/i18n_contact.module',
        'basename' => 'i18n_contact.module',
        'name' => 'i18n_contact',
        'info' => 
        array (
          'name' => 'Contact translation',
          'description' => 'Makes contact categories and replies available for translation.',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_node' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_node/i18n_node.module',
        'basename' => 'i18n_node.module',
        'name' => 'i18n_node',
        'info' => 
        array (
          'name' => 'Multilingual content',
          'description' => 'Extended node options for multilingual content',
          'dependencies' => 
          array (
            0 => 'translation',
            1 => 'i18n',
            2 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/node',
          'files' => 
          array (
            0 => 'i18n_node.test',
            1 => 'i18n_node.variable.inc',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_redirect' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
        'basename' => 'i18n_redirect.module',
        'name' => 'i18n_redirect',
        'info' => 
        array (
          'name' => 'Translation redirect',
          'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_taxonomy' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
        'basename' => 'i18n_taxonomy.module',
        'name' => 'i18n_taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy translation',
          'description' => 'Enables multilingual taxonomy.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'i18n_string',
            2 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_taxonomy.inc',
            1 => 'i18n_taxonomy.pages.inc',
            2 => 'i18n_taxonomy.admin.inc',
            3 => 'i18n_taxonomy.test',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_translation' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_translation/i18n_translation.module',
        'basename' => 'i18n_translation.module',
        'name' => 'i18n_translation',
        'info' => 
        array (
          'name' => 'Translation sets',
          'description' => 'Simple translation sets API for generic objects',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_translation.inc',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_field' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_field/i18n_field.module',
        'basename' => 'i18n_field.module',
        'name' => 'i18n_field',
        'info' => 
        array (
          'name' => 'Field translation',
          'description' => 'Translate field properties',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_field.inc',
            1 => 'i18n_field.test',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_path' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_path/i18n_path.module',
        'basename' => 'i18n_path.module',
        'name' => 'i18n_path',
        'info' => 
        array (
          'name' => 'Path translation',
          'description' => 'Define translations for generic paths',
          'dependencies' => 
          array (
            0 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_path.inc',
            1 => 'i18n_path.test',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_user' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_user/i18n_user.module',
        'basename' => 'i18n_user.module',
        'name' => 'i18n_user',
        'info' => 
        array (
          'name' => 'User mail translation',
          'description' => 'Translate emails sent from the User module.',
          'core' => '7.x',
          'package' => 'Multilingual - Internationalization',
          'dependencies' => 
          array (
            0 => 'i18n_variable',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_select' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n_select/i18n_select.module',
        'basename' => 'i18n_select.module',
        'name' => 'i18n_select',
        'info' => 
        array (
          'name' => 'Multilingual select',
          'description' => 'API module for multilingual content selection',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/select',
          'files' => 
          array (
            0 => 'i18n_select.test',
          ),
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/tests/i18n_test.module',
        'basename' => 'i18n_test.module',
        'name' => 'i18n_test',
        'info' => 
        array (
          'name' => 'Internationalization tests',
          'description' => 'Helper module for testing i18n (do not enable manually)',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'translation',
            2 => 'i18n',
          ),
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'i18n' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18n/i18n.module',
        'basename' => 'i18n.module',
        'name' => 'i18n',
        'info' => 
        array (
          'name' => 'Internationalization',
          'description' => 'Extends Drupal support for multilingual features.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'variable',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n.install',
            1 => 'i18n_object.inc',
            2 => 'i18n.test',
          ),
          'configure' => 'admin/config/regional/i18n',
          'version' => '7.x-1.8',
          'project' => 'i18n',
          'datestamp' => '1358075001',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.8',
      ),
      'job_scheduler_trigger' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
        'basename' => 'job_scheduler_trigger.module',
        'name' => 'job_scheduler_trigger',
        'info' => 
        array (
          'name' => 'Job Scheduler Trigger',
          'description' => 'Creates scheduler triggers that fire up at certain days, times',
          'core' => '7.x',
          'php' => '5.2',
          'dependencies' => 
          array (
            0 => 'job_scheduler',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
        ),
        'schema_version' => 0,
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'job_scheduler' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/job_scheduler/job_scheduler.module',
        'basename' => 'job_scheduler.module',
        'name' => 'job_scheduler',
        'info' => 
        array (
          'name' => 'Job Scheduler',
          'description' => 'Scheduler API',
          'files' => 
          array (
            0 => 'job_scheduler.module',
            1 => 'job_scheduler.install',
            2 => 'JobScheduler.inc',
            3 => 'JobSchedulerCronTab.inc',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7101',
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'varnish' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/varnish/varnish.module',
        'basename' => 'varnish.module',
        'name' => 'varnish',
        'info' => 
        array (
          'name' => 'Varnish',
          'description' => 'Provides integration with the Varnish HTTP accelerator.',
          'core' => '7.x',
          'configure' => 'admin/config/development/varnish',
          'package' => 'Caching',
          'files' => 
          array (
            0 => 'varnish.admin.inc',
            1 => 'varnish.cache.inc',
            2 => 'varnish.test',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'varnish',
          'datestamp' => '1328034066',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'varnish',
        'version' => '7.x-1.0-beta1',
      ),
      'danishstemmer' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/danishstemmer/danishstemmer.module',
        'basename' => 'danishstemmer.module',
        'name' => 'danishstemmer',
        'info' => 
        array (
          'name' => 'Danish Stemmer',
          'description' => 'Improve search on Danish sites by reducing words to their stem.',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'search',
          ),
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'danishstemmer',
          'datestamp' => '1325708142',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'danishstemmer',
        'version' => '7.x-1.1',
      ),
      'module_filter' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-1.7',
          'project' => 'module_filter',
          'datestamp' => '1341518501',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'module_filter',
        'version' => '7.x-1.7',
      ),
      'i18nviews' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/i18nviews/i18nviews.module',
        'basename' => 'i18nviews.module',
        'name' => 'i18nviews',
        'info' => 
        array (
          'name' => 'Views translation',
          'description' => 'Translation of views strings and content selection for views. Requires Views 3.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18nviews.inc',
            1 => 'i18nviews.i18n.inc',
            2 => 'includes/i18nviews_handler_argument_taxonomy_index_tid.inc',
            3 => 'includes/i18nviews_handler_argument_taxonomy_term_name.inc',
            4 => 'includes/i18nviews_handler_argument_term_language.inc',
            5 => 'includes/i18nviews_handler_argument_term_node_tid_depth.inc',
            6 => 'includes/i18nviews_handler_field_taxonomy_term_description.inc',
            7 => 'includes/i18nviews_handler_field_taxonomy_term_language.inc',
            8 => 'includes/i18nviews_handler_field_taxonomy_term_name.inc',
            9 => 'includes/i18nviews_handler_field_term_node_tid.inc',
            10 => 'includes/i18nviews_handler_filter_field_list.inc',
            11 => 'includes/i18nviews_handler_filter_taxonomy_index_tid.inc',
            12 => 'includes/i18nviews_handler_filter_taxonomy_term_name.inc',
            13 => 'includes/i18nviews_handler_filter_taxonomy_term_language.inc',
            14 => 'includes/i18nviews_handler_filter_term_node_tid_depth.inc',
            15 => 'includes/i18nviews_plugin_argument_validate_i18n_taxonomy_term.inc',
            16 => 'includes/i18nviews_plugin_localization_i18nstrings.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'i18nviews',
          'datestamp' => '1343175615',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18nviews',
        'version' => '7.x-3.x-dev',
      ),
      'globalredirect' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/globalredirect/globalredirect.module',
        'basename' => 'globalredirect.module',
        'name' => 'globalredirect',
        'info' => 
        array (
          'name' => 'Global Redirect',
          'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
          'package' => 'Path management',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'globalredirect.test',
          ),
          'configure' => 'admin/config/system/globalredirect',
          'version' => '7.x-1.5',
          'project' => 'globalredirect',
          'datestamp' => '1339748779',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'globalredirect',
        'version' => '7.x-1.5',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'views_content' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'stylizer' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'bulk_export' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_export_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/tests/ctools_export_test/ctools_export_test.module',
        'basename' => 'ctools_export_test.module',
        'name' => 'ctools_export_test',
        'info' => 
        array (
          'name' => 'CTools export test',
          'description' => 'CTools export test module',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'hidden' => true,
          'files' => 
          array (
            0 => 'ctools_export.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_plugin_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/tests/ctools_plugin_test.module',
        'basename' => 'ctools_plugin_test.module',
        'name' => 'ctools_plugin_test',
        'info' => 
        array (
          'name' => 'Chaos tools plugins test',
          'description' => 'Provides hooks for testing ctools plugins.',
          'package' => 'Chaos tool suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'ctools.plugins.test',
            1 => 'object_cache.test',
            2 => 'css.test',
            3 => 'context.test',
          ),
          'hidden' => true,
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'page_manager' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/math-expr.inc',
            2 => 'includes/stylizer.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6007',
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'wysiwyg_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/wysiwyg/tests/wysiwyg_test.module',
        'basename' => 'wysiwyg_test.module',
        'name' => 'wysiwyg_test',
        'info' => 
        array (
          'name' => 'Wysiwyg testing',
          'description' => 'Tests Wysiwyg module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'wysiwyg_test.module',
          ),
          'version' => '7.x-2.2',
          'project' => 'wysiwyg',
          'datestamp' => '1349213776',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg',
        'version' => '7.x-2.2',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'wysiwyg',
          'datestamp' => '1349213776',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'wysiwyg',
        'version' => '7.x-2.2',
      ),
      'webform' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'files' => 
          array (
            0 => 'includes/webform.export.inc',
            1 => 'views/webform_handler_field_form_body.inc',
            2 => 'views/webform_handler_field_is_draft.inc',
            3 => 'views/webform_handler_field_node_link_edit.inc',
            4 => 'views/webform_handler_field_node_link_results.inc',
            5 => 'views/webform_handler_field_submission_count.inc',
            6 => 'views/webform_handler_field_submission_link.inc',
            7 => 'views/webform_handler_field_webform_status.inc',
            8 => 'views/webform_handler_filter_is_draft.inc',
            9 => 'views/webform_handler_filter_webform_status.inc',
            10 => 'views/webform.views.inc',
            11 => 'tests/components.test',
            12 => 'tests/permissions.test',
            13 => 'tests/submission.test',
            14 => 'tests/webform.test',
          ),
          'version' => '7.x-3.18',
          'project' => 'webform',
          'datestamp' => '1336890411',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7320',
        'project' => 'webform',
        'version' => '7.x-3.18',
      ),
      'media_youtube' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Provides YouTube support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_youtube.module',
            1 => 'includes/MediaInternetYouTubeHandler.inc',
            2 => 'includes/MediaYouTubeStreamWrapper.inc',
            3 => 'includes/MediaYouTubeStyles.inc',
            4 => 'includes/media_youtube.formatters.inc',
            5 => 'includes/media_youtube.styles.inc',
            6 => 'includes/media_youtube.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'media_youtube',
          'datestamp' => '1331655643',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'media_youtube',
        'version' => '7.x-1.0-beta3',
      ),
      'compact_forms' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/compact_forms/compact_forms.module',
        'basename' => 'compact_forms.module',
        'name' => 'compact_forms',
        'info' => 
        array (
          'name' => 'Compact Forms',
          'description' => 'Overlays form fields with their respective labels using JavaScript.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/compact_forms',
          'version' => '7.x-1.0',
          'project' => 'compact_forms',
          'datestamp' => '1294554354',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'compact_forms',
        'version' => '7.x-1.0',
      ),
      'menu_attributes' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/menu_attributes/menu_attributes.module',
        'basename' => 'menu_attributes.module',
        'name' => 'menu_attributes',
        'info' => 
        array (
          'name' => 'Menu attributes',
          'description' => 'Allows administrators to specify custom attributes for menu items.',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/menu/settings',
          'files' => 
          array (
            0 => 'menu_attributes.test',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'menu_attributes',
          'datestamp' => '1338541556',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'menu_attributes',
        'version' => '7.x-1.0-rc2',
      ),
      'linkit' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/linkit/linkit.module',
        'basename' => 'linkit.module',
        'name' => 'linkit',
        'info' => 
        array (
          'name' => 'Linkit',
          'description' => 'Provides an easy interface for inserting links to internal content, files and external pages by providing autocomplete search for several WYSIWYG-editors.',
          'core' => '7.x',
          'configure' => 'admin/config/content/linkit',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'plugins/plugin.class.php',
            1 => 'plugins/linkit_plugins/linkit-plugin-entity.class.php',
          ),
          'version' => '7.x-2.5',
          'project' => 'linkit',
          'datestamp' => '1336374059',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'linkit',
        'version' => '7.x-2.5',
      ),
      'user_reference' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/references/user_reference/user_reference.module',
        'basename' => 'user_reference.module',
        'name' => 'user_reference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'version' => '7.x-2.0',
          'project' => 'references',
          'datestamp' => '1324596643',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.0',
      ),
      'node_reference' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/references/node_reference/node_reference.module',
        'basename' => 'node_reference.module',
        'name' => 'node_reference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'files' => 
          array (
            0 => 'node_reference.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'references',
          'datestamp' => '1324596643',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.0',
      ),
      'references' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/references/references.module',
        'basename' => 'references.module',
        'name' => 'references',
        'info' => 
        array (
          'name' => 'References',
          'description' => 'Defines common base features for the various reference field types.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'views/references_handler_relationship.inc',
            1 => 'views/references_handler_argument.inc',
            2 => 'views/references_plugin_display.inc',
            3 => 'views/references_plugin_style.inc',
            4 => 'views/references_plugin_row_fields.inc',
          ),
          'version' => '7.x-2.0',
          'project' => 'references',
          'datestamp' => '1324596643',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.0',
      ),
      'scheduler' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/scheduler/scheduler.module',
        'basename' => 'scheduler.module',
        'name' => 'scheduler',
        'info' => 
        array (
          'name' => 'Scheduler',
          'description' => 'This module allows nodes to be published and unpublished on specified dates and time.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'scheduler.install',
            1 => 'scheduler.module',
            2 => 'scheduler.views.inc',
            3 => 'scheduler.test',
            4 => 'scheduler_handler_field_scheduler_countdown.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'scheduler',
          'datestamp' => '1299939069',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'scheduler',
        'version' => '7.x-1.0',
      ),
      'strongarm' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0',
      ),
      'fences' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/fences/fences.module',
        'basename' => 'fences.module',
        'name' => 'fences',
        'info' => 
        array (
          'name' => 'Fences',
          'description' => 'Configurable field wrappers',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'configure' => 'admin/config/content/fences',
          'version' => '7.x-1.0',
          'project' => 'fences',
          'datestamp' => '1335373578',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'fences',
        'version' => '7.x-1.0',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_devel' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_menu' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'context_filter' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/context_filter/context_filter.module',
        'basename' => 'context_filter.module',
        'name' => 'context_filter',
        'info' => 
        array (
          'name' => 'Context filter',
          'description' => 'Enables filtering of context selection options',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'context_filter.module',
          ),
          'dependencies' => 
          array (
            0 => 'context_ui',
          ),
          'version' => '7.x-1.1',
          'project' => 'context_filter',
          'datestamp' => '1359234987',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context_filter',
        'version' => '7.x-1.1',
      ),
      'location_cck' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/contrib/location_cck/location_cck.module',
        'basename' => 'location_cck.module',
        'name' => 'location_cck',
        'info' => 
        array (
          'name' => 'Location CCK',
          'description' => 'Defines a Location field type.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'CCK',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_cck.module',
            1 => 'location_cck.install',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'location_fax' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/contrib/location_fax/location_fax.module',
        'basename' => 'location_fax.module',
        'name' => 'location_fax',
        'info' => 
        array (
          'name' => 'Location Fax',
          'package' => 'Location',
          'description' => 'Allows you to add a fax number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_fax.module',
            1 => 'location_fax.install',
            2 => 'location_fax.views.inc',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'location_addanother' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/contrib/location_addanother/location_addanother.module',
        'basename' => 'location_addanother.module',
        'name' => 'location_addanother',
        'info' => 
        array (
          'name' => 'Location Add Another',
          'description' => 'Allows you to quickly add locations directly from a node without having to click \'edit\' first.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'location_node',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_addanother.module',
            1 => 'location_addanother.install',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'location_search' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/contrib/location_search/location_search.module',
        'basename' => 'location_search.module',
        'name' => 'location_search',
        'info' => 
        array (
          'name' => 'Location Search',
          'package' => 'Location',
          'description' => 'Advanced search page for locations.',
          'dependencies' => 
          array (
            0 => 'search',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_search.module',
            1 => 'location_search.install',
            2 => 'location_search.admin.inc',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'php' => '5.2.4',
        ),
        'schema_version' => '5300',
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'location_generate' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/contrib/location_generate/location_generate.module',
        'basename' => 'location_generate.module',
        'name' => 'location_generate',
        'info' => 
        array (
          'name' => 'Location Generate',
          'description' => 'Bulk assign random latitude and longitudes to nodes.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel_generate',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_generate.module',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'location_phone' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/contrib/location_phone/location_phone.module',
        'basename' => 'location_phone.module',
        'name' => 'location_phone',
        'info' => 
        array (
          'name' => 'Location Phone',
          'package' => 'Location',
          'description' => 'Allows you to add a phone number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_phone.module',
            1 => 'location_phone.install',
            2 => 'location_phone.views.inc',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'location_taxonomy' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/contrib/location_taxonomy/location_taxonomy.module',
        'basename' => 'location_taxonomy.module',
        'name' => 'location_taxonomy',
        'info' => 
        array (
          'name' => 'Location Taxonomy',
          'description' => 'Associate locations with taxonomy terms.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'taxonomy',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_taxonomy.module',
            1 => 'location_taxonomy.install',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'location_node' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/location_node.module',
        'basename' => 'location_node.module',
        'name' => 'location_node',
        'info' => 
        array (
          'name' => 'Node Locations',
          'description' => 'Associate locations with nodes.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_node.module',
            1 => 'location_node.install',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'location_user' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/location_user.module',
        'basename' => 'location_user.module',
        'name' => 'location_user',
        'info' => 
        array (
          'name' => 'User Locations',
          'description' => 'Associate locations with users.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_user.module',
            1 => 'location_user.install',
          ),
          'configure' => 'admin/config/people/accounts',
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'location' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/location/location.module',
        'basename' => 'location.module',
        'name' => 'location',
        'info' => 
        array (
          'name' => 'Location',
          'package' => 'Location',
          'description' => 'The location module allows you to associate a geographic location with content and users. Users can do proximity searches by postal code.  This is useful for organizing communities that have a geographic presence.',
          'core' => '7.x',
          'configure' => 'admin/config/content/location',
          'files' => 
          array (
            0 => 'location.module',
            1 => 'location.install',
            2 => 'location.admin.inc',
            3 => 'location.georss.inc',
            4 => 'location.inc',
            5 => 'location.token.inc',
            6 => 'location.views.inc',
            7 => 'location.views_default.inc',
            8 => 'tests/location_testcase.php',
            9 => 'tests/cow.test',
            10 => 'tests/earth.test',
            11 => 'tests/google_geocoder.test',
            12 => 'tests/location_cck.test',
            13 => 'handlers/location_handler_argument_location_country.inc',
            14 => 'handlers/location_handler_argument_location_province.inc',
            15 => 'handlers/location_handler_argument_location_proximity.inc',
            16 => 'handlers/location_handler_field_location_address.inc',
            17 => 'handlers/location_handler_field_location_country.inc',
            18 => 'handlers/location_handler_field_location_distance.inc',
            19 => 'handlers/location_handler_field_location_province.inc',
            20 => 'handlers/location_handler_field_location_street.inc',
            21 => 'handlers/location_handler_filter_location_country.inc',
            22 => 'handlers/location_handler_filter_location_province.inc',
            23 => 'handlers/location_handler_sort_location_distance.inc',
            24 => 'handlers/location_views_handler_field_coordinates.inc',
            25 => 'handlers/location_views_handler_field_latitude.inc',
            26 => 'handlers/location_views_handler_field_longitude.inc',
            27 => 'handlers/location_views_handler_filter_proximity.inc',
            28 => 'plugins/contexts/location.inc',
            29 => 'plugins/relationships/location_from_node.inc',
          ),
          'version' => '7.x-3.0-alpha1',
          'project' => 'location',
          'datestamp' => '1343220794',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'location',
        'version' => '7.x-3.0-alpha1',
      ),
      'feeds_news' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/feeds/feeds_news/feeds_news.module',
        'basename' => 'feeds_news.module',
        'name' => 'feeds_news',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'feeds',
            2 => 'views',
          ),
          'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
              1 => 'views:views_default:3.0',
            ),
            'feeds_importer' => 
            array (
              0 => 'feed',
              1 => 'opml',
            ),
            'field' => 
            array (
              0 => 'node-feed_item-field_feed_item_description',
            ),
            'node' => 
            array (
              0 => 'feed',
              1 => 'feed_item',
            ),
            'views_view' => 
            array (
              0 => 'feeds_defaults_feed_items',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_news.module',
            1 => 'feeds_news.test',
          ),
          'name' => 'Feeds News',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha7',
          'project' => 'feeds',
          'datestamp' => '1351111319',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'feeds_import' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/feeds/feeds_import/feeds_import.module',
        'basename' => 'feeds_import.module',
        'name' => 'feeds_import',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'description' => 'An example of a node importer and a user importer.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
            ),
            'feeds_importer' => 
            array (
              0 => 'node',
              1 => 'user',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_import.test',
          ),
          'name' => 'Feeds Import',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha7',
          'project' => 'feeds',
          'datestamp' => '1351111319',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'feeds_tests' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/feeds/tests/feeds_tests.module',
        'basename' => 'feeds_tests.module',
        'name' => 'feeds_tests',
        'info' => 
        array (
          'name' => 'Feeds module tests',
          'description' => 'Support module for Feeds related testing.',
          'package' => 'Testing',
          'version' => '7.x-2.0-alpha7',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'feeds_test.module',
          ),
          'hidden' => true,
          'project' => 'feeds',
          'datestamp' => '1351111319',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'feeds_ui' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/feeds/feeds_ui/feeds_ui.module',
        'basename' => 'feeds_ui.module',
        'name' => 'feeds_ui',
        'info' => 
        array (
          'name' => 'Feeds Admin UI',
          'description' => 'Administrative UI for Feeds module.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'configure' => 'admin/structure/feeds',
          'files' => 
          array (
            0 => 'feeds_ui.test',
          ),
          'version' => '7.x-2.0-alpha7',
          'project' => 'feeds',
          'datestamp' => '1351111319',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'feeds' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/feeds/feeds.module',
        'basename' => 'feeds.module',
        'name' => 'feeds',
        'info' => 
        array (
          'name' => 'Feeds',
          'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'job_scheduler',
          ),
          'files' => 
          array (
            0 => 'includes/FeedsConfigurable.inc',
            1 => 'includes/FeedsImporter.inc',
            2 => 'includes/FeedsSource.inc',
            3 => 'libraries/ParserCSV.inc',
            4 => 'libraries/http_request.inc',
            5 => 'libraries/PuSHSubscriber.inc',
            6 => 'tests/feeds.test',
            7 => 'tests/feeds_date_time.test',
            8 => 'tests/feeds_mapper_date.test',
            9 => 'tests/feeds_mapper_field.test',
            10 => 'tests/feeds_mapper_file.test',
            11 => 'tests/feeds_mapper_path.test',
            12 => 'tests/feeds_mapper_profile.test',
            13 => 'tests/feeds_mapper.test',
            14 => 'tests/feeds_mapper_config.test',
            15 => 'tests/feeds_fetcher_file.test',
            16 => 'tests/feeds_processor_node.test',
            17 => 'tests/feeds_processor_term.test',
            18 => 'tests/feeds_processor_user.test',
            19 => 'tests/feeds_scheduler.test',
            20 => 'tests/feeds_mapper_link.test',
            21 => 'tests/feeds_mapper_taxonomy.test',
            22 => 'tests/parser_csv.test',
            23 => 'views/feeds_views_handler_argument_importer_id.inc',
            24 => 'views/feeds_views_handler_field_importer_name.inc',
            25 => 'views/feeds_views_handler_field_log_message.inc',
            26 => 'views/feeds_views_handler_field_severity.inc',
            27 => 'views/feeds_views_handler_field_source.inc',
            28 => 'views/feeds_views_handler_filter_severity.inc',
          ),
          'version' => '7.x-2.0-alpha7',
          'project' => 'feeds',
          'datestamp' => '1351111319',
          'php' => '5.2.4',
        ),
        'schema_version' => '7207',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'fb_social' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/fb_social/fb_social.module',
        'basename' => 'fb_social.module',
        'name' => 'fb_social',
        'info' => 
        array (
          'name' => 'fb social',
          'description' => 'Provides integration with Facebook social plugins',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Facebook Social Plugins',
          'core' => '7.x',
          'configure' => 'admin/structure/fbsocial',
          'files' => 
          array (
            0 => 'plugins/views/fb_social_handler_field.inc',
            1 => 'plugins/export_ui/fb_social_presets_ui.inc',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'fb_social',
          'datestamp' => '1327205167',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb_social',
        'version' => '7.x-2.0-beta4',
      ),
      'date_views' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views_default.inc',
            5 => 'includes/date_views.views.inc',
            6 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_repeat' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_all_day' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'date_migrate',
            4 => 'features',
            5 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.6',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_migrate' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_migrate/date_migrate.module',
        'basename' => 'date_migrate.module',
        'name' => 'date_migrate',
        'info' => 
        array (
          'name' => 'Date Migration',
          'description' => 'Provides support for importing into date fields with the Migrate module.',
          'core' => '7.x',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'date',
          ),
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'date_migrate.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_popup' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_api' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_context' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_tools' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_api.test',
            1 => 'tests/date.test',
            2 => 'tests/date_field.test',
            3 => 'tests/date_validation.test',
            4 => 'tests/date_timezone.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => '7004',
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'apachesolr_access' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/apachesolr/apachesolr_access/apachesolr_access.module',
        'basename' => 'apachesolr_access.module',
        'name' => 'apachesolr_access',
        'info' => 
        array (
          'name' => 'Apache Solr Access',
          'description' => 'Integrates node access and other permissions with Apache Solr search',
          'dependencies' => 
          array (
            0 => 'apachesolr',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'apachesolr_access.module',
            1 => 'tests/apachesolr_access.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'apachesolr',
          'datestamp' => '1350356169',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'apachesolr',
        'version' => '7.x-1.1',
      ),
      'apachesolr_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/apachesolr/tests/apachesolr_test/apachesolr_test.module',
        'basename' => 'apachesolr_test.module',
        'name' => 'apachesolr_test',
        'info' => 
        array (
          'name' => 'Apache Solr helper module for tests',
          'description' => 'Support module for apachesolr module testing.',
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'apachesolr',
          ),
          'version' => '7.x-1.1',
          'project' => 'apachesolr',
          'datestamp' => '1350356169',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'apachesolr',
        'version' => '7.x-1.1',
      ),
      'apachesolr_search' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/apachesolr/apachesolr_search.module',
        'basename' => 'apachesolr_search.module',
        'name' => 'apachesolr_search',
        'info' => 
        array (
          'name' => 'Apache Solr search',
          'description' => 'Search with Solr',
          'dependencies' => 
          array (
            0 => 'search',
            1 => 'apachesolr',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'configure' => 'admin/config/search/apachesolr/search-pages',
          'files' => 
          array (
            0 => 'apachesolr_search.install',
            1 => 'apachesolr_search.module',
            2 => 'apachesolr_search.admin.inc',
            3 => 'apachesolr_search.pages.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'apachesolr',
          'datestamp' => '1350356169',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'apachesolr',
        'version' => '7.x-1.1',
      ),
      'apachesolr' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/apachesolr/apachesolr.module',
        'basename' => 'apachesolr.module',
        'name' => 'apachesolr',
        'info' => 
        array (
          'name' => 'Apache Solr framework',
          'description' => 'Framework for searching with Solr',
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'configure' => 'admin/config/search/apachesolr/settings',
          'files' => 
          array (
            0 => 'apachesolr.install',
            1 => 'apachesolr.module',
            2 => 'apachesolr.admin.inc',
            3 => 'apachesolr.index.inc',
            4 => 'apachesolr.interface.inc',
            5 => 'Drupal_Apache_Solr_Service.php',
            6 => 'Apache_Solr_Document.php',
            7 => 'Solr_Base_Query.php',
            8 => 'plugins/facetapi/adapter.inc',
            9 => 'plugins/facetapi/query_type_date.inc',
            10 => 'plugins/facetapi/query_type_term.inc',
            11 => 'plugins/facetapi/query_type_numeric_range.inc',
            12 => 'plugins/facetapi/query_type_geo.inc',
            13 => 'tests/Dummy_Solr.php',
            14 => 'tests/apachesolr_base.test',
            15 => 'tests/solr_index_and_search.test',
            16 => 'tests/solr_base_query.test',
            17 => 'tests/solr_base_subquery.test',
            18 => 'tests/solr_document.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'apachesolr',
          'datestamp' => '1350356169',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7015',
        'project' => 'apachesolr',
        'version' => '7.x-1.1',
      ),
      'metatag_opengraph' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/metatag/metatag_opengraph/metatag_opengraph.module',
        'basename' => 'metatag_opengraph.module',
        'name' => 'metatag_opengraph',
        'info' => 
        array (
          'name' => 'Meta tags: Open Graph',
          'description' => 'Provides support for open graph meta tags.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_context' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/metatag/metatag_context/metatag_context.module',
        'basename' => 'metatag_context.module',
        'name' => 'metatag_context',
        'info' => 
        array (
          'name' => 'Meta tags: Context',
          'description' => 'Assigned Meta tags using Context definitions, allowing them to be assigned by path and other criteria.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'metatag',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_ui' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/metatag/metatag_ui/metatag_ui.module',
        'basename' => 'metatag_ui.module',
        'name' => 'metatag_ui',
        'info' => 
        array (
          'name' => 'Meta tag UI',
          'description' => 'DEPRECATED admin interface for the Meta tag API, this functionality has be merged into the main module.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'ctools',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_dc' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/metatag/metatag_dc/metatag_dc.module',
        'basename' => 'metatag_dc.module',
        'name' => 'metatag_dc',
        'info' => 
        array (
          'name' => 'Meta tags: Dublin Core',
          'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_twitter_cards' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
        'basename' => 'metatag_twitter_cards.module',
        'name' => 'metatag_twitter_cards',
        'info' => 
        array (
          'name' => 'Meta tags: Twitter Cards',
          'description' => 'Provides support for Twitter\'s Card meta tags. NOTE: Only use if the site supports SSL as all URLs *must* be secured via HTTPS.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/metatag/tests/metatag_test.module',
        'basename' => 'metatag_test.module',
        'name' => 'metatag_test',
        'info' => 
        array (
          'name' => 'Meta Tag Test',
          'description' => 'Testing module for metatag.module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/metatag/metatag.module',
        'basename' => 'metatag.module',
        'name' => 'metatag',
        'info' => 
        array (
          'name' => 'Meta tags',
          'description' => 'Adds support and an API to implement meta tags.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'token',
            1 => 'ctools',
          ),
          'configure' => 'admin/config/search/metatags',
          'files' => 
          array (
            0 => 'metatag.inc',
            1 => 'metatag.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'entity_test_i18n' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/entity/tests/entity_test_i18n.module',
        'basename' => 'entity_test_i18n.module',
        'name' => 'entity_test_i18n',
        'info' => 
        array (
          'name' => 'Entity-test type translation',
          'description' => 'Allows translating entity-test types.',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.0',
          'project' => 'entity',
          'datestamp' => '1356471145',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'entity_feature' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.0',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1356471145',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'entity_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.0',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1356471145',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'entity_token' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.0',
          'project' => 'entity',
          'datestamp' => '1356471145',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'entity' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'entity',
          'datestamp' => '1356471145',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'html5_tools' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/html5_tools/html5_tools.module',
        'basename' => 'html5_tools.module',
        'name' => 'html5_tools',
        'info' => 
        array (
          'name' => 'HTML5 Tools',
          'description' => 'Provides a set of tools to allow sites to be built using HTML5.',
          'core' => '7.x',
          'php' => '5',
          'package' => 'Markup',
          'dependencies' => 
          array (
            0 => 'elements',
            1 => 'field',
          ),
          'configure' => 'admin/config/development/html5-tools',
          'version' => '7.x-1.2',
          'project' => 'html5_tools',
          'datestamp' => '1336411555',
        ),
        'schema_version' => 0,
        'project' => 'html5_tools',
        'version' => '7.x-1.2',
      ),
      'redis' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/redis/redis.module',
        'basename' => 'redis.module',
        'name' => 'redis',
        'info' => 
        array (
          'name' => 'Redis',
          'description' => 'Provide a module placeholder, for using as dependency for module that needs Redis.',
          'package' => 'Performance',
          'version' => '7.x-2.0-beta4',
          'core' => '7.x',
          'configure' => 'admin/config/development/performance/redis',
          'files' => 
          array (
            0 => 'tests/admin_variables.test',
            1 => 'tests/lock.test',
          ),
          'project' => 'redis',
          'datestamp' => '1358339303',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'redis',
        'version' => '7.x-2.0-beta4',
      ),
      'elements' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/elements/elements.module',
        'basename' => 'elements.module',
        'name' => 'elements',
        'info' => 
        array (
          'name' => 'Elements',
          'description' => 'Provides a library of Form API elements.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'elements.module',
            1 => 'elements.theme.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'elements',
          'datestamp' => '1292175136',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'elements',
        'version' => '7.x-1.2',
      ),
      'link' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.migrate.inc',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'link',
          'datestamp' => '1360444361',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.1',
      ),
      'campaignmonitor_user' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/campaignmonitor/modules/campaignmonitor_user/campaignmonitor_user.module',
        'basename' => 'campaignmonitor_user.module',
        'name' => 'campaignmonitor_user',
        'info' => 
        array (
          'name' => 'Campaign Monitor user page',
          'description' => 'Adds support for Campaign Monitor in the user profile',
          'core' => '7.x',
          'package' => 'Campaign Monitor',
          'dependencies' => 
          array (
            0 => 'campaignmonitor',
          ),
          'files' => 
          array (
            0 => 'campaignmonitor_user.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'campaignmonitor',
          'datestamp' => '1357398656',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'campaignmonitor',
        'version' => '7.x-1.0',
      ),
      'campaignmonitor_registration' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/campaignmonitor/modules/campaignmonitor_registration/campaignmonitor_registration.module',
        'basename' => 'campaignmonitor_registration.module',
        'name' => 'campaignmonitor_registration',
        'info' => 
        array (
          'name' => 'Campaign Monitor registration page',
          'description' => 'Adds support for Campaign Monitor on the registration page',
          'core' => '7.x',
          'package' => 'Campaign Monitor',
          'dependencies' => 
          array (
            0 => 'campaignmonitor',
          ),
          'files' => 
          array (
            0 => 'campaignmonitor_registration.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'campaignmonitor',
          'datestamp' => '1357398656',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'campaignmonitor',
        'version' => '7.x-1.0',
      ),
      'campaignmonitor' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/campaignmonitor/campaignmonitor.module',
        'basename' => 'campaignmonitor.module',
        'name' => 'campaignmonitor',
        'info' => 
        array (
          'name' => 'Campaign Monitor',
          'description' => 'This module uses the Campaign Monitor v3 API to add newsletter functionality to Drupal',
          'core' => '7.x',
          'php' => '5.0',
          'configure' => 'admin/config/services/campaignmonitor',
          'package' => 'Campaign Monitor',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'campaignmonitor.module',
            1 => 'campaignmonitor.install',
            2 => 'includes/campaignmonitor.admin.inc',
            3 => 'includes/campaignmonitor_list.admin.inc',
            4 => 'includes/campaignmonitor_stats.admin.inc',
            5 => 'lib/campaignmonitor.class.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'campaignmonitor',
          'datestamp' => '1357398656',
        ),
        'schema_version' => 0,
        'project' => 'campaignmonitor',
        'version' => '7.x-1.0',
      ),
      'transliteration' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/transliteration/transliteration.module',
        'basename' => 'transliteration.module',
        'name' => 'transliteration',
        'info' => 
        array (
          'name' => 'Transliteration',
          'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
          'core' => '7.x',
          'configure' => 'admin/config/media/file-system',
          'version' => '7.x-3.1',
          'project' => 'transliteration',
          'datestamp' => '1338540713',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'transliteration',
        'version' => '7.x-3.1',
      ),
      'mediaelement' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/mediaelement/mediaelement.module',
        'basename' => 'mediaelement.module',
        'name' => 'mediaelement',
        'info' => 
        array (
          'name' => 'MediaElement.js',
          'description' => 'Provide MediaElement.js to be used on the entire site or just with Filefields.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'mediaelement.admin.inc',
            1 => 'mediaelement.install',
            2 => 'mediaelement.module',
          ),
          'configure' => 'admin/config/media/mediaelement',
          'version' => '7.x-1.2',
          'project' => 'mediaelement',
          'datestamp' => '1326568843',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mediaelement',
        'version' => '7.x-1.2',
      ),
      'token_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'token' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'current_search' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/facetapi/contrib/current_search/current_search.module',
        'basename' => 'current_search.module',
        'name' => 'current_search',
        'info' => 
        array (
          'name' => 'Current Search Blocks',
          'description' => 'Provides an interface for creating blocks containing information about the current search.',
          'dependencies' => 
          array (
            0 => 'facetapi',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/current_search/item.inc',
            1 => 'plugins/current_search/item_active.inc',
            2 => 'plugins/current_search/item_group.inc',
            3 => 'plugins/current_search/item_text.inc',
            4 => 'tests/current_search.test',
          ),
          'configure' => 'admin/config/search/current_search',
          'version' => '7.x-1.2',
          'project' => 'facetapi',
          'datestamp' => '1348169693',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'facetapi',
        'version' => '7.x-1.2',
      ),
      'facetapi_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/facetapi/tests/facetapi_test.module',
        'basename' => 'facetapi_test.module',
        'name' => 'facetapi_test',
        'info' => 
        array (
          'name' => 'Facet API Test',
          'description' => 'Provides a test adapter and plugins.',
          'dependencies' => 
          array (
            0 => 'facetapi',
          ),
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.2',
          'project' => 'facetapi',
          'datestamp' => '1348169693',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'facetapi',
        'version' => '7.x-1.2',
      ),
      'facetapi' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/facetapi/facetapi.module',
        'basename' => 'facetapi.module',
        'name' => 'facetapi',
        'info' => 
        array (
          'name' => 'Facet API',
          'description' => 'An abstracted facet API that can be used by various search backends.',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/facetapi/adapter.inc',
            1 => 'plugins/facetapi/dependency.inc',
            2 => 'plugins/facetapi/dependency_bundle.inc',
            3 => 'plugins/facetapi/dependency_role.inc',
            4 => 'plugins/facetapi/empty_behavior.inc',
            5 => 'plugins/facetapi/empty_behavior_text.inc',
            6 => 'plugins/facetapi/filter.inc',
            7 => 'plugins/facetapi/query_type.inc',
            8 => 'plugins/facetapi/url_processor.inc',
            9 => 'plugins/facetapi/url_processor_standard.inc',
            10 => 'plugins/facetapi/widget.inc',
            11 => 'plugins/facetapi/widget_links.inc',
            12 => 'tests/facetapi_test.plugins.inc',
            13 => 'tests/facetapi.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'facetapi',
          'datestamp' => '1348169693',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'facetapi',
        'version' => '7.x-1.2',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'views_slideshow_cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow: Cycle',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow_cycle.module',
            1 => 'views_slideshow_cycle.views_slideshow.inc',
            2 => 'theme/views_slideshow_cycle.theme.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'views_slideshow',
          'datestamp' => '1319589616',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.0',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow.module',
            1 => 'theme/views_slideshow.theme.inc',
            2 => 'views_slideshow.views.inc',
            3 => 'views_slideshow_plugin_style_slideshow.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'views_slideshow',
          'datestamp' => '1319589616',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.0',
      ),
      'views_export' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/views/tests/views_test.module',
        'basename' => 'views_test.module',
        'name' => 'views_test',
        'info' => 
        array (
          'name' => 'Views Test',
          'description' => 'Test module for Views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'hidden' => true,
          'version' => '7.x-3.5',
          'project' => 'views',
          'datestamp' => '1345829394',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.5',
      ),
      'views_ui' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.5',
          'project' => 'views',
          'datestamp' => '1345829394',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.5',
      ),
      'views' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_result.inc',
            2 => 'handlers/views_handler_area_text.inc',
            3 => 'handlers/views_handler_area_text_custom.inc',
            4 => 'handlers/views_handler_area_view.inc',
            5 => 'handlers/views_handler_argument.inc',
            6 => 'handlers/views_handler_argument_date.inc',
            7 => 'handlers/views_handler_argument_formula.inc',
            8 => 'handlers/views_handler_argument_many_to_one.inc',
            9 => 'handlers/views_handler_argument_null.inc',
            10 => 'handlers/views_handler_argument_numeric.inc',
            11 => 'handlers/views_handler_argument_string.inc',
            12 => 'handlers/views_handler_argument_group_by_numeric.inc',
            13 => 'handlers/views_handler_field.inc',
            14 => 'handlers/views_handler_field_counter.inc',
            15 => 'handlers/views_handler_field_boolean.inc',
            16 => 'handlers/views_handler_field_contextual_links.inc',
            17 => 'handlers/views_handler_field_custom.inc',
            18 => 'handlers/views_handler_field_date.inc',
            19 => 'handlers/views_handler_field_entity.inc',
            20 => 'handlers/views_handler_field_markup.inc',
            21 => 'handlers/views_handler_field_math.inc',
            22 => 'handlers/views_handler_field_numeric.inc',
            23 => 'handlers/views_handler_field_prerender_list.inc',
            24 => 'handlers/views_handler_field_time_interval.inc',
            25 => 'handlers/views_handler_field_serialized.inc',
            26 => 'handlers/views_handler_field_machine_name.inc',
            27 => 'handlers/views_handler_field_url.inc',
            28 => 'handlers/views_handler_filter.inc',
            29 => 'handlers/views_handler_filter_boolean_operator.inc',
            30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            31 => 'handlers/views_handler_filter_combine.inc',
            32 => 'handlers/views_handler_filter_date.inc',
            33 => 'handlers/views_handler_filter_equality.inc',
            34 => 'handlers/views_handler_filter_entity_bundle.inc',
            35 => 'handlers/views_handler_filter_group_by_numeric.inc',
            36 => 'handlers/views_handler_filter_in_operator.inc',
            37 => 'handlers/views_handler_filter_many_to_one.inc',
            38 => 'handlers/views_handler_filter_numeric.inc',
            39 => 'handlers/views_handler_filter_string.inc',
            40 => 'handlers/views_handler_relationship.inc',
            41 => 'handlers/views_handler_relationship_groupwise_max.inc',
            42 => 'handlers/views_handler_sort.inc',
            43 => 'handlers/views_handler_sort_date.inc',
            44 => 'handlers/views_handler_sort_formula.inc',
            45 => 'handlers/views_handler_sort_group_by_numeric.inc',
            46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            47 => 'handlers/views_handler_sort_random.inc',
            48 => 'includes/base.inc',
            49 => 'includes/handlers.inc',
            50 => 'includes/plugins.inc',
            51 => 'includes/view.inc',
            52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            61 => 'modules/book/views_plugin_argument_default_book_root.inc',
            62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            63 => 'modules/comment/views_handler_field_comment.inc',
            64 => 'modules/comment/views_handler_field_comment_depth.inc',
            65 => 'modules/comment/views_handler_field_comment_link.inc',
            66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            70 => 'modules/comment/views_handler_field_comment_node_link.inc',
            71 => 'modules/comment/views_handler_field_comment_username.inc',
            72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            74 => 'modules/comment/views_handler_field_node_comment.inc',
            75 => 'modules/comment/views_handler_field_node_new_comments.inc',
            76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            79 => 'modules/comment/views_handler_filter_node_comment.inc',
            80 => 'modules/comment/views_handler_sort_comment_thread.inc',
            81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            83 => 'modules/comment/views_plugin_row_comment_rss.inc',
            84 => 'modules/comment/views_plugin_row_comment_view.inc',
            85 => 'modules/contact/views_handler_field_contact_link.inc',
            86 => 'modules/field/views_handler_field_field.inc',
            87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            88 => 'modules/field/views_handler_argument_field_list.inc',
            89 => 'modules/field/views_handler_argument_field_list_string.inc',
            90 => 'modules/field/views_handler_filter_field_list.inc',
            91 => 'modules/filter/views_handler_field_filter_format_name.inc',
            92 => 'modules/locale/views_handler_field_node_language.inc',
            93 => 'modules/locale/views_handler_filter_node_language.inc',
            94 => 'modules/locale/views_handler_argument_locale_group.inc',
            95 => 'modules/locale/views_handler_argument_locale_language.inc',
            96 => 'modules/locale/views_handler_field_locale_group.inc',
            97 => 'modules/locale/views_handler_field_locale_language.inc',
            98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            99 => 'modules/locale/views_handler_filter_locale_group.inc',
            100 => 'modules/locale/views_handler_filter_locale_language.inc',
            101 => 'modules/locale/views_handler_filter_locale_version.inc',
            102 => 'modules/node/views_handler_argument_dates_various.inc',
            103 => 'modules/node/views_handler_argument_node_language.inc',
            104 => 'modules/node/views_handler_argument_node_nid.inc',
            105 => 'modules/node/views_handler_argument_node_type.inc',
            106 => 'modules/node/views_handler_argument_node_vid.inc',
            107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            109 => 'modules/node/views_handler_field_node.inc',
            110 => 'modules/node/views_handler_field_node_link.inc',
            111 => 'modules/node/views_handler_field_node_link_delete.inc',
            112 => 'modules/node/views_handler_field_node_link_edit.inc',
            113 => 'modules/node/views_handler_field_node_revision.inc',
            114 => 'modules/node/views_handler_field_node_revision_link.inc',
            115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            117 => 'modules/node/views_handler_field_node_path.inc',
            118 => 'modules/node/views_handler_field_node_type.inc',
            119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            120 => 'modules/node/views_handler_filter_node_access.inc',
            121 => 'modules/node/views_handler_filter_node_status.inc',
            122 => 'modules/node/views_handler_filter_node_type.inc',
            123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            124 => 'modules/node/views_plugin_argument_default_node.inc',
            125 => 'modules/node/views_plugin_argument_validate_node.inc',
            126 => 'modules/node/views_plugin_row_node_rss.inc',
            127 => 'modules/node/views_plugin_row_node_view.inc',
            128 => 'modules/profile/views_handler_field_profile_date.inc',
            129 => 'modules/profile/views_handler_field_profile_list.inc',
            130 => 'modules/profile/views_handler_filter_profile_selection.inc',
            131 => 'modules/search/views_handler_argument_search.inc',
            132 => 'modules/search/views_handler_field_search_score.inc',
            133 => 'modules/search/views_handler_filter_search.inc',
            134 => 'modules/search/views_handler_sort_search_score.inc',
            135 => 'modules/search/views_plugin_row_search_view.inc',
            136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            137 => 'modules/system/views_handler_argument_file_fid.inc',
            138 => 'modules/system/views_handler_field_file.inc',
            139 => 'modules/system/views_handler_field_file_extension.inc',
            140 => 'modules/system/views_handler_field_file_filemime.inc',
            141 => 'modules/system/views_handler_field_file_uri.inc',
            142 => 'modules/system/views_handler_field_file_status.inc',
            143 => 'modules/system/views_handler_filter_file_status.inc',
            144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            160 => 'modules/system/views_handler_filter_system_type.inc',
            161 => 'modules/translation/views_handler_argument_node_tnid.inc',
            162 => 'modules/translation/views_handler_field_node_link_translate.inc',
            163 => 'modules/translation/views_handler_field_node_translation_link.inc',
            164 => 'modules/translation/views_handler_filter_node_tnid.inc',
            165 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            166 => 'modules/translation/views_handler_relationship_translation.inc',
            167 => 'modules/user/views_handler_argument_user_uid.inc',
            168 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            169 => 'modules/user/views_handler_field_user.inc',
            170 => 'modules/user/views_handler_field_user_language.inc',
            171 => 'modules/user/views_handler_field_user_link.inc',
            172 => 'modules/user/views_handler_field_user_link_cancel.inc',
            173 => 'modules/user/views_handler_field_user_link_edit.inc',
            174 => 'modules/user/views_handler_field_user_mail.inc',
            175 => 'modules/user/views_handler_field_user_name.inc',
            176 => 'modules/user/views_handler_field_user_permissions.inc',
            177 => 'modules/user/views_handler_field_user_picture.inc',
            178 => 'modules/user/views_handler_field_user_roles.inc',
            179 => 'modules/user/views_handler_filter_user_current.inc',
            180 => 'modules/user/views_handler_filter_user_name.inc',
            181 => 'modules/user/views_handler_filter_user_permissions.inc',
            182 => 'modules/user/views_handler_filter_user_roles.inc',
            183 => 'modules/user/views_plugin_argument_default_current_user.inc',
            184 => 'modules/user/views_plugin_argument_default_user.inc',
            185 => 'modules/user/views_plugin_argument_validate_user.inc',
            186 => 'modules/user/views_plugin_row_user_view.inc',
            187 => 'plugins/views_plugin_access.inc',
            188 => 'plugins/views_plugin_access_none.inc',
            189 => 'plugins/views_plugin_access_perm.inc',
            190 => 'plugins/views_plugin_access_role.inc',
            191 => 'plugins/views_plugin_argument_default.inc',
            192 => 'plugins/views_plugin_argument_default_php.inc',
            193 => 'plugins/views_plugin_argument_default_fixed.inc',
            194 => 'plugins/views_plugin_argument_default_raw.inc',
            195 => 'plugins/views_plugin_argument_validate.inc',
            196 => 'plugins/views_plugin_argument_validate_numeric.inc',
            197 => 'plugins/views_plugin_argument_validate_php.inc',
            198 => 'plugins/views_plugin_cache.inc',
            199 => 'plugins/views_plugin_cache_none.inc',
            200 => 'plugins/views_plugin_cache_time.inc',
            201 => 'plugins/views_plugin_display.inc',
            202 => 'plugins/views_plugin_display_attachment.inc',
            203 => 'plugins/views_plugin_display_block.inc',
            204 => 'plugins/views_plugin_display_default.inc',
            205 => 'plugins/views_plugin_display_embed.inc',
            206 => 'plugins/views_plugin_display_extender.inc',
            207 => 'plugins/views_plugin_display_feed.inc',
            208 => 'plugins/views_plugin_display_page.inc',
            209 => 'plugins/views_plugin_exposed_form_basic.inc',
            210 => 'plugins/views_plugin_exposed_form.inc',
            211 => 'plugins/views_plugin_exposed_form_input_required.inc',
            212 => 'plugins/views_plugin_localization_core.inc',
            213 => 'plugins/views_plugin_localization.inc',
            214 => 'plugins/views_plugin_localization_none.inc',
            215 => 'plugins/views_plugin_pager.inc',
            216 => 'plugins/views_plugin_pager_full.inc',
            217 => 'plugins/views_plugin_pager_mini.inc',
            218 => 'plugins/views_plugin_pager_none.inc',
            219 => 'plugins/views_plugin_pager_some.inc',
            220 => 'plugins/views_plugin_query.inc',
            221 => 'plugins/views_plugin_query_default.inc',
            222 => 'plugins/views_plugin_row.inc',
            223 => 'plugins/views_plugin_row_fields.inc',
            224 => 'plugins/views_plugin_row_rss_fields.inc',
            225 => 'plugins/views_plugin_style.inc',
            226 => 'plugins/views_plugin_style_default.inc',
            227 => 'plugins/views_plugin_style_grid.inc',
            228 => 'plugins/views_plugin_style_list.inc',
            229 => 'plugins/views_plugin_style_jump_menu.inc',
            230 => 'plugins/views_plugin_style_rss.inc',
            231 => 'plugins/views_plugin_style_summary.inc',
            232 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            233 => 'plugins/views_plugin_style_summary_unformatted.inc',
            234 => 'plugins/views_plugin_style_table.inc',
            235 => 'tests/handlers/views_handler_area_text.test',
            236 => 'tests/handlers/views_handler_argument_null.test',
            237 => 'tests/handlers/views_handler_argument_string.test',
            238 => 'tests/handlers/views_handler_field.test',
            239 => 'tests/handlers/views_handler_field_boolean.test',
            240 => 'tests/handlers/views_handler_field_custom.test',
            241 => 'tests/handlers/views_handler_field_counter.test',
            242 => 'tests/handlers/views_handler_field_date.test',
            243 => 'tests/handlers/views_handler_field_file_size.test',
            244 => 'tests/handlers/views_handler_field_math.test',
            245 => 'tests/handlers/views_handler_field_url.test',
            246 => 'tests/handlers/views_handler_field_xss.test',
            247 => 'tests/handlers/views_handler_filter_combine.test',
            248 => 'tests/handlers/views_handler_filter_date.test',
            249 => 'tests/handlers/views_handler_filter_equality.test',
            250 => 'tests/handlers/views_handler_filter_in_operator.test',
            251 => 'tests/handlers/views_handler_filter_numeric.test',
            252 => 'tests/handlers/views_handler_filter_string.test',
            253 => 'tests/handlers/views_handler_sort_random.test',
            254 => 'tests/handlers/views_handler_sort_date.test',
            255 => 'tests/handlers/views_handler_sort.test',
            256 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            257 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            258 => 'tests/plugins/views_plugin_display.test',
            259 => 'tests/styles/views_plugin_style_jump_menu.test',
            260 => 'tests/styles/views_plugin_style.test',
            261 => 'tests/styles/views_plugin_style_unformatted.test',
            262 => 'tests/views_access.test',
            263 => 'tests/views_analyze.test',
            264 => 'tests/views_basic.test',
            265 => 'tests/views_argument_default.test',
            266 => 'tests/views_argument_validator.test',
            267 => 'tests/views_exposed_form.test',
            268 => 'tests/field/views_fieldapi.test',
            269 => 'tests/views_glossary.test',
            270 => 'tests/views_groupby.test',
            271 => 'tests/views_handlers.test',
            272 => 'tests/views_module.test',
            273 => 'tests/views_pager.test',
            274 => 'tests/views_plugin_localization_test.inc',
            275 => 'tests/views_translatable.test',
            276 => 'tests/views_query.test',
            277 => 'tests/views_upgrade.test',
            278 => 'tests/views_test.views_default.inc',
            279 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            280 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            281 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            282 => 'tests/user/views_handler_field_user_name.test',
            283 => 'tests/user/views_user_argument_default.test',
            284 => 'tests/user/views_user_argument_validate.test',
            285 => 'tests/user/views_user.test',
            286 => 'tests/views_cache.test',
            287 => 'tests/views_view.test',
            288 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.5',
          'project' => 'views',
          'datestamp' => '1345829394',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.5',
      ),
      'twitterfield' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/twitterfield/twitterfield.module',
        'basename' => 'twitterfield.module',
        'name' => 'twitterfield',
        'info' => 
        array (
          'name' => 'Twitter Field',
          'description' => 'A Field Formatter for text fields to display a Twitter Widget',
          'core' => '7.x',
          'version' => '7.x-1.0-rc1',
          'project' => 'twitterfield',
          'datestamp' => '1327782365',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'twitterfield',
        'version' => '7.x-1.0-rc1',
      ),
      'pathologic' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/pathologic/pathologic.module',
        'basename' => 'pathologic.module',
        'name' => 'pathologic',
        'info' => 
        array (
          'name' => 'Pathologic',
          'description' => 'Helps avoid broken links and incorrect paths in content.',
          'package' => 'Input filters',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathologic.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'pathologic',
          'datestamp' => '1353914335',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'pathologic',
        'version' => '7.x-2.10',
      ),
      'libraries_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/libraries/tests/libraries_test.module',
        'basename' => 'libraries_test.module',
        'name' => 'libraries_test',
        'info' => 
        array (
          'name' => 'Libraries test module',
          'description' => 'Tests library detection and loading.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'hidden' => true,
          'version' => '7.x-2.0',
          'project' => 'libraries',
          'datestamp' => '1343561873',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '7.x-2.0',
      ),
      'libraries' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version dependent and shared usage of external libraries.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'libraries',
          'datestamp' => '1343561873',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.0',
      ),
      'delta_ui' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/delta/delta_ui/delta_ui.module',
        'basename' => 'delta_ui.module',
        'name' => 'delta_ui',
        'info' => 
        array (
          'name' => 'Delta UI',
          'description' => 'The Delta UI provides a user interface to build and edit the contextual theme settings provided by the Delta module.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'delta',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'delta_blocks' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/delta/delta_blocks/delta_blocks.module',
        'basename' => 'delta_blocks.module',
        'name' => 'delta_blocks',
        'info' => 
        array (
          'name' => 'Delta Blocks',
          'description' => 'Exposes a number of core Drupal elements as blocks.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'project' => 'delta',
          'datestamp' => '1343161343',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'delta_color' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/delta/delta_color/delta_color.module',
        'basename' => 'delta_color.module',
        'name' => 'delta_color',
        'info' => 
        array (
          'name' => 'Delta Color',
          'description' => 'Makes the color module available for Delta templates.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'dependencies' => 
          array (
            0 => 'delta',
            1 => 'color',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'delta' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/delta/delta.module',
        'basename' => 'delta.module',
        'name' => 'delta',
        'info' => 
        array (
          'name' => 'Delta API',
          'description' => 'The Delta module is an advanced manipulation of the Theme Settings API to allow for customization/configuration of theme settings based on node types, context, or groups of paths.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'delta',
        'version' => '7.x-3.0-beta11',
      ),
      'context_ui' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.0-beta6',
          'project' => 'context',
          'datestamp' => '1355879811',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'project' => 'context',
        'version' => '7.x-3.0-beta6',
      ),
      'context_layouts' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/context_layouts_reaction_block.inc',
          ),
          'version' => '7.x-3.0-beta6',
          'project' => 'context',
          'datestamp' => '1355879811',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context',
        'version' => '7.x-3.0-beta6',
      ),
      'context' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context.test',
            2 => 'tests/context.conditions.test',
            3 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.0-beta6',
          'project' => 'context',
          'datestamp' => '1355879811',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'context',
        'version' => '7.x-3.0-beta6',
      ),
      'menu_block_export' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/menu_block/menu_block_export.module',
        'basename' => 'menu_block_export.module',
        'name' => 'menu_block_export',
        'info' => 
        array (
          'name' => 'Menu Block Export',
          'description' => 'Provides export interface for Menu block module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu_block',
          ),
          'files' => 
          array (
            0 => 'menu_block_export.module',
            1 => 'menu_block_export.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block/export',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'menu_block' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/menu_block/menu_block.module',
        'basename' => 'menu_block.module',
        'name' => 'menu_block',
        'info' => 
        array (
          'name' => 'Menu Block',
          'description' => 'Provides configurable blocks of menu items.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu (>7.11)',
          ),
          'files' => 
          array (
            0 => 'menu_block.module',
            1 => 'menu_block.admin.inc',
            2 => 'menu_block.follow.inc',
            3 => 'menu_block.pages.inc',
            4 => 'menu_block.sort.inc',
            5 => 'menu_block.install',
            6 => 'plugins/content_types/menu_tree/menu_tree.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'panels_mini' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'panels_node' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'panels' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'version' => '7.x-3.3',
          'project' => 'panels',
          'datestamp' => '1345319572',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'panels',
        'version' => '7.x-3.3',
      ),
      'jquery_update' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.3',
          'project' => 'jquery_update',
          'datestamp' => '1360375905',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.3',
      ),
      'field_collection' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/field_collection/field_collection.module',
        'basename' => 'field_collection.module',
        'name' => 'field_collection',
        'info' => 
        array (
          'name' => 'Field collection',
          'description' => 'Provides a field collection field, to which any number of fields can be attached.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'files' => 
          array (
            0 => 'field_collection.test',
            1 => 'field_collection.info.inc',
            2 => 'views/field_collection_handler_relationship.inc',
          ),
          'configure' => 'admin/structure/field-collections',
          'package' => 'Fields',
          'version' => '7.x-1.0-beta5',
          'project' => 'field_collection',
          'datestamp' => '1356475963',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'field_collection',
        'version' => '7.x-1.0-beta5',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'addthis' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/addthis/addthis.module',
        'basename' => 'addthis.module',
        'name' => 'addthis',
        'info' => 
        array (
          'name' => 'AddThis',
          'description' => 'Creates AddThis button as a block, to be used in themes and to node links.',
          'core' => '7.x',
          'project' => 'addthis',
          'datestamp' => '1287691291',
          'files' => 
          array (
            0 => 'addthis.module',
            1 => 'addthis.admin.inc',
          ),
          'version' => '7.x-2.1-beta1',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'addthis',
        'version' => '7.x-2.1-beta1',
      ),
      'multiform' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/multiform/multiform.module',
        'basename' => 'multiform.module',
        'name' => 'multiform',
        'info' => 
        array (
          'name' => 'Multiple forms',
          'description' => 'Allows displaying and submitting multiple forms in one form',
          'files' => 
          array (
            0 => 'multiform.module',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta2',
          'project' => 'multiform',
          'datestamp' => '1301077268',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'multiform',
        'version' => '7.x-1.0-beta2',
      ),
      'diff' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/diff/diff.module',
        'basename' => 'diff.module',
        'name' => 'diff',
        'info' => 
        array (
          'name' => 'Diff',
          'description' => 'Show differences between content revisions.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'DiffEngine.php',
          ),
          'version' => '7.x-3.2',
          'project' => 'diff',
          'datestamp' => '1352784357',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7305',
        'project' => 'diff',
        'version' => '7.x-3.2',
      ),
      'media_vimeo' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/media_vimeo/media_vimeo.module',
        'basename' => 'media_vimeo.module',
        'name' => 'media_vimeo',
        'info' => 
        array (
          'name' => 'Media: Vimeo',
          'description' => 'Provides Vimeo support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_vimeo.module',
            1 => 'includes/MediaInternetVimeoHandler.inc',
            2 => 'includes/MediaVimeoStreamWrapper.inc',
            3 => 'includes/MediaVimeoStyles.inc',
            4 => 'includes/media_vimeo.formatters.inc',
            5 => 'includes/media_vimeo.styles.inc',
            6 => 'includes/media_vimeo.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-beta5',
          'project' => 'media_vimeo',
          'datestamp' => '1332792648',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media_vimeo',
        'version' => '7.x-1.0-beta5',
      ),
      'menu_position' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/menu_position/menu_position.module',
        'basename' => 'menu_position.module',
        'name' => 'menu_position',
        'info' => 
        array (
          'name' => 'Menu position',
          'description' => 'Customize menu position of nodes depending on their content type, associated terms and others conditions.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu (>7.11)',
          ),
          'files' => 
          array (
            0 => 'menu_position.module',
            1 => 'menu_position.admin.inc',
            2 => 'menu_position.install',
            3 => 'menu_position.node_type.inc',
          ),
          'configure' => 'admin/structure/menu-position',
          'version' => '7.x-1.1',
          'project' => 'menu_position',
          'datestamp' => '1329911144',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'menu_position',
        'version' => '7.x-1.1',
      ),
      'field_group' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Fieldgroup',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_group.install',
            1 => 'field_group.module',
            2 => 'field_group.field_ui.inc',
            3 => 'field_group.form.inc',
            4 => 'field_group.features.inc',
            5 => 'field_group.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'field_group',
          'datestamp' => '1319051133',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'field_group',
        'version' => '7.x-1.1',
      ),
      'features_test' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/features/tests/features_test.module',
        'basename' => 'features_test.module',
        'name' => 'features_test',
        'info' => 
        array (
          'name' => 'Features Tests',
          'description' => 'Test module for Features testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.0',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'strongarm',
            3 => 'taxonomy',
            4 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-features_test-field_features_test',
            ),
            'filter' => 
            array (
              0 => 'features_test',
            ),
            'image' => 
            array (
              0 => 'features_test',
            ),
            'node' => 
            array (
              0 => 'features_test',
            ),
            'taxonomy' => 
            array (
              0 => 'taxonomy_features_test',
            ),
            'user_permission' => 
            array (
              0 => 'create features_test content',
            ),
            'views_view' => 
            array (
              0 => 'features_test',
            ),
          ),
          'hidden' => true,
          'version' => '7.x-2.0-beta1',
          'project' => 'features',
          'datestamp' => '1352395006',
        ),
        'schema_version' => 0,
        'project' => 'features',
        'version' => '7.x-2.0-beta1',
      ),
      'features' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'features',
          'datestamp' => '1352395006',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.0-beta1',
      ),
      'custom_pub' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/custom_pub/custom_pub.module',
        'basename' => 'custom_pub.module',
        'name' => 'custom_pub',
        'info' => 
        array (
          'name' => 'Custom Publishing Options',
          'description' => 'Adds the ability to add Custom publishing options to the node Add/Edit forms.',
          'core' => '7.x',
          'package' => 'Other',
          'suggests' => 
          array (
            0 => 'override_node_options',
            1 => 'views',
          ),
          'version' => '7.x-1.2',
          'project' => 'custom_pub',
          'datestamp' => '1359479644',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'custom_pub',
        'version' => '7.x-1.2',
      ),
      'references_dialog' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/contrib/references_dialog/references_dialog.module',
        'basename' => 'references_dialog.module',
        'name' => 'references_dialog',
        'info' => 
        array (
          'name' => 'References dialog',
          'description' => 'Enhances references fields by adding dialogs for adding and creating entities.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/references_dialog_plugin_display.inc',
          ),
          'version' => '7.x-1.0-alpha4',
          'project' => 'references_dialog',
          'datestamp' => '1338453702',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references_dialog',
        'version' => '7.x-1.0-alpha4',
      ),
      'variable_advanced' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/variable/variable_advanced/variable_advanced.module',
        'basename' => 'variable_advanced.module',
        'name' => 'variable_advanced',
        'info' => 
        array (
          'name' => 'Variable advanced',
          'description' => 'Provides access to advanced low level variables. By using this you will be able to break your site badly.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.2',
          'project' => 'variable',
          'datestamp' => '1358075138',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.2',
      ),
      'variable_views' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/variable/variable_views/variable_views.module',
        'basename' => 'variable_views.module',
        'name' => 'variable_views',
        'info' => 
        array (
          'name' => 'Variable views',
          'description' => 'Provides views integration for variable, included a default variable argument.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'views',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views_plugin_argument_default_variable.inc',
            1 => 'includes/views_handler_field_variable_title.inc',
            2 => 'includes/views_handler_field_variable_value.inc',
          ),
          'version' => '7.x-2.2',
          'project' => 'variable',
          'datestamp' => '1358075138',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.2',
      ),
      'variable_store' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/variable/variable_store/variable_store.module',
        'basename' => 'variable_store.module',
        'name' => 'variable_store',
        'info' => 
        array (
          'name' => 'Variable store',
          'description' => 'Database storage for variable realms. This is an API module.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.2',
          'files' => 
          array (
            0 => 'variable_store.class.inc',
            1 => 'variable_store.test',
          ),
          'project' => 'variable',
          'datestamp' => '1358075138',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'variable',
        'version' => '7.x-2.2',
      ),
      'variable_realm' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/variable/variable_realm/variable_realm.module',
        'basename' => 'variable_realm.module',
        'name' => 'variable_realm',
        'info' => 
        array (
          'name' => 'Variable realm',
          'description' => 'API to use variable realms from different modules',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.2',
          'files' => 
          array (
            0 => 'variable_realm.class.inc',
            1 => 'variable_realm_union.class.inc',
          ),
          'project' => 'variable',
          'datestamp' => '1358075138',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'variable',
        'version' => '7.x-2.2',
      ),
      'variable_example' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/variable/variable_example/variable_example.module',
        'basename' => 'variable_example.module',
        'name' => 'variable_example',
        'info' => 
        array (
          'name' => 'Variable example',
          'description' => 'An example module showing how to use the Variable API and providing some variables.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'variable_store',
          ),
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_example.variable.inc',
          ),
          'version' => '7.x-2.2',
          'project' => 'variable',
          'datestamp' => '1358075138',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.2',
      ),
      'variable_admin' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/variable/variable_admin/variable_admin.module',
        'basename' => 'variable_admin.module',
        'name' => 'variable_admin',
        'info' => 
        array (
          'name' => 'Variable admin',
          'description' => 'Variable Administration UI',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.2',
          'project' => 'variable',
          'datestamp' => '1358075138',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.2',
      ),
      'variable' => 
      array (
        'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/sites/all/modules/variable/variable.module',
        'basename' => 'variable.module',
        'name' => 'variable',
        'info' => 
        array (
          'name' => 'Variable',
          'description' => 'Variable Information and basic variable API',
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/forum.variable.inc',
            1 => 'includes/locale.variable.inc',
            2 => 'includes/menu.variable.inc',
            3 => 'includes/node.variable.inc',
            4 => 'includes/system.variable.inc',
            5 => 'includes/taxonomy.variable.inc',
            6 => 'includes/translation.variable.inc',
            7 => 'includes/user.variable.inc',
            8 => 'variable.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'variable',
          'datestamp' => '1358075138',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.2',
      ),
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.20',
            'core' => '6.x',
            'hidden' => true,
            'project' => 'drupal',
            'datestamp' => '1361393684',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.20',
        ),
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/data/aegir/platforms/kulturmetropol-7.20.0/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.20',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'project' => 'drupal',
            'datestamp' => '1361393684',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.20',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);