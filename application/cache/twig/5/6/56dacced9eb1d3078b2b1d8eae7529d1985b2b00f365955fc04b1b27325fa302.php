<?php

/* front/q_header.html */
class __TwigTemplate_a7861d1cdd10b6d88a1438c890f170cab33a01b1ab856d79da999e8fa49c0dd3 extends Twig_Template
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
\t<title>企服宝 - ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"../resource/home/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/fonts/material-icons.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/css/wstyle.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/css/ioffice.css\">
\t<link rel=\"stylesheet\" href=\"../resource/home/css/tyle.css\">
</head>
<body style=\"background-color:#f9f9f9;\">
\t<div class=\"h-header\">
        <div class=\"htop\">
            <div class=\"newtainer\">
                <div class=\"h-hl\"> <a href=\"#\">返回海脉空间首页</a>
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
                    <p class=\"tupis\">申请成为服务商</p>
                    <div class=\"lca\"><i class=\"material-icons\">location_on</i>深圳</div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> 中文站 <span class=\"caret\"></span> </button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">英文</a></li>
                            <li><a href=\"#\">繁体</a></li>
                        </ul>
                    </div>
                    <div class=\"ls\"> <a href=\"#\">登陆</a> <a href=\"#\">注册</a> </div>
                </div>
            </div>
        </div>
        <div class=\"maher\">
            <div class=\"newtainer\">
                <div class=\"blogo\"><img src=\"../resource/home/images/qlogo.png\" alt=\"\"></div> <span>专业的企业综合服务平台</span>
                <div class=\"sear-ch\">
                    <input type=\"text\">
                    <div class=\"sear-chicons\"><i class=\"material-icons\">search</i></div>
                </div>
            </div>
        </div>
        <div class=\"h-nav\">
            <div class=\"newtainer\">
                <ul>
                    <!--<li><a href=\"/Hm_qifubao/index\">首页</a></li>
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["classify"], "data", array()));
        foreach ($context['_seq'] as $context["index"] => $context["classify"]) {
            // line 56
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["classify"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t<!-- ";
            // line 58
            if ($this->getAttribute($context["classify"], "childs", array())) {
                // line 59
                echo "                    \t<ul class=\"inner\">
\t\t\t\t\t\t\t";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["classify"], "childs", array()));
                foreach ($context['_seq'] as $context["index"] => $context["kids"]) {
                    // line 61
                    echo "                    \t\t<li>
\t\t\t\t\t\t\t\t";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["kids"], "name", array()), "html", null, true);
                    echo "
                    \t\t</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['kids'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                    \t</ul>
\t\t\t\t\t\t";
            }
            // line 66
            echo " 
                    </li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['classify'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "-->
                </ul>
                <div class=\"hncact\"><img src=\"../resource/home/images/bhphone.png\" alt=\"\">400-822-3230</div>  </div>
        </div>
  \t</div>";
    }

    public function getTemplateName()
    {
        return "front/q_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 68,  114 => 66,  110 => 65,  101 => 62,  98 => 61,  94 => 60,  91 => 59,  89 => 58,  85 => 57,  82 => 56,  78 => 55,  27 => 7,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/* <head>*/
/* 	<meta charset="UTF-8">*/
/* 	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>*/
/* 	<title>企服宝 - {{title}}</title>*/
/* 	<link rel="stylesheet" href="../resource/home/css/bootstrap.min.css">*/
/* 	<link rel="stylesheet" href="../resource/home/fonts/material-icons.css">*/
/* 	<link rel="stylesheet" href="../resource/home/css/wstyle.css">*/
/* 	<link rel="stylesheet" href="../resource/home/css/ioffice.css">*/
/* 	<link rel="stylesheet" href="../resource/home/css/tyle.css">*/
/* </head>*/
/* <body style="background-color:#f9f9f9;">*/
/* 	<div class="h-header">*/
/*         <div class="htop">*/
/*             <div class="newtainer">*/
/*                 <div class="h-hl"> <a href="#">返回海脉空间首页</a>*/
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
/*                     <p class="tupis">申请成为服务商</p>*/
/*                     <div class="lca"><i class="material-icons">location_on</i>深圳</div>*/
/*                     <div class="btn-group">*/
/*                         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 中文站 <span class="caret"></span> </button>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">英文</a></li>*/
/*                             <li><a href="#">繁体</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="ls"> <a href="#">登陆</a> <a href="#">注册</a> </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="maher">*/
/*             <div class="newtainer">*/
/*                 <div class="blogo"><img src="../resource/home/images/qlogo.png" alt=""></div> <span>专业的企业综合服务平台</span>*/
/*                 <div class="sear-ch">*/
/*                     <input type="text">*/
/*                     <div class="sear-chicons"><i class="material-icons">search</i></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="h-nav">*/
/*             <div class="newtainer">*/
/*                 <ul>*/
/*                     <!--<li><a href="/Hm_qifubao/index">首页</a></li>*/
/*                     {% for index, classify in classify.data %}*/
/* 					<li>*/
/* 						<a href="">{{classify.name}}</a>*/
/* 						<!-- {% if classify.childs %}*/
/*                     	<ul class="inner">*/
/* 							{% for index, kids in classify.childs %}*/
/*                     		<li>*/
/* 								{{kids.name}}*/
/*                     		</li>*/
/* 							{% endfor %}*/
/*                     	</ul>*/
/* 						{% endif %} */
/*                     </li>*/
/* 					{% endfor %}-->*/
/*                 </ul>*/
/*                 <div class="hncact"><img src="../resource/home/images/bhphone.png" alt="">400-822-3230</div>  </div>*/
/*         </div>*/
/*   	</div>*/
