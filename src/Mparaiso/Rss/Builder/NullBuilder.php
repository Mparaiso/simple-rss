<?php
namespace Mparaiso\Rss\Builder;

class NullBuilder implements  IBuilder{
    function build(array $channel, array $items = array())
    {
        return null;
    }
}