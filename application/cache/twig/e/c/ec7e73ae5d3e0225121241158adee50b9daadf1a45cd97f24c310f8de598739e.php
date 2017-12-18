<?php

/* admin/user/umLoad.html */
class __TwigTemplate_27939aef13a25e2902758489cfe64ca6deea1541fa8f12da7fed0b5f5ff41833 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/umLoad.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/umLoad.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                            {title: \"高级搜索\", type: \"hSearch\", },
                            {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"导出\", type: \"export\", }]
                    },
                    cols: [{checkbox: true, },
                        {field: \"um_loan-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"um_loan-id\"},
                        {field: \"um_loan-loan_amount\", width: 120, title: \"贷款金额\", type: \"\", sear: \"um_loan-loan_amount\"},
                        {field: \"um_loan-loan_period\", width: 80, title: \"贷款期限\", type: \"\", sear: \"um_loan-loan_period\"},
                        {field: \"um_loan-carrer\", width: 100, title: \"职业身份\", type: \"\", sear: \"um_loan-carrer\", },
                        {field: \"um_user-username\", width: 100, title: \"用户名\", sear: \"um_user-uid\", },
                        {field: \"um_company-company_name\", width: 150, title: \"公司名称\", type: \"\", sear: \"um_company-company_id\"},
                         {field: \"um_loan-create_at\", width: 150, title: \"创建时间\", type: \"time\", sear: \"um_loan-create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/Api_um_load/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\",
                        },
                        data: getData
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"um_loan-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\",url: '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/edit_Load?id='},
                        \t\t{type: \"del\", url: '/admin/Api_um_load/delete'},
                            \t{type: \"detail\",url: '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/info_Load?id='}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/add_Load'},
                        \t\t\t{type: \"plDel\",url: '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/Api_um_load/delete'},
                            {type: \"export\", url: \"/upload\"}
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
        return "admin/user/umLoad.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 58,  85 => 57,  78 => 53,  73 => 51,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                             {title: "高级搜索", type: "hSearch", },*/
/*                             {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "导出", type: "export", }]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "um_loan-id", width: 80, sort: true, title: "ID", type: "", sear: "um_loan-id"},*/
/*                         {field: "um_loan-loan_amount", width: 120, title: "贷款金额", type: "", sear: "um_loan-loan_amount"},*/
/*                         {field: "um_loan-loan_period", width: 80, title: "贷款期限", type: "", sear: "um_loan-loan_period"},*/
/*                         {field: "um_loan-carrer", width: 100, title: "职业身份", type: "", sear: "um_loan-carrer", },*/
/*                         {field: "um_user-username", width: 100, title: "用户名", sear: "um_user-uid", },*/
/*                         {field: "um_company-company_name", width: 150, title: "公司名称", type: "", sear: "um_company-company_id"},*/
/*                          {field: "um_loan-create_at", width: 150, title: "创建时间", type: "time", sear: "um_loan-create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/Api_um_load/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: "",*/
/*                         },*/
/*                         data: getData*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "um_loan-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit",url: '{{base_url}}admin/user/edit_Load?id='},*/
/*                         		{type: "del", url: '/admin/Api_um_load/delete'},*/
/*                             	{type: "detail",url: '{{base_url}}admin/user/info_Load?id='}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/user/add_Load'},*/
/*                         			{type: "plDel",url: '{{base_url}}admin/Api_um_load/delete'},*/
/*                             {type: "export", url: "/upload"}*/
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
