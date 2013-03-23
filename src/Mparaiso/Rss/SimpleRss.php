<?php

namespace Mparaiso\Rss;

use Mparaiso\Rss\Builder\RssTwigBuilder;
use Mparaiso\Rss\Loader\FileLoader;
use Mparaiso\Rss\Loader\ILoader;
use Mparaiso\Rss\Adapter\IChannelAdapter;
use Mparaiso\Rss\Builder\IBuilder;

/**
 * @author M.Paraiso
 * Generate a rss feed from an array of datas
 */
class SimpleRss
{
    /**
     * @var array
     */
    protected $channel;
    /**
     * @var Mparaiso\Rss\Builder\IBuilder
     */
    protected $builder;
    /**
     * @var Mparaiso\Rss\Loader\ILoader
     */
    protected $loader;
    protected $channelAdapter;

    function __construct(array $channel, IBuilder $builder = NULL, ILoader $loader = NULL)
    {
        if ($builder == NULL):
            $builder = new RssTwigBuilder();
        endif;
        if ($loader == NULL):
            $loader = new FileLoader;
        endif;
        $this->channel = $channel;
        $this->builder = $builder;
        $this->loader  = $loader;
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
        if (isset($this->channelAdapter)) {
            $channel = $this->channelAdapter->toChannel($this->channel);
        } else {
            $channel = $this->channel;
        }
        return $this->builder->build($channel);
    }

    /**
     * @TODO fix it
     * @param null $file
     * @return string
     */
    function fetch($file = NULL)
    {
        if (!$file == NULL) {
            $this->loader->setFile($file);
        }
        return $this->loader->load();
    }

    public function getChannelAdapter()
    {
        return $this->channelAdapter;
    }

    public function setItemAdapter(IChannelAdapter $channelAdapter)
    {
        $this->channelAdapter = $channelAdapter;
    }

    public function getLoader()
    {
        return $this->loader;
    }

    public function setLoader($loader)
    {
        $this->loader = $loader;
    }


}
