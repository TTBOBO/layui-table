<?php

/* admin/auser/admin_log.html */
class __TwigTemplate_8856d9e3f16ac0b542ab5c6ebf29b2764b7ddb4a3436762f79b8b0baa57fe90b extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/admin_log.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/admin_log.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/admin_log.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
    <a class=\"layui-btn layui-btn-primary layui-btn-mini\" role=\"5\" lay-event=\"detail\">查看</a>
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
//                          {title: \"导入\", type: \"improt\"},
//                          {title: \"导出\", type: \"export\" }
                        ]
                    },
                    cols: [{checkbox: true,},
                        {field: \"id\", width: 50, sort: true, title: \"ID\", type: \"\", sear: \"id\"},
                        {field: \"username\", width: 80, title: \"用户名\", type: \"\", sear: \"username\"},
                        {field: \"realname\", width: 80, title: \"姓名\", type: \"\", sear: \"realname\"},
                        {field: \"aid\", width: 80, sort: true,title: \"管理员ID\", type: \"\", sear: \"aid\"},
                        {field: \"ip\", width: 80, title: \"IP地址\", type: \"\", sear: \"ip\"},
                        {field: \"city\", width: 80, title: \"城市\", type: \"\", sear: \"city\"},
                        {field: \"login_at\", width: 150, sort: true,title: \"登录时间\", type: \"\", sear: \"login_at\"},
                        {field: \"right\", width: 80, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/am/api_admin_log/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\",
                        },
                        initSort: \"id\"  //desc
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\", url: '/admin/product/editService?id='},
//                          {type: \"detail\", url: '/admin/ioffice/info_roadshow?id='},
//                          {type: \"del\", url: '/admin/api_product/del'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/product/addService'},
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
        return "admin/auser/admin_log.html";
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
/*     <a class="layui-btn layui-btn-primary layui-btn-mini" role="5" lay-event="detail">查看</a>*/
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
/* //                          {title: "导入", type: "improt"},*/
/* //                          {title: "导出", type: "export" }*/
/*                         ]*/
/*                     },*/
/*                     cols: [{checkbox: true,},*/
/*                         {field: "id", width: 50, sort: true, title: "ID", type: "", sear: "id"},*/
/*                         {field: "username", width: 80, title: "用户名", type: "", sear: "username"},*/
/*                         {field: "realname", width: 80, title: "姓名", type: "", sear: "realname"},*/
/*                         {field: "aid", width: 80, sort: true,title: "管理员ID", type: "", sear: "aid"},*/
/*                         {field: "ip", width: 80, title: "IP地址", type: "", sear: "ip"},*/
/*                         {field: "city", width: 80, title: "城市", type: "", sear: "city"},*/
/*                         {field: "login_at", width: 150, sort: true,title: "登录时间", type: "", sear: "login_at"},*/
/*                         {field: "right", width: 80, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/am/api_admin_log/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: "",*/
/*                         },*/
/*                         initSort: "id"  //desc*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit", url: '/admin/product/editService?id='},*/
/* //                          {type: "detail", url: '/admin/ioffice/info_roadshow?id='},*/
/* //                          {type: "del", url: '/admin/api_product/del'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/product/addService'},*/
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
