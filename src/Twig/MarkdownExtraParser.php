<?php

namespace Opdavies\Sculpin\Bundle\TwigMarkdownBundle\Twig;

use Michelf\MarkdownExtra;

class MarkdownExtraParser implements SculpinTwigMarkdownParserInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform($text)
    {
        return MarkdownExtra::defaultTransform($text);
    }
}
