<?php

/* admin/crumbs.html */
class __TwigTemplate_7fc09852f8534e80227f3ffad4230227fad87c45403fbd455ff7db183909d470 extends Twig_Template
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
        <a href=\"http://www.my-haimai.com//admin/home/default_index\">首页</a>
        <a href=\"javascript:void(0)\" class=\"crumbs\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
        echo "</a>
        <a><cite>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</cite></a>
    </span>
</div>
<script>
    \$(function () {
        \$('.crumbs').unbind('click').click(function () {
            var val = \$(this).text().replace(/>/, '');
            \$('#sidebar-menu', window.parent.document).find('a').each(function () {
                if (\$(this).text().trim() == val) {
                    var d = \$(this),
                            e = d.next();
                    if (e.is(\".treeview-menu\") && e.is(\":visible\")) {
                        e.slideUp(500, function () {
                            e.removeClass(\"menu-open\")
                        }),
                                e.parent(\"li\").removeClass(\"active\")
                    } else if (e.is(\".treeview-menu\") && !e.is(\":visible\")) {
                        var f = d.parents(\"ul\").first(),
                                g = f.find(\"ul:visible\").slideUp(500);
                        g.removeClass(\"menu-open\");
                        var h = d.parent(\"li\");
                        e.slideDown(500, function () {
                            e.addClass(\"menu-open\"),
                                    f.find(\"li.active\").removeClass(\"active\"),
                                    h.addClass(\"active\");

//\t\t\t\t\t\t\tvar _height1 = \$(window).height() - \$(\"#sidebar-menu >li.active\").position().top - 41;
//\t\t\t\t\t\t\tvar _height2 = \$(\"#sidebar-menu li > ul.menu-open\").height() + 10
//\t\t\t\t\t\t\tif(_height2 > _height1) {
//\t\t\t\t\t\t\t\t\$(\"#sidebar-menu >li > ul.menu-open\").css({
//\t\t\t\t\t\t\t\t\toverflow: \"auto\",
//\t\t\t\t\t\t\t\t\theight: _height1
//\t\t\t\t\t\t\t\t})
//\t\t\t\t\t\t\t}
                        })
                    }
                    e.is(\".treeview-menu\");
                }
            })
        })
    })
</script>
<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/jquery.table2excel.min.js\"></script>-->
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->";
    }

    public function getTemplateName()
    {
        return "admin/crumbs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div id="" style="border: 1px none #fafafa; border-bottom-style: solid;">*/
/*     <span class="layui-breadcrumb" style="display: inline-block; padding: 10px;position:relative;top:-5px;">*/
/*         <a href="http://www.my-haimai.com//admin/home/default_index">首页</a>*/
/*         <a href="javascript:void(0)" class="crumbs">{{category}}</a>*/
/*         <a><cite>{{title}}</cite></a>*/
/*     </span>*/
/* </div>*/
/* <script>*/
/*     $(function () {*/
/*         $('.crumbs').unbind('click').click(function () {*/
/*             var val = $(this).text().replace(/>/, '');*/
/*             $('#sidebar-menu', window.parent.document).find('a').each(function () {*/
/*                 if ($(this).text().trim() == val) {*/
/*                     var d = $(this),*/
/*                             e = d.next();*/
/*                     if (e.is(".treeview-menu") && e.is(":visible")) {*/
/*                         e.slideUp(500, function () {*/
/*                             e.removeClass("menu-open")*/
/*                         }),*/
/*                                 e.parent("li").removeClass("active")*/
/*                     } else if (e.is(".treeview-menu") && !e.is(":visible")) {*/
/*                         var f = d.parents("ul").first(),*/
/*                                 g = f.find("ul:visible").slideUp(500);*/
/*                         g.removeClass("menu-open");*/
/*                         var h = d.parent("li");*/
/*                         e.slideDown(500, function () {*/
/*                             e.addClass("menu-open"),*/
/*                                     f.find("li.active").removeClass("active"),*/
/*                                     h.addClass("active");*/
/* */
/* //							var _height1 = $(window).height() - $("#sidebar-menu >li.active").position().top - 41;*/
/* //							var _height2 = $("#sidebar-menu li > ul.menu-open").height() + 10*/
/* //							if(_height2 > _height1) {*/
/* //								$("#sidebar-menu >li > ul.menu-open").css({*/
/* //									overflow: "auto",*/
/* //									height: _height1*/
/* //								})*/
/* //							}*/
/*                         })*/
/*                     }*/
/*                     e.is(".treeview-menu");*/
/*                 }*/
/*             })*/
/*         })*/
/*     })*/
/* </script>*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/jquery.table2excel.min.js"></script>-->*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
