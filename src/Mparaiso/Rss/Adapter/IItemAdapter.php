<?php

namespace Mparaiso\Rss\Adapter;

interface IItemAdapter{
    function toItem($data);
}