<?php


return [

    /**
     * The Cartrabbit version constraint.
     */
    'constraint' => '1.0.0',

    /**
     * Auto-load all required files.
     */
    'requires' => [
        __DIR__ . '/app/customPostTypes.php'
    ],
    
    /**
     * The tables to manage.
     */
    'tables' => [
    ],


    /**
     * Activate
     */
    'activators' => [
        __DIR__ . '/app/activate.php'
    ],

    /**
     * Deactivate
     */
    'deactivators' => [
        __DIR__ . '/app/deactivate.php'
    ],

    /**
     * The routes to auto-load.
     */
    'routes' => [
        'MyPlugin' => __DIR__ . '/app/routes.php'
    ],

    /**
     * The panels to auto-load.
     */
    'panels' => [
        'MyPlugin' => __DIR__ . '/app/panels.php'
    ],


    /**
     * The view paths to register.
     *
     * E.G: 'MyPlugin' => __DIR__ . '/views'
     * can be referenced via @MyPlugin/
     * when rendering a view in twig.
     */
    'views' => [
        'MyPlugin' => __DIR__ . '/resources/views'
    ],

    /**
     * The view globals.
     */
    'viewGlobals' => [

    ],

    /**
     * Providers
     */
    'providers' => array(
        Cartrabbit\Hook\HookServiceProvider::class,
        Cartrabbit\Validator\ValidationServiceProvider::class
        ),

    /**
     * The asset path.
     */
    'assets' => '/resources/assets/'

];
