<?php

namespace Mparaiso\Rss;

use Mparaiso\Rss\SimpleRss;
use DOMDocument;
use Mparaiso\Rss\Builder\NullBuilder;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-21 at 14:52:23.
 */
class SimpleRssTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SimpleRss
     */
    protected $object;
    protected $channel;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->channel = array(
            "title"       => "My rss channel",
            "link"        => "http://alink",
            "description" => "the description",
            "lang"        => "en-en",
            "copyright"   => "mparaiso",
            "webmaster"   => "mparaiso@yahoo.php",
            "image"       => array(
                "title"  => "the image",
                "url"    => "imageurl",
                "link"   => "http://imagelink",
                "width"  => "500",
                "height" => "500",
            ),
            "items"       => array(
                array(
                    "title"       => "item title",
                    "description" => "item description",
                    "guid"        => "the guid",
                    "isPermalink" => 1,
                    "pubDate"     => new \DateTime(),
                ),
            )
        );
        $this->object  = new SimpleRss($this->channel);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers SimpleRss::getChannel
     */
    public function testGetChannel()
    {
        $this->assertTrue(is_array($this->object->getChannel()));
    }

    /**
     * @covers SimpleRss::setChannel
     */
    public function testSetChannel()
    {
        $this->object->setChannel(array("blop"));
        $channel=$this->object->getChannel() ;
        $this->assertTrue($channel[0] == "blop");
    }

    /**
     * @covers SimpleRss::getBuilder
     */
    public function testGetBuilder()
    {
        $this->assertInstanceOf('\Mparaiso\Rss\Builder\IBuilder', $this->object->getBuilder());
    }

    /**
     * @covers SimpleRss::setBuilder
     */
    public function testSetBuilder()
    {
        $builder = new NullBuilder;
        $this->object->setBuilder($builder);
        $this->assertInstanceOf('\Mparaiso\Rss\Builder\NullBuilder', $this->object->getBuilder());

    }

    /**
     * @covers SimpleRss::generate
     */
    public function testGenerate()
    {
        $result = $this->object->generate();
        $this->assertNotNull($result);
        $dom = new DOMDocument();
//        print_r($result);
        $loaded = $dom->loadXML($result);
        $this->assertTrue($loaded);
        $root = $dom->firstChild->nodeName;
        $this->assertEquals("rss",$root);
        $items = $dom->getElementsByTagName("item");
        $this->assertEquals(1,$items->length);
        $this->assertEquals("item title",$dom->getElementsByTagName("title")->item(2)->nodeValue);
    }
}
