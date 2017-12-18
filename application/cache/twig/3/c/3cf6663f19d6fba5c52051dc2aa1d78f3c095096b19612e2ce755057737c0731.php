<?php

/* admin/auser/invoice.html */
class __TwigTemplate_3dd9ed4250fa62e0a043648f8ce254e65a979182756d60dabc2db328d0465fca extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/invoice.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/invoice.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/invoice.html", 4)->display($context);
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
                            \t{title: \"高级搜索\", type: \"hSearch\"},
                            \t{title: \"导入\", type: \"improt\"},
                            \t{title: \"导出\", type: \"export\"}]
                    },
                    cols: [{checkbox: true, },
                        {field: \"am_invoice-id\", width: 80, sort: true, title: \"id\", type: \"\", sear: \"am_invoice-id\"},
                        {field: \"am_invoice-name\", width: 120, title: \"发票名称\", type: \"\", sear: \"am_invoice-name\"},
                        {field: \"um_company-company_name\", width: 120, title: \"公司名\", type: \"select\", sear: \"am_invoice-company_id\",url:'/admin/Api_company/grid',colKey:\"id\",colName:\"company_name\"},
                        {field: \"am_invoice-price\", width: 100, title: \"金额\", type: \"\", sear: \"am_invoice-price\"},
                        {field: \"am_invoice-tax_point\", width: 120, title: \"税点\", type: \"\", sear: \"am_invoice-tax_point\"},
                        {field: \"am_invoice-type\", width: 80, title: \"类型\", type: \"select\", sear: \"am_invoice-type\",enum: {0:\"普票\",1:\"专票\"}},
                        {field: \"am_invoice-pic\", width: 100, title: \"发票图片\", type: \"image\", sear: \"\"},
                        {field: \"am_invoice-express_price\", width: 100,  title: \"快递费用\", type: \"\", sear: \"am_invoice-express_price\"},
                        {field: \"am_invoice-express_status\", width: 100,  title: \"邮寄状态\", type: \"select\", sear: \"am_invoice-express_status\",enum: {0:\"未寄出\",1:\"已寄出\"}},
                        {field: \"am_invoice-express_code\", width: 100,  title: \"快递编码\", type: \"\", sear: \"am_invoice-express_code\"},
                        {field: \"am_invoice-express_name\", width: 100,  title: \"快递名称\", type: \"\", sear: \"am_invoice-express_name\"},
                        {field: \"am_invoice-create_at\", width: 150,  title: \"创建时间\", type: \"time\", sear: \"am_invoice-create_at\"},
                        {field: \"right\", width:150, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right' }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/am/Api_invoice/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"am_invoice-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\",url: '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/edit_invoice?id='},
                            {type: \"detail\", url: '/admin/auser/info_invoice/?id='},
                            {type: \"del\", url: '/admin/am/Api_invoice/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/add_invoice'},
                        \t\t{type: \"plDel\",url: '";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/am/Api_invoice/delete'},
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

</html>




";
    }

    public function getTemplateName()
    {
        return "admin/auser/invoice.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 64,  91 => 63,  82 => 57,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                             	{title: "高级搜索", type: "hSearch"},*/
/*                             	{title: "导入", type: "improt"},*/
/*                             	{title: "导出", type: "export"}]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "am_invoice-id", width: 80, sort: true, title: "id", type: "", sear: "am_invoice-id"},*/
/*                         {field: "am_invoice-name", width: 120, title: "发票名称", type: "", sear: "am_invoice-name"},*/
/*                         {field: "um_company-company_name", width: 120, title: "公司名", type: "select", sear: "am_invoice-company_id",url:'/admin/Api_company/grid',colKey:"id",colName:"company_name"},*/
/*                         {field: "am_invoice-price", width: 100, title: "金额", type: "", sear: "am_invoice-price"},*/
/*                         {field: "am_invoice-tax_point", width: 120, title: "税点", type: "", sear: "am_invoice-tax_point"},*/
/*                         {field: "am_invoice-type", width: 80, title: "类型", type: "select", sear: "am_invoice-type",enum: {0:"普票",1:"专票"}},*/
/*                         {field: "am_invoice-pic", width: 100, title: "发票图片", type: "image", sear: ""},*/
/*                         {field: "am_invoice-express_price", width: 100,  title: "快递费用", type: "", sear: "am_invoice-express_price"},*/
/*                         {field: "am_invoice-express_status", width: 100,  title: "邮寄状态", type: "select", sear: "am_invoice-express_status",enum: {0:"未寄出",1:"已寄出"}},*/
/*                         {field: "am_invoice-express_code", width: 100,  title: "快递编码", type: "", sear: "am_invoice-express_code"},*/
/*                         {field: "am_invoice-express_name", width: 100,  title: "快递名称", type: "", sear: "am_invoice-express_name"},*/
/*                         {field: "am_invoice-create_at", width: 150,  title: "创建时间", type: "time", sear: "am_invoice-create_at"},*/
/*                         {field: "right", width:150, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right' }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/am/Api_invoice/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "am_invoice-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit",url: '{{base_url}}admin/auser/edit_invoice?id='},*/
/*                             {type: "detail", url: '/admin/auser/info_invoice/?id='},*/
/*                             {type: "del", url: '/admin/am/Api_invoice/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/auser/add_invoice'},*/
/*                         		{type: "plDel",url: '{{base_url}}admin/am/Api_invoice/delete'},*/
/*                             {type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*/
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
/* */
/* */
