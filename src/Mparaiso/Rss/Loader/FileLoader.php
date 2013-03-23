<?php

namespace Mparaiso\Rss\Loader;

class FileLoader implements ILoader{
    protected $file;
    function __construct($file=NULL){
        $this->file=$file;
    }
    function load()
    {
        $content =  file_get_contents($this->file);
        if($http_response_header){
           preg_match('/\d{3}/',$http_response_header[0],$response_code);
           if($response_code[0]>=400){
            throw new \Exception("HTTP Error : $http_response_header[0] while trying to fetch {$this->file}");
           }
        }
        return $this->xmlToChannel($content);
    }

    function xmlToChannel($xml){
        $channel= array();
        $dom  = new \DOMDocument();
        $items = $dom->getElementsByTagName("item");

        return $channel;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
}