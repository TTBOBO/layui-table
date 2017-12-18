<?php

/* front/hmtong/hmtvirtual-vip.html */
class __TwigTemplate_4704256a25340e768635eddd0fe29f0c281cecb2af7b0d09e9e52f093e919099 extends Twig_Template
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
\t.onh:hover
\t{
\t\tbackground: #fff;
\t\tbox-shadow: 0 1px 8px 4px #eee;
\t}

\t.global-titInfo span {
\t\tfont-size: 28px;
  \t\tline-height: 1.61;
  \t\tcolor: #ff8533;
\t}
\t.more2 a span {
\tborder-radius: 10px;
\tbackground-color: #fff;
\tborder: solid 1px #ff6600;
\tpadding:16px 40px;
\tfont-size: 16px;
\t color: #ff6600;
\t\t 
\t}
\t.add5 a{
\t\tcolor: #ff6600;
\t}
</style>
<div class=\"virtual-vip clear\" >
\t<div class=\"global-cont\">
\t\t<div class=\"global-tit\">
\t\t\t<h3>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["qwt_title"]) ? $context["qwt_title"] : null), "html", null, true);
        echo "</h3>
\t\t</div>
\t\t<!--";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["qwt_title2"]) ? $context["qwt_title2"] : null), "html", null, true);
        echo "-->
\t\t<p class=\"global-titInfo\">
\t\t\t可享受全国34个省份<span>所有</span>已布局及将布局城市的服务
\t\t</p>

\t\t<ul class=\"city clear\">
\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["qwt_img"]) ? $context["qwt_img"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 38
            echo "\t\t\t\t<li class=\"onh\">
\t\t\t\t\t<div class=\"city2\" hidden>
\t\t\t\t\t\t<div class=\"image-a\"><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path2", array(), "array"), "html", null, true);
            echo "\" alt=\"\"></div>
\t\t\t\t\t\t<p class=\"city3\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p class=\"city4\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title2", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c1\">
\t\t\t\t\t\t<p class=\"city1\"><img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array(), "array"), "html", null, true);
            echo "\" alt=\"\"></p>
\t\t\t\t\t\t<span>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t</ul>
\t\t<p class=\"title2\">加入会员可获资源</p>

\t\t<div class=\"vip\">
\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["qwt"]) ? $context["qwt"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 55
            echo "\t\t\t\t<div>
\t\t\t\t\t<p>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "num", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t</div>

\t\t<p class=\"add\">赠送项目</p>

\t\t<div class=\"add1\">
\t\t\t<div class=\"add2\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["qwt_give"]) ? $context["qwt_give"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 68
            echo "\t\t\t\t\t<li><i></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array(), "array"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "num", array(), "array"), "html", null, true);
            echo " </span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company", array(), "array"), "html", null, true);
            echo "</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"add3\">
\t\t\t\t<div class=\"add4\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["consult"]) ? $context["consult"] : null), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"add5\"><a href=\"/Hmtong/hmtQWTDetails\"><span>注册购买</span></a></div>
\t\t\t\t<div class=\"add6\">咨询服务电话：<span>";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : null), "html", null, true);
        echo "</span></div>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"shenz-cont\">
\t\t\t<div class=\"shenz-tit\">
\t\t\t\t<h3>";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["szt_title"]) ? $context["szt_title"] : null), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<!--";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["szt_title2"]) ? $context["szt_title2"] : null), "html", null, true);
        echo "-->
\t\t\t<p class=\"global-titInfo\">
\t\t\t\t可享受全国34个省份<span>所有</span>已布局及将布局城市如下全部服务，且享受<span>实体</span>消费折扣优惠
\t\t\t</p>
\t\t\t<ul class=\"city-a clear\">
\t\t\t\t";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["szt_img"]) ? $context["szt_img"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 91
            echo "\t\t\t\t<li  class=\"onh\">
\t\t\t\t\t<div class=\"city2\" hidden>
\t\t\t\t\t\t<div class=\"image-a\"><img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path2", array(), "array"), "html", null, true);
            echo "\" alt=\"\"></div>
\t\t\t\t\t\t<p class=\"city3\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p class=\"city4\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title2", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c1\">
\t\t\t\t\t\t<p class=\"city1\"><img  src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array(), "array"), "html", null, true);
            echo "\" alt=\"\"></p>
