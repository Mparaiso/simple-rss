<?php

namespace Mparaiso\Builder;

use Twig_Environment;use Mparaiso\Channel;
use Twig_Loader_Filesystem;

/**
 * FR : crée un fichier rss à l'aide de Twig
 * EN : build a rss file thanks via Twig
 */
class TwigBuilder implements IBuilder
{
    function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem(__DIR__ . "/views/");
        $this->twig   = new Twig_Environment($this->loader, array(
            "cache" => __DIR__ . "/cache/",
        ));
    }

    function build(array $channel,array $items=array())
    {
        return $this->twig->render("template.rss.twig",
            array("channel" => $channel,"channel.items"=>$items));

    }
}