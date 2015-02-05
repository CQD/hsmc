<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => 'Bigviewer',
    'desc' => '第一件事情是把打包起來的檔案解開',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
Bigviwer是用來把存放遊戲相關資料的 .big 格式壓縮檔裡面的檔案解出來用的工具。如果不會用這個程式的話，那就沒辦法做任何修改的工作了。

首先，執行 bigviwer 之後，按一下 Load Big File，會出現一個尋找檔案的視窗。有裝 Homeworld 的話會自動切換到安裝 Homeworld 的資料夾。選Homeworld.big（如果你要改地動天驚的，移到地動的安裝資料夾裡找cataclysm。big）再耐心的等待一陣子之後，就會左邊就會顯示 big 檔裡面的目錄結構。右邊則是所選擇的檔案的內容，例如說 researchdepend.script，裡面存的是研究的相關設定。萬艦的一切幾乎都在 homeworld.big 和 update.big 裡面了。

說到這裡，先提一下 big 檔裡面的目錄結構。在 bigviwer 左邊的視窗所顯示的東西裡面，凡是前面有+的就是代表一個目錄。按一下就會打開那個目錄。而前面沒有+號的就表示那是一個檔案，相對應到萬艦（或地動）的安裝資料夾。例如 researchdepend.script，若是解開來以後若是要讓它正常的工作，就要放到萬艦的安裝資料夾裡。而其他目錄下的檔案就對應到萬艦（或地動）的資料夾下的那個目錄裡面。

第二步就是把檔案解開來了。先點選你要解開的檔案，然後按一下Save File的按鈕，bigviwer就會把檔案存到對應的資料夾裡。若是你要把整個資料夾裡面的檔案連同子資料夾一起存起來，那就按工具列的File，然後選Save Files（Recusive），就會把那個資料夾下面的所有東西存到對應的位置去。

接下來的工作就是修改檔案。所有的 .shp 檔和 .script 檔都可以用筆記本改。前者紀錄所有船艦飛機的物理特性，包括火力大小，血的多少，或是SU等等的；後者記一些雜七雜八的東西。檔案能不能用筆記本改可以看bigviwer的右邊視窗，要是出現的東西是一堆FF 94 94 94 C8 00 00 00的就不能用筆記本改。

最後要注意的是，Bigviwer這個程式只能讀取萬艦和地動的 .big 檔。萬艦二的 .big 格式和之前不同，用這個程式無法開啟，請使用 [Spooky's Relic Archive Tool 2.0](/download/modkit_hw2.htm)

******

PS:文字檔裡面的分號「;」是註解符號，也就是說分號後面的文字會被視為注釋，分號到行尾的文字會被忽略掉，不當做設定檔的一部分

PS2:在改文字檔的時候建議把「編輯」功能表裡的「自動換行」關閉，不然會很難看清楚檔案的內容

******

回到[萬艦齊發/地動天驚 MOD 技術文件](/tutorial/tutorial_hw_cat.htm)

MC
]);
