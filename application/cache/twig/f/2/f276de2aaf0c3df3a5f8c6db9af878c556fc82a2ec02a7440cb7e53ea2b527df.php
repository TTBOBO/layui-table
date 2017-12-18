<?php

/* admin/auser/adminUser.html */
class __TwigTemplate_b65ca929ab497c56c79c62747f0523a86904bc50a9186f3e6be12b5de8b55f83 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/adminUser.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/adminUser.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/adminUser.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" role=\"5\" lay-event=\"detail\">查看</a>
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
                       btnArr: [{title: \"添加\", type: \"add\", url: \"/admin/product/addService\"},
                       
                            {title: \"高级搜索\", type: \"hSearch\"},
//                          {title: \"导入\", type: \"improt\"},
//                          {title: \"导出\", type: \"export\" }
\t\t\t\t\t\t\t]
                    },
                    cols: [{checkbox: true, },
                        {field: \"am_admin-aid\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"am_admin-aid\"},
                        {field: \"am_admin-realname\", width: 80, title: \"真实姓名\", type: \"\", sear: \"realname\"},
                        {field: \"am_admin_role-name\", width: 80, title: \"角色名称\", type: \"\", sear: \"am_admin_role-name\",},
                        {field: \"am_admin-username\", width: 80, title: \"用户名\", type: \"\", sear: \"username\"},
                        {field: \"am_admin-mobile\", width: 80, title: \"手机号\", type: \"\", sear: \"mobile\"},
                        {field: \"am_admin-email\", width: 80, title: \"邮箱\", type: \"\", sear: \"email\"},
                        {field: \"am_admin-sex\", width: 120, title: \"性别\", type: \"select\", sear: \"sex\", enum: {0: \"男\", 1: \"女\",2:'未知'}},
                        {field: \"am_admin-birth_day\", width: 120, title: \"生日\", type: \"time\", sear: \"birth_day\"},
                        {field: \"am_admin-description\", width: 120, title: \"描述\", type: \"\", sear: \"description\"},
                       \t{field: \"am_admin-avatar\", width: 120, title: \"头像\", type: \"image\", sear: \"\"},
                        {field: \"am_admin-content\", width: 120, title: \"内容\", type: \"\", sear: \"content\"},
                        {field: \"am_admin-create_at\", width: 120, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"am_admin-update_at\", width: 120, title: \"更新时间\", type: \"time\", sear: \"update_at\"},
                        {field: \"am_admin-status\", width: 120, title: \"状态\", type: \"time\", sear: \"status\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/am/api_admin/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"am_admin-aid\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                         Event: [
                           {type: \"edit\", url: '/admin/auser/editAdminUser?id='},
                         {type: \"detail\", url: '/admin/auser/infoAdminUser?id='},
                          {type: \"del\", url: '/admin/am/api_admin/delete'}
                        ]
                    },
                   topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/auser/addAdminUser'},
                          {type: \"plDel\",url: '/admin/am/api_admin/delete'},
                            {type: \"improt\", url: \"/upload\"},
                            {type: \"export\", url: \"/upload\"}
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
        return "admin/auser/adminUser.html";
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
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" role="5" lay-event="detail">查看</a>*/
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
/*                        btnArr: [{title: "添加", type: "add", url: "/admin/product/addService"},*/
/*                        */
/*                             {title: "高级搜索", type: "hSearch"},*/
/* //                          {title: "导入", type: "improt"},*/
/* //                          {title: "导出", type: "export" }*/
/* 							]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "am_admin-aid", width: 80, sort: true, title: "ID", type: "", sear: "am_admin-aid"},*/
/*                         {field: "am_admin-realname", width: 80, title: "真实姓名", type: "", sear: "realname"},*/
/*                         {field: "am_admin_role-name", width: 80, title: "角色名称", type: "", sear: "am_admin_role-name",},*/
/*                         {field: "am_admin-username", width: 80, title: "用户名", type: "", sear: "username"},*/
/*                         {field: "am_admin-mobile", width: 80, title: "手机号", type: "", sear: "mobile"},*/
/*                         {field: "am_admin-email", width: 80, title: "邮箱", type: "", sear: "email"},*/
/*                         {field: "am_admin-sex", width: 120, title: "性别", type: "select", sear: "sex", enum: {0: "男", 1: "女",2:'未知'}},*/
/*                         {field: "am_admin-birth_day", width: 120, title: "生日", type: "time", sear: "birth_day"},*/
/*                         {field: "am_admin-description", width: 120, title: "描述", type: "", sear: "description"},*/
/*                        	{field: "am_admin-avatar", width: 120, title: "头像", type: "image", sear: ""},*/
/*                         {field: "am_admin-content", width: 120, title: "内容", type: "", sear: "content"},*/
/*                         {field: "am_admin-create_at", width: 120, title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "am_admin-update_at", width: 120, title: "更新时间", type: "time", sear: "update_at"},*/
/*                         {field: "am_admin-status", width: 120, title: "状态", type: "time", sear: "status"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/am/api_admin/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "am_admin-aid", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                          Event: [*/
/*                            {type: "edit", url: '/admin/auser/editAdminUser?id='},*/
/*                          {type: "detail", url: '/admin/auser/infoAdminUser?id='},*/
/*                           {type: "del", url: '/admin/am/api_admin/delete'}*/
/*                         ]*/
/*                     },*/
/*                    topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/auser/addAdminUser'},*/
/*                           {type: "plDel",url: '/admin/am/api_admin/delete'},*/
/*                             {type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
