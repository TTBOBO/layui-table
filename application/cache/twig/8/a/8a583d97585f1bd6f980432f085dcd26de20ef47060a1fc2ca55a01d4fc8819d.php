<?php

/* admin/user/lookHouse.html */
class __TwigTemplate_7e8520f8318ec84cd7149e8b8e9c7ab230cd69915f3dc8ba77dd0c6be25287f6 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/lookHouse.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/lookHouse.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/lookHouse.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" role=\"5\" lay-event=\"detail\">查看</a>
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
//                     {title: \"添加\", type: \"add\", url: \"/admin/product/addService\"},
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                           // {title: \"导入\", type: \"improt\"},
                           // {title: \"导出\", type: \"export\" }
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"um_look_house-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"um_look_house-id\"},
                        {field: \"um_user-username\", width: 80, title: \"申请人\", type: \"\", sear: \"um_look_house-uid\"},
                        {field: \"im_shop-name\", width: 80, title: \"店铺ID\", type: \"\", sear: \"um_look_house-shop_id\"},
                        {field: \"um_look_house-start_at\", width: 80, title: \"预约时间\", type: \"time\", sear: \"um_look_house-start_at\"},
                        {field: \"um_look_house-name\", width: 80, title: \"姓名\", type: \"\", sear: \"um_look_house-name\"},
                        {field: \"um_look_house-phone\", width: 80, title: \"电话\", type: \"\", sear: \"um_look_house-phone\"},
                        {field: \"um_look_house-num\", width: 80, title: \"人数\", type: \"\", sear: \"um_look_house-num\"},
                        {field: \"um_look_house-status\", width: 150, title: \"状态\", type: \"select\", sear: \"um_look_house-status\",enum: {0: \"提交审核\", 1: \"通过\", 2: \"失败\"}},
                        {field: \"um_look_house-remark\", width: 150, title: \"备注\", type: \"\", sear: \"um_look_house-remark\"},
                        {field: \"um_look_house-code\", width: 150, title: \"看房验证码\", type: \"\", sear: \"um_look_house-code\"},
                        {field: \"right\", width: 120, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/api_look_house/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"um_look_house-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                         Event: [
                            {type: \"detail\", url: '/admin/user/infoHouse?id='},
                            {type: \"del\", url: '/admin/pm/api_look_house/delete'}
                        ]
                    },
                   topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/user/addHouse'},
                        {type: \"plDel\",url: '/admin/pm/api_look_house/delete'},
                           // {type: \"improt\", url: \"/upload\"},
                           // {type: \"export\", url: \"/upload\"}
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
        return "admin/user/lookHouse.html";
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
/*                        btnArr: [*/
/* //                     {title: "添加", type: "add", url: "/admin/product/addService"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                            // {title: "导入", type: "improt"},*/
/*                            // {title: "导出", type: "export" }*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "um_look_house-id", width: 80, sort: true, title: "ID", type: "", sear: "um_look_house-id"},*/
/*                         {field: "um_user-username", width: 80, title: "申请人", type: "", sear: "um_look_house-uid"},*/
/*                         {field: "im_shop-name", width: 80, title: "店铺ID", type: "", sear: "um_look_house-shop_id"},*/
/*                         {field: "um_look_house-start_at", width: 80, title: "预约时间", type: "time", sear: "um_look_house-start_at"},*/
/*                         {field: "um_look_house-name", width: 80, title: "姓名", type: "", sear: "um_look_house-name"},*/
/*                         {field: "um_look_house-phone", width: 80, title: "电话", type: "", sear: "um_look_house-phone"},*/
/*                         {field: "um_look_house-num", width: 80, title: "人数", type: "", sear: "um_look_house-num"},*/
/*                         {field: "um_look_house-status", width: 150, title: "状态", type: "select", sear: "um_look_house-status",enum: {0: "提交审核", 1: "通过", 2: "失败"}},*/
/*                         {field: "um_look_house-remark", width: 150, title: "备注", type: "", sear: "um_look_house-remark"},*/
/*                         {field: "um_look_house-code", width: 150, title: "看房验证码", type: "", sear: "um_look_house-code"},*/
/*                         {field: "right", width: 120, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/api_look_house/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "um_look_house-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                          Event: [*/
/*                             {type: "detail", url: '/admin/user/infoHouse?id='},*/
/*                             {type: "del", url: '/admin/pm/api_look_house/delete'}*/
/*                         ]*/
/*                     },*/
/*                    topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/user/addHouse'},*/
/*                         {type: "plDel",url: '/admin/pm/api_look_house/delete'},*/
/*                            // {type: "improt", url: "/upload"},*/
/*                            // {type: "export", url: "/upload"}*/
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
