<?php

return array(
    
    'defaultController' => 'Siswa',
    'siswa/(:num)' => 'Siswa/index/$1',
    
    // Just put null value if you has enable .htaccess file
    'indexFile' => INDEX_FILE . '/',
    
    'module' => array(
        'path' => APP,
        'domainMapping' => array(),
    ),
    
    'vendor' => array(
        'path' => GEAR.'vendors/'
    ),
    
    'alias' => array(
        /*
        'controller' => array(
            'class' => 'Alias',
            'method' => 'index'
        ),
        */
        'method' => 'alias'
    ),
);