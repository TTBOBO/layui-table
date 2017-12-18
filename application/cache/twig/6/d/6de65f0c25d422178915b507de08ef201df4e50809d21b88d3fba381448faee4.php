<?php

/* admin/currency/pm_coupon_config.html */
class __TwigTemplate_84c540adde82b31efe43525e45cde23a117e6d59026f383fc573df85efbfefd7 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/pm_coupon_config.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/pm_coupon_config.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/pm_coupon_config.html", 4)->display($context);
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
                            \t{title: \"导出\", type: \"export\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"pm_coupon_config-id\", width: 80, sort: true, title: \"主键\", type: \"\", sear: \"pm_coupon_config-id\"},
                        {field: \"pm_coupon_config-name\", width: 120, title: \"优惠券名称\", type: \"\", sear: \"pm_coupon_config-name\"},
                        {field: \"pm_coupon_config-amount\", width: 120, title: \"优惠券金额\", type: \"\", sear: \"pm_coupon_config-amount\",},
                        {field: \"pm_coupon_config-start_time\", width: 180, title: \"有效期开始时间\", type: \"time\", sear: \"pm_coupon_config-start_time\"},
                        {field: \"pm_coupon_config-end_time\", width: 180, title: \"有效期结束时间\", type: \"time\", sear: \"pm_coupon_config-end_time\"},
                        {field: \"pm_coupon_config-sid\", width: 150, title: \"产品的源id\", type: \"\", sear: \"pm_coupon_config-sid\"},
                        //{field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"om_cz_order-type\", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},
                        {field: \"pm_coupon_config-cateid\", width: 150, title: \"分类id\", sear: \"pm_coupon_config-cateid\"},
                        {field: \"pm_coupon_config-tag\", width: 200,  title: \"标签\", type: \"\", sear: \"pm_coupon_config-tag\"},
                        {field: \"pm_coupon_config-type\", width: 150, title: \"优惠券类型\", type: \"select\", sear: \"pm_coupon_config-type\",enum: {0:\"无条件\",1:\"满多少钱可以使用该优惠券\"}},
                        {field: \"pm_coupon_config-limit_amount\", width: 240, title: \"订单满多少钱可以使用该优惠券\", type: \"\", sear: \"pm_coupon_config-limit_amount\"},
                        {field: \"pm_coupon_config-gen_num\", width: 200,title: \"生成了多少个优惠券\", type: \"\", sear: \"pm_coupon_config-gen_num\"},
                        {field: \"am_admin-username\", width: 150, title: \"创建人\", type: \"select\", sear: \"am_admin-creator_id\",url:'/admin/am/api_admin/grid',colKey:\"am_admin.aid\",colName:\"am_admin.username\"},
                        {field: \"pm_coupon_config-create_at\", width: 150,  title: \"创建时间\", type: \"time\", sear: \"pm_coupon_config-create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/pm/Api_coupon_config/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"pm_coupon_config-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\",url: '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/edit_coupon_config?id='},
                            {type: \"detail\", url: '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/info_coupon_config?id='},
                            {type: \"del\", url: '/admin/pm/Api_coupon_config/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/add_coupon_config'},
                        \t\t{type: \"plDel\",url: '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/pm/Api_coupon_config/delete'}
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

</html>

";
    }

    public function getTemplateName()
    {
        return "admin/currency/pm_coupon_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 66,  99 => 65,  91 => 60,  87 => 59,  73 => 48,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                             	{title: "导出", type: "export"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "pm_coupon_config-id", width: 80, sort: true, title: "主键", type: "", sear: "pm_coupon_config-id"},*/
/*                         {field: "pm_coupon_config-name", width: 120, title: "优惠券名称", type: "", sear: "pm_coupon_config-name"},*/
/*                         {field: "pm_coupon_config-amount", width: 120, title: "优惠券金额", type: "", sear: "pm_coupon_config-amount",},*/
/*                         {field: "pm_coupon_config-start_time", width: 180, title: "有效期开始时间", type: "time", sear: "pm_coupon_config-start_time"},*/
/*                         {field: "pm_coupon_config-end_time", width: 180, title: "有效期结束时间", type: "time", sear: "pm_coupon_config-end_time"},*/
/*                         {field: "pm_coupon_config-sid", width: 150, title: "产品的源id", type: "", sear: "pm_coupon_config-sid"},*/
/*                         //{field: "type", width: 150, title: "类型", type: "select", sear: "om_cz_order-type", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},*/
/*                         {field: "pm_coupon_config-cateid", width: 150, title: "分类id", sear: "pm_coupon_config-cateid"},*/
/*                         {field: "pm_coupon_config-tag", width: 200,  title: "标签", type: "", sear: "pm_coupon_config-tag"},*/
/*                         {field: "pm_coupon_config-type", width: 150, title: "优惠券类型", type: "select", sear: "pm_coupon_config-type",enum: {0:"无条件",1:"满多少钱可以使用该优惠券"}},*/
/*                         {field: "pm_coupon_config-limit_amount", width: 240, title: "订单满多少钱可以使用该优惠券", type: "", sear: "pm_coupon_config-limit_amount"},*/
/*                         {field: "pm_coupon_config-gen_num", width: 200,title: "生成了多少个优惠券", type: "", sear: "pm_coupon_config-gen_num"},*/
/*                         {field: "am_admin-username", width: 150, title: "创建人", type: "select", sear: "am_admin-creator_id",url:'/admin/am/api_admin/grid',colKey:"am_admin.aid",colName:"am_admin.username"},*/
/*                         {field: "pm_coupon_config-create_at", width: 150,  title: "创建时间", type: "time", sear: "pm_coupon_config-create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/pm/Api_coupon_config/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "pm_coupon_config-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit",url: '{{base_url}}admin/currency/edit_coupon_config?id='},*/
/*                             {type: "detail", url: '{{base_url}}admin/currency/info_coupon_config?id='},*/
/*                             {type: "del", url: '/admin/pm/Api_coupon_config/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/currency/add_coupon_config'},*/
/*                         		{type: "plDel",url: '{{base_url}}admin/pm/Api_coupon_config/delete'}*/
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
/* */
/* */
