<?php

/* admin/order/entityOrder.html */
class __TwigTemplate_eead3083a0d363f78af5105a9cfa21d8d874a922fea91e60a0c47da080e2c44a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/order/entityOrder.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("admin/crumbs.html", "admin/order/entityOrder.html", 3)->display($context);
        // line 4
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 5
        $this->loadTemplate("admin/import.html", "admin/order/entityOrder.html", 5)->display($context);
        // line 6
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
                            {title: \"导出\", type: \"export\", }]
                    },
                    cols: [{checkbox: true, },
                        {field: \"om_entity_order-id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"om_entity_order-id\"},
                        {field: \"om_entity_order-code\", width: 80, title: \"订单号\", type: \"\", sear: \"om_entity_order-name\"},
                        {field: \"om_entity_order-scode\", width: 80, title: \"源订单号\", type: \"\", sear: \"om_entity_order-icon\",},
                        {field: \"om_entity_order-price\", width: 150, title: \"订单金额\", type: \"\", sear: \"om_entity_order-price\"},
                        {field: \"um_user-username\", width: 150, title: \"用户名\", type: \"\", sear: \"um_user-uid\"},
                        {field: \"om_entity_order-status\", width: 80, title: \"订单状态\", type: \"select\", sear: \"om_entity_order-status\", enum: {0: \"未付款\", 1: \"已付款\"}},
                        {field: \"om_entity_order-pay_type\", width: 150, title: \"支付方式\", type: \"select\", sear: \"om_entity_order-pay_type\", enum: {0: \"微信\", 1: \"支付宝\",2:\"对公转帐\"}},
                        //{field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"om_entity_order-type\", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},
                        {field: \"om_entity_order-product_id\", width: 150, title: \"产品id\", sear: \"om_entity_order-product_id\"},
                        {field: \"om_entity_order-ip\", width: 200, sort: true, title: \"IP地址\", type: \"\", sear: \"om_entity_order-ip\"},
                        {field: \"om_entity_order-pay_time\", width: 200, sort: true, title: \"支付时间\", type: \"time\", sear: \"om_entity_order-pay_time\"},
//                      {field: \"om_entity_order-creator\", width: 200, sort: true, title: \"创建人\", type: \"time\", sear: \"om_entity_order-creator\"},
                        {field: \"om_entity_order-service_start\", width: 150, sort: true, title: \"服务开始时间\", type: \"time\", sear: \"om_entity_order-service_start\"},
                        {field: \"om_entity_order-service_end\", width: 150, sort: true, title: \"服务结束时间\", type: \"time\", sear: \"om_entity_order-service_end\"},
                        {field: \"om_entity_order-create_at\", width: 150, sort: true, title: \"创建时间\", type: \"time\", sear: \"om_entity_order-create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_entity_order/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"om_entity_order-id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/order/entity_order_info?id='},
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
        return "admin/order/entityOrder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* */
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
/*                             {title: "导出", type: "export", }]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "om_entity_order-id", width: 80, sort: true, title: "ID", type: "", sear: "om_entity_order-id"},*/
/*                         {field: "om_entity_order-code", width: 80, title: "订单号", type: "", sear: "om_entity_order-name"},*/
/*                         {field: "om_entity_order-scode", width: 80, title: "源订单号", type: "", sear: "om_entity_order-icon",},*/
/*                         {field: "om_entity_order-price", width: 150, title: "订单金额", type: "", sear: "om_entity_order-price"},*/
/*                         {field: "um_user-username", width: 150, title: "用户名", type: "", sear: "um_user-uid"},*/
/*                         {field: "om_entity_order-status", width: 80, title: "订单状态", type: "select", sear: "om_entity_order-status", enum: {0: "未付款", 1: "已付款"}},*/
/*                         {field: "om_entity_order-pay_type", width: 150, title: "支付方式", type: "select", sear: "om_entity_order-pay_type", enum: {0: "微信", 1: "支付宝",2:"对公转帐"}},*/
/*                         //{field: "type", width: 150, title: "类型", type: "select", sear: "om_entity_order-type", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},*/
/*                         {field: "om_entity_order-product_id", width: 150, title: "产品id", sear: "om_entity_order-product_id"},*/
/*                         {field: "om_entity_order-ip", width: 200, sort: true, title: "IP地址", type: "", sear: "om_entity_order-ip"},*/
/*                         {field: "om_entity_order-pay_time", width: 200, sort: true, title: "支付时间", type: "time", sear: "om_entity_order-pay_time"},*/
/* //                      {field: "om_entity_order-creator", width: 200, sort: true, title: "创建人", type: "time", sear: "om_entity_order-creator"},*/
/*                         {field: "om_entity_order-service_start", width: 150, sort: true, title: "服务开始时间", type: "time", sear: "om_entity_order-service_start"},*/
/*                         {field: "om_entity_order-service_end", width: 150, sort: true, title: "服务结束时间", type: "time", sear: "om_entity_order-service_end"},*/
/*                         {field: "om_entity_order-create_at", width: 150, sort: true, title: "创建时间", type: "time", sear: "om_entity_order-create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_entity_order/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "om_entity_order-id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/order/entity_order_info?id='},*/
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
