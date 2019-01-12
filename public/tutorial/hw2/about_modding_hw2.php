<?php


return [
    'title' => '萬艦二 Mod 概論',
    'desc' => '介紹萬艦二 Mod 開發的相關基本概念',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

### BIG檔

Big 檔案裡面的檔案架構就像個把一堆檔案打包成一個虛擬的資料夾。這個資料夾一個給遊戲程式辨認用的別名（alias）。例如代表遊戲一般資料的「DATA」（對應的位置是萬艦二安裝資料夾下的 Data 資料夾），或是代表各種不同語言的文字資料的「LOCALE」（以英文版來說，對應的位置是萬艦二安裝資料夾下的 Data\Locale\的English 資料夾）。遊戲會利用這些別名來存取 big 裡面的檔案。

<img style="float:left" src="/d/tutorial/hw2/about_modding_hw2/1.gif">
用 Spooky 的 Relic Archive Tool 開啟萬艦二的 big 檔案時，可以看到左邊類似檔案總管的樹狀檔案列表（[例圖](/d/tutorial/hw2/about_modding_hw2/rat.gif)）。這就是 Big 檔案裡面的檔案結構，其中最上面的根目錄就是 alias 的名稱。像是這個範例，紅框內的檔案相當於 Homeworld2\data\ai\cpubuildsubsystem.lua。當遊戲加上「-overwritebig」參數時，big 裡面的這個檔案就會被 Homeworld2\data\ai\cpubuildsubsystem.lua 這個檔案給取代（如果有這個檔案的話）。

萬艦二的遊戲資料檔是儲存在萬艦二安裝目錄 \Data 這個資料夾下的四個 .big 檔案裡面。他們分別是：

- English.big
- EnglishSpeech.big
- Homeworld2.big
- Music.big

事實上，你可以當作在 Data 目錄下面有很多的目錄，下面又有很多的次目錄和檔案。而這四個檔案相當於把Data目錄下面特定的資料夾的內容分別壓縮成四個檔案（例如Homeworld2.big 裡面的 Scripts 資料夾裡面的 race.lua，就相當於位置在萬艦二安裝目錄 \Data\scripts 這個目錄下面的 race.lua）。而萬艦二的程式在執行時，會到這四個 big 檔案裡面讀取對應的資料。

而要製作萬艦二的 MOD，只要在 Data 資料夾下對應你所要修改的檔案的位置放上修改過的檔案，並且在萬艦的執行捷徑後面加上「-overrideBigFile」參數[[註一]](#PS1)，讓遊戲知道要以外界檔案的設定為優先[[註二]](#PS2)，這樣就能修改遊戲的內容了。

這四個檔案的內容分別為：

**English.big（對應資料夾是「萬艦二安裝目錄\Data\locale\English」）**<br>
裡面幾乎包含了所有螢幕上會顯示的文字。包括船隻/研究的名稱和敘述。關卡/過場動畫的字幕。遊戲介面上的文字，或是其他你想的到的東西。之所以是「English.big」是因為裡面都是英文（以英文版的萬艦二作為範例）。

**EnglishSpeech.big**<br>
所有的人聲，包括過場動畫的旁白，遊戲中的語音事件，以及戰鬥中會聽到的戰鬥通訊(Battle Chatter)。當然說這個檔案裡面語音都是英語。注意過場動畫的背景音樂/音效和人聲旁白是分開的。

**Music.big**<br>
所有的音樂。包括了單人戰役關卡用到的音樂，或是多人對戰的背景音樂，以及過場動畫所用的背景音樂。注意過場動畫的背景音樂/音效和人聲旁白是分開的。

**Homeworld.big（對應資料夾是「萬艦二安裝目錄\Data」）**<br>
遊戲的設定值，船隻單位的設定檔/3D模型，關卡任務，畫面特效，各式各樣的Script，以及其他所有上面的檔案沒提到，但是沒有被寫死在遊戲引擎裡面的東西。以大多數的狀況來說，這個檔案的內容才是MOD製作者會感興趣的部分。

想要將big的內容解壓縮開來的話，你需要官方釋出MOD工具的"archive.exe"，或者是下載Spooky寫的Archive Tool

### 修改Script(lua/ship/wepn....)

萬艦二大量使用了Lua Script，來讓遊戲更容易開發，也更有製作 MOD 的彈性空間。但是為了加快遊戲載入的速度，儲存在 big 檔裡面的 script 文件(lua/ship/wepn...等等可用筆記本編輯的文件)都做過組譯的動作，從 big 裡面解出來後不能夠直接修改。你可以到[下載區](/download/modkit_hw2.htm)去下載已經轉譯好的 Homeworld2.big 的完整內容[[註三]](#PS3)。

*****

<a name="PS1"></a>
註一：修改執行捷徑參數的方法如下

- 在萬艦二執行捷徑上面按滑鼠右鍵，選內容（[圖例](/d/tutorial/hw2/about_modding_hw2/1.jpg)）。
- 在「捷徑」標籤下的「目標」欄位是萬艦二的執行程式路徑。在路徑最後面「...orld2.exe」之後面加上「-overrideBigFile」。注意中間要格一個空白（[圖例](/d/tutorial/hw2/about_modding_hw2/2.jpg)） 。另外 homeworld2.exe 的路徑請用雙引號包起來，把參數留在雙引號外面。
- 按下確定鈕 。

<a name="PS2"></a>
註二：除了利用外部檔案來覆蓋過。big 檔的內容以外，還可以將修改好的檔案打包成一個自製的big檔案。之後利用「-mod [檔名].big」的參數來要求遊戲載入特定的mod。

<a name="PS3"></a>
註三：或者你有興趣自己去做組譯/反組譯 lua 的工作，請參考 Relicnews 討論版的這兩個討論串： 


- [LuaC](http://forums.relicnews.com/showthread.php?t=17581)
- [LuaDC](http://forums.relicnews.com/showthread.php?t=23183)

*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2.htm)

MC
];
