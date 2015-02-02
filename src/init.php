<?php
include __DIR__ . '/../vendor/autoload.php';

use Aptoma\Twig\Extension\MarkdownExtension;
use Aptoma\Twig\Extension\MarkdownEngine;

$engine = new MarkdownEngine\MichelfMarkdownEngine();
\Q\Core\Templator::addExtension(new MarkdownExtension($engine));
