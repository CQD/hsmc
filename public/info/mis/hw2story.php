<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '萬艦二初期設定資料',
    'desc' => '曾經，這個故事跟現在的樣子很不一樣',
    'main_image' => 'banner_hanger15.jpg',
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
[萬艦二初期設定資料/劇本](https://drive.google.com/folderview?id=0B2dsPjMpHKiYOE9ndElxNUlhUUk&usp=sharing)

這是萬艦齊發二代發展初期（所謂 Dust Wars 版本）的劇情跟設定資料，同時包含一份不完整的劇本。Email from Rob.pdf 這個檔案是對於其他四個檔案的描述。

文件內的資料為未定案之開發階段工作資料，且不同文件寫作時間差別很大，甚至有 1999 年寫的故事綱要(萬艦二於 2003 上市)，彼此之間有許多出入之處。
MC
]);
