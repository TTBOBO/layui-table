<?php

/* admin/currency/pm_pay_cfg.html */
class __TwigTemplate_91ac060703efe36aea4b3335fd97193054c650337284254fce1d0fad4caf83ef extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/pm_pay_cfg.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/pm_pay_cfg.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/pm_pay_cfg.html", 4)->display($context);
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
                        btnArr: [{title: \"添加\",type: \"add\"},
\t\t\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                           \t \t{title: \"高级搜索\", type: \"hSearch\"},
                            \t{title: \"导出\", type: \"export\"},
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"pay_id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"pay_id\"},
                        {field: \"pay_name\", width: 80, title: \"支付名称\", type: \"\", sear: \"pay_name\"},
                        {field: \"pay_type\", width: 80, title: \"支付类别\", type: \"\", sear: \"pay_type\",},
                        {field: \"pay_thumb\", width: 150, title: \"支付图标\", type: \"image\", sear: \"pay_thumb\"},
                        {field: \"pay_key\", width: 150, title: \"支付参数\", type: \"\", sear: \"pay_key\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/Api_pay_cfg/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"pay_id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\",url: '";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/edit_pay_cfg?id='},
                            {type: \"detail\", url: '/admin/currency/info_pay?id='},
                            {type: \"del\", url: '/admin/pm/Api_pay_cfg/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/add_pay_cfg'},
                        \t\t{type: \"plDel\",url: '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/pm/Api_pay_cfg/delete'}
                            //{type: \"improt\", url: \"/upload\"},
                            //{type: \"export\", url: \"/upload\"}
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
        return "admin/currency/pm_pay_cfg.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 57,  84 => 56,  75 => 50,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                         btnArr: [{title: "添加",type: "add"},*/
/* 								{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                            	 	{title: "高级搜索", type: "hSearch"},*/
/*                             	{title: "导出", type: "export"},*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "pay_id", width: 80, sort: true, title: "ID", type: "", sear: "pay_id"},*/
/*                         {field: "pay_name", width: 80, title: "支付名称", type: "", sear: "pay_name"},*/
/*                         {field: "pay_type", width: 80, title: "支付类别", type: "", sear: "pay_type",},*/
/*                         {field: "pay_thumb", width: 150, title: "支付图标", type: "image", sear: "pay_thumb"},*/
/*                         {field: "pay_key", width: 150, title: "支付参数", type: "", sear: "pay_key"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/Api_pay_cfg/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "pay_id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit",url: '{{base_url}}admin/currency/edit_pay_cfg?id='},*/
/*                             {type: "detail", url: '/admin/currency/info_pay?id='},*/
/*                             {type: "del", url: '/admin/pm/Api_pay_cfg/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/currency/add_pay_cfg'},*/
/*                         		{type: "plDel",url: '{{base_url}}admin/pm/Api_pay_cfg/delete'}*/
/*                             //{type: "improt", url: "/upload"},*/
/*                             //{type: "export", url: "/upload"}*/
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
