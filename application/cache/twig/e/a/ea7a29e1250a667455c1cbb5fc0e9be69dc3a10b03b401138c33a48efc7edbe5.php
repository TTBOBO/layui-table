<?php

/* admin/auser/channel_type.html */
class __TwigTemplate_b6eea3633295a7818c14b160e8ae090f919d1c05140e227e5ca1bf17f1e55786 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/channel_type.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/channel_type.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/channel_type.html", 4)->display($context);
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
                        btnArr: [
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"添加\", type: \"add\"},
                            {title: \"导入\", type: \"improt\"},
                            {title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"id\"},
                        {field: \"name\", width: 80, title: \"渠道类型\", type: \"text\", sear: \"name\"},
                        {field: \"create_at\", width: 120, title: \"创建时间\", type: \"time\", sear: \"read_at\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/im/Api_channel_cate/grid\",
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
                       \t \t{type: \"edit\", url: '/admin/auser/edit_channel_type?id='},
                       \t \t{type: \"detail\", url: '/admin/auser/info_channel_type?id='},
                            {type: \"del\", url: '/admin/im/Api_channel_cate/delete'}
                            
                        ]
                    },
                    topBtnActive: {
                        Event: [
                            {type: \"add\", url: '/admin/auser/add_channel_type'},
                            {type: \"plDel\",url: '/admin/im/Api_channel_cate/delete'}
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
        return "admin/auser/channel_type.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                         btnArr: [*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "添加", type: "add"},*/
/*                             {title: "导入", type: "improt"},*/
/*                             {title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "ID", type: "", sear: "id"},*/
/*                         {field: "name", width: 80, title: "渠道类型", type: "text", sear: "name"},*/
/*                         {field: "create_at", width: 120, title: "创建时间", type: "time", sear: "read_at"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/im/Api_channel_cate/grid",*/
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
/*                        	 	{type: "edit", url: '/admin/auser/edit_channel_type?id='},*/
/*                        	 	{type: "detail", url: '/admin/auser/info_channel_type?id='},*/
/*                             {type: "del", url: '/admin/im/Api_channel_cate/delete'}*/
/*                             */
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                             {type: "add", url: '/admin/auser/add_channel_type'},*/
/*                             {type: "plDel",url: '/admin/im/Api_channel_cate/delete'}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
