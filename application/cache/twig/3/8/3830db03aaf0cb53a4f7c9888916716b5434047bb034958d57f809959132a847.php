<?php

/* admin/user/provider.html */
class __TwigTemplate_fcadca40f377cbc5d39ce7bec1f294eb289878f343990dc85072d5e5400d322e extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/provider.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/provider.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
<script type=\"text/html\" id=\"barDemo\">
   <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a> 
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
                        btnArr: [{title: \"添加\",type: \"add\",url: \"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/addProvider\"},
                            {title: \"高级搜索\", type: \"hSearch\", },
                            {title: \"导出\", type: \"export\", }]
                    },
                    cols: [{checkbox: true, },
                        {field: \"um_provider-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"um_provider-id\"},
                        {field: \"um_user-username\", width: 120, title: \"用户名\", type: \"\", sear: \"um_user-username\"},
                        {field: \"um_user-nickname\", width: 80, title: \"昵称\", type: \"\", sear: \"um_user-nickname\"},
                        {field: \"um_company-company_name\", width: 100, title: \"公司名称\", type: \"\", sear: \"um_company-company_name\", },
                        {field: \"um_company-logo\", width: 100, title: \"公司logo\", type: \"image\", sear: \"\", },
                        {field: \"um_provider-apply_time\", width: 150, title: \"申请时间\", type: \"\", sear: \"um_provider-apply_time\"},
                        {field: \"um_provider-effect_time\", width: 150, title: \"生效时间\", type: \"\", sear: \"um_provider-effect_time\"},
                        {field: \"um_provider-invest_type\", width: 100, title: \"投资方式\", type: \"\", sear: \"um_provider-invest_type\", enum: {0: \"未知\", 1: \"1股权投资\"}},
                        {field: \"um_provider-fund_type\", width: 180, title: \"资金类型\", type: \"select\", sear: \"um_provider-fund_type\", enum: {0: \"未知\", 1: \"个人资金\"}},
                        {field: \"um_provider-invest_field\", width: 150, title: \"投资区域\", type: \"select\", sear: \"um_provider-invest_field\", enum: {0:\"不限制\", 1: \"限制\"}},
                        {field: \"um_provider-invest_amount\", width: 120, title: \"投资金额范围\", type: \"\", sear: \"um_provider-invest_amount\", },
                        {field: \"um_provider-content\", width: 120, title: \"投资机构介绍\", type: \"\", sear: \"um_provider-content\", },
                        {field: \"right\", width: 120, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_provider/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\",
                        },
                        data: getData
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"um_provider-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\",url: '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/editProvider?id='},
                            {type: \"detail\", url: '/admin/user/infoProvider?id='}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/addProvider'},
                            {type: \"export\", url: \"/upload\"},
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
        return "admin/user/provider.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 59,  79 => 54,  43 => 21,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* <script type="text/html" id="barDemo">*/
/*    <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a> */
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
/*                         btnArr: [{title: "添加",type: "add",url: "{{base_url}}admin/user/addProvider"},*/
/*                             {title: "高级搜索", type: "hSearch", },*/
/*                             {title: "导出", type: "export", }]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "um_provider-id", width: 80, sort: true, title: "ID", type: "", sear: "um_provider-id"},*/
/*                         {field: "um_user-username", width: 120, title: "用户名", type: "", sear: "um_user-username"},*/
/*                         {field: "um_user-nickname", width: 80, title: "昵称", type: "", sear: "um_user-nickname"},*/
/*                         {field: "um_company-company_name", width: 100, title: "公司名称", type: "", sear: "um_company-company_name", },*/
/*                         {field: "um_company-logo", width: 100, title: "公司logo", type: "image", sear: "", },*/
/*                         {field: "um_provider-apply_time", width: 150, title: "申请时间", type: "", sear: "um_provider-apply_time"},*/
/*                         {field: "um_provider-effect_time", width: 150, title: "生效时间", type: "", sear: "um_provider-effect_time"},*/
/*                         {field: "um_provider-invest_type", width: 100, title: "投资方式", type: "", sear: "um_provider-invest_type", enum: {0: "未知", 1: "1股权投资"}},*/
/*                         {field: "um_provider-fund_type", width: 180, title: "资金类型", type: "select", sear: "um_provider-fund_type", enum: {0: "未知", 1: "个人资金"}},*/
/*                         {field: "um_provider-invest_field", width: 150, title: "投资区域", type: "select", sear: "um_provider-invest_field", enum: {0:"不限制", 1: "限制"}},*/
/*                         {field: "um_provider-invest_amount", width: 120, title: "投资金额范围", type: "", sear: "um_provider-invest_amount", },*/
/*                         {field: "um_provider-content", width: 120, title: "投资机构介绍", type: "", sear: "um_provider-content", },*/
/*                         {field: "right", width: 120, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_provider/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: "",*/
/*                         },*/
/*                         data: getData*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "um_provider-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit",url: '{{base_url}}admin/user/editProvider?id='},*/
/*                             {type: "detail", url: '/admin/user/infoProvider?id='}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/user/addProvider'},*/
/*                             {type: "export", url: "/upload"},*/
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
