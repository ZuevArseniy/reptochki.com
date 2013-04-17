<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
    require SYSPATH . 'classes/kohana/core' . EXT;

    if(is_file(APPPATH . 'classes/kohana' . EXT))
    {
        // Application extends the core
        require APPPATH . 'classes/kohana' . EXT;
    }
    else
    {
        // Load empty core extension
        require SYSPATH . 'classes/kohana' . EXT;
    }
    define('MEDIAROOT', DOCROOT . 'media/');


    /**
     * Set the default time zone.
     *
     * @see  http://kohanaframework.org/guide/using.configuration
     * @see  http://php.net/timezones
     */
    date_default_timezone_set('America/Chicago');

    /**
     * Set the default locale.
     *
     * @see  http://kohanaframework.org/guide/using.configuration
     * @see  http://php.net/setlocale
     */
    setlocale(LC_ALL, 'en_US.utf-8');

    /**
     * Enable the Kohana auto-loader.
     *
     * @see  http://kohanaframework.org/guide/using.autoloading
     * @see  http://php.net/spl_autoload_register
     */
    spl_autoload_register(array('Kohana', 'auto_load'));

    /**
     * Enable the Kohana auto-loader for unserialization.
     *
     * @see  http://php.net/spl_autoload_call
     * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
     */
    ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

    /**
     * Set the default language
     */
    I18n::lang('en-us');


    Kohana::$environment = Kohana::PRODUCTION;


    /**
     * Initialize Kohana, setting the default options.
     *
     * The following options are available:
     *
     * - string   base_url    path, and optionally domain, of your application   NULL
     * - string   index_file  name of your index file, usually "index.php"       index.php
     * - string   charset     internal character set used for input and output   utf-8
     * - string   cache_dir   set the internal cache directory                   APPPATH/cache
     * - boolean  errors      enable or disable error handling                   TRUE
     * - boolean  profile     enable or disable internal profiling               TRUE
     * - boolean  caching     enable or disable internal caching                 FALSE
     */
    Kohana::init(array(
        'base_url'   => '/',
        'index_file' => '',
        'caching' => (Kohana::$environment == Kohana::PRODUCTION) ? TRUE : FALSE,
        'errors' => (Kohana::$environment == Kohana::DEVELOPMENT) ? TRUE : FALSE,
        'profile' => (Kohana::$environment == Kohana::DEVELOPMENT) ? TRUE : FALSE,
    ));

    /**
     * Attach the file write to logging. Multiple writers are supported.
     */
    Kohana::$log->attach(new Log_File(APPPATH . 'logs'));

    /**
     * Attach a file reader to config. Multiple readers are supported.
     */
    Kohana::$config->attach(new Config_File);

    /**
     * Enable modules. Modules are referenced by a relative or absolute path.
     */
    Kohana::modules(array(
        'profilertoolbar' => MODPATH . 'profilertoolbar',
        'admin'           => MODPATH . 'admin',
        'auth'            => MODPATH . 'auth', // Basic authentication
        'cache'           => MODPATH . 'cache', // Caching with multiple backends
        'countries'       => MODPATH . 'countries', // Benchmarking tool
        'database'        => MODPATH . 'database', // Database access
        'image'           => MODPATH . 'image', // Image manipulation
        'imagefly'        => MODPATH . 'imagefly',
        'orm'             => MODPATH . 'orm', // Object Relationship Mapping
        // 'scheduler'   => MODPATH.'scheduler',
        // 'jqupload'    => MODPATH.'jqupload',
        'files'           => MODPATH . 'files',
        'phones'          => MODPATH . 'phones',

        // 'unittest'   => MODPATH.'unittest',   // Unit testing
        'userguide'       => MODPATH . 'userguide', // User guide and API documentation
        'media'           => MODPATH . 'media',


    ));
    /**
     * Set the routes. Each route must have a minimum of a name, a URI and a set of
     * defaults for the URI.
     */
//if (!Route::cache()) {
    if(defined('CITY_ID'))
    {
        Route::set('detail', 'studio_<id>')
            ->defaults(array(
            'controller' => 'studio',
            'action'     => 'detail'
        ));
        Route::set('contact', 'contact')
            ->defaults(array(
            'controller' => 'contact',
            'action'     => 'index'
        ));
        Route::set('mean', 'meanings')
            ->defaults(array(
            'controller' => 'contact',
            'action'     => 'meanings'
        ));
        Route::set('default', '(<controller>(/<action>(/<id>)))')
            ->defaults(array(
            'controller' => 'studio',
            'action'     => 'list'
        ));
    }
    else
    {
        Route::set('contact', 'contact')
            ->defaults(array(
            'controller' => 'contact',
            'action'     => 'index'
        ));
        Route::set('mean', 'meanings')
            ->defaults(array(
            'controller' => 'contact',
            'action'     => 'meanings'
        ));
        Route::set('goto', 'goto/<alias>')
            ->defaults(array(
            'controller' => 'index',
            'action'     => 'goto'
        ));
        Route::set('default', '(<controller>(/<action>(/<id>)))')
            ->defaults(array(
            'controller' => 'index',
            'action'     => 'index'
        ));
    }

//   Route::cache(TRUE);
//}


