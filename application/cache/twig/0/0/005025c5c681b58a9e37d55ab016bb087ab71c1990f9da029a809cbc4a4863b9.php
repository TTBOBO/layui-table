<?php

/* front/common/hmtbanner.html */
class __TwigTemplate_32a86b863dfb08b0cc4269a6d0d66b20f8c19ce2097cbbafeac2489e6de77410 extends Twig_Template
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
        echo "<style>
    #bt_slide_ol li{width:60px;height:2px;background:#fff;opacity:0.4;border:0;margin:0 5px;}
    #bt_slide_ol .active{width:60px;height:2px;background:#fff;border:0;margin:0 5px;opacity:1;}
    #bt_slide .item a{width:inherit;height:inherit;display:block;} /*//全局幻灯片样式*/
</style>
<div id=\"bt_slide\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol id=\"bt_slide_ol\" class=\"carousel-indicators\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 9
            echo "        <li data-target=\"#bt_slide\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (($context["key"] == 0)) {
                echo "class=\"active\"";
            }
            echo "></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 14
            echo "        <div class=\"item ";
            if (($context["key"] == 0)) {
                echo "active";
            }
            echo "\" style=\"background: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array(), "array"), "html", null, true);
            echo "?v=";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo ") no-repeat center center;height:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "height", array(), "array"), "html", null, true);
            echo ";width:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "width", array(), "array"), "html", null, true);
            echo ";background-size:cover;\">
            ";
            // line 15
            if (($this->getAttribute($context["item"], "link", array()) == "")) {
                // line 16
                echo "            <div class=\"carousel-caption\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "desc", array(), "array"), "html", null, true);
                echo "</div>
            ";
            }
            // line 18
            echo "            ";
            if (($this->getAttribute($context["item"], "link", array()) != "")) {
                // line 19
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array(), "array"), "html", null, true);
                echo "\" target=\"_blank\"><div class=\"carousel-caption\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "desc", array(), "array"), "html", null, true);
                echo "</div></a>
            ";
            }
            // line 21
            echo "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "front/common/hmtbanner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  87 => 21,  79 => 19,  76 => 18,  70 => 16,  68 => 15,  53 => 14,  49 => 13,  45 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <style>*/
/*     #bt_slide_ol li{width:60px;height:2px;background:#fff;opacity:0.4;border:0;margin:0 5px;}*/
/*     #bt_slide_ol .active{width:60px;height:2px;background:#fff;border:0;margin:0 5px;opacity:1;}*/
/*     #bt_slide .item a{width:inherit;height:inherit;display:block;} /*//* /全局幻灯片样式*//* */
/* </style>*/
/* <div id="bt_slide" class="carousel slide" data-ride="carousel">*/
/*     <ol id="bt_slide_ol" class="carousel-indicators">*/
/*         {% for key,item in banners %}*/
/*         <li data-target="#bt_slide" data-slide-to="{{key}}" {% if key ==0 %}class="active"{% endif %}></li>*/
/*         {% endfor %}*/
/*     </ol>*/
/*     <div class="carousel-inner" role="listbox">*/
/*         {% for key,item in banners %}*/
/*         <div class="item {% if key ==0 %}active{% endif %}" style="background: url({{item['path']}}?v={{version}}) no-repeat center center;height:{{item['height']}};width:{{item['width']}};background-size:cover;">*/
/*             {% if item.link =='' %}*/
/*             <div class="carousel-caption">{{item['desc']}}</div>*/
/*             {% endif %}*/
/*             {% if item.link !='' %}*/
/*             <a href="{{item['link']}}" target="_blank"><div class="carousel-caption">{{item['desc']}}</div></a>*/
/*             {% endif %}*/
/*         </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
