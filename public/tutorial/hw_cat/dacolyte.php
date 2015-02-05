<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '置換船艦入門：阿克萊換成超級阿克萊',
    'desc' => '有了這個就 IMBA 了',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
地動天驚最後一關的超級阿克萊（Super Acolyte）大亂戰相信玩過的人都很有印象，但是平常的時候想看超級阿克萊要怎麼辦呢？這次我就來說說怎樣把阿克萊換成超級阿克萊吧。

首先，把 race_derelict 資料夾裡的（注意，不是 race_trader！）dacolyte 資料夾和所有主檔名是 dacylote 的檔案解開，這個就是超級阿克萊。用筆記本打開dacolyte,lod，把裡面所有的

    dAcolyte\\rl0\lod*\dAcolyte.peo

改成

    sAcolyte\\rl0\lod*\sAcolyte.peo

但是如果只是這樣，進入遊戲時會發現有時會有貼圖錯誤的狀況發生。事實上，在置換任何船艦的時候都有可能遇到這種情形。要處理置換船艦時遭遇到的貼圖錯誤，首先要找到有問題的lod。
以現在來說，出問題的是 lod1，lod2 和 lod3。把他們分別改成 lod0，lod0，和lod2。因為 lod1 和 lod3 直接用的話，貼圖會有很大的問題。lod2 的問題比較少，所以把它放遠一點就看不出來了 ^^U

打開.shp，把

    LODFile _____ dAcolyte.lod
    pMexData ____ dAcolyte\Rl0\LOD0\dAcolyte.mex
改成

    LODFile _____ sAcolyte.lod
    pMexData ____ sAcolyte\Rl0\LOD0\sAcolyte.mex

（差別在於 sacolyte 和 dacolyte）

NUMBER_OF_GUNS改成4。之後加上gun2和gun3，內容如下：

    Type GUN_MissileLauncher
    GunSize GUNSIZE_SMALL
    StartUpgradeLevel WEAPON_MISSILE
    EndUpgradeLevel WEAPON_MISSILE
    DamageMult 7.0
    MaxMissiles 1
    BulletRange 5000.0
    BulletSpeed 200.0
    FireTime 13.0
    TriggerHappy 60

其實就是把原來阿克萊的飛彈架搬過來用（從那裡copy過來的）這樣在用特殊能力時才不會跳出遊戲。但是要增加武器的話，還要修改 MEX 檔案才行。把 dAcolyte\Rl0\LOD0\dAcolyte.mex 用 mex editor 打開（不要用Visual Mex Editor，那個不能用在地動上）。增加武器點 gun2 和 gun3，特性分別和 gun0 和 gun1 一樣（也就是飛彈會從原來離子炮的位置發射），之後存檔。

最後，把所有的檔名和資料夾名凡是有 dacolyte 的改成 sacolyte，另外 dAcolyte\Rl0\ 裡的 lod1 和 lod3 可以砍掉，節省空間（反正沒用到）把資料夾 sacolyte 下的 acolyte.shp、 acolyte.lod、acolyte.mad 這三個檔案丟到 race_sect 資料夾裡就可以啦。如果還是不行的話，可以下載這個[超級阿克萊mod](/tutorial/hw_cat/super_acolyte.zip)看看有何不同之處。

雖然說這一篇說的是超級阿克萊，但是其實要置換任兩艘船的技巧都是類似的。特別要注意的就是特殊功能常會造成置換上的問題，所以要幫松濤換船比更換異獸的船艦要麻煩的多。

MC
]);
