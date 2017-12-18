<?php

/* admin/currency/pm_region1.html */
class __TwigTemplate_4f5c2666ab33c890dc40b8c74faff67e270eed6b4e0b61aa54e06be6b774d82d extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/pm_region1.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/pm_region1.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/pm_region1.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script>
    ykp.defineClass(['element', \"jquery\", 'laytpl'], {
        init: function () {
            var it = this;
            //初始化列表
            it.initTabel();
        },
        initTabel: function () {
            hm.load(function (option) {
                var table = option.table;
                var public = option.public;
                public.showTable({
                    topTool: {
                        btnArr: [{title: \"添加\",type: \"add\"},
                        {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"导入\", type: \"improt\"},
                            {title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"region_id\", width: 80, sort: true, title: \"编号\", type: \"\", sear: \"region_id\"},
                        {field: \"region_code\", width: 120, title: \"省市区(县)代号\", type: \"\", sear: \"region_code\"},
                        {field: \"region_name\", width: 120, title: \"省市区(县)名称\", type: \"\", sear: \"region_name\",},
                        {field: \"parent_id\", width: 100, title: \"父级id\", type: \"\", sear: \"parent_id\"},
                        {field: \"region_level\", width: 120, title: \"省市区(县)级别\", type: \"\", sear: \"region_level\"},
                        {field: \"region_order\", width: 80, title: \"排序\", type: \"\", sear: \"region_order\"},
                        {field: \"region_name_en\", width: 100, title: \"英文名称\", sear: \"region_name_en\"},
                        {field: \"region_shortname_en\", width: 100,  title: \"英文简写\", type: \"\", sear: \"region_shortname_en\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/Api_pm_region1/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"region_id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/currency/info_region1/?id='},
                           {type: \"edit\",url: '";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/edit_region1?id='},
                           {type: \"del\", url: '/admin/pm/Api_pm_region1/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/add_region1'},
                        {type: \"plDel\",url: '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/pm/Api_pm_region1/delete'},
                           {type: \"improt\", url: \"/upload\"},
                            {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });

        }
    });
</script>
</body>

</html>




";
    }

    public function getTemplateName()
    {
        return "admin/currency/pm_region1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 62,  89 => 61,  81 => 56,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script>*/
/*     ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/*         init: function () {*/
/*             var it = this;*/
/*             //初始化列表*/
/*             it.initTabel();*/
/*         },*/
/*         initTabel: function () {*/
/*             hm.load(function (option) {*/
/*                 var table = option.table;*/
/*                 var public = option.public;*/
/*                 public.showTable({*/
/*                     topTool: {*/
/*                         btnArr: [{title: "添加",type: "add"},*/
/*                         {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "导入", type: "improt"},*/
/*                             {title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "region_id", width: 80, sort: true, title: "编号", type: "", sear: "region_id"},*/
/*                         {field: "region_code", width: 120, title: "省市区(县)代号", type: "", sear: "region_code"},*/
/*                         {field: "region_name", width: 120, title: "省市区(县)名称", type: "", sear: "region_name",},*/
/*                         {field: "parent_id", width: 100, title: "父级id", type: "", sear: "parent_id"},*/
/*                         {field: "region_level", width: 120, title: "省市区(县)级别", type: "", sear: "region_level"},*/
/*                         {field: "region_order", width: 80, title: "排序", type: "", sear: "region_order"},*/
/*                         {field: "region_name_en", width: 100, title: "英文名称", sear: "region_name_en"},*/
/*                         {field: "region_shortname_en", width: 100,  title: "英文简写", type: "", sear: "region_shortname_en"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/Api_pm_region1/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "region_id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/currency/info_region1/?id='},*/
/*                            {type: "edit",url: '{{base_url}}admin/currency/edit_region1?id='},*/
/*                            {type: "del", url: '/admin/pm/Api_pm_region1/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/currency/add_region1'},*/
/*                         {type: "plDel",url: '{{base_url}}admin/pm/Api_pm_region1/delete'},*/
/*                            {type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
/* */
/* */
