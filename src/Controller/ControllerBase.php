<?php

namespace Q\HSMC\Controller;

use Aptoma\Twig\Extension\MarkdownExtension;
use Aptoma\Twig\Extension\MarkdownEngine;
use Twig\Loader\FilesystemLoader as TwigFileLoader;
use Twig\Environment as Twig;

class ControllerBase
{
    protected $cacheTime = 3600;

    private $twig;

    public function __construct()
    {
        $loader = new TwigFileLoader(__DIR__ . '/../../twig');
        $this->twig = new Twig($loader);

        $markdownEngine = new MarkdownEngine\MichelfMarkdownEngine();
        $markdownExtension = new MarkdownExtension($markdownEngine);
        $this->twig->addExtension($markdownExtension);
    }


    protected function render(array $data, string $template = 'main.twig')
    {
        $content = $this->twig->render($template, $data);
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
