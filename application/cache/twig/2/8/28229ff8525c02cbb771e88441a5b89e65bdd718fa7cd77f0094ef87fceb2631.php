<?php

/* admin/auser/integral.html */
class __TwigTemplate_7b2a5d2306bb1be31feda8a949e9ea468119054a97b5b4eb61f4ef89972900d7 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/integral.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/integral.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/integral.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<!--<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>-->
\t<!--<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>-->
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
                            {title: \"高级搜索\", type: \"hSearch\", },
//                          {title: \"添加\", type: \"add\", url: \"/admin/product/addService\"},
//                          {title: \"导出\", type: \"export\", }
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"om_integral-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"om_integral-id\"},
                        {field: \"um_user-username\", width: 120, title: \"用户名\", type: \"select\", sear: \"om_integral-uid\",url:\"/admin/api_user/grid\",colKey:\"uid\",colName:\"username\"},
                        {field: \"om_integral-oid\", width: 120, title: \"订单ID\", type: \"\", sear: \"om_integral-oid\"},
                        {field: \"om_integral-integral\", width: 120, title: \"使用积分\", type: \"\", sear: \"om_integral-integral\"},
                        {field: \"om_integral-status\", width: 120, title: \"状态\", type: \"select\", sear: \"om_integral-status\",enum:{0:\"未使用\",1:\"已使用\",2:\"已作废\"}},
                        {field: \"om_integral-create_at\", width: 180, title: \"创建时间\", type: \"time\", sear: \"om_integral-create_at\"},
//                  \t{field: \"right\", width: 130, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/pm/Api_integral/grid \",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                        \t
                            {type: \"detail\", url: '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/info_banner_type?id='}
                        ]
                    },
                    topBtnActive: {
                        Event: [
                        \t
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

</html>


";
    }

    public function getTemplateName()
    {
        return "admin/auser/integral.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 53,  65 => 40,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<!--<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>-->*/
/* 	<!--<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>-->*/
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
/*                         btnArr: [*/
/*                             {title: "高级搜索", type: "hSearch", },*/
/* //                          {title: "添加", type: "add", url: "/admin/product/addService"},*/
/* //                          {title: "导出", type: "export", }*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "om_integral-id", width: 80, sort: true, title: "ID", type: "", sear: "om_integral-id"},*/
/*                         {field: "um_user-username", width: 120, title: "用户名", type: "select", sear: "om_integral-uid",url:"/admin/api_user/grid",colKey:"uid",colName:"username"},*/
/*                         {field: "om_integral-oid", width: 120, title: "订单ID", type: "", sear: "om_integral-oid"},*/
/*                         {field: "om_integral-integral", width: 120, title: "使用积分", type: "", sear: "om_integral-integral"},*/
/*                         {field: "om_integral-status", width: 120, title: "状态", type: "select", sear: "om_integral-status",enum:{0:"未使用",1:"已使用",2:"已作废"}},*/
/*                         {field: "om_integral-create_at", width: 180, title: "创建时间", type: "time", sear: "om_integral-create_at"},*/
/* //                  	{field: "right", width: 130, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/pm/Api_integral/grid ",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                         	*/
/*                             {type: "detail", url: '{{base_url}}admin/auser/info_banner_type?id='}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                         	*/
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
/* */
/* */
/* */
