<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '星塵戰爭',
    'head_ban' => [
       'class' => ['bhw2'],
       'type' => 'sidekick',
       'content' => <<<CC
星塵戰爭
=================
西亞加拉人再次失去家園
CC
    ],
    'content' => <<<MC
隨著西亞加拉人的歸來而毀壞的不只是古老的泰丹帝國。許多國家都想藉著庫沈流亡者的回歸，從泰丹帝國身上獲得好處。當班圖西人對於議會成員的召喚，讓這些虎視眈眈卻苦無下手機會的鄰居們如同野狗爭食一般的到達西亞加拉的上空。帝國內戰開始後，隨著泰丹帝國的潰敗，銀河議會也分裂成無數個互相交戰的軍閥派系，大家都想為自己爭取最大的好處。雖然敵人有數量上的優勢而且成包圍之勢，西亞加拉人仍然有壓倒性的力量。西亞加拉人和斑圖西人是僅有的兩個能夠進行長躍（Far Jump） 的種族，能夠在轉瞬的時間內越過廣大的空間。

在銀河議會完全垮台後，隨之而來的是星塵戰爭（Dust Wars） ，這場戰爭一開始只是一些小規模的邊境衝突，但是很快的如星火燎原般越演越烈。差不多是這個時候，維格開始崛起。班圖西人和西亞加拉的凱蘭‧沙捷（Karan S'jet）透過超空間核感應到第三個核心的存在。這一顆核心在統一維格各軍閥勢力的霸主麥肯（Makan）手上。維格在將泰丹叛軍併吞之後，了解到西亞加拉人以及班圖西人也擁有超空間核而欲搶奪之。趁著星塵戰爭機會，來自銀河的東方邊境的維格大軍席捲了整個銀河。這時候的西亞加拉人轉而向古老的預言求助。

在各個古老的氏族中都有和「偉大造物者沙鳩克」有關的敘述。在取得西亞加拉上的古老典籍而且進行研究之後，專家們相信沙鳩克是真實存在的。其正體應該是一艘遠古先民的巨大戰艦。而要發動這艘戰艦，需要三個超空間核的力量。為了取得麥肯手上的第三顆核以及沙鳩克，西亞加拉開始建造第二艘母艦。和第一艘母艦不同的是，第二艘母艦所搭載的人員，主要是要作為運作沙鳩克所需要的船員。同時間作為搭載著超空間核的機動獨立戰隊，在取得三個超空間核之前帶領大軍對維格進行機動重點攻擊。

在母艦即將完工時維格人聽到了這個消息而派遣大軍前往母艦的建造處-坦尼斯遺跡，希望在母艦完成前將其摧毀。但是母艦在大軍到達時及時逃出。之後幾個月的時間。以母艦為中心慢慢的建立起一個龐大的戰鬥團。藉著母艦搭載的超空間核的力量，對於維格的各軍事要點進行重點打擊，同時打聽超空間核所在的情報。班圖西核在最後的班圖西:大港口艦班圖斯自爆後由殘骸中取得。而維格超空間核則是在沙鳩克的所在地將麥肯旗艦擊沉後進行回收。藉著三顆核的力量，西亞加拉人啟動了沙鳩克。並且在當天趕回西亞加拉，擊敗西亞加拉上空的維格圍攻部隊。

在平息了戰爭的威脅之後，銀河自千年以來的動盪鬥爭中回覆和平。古老的貿易航線再度興旺發達。之後，埃朗之眼被發現了。藉著沙鳩克和三核的力量被打開的埃朗之眼是一個巨大的先祖超空間網路的入口。這個網路橫跨了整個銀河，以往需要數個月航程的距離，現在只要一瞬間就能到達。為了紀念打開埃朗之眼的凱蘭‧沙捷，這個偉大的奇蹟與夢想的時代被稱為沙捷時代。
MC
]);