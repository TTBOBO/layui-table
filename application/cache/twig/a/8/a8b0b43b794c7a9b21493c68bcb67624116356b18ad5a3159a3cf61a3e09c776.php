<?php

/* admin/product/add_presend_item.html */
class __TwigTemplate_47d218f1cd334aba8c662019ab90a413d102e090099c36434bc3326287e59031 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/add_presend_item.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/product/add_presend_item.html", 9)->display($context);
        // line 10
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
\t\t\t\t\t{type: \"text\",name: \"赠送项目名称\",verify:\"required\",field: \"name\"},
\t\t\t\t\t{type: \"text\",name: \"赠送项目值\",verify:\"pInt\", field: \"num\"},
\t\t\t\t\t{type: \"select\",name: \"数量单位\",verify:\"required\",field: \"num_unit\",sOption: {0: \"张\",1: \"小时\"}},
\t\t\t\t\t{type: \"select\",name: \"赠送类型\",verify:\"required\",field: \"type\",sOption: {0: \"纯文本\",1: \"参数计划\"}},
\t\t\t\t\t{type: \"text\",name: \"价格\",verify:\"pInt\",field: \"price\"},
\t\t\t\t\t//{type: \"checkbox\",name: \"服务类型\",field: \"um_provider.invest_type\", url:\"http://www.my-haimai.com/admin/api_user\",colKey:\"uid\",colName:\"username\"},  //异步获取数据的时候
\t\t\t\t\t{type: \"time\",name: \"创建时间\",verify:\"required\",field: \"create_at\"},
\t\t\t\t\t{type: \"select\",name: \"产品类型\",verify:\"required\",field: \"product_type_id\",sOption: {1: \"虚拟\",2: \"实体\",3:\"长租\"}},
\t\t\t\t],
\t\t\t\tlw:100,
\t\t\t\tselectKey:\"\",   //列字段id   例: id, product_id
\t\t\t\tverifyData:{
\t\t\t\t\toption: [{
\t\t\t\t\t\tverifyDate: \"pInt\"
\t\t\t\t\t}],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/api_presend_item/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/product/presend_item'   //添加成功返回的页面
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
        return "admin/product/add_presend_item.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 41,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 					{type: "text",name: "赠送项目名称",verify:"required",field: "name"},*/
/* 					{type: "text",name: "赠送项目值",verify:"pInt", field: "num"},*/
/* 					{type: "select",name: "数量单位",verify:"required",field: "num_unit",sOption: {0: "张",1: "小时"}},*/
/* 					{type: "select",name: "赠送类型",verify:"required",field: "type",sOption: {0: "纯文本",1: "参数计划"}},*/
/* 					{type: "text",name: "价格",verify:"pInt",field: "price"},*/
/* 					//{type: "checkbox",name: "服务类型",field: "um_provider.invest_type", url:"http://www.my-haimai.com/admin/api_user",colKey:"uid",colName:"username"},  //异步获取数据的时候*/
/* 					{type: "time",name: "创建时间",verify:"required",field: "create_at"},*/
/* 					{type: "select",name: "产品类型",verify:"required",field: "product_type_id",sOption: {1: "虚拟",2: "实体",3:"长租"}},*/
/* 				],*/
/* 				lw:100,*/
/* 				selectKey:"",   //列字段id   例: id, product_id*/
/* 				verifyData:{*/
/* 					option: [{*/
/* 						verifyDate: "pInt"*/
/* 					}],*/
/* 					el: ".layui-form"*/
/* 				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"",   //编辑详情接口*/
/* 				addEditUrl:'/admin/api_presend_item/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/product/presend_item'   //添加成功返回的页面*/
/* 			});*/
/* 			*/
/* 			*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
