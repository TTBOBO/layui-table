<?php

/* front/hmspace/h-qd-college.html */
class __TwigTemplate_289cc2f64cc122125f30bad010ac50abdc129c341bb424ab3105d63d503d0770 extends Twig_Template
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
<title>海脉空间 - ";
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
        $this->loadTemplate("front/h_header.html", "front/hmspace/h-qd-college.html", 16)->display($context);
        // line 17
        echo "\t<div class=\"store h-bo-banner\" style=\"margin-top: 0;\">
\t\t<div id=\"slideBox\" class=\"slideBox\"  style=\"height: auto;\">
\t\t\t<div class=\"hd\">
\t\t\t\t<ul><li></li><li></li><li></li></ul>
\t\t\t</div>
\t\t\t<div class=\"bd\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/hbo-t1.png\" /></a></li>
\t\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/hbo-t1.png\" /></a></li>
\t\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/hbo-t1.png\" /></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<a class=\"prev\" href=\"javascript:void(0)\"></a>
\t\t\t<a class=\"next\" href=\"javascript:void(0)\"></a>
\t\t</div>
\t</div>

\t<div class=\"newtainer\">
\t\t<div class=\"qicon new-hqsta-card\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"hqst-card-column\">
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<img src=\"../resource/home/images/qf2.jpg\">
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">专利（15422）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"hqst-card-column\">
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<img src=\"../resource/home/images/qf2.jpg\">
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">专家团队（254）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"hqst-card-column\">
\t\t\t\t\t\t<div class=\"hqsta-card\">
\t\t\t\t\t\t\t<img src=\"../resource/home/images/qf2.jpg\">
\t\t\t\t\t\t\t<p class=\"hqsta-card-bp\">孵化机构（273）</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"htr-main newtainer jgtj\">
\t\t<div class=\"icurtit bt20-\">
\t\t\t机构推荐
\t\t\t<a href=\"/hmspace/training\" class=\"more\">查看全部 ></a>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["college"]) ? $context["college"] : null), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 72
            echo "\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"htr-card hti-card\">
\t\t\t\t\t<div class=\"htiin-\">
\t\t\t\t\t\t<img src=\"../resource/home/images/linghu.png\" alt=\"\">
\t\t\t\t\t\t<p class=\"htr-card-name\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<ul class=\"htr-card-ul\">
\t\t\t\t\t\t\t<li>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sell_label", array()), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t<li>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sell_label", array()), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t<li>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sell_label", array()), "html", null, true);
            echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<i class=\"material-icons sbd\">star_border</i>
\t\t\t\t\t\t<div class=\"bt-deta\">
\t\t\t\t\t\t\t<div><i class=\"material-icons\">location_on</i>深圳";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "city_ids", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t<div><i class=\"material-icons\">remove_red_eye</i>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "collect_num", array()), "html", null, true);
            echo "</div>
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
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t</div>
\t</div>

\t<div class=\"hbo-main newtainer xmly\" style=\"margin-bottom: 80px;\">
\t\t<div class=\"icurtit\">
\t\t\t活动路演
\t\t\t<a href=\"#\" class=\"more\">查看全部 ></a>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["ly"]) ? $context["ly"] : null), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 116
            echo "\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"img-box\"><a href=\"\"><img src=\"../resource/home/images/";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "thumb", array()), "html", null, true);
            echo "s\" alt=\"\"></a></div>
\t\t\t\t\t<a href=\"/hmspace\"><p class=\"title\">";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</p></a>
\t\t\t\t\t<p><i class=\"material-icons\">access_time</i>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "create_at", array()), "html", null, true);
            echo "  14:00-17:00</p>
\t\t\t\t\t<p><i class=\"material-icons\">location_on</i>";
            // line 121
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
        // line 129
        echo "\t\t</div>
\t</div>

