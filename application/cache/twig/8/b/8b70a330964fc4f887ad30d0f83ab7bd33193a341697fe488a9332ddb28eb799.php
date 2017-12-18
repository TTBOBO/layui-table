<?php

/* admin/user/agent.html */
class __TwigTemplate_8210a85b863e7525731cf85f1689ee00d072d5f2befeffbe2831f609a6cf01b9 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/agent.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/agent.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/agent.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" role=\"5\" lay-event=\"detail\">查看</a>
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
\t\t\t\t\t\t]
                    },
                    cols: [{checkbox: true, },
                        {field: \"um_agent-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"um_agent-id\"},
                        {field: \"um_company-company_name\", width: 150, title: \"判断字段\", type: \"\", sear: \"um_agent-companty_id\"},
                        {field: \"um_agent-product_pic\", width: 80, title: \"标题名称\", type: \"\", sear: \"um_agent-product_pic\"},
                        {field: \"um_agent-pattern_pic\", width: 80, title: \"类型\", type: \"\", sear: \"um_agent-pattern_pic\"},
                        {field: \"um_agent-policy_pic\", width: 80, title: \"网址url\", type: \"image\", sear: \"um_agent-policy_pic\"},
                        {field: \"um_agent-description\", width: 80, title: \"图片地址\", type: \"\", sear: \"um_agent-description\"},
                        {field: \"right\", width: 80, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/api_agent/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"um_agent-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                         Event: [{type: \"edit\", url: '/admin/product/editService?id='},
                            {type: \"detail\", url: '/admin/ioffice/info_roadshow?id='},
                            {type: \"del\", url: '/admin/api_product/del'}
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
        return "admin/user/agent.html";
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
/*                             {title: "高级搜索", type: "hSearch"},*/
/* //                          {title: "导入", type: "improt"},*/
/* //                          {title: "导出", type: "export" }*/
/* 						]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "um_agent-id", width: 80, sort: true, title: "ID", type: "", sear: "um_agent-id"},*/
/*                         {field: "um_company-company_name", width: 150, title: "判断字段", type: "", sear: "um_agent-companty_id"},*/
/*                         {field: "um_agent-product_pic", width: 80, title: "标题名称", type: "", sear: "um_agent-product_pic"},*/
/*                         {field: "um_agent-pattern_pic", width: 80, title: "类型", type: "", sear: "um_agent-pattern_pic"},*/
/*                         {field: "um_agent-policy_pic", width: 80, title: "网址url", type: "image", sear: "um_agent-policy_pic"},*/
/*                         {field: "um_agent-description", width: 80, title: "图片地址", type: "", sear: "um_agent-description"},*/
/*                         {field: "right", width: 80, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/api_agent/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "um_agent-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                          Event: [{type: "edit", url: '/admin/product/editService?id='},*/
/*                             {type: "detail", url: '/admin/ioffice/info_roadshow?id='},*/
/*                             {type: "del", url: '/admin/api_product/del'}*/
/*                         ]*/
/*                     },*/
/*                    topBtnActive: {*/
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
