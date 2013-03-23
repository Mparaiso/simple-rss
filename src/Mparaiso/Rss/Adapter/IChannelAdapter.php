<?php

namespace Mparaiso\Rss\Adapter;

interface IChannelAdapter{
    /**
     * convert a model to an associative array
     * @param $data
     * @return mixed
     */
    function toChannel($data);

    /**
     * convert channel back to a model
     * @param $channel
     * @return mixed
     */
    function toModel($channel);
}
