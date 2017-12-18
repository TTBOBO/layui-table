<?php

/* admin/auser/circle_dynamic.html */
class __TwigTemplate_64234ea6d81353aa10df7ee009d8591ca2544a77d75fc10d4a3b3408763f857d extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/circle_dynamic.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/circle_dynamic.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/circle_dynamic.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
\t\t\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                                {title: \"高级搜索\", type: \"hSearch\"},
                                {title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"\", type: \"\", sear: \"id\"},
                        {field: \"name\", width: 120, title: \"圈子名称\", type: \"\", sear: \"name\"},
                        {field: \"title\", width: 120, title: \"标题\", type: \"\", sear: \"title\"},
                        {field: \"pic\", width: 180, title: \"圈子图片\", type: \"image\"},
                        {field: \"people_num\", width: 180, title: \"成员人数\", type: \"\", sear: \"people_num\"},
                        {field: \"desc\", width: 150, title: \"详细描述\", type: \"time\", sear: \"desc\"},
                        {field: \"create_at\", width: 150, title: \"创建时间\",type: \"time\",sear: \"create_at\"},
                    \t{field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/am/api_circle_dynamics/grid\",
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
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/edit_circle_dynamic?id='},
                            {type: \"detail\", url: '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/info_circle_dynamic?id='},
                            {type: \"del\", url: '/admin/am/api_circle_dynamics/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/add_circle_dynamic'},
                        \t\t{type: \"plDel\",url: '/admin/am/api_circle_dynamics/delete'},
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
        return "admin/auser/circle_dynamic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 58,  84 => 53,  80 => 52,  66 => 41,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	 <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/* 								{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                                 {title: "高级搜索", type: "hSearch"},*/
/*                                 {title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "", type: "", sear: "id"},*/
/*                         {field: "name", width: 120, title: "圈子名称", type: "", sear: "name"},*/
/*                         {field: "title", width: 120, title: "标题", type: "", sear: "title"},*/
/*                         {field: "pic", width: 180, title: "圈子图片", type: "image"},*/
/*                         {field: "people_num", width: 180, title: "成员人数", type: "", sear: "people_num"},*/
/*                         {field: "desc", width: 150, title: "详细描述", type: "time", sear: "desc"},*/
/*                         {field: "create_at", width: 150, title: "创建时间",type: "time",sear: "create_at"},*/
/*                     	{field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/am/api_circle_dynamics/grid",*/
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
/*                         Event: [{type: "edit",url: '{{base_url}}admin/auser/edit_circle_dynamic?id='},*/
/*                             {type: "detail", url: '{{base_url}}admin/auser/info_circle_dynamic?id='},*/
/*                             {type: "del", url: '/admin/am/api_circle_dynamics/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/auser/add_circle_dynamic'},*/
/*                         		{type: "plDel",url: '/admin/am/api_circle_dynamics/delete'},*/
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
