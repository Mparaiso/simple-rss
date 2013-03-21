<?php

namespace Mparaiso;

use Mparaiso\Builder\TwigBuilder;
use Mparaiso\Builder\IBuilder;

class SimpleRss
{
    /**
     * @var array
     */
    protected $channel;
    /**
     * @var IBuilder
     */
    protected $builder;

    protected $itemAdapter;

    function __construct(array $channel, IBuilder $builder = NULL)
    {
        if ($builder == NULL):
            $builder = new TwigBuilder();
        endif;
        $this->setChannel($channel);
        $this->setBuilder($builder);
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    public function getBuilder()
    {
        return $this->builder;
    }

    public function setBuilder($builder)
    {
        $this->builder = $builder;
    }

    function generate()
    {
        $items=array();
        if (isset($this->itemAdapter)) {
            foreach ($this->channel["items"] as $item) {
                $items[] = $this->itemAdapter->toItem($item);
            }
        }else{
            $items = $this->channel["items"];
        }
        return $this->builder->build($this->channel,$items);
    }


}