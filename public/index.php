<?php
include __DIR__ . '/../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
	'site_title' => '首頁',
    'title' => '探索萬艦齊發的世界',
    'desc' => '西亞加拉宇宙載具改裝中心提供各種萬艦齊發系列遊戲的相關資訊，包括歷史、考證、設定、Mod等等，希望能夠帶領中文玩家更進一步了解萬艦齊發故事所在的世界。',
    'head_ban' => [
       'class' => ['b1', 'light'],
       'type' => 'hero',
    ],
    'content' => <<<MC
## 萬艦齊發是什麼

萬艦齊發(Homeworld)是一款全立體的太空戰爭戰略遊戲。玩家指揮手上的宇宙艦隊，不是侷限在 2D 平面上，而是在真正的開放空間中立體機動，彼此戰鬥。
這是第一次玩家可以在自己的螢幕上用一切角度掌握一場如同電影畫面的宇宙戰爭。

萬艦齊發除了畫面驚人，劇情也十分出色。從一代庫沈人賭上種族的存亡，回到遠離千年的家園西亞加拉，到資料片面對無法擊敗的敵人，
再到二代面對一場再次奪走他們家園的戰爭。即使過了這麼多年，也依然讓人難以忘懷。

這無疑的是遊戲史上最精彩的宇宙戰爭故事之一。

MC
]);
