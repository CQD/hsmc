<?php


return [
    'title' => 'AddAbility 函式',
    'desc' => 'ship 檔案的 AddAbility 函式',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

AddAbility是船艦定義中非常重要的一個函式。已知可以透過本功能增加的能力如下列：

- MoveCommand（移動）
- CanDock（停泊到其他船艦）
- CanLaunch（讓其他船艦停泊維修）
- ShipHold（收納其他船艦）
- ParadeCommand（排列成閱兵隊形）
- WaypointMove（路徑點功能）
- CaptureCommand（捕捉其他船艦）
- SalvageCommand（打撈其他船艦）
- HyperspaceCommand（可超空間跳躍）
- CanAttack（攻擊其他單位）
- GuardCommand（守衛其他單位）
- Harvest（採集資源）
- CanBuildShips（建造其他船艦）
- FormHyperspaceGateCommand（連結超空間門）
- HyperspaceViaGateCommand（經過超空間門進行跳躍）
- CanBeCaptured（會被捕捉）
- CanBeSalvaged（能被打撈）
- SensorPing（偵測器感應能力）
- CanBeRepaired（能被維修）
- RepairCommand（維修其他船艦）
- CloakAbility（隱形場）
- SpecialAttack（使用特殊攻擊）
- RetireAbility（可以被回收）
- MinelayerAbility（佈雷能力）
- DefenseFieldAbility（防禦場）
- DefenseFieldShieldAbility（也是防禦場）
- HyperspaceInhibitorAbility（超空間阻絕場）
- (內容待續...)

參考資料：[Karos Graveyard](http://wiki.hw2.info/KarosGraveyard) 的 [FunctionaddAbility](http://wiki.hw2.info/FunctionaddAbility) 條目
*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2)

MC
];
