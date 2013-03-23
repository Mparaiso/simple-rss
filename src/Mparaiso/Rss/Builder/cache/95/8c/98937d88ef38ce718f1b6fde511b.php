<?php

/* template.rss.twig */
class __TwigTemplate_958c98937d88ef38ce718f1b6fde511b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\">
    <channel>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "title"), "html", null, true);
        echo "</title>
        <link>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "link"), "html", null, true);
        echo "</link>
        <description>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "description"), "html", null, true);
        echo "</description>
        <language>";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "lang", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "lang"), "en-en")) : ("en-en")), "html", null, true);
        echo "</language>
        <copyright>";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "copyright", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "copyright"), "")) : ("")), "html", null, true);
        echo "</copyright>
        <webMaster>";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "webmaster", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "webmaster"), "")) : ("")), "html", null, true);
        echo "</webMaster>
        ";
        // line 10
        if ($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "image", array(), "any", true, true)) {
            // line 11
            echo "            <image>
                <title>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "image"), "title"), "html", null, true);
            echo "</title>
                <url>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "image"), "url"), "html", null, true);
            echo "</url>
                <link>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "image"), "link"), "html", null, true);
            echo "</link>
                <width>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "image"), "width"), "html", null, true);
            echo "</width>
                <height>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "image"), "height"), "html", null, true);
            echo "</height>
            </image>
        ";
        }
        // line 19
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["channel"]) ? $context["channel"] : null), "items"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "            <item>
                <title>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
            echo "</title>
                <description>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), "html", null, true);
            echo "</description>
                <guid isPermaLink='";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "isPermalink", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "isPermalink"), "false")) : ("false")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "guid"), "html", null, true);
            echo "</guid>
                <pubDate>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "pubDate"), "D, d M Y H:i:s T"), "html", null, true);
            echo "</pubDate>
            </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "template.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  97 => 24,  91 => 23,  87 => 22,  83 => 21,  80 => 20,  75 => 19,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
