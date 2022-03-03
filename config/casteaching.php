<?php


return [
    'default_user' => [
        'name' => env('DEFAULT_USER_NAME','Sergi Tur Badenas'),
        'email' => env('DEFAULT_USER_EMAIL','sergiturbadenas@gmail.com'),
        'password' => env('DEFAULT_USER_PASSWORD','12345678')
        ]
    ,
    'default_user2' => [
        'name' => env('DEFAULT_USER2_NAME','Sergi Casado'),
        'email' => env('DEFAULT_USER2_EMAIL','sergicasado1@iesebre.com'),
        'password' => env('DEFAULT_USER2_PASSWORD','12345678'),
    ],
    'admins' => [
        'sergiturbadenas@gmail.com',
        'pringao@casteaching.com',
    ]
];
