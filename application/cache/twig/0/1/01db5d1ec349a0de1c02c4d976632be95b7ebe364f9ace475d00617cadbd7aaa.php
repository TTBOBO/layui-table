<?php

/* admin/auser/marking_people.html */
class __TwigTemplate_8c4000ff77ba8ac25f52abfaecc8a435055a9396824d56a3f639d0d18b03dc6a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/marking_people.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/marking_people.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/marking_people.html", 4)->display($context);
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
                        \t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                           \t\t{title: \"高级搜索\", type: \"hSearch\"},
                            \t{title: \"导入\", type: \"improt\"},
                           \t\t{title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"id\", type: \"\", sear: \"id\"},
                        {field: \"name\", width: 120, title: \"发票名称\", type: \"\", sear: \"name\"},
                        {field: \"nickname\", width: 120, title: \"公司名\", type: \"\", sear: \"nickname\",},
                        {field: \"position\", width: 100, title: \"金额\", type: \"\", sear: \"position\"},
                        {field: \"tel\", width: 120, title: \"税点\", type: \"\", sear: \"tel\"},
                        {field: \"mobile\", width: 80, title: \"类型\", type: \"\", sear: \"mobile\"},
                        {field: \"email\", width: 100, title: \"发票图片\", type: \"\", sear: \"email\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right' }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/am/Api_marking_people/grid\",
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
                        Event: [{type: \"edit\",url: '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/edit_marking_people?id='},
                            {type: \"detail\", url: '/admin/auser/info_marking_people/?id='},
                            {type: \"del\", url: '/admin/am/Api_marking_people/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/add_marking_people'},
                        \t\t{type: \"plDel\",url: '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "am/Api_marking_people/delete'},
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
        return "admin/auser/marking_people.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 60,  87 => 59,  78 => 53,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                         		{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                            		{title: "高级搜索", type: "hSearch"},*/
/*                             	{title: "导入", type: "improt"},*/
/*                            		{title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "id", type: "", sear: "id"},*/
/*                         {field: "name", width: 120, title: "发票名称", type: "", sear: "name"},*/
/*                         {field: "nickname", width: 120, title: "公司名", type: "", sear: "nickname",},*/
/*                         {field: "position", width: 100, title: "金额", type: "", sear: "position"},*/
/*                         {field: "tel", width: 120, title: "税点", type: "", sear: "tel"},*/
/*                         {field: "mobile", width: 80, title: "类型", type: "", sear: "mobile"},*/
/*                         {field: "email", width: 100, title: "发票图片", type: "", sear: "email"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right' }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/am/Api_marking_people/grid",*/
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
/*                         Event: [{type: "edit",url: '{{base_url}}admin/auser/edit_marking_people?id='},*/
/*                             {type: "detail", url: '/admin/auser/info_marking_people/?id='},*/
/*                             {type: "del", url: '/admin/am/Api_marking_people/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/auser/add_marking_people'},*/
/*                         		{type: "plDel",url: '{{base_url}}am/Api_marking_people/delete'},*/
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
/* */
/* */
