<?php

/* front/hmspace/h-index.html */
class __TwigTemplate_490cf802a591e18742b537787c9c00416fed94fb5887d038e51bdfa3eb38095c extends Twig_Template
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
\t<title>海脉空间 - ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["title"]) ? $context["title"] : null), "title", array()), "html", null, true);
        echo "</title>
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>
\t<title></title>
\t<link rel=\"stylesheet\" href=\"../resource/home/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/fonts/material-icons.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/css/wstyle.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/css/ioffice.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/css/tyle.css\">
</head>
<body style=\"background-color:#f9f9f9;\">
";
        // line 16
        $this->loadTemplate("front/h_header.html", "front/hmspace/h-index.html", 16)->display($context);
        // line 17
        echo "
\t<div class=\"store\">
\t\t<div id=\"slideBox\" class=\"slideBox\" style=\"height: auto;position: static;margin-bottom: 80px;\">
\t\t\t<div class=\"hd\">
\t\t\t\t<ul><li></li><li></li><li></li></ul>
\t\t\t</div>
\t\t\t<div class=\"bd\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["title"]) ? $context["title"] : null), "banner", array()), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 26
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "link", array()), "html", null, true);
            echo "\"><img src=\"../resource/home/images/banner.png\" /></a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<a class=\"prev\" href=\"javascript:void(0)\"></a>
\t\t\t<a class=\"next\" href=\"javascript:void(0)\"></a>
\t\t</div>
\t</div>

\t<div class=\"newtainer\">
\t\t<div class=\"static hi-static\">
\t\t\t<div class=\"item\">
\t\t\t\t<i><img src=\"../resource/home/images/hi1.png\" alt=\"\"></i>
\t\t\t\t<p class=\"num\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wnumber"]) ? $context["wnumber"] : null), "data", array()), "channelTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p>渠道服务商</p>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<i><img src=\"../resource/home/images/hi2.png\" alt=\"\"></i>
\t\t\t\t<p class=\"num\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wnumber"]) ? $context["wnumber"] : null), "data", array()), "finTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p>融资服务商</p>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<i><img src=\"../resource/home/images/hi3.png\" alt=\"\"></i>
\t\t\t\t<p class=\"num\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wnumber"]) ? $context["wnumber"] : null), "data", array()), "billTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p>贷款服务商</p>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<i><img src=\"../resource/home/images/hi4.png\" alt=\"\"></i>
\t\t\t\t<p class=\"num\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wnumber"]) ? $context["wnumber"] : null), "data", array()), "servivceTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p>企服服务商</p>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<i><img src=\"../resource/home/images/hi5.png\" alt=\"\"></i>
\t\t\t\t<p class=\"num\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wnumber"]) ? $context["wnumber"] : null), "data", array()), "spaceTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p>空间服务</p>
\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<i><img src=\"../resource/home/images/hi6.png\" alt=\"\"></i>
\t\t\t\t<p class=\"num\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wnumber"]) ? $context["wnumber"] : null), "data", array()), "instustryTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p>行业资源</p>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"hqst-main\">
\t\t<div class=\"hqst-container\">
\t\t\t<div class=\"icurtit bt20-\">
\t\t\t\t渠道资源
\t\t\t\t<a href=\"/hmspace/resources_list\" class=\"more\">查看全部 ></a>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"hqst-card-column\">
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<a href=\"/hmspace/resources_list\"><img src=\"../resource/home/images/hqst-t1.png\"></a>
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">互联网（15422）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<a href=\"/hmspace/resources_list\"><img src=\"../resource/home/images/hqst-t1.png\"></a>
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">互联网（15422）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<a href=\"/hmspace/resources_list\"><img src=\"../resource/home/images/hqst-t1.png\"></a>
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">互联网（15422）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"hqst-card-column\">
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<a href=\"/hmspace/resources_list\"><img src=\"../resource/home/images/hqst-t1.png\"></a>
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">互联网（15422）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<a href=\"/hmspace/resources_list\"><img src=\"../resource/home/images/hqst-t1.png\"></a>
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">互联网（15422）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<a href=\"/hmspace/resources_list\"><img src=\"../resource/home/images/hqst-t1.png\"></a>
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">互联网（15422）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"hqst-card-column\">
\t\t\t\t\t\t<div class=\"hqstaa-card\">
\t\t\t\t\t\t\t<img src=\"../resource/home/images/hqst-t2.png\">
\t\t\t\t\t\t\t<div class=\"hqst-card-wmb\">
\t\t\t\t\t\t\t\t<p class=\"hqst-card-wmb-pa\">渠道人才</p>
\t\t\t\t\t\t\t\t<p class=\"hqst-card-wmb-pb\">为您推荐合适人选</p>
\t\t\t\t\t\t\t\t<a href=\"/hmspace/talent\"><p>点击查看</p></a>
\t\t\t\t\t\t\t\t<div class=\"hqst-card-xmb\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<a href=\"/hmspace/resources_list\"><img src=\"../resource/home/images/hqst-t1.png\"></a>
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">互联网（15422）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"newtainer ship hi-ship\">
\t\t<div class=\"bt row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"tab\">
\t\t\t\t\t<div class='tit'>商机动态</div>
\t\t\t\t\t<div class=\"bod\">
\t\t\t\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["buss"]) ? $context["buss"] : null), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 137
            echo "\t\t\t\t\t\t<a href=\"/hmspace/business_details?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class='item'>
