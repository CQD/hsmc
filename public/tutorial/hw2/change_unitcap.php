<?php


return [
    'title' => '如何修改萬艦二人口上限',
    'desc' => '明明叫做萬艦齊發，畫面上只有十幾艘船說不過去',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

首先要取得已經解譯過的 large.lua、normal.lua、small.lua、singleplayer.lua 等檔案。這四個檔案分別代表對戰的單位上限高、中、低、與單人戰役的人口上限設定。

取得方法有二：

1. 可用 Relic Archive Tool（在[下載區](/download/modkit_hw2.htm)可以找的到），然後開啟「萬艦二安裝資料夾\Data\homeworld2.big」，把裡面的「scripts\unitcaps」資料夾中的四個檔案解開，然後利用 LuaDC 把這四個檔案解譯。
2. 可到[下載區](/download/modkit_hw2.htm)找「Homeworld2.big 解開轉譯後的文件」，下載完整版（精簡版只有船隻與武器）。

然後，修改這四個檔案裡面的數字們，內容應該很容易閱讀。

最後把這四個檔案放到「萬艦二安裝資料夾\Data\scripts\unitcaps」裡面，並且在捷徑裡面加入啟動參數「- overrideBigFile」。方法可參見[萬艦二Mod安裝教學](/tutorial/hw2/install_mod.htm)裡面「未包裝成big檔案的Mod」一節。

不只是人口上限，絕大多數與美工無關的修改都是這樣做。

*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2.htm)

MC
];
