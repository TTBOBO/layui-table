<?php

/* admin/currency/use_house.html */
class __TwigTemplate_9affee31296a38d436afdadd9fcac948da288f8c6dc35875070815cc2d16d33d extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/use_house.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/use_house.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/use_house.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                       btnArr: [
                     {title: \"添加\", type: \"add\"},
\t\t\t\t\t {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                     {title: \"高级搜索\", type: \"hSearch\"},
                     {title: \"导出\", type: \"export\" }
\t\t\t\t\t\t\t]
                    },
                    cols: [{checkbox: true, },
                        {field: \"um_use_house-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"um_use_house-id\"},
                        {field: \"um_user-username\", width: 80, title: \"用户名\", type: \"\", sear: \"um_use_house-uid\"},
                        {field: \"im_shop-name\", width: 80, title: \"店铺名\", type: \"\", sear: \"um_use_house-shop_id\"},
                        {field: \"um_use_house-order_code\", width: 80, title: \"订单号\", type: \"\", sear: \"um_use_house-order_code\"},
                        {field: \"um_use_house-house_code\", width: 80, title: \"房间号\", type: \"\", sear: \"um_use_house-house_code\"},
                        {field: \"um_use_house-start_at\", width: 80, title: \"开始时间\", type: \"time\", sear: \"um_use_house-start_at\"},
                        {field: \"um_use_house-end_at\", width: 80, title: \"结束时间\", type: \"time\", sear: \"um_use_house-end_at\"},
                        {field: \"um_use_house-status\", width: 150, title: \"是否使用\", type: \"select\", sear: \"um_use_house-status\",enum: {0: \"否\", 1: \"是\"}},
                        {field: \"um_use_house-code\", width: 150, title: \"使用验证码\", type: \"\", sear: \"um_use_house-code\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/im/api_use_house/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"um_use_house-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                         Event: [{type: \"edit\", url: '/admin/currency/editUseHouse?id='},
                          {type: \"detail\", url: '/admin/currency/infoUseHouse?id='},
                          {type: \"del\", url: '/admin/im/api_use_house/delete'}
                        ]
                    },
                   topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/currency/addUseHouse'},
                        \t\t{type: \"plDel\",url: '/admin/im/api_use_house/delete'},
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
        return "admin/currency/use_house.html";
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
/* 	 <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                        btnArr: [*/
/*                      {title: "添加", type: "add"},*/
/* 					 {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                      {title: "高级搜索", type: "hSearch"},*/
/*                      {title: "导出", type: "export" }*/
/* 							]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "um_use_house-id", width: 80, sort: true, title: "ID", type: "", sear: "um_use_house-id"},*/
/*                         {field: "um_user-username", width: 80, title: "用户名", type: "", sear: "um_use_house-uid"},*/
/*                         {field: "im_shop-name", width: 80, title: "店铺名", type: "", sear: "um_use_house-shop_id"},*/
/*                         {field: "um_use_house-order_code", width: 80, title: "订单号", type: "", sear: "um_use_house-order_code"},*/
/*                         {field: "um_use_house-house_code", width: 80, title: "房间号", type: "", sear: "um_use_house-house_code"},*/
/*                         {field: "um_use_house-start_at", width: 80, title: "开始时间", type: "time", sear: "um_use_house-start_at"},*/
/*                         {field: "um_use_house-end_at", width: 80, title: "结束时间", type: "time", sear: "um_use_house-end_at"},*/
/*                         {field: "um_use_house-status", width: 150, title: "是否使用", type: "select", sear: "um_use_house-status",enum: {0: "否", 1: "是"}},*/
/*                         {field: "um_use_house-code", width: 150, title: "使用验证码", type: "", sear: "um_use_house-code"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/im/api_use_house/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "um_use_house-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                          Event: [{type: "edit", url: '/admin/currency/editUseHouse?id='},*/
/*                           {type: "detail", url: '/admin/currency/infoUseHouse?id='},*/
/*                           {type: "del", url: '/admin/im/api_use_house/delete'}*/
/*                         ]*/
/*                     },*/
/*                    topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/currency/addUseHouse'},*/
/*                         		{type: "plDel",url: '/admin/im/api_use_house/delete'},*/
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
