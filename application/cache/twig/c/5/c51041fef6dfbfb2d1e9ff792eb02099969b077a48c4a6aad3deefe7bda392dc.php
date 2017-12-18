<?php

/* admin/product/addczProduct.html */
class __TwigTemplate_6eb57ae0b047dbfc32c9a57bd4c4a56a084bf84eed072ac98cc23482d8174339 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/addczProduct.html", 1)->display($context);
        // line 2
        echo "<style>
\tbody {margin: 10px;}
\t.demo-carousel {height: 200px;line-height: 200px;text-align: center;}
\t.layui-table-view .layui-table {width: 100%}
\t.model {padding: 20px;}
\t.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}
\t.layui-input-block {margin-left: 120px !important;}
</style>
";
        // line 10
        $this->loadTemplate("admin/crumbs1.html", "admin/product/addczProduct.html", 10)->display($context);
        // line 11
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 720px; padding-bottom: 30px;\"></form>
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initFrom();
\t\t},
\t\tinitFrom: function() {
\t\t\thm.showAddEdit({
\t\t\t\tel: \".layui-form\",
\t\t\t\tlist: [
\t\t\t\t\t{type: \"text\",name: \"名称\",verify:\"required\",field: \"im_cz_product-name\"},
\t\t\t\t\t{type: \"text\",name: \"长租天数\",verify:\"required\", field: \"im_cz_product-time_range\"},
\t\t\t\t\t{type: \"text\",name: \"城市\",verify:\"required\",field: \"im_cz_product-city_id\",},
\t\t\t\t\t{type: \"select\",name: \"店铺名称\",verify:\"required\",field: \"im_shop-shop_id\",height:180,w:180,url:\"/admin/im/api_shop/grid\",colKey:\"im_shop.shop_id\",colName:\"im_shop.name\"},
\t\t\t\t\t{type: \"select\",name: \"办公类型\",verify:\"required\",field: \"im_cz_product-type\",sOption: {0:\"经理室\",1:\"办公室\",2:\"移动工位\",3:\"固定工位\"}},
\t\t\t\t\t//{type: \"checkbox\",name: \"服务类型\",field: \"um_provider.invest_type\", url:\"http://www.my-haimai.com/admin/api_user\",colKey:\"uid\",colName:\"username\"},  //异步获取数据的时候
\t\t\t\t\t{type: \"select\",name: \"创建人\",verify:\"required\",field: \"um_user-creator_id\",url:\"/admin/api_user/grid\",colKey:\"uid\",colName:\"username\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",verify:\"required\",field: \"im_cz_product-create_at\"},
\t\t\t\t],
\t\t\t\tlw:85,
\t\t\t\tselectKey:\"\",   //列字段id   例: id, product_id
\t\t\t\tverifyData:{
\t\t\t\t\toption: [{
\t\t\t\t\t\tverifyDate: \"pInt\"
\t\t\t\t\t}],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/Api_cz_product/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/product/czProduct'   //添加成功返回的页面
\t\t\t});
\t\t\t
\t\t\t
\t\t},
\t});
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/product/addczProduct.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 42,  33 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	body {margin: 10px;}*/
/* 	.demo-carousel {height: 200px;line-height: 200px;text-align: center;}*/
/* 	.layui-table-view .layui-table {width: 100%}*/
/* 	.model {padding: 20px;}*/
/* 	.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}*/
/* 	.layui-input-block {margin-left: 120px !important;}*/
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <form class="layui-form" action="" style="width: 720px; padding-bottom: 30px;"></form>*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom();*/
/* 		},*/
/* 		initFrom: function() {*/
/* 			hm.showAddEdit({*/
/* 				el: ".layui-form",*/
/* 				list: [*/
/* 					{type: "text",name: "名称",verify:"required",field: "im_cz_product-name"},*/
/* 					{type: "text",name: "长租天数",verify:"required", field: "im_cz_product-time_range"},*/
/* 					{type: "text",name: "城市",verify:"required",field: "im_cz_product-city_id",},*/
/* 					{type: "select",name: "店铺名称",verify:"required",field: "im_shop-shop_id",height:180,w:180,url:"/admin/im/api_shop/grid",colKey:"im_shop.shop_id",colName:"im_shop.name"},*/
/* 					{type: "select",name: "办公类型",verify:"required",field: "im_cz_product-type",sOption: {0:"经理室",1:"办公室",2:"移动工位",3:"固定工位"}},*/
/* 					//{type: "checkbox",name: "服务类型",field: "um_provider.invest_type", url:"http://www.my-haimai.com/admin/api_user",colKey:"uid",colName:"username"},  //异步获取数据的时候*/
/* 					{type: "select",name: "创建人",verify:"required",field: "um_user-creator_id",url:"/admin/api_user/grid",colKey:"uid",colName:"username"},*/
/* 					{type: "time",name: "创建时间",verify:"required",field: "im_cz_product-create_at"},*/
/* 				],*/
/* 				lw:85,*/
/* 				selectKey:"",   //列字段id   例: id, product_id*/
/* 				verifyData:{*/
/* 					option: [{*/
/* 						verifyDate: "pInt"*/
/* 					}],*/
/* 					el: ".layui-form"*/
/* 				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"",   //编辑详情接口*/
/* 				addEditUrl:'/admin/Api_cz_product/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/product/czProduct'   //添加成功返回的页面*/
/* 			});*/
/* 			*/
/* 			*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
