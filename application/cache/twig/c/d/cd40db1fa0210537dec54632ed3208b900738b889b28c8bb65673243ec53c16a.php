<?php

/* admin/currency/editproduct_service.html */
class __TwigTemplate_a7b5a3c4616f3444272e07d8e8df4aa14f5c6852213c94b70785e14508b0dfad extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/editproduct_service.html", 1)->display($context);
        // line 2
        echo "<style>
\tbody {margin: 10px;}
\t.demo-carousel {height: 200px;line-height: 200px;text-align: center;}
\t.layui-table-view .layui-table {width: 100%}
\t.model {padding: 20px;}
\t.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}
</style>
";
        // line 9
        $this->loadTemplate("admin/crumbs1.html", "admin/currency/editproduct_service.html", 9)->display($context);
        // line 10
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 720px; padding-bottom: 30px;\">
</form>
<script src=\"/resource/admin/js/jslib/citys.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
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
\t\t\t\t\t{type: \"text\",name: \"id\",verify:\"\",display:true,field: \"pm_product_service.id\"},
\t\t\t\t\t{type: \"select\",name: \"产品类型\",field: \"pm_product_service.type_id\",verify:\"required\",url:\"/admin/pm/api_pro_ser_type/grid\",colKey:'id',colName:'name'},
\t\t\t\t\t{type: \"text\",name: \"产品名称\",field: \"pm_product_service.name\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"访问量\",verify:\"pInt\",field: \"pm_product_service.vist_num\"},
\t\t\t\t\t{type: \"select\",name: \"公司名称\",verify:\"required\",field: \"pm_product_service.company_id\",url:\"/admin/api_company/grid\",colKey:'id',colName:'company_name'},
\t\t\t\t\t{type: \"text\",name: \"市场价\",verify:\"required|mzero\",field: \"pm_product_service.price\"},
\t\t\t\t\t{type: \"text\",name: \"会员价\",verify:\"required|mzero\",field: \"pm_product_service.v_price\"},
\t\t\t\t\t{type: \"text\",name: \"买点\",verify:\"required\",field: \"pm_product_service.buy_point\"},
\t\t\t\t\t{type: \"text\",name: \"收藏量\",verify:\"pInt\",field: \"pm_product_service.collect_num\"},
\t\t\t\t\t{type: \"text\",name: \"产品介绍\",verify:\"required\",field: \"pm_product_service.introduce\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",verify:\"required\",field: \"pm_product_service.create_at\"},
\t\t\t\t],
\t\t\t\tselectKey:\"pm_product_service.id\",   //列字段id   例: id, product_id
\t\t\t\tverifyData:{
\t\t\t\t\toption: [
\t\t\t\t\t\t{verifyDate: \"mzero\"},
\t\t\t\t\t\t{verifyDate: \"pInt\"},
\t\t\t\t\t],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/pm/Api_product_service/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/pm/Api_product_service/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/currency/product_service'   //添加成功返回的页面
\t\t\t});
\t\t},
\t});
</script>
</body>
</html>



";
    }

    public function getTemplateName()
    {
        return "admin/currency/editproduct_service.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 47,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	body {margin: 10px;}*/
/* 	.demo-carousel {height: 200px;line-height: 200px;text-align: center;}*/
/* 	.layui-table-view .layui-table {width: 100%}*/
/* 	.model {padding: 20px;}*/
/* 	.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}*/
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <form class="layui-form" action="" style="width: 720px; padding-bottom: 30px;">*/
/* </form>*/
/* <script src="/resource/admin/js/jslib/citys.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
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
/* 					{type: "text",name: "id",verify:"",display:true,field: "pm_product_service.id"},*/
/* 					{type: "select",name: "产品类型",field: "pm_product_service.type_id",verify:"required",url:"/admin/pm/api_pro_ser_type/grid",colKey:'id',colName:'name'},*/
/* 					{type: "text",name: "产品名称",field: "pm_product_service.name",verify:"required"},*/
/* 					{type: "text",name: "访问量",verify:"pInt",field: "pm_product_service.vist_num"},*/
/* 					{type: "select",name: "公司名称",verify:"required",field: "pm_product_service.company_id",url:"/admin/api_company/grid",colKey:'id',colName:'company_name'},*/
/* 					{type: "text",name: "市场价",verify:"required|mzero",field: "pm_product_service.price"},*/
/* 					{type: "text",name: "会员价",verify:"required|mzero",field: "pm_product_service.v_price"},*/
/* 					{type: "text",name: "买点",verify:"required",field: "pm_product_service.buy_point"},*/
/* 					{type: "text",name: "收藏量",verify:"pInt",field: "pm_product_service.collect_num"},*/
/* 					{type: "text",name: "产品介绍",verify:"required",field: "pm_product_service.introduce"},*/
/* 					{type: "time",name: "创建时间",verify:"required",field: "pm_product_service.create_at"},*/
/* 				],*/
/* 				selectKey:"pm_product_service.id",   //列字段id   例: id, product_id*/
/* 				verifyData:{*/
/* 					option: [*/
/* 						{verifyDate: "mzero"},*/
/* 						{verifyDate: "pInt"},*/
/* 					],*/
/* 					el: ".layui-form"*/
/* 				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/pm/Api_product_service/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/pm/Api_product_service/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/currency/product_service'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
