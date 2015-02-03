<?php
include __DIR__ . '/../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '關於本站作者 CQD',
    'desc' => '沒什麼，也就只是個 Google 認證的蘿莉控罷了',
    'head_ban' => [
       'class' => ['bcqd'],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
CQD 是一種奇妙的生物。常出沒在網路上。最著名事蹟是在三十秒內接收了三萬人分的愛而變身成為巨大機器人。

CQD 熱愛巨大宇宙戰艦，卻打著反戰派的旗幟，整天追著小貓咪、小女孩、跟打扮成小貓咪的小女孩跑。因此一般認為 CQD 是一種自我矛盾的變態生物。

關於 CQD 的外型，曾有這樣的描述：

> 身長四十丈，眉間九尺，眼如銅鑼，口吐白光，腳踏火雲，行如雷鳴。」

CQD偶而會在這些地方出沒：

- CQD @ Plurk，Google Plus
- galine @ PTT （不是 cqd，so sad）
- 愛與正義科學研究所™
MC
]);
