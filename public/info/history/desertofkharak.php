<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '荒漠探索',
    'desc' => '發現長眠於卡拉克荒漠之下，人民的過去與未來',
    'main_image' => 'banner_dok.jpg',
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
過去，加爾西安（Gaalsien）跟席德（Siidim）曾經是卡拉克上最強大的兩個氏族。這兩個氏族的信仰都非常堅強，加爾西安相信造物主沙鳩克將他們從天堂流放到這顆星球上，目的就是為了讓自己懲罰受苦，必須接受；而席德氏族相信只有自己是天降的氏族，其他氏族都是原生於卡拉克上的次等民族。在 520 年，宗教上的分歧終究導致了戰爭，這場將南北半球都捲入其中的異端戰爭持續了兩百九十年，最後在那百（Naabal）氏族以優勢軍事科技介入下結束。但席德氏族的力量已經大不如前，而加爾西安氏族更因為毀滅卡拉克第一大城沙鳩克而被永久流放到沙漠中。

異端戰爭結束，理性時代開始之後已過了三百年，卡拉克人被逐漸明白自己並非這顆星球的本土居民。許多人造衛星發射到軌道上，搜尋星系中的神秘金屬碎片，相信這些金屬碎片能夠解答自身的起源之謎。然而最驚人的發現則是一場意外。在 1106 年，由於衛星故障不斷旋轉，天線意外指往大荒漠中央，眼尖的技師雷凱博·加拉席（Leykab Jaraci）發現發現該處有強力的異常信號，暗示該處有個巨大的金屬物體。這個巨大的異常信號依照發現者的名字，被命名為「加拉席物件」。後續的衛星偵測發現了許多類似的物體，但是沒有一個像加拉席物件那麼巨大。

此時加爾西安仍然堅持自己的信仰，認為卡拉克人應當繼續在星球上受苦，不可探索群星，以免招來造物主沙鳩克的怒火。卡拉克北半球的主要氏族組成的「北方氏族聯合」屢次發射衛星並尋找外星物體的行為是嚴重的褻瀆。當北方聯合派出以巨大沙漠指揮航艦為中心的探險隊，深入大荒漠尋找加拉席物件的時候，加爾西安人忍無可忍發起軍事攻擊，毀滅了整隻探險隊。這時北方聯合發現加爾西安似乎擁有許多難以解釋的先進科技，認為加爾西安取得了沙漠中埋藏的物體中隱藏的科技，並認為這些科技將能改變卡拉克人的未來。

北方聯合建造五艘新的指揮航艦，於 1110 年派出第二次的探險隊。沙捷（S'jet）氏族的指揮航艦格比西（Kapisi）與席德（Siidim）氏族的指揮航艦薩卡拉（Sakala）同時進入大荒漠中，合力摧毀來襲的加爾西安航母。然而席德氏族為了獨佔外星技術，在戰役稍歇的時候背叛了北方聯合，對格比西的運補隊伍發動攻擊，沙捷氏族成功的擊退薩卡拉戰鬥群的攻擊，擊沈薩卡拉號。

最後，格比西戰鬥群成功到達加拉席物件的所在地，在精密的掃瞄之後，他們發現這巨大的金屬殘骸不但是傳說中卡拉克最初的城市卡爾托巴的所在地，更是一艘巨大無比的移民船。所有的氏族原本都是同一群人，名為庫沈（Kushan）。在卡爾托巴所在地，加爾西安氏族對探索隊發起總攻擊，連同族長在內，竭力戰鬥，直到最後一兵一卒倒下。沙捷氏族憑藉旅程中發現的衛星兵器，勉強守住了卡爾托巴。

這場探索的直接結果，是加爾西安跟席德這兩個有輝煌歷史氏族滅亡，發現初始之城卡爾托巴，以及發掘出其中各種埋藏於過去的外星科技，讓卡拉克的科學技術前進數百年。更長遠的影響是，25 年後在卡爾托巴遺跡之中發現了指引之石，卡拉克的各氏族終於明白自己過去來自於何方，而一個世紀之後六十萬冬眠者踏上返回故鄉西亞加拉的十萬光年旅程。至於遺留在卡拉克上的三億人，則如同加爾西安氏族滅亡前所預言的，被天上降下席捲全球的烈焰所毀滅。

MC
]);
