<?php

namespace Q\HSMC\Controller;

class Error404 extends ControllerBase
{
    public function run(array $params = [])
    {
        http_response_code(404);

        $this->render([
            'site_title' => '檔案找不到',
            'main_image' => 'banner2.jpg',
            'title' => '404',
            'desc' => '我找不到你要的檔案 /___\\',
            'head_ban' => [
               'type' => 'hero',
            ],
            'content' => '',
        ]);
    }
}