\t\t\t\t\t\t<span>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t\t</ul>
\t\t\t<p class=\"title2\">加入会员可获资源</p>

\t\t\t<div class=\"vip\">
\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["szt"]) ? $context["szt"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 108
            echo "\t\t\t\t<div>
\t\t\t\t\t<p>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "num", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t</div>
\t\t\t<div class=\"table\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"table1\">套餐类型</div>
\t\t\t\t\t\t<div class=\"table2\">套餐金额</div>
\t\t\t\t\t\t<div class=\"table2\">所有项目单价</div>
\t\t\t\t\t\t<div class=\"table4\">赠送项目</div>
\t\t\t\t\t\t<div class=\"table5\">经理使用券</div>
\t\t\t\t\t\t<div class=\"table5\">会议室使用券</div>
\t\t\t\t\t\t<div class=\"table5\">会客室使用券</div>
\t\t\t\t\t\t<div class=\"table5-a\">每消费一元积一分<br /><p>（积分可用于实体消费）</p></div>
\t\t\t\t\t\t<div class=\"table5\">获取平台海量资源权限</div>
\t\t\t\t\t\t<div class=\"table2\">赠送总额</div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["szt_tc"]) ? $context["szt_tc"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 129
            echo "\t\t\t\t\t<li class=\"ccc onh\">
\t\t\t\t\t\t<div class=\"table1\">";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"table2-a\">￥";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "money", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"table3\"><span>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "discount", array(), "array"), "html", null, true);
            echo "</span>折</div>
\t\t\t\t\t\t<div class=\"table4\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "give", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"table5\"><span>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "use_jls", array(), "array"), "html", null, true);
            echo "</span>张</div>
\t\t\t\t\t\t<div class=\"table5\"><span>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "use_hys", array(), "array"), "html", null, true);
            echo "</span>小时</div>
\t\t\t\t\t\t<div class=\"table5\"><span>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "use_hks", array(), "array"), "html", null, true);
            echo "</span>小时</div>
\t\t\t\t\t\t<div style=\"padding-top: 16px\" class=\"table5-a\">";
            // line 137
            echo (($this->getAttribute($context["item"], "integral", array(), "array")) ? ("<img width=\"20px\" src=\"/resource/front/images/correct.png\" alt=\"\">") : (""));
            echo "</div>
\t\t\t\t\t\t<div class=\"table5\">";
            // line 138
            echo (($this->getAttribute($context["item"], "get_res", array(), "array")) ? ("<img width=\"20px\" src=\"/resource/front/images/correct.png\" alt=\"\">") : (""));
            echo "</div>
\t\t\t\t\t\t<div class=\"table3\"><span>¥ ";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "gift_amount", array(), "array"), "html", null, true);
            echo "</span></div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"joinvip\">

\t\t\t\t<div class=\"more\">
\t\t\t\t\t<div class=\"more1\">";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["consult"]) ? $context["consult"] : null), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"more2\"><a href=\"/Hmtong/hmtSZTDetails\"><span>查看详情</span></a></div>
\t\t\t\t\t<div class=\"add6\" style=\"float:right; clear:none; padding-top:23px;\">咨询服务电话：<span>";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : null), "html", null, true);
        echo "</span></div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t<div class=\"ddt-cont\">
\t\t\t<div class=\"ddt-tit\">
\t\t\t\t<h3>";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["ddt_title"]) ? $context["ddt_title"] : null), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<!--";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["ddt_title2"]) ? $context["ddt_title2"] : null), "html", null, true);
        echo "-->
\t\t\t<p class=\"global-titInfo\">
\t\t\t\t可享受全国34个省份<span>所有</span>已布局及将布局城市如下全部服务，且享受<span>实体</span>消费折扣优惠
\t\t\t</p>
\t\t\t<ul class=\"city-a clear\">
\t\t\t\t";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["szt_img"]) ? $context["szt_img"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 165
            echo "\t\t\t\t<li  class=\"onh\">
\t\t\t\t\t<div class=\"city2\" hidden>
\t\t\t\t\t\t<div class=\"image-a\"><img src=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path2", array(), "array"), "html", null, true);
            echo "\" alt=\"\"></div>
