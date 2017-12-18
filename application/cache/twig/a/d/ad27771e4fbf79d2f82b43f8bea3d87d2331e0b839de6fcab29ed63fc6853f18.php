<?php

/* front/hmtong/place-longrent.html */
class __TwigTemplate_a9bd47331c3fe0189b74f4f8076a344d1e0a62c16af62abd3d9363fcdbcb11b8 extends Twig_Template
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
        echo "<div class=\"place-longrent\" style=\"display: none\">
\t<div class=\"top-bar\">
\t\t<span>场地实体长租服务产品</span>

\t</div>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["changzu"]) ? $context["changzu"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 7
            echo "\t<div style=\"background: #f9fcff\" class=\"periodofrent\">
\t\t<div class=\"periodofrent-items clear\">
\t\t\t<div class=\"active-left\">
\t\t\t\t<div class=\"wensday\">
\t\t\t\t\t<img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "img", array(), "array"), "html", null, true);
            echo "\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"active-right\">
\t\t\t\t<span>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "term", array(), "array"), "html", null, true);
            echo "</span>
\t\t\t\t<ul class=\"active-right-down\">
\t\t\t\t\t<li>单月费用：";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cost", array(), "array"), "html", null, true);
            echo "押金方式：";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "deposit", array(), "array"), "html", null, true);
            echo " 交租方式：";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pay", array(), "array"), "html", null, true);
            echo "</li>
\t\t\t\t\t<li>适用范围：";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "range", array(), "array"), "html", null, true);
            echo "</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"yuyue\">
\t\t\t\t\t<div class=\"yuyue-left\" style=\"background-color:#37a3ff;color: #FFFFFF;\">
\t\t\t\t\t\t预约看房
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"yuyue-right\" style=\"background-color:#FFFFFF;border: solid 1px #37a3ff; color:#37a3ff;\">
\t\t\t\t\t\t<a href=\"/Hmtong/hmtLongRentDetails\">在线购买</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
\t<div class=\"contact-cont\">
\t\t<p class=\"contacttit\">亲，以上没有符合您需求的，可提交您的需求，我们可以自定义为您提供服务！<br/> 或电联我们<span>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : null), "html", null, true);
        echo "</span></p>
\t\t<ul >
\t\t\t<li style=\"height:160px;margin-bottom: 30px;padding-left: 86px \"><i style=\"top:18px;left: 30px;\"><img src=\"/resource/front/images/pencil.png\" alt=\"\"></i><textarea placeholder=\"填写您的需求。\"></textarea></li>
\t\t\t<li style=\"margin-bottom:20px;\"><i style=\"top:18px;left: 34px;\"><img src=\"/resource/front/images/acct.png\" alt=\"\"></i><input type=\"text\" placeholder=\"联系人\"></li>
\t\t\t<li style=\"margin-bottom:41px;\"><i style=\"top:14px;left: 39px;\"><img src=\"/resource/front/images/phone.png\" alt=\"\"></i><input type=\"text\" placeholder=\"联系电话\"></li>
\t\t</ul>
\t\t<div id=\"subBt\">提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "front/hmtong/place-longrent.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  76 => 32,  56 => 18,  48 => 17,  43 => 15,  36 => 11,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="place-longrent" style="display: none">*/
/* 	<div class="top-bar">*/
/* 		<span>场地实体长租服务产品</span>*/
/* */
/* 	</div>*/
/* 	{% for key,item in changzu %}*/
/* 	<div style="background: #f9fcff" class="periodofrent">*/
/* 		<div class="periodofrent-items clear">*/
/* 			<div class="active-left">*/
/* 				<div class="wensday">*/
/* 					<img src="{{item['img']}}" />*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="active-right">*/
/* 				<span>{{item['term']}}</span>*/
/* 				<ul class="active-right-down">*/
/* 					<li>单月费用：{{item['cost']}}押金方式：{{item['deposit']}} 交租方式：{{item['pay']}}</li>*/
/* 					<li>适用范围：{{item['range']}}</li>*/
/* 				</ul>*/
/* 				<div class="yuyue">*/
/* 					<div class="yuyue-left" style="background-color:#37a3ff;color: #FFFFFF;">*/
/* 						预约看房*/
/* 					</div>*/
/* 					<div class="yuyue-right" style="background-color:#FFFFFF;border: solid 1px #37a3ff; color:#37a3ff;">*/
/* 						<a href="/Hmtong/hmtLongRentDetails">在线购买</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% endfor %}*/
/* */
/* 	<div class="contact-cont">*/
/* 		<p class="contacttit">亲，以上没有符合您需求的，可提交您的需求，我们可以自定义为您提供服务！<br/> 或电联我们<span>{{tel}}</span></p>*/
/* 		<ul >*/
/* 			<li style="height:160px;margin-bottom: 30px;padding-left: 86px "><i style="top:18px;left: 30px;"><img src="/resource/front/images/pencil.png" alt=""></i><textarea placeholder="填写您的需求。"></textarea></li>*/
/* 			<li style="margin-bottom:20px;"><i style="top:18px;left: 34px;"><img src="/resource/front/images/acct.png" alt=""></i><input type="text" placeholder="联系人"></li>*/
/* 			<li style="margin-bottom:41px;"><i style="top:14px;left: 39px;"><img src="/resource/front/images/phone.png" alt=""></i><input type="text" placeholder="联系电话"></li>*/
/* 		</ul>*/
/* 		<div id="subBt">提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交</div>*/
/* 	</div>*/
/* </div>*/
/* */
