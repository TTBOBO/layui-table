<?php

/* admin/currency/pm_coupon.html */
class __TwigTemplate_163c8cdba9f76ccc871ffd8e5fd9caea104ddb93df464a5de3e3e88d42b2aa83 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/pm_coupon.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/pm_coupon.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/pm_coupon.html", 4)->display($context);
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
                            {title: \"高级搜索\", type: \"hSearch\"},
                            //{title: \"导入\", type: \"improt\", },
                            {title: \"导出\", type: \"export\", }
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"id\",hidden:true, type: \"\", sear: \"id\"},
                        {field: \"name\", width: 80, title: \"优惠券名称\", type: \"\", sear: \"name\"},
                        {field: \"amount\", width: 80, title: \"优惠券金额\", type: \"\", sear: \"amount\",},
                        {field: \"coupon_no\", width: 150, title: \"优惠码\", type: \"\", sear: \"coupon_no\"},
                        {field: \"start_time\", width: 150, title: \"优惠券有效期开始时间\", type: \"\", sear: \"start_time\"},
                        {field: \"end_time\", width: 80, title: \"优惠券有效期结束时间\", type: \"select\", sear: \"end_time\"},
                        {field: \"sid\", width: 150, title: \"产品的源id\", type: \"select\", sear: \"sid\"},
                        {field: \"cateid\", width: 150, title: \"分类id\", sear: \"cateid\"},
                        {field: \"tag\", width: 200, title: \"标签\", type: \"\", sear: \"tag\"},
                        {field: \"uid\", width: 200, title: \"分配给了那个用户\", type: \"\", sear: \"uid\"},
                        {field: \"is_use\", width: 200, title: \"是否使用了\", type: \"select\", sear: \"is_use\",enum: {0:\"未使用\",1:\"已使用\"}},
                        {field: \"is_get\", width: 150,  title: \"是否领取\", type: \"select\", sear: \"is_get\",enum: {0:\"未领取\",1:\"已领取\"}},
                        {field: \"type\", width: 150,  title: \"优惠券类型\", type: \"select\", sear: \"type\",enum: {0:\"无条件\",1:\"满多少钱可以使用该优惠券\"}},
                        {field: \"expired_day\", width: 150,  title: \"红包领取后有效期\", type: \"\", sear: \"expired_day\"},
                        {field: \"limit_amount\", width: 200, title: \"订单满多少钱可以使用该优惠券\", type: \"\", sear: \"limit_amount\"},
                        {field: \"ordercode\", width: 200, title: \"对应的订单编号\", type: \"\", sear: \"ordercode\"},
                        {field: \"cfg_id\", width: 150,  title: \"配置表的id\", type: \"\", sear: \"cfg_id\"},
                        {field: \"reg_key\", width: 150,  title: \"获取类型\", type: \"select\", sear: \"reg_key\",enum: {0:\"recharge\",1:\"nohaswin\",2:\"newuser\"}},
                        {field: \"reg_value\", width: 150,  title: \"类型对应属性\", type: \"\", sear: \"reg_value\"},
                        {field: \"a_coupon_id\", width: 200, title: \"自定义红包来源ID\", type: \"\", sear: \"a_coupon_id\"},
                        {field: \"use_platform\", width: 200,  title: \"支付的平台类型ID\", type: \"select\", sear: \"use_platform\",enum: {0:\"all\",1:\"android\",2:\"ios\",3:\"h5\",4:\"wx\",5:\"pc\"}},
                        {field: \"is_active\", width: 150, title: \"生效状态\", type: \"select\", sear: \"is_active\",enum: {0:\"未生效\",1:\"已生效\"}},
                        {field: \"create_at\", width: 150, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"update_at\", width: 150, title: \"更新时间\", type: \"time\", sear: \"update_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/pm/Api_coupon/grid\",
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
                        Event: [{type: \"edit\",url: '";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/edit_coupon?id='},
                           {type: \"detail\", url: '";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/info_coupon?id='},
                           {type: \"del\", url: '/admin/pm/Api_coupon/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/add_coupon'},
                        \t\t{type: \"plDel\",url: '";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/pm/Api_coupon/delete'}
                           /* {type: \"improt\", url: \"/upload\"},
                            {type: \"export\", url: \"/upload\"}*/
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
        return "admin/currency/pm_coupon.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 77,  110 => 76,  102 => 71,  98 => 70,  84 => 59,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             //{title: "导入", type: "improt", },*/
/*                             {title: "导出", type: "export", }*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "id",hidden:true, type: "", sear: "id"},*/
/*                         {field: "name", width: 80, title: "优惠券名称", type: "", sear: "name"},*/
/*                         {field: "amount", width: 80, title: "优惠券金额", type: "", sear: "amount",},*/
/*                         {field: "coupon_no", width: 150, title: "优惠码", type: "", sear: "coupon_no"},*/
/*                         {field: "start_time", width: 150, title: "优惠券有效期开始时间", type: "", sear: "start_time"},*/
/*                         {field: "end_time", width: 80, title: "优惠券有效期结束时间", type: "select", sear: "end_time"},*/
/*                         {field: "sid", width: 150, title: "产品的源id", type: "select", sear: "sid"},*/
/*                         {field: "cateid", width: 150, title: "分类id", sear: "cateid"},*/
/*                         {field: "tag", width: 200, title: "标签", type: "", sear: "tag"},*/
/*                         {field: "uid", width: 200, title: "分配给了那个用户", type: "", sear: "uid"},*/
/*                         {field: "is_use", width: 200, title: "是否使用了", type: "select", sear: "is_use",enum: {0:"未使用",1:"已使用"}},*/
/*                         {field: "is_get", width: 150,  title: "是否领取", type: "select", sear: "is_get",enum: {0:"未领取",1:"已领取"}},*/
/*                         {field: "type", width: 150,  title: "优惠券类型", type: "select", sear: "type",enum: {0:"无条件",1:"满多少钱可以使用该优惠券"}},*/
/*                         {field: "expired_day", width: 150,  title: "红包领取后有效期", type: "", sear: "expired_day"},*/
/*                         {field: "limit_amount", width: 200, title: "订单满多少钱可以使用该优惠券", type: "", sear: "limit_amount"},*/
/*                         {field: "ordercode", width: 200, title: "对应的订单编号", type: "", sear: "ordercode"},*/
/*                         {field: "cfg_id", width: 150,  title: "配置表的id", type: "", sear: "cfg_id"},*/
/*                         {field: "reg_key", width: 150,  title: "获取类型", type: "select", sear: "reg_key",enum: {0:"recharge",1:"nohaswin",2:"newuser"}},*/
/*                         {field: "reg_value", width: 150,  title: "类型对应属性", type: "", sear: "reg_value"},*/
/*                         {field: "a_coupon_id", width: 200, title: "自定义红包来源ID", type: "", sear: "a_coupon_id"},*/
/*                         {field: "use_platform", width: 200,  title: "支付的平台类型ID", type: "select", sear: "use_platform",enum: {0:"all",1:"android",2:"ios",3:"h5",4:"wx",5:"pc"}},*/
/*                         {field: "is_active", width: 150, title: "生效状态", type: "select", sear: "is_active",enum: {0:"未生效",1:"已生效"}},*/
/*                         {field: "create_at", width: 150, title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "update_at", width: 150, title: "更新时间", type: "time", sear: "update_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/pm/Api_coupon/grid",*/
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
/*                         Event: [{type: "edit",url: '{{base_url}}admin/currency/edit_coupon?id='},*/
/*                            {type: "detail", url: '{{base_url}}admin/currency/info_coupon?id='},*/
/*                            {type: "del", url: '/admin/pm/Api_coupon/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/currency/add_coupon'},*/
/*                         		{type: "plDel",url: '{{base_url}}admin/pm/Api_coupon/delete'}*/
/*                            /* {type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*//* */
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
