<?php

/* front/hmspace/i-ioffice.html */
class __TwigTemplate_106f7c5a07579a26435a7fb5a3cd450adc5a069ba8cffeade6f2de81496fe6e9 extends Twig_Template
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
        $this->loadTemplate("front/i_header.html", "front/hmspace/i-ioffice.html", 1)->display($context);
        // line 2
        echo "
\t<div class=\"store\">
\t\t<div id=\"slideBox\" class=\"slideBox\">
\t\t\t<div class=\"hd\">
\t\t\t\t<ul><li></li><li></li><li></li></ul>
\t\t\t</div>
\t\t\t<div class=\"bd\">
\t\t\t\t<ul>
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["index"] => $context["data"]) {
            // line 11
            echo "\t\t\t\t\t<li><!-- <a href=\"javascript:;\"> --><img src=\"../resource/home/images/ibanner.jpg\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "\"/><!-- </a> --></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<a class=\"prev\" href=\"javascript:void(0)\"></a>
\t\t\t<a class=\"next\" href=\"javascript:void(0)\"></a>
\t\t</div>
\t\t<div class=\"pulmak\">
\t\t\t<div class=\"container\">
\t\t\t\t<p>加入<span>IOFFICE</span>生态合作伙伴计划<br>开创新业务获取技术、资源实现更快速成长</p>
\t\t\t</div>
\t\t\t<div class=\"mark\"></div>
\t\t</div>


\t\t<div class=\"container rightimcon\">
\t\t\t<div class=\"rightim\">
\t\t\t\t<p class=\"\">深圳 IOFFICE 空间（9）</p>
\t\t\t\t<div class=\"scol\">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"../resource/home/images/ib1.png\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\"><p>南山区 泰邦科技大厦</p><div class=\"mark\"></div></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"../resource/home/images/ib2.png\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\"><p>南山区 泰邦科技大厦</p><div class=\"mark\"></div></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"../resource/home/images/ib3.png\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\"><p>南山区 泰邦科技大厦</p><div class=\"mark\"></div></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"../resource/home/images/ib1.png\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\"><p>南山区 泰邦科技大厦</p><div class=\"mark\"></div></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"../resource/home/images/ib2.png\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\"><p>南山区 泰邦科技大厦</p><div class=\"mark\"></div></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"../resource/home/images/ib3.png\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\"><p>南山区 泰邦科技大厦</p><div class=\"mark\"></div></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mark\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
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

\t\t<div class=\"ser iser\">
\t\t\t<div class=\"tgrid\">
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/s1.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>经理室</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/s2.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>独立办公室</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/s3.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>联合办公工位</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/s4.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>会议室</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/s5.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>会客室</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/s6.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>物品寄存</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tgrid\">
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/sb1.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>虚拟办公室</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/sb2.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>地址挂靠</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/sb3.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>电话秘书</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/sb4.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>行政文秘</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/sb5.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>商务支持</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tl\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"icon\"><img src=\"../resource/home/images/sb6.png\" alt=\"\"></div>
\t\t\t\t\t\t<p>更多more</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"newtainer\">
\t\t\t<div class=\"icurtit\">
\t\t\t\t渠道资源（<span>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datacom"]) ? $context["datacom"] : null), "data", array()), "records", array()), "html", null, true);
        echo "</span>）
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"on\">招商渠道</li><li>营销渠道</li><li>分销渠道</li><li>供应渠道</li>
\t\t\t\t</ul>
\t\t\t\t<a href=\"#\" class=\"more\">更多></a>
\t\t\t</div>
\t\t\t<div class=\"com\" id=\"com\">
\t\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["datacom"]) ? $context["datacom"] : null), "data", array()), "rows", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["index"] => $context["data"]) {
            // line 164
            echo "\t\t\t\t";
            if (($this->getAttribute($context["loop"], "index", array()) < 9)) {
                echo "  
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "logo", array()), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<p>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "description", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"mark\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 178
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\t\t</div>

\t\t\t<div class=\"icurtit\">
\t\t\t\t活动路演（<span>";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dataly"]) ? $context["dataly"] : null), "data", array()), "records", array()), "html", null, true);
        echo "</span>）
