<?php

namespace Q\HSMC\Controller;

use Aptoma\Twig\Extension\MarkdownExtension;
use Aptoma\Twig\Extension\MarkdownEngine;
use Q\Core\Templator;

class ControllerBase
{
    protected $cacheTime = 3600;

    protected function render(array $data, string $template = 'main.twig')
    {
        $engine = new MarkdownEngine\MichelfMarkdownEngine();
        Templator::addExtension(new MarkdownExtension($engine));

        $content = Templator::render($template, $data);
        $checkSum = crc32($content);

        header("ETag: {$checkSum}");
        header("Cache-Control: public, max-age={$this->cacheTime}");
        echo $content;
    }

    public function run(array $params = [])
    {
        $this->render([]);
    }
}