\t\t\t\t\t\t\t<div class='l0t'><img src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "pic", array()), "html", null, true);
            echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class='r0t'>
\t\t\t\t\t\t\t\t<p>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p><i class=\"material-icons\">place</i>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "addr", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "date", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "start_time", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "end_time", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"/hmspace/business\"><div class=\"pbtm\">查看更多</div></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"tab\">
\t\t\t\t\t<div class='tit'>圈子动态</div>
\t\t\t\t\t<div class=\"bod\">
\t\t\t\t\t\t";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["circle"]) ? $context["circle"] : null), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 157
            echo "\t\t\t\t\t\t<div class='item0 l'>
\t\t\t\t\t\t\t<img src=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "pic", array()), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t<div><p>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</p><p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "people_num", array()), "html", null, true);
            echo "个人</p></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pbtm\">查看更多</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"tab\">
\t\t\t\t\t<div class='tit'>人脉动态</div>
\t\t\t\t\t<div class=\"bod\">
\t\t\t\t\t\t";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["people"]) ? $context["people"] : null), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 171
            echo "\t\t\t\t\t\t<a href=\"/hmspace/talent_details?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"item1\">
\t\t\t\t\t\t\t<div class='l0t'><img src=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "avatar", array()), "html", null, true);
            echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class='r0t'>
\t\t\t\t\t\t\t\t<p><span class='t0'>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</span><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "job_title", array()), "html", null, true);
            echo "</span></p>
\t\t\t\t\t\t\t\t<p>";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "company_name", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"/hmspace/talent\"> <div class=\"pbtm\">查看更多</div></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"hbo-main\">
\t\t<div class=\"hbo-main-container\">
\t\t\t<div class=\"icurtit\">
\t\t\t\t优质项目（<span>";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "data", array()), "total", array()), "html", null, true);
        echo "</span>）
\t\t\t\t<a href=\"/hmspace/business\" class=\"more\">查看全部 ></a>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 196
            echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"hbo-main-card\">
\t\t\t\t\t\t<a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\"><img src=\"../resource/home/images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "logo", array()), "html", null, true);
            echo "\" alt=\"\"></a>
\t\t\t\t\t\t<p class=\"hbo-main-cardpa\">";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<a href=\"\"><p class=\"hbo-main-cardpb\">申请代理</p></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"hbo-main newtainer xmly\">
\t\t<div class=\"icurtit\">
\t\t\t活动路演
\t\t\t<a href=\"#\" class=\"more\">查看全部 ></a>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["ly"]) ? $context["ly"] : null), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 215
            echo "\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"img-box\"><img src=\"../resource/home/images/";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "thumb", array()), "html", null, true);
            echo "\" alt=\"\"></div>