\t<div class=\"rightfix\">
\t\t<div class=\"online\">
\t\t\t<a href=\"javascript:;\"><img src=\"../resource/home/images/online.png\" alt=\"\">在线咨询</a>
\t\t</div>
\t\t<div class=\"fixmenu\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/trolley.png\" alt=\"\"></a></li>
\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/phone.png\" alt=\"\"></a></li>
\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/weixin.png\" alt=\"\"></a></li>
\t\t\t\t<li><a href=\"javascript:;\"><img src=\"../resource/home/images/weibo.png\" alt=\"\"></a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
";
        // line 145
        $this->loadTemplate("front/footer.html", "front/hmspace/h-qd-college.html", 145)->display($context);
        // line 146
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
        return "front/hmspace/h-qd-college.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 146,  221 => 145,  203 => 129,  189 => 121,  185 => 120,  181 => 119,  177 => 118,  173 => 116,  169 => 115,  158 => 106,  131 => 85,  127 => 84,  120 => 80,  116 => 79,  112 => 78,  107 => 76,  101 => 72,  97 => 71,  41 => 17,  39 => 16,  23 => 3,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/* <title>海脉空间 - {{title.title}}</title>*/
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
/* 	<div class="store h-bo-banner" style="margin-top: 0;">*/
/* 		<div id="slideBox" class="slideBox"  style="height: auto;">*/
/* 			<div class="hd">*/
/* 				<ul><li></li><li></li><li></li></ul>*/
/* 			</div>*/
/* 			<div class="bd">*/
/* 				<ul>*/
/* 					<li><a href="javascript:;"><img src="../resource/home/images/hbo-t1.png" /></a></li>*/
/* 					<li><a href="javascript:;"><img src="../resource/home/images/hbo-t1.png" /></a></li>*/
/* 					<li><a href="javascript:;"><img src="../resource/home/images/hbo-t1.png" /></a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<a class="prev" href="javascript:void(0)"></a>*/
/* 			<a class="next" href="javascript:void(0)"></a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="newtainer">*/
/* 		<div class="qicon new-hqsta-card">*/
/* 			<div class="row">*/
/* 				<div class="col-md-4">*/
/* 					<div class="hqst-card-column">*/
/* 						<div class="hqsta-card">*/
/* 							<img src="../resource/home/images/qf2.jpg">*/
/* 							<p class="hqsta-card-bp">专利（15422）</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-4">*/
/* 					<div class="hqst-card-column">*/
/* 						<div class="hqsta-card">*/
/* 							<img src="../resource/home/images/qf2.jpg">*/
/* 							<p class="hqsta-card-bp">专家团队（254）</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-4">*/
/* 					<div class="hqst-card-column">*/
/* 						<div class="hqsta-card">*/
/* 							<img src="../resource/home/images/qf2.jpg">*/
/* 							<p class="hqsta-card-bp">孵化机构（273）</p>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="htr-main newtainer jgtj">*/
/* 		<div class="icurtit bt20-">*/
/* 			机构推荐*/
/* 			<a href="/hmspace/training" class="more">查看全部 ></a>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			{% for data in college.data.rows%}*/
/* 			<div class="col-md-4">*/
/* 				<div class="htr-card hti-card">*/
/* 					<div class="htiin-">*/
/* 						<img src="../resource/home/images/linghu.png" alt="">*/
/* 						<p class="htr-card-name">{{data.name}}</p>*/
/* 						<ul class="htr-card-ul">*/
/* 							<li>{{data.sell_label}}</li>*/
/* 							<li>{{data.sell_label}}</li>*/
/* 							<li>{{data.sell_label}}</li>*/
/* 						</ul>*/
/* 						<i class="material-icons sbd">star_border</i>*/
/* 						<div class="bt-deta">*/
/* 							<div><i class="material-icons">location_on</i>深圳{{data.city_ids}}</div>*/
/* 							<div><i class="material-icons">remove_red_eye</i>{{data.collect_num}}</div>*/
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
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="hbo-main newtainer xmly" style="margin-bottom: 80px;">*/
/* 		<div class="icurtit">*/
/* 			活动路演*/
/* 			<a href="#" class="more">查看全部 ></a>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			{% for data in ly.data.rows %}*/
/* 			<div class="col-md-4">*/
/* 				<div class="item">*/
/* 					<div class="img-box"><a href=""><img src="../resource/home/images/{{data.thumb}}s" alt=""></a></div>*/
/* 					<a href="/hmspace"><p class="title">{{data.title}}</p></a>*/
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
/* 	<div class="rightfix">*/
/* 		<div class="online">*/
/* 			<a href="javascript:;"><img src="../resource/home/images/online.png" alt="">在线咨询</a>*/
/* 		</div>*/
/* 		<div class="fixmenu">*/
/* 			<ul>*/
/* 				<li><a href="javascript:;"><img src="../resource/home/images/trolley.png" alt=""></a></li>*/
/* 				<li><a href="javascript:;"><img src="../resource/home/images/phone.png" alt=""></a></li>*/
/* 				<li><a href="javascript:;"><img src="../resource/home/images/weixin.png" alt=""></a></li>*/
/* 				<li><a href="javascript:;"><img src="../resource/home/images/weibo.png" alt=""></a></li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* {% include 'front/footer.html' %}*/
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
