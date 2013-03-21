<?php

namespace Mparaiso\Builder;


/**
 * FR : crée un fichier rss à l'aide de Twig
 * EN : build a rss file thanks via Twig
 */
interface IBuilder
{

    function build(array $channel,array $items=array());

}