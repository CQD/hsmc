<?php


return [
    'title' => 'Mod 安裝教學',
    'desc' => '萬艦二的 Mod 安裝教學',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

從安裝方式來說，Mod可以分為以下三類：

- [包裝成 big 檔案的 Mod](#a1)
- [未包裝成 big 檔案的 Mod](#a2)
- [遊戲模式 Mod（Game Rule Mod）](#a3)

當然，如果下載回來的Mod有安裝程式的話，直接執行安裝程式就可以了。另外，有少數的Mod有特殊的安裝法，請參照該Mod的說明檔案。

<a name="a1"></a>
### Big 檔案 Mod

所謂big檔案Mod，就是指下載回來的 Mod 包裝成一個檔案，檔名為 xxxxxxx.big。首先將big檔案放置到萬艦二安裝資料夾下面的Data資料夾中，然後在 homeworld2.exe 的路徑後面加入 -mod 參數，後面跟著 big 檔案的檔名。如下圖：

![](/d/tutorial/hw2/install_mod/1.gif)
![](/d/tutorial/hw2/install_mod/2.gif)

最後按下確定，點捷徑執行遊戲即可。注意 homeworld2.exe 的路徑最好用雙引號包起來，像是這樣：

    "C:\Program Files\Sierra\Homeworld2\Bin\Release\Homeworld2.exe" -mod aff.big

可以避免一些問題。不需要Mod時直接把big檔案刪除，並且移除 -mod 參數。

<a name="a2"></a>
### 未包裝成big檔案的Mod
有些Mod下載回來解壓縮開來會看見一大堆檔案。這時候先將這些檔案解到Data資料夾內，然後加上 -overridebigfile 參數，最後執行遊戲即可。如下圖。

![](/d/tutorial/hw2/install_mod/3.gif)
![](/d/tutorial/hw2/install_mod/4.gif)

要注意的是，如果已經有安裝過其他類似的Mod而沒有把檔案先清除的話，mod 之間有可能互衝而讓遊戲無法執行。同樣的，請用雙引號把 homeworld2.exe 的路徑包起來，把參數加在引號外面。

<a name="a3"></a>
### 遊戲模式Mod(Game Rule Mod)
遊戲模式 Mod 不流行，所以不常見到。基本上 Gamerule Mod 會是一個單獨的檔案（其實就是 big 檔案，只是副檔名可能有所不同）如果知道下載回來的 Mod 是屬於 Game Rule Mod，將其放置於[萬艦二安裝資料夾]→[Bin]→[GAMERULES]資料夾即可，不用另外下參數。

![](/d/tutorial/hw2/install_mod/5.gif)

*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2.htm)

MC
];
