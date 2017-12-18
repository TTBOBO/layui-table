<?php

/* admin/user/um_company_contract.html */
class __TwigTemplate_d554accdbf569ff9faccd1d9b8d5ef740fdd83192fd543089fca8ef9022b8034 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/um_company_contract.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/um_company_contract.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/um_company_contract.html", 4)->display($context);
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
                        \t\t{title: \"批量删除\",type: \"pldel\",class: \"layui-btn-danger\"},
                            \t{title: \"高级搜索\", type: \"hSearch\"},
                           \t\t{title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"um_company_contract-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"um_company_contract-id\"},
                        {field: \"um_company-company_name\", width: 80, title: \"公司名\", type: \"select\", sear: \"um_company_contract-compnay_id\",url:\"/admin/Api_company/grid\",colKey:\"id\",colName:\"company_name\"},
                        {field: \"um_company_contract-name\", width: 80, title: \"合同名称\", type: \"\", sear: \"um_company_contract-name\",},
                        {field: \"um_company_contract-content\", width: 150, title: \"合同内容\", type: \"\", sear: \"um_company_contract-content\"},
                        {field: \"um_company_contract-create_at\", width: 150, title: \"创建时间\", type: \"time\", sear: \"um_company_contract-create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_company_c/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                        data: getData
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"um_company_contract-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\",url: '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/editCompanyContract?id='},
                        \t\t{type: \"del\", url: '/admin/api_company_c/delete'},
                            {type: \"detail\", url: '/admin/user/infoCompanyContract?id='},
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/addCompanyContract'},
                        \t\t{type: \"pldel\",url: '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_company_c/delete'}
                          //  {type: \"improt\", url: \"/upload\"},
                           // {type: \"export\", url: \"/upload\"}
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
        return "admin/user/um_company_contract.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 58,  85 => 57,  76 => 51,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                         		{title: "批量删除",type: "pldel",class: "layui-btn-danger"},*/
/*                             	{title: "高级搜索", type: "hSearch"},*/
/*                            		{title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "um_company_contract-id", width: 80, sort: true, title: "ID", type: "", sear: "um_company_contract-id"},*/
/*                         {field: "um_company-company_name", width: 80, title: "公司名", type: "select", sear: "um_company_contract-compnay_id",url:"/admin/Api_company/grid",colKey:"id",colName:"company_name"},*/
/*                         {field: "um_company_contract-name", width: 80, title: "合同名称", type: "", sear: "um_company_contract-name",},*/
/*                         {field: "um_company_contract-content", width: 150, title: "合同内容", type: "", sear: "um_company_contract-content"},*/
/*                         {field: "um_company_contract-create_at", width: 150, title: "创建时间", type: "time", sear: "um_company_contract-create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_company_c/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                         data: getData*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "um_company_contract-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit",url: '{{base_url}}admin/user/editCompanyContract?id='},*/
/*                         		{type: "del", url: '/admin/api_company_c/delete'},*/
/*                             {type: "detail", url: '/admin/user/infoCompanyContract?id='},*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/user/addCompanyContract'},*/
/*                         		{type: "pldel",url: '{{base_url}}admin/api_company_c/delete'}*/
/*                           //  {type: "improt", url: "/upload"},*/
/*                            // {type: "export", url: "/upload"}*/
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
