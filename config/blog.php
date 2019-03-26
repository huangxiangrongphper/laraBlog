<?php
return [
    'name' => "黄向荣的博客",
    'title' => "黄向荣的博客",
    'subtitle' => 'https://9102smileforward.com',
    'description' => '个人做为后端开发的一些技术分享',
    'author' => '黄向荣',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads/',
    ],
    'contact_email'=>env('MAIL_FROM'),
];
