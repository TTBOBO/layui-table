<?php

/* admin/product/editEntityProduct.html */
class __TwigTemplate_cc3e18a534243d6d0a474d59a28df1affa9b4ee119dedba44d0abc2eb549bcdd extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/editEntityProduct.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/product/editEntityProduct.html", 10)->display($context);
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
\t\t\t\t\t{type: \"text\",name: \"id\", display:true,field: \"id\"},
\t\t\t\t\t{type: \"text\",name: \"产品名称\",verify:\"required\",field: \"name\"},
\t\t\t\t\t{type: \"text\",name: \"产品描述\",verify:\"text\", field: \"description\"},
\t\t\t\t\t{type: \"upload\",name: \"产品主图\",verify:\"required\",field: \"thumb\",},
\t\t\t\t\t{type: \"text\",name: \"图片地址\",verify:\"url\",field: \"pics\",height:180,w:180},
\t\t\t\t\t{type: \"text\",name: \"产品宣传语\",verify:\"required\",field: \"product_intro\"},
\t\t\t\t\t//{type: \"checkbox\",name: \"服务类型\",field: \"um_provider.invest_type\", url:\"http://www.my-haimai.com/admin/api_user\",colKey:\"uid\",colName:\"username\"},  //异步获取数据的时候
\t\t\t\t\t{type: \"select\",name: \"服务列表\",verify:\"required\",field: \"service_list\",url:\"/admin/api_product/grid\",colKey:\"id\",colName:\"name\"},
\t\t\t\t\t{type: \"checkbox\",name: \"赠送项目\",verify:\"required\",block:true,field: \"presend_items\",url:\"/admin/api_presend_item/grid\",filter:\"product_type_id = 1\",colKey:\"id\",colName:\"name\"},
\t\t\t\t\t{type: \"text\",name: \"价格\",verify:\"pInt\",field: \"price\"},
\t\t\t\t\t{type: \"text\",name: \"套餐价格\",verify:\"pInt\",field: \"meal_items\"},
\t\t\t\t\t{type: \"select\",name: \"是否单套餐\",verify:\"required\",field: \"is_single_price\",sOption: {0: \"单套餐\",1: \"多套餐\"}},
\t\t\t\t\t{type: \"text\",name: \"服务城市\",verify:\"required\",field: \"service_city\"},
\t\t\t\t\t{type: \"text\",name: \"服务年限\",verify:\"required\",field: \"service_limit\"},
\t\t\t\t\t{type: \"text\",name: \"保底押金\",verify:\"required\",field: \"is_keep_price\"},
\t\t\t\t\t{type: \"text\",name: \"折扣\",verify:\"required\",field: \"discount_point\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",verify:\"required\",field: \"create_at\"},
\t\t\t\t],
\t\t\t\tlw:85,
\t\t\t\tselectKey:\"id\",   //列字段id   例: id, product_id
\t\t\t\tverifyData:{
\t\t\t\t\toption: [{
\t\t\t\t\t\tverifyDate: \"pInt\"
\t\t\t\t\t}],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/Api_entity_product/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/Api_entity_product/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/product/entityProduct'   //添加成功返回的页面
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
        return "admin/product/editEntityProduct.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 51,  33 => 11,  31 => 10,  21 => 2,  19 => 1,);
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
/* 					{type: "text",name: "id", display:true,field: "id"},*/
/* 					{type: "text",name: "产品名称",verify:"required",field: "name"},*/
/* 					{type: "text",name: "产品描述",verify:"text", field: "description"},*/
/* 					{type: "upload",name: "产品主图",verify:"required",field: "thumb",},*/
/* 					{type: "text",name: "图片地址",verify:"url",field: "pics",height:180,w:180},*/
/* 					{type: "text",name: "产品宣传语",verify:"required",field: "product_intro"},*/
/* 					//{type: "checkbox",name: "服务类型",field: "um_provider.invest_type", url:"http://www.my-haimai.com/admin/api_user",colKey:"uid",colName:"username"},  //异步获取数据的时候*/
/* 					{type: "select",name: "服务列表",verify:"required",field: "service_list",url:"/admin/api_product/grid",colKey:"id",colName:"name"},*/
/* 					{type: "checkbox",name: "赠送项目",verify:"required",block:true,field: "presend_items",url:"/admin/api_presend_item/grid",filter:"product_type_id = 1",colKey:"id",colName:"name"},*/
/* 					{type: "text",name: "价格",verify:"pInt",field: "price"},*/
/* 					{type: "text",name: "套餐价格",verify:"pInt",field: "meal_items"},*/
/* 					{type: "select",name: "是否单套餐",verify:"required",field: "is_single_price",sOption: {0: "单套餐",1: "多套餐"}},*/
/* 					{type: "text",name: "服务城市",verify:"required",field: "service_city"},*/
/* 					{type: "text",name: "服务年限",verify:"required",field: "service_limit"},*/
/* 					{type: "text",name: "保底押金",verify:"required",field: "is_keep_price"},*/
/* 					{type: "text",name: "折扣",verify:"required",field: "discount_point"},*/
/* 					{type: "time",name: "创建时间",verify:"required",field: "create_at"},*/
/* 				],*/
/* 				lw:85,*/
/* 				selectKey:"id",   //列字段id   例: id, product_id*/
/* 				verifyData:{*/
/* 					option: [{*/
/* 						verifyDate: "pInt"*/
/* 					}],*/
/* 					el: ".layui-form"*/
/* 				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/Api_entity_product/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/Api_entity_product/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/product/entityProduct'   //添加成功返回的页面*/
/* 			});*/
/* 			*/
/* 			*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
