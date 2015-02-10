<?php
include __DIR__ . '/../../src/init.php';

$uri = $_SERVER['REQUEST_URI'];
if ( '/link/all.htm' !== $uri) {
    header('Location: /link/all.htm');
    die();
}

echo \Q\Core\Templator::render('main.twig', [
    'title' => '相關連結',
    'desc' => '收錄各種相關網站',
    'main_image' => "banner_veil_of_fire.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

- [Relicnews](http://www.relicnews.com) 與其[討論區](http://forums.relicnews.com)<br>
  追蹤 Relic 工作室最新消息的資訊網站。討論區有歷史悠久的愛好者社群。
- [Homeworld Shipyard](http://shipyards.relicnews.com/)<br>
  介紹萬艦系列的各種船艦。
- [Encyclopedia Hiigara](http://homeworld.wikia.com)<br>
  西亞加拉大百科是萬艦系列主題 Wiki
- [KarosGraveyard](http://hw2wiki.net/wiki.hw2.info/KarosGraveyard.html)<br>
  萬艦 Mod 技術主題 Wiki
- ModDB 的[萬艦一代](http://www.moddb.com/games/homeworld)與[萬艦二代](http://www.moddb.com/games/homeworld-2)專區
- 深度時空論壇的[家園討論板](http://bbs.deeptimes.org/forum.php?mod=forumdisplay&fid=42)<br>
  大陸的討論區。原本有過 9CCN、《家園》官方論壇、指揮官基地...等主要集散地，但這些論壇都已經陣亡。
- [巴哈姆特萬艦齊發討論板](http://forum.gamer.com.tw/A.php?bsn=01029)
- [遊戲基地萬艦齊發討論板](http://www.gamebase.com.tw/forum/1535)
- [The Gaming Union討論版](http://www.thegamingunion.co.uk/forums/)<br>
  在萬艦齊發一代有不少老字號的MOD將討論版設在此處。例如Star Trek， Star Wars， B5.....等等。
- [西亞加拉年代記](http://www.geocities.jp/hiigara_chronicle/)<br>
  難得的日文網站，曾經在自炊日文化，已經停頓

MC
]);
