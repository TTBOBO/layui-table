<?php

/* front/i_header.html */
class __TwigTemplate_cd705421a3e5a4abe3362f184022a2765790674dec02fe4775de812335be00fe extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>
\t<meta name=\"keywords\" content=\"";
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
\t<title>海脉空间 - ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"../resource/home/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/fonts/material-icons.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/css/ioffice.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/css/tyle.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/css/wstyle.css\">
</head>
<body>
\t<div class=\"store\">
\t\t<div class=\"albx\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"top\">
\t\t\t\t\t\t<div class=\"search-icon\"><i class=\"material-icons\">search</i></div>
\t\t\t\t\t\t<div class=\"lca\"><i class=\"material-icons\">location_on</i>深圳</div>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t    中文站 <span class=\"caret\"></span>
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t    <li><a href=\"#\">英文</a></li>
\t\t\t\t\t\t    <li><a href=\"#\">繁体</a></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ls\">
\t\t\t\t\t\t\t<a href=\"#\">登陆</a>
\t\t\t\t\t\t\t<a href=\"#\">注册</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<img src=\"../resource/home/images/1184.png\" alt=\"\">
\t\t\t\t\t<p>全国连锁灵活式联合办公空间综合服务商</p>
\t\t\t\t\t<p>400-822-3230</p>
\t\t\t\t</div>
\t\t\t\t<ul class=\"navmenu\">
\t\t\t\t\t<li><a href=\"/Home\">首页</a></li>
\t\t\t\t\t<li><a href=\"/Hmtong\">海脉通</a></li>
\t\t\t\t\t<li><a href=\"/Hm_ioffice\">IOFFICE</a></li>
\t\t\t\t\t<li><a href=\"/hmspace\">海脉汇</a></li>
\t\t\t\t\t<li><a href=\"/Hm_qifubao\">企服宝</a></li>
\t\t\t\t\t<li><a href=\"#\">海脉融</a></li>
\t\t\t\t\t<li><a href=\"#\">海脉众包</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"mark\"></div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "front/i_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/* <head>*/
/* 	<meta charset="UTF-8">*/
/* 	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>*/
/* 	<meta name="keywords" content="{{webinfo.keywords}}" />*/
/*     <meta name="description" content="{{webinfo.description}}" />*/
/*     <meta name="author" content="{{webinfo.author}}" />*/
/* 	<title>海脉空间 - {{title}}</title>*/
/* 	<link rel="stylesheet" href="../resource/home/css/bootstrap.min.css">*/
/* 	<link rel="stylesheet" href="../resource/home/fonts/material-icons.css">*/
/* 	<link rel="stylesheet" href="../resource/home/css/ioffice.css">*/
/* 	<link rel="stylesheet" href="../resource/home/css/tyle.css">*/
/* 	<link rel="stylesheet" href="../resource/home/css/wstyle.css">*/
/* </head>*/
/* <body>*/
/* 	<div class="store">*/
/* 		<div class="albx">*/
/* 			<div class="header">*/
/* 				<div class="container">*/
/* 					<div class="top">*/
/* 						<div class="search-icon"><i class="material-icons">search</i></div>*/
/* 						<div class="lca"><i class="material-icons">location_on</i>深圳</div>*/
/* 						<div class="btn-group">*/
/* 						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 						    中文站 <span class="caret"></span>*/
/* 						  </button>*/
/* 						  <ul class="dropdown-menu">*/
/* 						    <li><a href="#">英文</a></li>*/
/* 						    <li><a href="#">繁体</a></li>*/
/* 						  </ul>*/
/* 						</div>*/
/* 						<div class="ls">*/
/* 							<a href="#">登陆</a>*/
/* 							<a href="#">注册</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="container">*/
/* 				<div class="logo">*/
/* 					<img src="../resource/home/images/1184.png" alt="">*/
/* 					<p>全国连锁灵活式联合办公空间综合服务商</p>*/
/* 					<p>400-822-3230</p>*/
/* 				</div>*/
/* 				<ul class="navmenu">*/
/* 					<li><a href="/Home">首页</a></li>*/
/* 					<li><a href="/Hmtong">海脉通</a></li>*/
/* 					<li><a href="/Hm_ioffice">IOFFICE</a></li>*/
/* 					<li><a href="/hmspace">海脉汇</a></li>*/
/* 					<li><a href="/Hm_qifubao">企服宝</a></li>*/
/* 					<li><a href="#">海脉融</a></li>*/
/* 					<li><a href="#">海脉众包</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="mark"></div>*/
/* 		</div>*/
