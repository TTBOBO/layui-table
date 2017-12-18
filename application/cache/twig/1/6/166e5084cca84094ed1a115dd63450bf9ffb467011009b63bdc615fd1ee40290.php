<?php

/* admin/currency/agent.html */
class __TwigTemplate_b5964b98f7a2fd20f6547e0c6e86b4ba675c4cc7adf040ec31232841cc0e52f3 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/agent.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/agent.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/agent.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" role=\"5\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"examine\">审批</a>
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
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"导出\", type: \"export\" }
\t\t\t\t\t\t]
                    },
                    cols: [{checkbox: true, },
                        {field: \"um_agent-id\", width: 80, sort: true, title: \"主键\", type: \"\", sear: \"um_agent-id\"},
                        {field: \"um_company-company_name\", width: 150, title: \"公司名称\", type: \"\", sear: \"um_company-company_name\"},
                        {field: \"um_agent-product_pic\", width: 80, title: \"产品详情\", type: \"\", sear: \"um_agent-product_pic\"},
                        {field: \"um_agent-pattern_pic\", width: 80, title: \"盈利模式\", type: \"\", sear: \"um_agent-pattern_pic\"},
                        {field: \"um_agent-policy_pic\", width: 80, title: \"招商政策\", type: \"\", sear: \"um_agent-policy_pic\"},
                        {field: \"um_agent-description\", width: 80, title: \"企业介绍\", type: \"\", sear: \"um_agent-description\"},
                        {field: \"um_agent-status\", width: 150, title: \"审批状态\", type: \"select\", sear: \"um_agent-status\",enum: {0:\"待审批\",1:\"审批成功\",2:\"审批失败\"},examine:true},
                        {field: \"um_agent-examine_time\", width: 150, title: \"审批时间\", type: \"time\", sear: \"um_agent-examine_time\"},
                        {field: \"right\", width: 160, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
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
                         Event: [
                         {type: \"edit\", url: '/admin/currency/editAgent?id='},
                            {type: \"detail\", url: '/admin/currency/infoAgent?id='},
                            {type: \"del\", url: '/admin/pm/api_agent/delete'},
                            {type: \"examine\", url: '/admin/pm/api_agent/change_status'}
                        ]
                    },
                   topBtnActive: {
                        Event: [{type: \"add\", url: '/admin/currency/addAgent'},
                        \t\t{type: \"plDel\",url: '/admin/pm/api_agent/delete'}
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
        return "admin/currency/agent.html";
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
/* 	<a class="layui-btn layui-btn-mini" lay-event="examine">审批</a>*/
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
/*                        btnArr: [{title: "添加", type: "add"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "导出", type: "export" }*/
/* 						]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "um_agent-id", width: 80, sort: true, title: "主键", type: "", sear: "um_agent-id"},*/
/*                         {field: "um_company-company_name", width: 150, title: "公司名称", type: "", sear: "um_company-company_name"},*/
/*                         {field: "um_agent-product_pic", width: 80, title: "产品详情", type: "", sear: "um_agent-product_pic"},*/
/*                         {field: "um_agent-pattern_pic", width: 80, title: "盈利模式", type: "", sear: "um_agent-pattern_pic"},*/
/*                         {field: "um_agent-policy_pic", width: 80, title: "招商政策", type: "", sear: "um_agent-policy_pic"},*/
/*                         {field: "um_agent-description", width: 80, title: "企业介绍", type: "", sear: "um_agent-description"},*/
/*                         {field: "um_agent-status", width: 150, title: "审批状态", type: "select", sear: "um_agent-status",enum: {0:"待审批",1:"审批成功",2:"审批失败"},examine:true},*/
/*                         {field: "um_agent-examine_time", width: 150, title: "审批时间", type: "time", sear: "um_agent-examine_time"},*/
/*                         {field: "right", width: 160, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
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
/*                          Event: [*/
/*                          {type: "edit", url: '/admin/currency/editAgent?id='},*/
/*                             {type: "detail", url: '/admin/currency/infoAgent?id='},*/
/*                             {type: "del", url: '/admin/pm/api_agent/delete'},*/
/*                             {type: "examine", url: '/admin/pm/api_agent/change_status'}*/
/*                         ]*/
/*                     },*/
/*                    topBtnActive: {*/
/*                         Event: [{type: "add", url: '/admin/currency/addAgent'},*/
/*                         		{type: "plDel",url: '/admin/pm/api_agent/delete'}*/
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
