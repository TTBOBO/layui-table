<?php

/* admin/product/presend_item.html */
class __TwigTemplate_70d49ae5949fdfbfbb332380ca90c9eb86605a7c7535a86db0de26ee7fda3c2b extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/presend_item.html", 1)->display($context);
        // line 2
        echo "<style>

</style>
";
        // line 5
        $this->loadTemplate("admin/crumbs.html", "admin/product/presend_item.html", 5)->display($context);
        // line 6
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 7
        $this->loadTemplate("admin/import.html", "admin/product/presend_item.html", 7)->display($context);
        // line 8
        echo "<script type=\"text/html\" id=\"barDemo\">
    <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
    <a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
    <a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
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
                            {title: \"搜索\", type: \"hSearch\", },
                            {title: \"批量删除\", type: \"plDel\", class: \"layui-btn-danger\"},
                            //{title: \"导入\", type: \"improt\", },
                            /*{title: \"导出\", type: \"export\", }*/
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 50, sort: true, title: \"ID\", type: \"\", sear: \"id\"},
                        {field: \"product_type_id\", width: 200, title: \"产品类型\", type: \"select\", sear: \"product_type_id\",sear: \"num_unit\",enum: {1:\"虚拟\",2:\"实体\",3:\"长租\"}},
                        {field: \"name\", width: 200, title: \"名称\", type: \"\", sear: \"name\"},
                        {field: \"num\", width: 100, title: \"数量\", type: \"\", sear: \"num\"},
                        {field: \"num_unit\", width: 100, title: \"单位\", type: \"select\", sear: \"num_unit\",enum: {0:\"张\",1:\"小时\",2:\"待定\"}},
                        {field: \"type\", width: 100, title: \"赠送类型\", type: \"select\", sear: \"type\",enum: {0:\"纯文本\",1:\"参与计划\"}},
                        {field: \"price\", width: 100, title: \"价格\", type: \"\", sear: \"price\"},
                        {field: \"create_at\", width: 200, title: \"创建时间\", type: \"\", sear: \"create_at\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_presend_item/grid\",
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
                        Event: [{type: \"edit\", url: '/admin/product/edit_presend_item?id='},
                            {type: \"detail\", url: '/admin/product/info_presend?id='},
                            {type: \"del\", url: '/admin/api_presend_item/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/product/add_presend_item'},
                            {type: \"plDel\", url: '/admin/api_presend_item/delete'},
                            /*{type: \"improt\", url: \"/upload\"},
                            {type: \"export\", url: \"/upload\"}*/
                        ]
                    }
                });
            });
            function getData(res, callback) {
                if (typeof callback == 'function') {
                    callback(res.data);
                }
            }
        }
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/product/presend_item.html";
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
/*                         btnArr: [{title: "添加", type: "add"},*/
/*                             {title: "搜索", type: "hSearch", },*/
/*                             {title: "批量删除", type: "plDel", class: "layui-btn-danger"},*/
/*                             //{title: "导入", type: "improt", },*/
/*                             /*{title: "导出", type: "export", }*//* */
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 50, sort: true, title: "ID", type: "", sear: "id"},*/
/*                         {field: "product_type_id", width: 200, title: "产品类型", type: "select", sear: "product_type_id",sear: "num_unit",enum: {1:"虚拟",2:"实体",3:"长租"}},*/
/*                         {field: "name", width: 200, title: "名称", type: "", sear: "name"},*/
/*                         {field: "num", width: 100, title: "数量", type: "", sear: "num"},*/
/*                         {field: "num_unit", width: 100, title: "单位", type: "select", sear: "num_unit",enum: {0:"张",1:"小时",2:"待定"}},*/
/*                         {field: "type", width: 100, title: "赠送类型", type: "select", sear: "type",enum: {0:"纯文本",1:"参与计划"}},*/
/*                         {field: "price", width: 100, title: "价格", type: "", sear: "price"},*/
/*                         {field: "create_at", width: 200, title: "创建时间", type: "", sear: "create_at"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_presend_item/grid",*/
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
/*                         Event: [{type: "edit", url: '/admin/product/edit_presend_item?id='},*/
/*                             {type: "detail", url: '/admin/product/info_presend?id='},*/
/*                             {type: "del", url: '/admin/api_presend_item/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/product/add_presend_item'},*/
/*                             {type: "plDel", url: '/admin/api_presend_item/delete'},*/
/*                             /*{type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*//* */
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/*             function getData(res, callback) {*/
/*                 if (typeof callback == 'function') {*/
/*                     callback(res.data);*/
/*                 }*/
/*             }*/
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
