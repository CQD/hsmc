<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '萬艦二船隻 Script 範例',
    'desc' => '以 hgn_scout.ship 為範例介紹 .ship 檔案的內容',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

NewShipType = StartShipConfig()  
NewShipType.displayedName = "$1500"  
NewShipType.sobDescription = "$1501"  
**-這兩個是設定在遊戲中顯示的名字，前面的\$號表示要從語系檔案讀取字串。**  
NewShipType.maxhealth = 30  
**-一個單位的HP。注意一隊飛機或攻擊艇在狀態列顯示的HP是一個單位的HP乘上一隊的架數**  
NewShipType.regentime = 0  
**-這是船隻完全回血需要的時間，0 表示不會自行回覆**  
NewShipType.minRegenTime = 0  
NewShipType.sideArmourDamage = 1  
NewShipType.rearArmourDamage = 1  
**-這兩個值是表示當船隻從側面或背面被攻擊時所受到的傷害加成。例如 sideArmourDamage 設為 1.5 就表示從側面受到攻擊的傷害是正面受擊的 1.5 倍**  
NewShipType.isTransferable = 1  
**-這個值是 1 就表示多人遊戲中可以把這艘送給別人，0 的話則是不行.**  
NewShipType.useEngagementRanges = 0  
NewShipType.unitCapsNumber = 3  
NewShipType.SquadronSize = 3  
**-一隊的這型船艦有多少個單位**  
NewShipType.formationSpacing = 30  
**-在小隊編隊飛行中每個單位彼此相隔的距離**  
NewShipType.passiveFormation = "Broad"  
NewShipType.defensiveFormation = "Delta"  
NewShipType.aggressiveFormation = "Claw"  
**-不同的態勢時所使用的隊形**  
NewShipType.mass = 10  
**-船隻的質量。有些武器能夠將單位推離原位，推離的量會參考這個值**  
NewShipType.collisionMultiplier = 3  
**-和碰撞判定有關**  
NewShipType.thrusterMaxSpeed = 480  
**-側移的速度上限**  
NewShipType.mainEngineMaxSpeed = 480  
**-向前直行的速度上限**  
NewShipType.rotationMaxSpeed = 105  
**-單位轉彎的速度上限,其單位是「度/秒」**  
NewShipType.thrusterAccelTime = 1.5  
NewShipType.thrusterBrakeTime = 0.75  
NewShipType.mainEngineAccelTime = 1.5  
NewShipType.mainEngineBrakeTime = 0.75  
NewShipType.rotationAccelTime = 0.6  
NewShipType.rotationBrakeTime = 0.3  
**-以上六行設定側移/直行/旋轉的時候從停止到極速或是從極速到停止所需要的時間  
thruster：側移，mainEngine：直行，rotation：旋轉  
AccelTime：停止到極速需要的時間(accelerate time)  
BrakeTime：極速到停止需要的時間**  
NewShipType.thrusterUsage = 0.25  
NewShipType.accelerationAngle = 170  
NewShipType.mirrorAngle = 30  
NewShipType.secondaryTurnAngle = 90  
NewShipType.maxBankingAmount = 85  
NewShipType.descendPitch = 0  
NewShipType.goalReachEpsilon = 5  
NewShipType.slideMoveRange = 0  
NewShipType.controllerType = "Ship"  
**-設定船隻能不能讓玩家控制。「Ship」是可以讓玩家控制的單位。而像是行星殺手之類的東西會設成「None」，玩家不能控制**  
NewShipType.tumbleStaticX = 10  
NewShipType.tumbleStaticY = 20  
NewShipType.tumbleStaticZ = 5  
NewShipType.tumbleDynamicX = 2  
NewShipType.tumbleDynamicY = 10  
NewShipType.tumbleDynamicZ = 5  
NewShipType.tumbleSpecialDynamicX = 800  
NewShipType.tumbleSpecialDynamicY = 1000  
NewShipType.tumbleSpecialDynamicZ = 700  
NewShipType.relativeMoveFactor = 6  
NewShipType.swayUpdateTime = 2  
NewShipType.swayOffsetRandomX = 10  
NewShipType.swayOffsetRandomY = 10  
NewShipType.swayOffsetRandomZ = 10  
NewShipType.swayBobbingFactor = 0.05  
NewShipType.swayRotateFactor = 0.1  
NewShipType.dustCloudDamageTime = 100  
**-在被離子砲激化的星塵中單位會慢慢的損血。這個值設定了從滿血到 0 所需要的時間**  
NewShipType.nebulaDamageTime = 20  
**-在星雲中單位會慢慢的損血.這個值設定了從滿血到 0 所需要的時間**  
NewShipType.MinimalFamilyToFindPathAround = "SuperCap"  
NewShipType.mirrorAboveManeuver = "ImmelMann_speedy, OneEightyDegRightTurn, OneEightyDegLeftTurn, ImmelMann_speedy, ImmelMann_speedy, ImmelMann_speedy"  
NewShipType.mirrorBelowManeuver = "Split_S_speedy, OneEightyDegRightTurn, OneEightyDegLeftTurn, Split_S_speedy, Split_S_speedy, Split_S_speedy"  
NewShipType.specialTurnLeftManeuver = "NinetyDegLeftTurn, None, None"  
NewShipType.specialTurnRightManeuver = "NinetyDegRightTurn, None, None"  
NewShipType.BuildFamily = "Fighter_Hgn"  
**-What type of ship it is in order to be built. Hiigaran fighters are "Fighter_Hgn", Vaygr fighters are "Fighter_Vgr", etc. Non-buildable ships are "NonBuildable".**  
NewShipType.AttackFamily = "Fighter"  
**-當其他單位攻擊這個單位的時候，AI 會把這個單位視為哪種等級**  
NewShipType.DockFamily = "Fighter"  
NewShipType.AvoidanceFamily = "Strikecraft"  
NewShipType.DisplayFamily = "Fighter"  
NewShipType.AutoFormationFamily = "Fighter"  
NewShipType.CollisionFamily = "Small"  
NewShipType.ArmourFamily = "Unarmoured"  
**-船隻的裝甲，和武器的傷害值有關。武器設定中對於不同的裝甲會有不同的反應。**  
NewShipType.UnitCapsFamily = "Fighter"  
**-當計算單位上限時，把此單位視為何種等級**  
NewShipType.fighterValue = 1  
NewShipType.corvetteValue = 0  
NewShipType.frigateValue = 0  
NewShipType.neutralValue = 0  
NewShipType.antiFighterValue = 0  
NewShipType.antiCorvetteValue = 0  
NewShipType.antiFrigateValue = 0  
NewShipType.totalValue = 1  
**-這八個值用來讓電腦決定單人劇情任務中每一關要準備多少/哪些單位來對付人類玩家。**  
NewShipType.buildCost = 350  
**-造價，以小隊為單位**  
NewShipType.buildTime = 20  
**-建造時間**  
NewShipType.buildPriorityOrder = 10  
**-顯示在建造列表上的順序**  
NewShipType.retaliationRange = 4800  
NewShipType.retaliationDistanceFromGoal = 160  
NewShipType.visualRange = 1000  
**-當單位在 Sensor Distortion Probes 或是類似的東西的保護之下時，在多遠的距離會被敵方單位看到**  
NewShipType.prmSensorRange = 9000  
NewShipType.secSensorRange = 11000  
**-這兩個值是單位感應器的範圍。但是為什麼一個大一個小還不清楚**  
NewShipType.detectionStrength = 1  
**-用來判定單位能不能看到隱形船艦或是其他匿蹤狀態下的單位**  
NewShipType.TOIcon = "Triangle"  
NewShipType.TOScale = 1  
NewShipType.TODistanceFade0 = 7000  
NewShipType.TODistanceDisappear0 = 5000  
NewShipType.TODistanceFade1 = 2500  
NewShipType.TODistanceDisappear1 = 2000  
NewShipType.TODistanceFade2 = 12000  
NewShipType.TODistanceDisappear2 = 35000  
NewShipType.TOGroupScale = 1  
NewShipType.TOGroupMergeSize = 0  
**-TO 指的是 Tactical Overlay，這10個值設定了戰術介面上船隻標示(戰機三角形，攻擊艇四方形...之類的東西)的一些相關設定。例如圖示的類型，圖示消失的距離...等等**  
NewShipType.mouseOverMinFadeSize = 0.045  
NewShipType.mouseOverMaxFadeSize = 0.1  
NewShipType.healthBarStyle = 0  
**-血條的形式**  
NewShipType.nlips = 0.0008  
NewShipType.nlipsRange = 6000  
NewShipType.nlipsFar = 0.0003  
NewShipType.nlipsFarRange = 10000  
**-這四個是 nlips 相關的設定**  
NewShipType.SMRepresentation = "HardDot"  
NewShipType.meshRenderLimit = 10400  
NewShipType.dotRenderLimit = 10  
NewShipType.visibleInSecondary = 0  
NewShipType.minLOD = 0.25  
NewShipType.goblinsStartFade = 200  
NewShipType.goblinsOff = 200  
NewShipType.upLOD = 500  
NewShipType.upLOD = 750  
NewShipType.upLOD = 2500  
NewShipType.downLOD = 515  
NewShipType.downLOD = 765  
NewShipType.downLOD = 2515  
**-These bits determine where LODs start, end, where they change, etc.**  
NewShipType.minimumZoomFactor = 0.6800000000000001  
**-The minimum amount you can zoom in on the ship to**  
NewShipType.selectionLimit = 150000  
**-能夠選擇此單位的最遠距離，鏡頭離此單位的距離超過這個數字就無法利用滑鼠選取此單位**  
NewShipType.preciseATILimit = 0  
NewShipType.selectionPriority = 75  
NewShipType.militaryUnit = 1  
**-設定船隻是不是戰鬥單位。和按 A 選擇有關，也會決定單位會不會主動衝進戰場和敵人接戰。**  
addAbility(NewShipType,"MoveCommand",1,0)  
**-這個單位可以進行移動**  
addAbility(NewShipType,"CanDock",1,1)  
**-這個單位可以停泊**  
NewShipType.dockTimeBetweenTwoFormations = 0.5  
NewShipType.dockTimeBeforeStart = 0.5  
**-設定等待停泊的時間，單位是秒**  
NewShipType.dockNrOfShipsInDockFormation = 1  
NewShipType.dockFormation = "dockline"  
**-入港時的隊形**  
NewShipType.queueFormation = "n_delta"  
**-排隊等待入港時的隊形**  
NewShipType.ignoreRaceWhenDocking = 0  
**-A boolean value that determines if the ship will dock with another race's vessel if you are allies. Possibly makes it so you can't dock a Hiigaran fighter with a Vaygr carrier, or simply makes it so priority is given to Hiigaran carriers**  
addAbility(NewShipType,"CanLaunch")  
**-設定船隻可以離港**  
NewShipType.launchTimeBetweenTwoFormations = 0.5  
NewShipType.launchTimeBeforeStart = 0.5  
**-上一隊單位離港後，要等待多久自己才會離港**  
NewShipType.launchNrOfShipsInDockFormation = 1  
NewShipType.launchFormation = "n_delta"  
**-離港後的預設隊形**  
addAbility(NewShipType,"ParadeCommand",1)  
**-可以和母艦/空母等單位組成閱兵隊形(Parade Formation)**  
addAbility(NewShipType,"WaypointMove")  
**-可以利用路徑點移動**  
addAbility(NewShipType,"CanAttack",1,3,1,0,0.35,1,"Fighter, Corvette, Frigate, SmallCapitalShip, BigCapitalShip, Mothership","FlyBy_Interceptor_vs_Frigate",{Fighter = "Flyby_Interceptor_vs_Fighter"},{SubSystem = "TopAttack_Interceptor_vs_Subsystem"},{SmallCapitalShip = "Flyby_Interceptor_vs_CapShip"},{BigCapitalShip = "Flyby_Interceptor_vs_CapShip"},{Mothership = "Flyby_Interceptor_vs_Mothership"},{ResourceLarge = "Flyby_Interceptor_vs_ResourceLarge"})  
**-可以攻擊敵人,並且設定可以攻擊哪些敵方單位,還有對不同的敵人所採取的不同攻擊方式**  
addAbility(NewShipType,"GuardCommand",1,3000,500)  
**-可以守衛其他單位**  
addAbility(NewShipType,"HyperspaceViaGateCommand",1,3,1,0.3)  
**-可以透過超空間門進行超空間跳躍**  
addAbility(NewShipType,"SensorPing",0,1,10,2.5)  
**-可以做感應器掃描。預設不開啟此功能**  
addAbility(NewShipType,"SpecialAttack",0,"EMP")  
**-可以使用EMP攻擊。預設值為不啟動此功能**  
addAbility(NewShipType,"RetireAbility",1,0)  
**-可以退役回收成 RU**  
LoadModel(NewShipType,1)  
StartShipWeaponConfig(NewShipType,"Hgn_Peashooter","Weapon_Autogun","Weapon_Autogun")  
StartShipWeaponConfig(NewShipType,"Hgn_SmallEMP","Weapon_Autogun","Fire")  
**-設定船隻的武器。參數分別是(不知道,"武器的名稱","掛載點位置","發射時執行的event")**  
NewShipType.sobDieTime = 0.1  
NewShipType.sobSpecialDieTime = 2  
NewShipType.specialDeathSpeed = 40  
NewShipType.chanceOfSpecialDeath = 0.25  
NewShipType.deadSobFadeTime = 1  
**-單位被摧毀後消失所需要的時間**  
setEngineTrail(NewShipType,0,3,"trail_ribbon.tga",0.2,0.5,0.025,8)  
**-設定尾流形式**  
setEngineBurn(NewShipType,15,0.5,1,15,0,0.7,0.1,25)  
loadShipPatchList(NewShipType,"data:sound/sfx/ship/Hiigaran/Fighter/",0,"HScoutEng","")   
  
*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2.htm)

MC
]);
