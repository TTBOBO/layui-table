<?php

/* admin/header.html */
class __TwigTemplate_1869ac5dd5edd0500bfa094ce315ae73196c60b287fca5f1d45b1e3a09307f48 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["webname"]) ? $context["webname"] : null), "html", null, true);
        echo "</title>
        <link rel=\"stylesheet\" href=\"/resource/admin/layui/css/layui.css\">
        <link rel=\"stylesheet\" href=\"/resource/admin/js/jslib/bootstrap-3.3.5/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/resource/admin/font-awesome-v4.6.3/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"/resource/admin/css/all-skins.css\">
        <link rel=\"stylesheet\" href=\"/resource/admin/css/base.css\">
        <script src=\"/resource/admin/js/jslib/jquery2.2.4.min.js\"></script>
    </head>
    <script>
var cfg = {'BASE_URL': \"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\"};\t\t//,'UPLOAD_PATH':\"";
        echo twig_escape_filter($this->env, (isset($context["admin_upload_path"]) ? $context["admin_upload_path"] : null), "html", null, true);
        echo "\"
    </script>
    <body class=\"hold-transition skin-blue sidebar-mini\" style=\"overflow:hidden;\">
        <div id=\"ajax-loader\" style=\"cursor: progress; position: fixed; top: -50%; left: -50%; width: 200%; height: 200%; background: #fff; z-index: 10000; overflow: hidden;\">
            <img src=\"/resource/admin/image/ajax-loader.gif\" style=\"position: absolute; top: 0; left: 0; right: 0; bottom: 0; margin: auto;\" />
        </div>
        <div class=\"wrapper\">
            <!--头部信息-->
            <header class=\"main-header\" style=\"background:#3096D1;\">

                <nav class=\"navbar navbar-static-top\">
                    <div>
                        <a href=\"\" class=\"logo\">
                            <span class=\"logo-lg\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["webname"]) ? $context["webname"] : null), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown messages-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-envelope-o \"></i>
                                    <span class=\"label label-success\">4</span>
                                </a>
                            </li>
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-bell-o\"></i>
                                    <span class=\"label label-warning\">10</span>
                                </a>
                            </li>
                            <li class=\"dropdown tasks-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-flag-o\"></i>
                                    <span class=\"label label-danger\">9</span>
                                </a>
                            </li>
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"/resource/admin/image/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\">
                                    <span class=\"hidden-xs\">超级管理员</span>
                                </a>
                                <ul class=\"dropdown-menu pull-right\">
                                    <li><a class=\"menuItem\" data-id=\"userInfo\" href=\"/admin/user/userInfo\"><i class=\"fa fa-user\"></i>个人信息</a></li>
                                    <li><a href=\"javascript:void();\"><i class=\"fa fa-trash-o\"></i>清空缓存</a></li>
                                    <li><a href=\"javascript:void();\"><i class=\"fa fa-paint-brush\"></i>系统设置</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"/admin/login/logout\"><i class=\"ace-icon fa fa-power-off\"></i>安全退出</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--左边导航-->
            <div class=\"main-sidebar\">
                <div class=\"sidebar\">
                    <div class=\"sidebar-toggle-cont\">
                        <a title=\"点击折叠菜单\" class=\"sidebar-toggle\">
                            <span class=\"toggle-icon glyphicon glyphicon-menu-hamburger\"></span>
                        </a>
                    </div>
                    <ul class=\"sidebar-menu\" id=\"sidebar-menu\">
                        <!--<li class=\"header\">导航菜单</li>-->
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["manu_list"]) ? $context["manu_list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "                        <li class=\"treeview ";
            if ($this->getAttribute($context["item"], "active", array())) {
                echo "active";
            }
            echo " \">
                            <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo "\"></i><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</span><i class=\"fa fa-angle-left pull-right\"></i></a>
                            ";
            // line 81
            if ($this->getAttribute($context["item"], "children", array())) {
                // line 82
                echo "                            <ul class=\"treeview-menu ";
                if ($this->getAttribute($context["item"], "menu_open", array())) {
                    echo "menu-open";
                }
                echo "\">
                                ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 84
                    echo "                                <li><a class=\"menuItem\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "href", array()), "html", null, true);
                    echo "\" ><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "icon", array()), "html", null, true);
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
                    if ($this->getAttribute($context["k"], "children", array())) {
                        echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                    }
                    echo "</a>
                                    ";
                    // line 85
                    if ($this->getAttribute($context["k"], "children", array())) {
                        // line 86
                        echo "                                    <ul class=\"treeview-menu\">
                                        ";
                        // line 87
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["k"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 88
                            echo "                                        <li><a class=\"menuItem\" data-id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "id", array()), "html", null, true);
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "href", array()), "html", null, true);
                            echo "\" ><i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "icon", array()), "html", null, true);
                            echo "\"></i>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "title", array()), "html", null, true);
                            echo "</a></li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 90
                        echo "                                    </ul>
                                    ";
                    }
                    // line 92
                    echo "
                                </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                            </ul>
                            ";
            }
            // line 97
            echo "                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                    </ul>
                </div>
            </div>
            <!--中间内容-->
            <div id=\"content-wrapper\" class=\"content-wrapper\">
                <div class=\"content-tabs\">
                    <button class=\"roll-nav roll-left tabLeft\">
                        <i class=\"fa fa-backward\"></i>
                    </button>
                    <nav class=\"page-tabs menuTabs\">
                        <div class=\"page-tabs-content\" style=\"margin-left: 0px;\">
                            <a href=\"javascript:;\" class=\"menuTab active\" data-id=\"/admin/home/default_index\">欢迎首页</a>
                        </div>
                    </nav>
                    <button class=\"roll-nav roll-right tabRight\">
                        <i class=\"fa fa-forward\" style=\"margin-left: 3px;\"></i>
                    </button>
                    <div class=\"btn-group roll-nav roll-right\">
                        <button class=\"dropdown tabClose\" data-toggle=\"dropdown\">
                            页签操作<i class=\"fa fa-caret-down\" style=\"padding-left: 3px;\"></i>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li><a class=\"tabReload\" href=\"javascript:void();\">刷新当前</a></li>
                            <li><a class=\"tabCloseCurrent\" href=\"javascript:void();\">关闭当前</a></li>
                            <li><a class=\"tabCloseAll\" href=\"javascript:void();\">全部关闭</a></li>
                            <li><a class=\"tabCloseOther\" href=\"javascript:void();\">除此之外全部关闭</a></li>
                        </ul>
                    </div>
                    <button class=\"roll-nav roll-right fullscreen\"><i class=\"fa fa-arrows-alt\"></i></button>
                </div>
