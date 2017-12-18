<?php

/* admin/im/rim_serve.html */
class __TwigTemplate_529d9cddd1193452bd9f18c4f61db82d9d20d224d0ab412b54c126ba2af51701 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/rim_serve.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/im/rim_serve.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/im/rim_serve.html", 4)->display($context);
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
                        btnArr: [{title: \"添加\", type: \"add\", url: \"/admin/product/addService\"},
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"批量删除\", type: \"plDel\", class: \"layui-btn-danger\", url: \"/admin/api_product/del\"},
                            //{title: \"导入\", type: \"improt\"},
                            //{title: \"导出\", type: \"export\"}
                            ]
                    },

                    cols: [{checkbox: true,},
                        {field: \"id\", width: 80, sort: true, title: \"ID\", hidden:true, type: \"\", sear: \"id\"},
                        {field: \"name\", width: 80, title: \"名称\", type: \"\", sear: \"name\"},
                        {field: \"sale\", width: 120, title: \"优惠\", type: \"\", sear: \"sale\",},
                        {field: \"create_at\", width: 150, title: \"创建时间\", type: \"time\", sear: \"rim_serve.create_at\", },
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                                                        
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/im/Api_rim_serve/grid\",
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
                            {type: \"detail\", url: '/admin/im/infoServe?id='},
                            {type: \"del\", url: '/admin/api_product/del'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/product/addService'},
                            {type: \"plDel\", url: '/admin/api_product/del'},
                            //{type: \"improt\", url: \"/upload\"},
                            //{type: \"export\", url: \"/upload\"}
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
        return "admin/im/rim_serve.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 42,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                         btnArr: [{title: "添加", type: "add", url: "/admin/product/addService"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "批量删除", type: "plDel", class: "layui-btn-danger", url: "/admin/api_product/del"},*/
/*                             //{title: "导入", type: "improt"},*/
/*                             //{title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/* */
/*                     cols: [{checkbox: true,},*/
/*                         {field: "id", width: 80, sort: true, title: "ID", hidden:true, type: "", sear: "id"},*/
/*                         {field: "name", width: 80, title: "名称", type: "", sear: "name"},*/
/*                         {field: "sale", width: 120, title: "优惠", type: "", sear: "sale",},*/
/*                         {field: "create_at", width: 150, title: "创建时间", type: "time", sear: "rim_serve.create_at", },*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                                                         */
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}admin/im/Api_rim_serve/grid",*/
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
/*                             {type: "detail", url: '/admin/im/infoServe?id='},*/
/*                             {type: "del", url: '/admin/api_product/del'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/product/addService'},*/
/*                             {type: "plDel", url: '/admin/api_product/del'},*/
/*                             //{type: "improt", url: "/upload"},*/
/*                             //{type: "export", url: "/upload"}*/
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
