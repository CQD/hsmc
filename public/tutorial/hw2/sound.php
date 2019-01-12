<?php


return [
    'title' => '萬艦齊發二聲音檔案相關教學',
    'desc' => '說明如何處理遊戲中的音檔',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

### 概論

萬艦齊發二使用的音樂和音效的檔案都存在 .big 檔案裡面。一代的音效檔案副檔名為 .aif，而二代音效檔案副檔名則是 .fda。雖然副檔名不同，他們的格式是幾乎完全一樣的，都是 .aifr 檔案，只是 Relic 的 aifr 是自訂的格式，不同於一般標準的aif/aifr。想要用 Winamp 聽這些檔案，需要用到 Relic 的 [In_Aif.dll](/download/general.htm#Homeworld)。In_Aif.dll 支援的副檔名是 .aif。

要修改萬艦二的音效/音樂，可以分成下面幾個步驟:

1. [將所想要匯入遊戲中的聲音檔案（例如.mp3）轉換成未壓縮的 .wav 檔](#convert2wav)
2. [利用 Relic 的音效編碼器把 wav 檔案轉成 aifr 格式，並放到適當位置](#wav2aifr)

<a name="convert2wav"></a>
### 將音效檔案轉成未壓縮的wav

有很多音效編輯程式可以做到這件工作。例如 Nero 內附的 Nero Wave Editor，或是 [Audacity](http://audacity.sourceforge.net/) 之類的免費工具。不過如果只是要把 mp3 轉換成 wav 而不打算做任何修改，而且手上又有 Winamp 的話，也可以用 Winamp 來做轉換，步驟如下：

1. 首先把你要轉換的音樂加到播放清單中，並且確定重複播放的選項是關的（[圖例](/d/tutorial/hw2/sound/2-1.gif）。
2. 在Winamp上面按右鍵，選Options => Prefrence（[圖例](/d/tutorial/hw2/sound/2-2.gif）。打開以後選 Output，再選右邊「Disk Writer」那一項（[圖例](/d/tutorial/hw2/sound/2-3.gif)）。
3. 按下面的 Configure 會出現一個[對話方塊](/d/tutorial/hw2/sound/2-4.gif)。設定好檔案要儲存的位置（Output directory），並且指定檔案的格式，之後按下 ok，一播放音樂檔案就會自動儲存成 .wav 檔了。
4. 最後，記得回到 Options => Prefrence，把使用的 Output Plug-in 改回音樂播放器（DirecSound output 或是 waveOut output），以後才能正常的聽音樂。

<a name="wav2aifr"></a>
### 將Wav編碼成aifr

首先到下載 [Relic Audio Encoder](/d/download/modkit_hw_cat/enc.zip)，把他解壓縮以後可以看到四個檔案。其中 enc.exe 是音效編碼程式的本體。要使用 enc.exe 來把 wav 轉成 Relic 的 aifr 檔案。首先進入文字模式，切換目錄到你的 enc.exe 所在的資料夾，並且把你要轉換的 wav 檔案跟 enc.exe放 在同一個資料夾，然後執行這一行指令

```
enc <wav_file> <aifr_file>
```

其中<wav_file>是你要轉換的wav檔的名字，而<aifr_file>是轉換完成的檔案名字。這時你看到的畫面會像這樣：

![檔案編碼畫面](/d/tutorial/hw2/sound/1.gif)

轉換的過程需要數分鐘，可以趁這個時間去上個廁所吃塊餅乾。等到出現「Done.」的字樣，表示檔案已經轉換完成。若是沒辦法適應文字介面下的作業，那可以把要轉的 wav 檔案名稱改為「src.wav」，並且把 wav 檔、EZenc.bat，跟 enc.exe 放在同一個資料夾裡面，再連點兩下 EZenc.bat，就會自動把 src.wav 轉換成 dst.aif。

這時候請在萬艦二安裝資料夾=>Data資料夾中建立 sound 資料夾，sound 裡面建立一個 music 資料夾，music 裡面再建立一個 staging 資料夾，然後把剛剛的轉換好的檔案的檔名改成 staging_01.fda，並且放到staging資料夾中，就像下圖一樣：

![homeworld2\Data\sound\music\staging\staging_01.fda](/d/tutorial/hw2/sound/2.gif)

最後記得把萬艦二的執行捷徑加上「-overrideBigFile」參數（做法可以參考[這裡](/tutorial/hw2/about_modding_hw2.htm#PS1），然後進入遊戲，由於 staging_01.fda 對應的是主選單的背景音樂，所以在進入遊戲後會發現主選單的背景音樂已經變成我們剛剛自訂的音樂了。

當然你也可以把其他的音樂，甚至音效檔案改成你想要的檔案，只要找到對應的檔名就可以了。當然，也可以為自己做的地圖加上自己喜歡的音樂。只要把他轉成 .fda 後放在適當的位置，地圖裡面也有設定音樂的檔名就可以了。

*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2.htm)

MC
];
