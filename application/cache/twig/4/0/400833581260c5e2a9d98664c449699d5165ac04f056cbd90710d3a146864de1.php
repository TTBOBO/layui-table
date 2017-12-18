<?php

/* admin/currency/behavior.html */
class __TwigTemplate_4472997a35497a90358f41d1de4f86ed63a0eb9a09bfb11fb7b9a650bb5ee538 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/behavior.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/behavior.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/behavior.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<!-- 其他服务管理 -->
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
                            {title: \"高级搜索\", type: \"hSearch\", },
//                          {title: \"导入\", type: \"improt\", },
//                          {title: \"导出\", type: \"export\", }
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"主键\",type: \"\", sear: \"id\"},
                        {field: \"name\", width: 80, title: \"名称\", type: \"\", sear: \"name\"},
                        {field: \"type\", width: 80, title: \"类型\", type: \"select\", sear: \"type\",enum: {0:\"个人\",1:\"行业\"}},
                        {field: \"create_at\", width: 150, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/api_label/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                        data: getData
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\", url: '/admin/currency/editLabel?id='},
                            {type: \"detail\", url: '/admin/currency/info_behavior?id='},
                            {type: \"del\", url: '/admin/api_product/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [
//                          {type: \"plDel\", url: '/admin/api_product/delete'},
//                          {type: \"improt\", url: \"/upload\"},
//                          {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });
            function getData(res, callback) {
                console.log(res);
                if (typeof callback == 'function') {
                    callback(res.data);
                }
                console.log(res.data);
            }
        }
    });
</script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "admin/currency/behavior.html";
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
/* <!-- 其他服务管理 -->*/
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
/*                             {title: "高级搜索", type: "hSearch", },*/
/* //                          {title: "导入", type: "improt", },*/
/* //                          {title: "导出", type: "export", }*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "主键",type: "", sear: "id"},*/
/*                         {field: "name", width: 80, title: "名称", type: "", sear: "name"},*/
/*                         {field: "type", width: 80, title: "类型", type: "select", sear: "type",enum: {0:"个人",1:"行业"}},*/
/*                         {field: "create_at", width: 150, title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/api_label/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                         data: getData*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit", url: '/admin/currency/editLabel?id='},*/
/*                             {type: "detail", url: '/admin/currency/info_behavior?id='},*/
/*                             {type: "del", url: '/admin/api_product/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/* //                          {type: "plDel", url: '/admin/api_product/delete'},*/
/* //                          {type: "improt", url: "/upload"},*/
/* //                          {type: "export", url: "/upload"}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/*             function getData(res, callback) {*/
/*                 console.log(res);*/
/*                 if (typeof callback == 'function') {*/
/*                     callback(res.data);*/
/*                 }*/
/*                 console.log(res.data);*/
/*             }*/
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
