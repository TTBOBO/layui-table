<?php

/* admin/crumbs1.html */
class __TwigTemplate_088ea044db50f0ea281cd126735db3bbf24a8fb6966f01cfef44b385fd51b3d4 extends Twig_Template
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
        echo "<div id=\"\" style=\"border: 1px none #fafafa; border-bottom-style: solid;\">
    <span class=\"layui-breadcrumb\" style=\"display: inline-block; padding: 10px;position:relative;top:-5px;\">
        <a href=\"/admin/";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
        echo "</a>
        <a href=\"/admin/";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["controlName"]) ? $context["controlName"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["prevTitle"]) ? $context["prevTitle"] : null), "html", null, true);
        echo "</a>
        <a><cite>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</cite></a>
    </span>
</div>
<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "admin/crumbs1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div id="" style="border: 1px none #fafafa; border-bottom-style: solid;">*/
/*     <span class="layui-breadcrumb" style="display: inline-block; padding: 10px;position:relative;top:-5px;">*/
/*         <a href="/admin/{{model}}">{{category}}</a>*/
/*         <a href="/admin/{{model}}{{controlName}}">{{prevTitle}}</a>*/
/*         <a><cite>{{title}}</cite></a>*/
/*     </span>*/
/* </div>*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* */
/* */
