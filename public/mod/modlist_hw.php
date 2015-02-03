<?php
include __DIR__ . '/../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '萬艦齊發 Mod 列表',
    'desc' => '雖然大部分網站都爛了，還是列出來當個紀念...',
    'main_image' => null,
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

實際上這裡差不多所有的 Mod 網站都已經不在。但是還是在此列出來，也算紀錄也算紀念...

******

**[Alternative Ships Mod](http://www.geocities.com/altshipmod/)**<br>
一個自製船隻的mod

**[Autogun](http://www.autogun.homestead.com/autogunpage.html)**<br>
把攻擊艇換成Autogun

**[Babylon 5 Dark Age](http://www.tgu.org.uk/users/darkage)**<br>
某個Babylon 5(美國的一個科幻影集，台視譯作五號戰星)的Mod

**[Babylon 5 - The Great Wars](http://www.b5mods.com/)**<br>
一度相當活躍的B5主題Mod小組

**[Babylon 5: Conflict of Interests](http://b5coi.visupoint.com/)**<br>
另一個B5的Mod

**[Babylon 5 TC](http://homeworld.firstones.com/)**<br>
也是B5的Mod，就算不用任何mod也可以去找這個站上的B5武器包(我就算不推薦這個mod，也會推薦武器包).他們已經停止工作很久

**[Farscape:Homeworld](http://www.tgu.org.uk/users/farscape/index.html)**<br>
以著名的科幻影集Farscape(AXN:銀河迷返)為基礎所製作的MOD.算是比較年輕的MOD.但是喜歡Farscape的人當然還是不能錯過

**[Fleet Action](http://www.strategyplanet.com/homeworld/fleetaction/index2.html)**<br>
著名太空射擊遊戲銀河飛將(Wing Commander)的mod，算是歷史悠久了

**[Trekmods.com(原Hiigaria Planetia)](http://www.trekmods.com/index.php)**<br>
有一些Star Trek的Mod，包括著名的[Sacrifice of Angels](http://www.trekmods.com/homeworld/soa.php)，[Innocence and Wrath](http://www.trekmods.com/homeworld/iaw.php)，[Beyond the Final Frontier](http://www.trekmods.com/cataclysm/btff.php) ，[The Wounded](http://www.trekmods.com/cataclysm/tw.php)。

**[Homeworld:Battleground](http://www.strategyplanet.com/hwbattleground/bg.htm)**<br>
調整遊戲的平衡度，大戰艦主義者會喜歡這個mod

**[Homeworld:Freespace](http://www.strategyplanet.com/hwfreespace/main.htm)**<br>
縱橫太空(Free Space，不是影集，是太空射擊遊戲)的mod

**[HWmods.de](http://www.hwmods.de/)**<br>
這個站有"Derelicts"，"Cataclysm to Homeworld"，以及"Turanic vs Kadeshi"等三個萬艦的mod，以及地動的mod "Turanic Prowlers".品質都相當的不錯.

**[Kadesh MOD](http://home.wtal.de/host/)**<br>
顧名思義，把單位換成Kadesh的單位

**[Macross:Do You Remember Love](http://www.strategyplanet.com/homeworld/macross/)**<br>
以超時空要塞電影版"愛˙還記得嗎"為主題的Mod，目前的版本已經擺脫了開發時期平衡度頗慘的問題.也重現了Macross主砲發射的驚人場面.

**[Star Wars: New Rebellion](http://swnr.themaw.net/)**<br>
老牌子的星際大戰mod，品質不錯，完成度也很高，而且仍然有更新.

**[The Outpost](http://www.imperialproductions.ws/)**<br>
Raiders Ascendant mod的網站，有mod相關故事.

**[Turanic Raiders vs Kadeshi](http://www.strategyplanet.com/piratesmod/)**<br>
就是以Turanic Raiders和Kadeshi為主角的mod
MC
]);
