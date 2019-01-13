<?php


return [
    'title' => '艦徽製作教學',
    'desc' => '說明如何以自己喜歡的圖片作為對戰用的艦徽',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

網路上可以下載到一些萬艦二的艦徽，或者你想使用你的朋友給你的艦徽。假設你已經下載到艦徽檔案，請將艦徽檔案（.tga檔）放到萬艦二安裝資料夾→Bin→Profiles→Badges目錄下。另外，跟別人網路對戰時，對方的艦徽也會儲存在這裡。

如果你想要自己製作萬艦二的艦徽（Badge），那你要將你的圖檔存成如下的格式：

- 24bit 或是 32bit 的Targa（.tga）檔
- 大小為 64x64
- 如果艦徽有透明的部分，那麼你的tga檔必須包含 alpha channel，並且是 32bit
- 影像不可以有壓縮過
- Alpha channel中，黑色代表完全透明，白色代表不透明。而界於其中的顏色（也就是灰色）代表半透明。

如果你的 TGA 檔不含 Alpha Channel的話，那就不會有透明的效果。

假設你已經做好了一張圖檔要用在萬艦二裡面，卻不知道要怎麼做成所需要的檔案，可以參考下面的製作教學。這個教學是用於大部分的影像處理軟體（如Photoshop， Paintshop Pro）

- 先將你要設成透明的部分用魔術棒工具選起來，然後利用 Selections（選取區域）→Modify（修改）→Expand（延伸/擴展）來將選擇區域擴展幾個像素，以確保你把所有的空白區域都選擇起來。然後選 Selectuon（選取區域）→Invert（反向）或是 Inverse Selection（反向選擇）
- 你現在應該選取了所有不透明的部分。點選 Selections（選取區域） > Save to Alpha Channel（存成Alpha Channel）。
- 將檔案的大小改為 64x64。然後將你的影像存成 32-bit，未壓縮過的 TGA。

另，Starfisher 在 Relicnews 討論版上也有發表一篇相關的[教學](http://forums.relicnews.com/showthread.php?s=&threadid=15092)

*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2)

MC
];
