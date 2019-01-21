<?php

namespace Q\HSMC\Controller;

use Q\HSMC\Exception\NotFoundException;

class ConceptArt extends ControllerBase
{
    public function run($params = [])
    {
        $map = [
            'hw' => [
                'title' => '萬艦齊發概念畫',
                'desc' => '萬艦齊發開發過程的美術創作',
                'main_image' => 'banner3.jpg',
            ],
            'cat' => [
                'title' => '地動天驚概念畫',
                'desc' => '地動天驚開發過程的美術創作',
                'main_image' => 'banner_cat.jpg',
            ],
            'hw2' => [
                'title' => '萬艦齊發二概念畫',
                'desc' => '萬艦齊發二開發過程的美術創作',
                'main_image' => 'banner_hanger15.jpg',
            ],
        ];

        $path = $params['path'];
        $id = explode('/', $path, 3)[2];

        $data = $map[$id] ?? null;
        if (!$data) {
            throw new NotFoundException();
        }

        $data['head_ban'] = ['type' => 'sidekick'];
        $data['images'] = $this->getData($id);
        if ($id === 'hw') {
            $data['images'] = array_merge($data['images'], $this->getData('hw_storyboard'));
        }
        $data['content'] = ' ';

        $this->render($data, 'gallery.twig');
    }

    private function getData($id)
    {
        $data = json_decode(file_get_contents(__DIR__ . "/../../../../public/i/concept/{$id}/data.json"), true);

        foreach ($data as $key => $row) {
            $data[$key]['image'] = sprintf('/i/concept/%s/%s', $id, $row['image']);
            $data[$key]['thumb'] = sprintf('/i/concept/%s/t_%s', $id, $row['image']);
        }
        return $data;
    }
}