\t\t\t\t\t\t<p class=\"city3\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p class=\"city4\">";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title2", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"c1\">
\t\t\t\t\t\t<p class=\"city1\"><img  src=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array(), "array"), "html", null, true);
            echo "\" alt=\"\"></p>
\t\t\t\t\t\t<span>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t</ul>

\t\t\t<p class=\"title2\">加入会员可获资源</p>

\t\t\t<div class=\"vip\">
\t\t\t\t";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ddt"]) ? $context["ddt"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 183
            echo "\t\t\t\t<div>
\t\t\t\t\t<p>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "num", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "\t\t\t</div>
\t\t\t<div class=\"yyg-table\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"yyg-table1\">套餐类型</div>
\t\t\t\t\t\t<div class=\"table4-a\">赠送项目</div>
\t\t\t\t\t\t<div class=\"table5\">经理使用券</div>
\t\t\t\t\t\t<div class=\"table5\">会议室使用券</div>
\t\t\t\t\t\t<div class=\"table5\">会客室使用券</div>
\t\t\t\t\t\t<div class=\"table5-a\">每消费一元积一分<br /><p>（积分可用于实体消费）</p></div>
\t\t\t\t\t\t<div class=\"table5\">获取平台海量资源权限</div>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ddt_tc"]) ? $context["ddt_tc"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 201
            echo "\t\t\t\t\t\t<li class=\"onh\">
\t\t\t\t\t\t\t<div class=\"yyg-table1 yyg-table2\">¥";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "full_amount", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"table4\"></div>
\t\t\t\t\t\t\t<div class=\"table5\"><span>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "use_jls", array(), "array"), "html", null, true);
            echo "</span>张</div>
\t\t\t\t\t\t\t<div class=\"table5\"><span>";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "use_hys", array(), "array"), "html", null, true);
            echo "</span>小时</div>
\t\t\t\t\t\t\t<div class=\"table5\"><span>";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "use_hks", array(), "array"), "html", null, true);
            echo "</span>小时</div>
\t\t\t\t\t\t\t<div style=\"padding-top: 16px\" class=\"table5-a\">";
            // line 207
            echo (($this->getAttribute($context["item"], "integral", array(), "array")) ? ("<img width=\"20px\" src=\"/resource/front/images/correct.png\" alt=\"\">") : (""));
            echo "</div>
\t\t\t\t\t\t\t<div class=\"table5\">";
            // line 208
            echo (($this->getAttribute($context["item"], "get_res", array(), "array")) ? ("<img width=\"20px\" src=\"/resource/front/images/correct.png\" alt=\"\">") : (""));
            echo "</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"more\">
\t\t\t\t<div class=\"more1\">";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["consult"]) ? $context["consult"] : null), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"more2\"><a href=\"/Hmtong/hmtDDTDetails\"><span>查看详情</span></a></div>
\t\t\t\t<div class=\"add6\" style=\"float:right; clear:none; padding-top:23px;\">咨询服务电话：<span>";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : null), "html", null, true);
        echo "</span></div>
\t\t\t</div>

\t\t</div>


\t\t<div class=\"yixt-cont\">
\t\t\t<div class=\"yixt-tit\">
\t\t\t\t<h3>";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["yxt_title"]) ? $context["yxt_title"] : null), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<p class=\"global-titInfo\">";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["yxt_title2"]) ? $context["yxt_title2"] : null), "html", null, true);
        echo "</p>

\t\t\t\t<ul class=\"city-a clear\">
\t\t\t\t\t";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["yxt_img"]) ? $context["yxt_img"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 232
            echo "\t\t\t\t\t<div>
\t\t\t\t\t\t<li class=\"onh\">
\t\t\t\t\t\t\t<div class=\"city2\" hidden>
\t\t\t\t\t\t\t\t<div class=\"image-a\"><img src=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path2", array(), "array"), "html", null, true);
            echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<p class=\"city3\">";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"city4\">";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title2", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"c1\">
\t\t\t\t\t\t\t\t<p class=\"city1\"><img src=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array(), "array"), "html", null, true);
            echo "\"></p>
\t\t\t\t\t\t\t\t<span>";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "
\t\t\t\t</ul>

\t\t\t<p class=\"title2\">加入会员可获资源</p>