\t\t\t\t<a href=\"#\" class=\"more\">更多></a>
\t\t\t</div>
\t\t\t<div class=\"ly\">
\t\t\t\t";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["dataly"]) ? $context["dataly"] : null), "data", array()), "rows", array()));
        foreach ($context['_seq'] as $context["index"] => $context["data"]) {
            // line 187
            echo "\t\t\t\t\t";
            if (($context["index"] == "0")) {
                // line 188
                echo "\t\t\t\t\t<div class=\"item big\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t<img src=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "thumb", array()), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p>";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<div class=\"mark\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 200
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "\t\t\t\t<div class=\"itemr\">
\t\t\t\t";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["dataly"]) ? $context["dataly"] : null), "data", array()), "rows", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["index"] => $context["data"]) {
            // line 203
            echo "\t\t\t\t\t";
            if (($context["index"] != "0")) {
                // line 204
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["loop"], "index", array()) < 6)) {
                    echo "  
\t\t\t\t\t\t<div class=\"item big sm\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "thumb", array()), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t<p>";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"mark\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 217
                echo "\t\t\t\t\t";
            }
            // line 218
            echo "\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t\t\t\t</div>
                <div id=\"summary\"></div>
\t\t\t</div>

\t\t\t<div class=\"icurtit\">
\t\t\t\t优质项目（<span>";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datayz"]) ? $context["datayz"] : null), "data", array()), "records", array()), "html", null, true);
        echo "</span>）
\t\t\t\t<a href=\"#\" class=\"more\">更多></a>
\t\t\t</div>
\t\t\t<div class=\"yz\">
\t\t\t\t";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["datayz"]) ? $context["datayz"] : null), "data", array()), "rows", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["index"] => $context["data"]) {
            // line 229
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["loop"], "index", array()) < 7)) {
                echo "  
\t\t\t\t\t<div class=item>
\t\t                <a href=#>
\t\t\t                <div class=img-box>
\t\t\t\t                <img src=\"";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "logo", array()), "html", null, true);
                echo "\" alt=''>
\t\t\t\t                <div class=info>
\t\t\t\t                    <p>";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "</p>
\t\t\t\t                    <div class=mark></div>
\t\t\t\t                </div>
\t\t\t                </div>
\t\t                </a>
\t                </div>
\t                ";
            }
            // line 242
            echo "\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "\t\t\t</div>

\t\t\t<div class=\"icurtit\">
\t\t\t\t加入会员可获资源
\t\t\t</div>
\t\t\t<div class=\"static\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<p>";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "data", array()), "channelTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>渠道服务商</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<p>";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "data", array()), "finTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>融资服务商</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<p>";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "data", array()), "billTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>贷款服务商</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<p>";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "data", array()), "servivceTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>企服服务商</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<p>";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "data", array()), "spaceTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>空间服务</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<p>";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "data", array()), "instustryTotal", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>行业资源</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"\" class=\"stabtn\">立即加入</a>

