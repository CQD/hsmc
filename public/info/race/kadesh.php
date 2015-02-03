<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '卡地許花園的守衛',
    'desc' => '忘記自己根源的宗教狂熱份子',
    'head_ban' => [
       'class' => ['bkadesh'],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
庫沈流亡艦隊所行經的大星雲被當地的勢力稱為卡地許花園。這些人自認為是卡地許花園的守衛，一但有人進入了此處，卡地許勢力就會出現，並且提出一個要求：留下並加入他們，或者是被摧毀。這是他們生存的方式，接收（或強奪）進入大星雲的船艦，並且將資源和材料化為己有。卡地許母艦能夠產生超空間跳躍抑制場，因此進入大星雲的船艦無法離開，如果外來者選擇了戰鬥，他們將會面對數百架極度靈活，而且擁有強大攻擊力的戰機如蝗蟲般襲來。就算戰機群暫時被擊退了，尾隨在後，能同時發射許多高能離子束的奇特護衛艦也會將他們船艦思成碎片。對他們來說，他們是卡地許花園的守衛，必須保護這個地方。他們以這種方式在這個地方生活了13個世代。由於卡地許母艦的特殊能力，所有進入大星雲的船艦都無法逃離，連班圖西人都不願意進入此處。

後來發現卡地許守衛也是當年被流放的西亞加拉人。他們由於某些理由而留在大星雲中，害怕受到泰丹軍隊的攻擊而開始武裝自己，過著海盜般的生活。卡地許母艦本身就是利用廢棄的船艦材料拼裝而成的。隨著時光流逝，他們和那些到達卡拉克的同胞一樣，忘記了自己的起源。只是不斷的攻擊進入大星雲的船艦，以保護他們的花園。而原始的運囚船被保留了下來，被他們稱為卡地許聖堂（Cathedral of Kadesh）。

庫沈流亡艦隊進入了這個區域，也發現卡地許守衛是自己的同胞，但是卡地許守衛並不理會，不斷的攻擊庫沈艦隊。為了自己的生存，也為了重回數萬光年外的家園，他們被迫摧毀大部分的卡地許船艦。只有少部分護衛艦等級的船艦以及其船員被成功捕獲，並一路跟著流亡艦隊回到他們久違的家園西亞加拉。
MC
]);
