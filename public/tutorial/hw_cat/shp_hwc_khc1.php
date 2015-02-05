<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '地動天驚SHP格式說明',
    'desc' => ' ',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
以庫沈的重巡洋艦作為例子:
```
[kHeavyCruiser]

;Source Files
;=----------=

pMexData                           kHeavyCruiser\Rl0\LOD0\kHeavyCruiser.mex
LODFile                            kHeavyCruiser.lod
設定相對應的mex和lod的位置,不過建議不要動這兩個設定

;Ship Physics
;=----------=
mass                               10000   ;船隻的質量
momentOfInertiaX                   10000   ;X方向的轉動慣量
momentOfInertiaY                   10000   ;Y方向的轉動慣量
momentOfInertiaZ                   10000   ;Z方向的轉動慣量
轉動慣量的設定會影響到船隻受外力時容不容易旋轉,越大越不容易轉
不過船本身的移動和此無關

至於轉動慣量到底是什麼,請參考高中物理課本
maxvelocity                        250     ;船艦的極速
maxrot                             10      ;最大旋轉速度,不得大於10
thruststrength[TRANS_UP]           39      ;向上平移的加速度
thruststrength[TRANS_DOWN]         39      ;向下平移的加速度
thruststrength[TRANS_RIGHT]        39      ;向右平移的加速度
thruststrength[TRANS_LEFT]         39      ;向左平移的加速度
thruststrength[TRANS_FORWARD]      39      ;前進的加速度
thruststrength[TRANS_BACK]         39      ;後退的加速度
rotstrength[ROT_YAWLEFT]           0.36    ;左轉的加速度,單位是(公尺/秒^2)
rotstrength[ROT_YAWRIGHT]          0.36    ;右轉的加速度
rotstrength[ROT_PITCHUP]           0.06    ;艦首抬高的加速度
rotstrength[ROT_PITCHDOWN]         0.06    ;艦首壓低的加速度
rotstrength[ROT_ROLLRIGHT]         0.06    ;左滾翻的加速度
rotstrength[ROT_ROLLLEFT]          0.06    ;右滾翻的加速度
turnspeed[TURN_YAW]                0.2     ;船隻左右轉的最大速度
turnspeed[TURN_PITCH]              0.2     ;艦首上下移動的最大速度
turnspeed[TURN_ROLL]               0.2     ;船隻滾翻的最大速度
這裡的設定相當於引擎的調整.不論這艘船多重,只要maxvelocity是1000
船的極速就是1000.適當的調整還能為船隻營造出厚重或輕盈的質感


;Basic Ship Stats
;=--------------=
shipclass                          CLASS_HeavyCruiser
以地動來說,船艦的等級有
CLASS_Micro          CLASS_Fighter      CLASS_Corvette
CLASS_Frigate        CLASS_Destroyer    CLASS_Carrier
CLASS_HeavyCruiser   CLASS_Resource     CLASS_Noncombat
CLASS_MotherShip     CLASS_Component

其中的component class指的是指揮艦的各部位(艦橋,引擎,等等....),所有的module
以及研究過反動波科技後會出現在超努艦腹的半球型dreadnought cannon
isCapitalShip                      TRUE    ;是否為主力艦(TURE/FALSE)
buildCost                          3700    ;建造所需要的RU
buildTime                          420     ;多少秒可以做好
supportUnits                       30      ;所需的SU
providesSU                         0       ;建造好以後會提供的SU
TimeShockedByEMP                   0.75    ;這個數值乘上放出EMP攻擊的ACV數量,就是這艘船被EMP攻擊時被癱瘓的秒數
maxhealth                          90000   ;生命值有多少
groupSize                          1       ;size of group ships of this type tend to form <= 用途不明
repairTime                         5       ;非戰鬥時每隔這麼多秒
repairDamage                       320     ;補多少血
repairCombatTime                   10      ;戰鬥時每隔這麼多秒
repairCombatDamage                 100     ;補多少血
以地動天驚來說,若是還沒有自我修復的科技的話,單位的生命值是完全不會回復的
repairDroids                       20      ;維修機器人的數量,除了好看以外沒有其他用途
externalBuild                      FALSE   ;決定船隻是否在指揮艦的外部建造(Ture/False)
若是的話,松濤的指揮艦必須要有Hanger Module才能建造此艘船
fowRadius                          9000
forceFieldProtectionDistanceScale  1.1
approxcollmodifier                 1.0     ; use only % of collspheresize for rough approximations
avoidcollmodifier                  0.8     ; use only % of collspheresize for collision avoidance
這四個我不清楚他的用途,推測跟碰撞的判定有關
blastRadiusShockWave               1.0     ;被打爆時震波的傷害範圍,不過用的單位比遊戲中的公尺大
blastRadiusDamage                  125     ;在爆炸範圍內的單位受到的傷害有多大
minimumZoomDistance                825     ;攝影機可以拉到多近的距離

;Special
;=------= 
Overlay_Selection_Scalar           1.35    ;scale the tactical overlay by this amount
RKOEatMeTime                       60      ;最後大魔王吃掉這艘船要花多少秒
RKOGetsMissiles                    5       ;number of missiles  the RKO will get while eating <= 用途不明
; Pilot View
;=---------=
pilotViewOffsetX                   50.0
pilotViewOffsetY                   0.0
pilotViewOffsetZ                   800.0
設定"駕駛艙視野"時攝影機相對於船的質心的位置.
X是上下,Y是左右,Z是前後
```
MC
]);