\t\t\t<div class=\"icurtit\">
\t\t\t\t伙伴空间（<span>2300</span>）
\t\t\t</div>
\t\t\t<div class=\"hb\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"../resource/home/images/628.png\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<p>优客办公 共享空间办公</p>
\t\t\t\t\t\t\t<div class=\"mark\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"title\">优客广场<i>白金卡9折</i></div>
\t\t\t\t\t<p class=\"wor\">广州天河区民族广场泰邦大厦45层</p>
\t\t\t\t\t<p class=\"wor\"><span>办公室（24间）</span><span>办公室（24间）</span></p>
\t\t\t\t\t<p><a href=\"\">加入会员</a><a href=\"\">空间预定</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"../resource/home/images/629.png\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<p>优客办公 共享空间办公</p>
\t\t\t\t\t\t\t<div class=\"mark\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"title\">优客广场<i>白金卡9折</i></div>
\t\t\t\t\t<p class=\"wor\">广州天河区民族广场泰邦大厦45层</p>
\t\t\t\t\t<p class=\"wor\"><span>办公室（24间）</span><span>办公室（24间）</span></p>
\t\t\t\t\t<p><a href=\"\">加入会员</a><a href=\"\">空间预定</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"../resource/home/images/628.png\" alt=\"\">
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<p>优客办公 共享空间办公</p>
\t\t\t\t\t\t\t<div class=\"mark\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"title\">优客广场<i>白金卡9折</i></div>
\t\t\t\t\t<p class=\"wor\">广州天河区民族广场泰邦大厦45层</p>
\t\t\t\t\t<p class=\"wor\"><span>办公室（24间）</span><span>办公室（24间）</span></p>
\t\t\t\t\t<p><a href=\"\">加入会员</a><a href=\"\">空间预定</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 328
        $this->loadTemplate("front/footer.html", "front/hmspace/i-ioffice.html", 328)->display($context);
        // line 329
        echo "\t<script src=\"../resource/home/js/jquery.SuperSlide.js\"></script>
