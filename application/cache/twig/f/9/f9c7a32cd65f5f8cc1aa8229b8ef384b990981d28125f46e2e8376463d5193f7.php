<?php

/* admin/im/shop.html */
class __TwigTemplate_be9bbfa82a3a3287f640f4415a0a8eb743d9144d1fdf176b8ce54898ac946f8f extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/shop.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/im/shop.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/im/shop.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                        btnArr: [
                            {title: \"高级搜索\", type: \"hSearch\"},
                            {title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            {title: \"添加\", type: \"add\", url: \"/admin/auser/addShop\"}
                            ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"im_shop-shop_id\", width: 80, sort: true, title: \"店铺ID\", type: \"\", sear: \"im_shop-shop_id\"},
                        {field: \"im_shop-name\", width: 80, title: \"店铺名称\", type: \"\", sear: \"im_shop-name\"},
                        {field: \"im_shop-description\", width: 80, title: \"店铺介绍\", type: \"\", sear: \"im_shop-description\",},
                        {field: \"im_shop-thumb\", width: 150, title: \"店铺主图\", type: \"image\", sear: \"im_shop-thumb\"},
                        {field: \"im_shop-pics\", width: 80, title: \"店铺图片\", type: \"image\", sear: \"im_shop-pics\"},
                        {field: \"im_shop-prov\", width: 150, title: \"店铺地址-省\", type: \"\", sear: \"\"},
                        //{field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"om_cz_order-type\", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},
                        {field: \"im_shop-city\", width: 150, title: \"店铺地址-市\", sear: \"\"},
                        {field: \"im_shop-dist\", width: 200,  title: \"店铺地址-区\", type: \"\", sear: \"\"},
                        {field: \"im_shop-street\", width: 150, title: \"店铺地址-街道地址\", type: \"\", sear: \"im_shop-street\"},
                        {field: \"im_shop-is_open\", width: 200, title: \"是否开通\", type: \"select\", sear: \"im_shop-is_open\", enum: {0: \"未开通\", 1: \"已开通\"}},
                        {field: \"im_shop-eatate_name\", width: 200,  title: \"楼盘名称\", type: \"\", sear: \"im_shop-eatate_name\"},
                        {field: \"im_shop-floor_id\", width: 150,  title: \"楼层ID\", type: \"\", sear: \"im_shop-floor_id\"},
                        {field: \"im_shop-floor_name\", width: 150, title: \"楼层名称\", sear: \"im_shop-floor_name\"},
                        {field: \"im_shop-marketing_ids\", width: 200,  title: \"运营人员ID\", type: \"\", sear: \"im_shop-marketing_ids\"},
                        {field: \"im_shop-provide_services\", width: 150, title: \"提供服务列表\", type: \"\", sear: \"im_shop-provide_services\"},
                        {field: \"im_shop-central_matching\", width: 200, title: \"中心配置\", type: \"\", sear: \"im_shop-central_matching\"},
                        {field: \"im_shop-nearby_facilities\", width: 200,  title: \"周边设施\", type: \"\", sear: \"im_shop-nearby_facilities\"},
                        {field: \"im_shop-nearby_service\", width: 150,  title: \"周边服务\", type: \"\", sear: \"im_shop-nearby_service\"},
                        {field: \"im_shop-floor_pics\", width: 200,  title: \"楼盘的平面图\", type: \"\", sear: \"im_shop-floor_pics\"},
                        {field: \"im_shop-company_ids\", width: 150, title: \"入驻企业\", type: \"\", sear: \"im_shop-company_ids\"},
                        {field: \"im_shop-product_ids\", width: 200, title: \"关联产品\", type: \"\", sear: \"im_shop-product_ids\"},
                        {field: \"um_user-username\", width: 200,  title: \"创建人\", type: \"\", sear: \"im_shop-creator_id\"},
                        {field: \"im_shop-create_at\", width: 150,  title: \"创建时间\", type: \"time\", sear: \"im_shop-create_at\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/im/api_shop/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"im_shop-shop_id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                        {type: \"edit\", url: '/admin/auser/editShop?id='},
                            {type: \"detail\", url: '/admin/auser/infoShop/?id='},
                            {type: \"del\", url: '/admin/im/api_shop/delete'}
                            
                        ]
                    },
                    topBtnActive: {
                        Event: [
                           {type: \"add\", url: '/admin/auser/addShop'},
                           {type: \"plDel\",url: '";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/im/api_shop/delete'}
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
        return "admin/im/shop.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 79,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                         btnArr: [*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                             {title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             {title: "添加", type: "add", url: "/admin/auser/addShop"}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "im_shop-shop_id", width: 80, sort: true, title: "店铺ID", type: "", sear: "im_shop-shop_id"},*/
/*                         {field: "im_shop-name", width: 80, title: "店铺名称", type: "", sear: "im_shop-name"},*/
/*                         {field: "im_shop-description", width: 80, title: "店铺介绍", type: "", sear: "im_shop-description",},*/
/*                         {field: "im_shop-thumb", width: 150, title: "店铺主图", type: "image", sear: "im_shop-thumb"},*/
/*                         {field: "im_shop-pics", width: 80, title: "店铺图片", type: "image", sear: "im_shop-pics"},*/
/*                         {field: "im_shop-prov", width: 150, title: "店铺地址-省", type: "", sear: ""},*/
/*                         //{field: "type", width: 150, title: "类型", type: "select", sear: "om_cz_order-type", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},*/
/*                         {field: "im_shop-city", width: 150, title: "店铺地址-市", sear: ""},*/
/*                         {field: "im_shop-dist", width: 200,  title: "店铺地址-区", type: "", sear: ""},*/
/*                         {field: "im_shop-street", width: 150, title: "店铺地址-街道地址", type: "", sear: "im_shop-street"},*/
/*                         {field: "im_shop-is_open", width: 200, title: "是否开通", type: "select", sear: "im_shop-is_open", enum: {0: "未开通", 1: "已开通"}},*/
/*                         {field: "im_shop-eatate_name", width: 200,  title: "楼盘名称", type: "", sear: "im_shop-eatate_name"},*/
/*                         {field: "im_shop-floor_id", width: 150,  title: "楼层ID", type: "", sear: "im_shop-floor_id"},*/
/*                         {field: "im_shop-floor_name", width: 150, title: "楼层名称", sear: "im_shop-floor_name"},*/
/*                         {field: "im_shop-marketing_ids", width: 200,  title: "运营人员ID", type: "", sear: "im_shop-marketing_ids"},*/
/*                         {field: "im_shop-provide_services", width: 150, title: "提供服务列表", type: "", sear: "im_shop-provide_services"},*/
/*                         {field: "im_shop-central_matching", width: 200, title: "中心配置", type: "", sear: "im_shop-central_matching"},*/
/*                         {field: "im_shop-nearby_facilities", width: 200,  title: "周边设施", type: "", sear: "im_shop-nearby_facilities"},*/
/*                         {field: "im_shop-nearby_service", width: 150,  title: "周边服务", type: "", sear: "im_shop-nearby_service"},*/
/*                         {field: "im_shop-floor_pics", width: 200,  title: "楼盘的平面图", type: "", sear: "im_shop-floor_pics"},*/
/*                         {field: "im_shop-company_ids", width: 150, title: "入驻企业", type: "", sear: "im_shop-company_ids"},*/
/*                         {field: "im_shop-product_ids", width: 200, title: "关联产品", type: "", sear: "im_shop-product_ids"},*/
/*                         {field: "um_user-username", width: 200,  title: "创建人", type: "", sear: "im_shop-creator_id"},*/
/*                         {field: "im_shop-create_at", width: 150,  title: "创建时间", type: "time", sear: "im_shop-create_at"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/im/api_shop/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "im_shop-shop_id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                         {type: "edit", url: '/admin/auser/editShop?id='},*/
/*                             {type: "detail", url: '/admin/auser/infoShop/?id='},*/
/*                             {type: "del", url: '/admin/im/api_shop/delete'}*/
/*                             */
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                            {type: "add", url: '/admin/auser/addShop'},*/
/*                            {type: "plDel",url: '{{base_url}}admin/im/api_shop/delete'}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*                 */
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
