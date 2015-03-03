<?php 

return array(

    'default' => 'mysql',

    'connections' => array(

        'mysql' => array(
            'driver'   => 'mysql',
            'host'      => 'localhost',
            'name'     => 'pvc',
            'user'     => 'root',
            'password' => 'root',
            'charset'  => 'utf-8'
        ),
    ),

    'csv_path' => APP_PATH."tmp/database.csv"

);

