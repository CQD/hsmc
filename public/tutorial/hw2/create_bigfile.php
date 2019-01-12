<?php


return [
    'title' => '用 archive.exe 建立萬艦二的 Big 檔案',
    'desc' => '以官方的命令列工具把檔案打包成 .big',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

RDN 工具裡面有個視窗介面的 ModPackager，視窗界面對大多數人來說會比較好上手。對於 ModPackager 有興趣的人可以參考這篇 [Relicnews 討論區裡面的教學](http://forums.relicnews.com/showthread.php?s=&threadid=23071)

這裡講解的是 RDN 文件中提到的指令列程式 archive.exe

用 archive.exe 來製作 big 檔案的話要先寫 list 檔案（[RDN文件](/tutorial/hw2/RDN_Document/HW2_ArchiveTool.htm)內稱為 build script）。這個會比較麻煩，先以我編繁體中文化的 big 時所用的 [list 檔案](/d/tutorial/hw2/create_bigfile/english.big.list.htm)作為範例。這個檔案的架構大致上如下：

- Archive name="TweakedByCQD"
- TOCStart name="HW2Data" alias="LOCALE" relativeroot=""
- FileSettingsStart defcompression="1"
- <檔案設定>
- FileSettingsEnd
- <檔案列表>
- TOCEnd

接下來一行一行的來解釋每一段的意義

**Archive name="TweakedByCQD"**<br>
這個Archive檔案的名字，基本上也只是個名字，除了可以放製作者的名字以外沒有實質意義。

**TOCStart name="HW2Data" alias="LOCALE" relativeroot=""**<br>
Big檔案內容列表的開頭。name 屬性一樣只是個名字，alias 屬性則會被遊戲引擎拿來判斷要對應到哪個資料夾。如果是一般的遊戲資料請設定為 DATA （對應的資料夾是 Data）；如果是遊戲要顯示用的文字，請設定為 LOCALE（對應的資料夾是 Data\Locale\）。

**FileSettingsStart defcompression="1"**<br>
開始進行檔案設定，可以對不同的檔案做不同的壓縮設定。像是
```
Override wildcard="*.*" minsize="-1" maxsize="100" ct="0"
```
是表示所有小於 100bytes 的檔案都不會進行壓縮，而
```
Override wildcard="*.lua" minsize="-1" maxsize="-1" ct="2"
Override wildcard="*.ucs" minsize="-1" maxsize="-1" ct="2"
```
表示對 lua 檔案跟 ucs 檔案會進行壓縮，壓縮模式為 2。而沒有特別指定壓縮方式的檔案會依照 defcompression 指定的方式來處理。

詳細的定義可以參考 [RDN 文件](/tutorial/hw2/RDN_Document/HW2_ArchiveTool.htm)

**FileSettingsEnd**<br>
代表檔案設定的結尾，這行以下的東西就是要壓進 Big 檔案內的檔案列表。

**檔案列表**<br>
檔案列表的格式很單純，就像範例一樣把每個檔案列出來就好了。不過檔案很多的時候，如果用人工一行一行打會太花時間。這時候就會用到 dir 指令。如果在提示符號後面輸入
```
dir /s /b > filelist.txt
```
就會把所在資料夾的完整檔案列表（包含子目錄下面的檔案）儲存在 filelist.txt 裡面。

範例：
```
F:\cd "萬艦二\中文化\CQD版\v1_1\"
F:\萬艦二\中文化\CQD版\v1_1>dir /s /b > f:\filelist.txt
```
這個操作會把「F:\萬艦二\中文化\CQD版\v1_1」資料夾裡面的所有檔案的清單存成 F:\filelist.txt。之後用筆記本開啟這個檔案把內容複製出來就可以了。

**TOCEnd**<br>
告訴 archive.exe 這裡是資料表的結尾。

把 build script 建立好以後就可以執行 archive.exe 實際把檔案壓成 big。關於檔案參數的詳細介紹請參考 [RDN 文件](/tutorial/hw2/RDN_Document/HW2_ArchiveTool.htm#CH1)。這裡簡單的介紹一下我用來編 big 檔的[批次檔](/d/tutorial/hw2/create_bigfile/createbig.bat.htm)。第一行代表著切換到E槽，第二行是切換到 archive.exe 所在的目錄（這個目錄是RDN工具安裝的目錄，不過也可以把執行檔放到其他地方）。第三行比較複雜，一段一段來解釋。

**archive.exe**<br>
執行archive.exe

**-a E:\Sierra\Homeworld2\Data\English.big**<br>
所要寫入或讀取的檔案為「E:\Sierra\Homeworld2\Data\English.big」我自己操作的時候會先把原來的 english.big 備分起來。否則直接執行的話若是在指定的位置已經有一個同名的檔案，那麼原本的檔案會被新的檔案給覆蓋掉。

**-c "E:\Sierra\Homeworld2\Data\locale\English\english.big.list"**<br>
所要使用的build script的位置

**-r "E:\Sierra\Homeworld2\Data\locale\English"**<br>
壓入big的檔案們的「根目錄」位置.

這個參數沒有設好的話，壓出來的 big 檔案雖然格式沒錯，也可以正常的解開，但是遊戲會沒有辦法正確的讀到內容。此外檔案路徑不能夾雜中文，這會讓 archive.exe 無法找到正確的路徑。

基本上 big 檔案中的檔案結構和你編輯的原始檔案放在你電腦硬碟的哪裡是沒有什麼關係的。重要的是每個檔案的相互位置，以及他們對應到 DATA 或 LOCALE 下的哪個位置。

例如檔案的原始路徑若是
```
E:\Sierra\Homeworld2\Data\locale\English\leveldata\campaign\ascension\m01_tanis.ucs
```

那麼這個檔案在 Big 檔案結構中是對應到
```
[根目錄]\leveldata\campaign\ascension\m01_tanis.ucs
```

所以會被對應到
```
LOCALE:leveldata\campaign\ascension\m01_tanis.ucs
```
這個邏輯路徑上

*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2)

MC
];
