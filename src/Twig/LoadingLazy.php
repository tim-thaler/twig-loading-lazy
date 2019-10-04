<?php


namespace Timthaler\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class LoadingLazy extends AbstractExtension
{

    public function getFunctions()
    {
        return [
            new TwigFunction('loadinglazy', [$this, 'getHTMLCode']),
        ];
    }

    public function getHTMLCode(string $src, string $type = 'lazy')
    {
        $html = '<noscript class="loading-lazy">';
        $html .= '<img src="' . $src . '" loading="' . $type . '" />';
        $html .= '</noscript>';
        return $html;
    }
}