\t<script>
\t\t// jQuery(\".slideBox\").slide({mainCell:\".bd ul\",effect:\"fold\",autoPlay:true,delayTime:1000});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "front/hmspace/i-ioffice.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 329,  538 => 328,  477 => 270,  470 => 266,  463 => 262,  456 => 258,  449 => 254,  442 => 250,  433 => 243,  419 => 242,  409 => 235,  404 => 233,  396 => 229,  379 => 228,  372 => 224,  365 => 219,  351 => 218,  348 => 217,  338 => 210,  333 => 208,  325 => 204,  322 => 203,  305 => 202,  302 => 201,  296 => 200,  286 => 193,  281 => 191,  276 => 188,  273 => 187,  269 => 186,  262 => 182,  257 => 179,  243 => 178,  233 => 171,  229 => 170,  224 => 168,  216 => 164,  199 => 163,  189 => 156,  44 => 13,  35 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% include 'front/i_header.html' %}*/
/* */
/* 	<div class="store">*/
/* 		<div id="slideBox" class="slideBox">*/
/* 			<div class="hd">*/
/* 				<ul><li></li><li></li><li></li></ul>*/
/* 			</div>*/
/* 			<div class="bd">*/
/* 				<ul>*/
/* 				{% for index, data in banner.data.rows %}*/
/* 					<li><!-- <a href="javascript:;"> --><img src="../resource/home/images/ibanner.jpg" alt="{{data.name}}"/><!-- </a> --></li>*/
/* 				{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<a class="prev" href="javascript:void(0)"></a>*/
/* 			<a class="next" href="javascript:void(0)"></a>*/
/* 		</div>*/
/* 		<div class="pulmak">*/
/* 			<div class="container">*/
/* 				<p>加入<span>IOFFICE</span>生态合作伙伴计划<br>开创新业务获取技术、资源实现更快速成长</p>*/
/* 			</div>*/
/* 			<div class="mark"></div>*/
/* 		</div>*/
/* */
/* */
/* 		<div class="container rightimcon">*/
/* 			<div class="rightim">*/
/* 				<p class="">深圳 IOFFICE 空间（9）</p>*/
/* 				<div class="scol">*/
/* 					<div class="img-box">*/
/* 						<img src="../resource/home/images/ib1.png" alt="">*/
/* 						<div class="info"><p>南山区 泰邦科技大厦</p><div class="mark"></div></div>*/
/* 					</div>*/
/* 					<div class="img-box">*/
/* 						<img src="../resource/home/images/ib2.png" alt="">*/
/* 						<div class="info"><p>南山区 泰邦科技大厦</p><div class="mark"></div></div>*/
/* 					</div>*/
/* 					<div class="img-box">*/
/* 						<img src="../resource/home/images/ib3.png" alt="">*/
/* 						<div class="info"><p>南山区 泰邦科技大厦</p><div class="mark"></div></div>*/
/* 					</div>*/
/* 					<div class="img-box">*/
/* 						<img src="../resource/home/images/ib1.png" alt="">*/
/* 						<div class="info"><p>南山区 泰邦科技大厦</p><div class="mark"></div></div>*/
/* 					</div>*/
/* 					<div class="img-box">*/
/* 						<img src="../resource/home/images/ib2.png" alt="">*/
/* 						<div class="info"><p>南山区 泰邦科技大厦</p><div class="mark"></div></div>*/
/* 					</div>*/
/* 					<div class="img-box">*/
/* 						<img src="../resource/home/images/ib3.png" alt="">*/
/* 						<div class="info"><p>南山区 泰邦科技大厦</p><div class="mark"></div></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="mark"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="container">*/
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
/* */
/* 		<div class="ser iser">*/
/* 			<div class="tgrid">*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/s1.png" alt=""></div>*/
/* 						<p>经理室</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/s2.png" alt=""></div>*/
/* 						<p>独立办公室</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/s3.png" alt=""></div>*/
/* 						<p>联合办公工位</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/s4.png" alt=""></div>*/
/* 						<p>会议室</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/s5.png" alt=""></div>*/
/* 						<p>会客室</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/s6.png" alt=""></div>*/
/* 						<p>物品寄存</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="tgrid">*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/sb1.png" alt=""></div>*/
/* 						<p>虚拟办公室</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/sb2.png" alt=""></div>*/
/* 						<p>地址挂靠</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/sb3.png" alt=""></div>*/
/* 						<p>电话秘书</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/sb4.png" alt=""></div>*/
/* 						<p>行政文秘</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/sb5.png" alt=""></div>*/
/* 						<p>商务支持</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="tl">*/
/* 					<div class="item">*/
/* 						<div class="icon"><img src="../resource/home/images/sb6.png" alt=""></div>*/
/* 						<p>更多more</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="newtainer">*/
/* 			<div class="icurtit">*/
/* 				渠道资源（<span>{{datacom.data.records}}</span>）*/
/* 				<ul>*/
/* 					<li class="on">招商渠道</li><li>营销渠道</li><li>分销渠道</li><li>供应渠道</li>*/
/* 				</ul>*/
/* 				<a href="#" class="more">更多></a>*/
/* 			</div>*/
/* 			<div class="com" id="com">*/
/* 			{% for index, data in datacom.data.rows %}*/
/* 				{% if loop.index < 9 %}  */
/* 				<div class="item">*/
/* 					<a href="">*/
/* 					<div class="img-box">*/
/* 						<img src="{{data.logo}}" alt="">*/
/* 						<div class="info">*/
/* 							<p>{{data.name}}</p>*/
/* 							<p>{{data.description}}</p>*/
/* 							<div class="mark"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					</a>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			</div>*/
/* */
/* 			<div class="icurtit">*/
/* 				活动路演（<span>{{dataly.data.records}}</span>）*/
/* 				<a href="#" class="more">更多></a>*/
/* 			</div>*/
/* 			<div class="ly">*/
/* 				{% for index, data in dataly.data.rows %}*/
/* 					{% if index == '0' %}*/
/* 					<div class="item big">*/
/* 						<a href="">*/
/* 						<div class="img-box">*/
/* 							<img src="{{data.thumb}}" alt="">*/
/* 							<div class="info">*/
/* 								<p>{{data.title}}</p>*/
/* 								<div class="mark"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						</a>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 				<div class="itemr">*/
/* 				{% for index, data in dataly.data.rows %}*/
/* 					{% if index != '0' %}*/
/* 						{% if loop.index < 6 %}  */
/* 						<div class="item big sm">*/
/* 							<a href="">*/
/* 							<div class="img-box">*/
/* 								<img src="{{data.thumb}}" alt="">*/
/* 								<div class="info">*/
/* 									<p>{{data.title}}</p>*/
/* 									<div class="mark"></div>*/
/* 								</div>*/
/* 							</div>*/
/* 							</a>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 				</div>*/
/*                 <div id="summary"></div>*/
/* 			</div>*/
/* */
/* 			<div class="icurtit">*/
/* 				优质项目（<span>{{datayz.data.records}}</span>）*/
/* 				<a href="#" class="more">更多></a>*/
/* 			</div>*/
/* 			<div class="yz">*/
/* 				{% for index, data in datayz.data.rows %}*/
/* 					{% if loop.index < 7 %}  */
/* 					<div class=item>*/
/* 		                <a href=#>*/
/* 			                <div class=img-box>*/
/* 				                <img src="{{data.logo}}" alt=''>*/
/* 				                <div class=info>*/
/* 				                    <p>{{data.name}}</p>*/
/* 				                    <div class=mark></div>*/
/* 				                </div>*/
/* 			                </div>*/
/* 		                </a>*/
/* 	                </div>*/
/* 	                {% endif %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* */
/* 			<div class="icurtit">*/
/* 				加入会员可获资源*/
/* 			</div>*/
/* 			<div class="static">*/
/* 				<div class="item">*/
/* 					<p>{{resource.data.channelTotal}}</p>*/
/* 					<p>渠道服务商</p>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<p>{{resource.data.finTotal}}</p>*/
/* 					<p>融资服务商</p>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<p>{{resource.data.billTotal}}</p>*/
/* 					<p>贷款服务商</p>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<p>{{resource.data.servivceTotal}}</p>*/
/* 					<p>企服服务商</p>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<p>{{resource.data.spaceTotal}}</p>*/
/* 					<p>空间服务</p>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<p>{{resource.data.instustryTotal}}</p>*/
/* 					<p>行业资源</p>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a href="" class="stabtn">立即加入</a>*/
/* */
/* 			<div class="icurtit">*/
/* 				伙伴空间（<span>2300</span>）*/
/* 			</div>*/
/* 			<div class="hb">*/
/* 				<div class="item">*/
/* 					<a href="">*/
/* 					<div class="img-box">*/
/* 						<img src="../resource/home/images/628.png" alt="">*/
/* 						<div class="info">*/
/* 							<p>优客办公 共享空间办公</p>*/
/* 							<div class="mark"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					</a>*/
/* 					<div class="title">优客广场<i>白金卡9折</i></div>*/
/* 					<p class="wor">广州天河区民族广场泰邦大厦45层</p>*/
/* 					<p class="wor"><span>办公室（24间）</span><span>办公室（24间）</span></p>*/
/* 					<p><a href="">加入会员</a><a href="">空间预定</a></p>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<a href="">*/
/* 					<div class="img-box">*/
/* 						<img src="../resource/home/images/629.png" alt="">*/
/* 						<div class="info">*/
/* 							<p>优客办公 共享空间办公</p>*/
/* 							<div class="mark"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					</a>*/
/* 					<div class="title">优客广场<i>白金卡9折</i></div>*/
/* 					<p class="wor">广州天河区民族广场泰邦大厦45层</p>*/
/* 					<p class="wor"><span>办公室（24间）</span><span>办公室（24间）</span></p>*/
/* 					<p><a href="">加入会员</a><a href="">空间预定</a></p>*/
/* 				</div>*/
/* 				<div class="item">*/
/* 					<a href="">*/
/* 					<div class="img-box">*/
/* 						<img src="../resource/home/images/628.png" alt="">*/
/* 						<div class="info">*/
/* 							<p>优客办公 共享空间办公</p>*/
/* 							<div class="mark"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					</a>*/
/* 					<div class="title">优客广场<i>白金卡9折</i></div>*/
/* 					<p class="wor">广州天河区民族广场泰邦大厦45层</p>*/
/* 					<p class="wor"><span>办公室（24间）</span><span>办公室（24间）</span></p>*/
/* 					<p><a href="">加入会员</a><a href="">空间预定</a></p>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% include 'front/footer.html' %}*/
/* 	<script src="../resource/home/js/jquery.SuperSlide.js"></script>*/
/* 	<script>*/
/* 		// jQuery(".slideBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true,delayTime:1000});*/
/* 	</script>*/
/* */
