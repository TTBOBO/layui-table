<?php

/* admin/currency/other_Service.html */
class __TwigTemplate_5004ad120726d0f4e00fd05ba8691bf107e5b2c2b7e0d9eab3a4b934d2dd3c1a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/other_Service.html", 1)->display($context);
        // line 2
        echo "<style>
\t.layui-laydate{
\t\ttop: 297px !important;
\t}
</style>
";
        // line 7
        $this->loadTemplate("admin/crumbs.html", "admin/currency/other_Service.html", 7)->display($context);
        // line 8
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 9
        $this->loadTemplate("admin/import.html", "admin/currency/other_Service.html", 9)->display($context);
        // line 10
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<script src=\"/resource/admin/js/jslib/jquery.table2excel.min.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
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
                        btnArr: [{title: \"添加\", type: \"add\", url: \"/admin/product/addService\"},
                            {title: \"高级搜索\", type: \"hSearch\", },
                            {title: \"批量删除\", type: \"plDel\", class: \"layui-btn-danger\", url: \"/admin/api_product/del\"},
                            {title: \"导入\", type: \"improt\", },
                            {title: \"导出\", type: \"export\", }]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"ID\", hidden:true, type: \"\", sear: \"im_other_serve.id\"},
                        {field: \"name\", width: 80, title: \"名称\", type: \"text\", sear: \"im_other_serve.name\"},
                        {field: \"spell\", width: 80, title: \"拼音\", type: \"text\", sear: \"im_other_serve.spell\",},
                        {field: \"type\", width: 150, title: \"类型\", type: \"text\", sear: \"im_other_serve.type\"},
                        {field: \"unit\", width: 150, title: \"单位\", type: \"text\", sear: \"im_other_serve.unit\"},
                        {field: \"im_other_serve\", width: 80, title: \"创建\", type: \"time\", sear: \"im_other_serve.create_at\", },
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],

                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_other_serve/grid\",
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
                        Event: [{type: \"edit\", url: '/admin/product/editService?id='},
                            {type: \"detail\", url: '/admin/product/serviceInfo?id='},
                            {type: \"del\", url: '/admin/api_product/del'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/product/addService'},
                            {type: \"plDel\", url: '/admin/api_product/del'},
                            {type: \"improt\", url: \"/upload\"},
                            {type: \"export\", url: \"/upload\"}
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

</html>";
    }

    public function getTemplateName()
    {
        return "admin/currency/other_Service.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	.layui-laydate{*/
/* 		top: 297px !important;*/
/* 	}*/
/* </style>*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <script src="/resource/admin/js/jslib/jquery.table2excel.min.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
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
/*                         btnArr: [{title: "添加", type: "add", url: "/admin/product/addService"},*/
/*                             {title: "高级搜索", type: "hSearch", },*/
/*                             {title: "批量删除", type: "plDel", class: "layui-btn-danger", url: "/admin/api_product/del"},*/
/*                             {title: "导入", type: "improt", },*/
/*                             {title: "导出", type: "export", }]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "ID", hidden:true, type: "", sear: "im_other_serve.id"},*/
/*                         {field: "name", width: 80, title: "名称", type: "text", sear: "im_other_serve.name"},*/
/*                         {field: "spell", width: 80, title: "拼音", type: "text", sear: "im_other_serve.spell",},*/
/*                         {field: "type", width: 150, title: "类型", type: "text", sear: "im_other_serve.type"},*/
/*                         {field: "unit", width: 150, title: "单位", type: "text", sear: "im_other_serve.unit"},*/
/*                         {field: "im_other_serve", width: 80, title: "创建", type: "time", sear: "im_other_serve.create_at", },*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/* */
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_other_serve/grid",*/
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
/*                         Event: [{type: "edit", url: '/admin/product/editService?id='},*/
/*                             {type: "detail", url: '/admin/product/serviceInfo?id='},*/
/*                             {type: "del", url: '/admin/api_product/del'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/product/addService'},*/
/*                             {type: "plDel", url: '/admin/api_product/del'},*/
/*                             {type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*/
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
