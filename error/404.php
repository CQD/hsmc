<?php
include __DIR__ . '/../src/init.php';

// 如果在 /d 資料夾裡面有這個檔案，redirect 過去
$path_info = $_SERVER['PATH_INFO'];
if (is_file(__DIR__ . "/../public/d{$path_info}")) {
	header("Location: /d{$path_info}");
	exit;
}

// 印出 404 頁面
http_response_code(404);

echo \Q\Core\Templator::render('main.twig', [
    'site_title' => '檔案找不到',
    'main_image' => 'banner2.jpg',
    'title' => '404',
    'desc' => '我找不到你要的檔案 /___\\',
    'head_ban' => [
       'type' => 'hero',
    ],
    'content' => ''
]);
