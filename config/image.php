<?php

return [
    
    'path' => [
        'absolute' => env('APP_URL') == 'https://cambodiahr.com' ? '/home/u875511581/domains/cambodiahr.com/public_html/images/img' : public_path(),
        'public' => 'https://images.cambodiahr.com/img/avatar',
        'cover' => env('APP_ENV') == 'production' ? 'https://images.cambodiahr.com/img/cover' : '/avatar/cover'
    ],

];