<?php


return [
    'title' => '武器修改簡例-EMP防空砲艦',
    'desc' => '將防空砲艦的武器加上 EMP 功能',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

1. 在 weapon 資料夾下面建立一個 Hgn_FrigateEMPCannon 資料夾
  
2. 把 hgn_kineticburstcannon 資料夾裡面的 hgn_kineticburstcannon.wepn 複製到 Hgn_FrigateEMPCannon 裡面，並且更名為 Hgn_FrigateEMPCannon.wepn

3. 用文字編輯器打開這個檔案，有兩行 
   ```
   AddWeaponResult(NewWeaponType,"Hit","SpawnWeaponFire","Target",0,0,"Hgn_BurstCannonBurst")
   AddWeaponResult(NewWeaponType,"Miss","SpawnWeaponFire","Target",0,0,"Hgn_BurstCannonBurst")
   ```
   在這兩行下面加上另外這兩行敘述: 
   ```
   AddWeaponResult(NewWeaponType,"Hit","SpawnWeaponFire","Target",0,0,"hgn_smallempburst")
   AddWeaponResult(NewWeaponType,"Miss","SpawnWeaponFire","Target",0,0,"hgn_smallempburst")
   ```
   改好的武器檔內容就像[這樣](/d/tutorial/hw2/wepn__flak_emp/hgn_frigateepmcannon.htm)

4. 到 ship\hgn_assaultfrigate 資料夾裡面，用文字編輯器打開 hgn_assaultfrigate.ship。把這兩行武器設定的敘述：
   ```
   StartShipWeaponConfig(NewShipType,"Hgn_KineticBurstCannon","Weapon_Top","Fire_Top")
   StartShipWeaponConfig(NewShipType,"Hgn_KineticBurstCannon","Weapon_Bottom","Fire_Bottom")
   ```
   改成下面這樣 
   ```
   StartShipWeaponConfig(NewShipType,"Hgn_FrigateEMPCannon","Weapon_Top","Fire_Top")
   StartShipWeaponConfig(NewShipType,"Hgn_FrigateEMPCannon","Weapon_Bottom","Fire_Bottom")
   ```
   改好的 .ship 內容會像[這樣](/d/tutorial/hw2/wepn__flak_emp/hgn_assaultfrigate.htm)

這樣就能把 Flak Frigate 防空砲改裝為有 EMP 震爆效果的防空砲。

*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2)

MC
];
