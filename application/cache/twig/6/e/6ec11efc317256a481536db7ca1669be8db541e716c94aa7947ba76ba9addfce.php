<?php

/* admin/product/product_list.html */
class __TwigTemplate_d5dbc9280b93134f81b757124dbefdba94219fc567be14ec1e060a9b009805eb extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/product_list.html", 1)->display($context);
        // line 2
        echo "<style>

</style>
";
        // line 5
        $this->loadTemplate("admin/crumbs.html", "admin/product/product_list.html", 5)->display($context);
        // line 6
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 7
        $this->loadTemplate("admin/import.html", "admin/product/product_list.html", 7)->display($context);
        // line 8
        echo "<script type=\"text/html\" id=\"barDemo\">
    <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
    <a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
    <a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<script src=\"/resource/admin/js/jslib/jquery.table2excel.min.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
<script>

</script>
<h1>产品管理分为;  1.虚拟产品，2.实体产品，3.长租产品</h1>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/product/product_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* */
/* </style>*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/*     <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/*     <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/*     <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <script src="/resource/admin/js/jslib/jquery.table2excel.min.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
/* <script>*/
/* */
/* </script>*/
/* <h1>产品管理分为;  1.虚拟产品，2.实体产品，3.长租产品</h1>*/
/* </body>*/
/* */
/* </html>*/
