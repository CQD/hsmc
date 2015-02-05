<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '地圖背景製作教學',
    'desc' => '介紹如何產生萬艦二的地圖所使用的天球背景',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

本文介紹如何產生萬艦二的地圖所使用的天球背景。資料來源是Relicnews討論區文章「[Homeworld 2 Background Tutorial](http://forums.relicnews.com/showthread.php?t=67383)」。

需事先準備的檔案如下：

- [萬艦二背景匯出工具](/d/download/modkit_hw2/HW2BgTool.zip)
- [black_light.hod](/d/tutorial/hw2/background/black_light.hod)，也可從[data:background\black\black_light.hod]取得。
- [Photoshop 用的 Halftone action](/d/tutorial/hw2/background/Homeworld2BG.atn)

### 製作圖片

首先，準備你的背景圖片。在此我們略過美工過程，假設你已經完成你的背景圖片。請在 Photoshop 中執行 Halfton action，之後將圖片儲存成 32bit 的 TGA 圖片。 圖片大小從1024*768到4096*2048皆可，建議大小則為2048*1024。要注意的是邊緣清晰銳利的圖片容易造成匯出的背景圖形有缺陷，或是其他的副作用（STARS WILL NOT WORK？）

根據測試結果，沒做Halftone的圖檔也可以拿來產生天球背景，但效果會很差。

### 匯出背景
開啟萬艦二背景匯出工具，選擇 Meshdensity 2，匯出的背景品質會最高。其他的選項不用去碰。

![](/d/tutorial/hw2/background/hw2bgtool_shot1.gif)

按下「Make Background」按鈕或是「Tools -> load targa image」，載入要使用的背景檔案。等待一段讀取時間，這段時間程式會自動產生下列幾個檔案：

- [圖檔名稱]_filtered.tga
- [圖檔名稱]_StrPts0.obj
- [圖檔名稱]_StrPts1.obj
- [圖檔名稱]_StrPts2.obj

最後會顯示匯出的天球結果。要注意的是此時顯示的結果很可能跟遊戲中不同，僅供參考用。決定要使用所產生的背景則按下「Write HOD」產生背景檔案。

![](/d/tutorial/hw2/background/export_hod.jpg)

### 匯入遊戲

將所要匯出的hod複製到「\Data\background\[背景名稱]\」資料夾中。並將hod的檔名改為「[背景名稱].hod」。之後將black_light.hod複製到同一個資料夾中，更名為「[背景名稱]_light.hod」。

地圖背景檔案是獨立於地圖本身的。一個背景檔案可以被許多個地圖所使用，也可能完全沒有被任何地圖使用。要在地圖中使用自訂的背景，請利用地圖敘述中的loadBackground敘述載入自己的背景。如 loadBackground("mybackground")。成果範例如下

- [原圖](/d/tutorial/hw2/background/bg_original.jpg)
- [範例一](/d/tutorial/hw2/background/bg_with_glitches.jpg)（未作Halftone）
- [範例二](/d/tutorial/hw2/background/bg_without_glitches.jpg)（未作Halftone、高斯模糊5像素）

### 本教學未解決問題

- 天球投影扭曲問題（[例圖](/d/tutorial/hw2/background/bg_distortion.jpg)） 
- 如何製作無扭曲與無接縫的天球投影圖片？
- 某些圖片產生的背景檔案會造成載入地圖時跳出遊戲的問題
- 背景匯出工具的其他參數意義不明
- 「[地圖名稱]_light.hod」的功能與製作方法不明

*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2.htm)

MC
]);
