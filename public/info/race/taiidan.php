<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '泰丹帝國',
    'desc' => '殘酷統治數千年，卻因庫沈人回歸西亞加拉而瞬間垮台',
    'main_image' => 'banner_taiidan.jpg',
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
泰丹（Taiidan）帝國和西亞加拉帝國一樣，同為銀河議會創始會員。然而，泰丹-庫沈間的糾紛從未停息過。很快的許多的小規模衝突演變為全面戰爭。西亞加拉人員先利用超空間核的力量取得了全面勝利，但是在蹂躪了泰丹母星的庫沈艦隊被班圖西人摧毀後，驍勇善戰的戰士民族泰丹在新興的殘暴軍閥領導下攻下西亞加拉。殘存的庫沈人不是被屠殺，就是被留放到遠方。然而，泰丹帝國在長達三千年的暴政統治之後，原本強硬的泰丹人也漸漸變的如同他們曾擊敗的對手那樣的衰敗。

在銀河標準曆9510年（庫沈人返鄉落地之年）時，泰丹帝國掌握了一百五十個恆星系。但是這些星系並不是心悅誠服的服從帝國的統治。瑞斯圖四世大帝（Emperor Riesstiu IV）的生命已經接近四百年，他的手段和思想也越來越凶殘和血腥。帝國和銀河中其他文明的關係降到了新的冰點：銀河議會（Galactic Council）在五年一次的聚會中譴責帝國的暴行已經成為例行公事；佛瑞集合體（Frerrn Aggregate）也因為銀河遠端旋臂的領土歸屬問題而和泰丹帝國處於一個未正式宣戰的狀態；甚至連以貿易為重的班圖西人都在落地紀元前七年（銀河標準曆9503年）暫停了和泰丹帝國之間的貿易行為。

在帝國最後的日子裡，泰丹的內政問題甚至比這些還要更嚴重。泰丹帝國海軍中興起了一股反抗勢力，其成員甚至包含了原本認為最忠心不二的禁衛軍將領。在一次帝國的清剿行動後，逃脫的反抗勢力的禁衛軍驅逐艦卡培拉號（Kapella）偶然的遇上庫沈流亡艦隊。在尼爾森（Elson）艦長的遊說下，流亡艦隊決定和反抗軍合作，庫沈流亡艦隊在進攻其母星，也是泰丹首都的西亞加拉星的同時，反抗軍同時在各重要據點發動叛變。御駕親征的瑞斯圖大帝陣亡，皇帝的所有複製人也被摧毀，泰丹帝國覆滅。

流放之民回到家園的事件不只是西加拉新生活的開始，同時也結束了泰丹帝國三千年以來的暴戾統治。但是新興的泰丹共和國並沒有一路平順。西亞加拉戰役後，泰丹全境陷入了內戰之中。各個不同的軍閥派系都想奪取帝國的政權，有些星區甚至宣佈獨立。在五年的衝突以及全面戰爭後，泰丹共和國終於穩定下來，維持住一個不安的和平。但是原先的一百五十個星系中，只有六十個願意留在泰丹共和國中，。這些星系大多位於銀河中心地帶，舊帝國的銀河旋臂附近的領土則幾乎成了獨立的公國或是民主聯邦。

在銀河標準歷9516年，泰丹共和國正式和西亞加拉簽訂了合作與互不侵犯條約，也恢復了和班圖西人的貿易關係。據說班圖西人為新生的共和國提供了許多關鍵技術協助，但是還是持續的有星系決定離開泰丹共和國。此外，舊帝國的勢力並沒有完全死滅。擁帝派的艦隊仍然蠢蠢欲動，隨時準備進攻。西亞加拉在庫沈人落地後的十五年間就被擁帝派攻擊了四次，針對共和國的各式大大小小的軍事行動更是從不間斷。共和國必須努力求生存。

星塵戰爭期間以及維格入侵時期的泰丹共和國狀態不詳，僅知有泰丹勢力加入維格軍團。
MC
]);
