<?php

/* admin/im/roomcate.html */
class __TwigTemplate_2cba1734cc33c13076de772928155d0838a986e43c84c3e8a7fa749047a9ad6f extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/roomcate.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/im/roomcate.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/im/roomcate.html", 4)->display($context);
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
                        \t{title: \"添加\", type: \"add\"},
                        \t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"导入\", type: \"improt\"},
                            {title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80,title: \"\", type: \"\", sear: \"id\"},
                        {field: \"name\", width: 120, title: \"名称\", type: \"\", sear: \"name\"},
                        {field: \"icon\", width: 120, title: \"类型图标\", type: \"\", sear: \"icon\"},
                        {field: \"sort\", width: 120, title: \"排序\", type: \"\", sear: \"sort\"},
                        {field: \"create_at\", width: 180, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                   \t\t{field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/im/api_roomcate/grid\",
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
                        \t{type: \"edit\", url: '/admin/auser/editroomcate?id='},
                            {type: \"detail\", url: '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/infoRoomCate?id='},
                            {type: \"del\", url: '/admin/im/api_roomcate/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [
                        \t{type: \"add\", url: \"/admin/auser/addroomcate\"},
                        \t{type: \"plDel\",url: '/admin/im/api_roomcate/delete'}
                            //{type: \"improt\", url: \"/upload\"},
                           // {type: \"export\", url: \"/upload\"}
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
        return "admin/im/roomcate.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 54,  66 => 41,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                         	{title: "添加", type: "add"},*/
/*                         	{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "导入", type: "improt"},*/
/*                             {title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80,title: "", type: "", sear: "id"},*/
/*                         {field: "name", width: 120, title: "名称", type: "", sear: "name"},*/
/*                         {field: "icon", width: 120, title: "类型图标", type: "", sear: "icon"},*/
/*                         {field: "sort", width: 120, title: "排序", type: "", sear: "sort"},*/
/*                         {field: "create_at", width: 180, title: "创建时间", type: "time", sear: "create_at"},*/
/*                    		{field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/im/api_roomcate/grid",*/
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
/*                         	{type: "edit", url: '/admin/auser/editroomcate?id='},*/
/*                             {type: "detail", url: '{{base_url}}admin/auser/infoRoomCate?id='},*/
/*                             {type: "del", url: '/admin/im/api_roomcate/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                         	{type: "add", url: "/admin/auser/addroomcate"},*/
/*                         	{type: "plDel",url: '/admin/im/api_roomcate/delete'}*/
/*                             //{type: "improt", url: "/upload"},*/
/*                            // {type: "export", url: "/upload"}*/
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
