<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '異獸危機',
    'head_ban' => [
       'class' => ['bcat'],
       'type' => 'sidekick',
       'content' => <<<CC
異獸危機
=================
會連人帶太空船吃掉的宇宙殭屍
CC
    ],
    'content' => <<<MC
整個星球被滅的血海深仇讓許多的西亞加拉人對於泰丹人一直無法原諒。卡拉克陷入火海的景象是庫沈人最深沉的仇恨。帝國禁衛軍功擊卡拉克和裝滿睡眠者的冬眠艙的舉動只能用嗜血的狂暴來形容。縱使泰丹共和國協助西亞加拉人在西亞加拉上安定下來，但是這些仇恨的陰影之下，許多西亞加拉人對於新生的泰丹共和國並沒有好感。而擁帝派的勢力不斷的在騷擾西亞加拉的空域。並且有數次大規模的入侵行動。雖然最後都被擊退，但是西亞加拉和泰丹的對立情勢一直沒有平息下來。在這樣不安的星際情勢之下，發生了一個出乎所有人意料的危機事件，也就是異獸（Beast）的威脅。

異獸是一種類似生化機器的生物。他們沒有確實固定的形體，而是一群連結運作的半機械細胞，藉由細胞彼此連結而產生類似神經系統的效果。事實上，整個異獸群體只有一個單獨的意識。而他們擴張自己勢力的方式則是讓自己的細胞直接和其他的船艦接觸。當異獸的細胞觸碰到船艦時，會立刻將船艦上的一切-包括有機的人體和無機的機械部分-轉變成和自己相同的異獸細胞，並且藉以取得這艘船的控制權，以繼續奪取或攻擊其他的船艦，就像是病毒感染生物體後，利用生物體製造更多的病毒一般。也因此這個動作被發現異獸的西亞加拉氏族稱為「感染」。

沒有人確切知道異獸的來源，初始的數量，或是什麼時候開始出現在銀河中。只知道數萬年前異獸利用超空間跳躍的機會感染了一艘擁有相當先進的航行能力的外星太空船 Naggarok。這艘船上的外星人在完全被轉換成異獸細胞前破壞了太空船的引擎，讓他失去航行能力。由於破壞的相當徹底，使得異獸無法利用船上的材料修復其航行能力。而被困在船上而漂流在銀河之中。一直到數萬年後情況才有所改變。

異獸同時在兩個地方重回銀河歷史的舞台。時間則是在西亞加拉人撼動銀河的大回歸之後不久。西亞加拉的松濤（Somtaaw）氏族在很偶然的機會下打撈到從Naggarok發射，帶有異獸細胞的自動發訊機，並將其帶回松濤的一艘採礦指揮艦崑崙號（Kuun-lan）上，希望能夠從這個有數萬年歷史的外星高科技裝置上得到有用的技術資訊。結果崑崙號的部分船身被異獸細胞感染，因而被迫拋棄整個下半部甲板。而協助進行研究的科學船克力桑（Clee-san）以及途經的土朗尼海盜/泰丹擁帝派艦隊也被異獸的感染光束同化。異獸因此在短時間內得到了強大的戰鬥力。崑崙號見到情勢不妙，立刻躍離該處。但是在復仇心，好奇心，以及正義感的交互作用下，松濤氏族開始進行對異獸的研究以及戰鬥準備。

另外一方面，過著流亡生活的泰丹帝國殘黨發現了異獸的細胞樣本。並且利用異獸細胞會不斷感染-複製-再感染的特性將其製作成生物武器以對付新崛起的泰丹共合國以及奪去他們帝國的推手-西亞加拉人。在後來發現異獸有群體意識後跟其溝通，並且說服異獸協助作戰，代價是為Naggarok修復引擎。

最後的戰役發生在泰丹共合國的一個宇宙軍基地，在這裡泰丹共合國正在建造的機動戰鬥要塞遊動戰星（Nomad Moon）被突然出現的Naggarok以及伴隨著的異獸大軍攻擊，同時異獸也摧毀了大部分的共合國軍隊以及軍事設施。接到求救訊號而趕往現場，隸屬於西亞加拉的松濤氏族的艦隊以及他們的旗艦戰鬥艦崑崙號藉著班圖西人的幫助，摧毀了大多數的異獸艦隊以及被佔領的遊動戰星。最重要的是，在數百架利用班圖西技術製造的戰機以及崑崙號主炮的連番轟擊之下，加上泰丹擁帝派軍隊也對異獸起了戒心，轉而決定離開戰場。在軍力不敵的情況下，異獸的根源以及旗艦Naggarok最後終究不敵而被擊沉，異獸的根源以及大腦也從此消失。
MC
]);
