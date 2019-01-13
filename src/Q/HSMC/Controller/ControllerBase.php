<?php

namespace Q\HSMC\Controller;

use Aptoma\Twig\Extension\MarkdownExtension;
use Aptoma\Twig\Extension\MarkdownEngine;
use Q\Core\Templator;

class ControllerBase
{
    protected function render(array $data, string $template = 'main.twig')
    {
        $engine = new MarkdownEngine\MichelfMarkdownEngine();
        Templator::addExtension(new MarkdownExtension($engine));

        echo Templator::render($template, $data);
    }

    public function run(array $params = [])
    {
        $this->render([]);
    }
}
