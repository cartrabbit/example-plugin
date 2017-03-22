<?php namespace MyPlugin;

/** @var \Cartrabbit\Framework\Panel $panel */

// For Main menu
$panel->add([
    'type'   => 'panel',
    'as'     => 'dashboard',
    'title'  => 'My Plugin',
    'rename' => 'Dashboard',
    'slug'   => 'dashboard-index',
    'uses'   => __NAMESPACE__ . '\Controllers\Dashboard@index'
]);
