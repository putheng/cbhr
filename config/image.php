<?php

return [
    
    'path' => [
        'absolute' => env('APP_URL') == 'https://cambodiahr.com' ? '/home/u875511581/domains/cambodiahr.com/public_html/images/img' : public_path(),
        'public' => env('APP_URL') == 'https://cambodiahr.com' ? 'https://images.cambodiahr.com/img/avatar' : '/avatar',
        'cover' => env('APP_ENV') == 'production' ? 'https://images.cambodiahr.com/img/cover' : '/avatar/cover'
    ],

];