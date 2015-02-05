<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => 'BIG 檔案的架構',
    'desc' => '打包遊戲資料的 big 檔案的簡單解說',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

Big檔案裡面的檔案架構就像個把一堆檔案打包成一個虛擬的資料夾。這個資料夾一個給遊戲程式辨認用的別名(alias)。例如代表遊戲一般資料的「DATA」(對應的位置是萬艦二安裝資料夾下的 Data 資料夾)，或是代表各種不同語言的文字資料的「LOCALE」(以英文版來說，對應的位置是萬艦二安裝資料夾下的 Data\Locale\English 資料夾）。遊戲會利用這些別名來存取big裡面的檔案。

<img src="/d/tutorial/hw2/bigfile/1.gif" align="left">
用 Spooky 的 Relic Archive Tool 開啟萬艦二的 big 檔案時，可以看到左邊類似檔案總管的樹狀檔案列表。這就是Big檔案裡面的檔案結構，其中最上面的根目錄就是 alias 的名稱。以這個例子來說，紅框內的檔案相當於「Homeworld2\data\ai\cpubuildsubsystem.lua」。當遊戲加上「-overwritebig」參數時，big裡面的這個檔案就會被「Homeworld2\data\ai\cpubuildsubsystem.lua」這個檔案給取代（如果有這個檔案的話）。

*****

[回到萬艦二 Mod 教學文件頁](/tutorial/tutorial_hw2.htm)

MC
]);