\t\t\t<div class=\"vip\">
\t\t\t\t";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["yxt"]) ? $context["yxt"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 253
            echo "\t\t\t\t<div>
\t\t\t\t\t<p>";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "num", array(), "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array(), "array"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "\t\t\t</div>

\t\t\t<p class=\"add\">赠送项目</p>

\t\t\t<div class=\"add1\">
\t\t\t\t<div class=\"add2\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["yxt_give"]) ? $context["yxt_give"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 266
            echo "\t\t\t\t\t\t<li><i></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array(), "array"), "html", null, true);
            echo "<span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "num", array(), "array"), "html", null, true);
            echo " </span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company", array(), "array"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"add3\">
\t\t\t\t\t<div class=\"add4\">";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["consult"]) ? $context["consult"] : null), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"add5\"><a>注册购买</a></div>
\t\t\t\t\t<div class=\"add6\">咨询服务电话：<span>";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : null), "html", null, true);
        echo "</span></div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t<div class=\"contact-cont\">
\t\t\t<p class=\"contacttit\">亲，以上没有符合您需求的，可提交您的需求，我们可以自定义为您提供服务！<br/> 或电联我们<span>";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["tel"]) ? $context["tel"] : null), "html", null, true);
        echo "</span></p>
\t\t\t<ul >
\t\t\t\t<li style=\"height:160px;margin-bottom: 30px;padding-left: 86px \"><i style=\"top:18px;left: 30px;\"><img src=\"/resource/front/images/pencil.png\" alt=\"\"></i><textarea placeholder=\"填写您的需求。\"></textarea></li>
\t\t\t\t<li style=\"margin-bottom:20px;\"><i style=\"top:18px;left: 34px;\"><img src=\"/resource/front/images/acct.png\" alt=\"\"></i><input type=\"text\" placeholder=\"联系人\"></li>
\t\t\t\t<li style=\"margin-bottom:41px;\"><i style=\"top:14px;left: 39px;\"><img src=\"/resource/front/images/phone.png\" alt=\"\"></i><input type=\"text\" placeholder=\"联系电话\"></li>

\t\t\t</ul>
\t\t\t<div id=\"subBt\">提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交</div>
\t\t</div>
\t</div>
</div>
<script>
\t\$(function () {
        \$(\"li.onh\").hover(function(){
        \$(this).find('.city2').show();
\t\t\$(this).find('.c1').hide();
\t},function(){
\t\t\$(this).find('.city2').hide();
\t\t\$(this).find('.c1').show();
\t});

    })
