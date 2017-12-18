<?php

/* admin/auser/banner_type.html */
class __TwigTemplate_13c1b87a25877b1d0886958df1389b74065e5c256bdf80b9e3dd581c47fde201 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/banner_type.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/banner_type.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/banner_type.html", 4)->display($context);
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
                        btnArr: [
                            {title: \"高级搜索\", type: \"hSearch\"},
\t\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\",url: \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del\"},
                            {title: \"添加\", type: \"add\", url: \"/admin/product/addService\"},
                            {title: \"导入\", type: \"improt\"},
                            {title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"广告类型ID\", type: \"\", sear: \"id\"},
                        {field: \"name\", width: 120, title: \"广告类型名称\", type: \"\", sear: \"name\"},
                        {field: \"description\", width: 120, title: \"广告类型描述\", type: \"\", sear: \"description\",},
                        {field: \"create_at\", width: 180, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                    \t{field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/am/Api_ads_type/grid \",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                        \t{type: \"edit\", url: '/admin/auser/editbanner_type?id='},
                            {type: \"detail\", url: '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/info_banner_type?id='},
                            {type: \"del\", url: '/admin/am/Api_ads_type/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [
                        \t{type: \"add\", url: '/admin/auser/addbanner_type'},
                        \t{type: \"plDel\",url: '/admin/am/Api_ads_type/delete'},
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
        return "admin/auser/banner_type.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 53,  68 => 40,  50 => 25,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                         btnArr: [*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/* 							{title: "批量删除",type: "plDel",class: "layui-btn-danger",url: "{{base_url}}admin/api_product/del"},*/
/*                             {title: "添加", type: "add", url: "/admin/product/addService"},*/
/*                             {title: "导入", type: "improt"},*/
/*                             {title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "广告类型ID", type: "", sear: "id"},*/
/*                         {field: "name", width: 120, title: "广告类型名称", type: "", sear: "name"},*/
/*                         {field: "description", width: 120, title: "广告类型描述", type: "", sear: "description",},*/
/*                         {field: "create_at", width: 180, title: "创建时间", type: "time", sear: "create_at"},*/
/*                     	{field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/am/Api_ads_type/grid ",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                         	{type: "edit", url: '/admin/auser/editbanner_type?id='},*/
/*                             {type: "detail", url: '{{base_url}}admin/auser/info_banner_type?id='},*/
/*                             {type: "del", url: '/admin/am/Api_ads_type/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                         	{type: "add", url: '/admin/auser/addbanner_type'},*/
/*                         	{type: "plDel",url: '/admin/am/Api_ads_type/delete'},*/
/*                             {type: "improt", url: "/upload"},*/
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
