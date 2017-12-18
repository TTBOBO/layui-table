<?php

/* admin/order/test.html */
class __TwigTemplate_0baaa8fa9e52dba600d59c5bfedf6bb541f843d8eafb6aca464464aca042bef7 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/order/test.html", 1)->display($context);
        // line 2
        echo "<style>
\t.layui-laydate{
\t\ttop: 297px !important;
\t}
</style>
";
        // line 7
        $this->loadTemplate("admin/crumbs.html", "admin/order/test.html", 7)->display($context);
        // line 8
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 9
        $this->loadTemplate("admin/import.html", "admin/order/test.html", 9)->display($context);
        // line 10
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
</script>
<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<script src=\"/resource/admin/js/jslib/jquery.table2excel.min.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
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
                        {field: \"id\", width: 80, sort: true, title: \"ID\", type: \"\", sear: \"id\"},
                        {field: \"scode\", width: 80, title: \"源订单号\", type: \"scode\", sear: \"icon\",},
                        {field: \"price\", width: 150, title: \"订单金额\", type: \"\", sear: \"price\"},
                        {field: \"uid\", width: 150, title: \"用户ID\", type: \"\", sear: \"uid\"},
                        {field: \"status\", width: 80, title: \"订单状态\", type: \"\", sear: \"status\", },
                        {field: \"pay_type\", width: 150, title: \"支付方式\", type: \"select\", sear: \"pay_type\", enum: {0: \"虚拟服务\", 1: \"实体服务\"}},
                        //{field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"type\", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},
                        {field: \"product_id\", width: 150, title: \"产品id\", type: \"select\", sear: \"product_id\", option: [{val: 0, text: \"不限制\"}, {val: 1, text: \"限制\"}]},
                        {field: \"ip\", width: 200, sort: true, title: \"ip地址\", type: \"time\", sear: \"ip\"},
                         {field: \"pay_time\", width: 200, sort: true, title: \"创建时间\", type: \"time\", sear: \"pay_time\"},
                          {field: \"creator\", width: 200, sort: true, title: \"创建人\", type: \"time\", sear: \"creator\"},
                           {field: \"service_start\", width: 200, sort: true, title: \"开始时间\", type: \"time\", sear: \"service_start\"},
                            {field: \"service_end\", width: 200, sort: true, title: \"结束时间\", type: \"time\", sear: \"service_end\"},
                             {field: \"create_at\", width: 200, sort: true, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right', }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/api_order/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                        data: getData
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                            {type: \"detail\", url: '/admin/api_order/serviceInfo?id='},
                        ]
                    },
                    topBtnActive: {
                        Event: [
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
        return "admin/order/test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	.layui-laydate{*/
/* 		top: 297px !important;*/
/* 	}*/
/* </style>*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* </script>*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <script src="/resource/admin/js/jslib/jquery.table2excel.min.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
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
/*                         {field: "id", width: 80, sort: true, title: "ID", type: "", sear: "id"},*/
/*                         {field: "scode", width: 80, title: "源订单号", type: "scode", sear: "icon",},*/
/*                         {field: "price", width: 150, title: "订单金额", type: "", sear: "price"},*/
/*                         {field: "uid", width: 150, title: "用户ID", type: "", sear: "uid"},*/
/*                         {field: "status", width: 80, title: "订单状态", type: "", sear: "status", },*/
/*                         {field: "pay_type", width: 150, title: "支付方式", type: "select", sear: "pay_type", enum: {0: "虚拟服务", 1: "实体服务"}},*/
/*                         //{field: "type", width: 150, title: "类型", type: "select", sear: "type", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},*/
/*                         {field: "product_id", width: 150, title: "产品id", type: "select", sear: "product_id", option: [{val: 0, text: "不限制"}, {val: 1, text: "限制"}]},*/
/*                         {field: "ip", width: 200, sort: true, title: "ip地址", type: "time", sear: "ip"},*/
/*                          {field: "pay_time", width: 200, sort: true, title: "创建时间", type: "time", sear: "pay_time"},*/
/*                           {field: "creator", width: 200, sort: true, title: "创建人", type: "time", sear: "creator"},*/
/*                            {field: "service_start", width: 200, sort: true, title: "开始时间", type: "time", sear: "service_start"},*/
/*                             {field: "service_end", width: 200, sort: true, title: "结束时间", type: "time", sear: "service_end"},*/
/*                              {field: "create_at", width: 200, sort: true, title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right', }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/api_order/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                         data: getData*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                             {type: "detail", url: '/admin/api_order/serviceInfo?id='},*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
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