\t\t\t\t\t<a href=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\"><p class=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</p></a>
\t\t\t\t\t<p><i class=\"material-icons\">access_time</i>";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "create_at", array()), "html", null, true);
            echo "  14:00-17:00</p>
\t\t\t\t\t<p><i class=\"material-icons\">location_on</i>";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "addr", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<div class=\"prode\">
\t\t\t\t\t\t<div class=\"iconhd\"><img src=\"../resource/home/images/head-portrait.png\" alt=\"\"></div>
\t\t\t\t\t\t中国奥秘科技股份有限公司
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "\t\t</div>
\t</div>

\t<div class=\"htr-main newtainer jgtj\">
\t\t<div class=\"icurtit bt20-\">
\t\t\t机构推荐
\t\t\t<a href=\"#\" class=\"more\">查看全部 ></a>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"htr-card hti-card\">
\t\t\t\t\t<div class=\"htiin-\">
\t\t\t\t\t\t<img src=\"../resource/home/images/linghu.png\" alt=\"\">
\t\t\t\t\t\t<p class=\"htr-card-name\">灵狐传媒</p>
\t\t\t\t\t\t<ul class=\"htr-card-ul\">
\t\t\t\t\t\t\t<li>资源</li>
\t\t\t\t\t\t\t<li>技术</li>
\t\t\t\t\t\t\t<li>效率</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t<div class=\"bt-deta\">
\t\t\t\t\t\t\t<div><i class=\"material-icons\">location_on</i>深圳</div>
\t\t\t\t\t\t\t<div><i class=\"material-icons\">remove_red_eye</i>259810</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hti-card-wmb\">
\t\t\t\t\t\t<div class=\"wx-dfx\">
\t\t\t\t\t\t\t<p>完成质量</p>
\t\t\t\t\t\t\t<div class=\"rateYo\"></div><div class=\"counter\">4.7</div><span>分</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wx-dfx\">
\t\t\t\t\t\t\t<p>服务态度</p>
\t\t\t\t\t\t\t<div class=\"rateYo\"></div><div class=\"counter\">4.7</div><span>分</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wx-dfx\">
\t\t\t\t\t\t\t<p>工作速度</p>
\t\t\t\t\t\t\t<div class=\"rateYo\"></div><div class=\"counter\">4.7</div><span>分</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hti-card-xmb\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"htr-card hti-card\">
\t\t\t\t\t<div class=\"htiin-\">
\t\t\t\t\t\t<img src=\"../resource/home/images/linghu.png\" alt=\"\">
\t\t\t\t\t\t<p class=\"htr-card-name\">奥米亚科技</p>
\t\t\t\t\t\t<ul class=\"htr-card-ul\">
\t\t\t\t\t\t\t<li>资源</li>
\t\t\t\t\t\t\t<li>技术</li>
\t\t\t\t\t\t\t<li>效率</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<i class=\"material-icons sbd\">star_border</i>
\t\t\t\t\t\t<div class=\"bt-deta\">
\t\t\t\t\t\t\t<div><i class=\"material-icons\">location_on</i>深圳</div>
\t\t\t\t\t\t\t<div><i class=\"material-icons\">remove_red_eye</i>259810</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hti-card-wmb\">
\t\t\t\t\t\t<div class=\"wx-dfx\">
\t\t\t\t\t\t\t<p>完成质量</p>
\t\t\t\t\t\t\t<div class=\"rateYo\"></div><div class=\"counter\">4.7</div><span>分</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wx-dfx\">
\t\t\t\t\t\t\t<p>服务态度</p>
\t\t\t\t\t\t\t<div class=\"rateYo\"></div><div class=\"counter\">4.7</div><span>分</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wx-dfx\">
\t\t\t\t\t\t\t<p>工作速度</p>
\t\t\t\t\t\t\t<div class=\"rateYo\"></div><div class=\"counter\">4.7</div><span>分</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hti-card-xmb\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"htr-card hti-card\">
\t\t\t\t\t<div class=\"htiin-\">
\t\t\t\t\t\t<img src=\"../resource/home/images/linghu.png\" alt=\"\">
\t\t\t\t\t\t<p class=\"htr-card-name\">AspireBoard</p>
\t\t\t\t\t\t<ul class=\"htr-card-ul\">
\t\t\t\t\t\t\t<li>资源</li>
\t\t\t\t\t\t\t<li>技术</li>
\t\t\t\t\t\t\t<li>效率</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<i class=\"material-icons sbd\">star_border</i>
\t\t\t\t\t\t<div class=\"bt-deta\">
\t\t\t\t\t\t\t<div><i class=\"material-icons\">location_on</i>深圳</div>
\t\t\t\t\t\t\t<div><i class=\"material-icons\">remove_red_eye</i>259810</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hti-card-wmb\">
\t\t\t\t\t\t<div class=\"wx-dfx\">
\t\t\t\t\t\t\t<p>完成质量</p>
\t\t\t\t\t\t\t<div class=\"rateYo\"></div><div class=\"counter\">4.7</div><span>分</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wx-dfx\">
\t\t\t\t\t\t\t<p>服务态度</p>
\t\t\t\t\t\t\t<div class=\"rateYo\"></div><div class=\"counter\">4.7</div><span>分</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wx-dfx\">
\t\t\t\t\t\t\t<p>工作速度</p>
\t\t\t\t\t\t\t<div class=\"rateYo\"></div><div class=\"counter\">4.7</div><span>分</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hti-card-xmb\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"fixtainer container\">
\t\t<div class=\"rightfix\">
\t\t\t<div class=\"online\">
\t\t\t\t<a href=\"javascript:;\"><img src=\"../resource/home/images/online.png\" alt=\"\">在线咨询</a>
\t\t\t</div>
\t\t\t<div class=\"fixmenu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/trolley.png\" alt=\"\"></a></li>
\t\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/phone.png\" alt=\"\"></a></li>
\t\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/weixin.png\" alt=\"\"></a></li>
\t\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/weibo.png\" alt=\"\"></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 354
        $this->loadTemplate("front/footer.html", "front/hmspace/h-index.html", 354)->display($context);
        // line 355
        echo "\t
