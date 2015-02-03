<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '太初之戰',
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
       'content' => <<<CC
太初之戰
=================
讓庫沈人失去家園的慘烈戰爭
CC
    ],
    'content' => <<<MC
在庫沈遺民返回家園的路程上，他們從班圖西人的口中得知這場四千年之前被稱為"太初之戰(War of First Time)"古老戰爭摧毀了庫沈帝國，而戰勝的泰丹將所有的生還者從他們的故鄉-西亞加拉-流放到遠方。並且不得再使用超空間跳躍技術。而泰丹帝國則是穩住了其統治地位，直到四千年之後西亞加拉人回來奪回他們的母星。當時班圖西人是這麼說的：

> 太初之時(the First Time)，一場可怕的戰爭摧毀了你們的古老帝國。你們殘暴的敵人要將你們屠殺到最後一人，但是眾人群起反對，為你們求情。在努力交涉之後，征服者饒過了落敗者的性命。所有的倖存者都被流放。沒有人可以跟隨或是幫助他們。和他們有關的記憶被完全抹除。
> 
> 船隊在宇宙中寂靜的航行過許多世代。他們遭遇到重大的困難...不完美的科技...終於，他們找到了能落腳的星系。這個貧瘠的星球對他們來說如同救贖。他們的宿仇被遺忘了，也看不到自己被監禁的命運。
>
> 有一樣器物在旅程中被保留下來，也就是你們所攜帶的指引之石。那是從長久以來隱沒於神話與傳說的地方，你們家園的神聖天使之月(Angel Moon)所取下來的。你們的努力已經在內環區(Inner Rim)以及其他地方的星域廣為流傳，許多文明都預言著你們的歸來。
> 
> 回到你們的家園， 奪回你的主權 。我們將會召集議會。 

這樣的話語如同神話和傳說，困惑著庫沈人，卻也給予了他們力量，帶領他們擊敗泰丹皇帝，回到家園。後來重返家園的庫沈人在西亞加拉上遍尋文獻，終於整理出西亞加拉被泰丹帝國佔領的實際過程：

在銀河議會成立後不久，同樣為創立會員國的泰丹帝國跟西亞加拉之間有著嚴重的領土糾紛。而銀河議會由於泰丹帝國的背後操弄而偏袒泰丹帝國。此時西亞加拉人偶然發現了超空間核，利用其力量直攻泰丹母星，泰丹帝國宮殿以及泰丹母星上的所有軍事設施都被完全的摧毀。

當然，議會立即決定要求西亞加拉撤兵，放棄泰丹領土內的所有武裝船艦，並交出超空間核。西亞加拉人卻反過來對執行接收工作的班圖西人猛烈攻擊，可是他們失敗了。西亞加拉的宇宙艦隊幾乎完全覆滅，超空間核墜落在西亞加拉的衛星天使之月上。班圖西人由於在西亞加拉人身上看到了自己的影子，而決定解除所有班圖西船艦的武裝。

這時失去了皇帝的泰丹帝國由戰爭英雄瑞斯圖元帥(Admiral Riesstiu)取得大權。他利用這個時機以及手上的邊境艦隊(此時這也幾乎是泰丹帝國全部的軍力)併吞了西亞加拉所轄的大多數領土。這次戰爭很快的就變成屠殺，艦隊所經過之星球只要不加入泰丹就會被投下能摧毀星球上一切生命的武器，有時就算加入還是會被夷為平地。沒有了政治運作，他不在乎議會的制裁警告。他要將所有西亞加拉所轄的星域納入泰丹帝國，西亞加拉星本身會作為新帝國皇宮的所在地。

放棄武力手段的班圖西人努力居中協調，終於為西亞加拉人爭取到一個月的時間。在這一個月內能夠搭上運囚船的人會被留放到銀河邊緣的一顆沙漠星球，只要這些人不再使用跳躍科技就不會被消滅。而留在西亞加拉的人會被處死，或成為奴隸。

於是，庫沈人展開長達四千年的流亡生涯。一直到他們那早已忘記這段歷史的子孫發現了運囚船卡爾拖巴以及指引之石，才終於踏上返鄉之路。
MC
]);
