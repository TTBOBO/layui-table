<?php

/* admin/currency/proser_type.html */
class __TwigTemplate_b75d41cdcc1e369fbd94fe59053a9b4de68af42c64dac15b79b4f47b077d97fd extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/proser_type.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/proser_type.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/proser_type.html", 4)->display($context);
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
                       btnArr: [{title: \"添加\", type: \"add\"},
                       \t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                                {title: \"高级搜索\", type: \"hSearch\"},
                                {title: \"导入\", type: \"improt\"},
                                {title: \"导出\", type: \"export\" }
\t\t\t\t\t\t\t]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"id\"},
                        {field: \"parent_id\", width: 80, title: \"父类id\", type: \"select\", sear: \"parent_id\",url:\"/admin/pm/api_pro_ser_type/grid\",colKey:\"id\",colName:\"name\"},
                        {field: \"name\", width: 80, title: \"标题\", type: \"\", sear: \"name\"},
                        {field: \"create_at\", width: 80, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/api_pro_ser_type/grid\",
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
                         Event: [{type: \"edit\", url: '/admin/currency/editProser_type?id='},
                          {type: \"detail\", url: '/admin/currency/infoProser_type?id='},
                          {type: \"del\", url: '/admin/pm/api_pro_ser_type/delete'}
                        ]
                    },
                   topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/currency/addProser_type'},
                        \t\t{type: \"plDel\",url: '/admin/pm/api_pro_ser_type/delete'},
//                          {type: \"improt\", url: \"/upload\"},
//                          {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });

        }
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/currency/proser_type.html";
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
/*                        btnArr: [{title: "添加", type: "add"},*/
/*                        			{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                                 {title: "高级搜索", type: "hSearch"},*/
/*                                 {title: "导入", type: "improt"},*/
/*                                 {title: "导出", type: "export" }*/
/* 							]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "ID", type: "", sear: "id"},*/
/*                         {field: "parent_id", width: 80, title: "父类id", type: "select", sear: "parent_id",url:"/admin/pm/api_pro_ser_type/grid",colKey:"id",colName:"name"},*/
/*                         {field: "name", width: 80, title: "标题", type: "", sear: "name"},*/
/*                         {field: "create_at", width: 80, title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/api_pro_ser_type/grid",*/
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
/*                          Event: [{type: "edit", url: '/admin/currency/editProser_type?id='},*/
/*                           {type: "detail", url: '/admin/currency/infoProser_type?id='},*/
/*                           {type: "del", url: '/admin/pm/api_pro_ser_type/delete'}*/
/*                         ]*/
/*                     },*/
/*                    topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/currency/addProser_type'},*/
/*                         		{type: "plDel",url: '/admin/pm/api_pro_ser_type/delete'},*/
/* //                          {type: "improt", url: "/upload"},*/
/* //                          {type: "export", url: "/upload"}*/
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
