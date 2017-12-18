<?php

/* admin/order/czOrder.html */
class __TwigTemplate_e6d09aa07b1e8bf943ed74e2bb82f7404d945b77d2d05423899a534061def182 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/order/czOrder.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/order/czOrder.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/order/czOrder.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                            {title: \"导入\", type: \"improt\", },
                            {title: \"导出\", type: \"export\", }]
                    },
                    cols: [{checkbox: true, },
                        {field: \"om_cz_order-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"om_cz_order-id\"},
                        {field: \"om_cz_order-code\", width: 80, title: \"订单号\", type: \"\", sear: \"om_cz_order-name\"},
                        {field: \"om_cz_order-scode\", width: 80, title: \"源订单号\", type: \"\", sear: \"om_cz_order-icon\",},
                        {field: \"om_cz_order-price\", width: 150, title: \"订单金额\", type: \"\", sear: \"om_cz_order-price\"},
                        {field: \"um_user-username\", width: 150, title: \"用户ID\", type: \"\", sear: \"um_user-uid\"},
                        {field: \"om_cz_order-status\", width: 80, title: \"订单状态\", type: \"select\", sear: \"om_cz_order-status\", enum: {0: \"未付款\", 1: \"已付款\"}},
                        {field: \"om_cz_order-pay_type\", width: 150, title: \"支付方式\", type: \"select\", sear: \"om_cz_order-pay_type\", enum: {0: \"微信\", 1: \"支付宝\",2:\"对公转帐\"}},
                        //{field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"om_cz_order-type\", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},
                        {field: \"om_cz_order-product_id\", width: 150, title: \"产品id\", sear: \"om_cz_order-product_id\"},
                        {field: \"om_cz_order-ip\", width: 200, sort: true, title: \"IP地址\", type: \"\", sear: \"om_cz_order-ip\"},
                        {field: \"om_cz_order-pay_time\", width: 200, sort: true, title: \"支付时间\", type: \"time\", sear: \"om_cz_order-pay_time\"},
                        {field: \"om_cz_order-creator\", width: 200, sort: true, title: \"创建人\", type: \"time\", sear: \"om_cz_order-creator\"},
                        {field: \"om_cz_order-service_start\", width: 150, sort: true, title: \"服务开始时间\", type: \"time\", sear: \"om_cz_order-service_start\"},
                        {field: \"om_cz_order-service_end\", width: 150, sort: true, title: \"服务结束时间\", type: \"time\", sear: \"om_cz_order-service_end\"},
                        {field: \"om_cz_order-create_at\", width: 150, sort: true, title: \"创建时间\", type: \"time\", sear: \"om_cz_order-create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_cz_order/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"om_cz_order-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/order/cz_order_info?id='},
                        ]
                    },
                    topBtnActive: {
                        Event: [
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

</html>";
    }

    public function getTemplateName()
    {
        return "admin/order/czOrder.html";
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
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                             {title: "导入", type: "improt", },*/
/*                             {title: "导出", type: "export", }]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "om_cz_order-id", width: 80, sort: true, title: "ID", type: "", sear: "om_cz_order-id"},*/
/*                         {field: "om_cz_order-code", width: 80, title: "订单号", type: "", sear: "om_cz_order-name"},*/
/*                         {field: "om_cz_order-scode", width: 80, title: "源订单号", type: "", sear: "om_cz_order-icon",},*/
/*                         {field: "om_cz_order-price", width: 150, title: "订单金额", type: "", sear: "om_cz_order-price"},*/
/*                         {field: "um_user-username", width: 150, title: "用户ID", type: "", sear: "um_user-uid"},*/
/*                         {field: "om_cz_order-status", width: 80, title: "订单状态", type: "select", sear: "om_cz_order-status", enum: {0: "未付款", 1: "已付款"}},*/
/*                         {field: "om_cz_order-pay_type", width: 150, title: "支付方式", type: "select", sear: "om_cz_order-pay_type", enum: {0: "微信", 1: "支付宝",2:"对公转帐"}},*/
/*                         //{field: "type", width: 150, title: "类型", type: "select", sear: "om_cz_order-type", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},*/
/*                         {field: "om_cz_order-product_id", width: 150, title: "产品id", sear: "om_cz_order-product_id"},*/
/*                         {field: "om_cz_order-ip", width: 200, sort: true, title: "IP地址", type: "", sear: "om_cz_order-ip"},*/
/*                         {field: "om_cz_order-pay_time", width: 200, sort: true, title: "支付时间", type: "time", sear: "om_cz_order-pay_time"},*/
/*                         {field: "om_cz_order-creator", width: 200, sort: true, title: "创建人", type: "time", sear: "om_cz_order-creator"},*/
/*                         {field: "om_cz_order-service_start", width: 150, sort: true, title: "服务开始时间", type: "time", sear: "om_cz_order-service_start"},*/
/*                         {field: "om_cz_order-service_end", width: 150, sort: true, title: "服务结束时间", type: "time", sear: "om_cz_order-service_end"},*/
/*                         {field: "om_cz_order-create_at", width: 150, sort: true, title: "创建时间", type: "time", sear: "om_cz_order-create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_cz_order/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "om_cz_order-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/order/cz_order_info?id='},*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
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