</script>";
    }

    public function getTemplateName()
    {
        return "front/hmtong/hmtvirtual-vip.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 281,  603 => 274,  598 => 272,  592 => 268,  579 => 266,  575 => 265,  566 => 258,  557 => 255,  553 => 254,  550 => 253,  546 => 252,  538 => 246,  527 => 241,  523 => 240,  517 => 237,  513 => 236,  509 => 235,  504 => 232,  500 => 231,  494 => 228,  489 => 226,  478 => 218,  473 => 216,  466 => 211,  457 => 208,  453 => 207,  449 => 206,  445 => 205,  441 => 204,  436 => 202,  433 => 201,  429 => 200,  415 => 188,  406 => 185,  402 => 184,  399 => 183,  395 => 182,  388 => 177,  378 => 173,  374 => 172,  368 => 169,  364 => 168,  360 => 167,  356 => 165,  352 => 164,  344 => 159,  339 => 157,  328 => 149,  323 => 147,  316 => 142,  307 => 139,  303 => 138,  299 => 137,  295 => 136,  291 => 135,  287 => 134,  283 => 133,  279 => 132,  275 => 131,  271 => 130,  268 => 129,  264 => 128,  247 => 113,  238 => 110,  234 => 109,  231 => 108,  227 => 107,  221 => 103,  211 => 99,  207 => 98,  201 => 95,  197 => 94,  193 => 93,  189 => 91,  185 => 90,  177 => 85,  172 => 83,  162 => 76,  157 => 74,  151 => 70,  138 => 68,  134 => 67,  125 => 60,  116 => 57,  112 => 56,  109 => 55,  105 => 54,  99 => 50,  89 => 46,  85 => 45,  79 => 42,  75 => 41,  71 => 40,  67 => 38,  63 => 37,  54 => 31,  49 => 29,  19 => 1,);
    }
}
/* <style>*/
/* 	.onh:hover*/
/* 	{*/
/* 		background: #fff;*/
/* 		box-shadow: 0 1px 8px 4px #eee;*/
/* 	}*/
/* */
/* 	.global-titInfo span {*/
/* 		font-size: 28px;*/
/*   		line-height: 1.61;*/
/*   		color: #ff8533;*/
/* 	}*/
/* 	.more2 a span {*/
/* 	border-radius: 10px;*/
/* 	background-color: #fff;*/
/* 	border: solid 1px #ff6600;*/
/* 	padding:16px 40px;*/
/* 	font-size: 16px;*/
/* 	 color: #ff6600;*/
/* 		 */
/* 	}*/
/* 	.add5 a{*/
/* 		color: #ff6600;*/
/* 	}*/
/* </style>*/
/* <div class="virtual-vip clear" >*/
/* 	<div class="global-cont">*/
/* 		<div class="global-tit">*/
/* 			<h3>{{qwt_title}}</h3>*/
/* 		</div>*/
/* 		<!--{{qwt_title2}}-->*/
/* 		<p class="global-titInfo">*/
/* 			可享受全国34个省份<span>所有</span>已布局及将布局城市的服务*/
/* 		</p>*/
/* */
/* 		<ul class="city clear">*/
/* 			{% for key,item in qwt_img %}*/
/* 				<li class="onh">*/
/* 					<div class="city2" hidden>*/
/* 						<div class="image-a"><img src="{{item['path2']}}" alt=""></div>*/
/* 						<p class="city3">{{item['title']}}</p>*/
/* 						<p class="city4">{{item['title2']}}</p>*/
/* 					</div>*/
/* 					<div class="c1">*/
/* 						<p class="city1"><img src="{{item['path']}}" alt=""></p>*/
/* 						<span>{{item['title']}}</span>*/
/* 					</div>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 		<p class="title2">加入会员可获资源</p>*/
/* */
/* 		<div class="vip">*/
/* 			{% for key,item in qwt %}*/
/* 				<div>*/
/* 					<p>{{item['num']}}</p>*/
/* 					{{item['title']}}*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* */
/* 		<p class="add">赠送项目</p>*/
/* */
/* 		<div class="add1">*/
/* 			<div class="add2">*/
/* 				<ul>*/
/* 					{% for key,item in qwt_give %}*/
/* 					<li><i></i>{{item['name']}}<span> {{item['num']}} </span>{{item['company']}}</li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* */
/* 			<div class="add3">*/
/* 				<div class="add4">{{consult}}</div>*/
/* 				<div class="add5"><a href="/Hmtong/hmtQWTDetails"><span>注册购买</span></a></div>*/
/* 				<div class="add6">咨询服务电话：<span>{{tel}}</span></div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="shenz-cont">*/
/* 			<div class="shenz-tit">*/
/* 				<h3>{{szt_title}}</h3>*/
/* 			</div>*/
/* 			<!--{{szt_title2}}-->*/
/* 			<p class="global-titInfo">*/
/* 				可享受全国34个省份<span>所有</span>已布局及将布局城市如下全部服务，且享受<span>实体</span>消费折扣优惠*/
/* 			</p>*/
/* 			<ul class="city-a clear">*/
/* 				{% for key,item in szt_img %}*/
/* 				<li  class="onh">*/
/* 					<div class="city2" hidden>*/
/* 						<div class="image-a"><img src="{{item['path2']}}" alt=""></div>*/
/* 						<p class="city3">{{item['title']}}</p>*/
/* 						<p class="city4">{{item['title2']}}</p>*/
/* 					</div>*/
/* 					<div class="c1">*/
/* 						<p class="city1"><img  src="{{item['path']}}" alt=""></p>*/
/* 						<span>{{item['title']}}</span>*/
/* 					</div>*/
/* 				</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 			<p class="title2">加入会员可获资源</p>*/
/* */
/* 			<div class="vip">*/
/* 				{% for key,item in szt %}*/
/* 				<div>*/
/* 					<p>{{item['num']}}</p>*/
/* 					{{item['title']}}*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 			<div class="table">*/
/* 				<ul>*/
/* 					<li>*/
/* 						<div class="table1">套餐类型</div>*/
/* 						<div class="table2">套餐金额</div>*/
/* 						<div class="table2">所有项目单价</div>*/
/* 						<div class="table4">赠送项目</div>*/
/* 						<div class="table5">经理使用券</div>*/
/* 						<div class="table5">会议室使用券</div>*/
/* 						<div class="table5">会客室使用券</div>*/
/* 						<div class="table5-a">每消费一元积一分<br /><p>（积分可用于实体消费）</p></div>*/
/* 						<div class="table5">获取平台海量资源权限</div>*/
/* 						<div class="table2">赠送总额</div>*/
/* 					</li>*/
/* 					{% for key,item in szt_tc %}*/
/* 					<li class="ccc onh">*/
/* 						<div class="table1">{{item['type']}}</div>*/
/* 						<div class="table2-a">￥{{item['money']}}</div>*/
/* 						<div class="table3"><span>{{item['discount']}}</span>折</div>*/
/* 						<div class="table4">{{item['give']}}</div>*/
/* 						<div class="table5"><span>{{item['use_jls']}}</span>张</div>*/
/* 						<div class="table5"><span>{{item['use_hys']}}</span>小时</div>*/
/* 						<div class="table5"><span>{{item['use_hks']}}</span>小时</div>*/
/* 						<div style="padding-top: 16px" class="table5-a">{{item['integral'] ? '<img width="20px" src="/resource/front/images/correct.png" alt="">' :''}}</div>*/
/* 						<div class="table5">{{item['get_res'] ? '<img width="20px" src="/resource/front/images/correct.png" alt="">' :'' }}</div>*/
/* 						<div class="table3"><span>¥ {{item['gift_amount']}}</span></div>*/
/* 					</li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="joinvip">*/
/* */
/* 				<div class="more">*/
/* 					<div class="more1">{{consult}}</div>*/
/* 					<div class="more2"><a href="/Hmtong/hmtSZTDetails"><span>查看详情</span></a></div>*/
/* 					<div class="add6" style="float:right; clear:none; padding-top:23px;">咨询服务电话：<span>{{tel}}</span></div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="ddt-cont">*/
/* 			<div class="ddt-tit">*/
/* 				<h3>{{ddt_title}}</h3>*/
/* 			</div>*/
/* 			<!--{{ddt_title2}}-->*/
/* 			<p class="global-titInfo">*/
/* 				可享受全国34个省份<span>所有</span>已布局及将布局城市如下全部服务，且享受<span>实体</span>消费折扣优惠*/
/* 			</p>*/
/* 			<ul class="city-a clear">*/
/* 				{% for key,item in szt_img %}*/
/* 				<li  class="onh">*/
/* 					<div class="city2" hidden>*/
/* 						<div class="image-a"><img src="{{item['path2']}}" alt=""></div>*/
/* 						<p class="city3">{{item['title']}}</p>*/
/* 						<p class="city4">{{item['title2']}}</p>*/
/* 					</div>*/
/* 					<div class="c1">*/
/* 						<p class="city1"><img  src="{{item['path']}}" alt=""></p>*/
/* 						<span>{{item['title']}}</span>*/
/* 					</div>*/
/* 				</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* */
/* 			<p class="title2">加入会员可获资源</p>*/
/* */
/* 			<div class="vip">*/
/* 				{% for key,item in ddt %}*/
/* 				<div>*/
/* 					<p>{{item['num']}}</p>*/
/* 					{{item['title']}}*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 			<div class="yyg-table">*/
/* 				<ul>*/
/* 					<li>*/
/* 						<div class="yyg-table1">套餐类型</div>*/
/* 						<div class="table4-a">赠送项目</div>*/
/* 						<div class="table5">经理使用券</div>*/
/* 						<div class="table5">会议室使用券</div>*/
/* 						<div class="table5">会客室使用券</div>*/
/* 						<div class="table5-a">每消费一元积一分<br /><p>（积分可用于实体消费）</p></div>*/
/* 						<div class="table5">获取平台海量资源权限</div>*/
/* 					</li>*/
/* 					{% for key,item in ddt_tc %}*/
/* 						<li class="onh">*/
/* 							<div class="yyg-table1 yyg-table2">¥{{item['full_amount']}}</div>*/
/* 							<div class="table4"></div>*/
/* 							<div class="table5"><span>{{item['use_jls']}}</span>张</div>*/
/* 							<div class="table5"><span>{{item['use_hys']}}</span>小时</div>*/
/* 							<div class="table5"><span>{{item['use_hks']}}</span>小时</div>*/
/* 							<div style="padding-top: 16px" class="table5-a">{{item['integral'] ? '<img width="20px" src="/resource/front/images/correct.png" alt="">' :''}}</div>*/
/* 							<div class="table5">{{item['get_res'] ? '<img width="20px" src="/resource/front/images/correct.png" alt="">' :'' }}</div>*/
/* 						</li>*/
/* 					{% endfor %}*/
/* */
/* 				</ul>*/
/* 			</div>*/
/* */
/* 			<div class="more">*/
/* 				<div class="more1">{{consult}}</div>*/
/* 				<div class="more2"><a href="/Hmtong/hmtDDTDetails"><span>查看详情</span></a></div>*/
/* 				<div class="add6" style="float:right; clear:none; padding-top:23px;">咨询服务电话：<span>{{tel}}</span></div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* */
/* 		<div class="yixt-cont">*/
/* 			<div class="yixt-tit">*/
/* 				<h3>{{yxt_title}}</h3>*/
/* 			</div>*/
/* 			<p class="global-titInfo">{{yxt_title2}}</p>*/
/* */
/* 				<ul class="city-a clear">*/
/* 					{% for key,item in yxt_img %}*/
/* 					<div>*/
/* 						<li class="onh">*/
/* 							<div class="city2" hidden>*/
/* 								<div class="image-a"><img src="{{item['path2']}}" alt=""></div>*/
/* 								<p class="city3">{{item['title']}}</p>*/
/* 								<p class="city4">{{item['title2']}}</p>*/
/* 							</div>*/
/* 							<div class="c1">*/
/* 								<p class="city1"><img src="{{item['path']}}"></p>*/
/* 								<span>{{item['title']}}</span>*/
/* 							</div>*/
/* 						</li>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* */
/* 				</ul>*/
/* */
/* 			<p class="title2">加入会员可获资源</p>*/
/* */
/* 			<div class="vip">*/
/* 				{% for key,item in yxt %}*/
/* 				<div>*/
/* 					<p>{{item['num']}}</p>*/
/* 					{{item['title']}}*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* */
/* 			<p class="add">赠送项目</p>*/
/* */
/* 			<div class="add1">*/
/* 				<div class="add2">*/
/* 					<ul>*/
/* 						{% for key,item in yxt_give %}*/
/* 						<li><i></i>{{item['name']}}<span> {{item['num']}} </span>{{item['company']}}</li>*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* */
/* 				<div class="add3">*/
/* 					<div class="add4">{{consult}}</div>*/
/* 					<div class="add5"><a>注册购买</a></div>*/
/* 					<div class="add6">咨询服务电话：<span>{{tel}}</span></div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="contact-cont">*/
/* 			<p class="contacttit">亲，以上没有符合您需求的，可提交您的需求，我们可以自定义为您提供服务！<br/> 或电联我们<span>{{tel}}</span></p>*/
/* 			<ul >*/
/* 				<li style="height:160px;margin-bottom: 30px;padding-left: 86px "><i style="top:18px;left: 30px;"><img src="/resource/front/images/pencil.png" alt=""></i><textarea placeholder="填写您的需求。"></textarea></li>*/
/* 				<li style="margin-bottom:20px;"><i style="top:18px;left: 34px;"><img src="/resource/front/images/acct.png" alt=""></i><input type="text" placeholder="联系人"></li>*/
/* 				<li style="margin-bottom:41px;"><i style="top:14px;left: 39px;"><img src="/resource/front/images/phone.png" alt=""></i><input type="text" placeholder="联系电话"></li>*/
/* */
/* 			</ul>*/
/* 			<div id="subBt">提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* 	$(function () {*/
/*         $("li.onh").hover(function(){*/
/*         $(this).find('.city2').show();*/
/* 		$(this).find('.c1').hide();*/
/* 	},function(){*/
/* 		$(this).find('.city2').hide();*/
/* 		$(this).find('.c1').show();*/
/* 	});*/
/* */
/*     })*/
/* </script>*/