";
    }

    public function getTemplateName()
    {
        return "admin/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 99,  197 => 97,  193 => 95,  185 => 92,  181 => 90,  166 => 88,  162 => 87,  159 => 86,  157 => 85,  143 => 84,  139 => 83,  132 => 82,  130 => 81,  122 => 80,  115 => 79,  111 => 78,  58 => 28,  40 => 15,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <title>{{title}} - {{webname}}</title>*/
/*         <link rel="stylesheet" href="/resource/admin/layui/css/layui.css">*/
/*         <link rel="stylesheet" href="/resource/admin/js/jslib/bootstrap-3.3.5/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="/resource/admin/font-awesome-v4.6.3/css/font-awesome.min.css">*/
/*         <link rel="stylesheet" href="/resource/admin/css/all-skins.css">*/
/*         <link rel="stylesheet" href="/resource/admin/css/base.css">*/
/*         <script src="/resource/admin/js/jslib/jquery2.2.4.min.js"></script>*/
/*     </head>*/
/*     <script>*/
/* var cfg = {'BASE_URL': "{{base_url}}"};		//,'UPLOAD_PATH':"{{admin_upload_path}}"*/
/*     </script>*/
/*     <body class="hold-transition skin-blue sidebar-mini" style="overflow:hidden;">*/
/*         <div id="ajax-loader" style="cursor: progress; position: fixed; top: -50%; left: -50%; width: 200%; height: 200%; background: #fff; z-index: 10000; overflow: hidden;">*/
/*             <img src="/resource/admin/image/ajax-loader.gif" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; margin: auto;" />*/
/*         </div>*/
/*         <div class="wrapper">*/
/*             <!--头部信息-->*/
/*             <header class="main-header" style="background:#3096D1;">*/
/* */
/*                 <nav class="navbar navbar-static-top">*/
/*                     <div>*/
/*                         <a href="" class="logo">*/
/*                             <span class="logo-lg">{{webname}}</span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="navbar-custom-menu">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="dropdown messages-menu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <i class="fa fa-envelope-o "></i>*/
/*                                     <span class="label label-success">4</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="dropdown notifications-menu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <i class="fa fa-bell-o"></i>*/
/*                                     <span class="label label-warning">10</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="dropdown tasks-menu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <i class="fa fa-flag-o"></i>*/
/*                                     <span class="label label-danger">9</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="dropdown user user-menu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <img src="/resource/admin/image/user2-160x160.jpg" class="user-image" alt="User Image">*/
/*                                     <span class="hidden-xs">超级管理员</span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu pull-right">*/
/*                                     <li><a class="menuItem" data-id="userInfo" href="/admin/user/userInfo"><i class="fa fa-user"></i>个人信息</a></li>*/
/*                                     <li><a href="javascript:void();"><i class="fa fa-trash-o"></i>清空缓存</a></li>*/
/*                                     <li><a href="javascript:void();"><i class="fa fa-paint-brush"></i>系统设置</a></li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li><a href="/admin/login/logout"><i class="ace-icon fa fa-power-off"></i>安全退出</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/*             <!--左边导航-->*/
/*             <div class="main-sidebar">*/
/*                 <div class="sidebar">*/
/*                     <div class="sidebar-toggle-cont">*/
/*                         <a title="点击折叠菜单" class="sidebar-toggle">*/
/*                             <span class="toggle-icon glyphicon glyphicon-menu-hamburger"></span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <ul class="sidebar-menu" id="sidebar-menu">*/
/*                         <!--<li class="header">导航菜单</li>-->*/
/*                         {% for item in manu_list %}*/
/*                         <li class="treeview {% if item.active %}active{% endif %} ">*/
/*                             <a href="{{item.href}}"><i class="{{item.icon}}"></i><span>{{item.title}}</span><i class="fa fa-angle-left pull-right"></i></a>*/
/*                             {% if item.children %}*/
/*                             <ul class="treeview-menu {% if item.menu_open %}menu-open{% endif %}">*/
/*                                 {% for k in item.children %}*/
/*                                 <li><a class="menuItem" data-id="{{k.id}}" href="{{k.href}}" ><i class="{{k.icon}}"></i>{{k.title}}{% if k.children %}<i class="fa fa-angle-left pull-right"></i>{% endif %}</a>*/
/*                                     {% if k.children %}*/
/*                                     <ul class="treeview-menu">*/
/*                                         {% for j in k.children %}*/
/*                                         <li><a class="menuItem" data-id="{{j.id}}" href="{{j.href}}" ><i class="{{j.icon}}"></i>{{j.title}}</a></li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                     {% endif %}*/
/* */
/*                                 </li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                             {% endif %}*/
/*                         </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <!--中间内容-->*/
/*             <div id="content-wrapper" class="content-wrapper">*/
/*                 <div class="content-tabs">*/
/*                     <button class="roll-nav roll-left tabLeft">*/
/*                         <i class="fa fa-backward"></i>*/
/*                     </button>*/
/*                     <nav class="page-tabs menuTabs">*/
/*                         <div class="page-tabs-content" style="margin-left: 0px;">*/
/*                             <a href="javascript:;" class="menuTab active" data-id="/admin/home/default_index">欢迎首页</a>*/
/*                         </div>*/
/*                     </nav>*/
/*                     <button class="roll-nav roll-right tabRight">*/
/*                         <i class="fa fa-forward" style="margin-left: 3px;"></i>*/
/*                     </button>*/
/*                     <div class="btn-group roll-nav roll-right">*/
/*                         <button class="dropdown tabClose" data-toggle="dropdown">*/
/*                             页签操作<i class="fa fa-caret-down" style="padding-left: 3px;"></i>*/
/*                         </button>*/
/*                         <ul class="dropdown-menu dropdown-menu-right">*/
/*                             <li><a class="tabReload" href="javascript:void();">刷新当前</a></li>*/
/*                             <li><a class="tabCloseCurrent" href="javascript:void();">关闭当前</a></li>*/
/*                             <li><a class="tabCloseAll" href="javascript:void();">全部关闭</a></li>*/
/*                             <li><a class="tabCloseOther" href="javascript:void();">除此之外全部关闭</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <button class="roll-nav roll-right fullscreen"><i class="fa fa-arrows-alt"></i></button>*/
/*                 </div>*/
/* */
