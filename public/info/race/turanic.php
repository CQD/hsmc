<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '土朗尼掠劫者',
    'desc' => '神出鬼沒並與泰丹帝國狼狽為奸的宇宙海盜',
    'head_ban' => [
       'class' => ['bturanic'],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
沒有人知道這群宇宙海盜和傭兵的真正來源。各種假設的理論層出不窮。從被遺棄的難民到脫逃的奴隸等不一而足。土朗尼掠奪者第一次出現是在銀河標準曆9035年（落地前475年）的時候，這群神秘的戰士出現在土朗星區，也應此獲得了土朗尼掠劫者的稱號。從他們出現以來，土朗尼掠劫者每一百年至少會有兩次對全銀河的貿易路線造成重大的危害；而不管當地政府如何努力剿滅他們，這群海盜總有辦法躲在某個隱密的巢穴中，等到風聲過了以後再出來做案。再這段藏匿的時間，他們大多攻擊落單或是沒有保護的商隊船隊，以便不受人注目的慢慢恢復元氣。在掠劫者實力最強的時候，他們能夠一舉攻下人數頗眾的小行星帶屯墾區。

土朗尼掠劫者在那瘋狂的泰丹大帝瑞斯圖四世（Riesstiu IV）統治之下。實力成長到前所未有的高峰。雖然當時許多細節不為人知，但是泰丹共合國公佈的文件指出，在數次審判戰犯的過程中，犯人親口承認土朗尼掠劫者私下接受帝國的資助和補給。再這段時間之中掠劫者鎖攻擊的目標多半都具有特殊的軍事價值。在這些攻擊中所收擊的情報可以讓大帝壓制鄰近勢力的野心和發展。在西加拉登陸戰之前，可靠的情報來源估計土朗尼掠劫者的勢力，大約有20個航艦戰鬥群分布在泰丹帝國的邊境。

對掠劫者相當不幸的是，瑞斯圖四世的戰死和泰丹帝國的敗亡，也同樣帶來了他們的末日。彷彿感應到歷史的潮流擁向西加拉的流亡艦隊一般，在決戰前夕土朗尼掠劫者的武力全部都躲藏了起來，拒絕對帝國伸出援手。真正的原因恐怕永遠都不會有人知曉。但事後看來，在泰丹帝國被推翻之後，土朗尼掠劫者正好趁此機會掌握許多邊境星球的控制權。這些稍後被稱為海盜王國的前帝國行省現在成為了土朗尼掠劫者在銀河中心的勢力中心。相當諷刺的是，現在換成帝國殘黨向他們尋求援助和庇護。擁帝派和土朗尼掠劫者之間的合作關係雖然一直不明朗，不過有許多報告指出這兩個勢力的艦隊曾經執行過許多聯合的攻擊和掠劫行動。
MC
]);
