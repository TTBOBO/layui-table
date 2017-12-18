<?php

/* front/h_header.html */
class __TwigTemplate_1eb53cfb51c4d8a58b8124b119204fc7dc13bc5295af3bc2f7cdf82f31a45d1d extends Twig_Template
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
        echo "﻿<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"keywords\" content=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinfo"]) ? $context["webinfo"] : null), "keywords", array()), "html", null, true);
        echo "\" />
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinfo"]) ? $context["webinfo"] : null), "description", array()), "html", null, true);
        echo "\" />
<meta name=\"author\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webinfo"]) ? $context["webinfo"] : null), "author", array()), "html", null, true);
        echo "\" />
<meta charset=\"UTF-8\">
\t<div class=\"h-header\">
        <div class=\"htop\">
            <div class=\"newtainer\">
                <div class=\"h-hl\"> <a href=\"/\">返回海脉空间首页</a>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> 转到其它站点 <span class=\"caret\"></span> </button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                        </ul>
                    </div>
                    <p class=\"rxph\">24小时免费拨打热线：<span>400-822-3230</span></p>
                </div>
                <div class=\"pull-right h-hr\">
                    <p class=\"tupis\">我有资源，立即入驻海脉汇</p>
                    <div class=\"lca\"><i class=\"material-icons\">location_on</i>深圳</div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> 中文站 <span class=\"caret\"></span> </button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">英文</a></li>
                            <li><a href=\"#\">繁体</a></li>
                        </ul>
                    </div>
                    <div class=\"ls\"> <a href=\"/home/login\">登陆</a> <a href=\"/home/regist\">注册</a> </div>
                </div>
            </div>
        </div>
        <div class=\"maher\">
            <div class=\"newtainer\">
                <div class=\"blogo\"><img src=\"../resource/home/images/blogo.png\" alt=\"\"></div> <span>专业的企业综合服务平台</span>
                <div class=\"sear-ch\">
                    <input type=\"text\">
                    <div class=\"sear-chicons\"><i class=\"material-icons\">search</i></div>
                </div>
            </div>
        </div>
        <div class=\"h-nav\">
            <div class=\"newtainer\">
                <ul>
                    <li><a href=\"/hmspace\">首页</a></li>
                    <li><a href=\"/hmspace/qusutuo\">渠速拓</a></li>
                    <li><a href=\"/hmspace/carveout\">创业汇</a></li>
                    <li><a href=\"/hmspace/business\">商机汇</a></li>
                    <li><a href=\"/hmspace/college\">渠道学院</a></li>
                </ul>
                <div class=\"hncact\"><img src=\"../resource/home/images/bhphone.png\" alt=\"\">400-822-3230</div> <a href=\"\" class=\"hnjoin\">立即入驻</a> </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "front/h_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* ﻿<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta name="keywords" content="{{webinfo.keywords}}" />*/
/* <meta name="description" content="{{webinfo.description}}" />*/
/* <meta name="author" content="{{webinfo.author}}" />*/
/* <meta charset="UTF-8">*/
/* 	<div class="h-header">*/
/*         <div class="htop">*/
/*             <div class="newtainer">*/
/*                 <div class="h-hl"> <a href="/">返回海脉空间首页</a>*/
/*                     <div class="btn-group">*/
/*                         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 转到其它站点 <span class="caret"></span> </button>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <p class="rxph">24小时免费拨打热线：<span>400-822-3230</span></p>*/
/*                 </div>*/
/*                 <div class="pull-right h-hr">*/
/*                     <p class="tupis">我有资源，立即入驻海脉汇</p>*/
/*                     <div class="lca"><i class="material-icons">location_on</i>深圳</div>*/
/*                     <div class="btn-group">*/
/*                         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 中文站 <span class="caret"></span> </button>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">英文</a></li>*/
/*                             <li><a href="#">繁体</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="ls"> <a href="/home/login">登陆</a> <a href="/home/regist">注册</a> </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="maher">*/
/*             <div class="newtainer">*/
/*                 <div class="blogo"><img src="../resource/home/images/blogo.png" alt=""></div> <span>专业的企业综合服务平台</span>*/
/*                 <div class="sear-ch">*/
/*                     <input type="text">*/
/*                     <div class="sear-chicons"><i class="material-icons">search</i></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="h-nav">*/
/*             <div class="newtainer">*/
/*                 <ul>*/
/*                     <li><a href="/hmspace">首页</a></li>*/
/*                     <li><a href="/hmspace/qusutuo">渠速拓</a></li>*/
/*                     <li><a href="/hmspace/carveout">创业汇</a></li>*/
/*                     <li><a href="/hmspace/business">商机汇</a></li>*/
/*                     <li><a href="/hmspace/college">渠道学院</a></li>*/
/*                 </ul>*/
/*                 <div class="hncact"><img src="../resource/home/images/bhphone.png" alt="">400-822-3230</div> <a href="" class="hnjoin">立即入驻</a> </div>*/
/*         </div>*/
/*     </div>*/
