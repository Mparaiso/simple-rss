RSS
===

[![Build Status](https://travis-ci.org/Mparaiso/simple-rss.png)](https://travis-ci.org/Mparaiso/simple-rss)

A rss feed generator

author : M.Paraiso
contact: mparaiso@online.fr

status : Work in Progress

### Basic Usage

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
    $rssGenerator  = new Mparaiso\Rss\SimpleRss($this->channel);

    $rss = $rssGenerator->generate();

result :

    <?xml version="1.0" encoding="UTF-8" ?>
    <rss version="2.0">
        <channel>
            <title>My rss channel</title>
            <link>http://alink</link>
            <description>the description</description>
            <lang>en-en</lang>
            <copyright>mparaiso</copyright>
            <webMaster>mparaiso@yahoo.php</webMaster>
            <image>
                <title>the image</title>
                <url>imageurl</url>
                <link>http://imagelink</link>
                <width>500</width>
                <height>500</height>
            </image>
            <item>
                <title>item title</title>
                <description>item description</description>
                <guid isPermalink='1'>the guid</guid>
                <pubDate>Thu, 21 Mar 2013 15:49:22</pubDate>
            </item>
        </channel>
    </rss>


