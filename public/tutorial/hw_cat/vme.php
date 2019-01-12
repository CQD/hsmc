<?php


return [
    'title' => 'Visual Mex Editor',
    'desc' => '簡介視覺化的船隻 hard point 編輯器',
    'main_image' => "banner_hanger15.jpg",
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
當你用 mex editor 在打座標時，是看不到結果的。不知道你打的座標是在船的哪一個方位。為了補償這一點，有人寫了 VME 出來。VME 是 Visual Mex Editor的縮寫。顧名思義，它讓你在修改 mex 時，看得到你在改的點是身在何方。不會有「盲打」的情形發生

把VME下載回來解壓縮之後，會有一個檔案和一個資料夾資料夾裡又有四個檔案。執行 vme.exe。先別急著認識介面。我第一件要大家做的事情是開啟檔案。File=>Open，選 xfiles 資料夾，開啟 heavycruiser.x(不是 heavycruiser.mex，這點等下會解釋)。

現在我們來認識 VME 的介面吧。左半邊一格一格的是用來列出mex內的各點。下面的區域會顯示目前選擇到的點的資訊(沒選的話就是什麼都沒有)。而再下面的 Action(注意旁邊有箭頭)是用來增加或刪除一個點的。按旁邊的箭頭就可以拉出功能表。左邊最上面的則是用來調整各個點在銀幕上顯示的大小(cube size)，以及法線(標示出那個點所指的方向)的長度(Normal Length)

接下來看到工具列。File 我想就不用多說了。Render Mode 是設定要如何顯示船艦。Wire Frame 是只顯示框架;Flat Shading 會包上外殼，但是本來光滑的曲面會有稜有角的;Cull Mode的話曲面就不會有稜有角的了。最後看到View，Legend 會顯示顏色和不同種類的點的對照表;Show/Hide Spec Points Palette 可以叫出一個小視窗，利用這個小視窗可以切換特定種類的點要不要顯示。例如我覺得傷害點和導航燈會擾亂視線，就把Damage Point 和 Nav Light 設成沒有選取就可以了。Show/Hide Normals Palette 也是一樣的意思，只是他是切換法線顯不顯示。

VME裡面，視角的移動和萬艦有所不同。壓住滑鼠右鍵可以把鏡頭拉近拉遠，壓住左鍵是用來轉動模型。

現在提一些使用VME要注意的地方。首先VME的3D模型是用 .x 檔案。可以用 3D Exploration 把 peo 或 geo 轉成 .x。如果你是要修改已經有的 mex，把要修改的 mex 和轉好的 .x 放一起，注意主檔名要相同。用VME開的時候就會自動讀入 mex 了。VME 只支援原來的萬艦，地動的 mex 是沒辦法正確使用的。不過在改地動的 mex 時，VME還是有點用處的。因為可以用 VME 找到所要的座標位置，然後再用 mex editor 修改。

MC
];