\t<script src=\"../resource/home/js/jquery-1.11.3.min.js\"></script>
\t<script src=\"../resource/home/js/bootstrap.min.js\"></script>
\t<script src=\"../resource/home/js/jquery.SuperSlide.js\"></script>
\t<script>
\t\tjQuery(\".slideBox\").slide({mainCell:\".bd ul\",effect:\"fold\",autoPlay:true,delayTime:1000});
\t\tjQuery(\".sto-people\").slide({mainCell:\".bd ul\",effect:\"top\",autoPlay:true,vis:2});
\t\t\$(function () {
\t\t  \$('[data-toggle=\"tooltip\"]').tooltip()
\t\t})
\t</script>
\t<link href=\"../resource/home/js/rateyo/jquery.rateyo.min.css\" rel=\"stylesheet\">
\t<script src=\"../resource/home/js/rateyo/jquery.rateyo.min.js\"></script>
\t<script>
\t\t\$(function () {
\t\t  \$(\".rateYo\").rateYo({
\t\t    rating: 4.7,
\t\t    precision: 2,
\t\t    starWidth: \"16px\",
\t\t    spacing: \"3px\",
\t\t    readOnly: true,
\t\t    onChange: function (rating, rateYoInstance) {
\t\t\t\t\$(this).next().text(rating);
\t\t    }
\t\t  });
\t\t});
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "front/hmspace/h-index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 355,  524 => 354,  396 => 228,  382 => 220,  378 => 219,  372 => 218,  368 => 217,  364 => 215,  360 => 214,  348 => 204,  337 => 199,  331 => 198,  327 => 196,  323 => 195,  316 => 191,  304 => 181,  293 => 176,  287 => 175,  282 => 173,  276 => 171,  272 => 170,  262 => 162,  251 => 159,  247 => 158,  244 => 157,  240 => 156,  230 => 148,  215 => 143,  211 => 142,  207 => 141,  202 => 139,  196 => 137,  192 => 136,  117 => 64,  109 => 59,  101 => 54,  93 => 49,  85 => 44,  77 => 39,  64 => 28,  55 => 26,  51 => 25,  41 => 17,  39 => 16,  23 => 3,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/* 	<title>海脉空间 - {{title.title}}</title>*/
/* <head>*/
/* 	<meta charset="UTF-8">*/
/* 	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>*/
/* 	<title></title>*/
/* 	<link rel="stylesheet" href="../resource/home/css/bootstrap.min.css">*/
/* 	<link rel="stylesheet" href="../resource/home/fonts/material-icons.css">*/
/* 	<link rel="stylesheet" href="../resource/home/css/wstyle.css">*/
/* 	<link rel="stylesheet" href="../resource/home/css/ioffice.css">*/
/* 	<link rel="stylesheet" href="../resource/home/css/tyle.css">*/
/* </head>*/
/* <body style="background-color:#f9f9f9;">*/
/* {% include 'front/h_header.html' %}*/
/* */
/* 	<div class="store">*/
/* 		<div id="slideBox" class="slideBox" style="height: auto;position: static;margin-bottom: 80px;">*/
/* 			<div class="hd">*/
/* 				<ul><li></li><li></li><li></li></ul>*/
/* 			</div>*/
/* 			<div class="bd">*/
/* 				<ul>*/
/* 					{% for data in title.banner.data.rows %}*/
/* 					<li><a href="{{data.link}}"><img src="../resource/home/images/banner.png" /></a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<a class="prev" href="javascript:void(0)"></a>*/
/* 			<a class="next" href="javascript:void(0)"></a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="newtainer">*/
/* 		<div class="static hi-static">*/
/* 			<div class="item">*/
/* 				<i><img src="../resource/home/images/hi1.png" alt=""></i>*/
/* 				<p class="num">{{wnumber.data.channelTotal}}</p>*/
/* 				<p>渠道服务商</p>*/
/* 			</div>*/
/* 			<div class="item">*/
/* 				<i><img src="../resource/home/images/hi2.png" alt=""></i>*/
/* 				<p class="num">{{wnumber.data.finTotal}}</p>*/
/* 				<p>融资服务商</p>*/
/* 			</div>*/
/* 			<div class="item">*/
/* 				<i><img src="../resource/home/images/hi3.png" alt=""></i>*/
/* 				<p class="num">{{wnumber.data.billTotal}}</p>*/
/* 				<p>贷款服务商</p>*/
/* 			</div>*/
/* 			<div class="item">*/
/* 				<i><img src="../resource/home/images/hi4.png" alt=""></i>*/
/* 				<p class="num">{{wnumber.data.servivceTotal}}</p>*/
/* 				<p>企服服务商</p>*/
/* 			</div>*/
/* 			<div class="item">*/
/* 				<i><img src="../resource/home/images/hi5.png" alt=""></i>*/
/* 				<p class="num">{{wnumber.data.spaceTotal}}</p>*/
/* 				<p>空间服务</p>*/
/* 			</div>*/
/* 			<div class="item">*/
/* 				<i><img src="../resource/home/images/hi6.png" alt=""></i>*/
/* 				<p class="num">{{wnumber.data.instustryTotal}}</p>*/
/* 				<p>行业资源</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="hqst-main">*/
/* 		<div class="hqst-container">*/
/* 			<div class="icurtit bt20-">*/
/* 				渠道资源*/
/* 				<a href="/hmspace/resources_list" class="more">查看全部 ></a>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-md-4">*/
/* 					<div class="hqst-card-column">*/
/* 						<div class="hqsta-card">*/
/* 							<a href="/hmspace/resources_list"><img src="../resource/home/images/hqst-t1.png"></a>*/
/* 							<p class="hqsta-card-bp">互联网（15422）</p>*/
/* 						</div>*/
/* 						<div class="hqsta-card">*/
/* 							<a href="/hmspace/resources_list"><img src="../resource/home/images/hqst-t1.png"></a>*/
/* 							<p class="hqsta-card-bp">互联网（15422）</p>*/
/* 						</div>*/
/* 						<div class="hqsta-card">*/
/* 							<a href="/hmspace/resources_list"><img src="../resource/home/images/hqst-t1.png"></a>*/
/* 							<p class="hqsta-card-bp">互联网（15422）</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-4">*/
/* 					<div class="hqst-card-column">*/
/* 						<div class="hqsta-card">*/
/* 							<a href="/hmspace/resources_list"><img src="../resource/home/images/hqst-t1.png"></a>*/
/* 							<p class="hqsta-card-bp">互联网（15422）</p>*/
/* 						</div>*/
/* 						<div class="hqsta-card">*/
/* 							<a href="/hmspace/resources_list"><img src="../resource/home/images/hqst-t1.png"></a>*/
/* 							<p class="hqsta-card-bp">互联网（15422）</p>*/
/* 						</div>*/
/* 						<div class="hqsta-card">*/
/* 							<a href="/hmspace/resources_list"><img src="../resource/home/images/hqst-t1.png"></a>*/
/* 							<p class="hqsta-card-bp">互联网（15422）</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-4">*/
/* 					<div class="hqst-card-column">*/
/* 						<div class="hqstaa-card">*/
/* 							<img src="../resource/home/images/hqst-t2.png">*/
/* 							<div class="hqst-card-wmb">*/
/* 								<p class="hqst-card-wmb-pa">渠道人才</p>*/
/* 								<p class="hqst-card-wmb-pb">为您推荐合适人选</p>*/
/* 								<a href="/hmspace/talent"><p>点击查看</p></a>*/
/* 								<div class="hqst-card-xmb"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="hqsta-card">*/
/* 							<a href="/hmspace/resources_list"><img src="../resource/home/images/hqst-t1.png"></a>*/
/* 							<p class="hqsta-card-bp">互联网（15422）</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="newtainer ship hi-ship">*/
/* 		<div class="bt row">*/
/* 			<div class="col-md-4">*/
/* 				<div class="tab">*/
/* 					<div class='tit'>商机动态</div>*/
/* 					<div class="bod">*/
/* 						{% for data in buss.data.rows %}*/
/* 						<a href="/hmspace/business_details?id={{data.id}}">*/
/* 						<div class='item'>*/
/* 							<div class='l0t'><img src="{{data.pic}}" alt=""></div>*/
/* 							<div class='r0t'>*/
/* 								<p>{{data.title}}</p>*/
/* 								<p><i class="material-icons">place</i>{{data.addr}}</p>*/
/* 								<p>{{data.date}}  {{data.start_time}}-{{data.end_time}}</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						</a>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 					<a href="/hmspace/business"><div class="pbtm">查看更多</div></a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-4">*/
/* 				<div class="tab">*/
/* 					<div class='tit'>圈子动态</div>*/
/* 					<div class="bod">*/
/* 						{% for data in circle.data.rows %}*/
/* 						<div class='item0 l'>*/
/* 							<img src="{{data.pic}}" alt="">*/
/* 							<div><p>{{data.title}}</p><p>{{data.people_num}}个人</p></div>*/
/* 						</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 					<div class="pbtm">查看更多</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-4">*/
/* 				<div class="tab">*/
/* 					<div class='tit'>人脉动态</div>*/
/* 					<div class="bod">*/
/* 						{% for data in people.data.rows %}*/
/* 						<a href="/hmspace/talent_details?id={{data.id}}">*/
/* 						<div class="item1">*/
/* 							<div class='l0t'><img src="{{data.avatar}}" alt=""></div>*/
/* 							<div class='r0t'>*/
/* 								<p><span class='t0'>{{data.name}}</span><span>{{data.job_title}}</span></p>*/
/* 								<p>{{data.company_name}}</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						</a>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 					<a href="/hmspace/talent"> <div class="pbtm">查看更多</div></a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="hbo-main">*/
/* 		<div class="hbo-main-container">*/
/* 			<div class="icurtit">*/
/* 				优质项目（<span>{{project.data.total}}</span>）*/
/* 				<a href="/hmspace/business" class="more">查看全部 ></a>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				{% for data in project.data.rows %}*/
/* 				<div class="col-md-6">*/
/* 					<div class="hbo-main-card">*/
/* 						<a href="{{data.id}}"><img src="../resource/home/images/{{data.logo}}" alt=""></a>*/
/* 						<p class="hbo-main-cardpa">{{data.name}}</p>*/
/* 						<a href=""><p class="hbo-main-cardpb">申请代理</p></a>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="hbo-main newtainer xmly">*/
/* 		<div class="icurtit">*/
/* 			活动路演*/
/* 			<a href="#" class="more">查看全部 ></a>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			{% for data in ly.data.rows%}*/
/* 			<div class="col-md-4">*/
/* 				<div class="item">*/
/* 					<div class="img-box"><img src="../resource/home/images/{{data.thumb}}" alt=""></div>*/
/* 					<a href="{{data.id}}"><p class="title">{{data.title}}</p></a>*/
/* 					<p><i class="material-icons">access_time</i>{{data.create_at}}  14:00-17:00</p>*/
/* 					<p><i class="material-icons">location_on</i>{{data.addr}}</p>*/
/* 					<div class="prode">*/
/* 						<div class="iconhd"><img src="../resource/home/images/head-portrait.png" alt=""></div>*/
/* 						中国奥秘科技股份有限公司*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="htr-main newtainer jgtj">*/
/* 		<div class="icurtit bt20-">*/
/* 			机构推荐*/
/* 			<a href="#" class="more">查看全部 ></a>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-4">*/
/* 				<div class="htr-card hti-card">*/
/* 					<div class="htiin-">*/
/* 						<img src="../resource/home/images/linghu.png" alt="">*/
/* 						<p class="htr-card-name">灵狐传媒</p>*/
/* 						<ul class="htr-card-ul">*/
/* 							<li>资源</li>*/
/* 							<li>技术</li>*/
/* 							<li>效率</li>*/
/* 						</ul>*/
/* 						<i class="material-icons">star</i>*/
/* 						<div class="bt-deta">*/
/* 							<div><i class="material-icons">location_on</i>深圳</div>*/
/* 							<div><i class="material-icons">remove_red_eye</i>259810</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="hti-card-wmb">*/
/* 						<div class="wx-dfx">*/
/* 							<p>完成质量</p>*/
/* 							<div class="rateYo"></div><div class="counter">4.7</div><span>分</span>*/
/* 						</div>*/
/* 						<div class="wx-dfx">*/
/* 							<p>服务态度</p>*/
/* 							<div class="rateYo"></div><div class="counter">4.7</div><span>分</span>*/
/* 						</div>*/
/* 						<div class="wx-dfx">*/
/* 							<p>工作速度</p>*/
/* 							<div class="rateYo"></div><div class="counter">4.7</div><span>分</span>*/
/* 						</div>*/
/* 						<div class="hti-card-xmb"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-4">*/
/* 				<div class="htr-card hti-card">*/
/* 					<div class="htiin-">*/
/* 						<img src="../resource/home/images/linghu.png" alt="">*/
/* 						<p class="htr-card-name">奥米亚科技</p>*/
/* 						<ul class="htr-card-ul">*/
/* 							<li>资源</li>*/
/* 							<li>技术</li>*/
/* 							<li>效率</li>*/
/* 						</ul>*/
/* 						<i class="material-icons sbd">star_border</i>*/
/* 						<div class="bt-deta">*/
/* 							<div><i class="material-icons">location_on</i>深圳</div>*/
/* 							<div><i class="material-icons">remove_red_eye</i>259810</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="hti-card-wmb">*/
/* 						<div class="wx-dfx">*/
/* 							<p>完成质量</p>*/
/* 							<div class="rateYo"></div><div class="counter">4.7</div><span>分</span>*/
/* 						</div>*/
/* 						<div class="wx-dfx">*/
/* 							<p>服务态度</p>*/
/* 							<div class="rateYo"></div><div class="counter">4.7</div><span>分</span>*/
/* 						</div>*/
/* 						<div class="wx-dfx">*/
/* 							<p>工作速度</p>*/
/* 							<div class="rateYo"></div><div class="counter">4.7</div><span>分</span>*/
/* 						</div>*/
/* 						<div class="hti-card-xmb"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-4">*/
/* 				<div class="htr-card hti-card">*/
/* 					<div class="htiin-">*/
/* 						<img src="../resource/home/images/linghu.png" alt="">*/
/* 						<p class="htr-card-name">AspireBoard</p>*/
/* 						<ul class="htr-card-ul">*/
/* 							<li>资源</li>*/
/* 							<li>技术</li>*/
/* 							<li>效率</li>*/
/* 						</ul>*/
/* 						<i class="material-icons sbd">star_border</i>*/
/* 						<div class="bt-deta">*/
/* 							<div><i class="material-icons">location_on</i>深圳</div>*/
/* 							<div><i class="material-icons">remove_red_eye</i>259810</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="hti-card-wmb">*/
/* 						<div class="wx-dfx">*/
/* 							<p>完成质量</p>*/
/* 							<div class="rateYo"></div><div class="counter">4.7</div><span>分</span>*/
/* 						</div>*/
/* 						<div class="wx-dfx">*/
/* 							<p>服务态度</p>*/
/* 							<div class="rateYo"></div><div class="counter">4.7</div><span>分</span>*/
/* 						</div>*/
/* 						<div class="wx-dfx">*/
/* 							<p>工作速度</p>*/
/* 							<div class="rateYo"></div><div class="counter">4.7</div><span>分</span>*/
/* 						</div>*/
/* 						<div class="hti-card-xmb"></div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="fixtainer container">*/
/* 		<div class="rightfix">*/
/* 			<div class="online">*/
/* 				<a href="javascript:;"><img src="../resource/home/images/online.png" alt="">在线咨询</a>*/
/* 			</div>*/
/* 			<div class="fixmenu">*/
/* 				<ul>*/
/* 					<li><a href="javascript:;"><img src="../resource/home/images/trolley.png" alt=""></a></li>*/
/* 					<li><a href="javascript:;"><img src="../resource/home/images/phone.png" alt=""></a></li>*/
/* 					<li><a href="javascript:;"><img src="../resource/home/images/weixin.png" alt=""></a></li>*/
/* 					<li><a href="javascript:;"><img src="../resource/home/images/weibo.png" alt=""></a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'front/footer.html' %}*/
/* 	*/
/* 	<script src="../resource/home/js/jquery-1.11.3.min.js"></script>*/
/* 	<script src="../resource/home/js/bootstrap.min.js"></script>*/
/* 	<script src="../resource/home/js/jquery.SuperSlide.js"></script>*/
/* 	<script>*/
/* 		jQuery(".slideBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true,delayTime:1000});*/
/* 		jQuery(".sto-people").slide({mainCell:".bd ul",effect:"top",autoPlay:true,vis:2});*/
/* 		$(function () {*/
/* 		  $('[data-toggle="tooltip"]').tooltip()*/
/* 		})*/
/* 	</script>*/
/* 	<link href="../resource/home/js/rateyo/jquery.rateyo.min.css" rel="stylesheet">*/
/* 	<script src="../resource/home/js/rateyo/jquery.rateyo.min.js"></script>*/
/* 	<script>*/
/* 		$(function () {*/
/* 		  $(".rateYo").rateYo({*/
/* 		    rating: 4.7,*/
/* 		    precision: 2,*/
/* 		    starWidth: "16px",*/
/* 		    spacing: "3px",*/
/* 		    readOnly: true,*/
/* 		    onChange: function (rating, rateYoInstance) {*/
/* 				$(this).next().text(rating);*/
/* 		    }*/
/* 		  });*/
/* 		});*/
/* 	</script>*/
/* </body>*/
/* </html>*/
