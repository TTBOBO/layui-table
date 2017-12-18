<?php

/* admin/auser/role.html */
class __TwigTemplate_238743180341adc2cf0f43fbabe17d7bc112bf7759cad11a4a12df36fefa0aab extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/role.html", 1)->display($context);
        // line 2
        echo "<style>

</style>
";
        // line 5
        $this->loadTemplate("admin/crumbs.html", "admin/auser/role.html", 5)->display($context);
        // line 6
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 7
        $this->loadTemplate("admin/import.html", "admin/auser/role.html", 7)->display($context);
        // line 8
        echo "<script type=\"text/html\" id=\"barDemo\">
    <!--<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>-->
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
                        btnArr: [{title: \"添加\", type: \"add\", url: \"/admin/auser/addRole\"},
                            {title: \"搜索\", type: \"hSearch\", },
                            {title: \"批量删除\", type: \"plDel\", class: \"layui-btn-danger\", url: \"/admin/api_role/delete\"},
                            //{title: \"导入\", type: \"improt\", },
//                          {title: \"导出\", type: \"export\", }
                        ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"am_admin_role-id\", width: 50, sort: true, title: \"ID\", type: \"\", sear: \"am_admin_role-id\"},
                        {field: \"am_admin_role-name\", width: 100, title: \"角色名称\", type: \"\", sear: \"am_admin_role-name\", },
                        {field: \"am_admin_role-permission\", width: 300, title: \"权限列表\", type: \"\", sear: \"am_admin_role-permission\"},
                        {field: \"am_admin_role-create_at\", width: 200, title: \"创建时间\", type: \"\", sear: \"am_admin_role-create_at\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_role/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                        initSort: \"am_admin_role-id\"  //desc
\t                },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"am_admin_role-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\", url: '/admin/auser/editRole?role_id='},
                            {type: \"detail\", url: '/admin/auser/auser_info?id='},
                            {type: \"del\", url: '/admin/api_role/del',special:true}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/auser/addRole'},
                            {type: \"plDel\", url: '/admin/api_role/del',special:true},
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
            }
        }
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/auser/role.html";
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
/*     <!--<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>-->*/
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
/*                         btnArr: [{title: "添加", type: "add", url: "/admin/auser/addRole"},*/
/*                             {title: "搜索", type: "hSearch", },*/
/*                             {title: "批量删除", type: "plDel", class: "layui-btn-danger", url: "/admin/api_role/delete"},*/
/*                             //{title: "导入", type: "improt", },*/
/* //                          {title: "导出", type: "export", }*/
/*                         ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "am_admin_role-id", width: 50, sort: true, title: "ID", type: "", sear: "am_admin_role-id"},*/
/*                         {field: "am_admin_role-name", width: 100, title: "角色名称", type: "", sear: "am_admin_role-name", },*/
/*                         {field: "am_admin_role-permission", width: 300, title: "权限列表", type: "", sear: "am_admin_role-permission"},*/
/*                         {field: "am_admin_role-create_at", width: 200, title: "创建时间", type: "", sear: "am_admin_role-create_at"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_role/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                         initSort: "am_admin_role-id"  //desc*/
/* 	                },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "am_admin_role-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit", url: '/admin/auser/editRole?role_id='},*/
/*                             {type: "detail", url: '/admin/auser/auser_info?id='},*/
/*                             {type: "del", url: '/admin/api_role/del',special:true}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/auser/addRole'},*/
/*                             {type: "plDel", url: '/admin/api_role/del',special:true},*/
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
/*             }*/
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
