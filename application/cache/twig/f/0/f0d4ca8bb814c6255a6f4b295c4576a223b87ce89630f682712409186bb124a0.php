<?php

/* admin/product/service.html */
class __TwigTemplate_39ac401d5f0243f64dfb6f8edfe4ab8b77513d48c3f361384728d707aceab46a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/service.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/product/service.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/product/service.html", 4)->display($context);
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
                            {title: \"高级搜索\", type: \"hSearch\", },
                            {title: \"批量删除\", type: \"plDel\", class: \"layui-btn-danger\"},
                            {title: \"导入\", type: \"improt\", },
                            {title: \"导出\", type: \"export\", }]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"ID\", hidden:true, type: \"\", sear: \"sm_service.id\"},
                        {field: \"name\", width: 80, title: \"名称\", type: \"\", sear: \"sm_service.name\"},
                        {field: \"icon\", width: 80, title: \"图标地址\", type: \"image\", sear: \"sm_service.icon\",},
                        {field: \"title\", width: 150, title: \"标题简介\", type: \"\", sear: \"sm_service.title\"},
                        {field: \"content\", width: 150, title: \"服务内容\", type: \"\", sear: \"sm_service.content\"},
                        {field: \"pics\", width: 80, title: \"图片地址\", type: \"image\", sear: \"sm_service.pice\", },
                        {field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"sm_service.type\", enum: {0: \"虚拟服务\", 1: \"实体服务\"}},
                        //{field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"sm_service.type\", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},
                        {field: \"is_limit_num\", width: 150, title: \"是否限制次数\", type: \"select\", sear: \"sm_service.is_limit_num\" , enum: {0: \"不限制\", 1: \"限制\"}},
                        {field: \"create_at\", width: 200, sort: true, title: \"创建时间\", type: \"time\", sear: \"sm_service.create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_product/grid\",
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
                            {type: \"del\", url: '/admin/api_product/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/product/addService'},
                            {type: \"plDel\", url: '/admin/api_product/delete'},
                            {type: \"improt\", url: \"/upload\"},
                            {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });
            function getData(res, callback) {
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
        return "admin/product/service.html";
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
/*                         btnArr: [{title: "添加", type: "add"},*/
/*                             {title: "高级搜索", type: "hSearch", },*/
/*                             {title: "批量删除", type: "plDel", class: "layui-btn-danger"},*/
/*                             {title: "导入", type: "improt", },*/
/*                             {title: "导出", type: "export", }]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "ID", hidden:true, type: "", sear: "sm_service.id"},*/
/*                         {field: "name", width: 80, title: "名称", type: "", sear: "sm_service.name"},*/
/*                         {field: "icon", width: 80, title: "图标地址", type: "image", sear: "sm_service.icon",},*/
/*                         {field: "title", width: 150, title: "标题简介", type: "", sear: "sm_service.title"},*/
/*                         {field: "content", width: 150, title: "服务内容", type: "", sear: "sm_service.content"},*/
/*                         {field: "pics", width: 80, title: "图片地址", type: "image", sear: "sm_service.pice", },*/
/*                         {field: "type", width: 150, title: "类型", type: "select", sear: "sm_service.type", enum: {0: "虚拟服务", 1: "实体服务"}},*/
/*                         //{field: "type", width: 150, title: "类型", type: "select", sear: "sm_service.type", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},*/
/*                         {field: "is_limit_num", width: 150, title: "是否限制次数", type: "select", sear: "sm_service.is_limit_num" , enum: {0: "不限制", 1: "限制"}},*/
/*                         {field: "create_at", width: 200, sort: true, title: "创建时间", type: "time", sear: "sm_service.create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_product/grid",*/
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
/*                             {type: "del", url: '/admin/api_product/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/product/addService'},*/
/*                             {type: "plDel", url: '/admin/api_product/delete'},*/
/*                             {type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/*             function getData(res, callback) {*/
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
