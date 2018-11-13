<?php

return [
    
    'path' => [
        'absolute' => public_path($relative = '/img/avatar'),
        'cloud' => 'https://s3-ap-southeast-1.amazonaws.com/'.config('filesystems.disks.s3.bucket').'/images',
        'relative' => $relative
    ],

];