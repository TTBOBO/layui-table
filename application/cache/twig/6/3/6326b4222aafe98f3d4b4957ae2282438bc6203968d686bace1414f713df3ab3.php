<?php

/* front/header.html */
class __TwigTemplate_fe5177f1fab71c5c91c77ba1b5b871e3c39d64aa38bbef8956105f3df00de6a7 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>海脉空间 - ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinfo"]) ? $context["webinfo"] : null), "keywords", array()), "html", null, true);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinfo"]) ? $context["webinfo"] : null), "description", array()), "html", null, true);
        echo "\" />
        <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinfo"]) ? $context["webinfo"] : null), "author", array()), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"/resource/front/js/jslib/bootstrap-3.3.5/css/bootstrap.min.css\" />
        <script src=\"/resource/front/js/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"/resource/front/css/base.css?v=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"/resource/front/css/font-awesome.min.css\">
        <script type=\"text/javascript\" src=\"/resource/front/js/jslib/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"/resource/front/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"/resource/front/js/jslib/ykp.js\"></script>
    </head>
    <body>
        <div id=\"header\" class=\"header\" >
            <section>
                <div class=\"nav_logo inline-block\">
                    <div class=\"inline-block\"><a href=\"/\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinfo"]) ? $context["webinfo"] : null), "weblogo", array()), "html", null, true);
        echo "\"></a></div>
                    <div class=\"nav_text inline-block\">
                        <h3>全国连锁灵活式联合办公空间综合服务商</h3>
                        <h4>400-822-3230</h4>
                    </div>
                </div>
                <div class=\"nav-tag\">
                    <ul>
                        <li><i class=\"glyphicon glyphicon-search\" ></i></li>
                        <li><a href=\"/home/checkCity\"><i class=\"glyphicon glyphicon-map-marker\" ></i> 深圳</a></li>
                        <li style=\"position: relative; height: 43px; cursor: pointer;\" id=\"lang\"><span  class=\"lang\">中文站</span> <i class=\"glyphicon glyphicon-menu-down\"></i><ul class=\"langular\"><li>中文站</li><li>English站</li></ul></li>
                        <li><a href=\"/home/login\">登陆</a><span class=\"nav-tag-pad\">|</span><a href=\"/home/regist\">注册</a></li>
                    </ul>
                </div>
                <div class=\"nav-link\">
                    <ul>
                        <li><a href=\"/\">首页</a></li>
                        <li><a href=\"/hmtong\">海脉通</a></li>
                        <li><a href=\"/hm_ioffice\">IOFFICE</a></li>
                        <li><a href=\"/hmspace\">海脉汇</a></li>
                        <li><a href=\"/hm_qifubao\">企服宝</a></li>
                        <li><a href=\"/hm_rong\">海脉融</a></li>
                        <li><a href=\"/hm_zhong\">海脉众包</a></li>
                    </ul>
                </div>
            </section>
        </div>
        <script>
        \t\$(function() {
        \t\t\$('.langular li').click(function() {
        \t\t\tvar text = \$(this).text();
        \t\t\t\$('.lang').text(text);
        \t\t})
        \t})
        </script>
";
    }

    public function getTemplateName()
    {
        return "front/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  44 => 12,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>海脉空间 - {{title}}</title>*/
/*         <meta charset="UTF-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="keywords" content="{{webinfo.keywords}}" />*/
/*         <meta name="description" content="{{webinfo.description}}" />*/
/*         <meta name="author" content="{{webinfo.author}}" />*/
/*         <link rel="stylesheet" href="/resource/front/js/jslib/bootstrap-3.3.5/css/bootstrap.min.css" />*/
/*         <script src="/resource/front/js/jquery.min.js"></script>*/
/*         <link rel="stylesheet" href="/resource/front/css/base.css?v={{version}}">*/
/*         <link rel="stylesheet" href="/resource/front/css/font-awesome.min.css">*/
/*         <script type="text/javascript" src="/resource/front/js/jslib/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="/resource/front/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>*/
/*         <script type="text/javascript" src="/resource/front/js/jslib/ykp.js"></script>*/
/*     </head>*/
/*     <body>*/
/*         <div id="header" class="header" >*/
/*             <section>*/
/*                 <div class="nav_logo inline-block">*/
/*                     <div class="inline-block"><a href="/"><img src="{{webinfo.weblogo}}"></a></div>*/
/*                     <div class="nav_text inline-block">*/
/*                         <h3>全国连锁灵活式联合办公空间综合服务商</h3>*/
/*                         <h4>400-822-3230</h4>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="nav-tag">*/
/*                     <ul>*/
/*                         <li><i class="glyphicon glyphicon-search" ></i></li>*/
/*                         <li><a href="/home/checkCity"><i class="glyphicon glyphicon-map-marker" ></i> 深圳</a></li>*/
/*                         <li style="position: relative; height: 43px; cursor: pointer;" id="lang"><span  class="lang">中文站</span> <i class="glyphicon glyphicon-menu-down"></i><ul class="langular"><li>中文站</li><li>English站</li></ul></li>*/
/*                         <li><a href="/home/login">登陆</a><span class="nav-tag-pad">|</span><a href="/home/regist">注册</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="nav-link">*/
/*                     <ul>*/
/*                         <li><a href="/">首页</a></li>*/
/*                         <li><a href="/hmtong">海脉通</a></li>*/
/*                         <li><a href="/hm_ioffice">IOFFICE</a></li>*/
/*                         <li><a href="/hmspace">海脉汇</a></li>*/
/*                         <li><a href="/hm_qifubao">企服宝</a></li>*/
/*                         <li><a href="/hm_rong">海脉融</a></li>*/
/*                         <li><a href="/hm_zhong">海脉众包</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </section>*/
/*         </div>*/
/*         <script>*/
/*         	$(function() {*/
/*         		$('.langular li').click(function() {*/
/*         			var text = $(this).text();*/
/*         			$('.lang').text(text);*/
/*         		})*/
/*         	})*/
/*         </script>*/
/* */
