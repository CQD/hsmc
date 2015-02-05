<?php
include __DIR__ . '/../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '萬艦二 Mod 工具下載',
    'desc' => '各種工具...',
    'main_image' => "banner_vaygr_bombing.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

大部分的Mod工具都是Relicnews討論版上的網友製作的，可以參照列出的相關討論串來了解關於該工具的使用方法，更新歷程，完成度...等等細節。

同時，[Tanis Shipyard](http://forums.relicnews.com/forumdisplay.php?72-Homeworld-2-Tanis-Shipyards) 與 [Karos Graveyard](http://wiki.hw2.info/KarosGraveyard) 是 Mod 開發相關資訊最詳盡的地方，值得參考。

另，原本 Relic 有開放官方工具，目前已失傳。

*****

### 雜項

Homeworld2.big 解開轉譯後的 script：[完整版](/d/download/modkit_hw2/data_11.rar)，[精簡版](/d/download/modkit_hw2/data_11_lite.rar)<br>
對應1.1版。完整版內含 homeworld2.big 裡面所有可以用文字編輯器修改的檔案，精簡版只包含船隻，武器，子系統跟飛彈的設定檔，Mod的工作就從這裡開始。

[Spooky's Relic Archive Tool](/d/download/modkit_hw2/SpookyRATv200.zip)、[RN討論串](http://forums.relicnews.com/showthread.php?21054)<br>
作者 Spooky，用來解開打包起來的遊戲資料檔案。

[LuaDC](/d/download/modkit_hw2/LuaDC.zip)、[RN討論串](http://forums.relicnews.com/showthread.php?threadid=23183)<br>
作者 Age2uN。從.big裡面解開的.lua/.ship/.wepn等檔案是編譯過而不能直接修改的，這個工具可以把這些檔案反譯回原始文字檔。文字介面，詳細用法請參照討論串。

### HOD

[CFHOD Editor](https://docs.google.com/file/d/0B9-1bboawqHlRkZCLXA0LXNyMFU)、[RN討論串](http://forums.relicnews.com/showthread.php?249532)<br>
作者 4E534B，可以直接編輯/匯入 HOD 檔案以及 MAD 檔案。

[HOD tool](/d/download/modkit_hw2/HODTool.exe)、[RN討論串](http://forums.relicnews.com/showthread.php?s=&threadid=17134)<br>
作者 Spooky，將hod裡面的3D模型的部分解開來，解開的3D模型是obj格式，而大部分的材質貼圖是DDS格式

[Text-based Dockpath Editor](/d/download/modkit_hw2/DOCK.zip)、[RN討論串](http://forums.relicnews.com/showthread.php?threadid=22032)<br>
作者 pipakin 和 Slamoid，基本上是 pipakin 的 HManager，Slamoid 寫了一個 .bat 檔讓 dockpath 的編輯工作更方便。

### 地圖背景

[Homeworld2 Background Builder](https://docs.google.com/open?id=0B9-1bboawqHlc0ZtNWJGVmEwVjg)、[RN討論串](http://forums.relicnews.com/showthread.php?148734)<br>
作者 4E534B，可以用來匯入自定的地圖背景。

[HW2BgTool](/d/download/modkit_hw2/HW2BgTool.zip)、[RN討論串](http://forums.relicnews.com/showthread.php?t=67383)<br>
作者 Evlijedi、Pesmontis、Supernova。可以將特定的TGA檔案轉換成萬艦二的地圖背景。使用方法請見[教學](/tutorial/hw2/background.htm)與 Relicnews 的討論串。

### 音樂

[HW2 Music Tool](/d/download/modkit_hw2/HW2MusicTool.zip)、[RN討論串](http://forums.relicnews.com/showthread.php?t=67517)<br>
作者 ZaTcH。這個工具能夠幫你方便的把mp3跟wav格式的檔案轉換成fda。解開後把hw2mt.exe、enc.exe、madplay.exe跟要轉換的聲音檔案放在同一個資料夾中，執行hw2mt.exe就會出現轉換畫面，把所要轉換的聲音檔案拖到程式視窗中，選擇要轉換的bitrate，然後按下轉換按鍵即可。

[Relic Audio Encoder](/d/download/modkit_hw_cat/enc.zip)<br>
Relic官方工具。可以把wav檔轉成Relic所使用的aifr音效格式，內附中文說明。

MC
]);
