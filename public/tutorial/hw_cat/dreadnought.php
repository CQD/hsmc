<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '實做教學Step by Step：改裝超弩艦',
    'desc' => '實際動手做修改',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
本次的改造著重在超弩的四大缺點：

- 建造超弩太耗時，也太花錢
- 佔太多su，就算有錢也做不了幾艘
- 雖有全方位打擊火力，但是對艦火力稍嫌不足（超弩都是用皮厚和反動波跟其他戰艦硬拼）
- 移動速度實在是有點慢

改造步驟：先把 sdreadnought.shp 解到正確位置後，用筆記本打開.先找到 Ship Physics 區段，裡然後把下列的欄位改成以下的數值

    maxvelocity 800
    thruststrength[xxxxxxx]全部改成350
    rotstrength[ROT_xxxxxx]改成3，另外四個改成0.5
    turnspeed[TURN_YAW] 1，剩下兩個是0.1

引擎修改完成，超駑現在可是有接近攻擊艇的靈活性。接下來找到 Basic Ship Stats 區段，把 buildCost 改成1，buildTime 改成 2，supportUnits 改成 3。修改後價格 1 RU，建造費時 2 秒，佔去 3 SU

然後改裝武器系統。找到 Weapons 區段。先找 GUN 0，把 Type 改成 GUN_HiddenGimble，StartUpgradeLevel 和 EndUpgradeLevel 改成 WEAPON_ION。接下來的設定，有的就照我的修改，檔案裡沒有的就加上去，我沒寫的就不用理他：

    BulletRange 8000
    BulletSpeed 0
    FireTime 3
    MinAngle 0
    MaxAngle 10
    BulletLifeTime 2
    BulletLength 8000

完成 GUN 0 的設定之後，把 GUN 1 到 GUN 5 做一樣的設定.這是把所有的飛彈發射器拆除，改成指向艦首的大型離子炮，將火力提升，嶄新的超弩可是擁有 30 秒摧毀 beast 空母的火力。

接下來存檔，不用移動它，就把這個檔案放那裡。最後，把遊戲調成不用研發科技，建造一堆超弩去凌虐你的對手吧。

MC
]);
