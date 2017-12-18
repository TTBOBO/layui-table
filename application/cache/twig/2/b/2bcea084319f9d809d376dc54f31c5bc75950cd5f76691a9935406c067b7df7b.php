<?php

/* admin/product/addService.html */
class __TwigTemplate_9a6b7ff1e45e900528e91cf13693f9e2bc0c24bf7f735a8813d77b084f9c969a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/addService.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/product/addService.html", 9)->display($context);
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
\t\t\t\t\t{type: \"text\",name: \"名称\",field: \"name\"},
\t\t\t\t\t{type: \"text\",name: \"服务简介\",verify:\"tel\", field: \"title\"},
\t\t\t\t\t{type: \"text\",name: \"服务内容\",field: \"content\",},
\t\t\t\t\t{type: \"radio\",name: \"服务类型\",block:true,field: \"type\",sOption: {0: \"股权投资\",1: \"债权投资\"}},
\t\t\t\t\t{type: \"radio\",name: \"限制次数\",block:true,field: \"is_limit_num\",sOption: {0: \"限制\",1: \"不限制\"}},
\t\t\t\t\t//{type: \"checkbox\",name: \"服务类型\",field: \"um_provider.invest_type\", url:\"http://www.my-haimai.com/admin/api_user\",colKey:\"uid\",colName:\"username\"},  //异步获取数据的时候
\t\t\t\t\t{type: \"upload\",name: \"图片\",field: \"pics\"},
\t\t\t\t\t{type: \"upload\",name: \"图标\",field: \"icon\",height:180},
\t\t\t\t],
\t\t\t\tselectKey:\"\",   //列字段id   例: id, product_id
\t\t\t\tverifyData:{
\t\t\t\t\toption: [{
\t\t\t\t\t\tverifyDate: \"tel\"
\t\t\t\t\t}],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},  //检索  默认  ''  要检索时  添加检索*/
\t\t\t\tinfoUrl:\"\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/Api_product/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/product/service'   //添加成功返回的页面
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
        return "admin/product/addService.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 40,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 					{type: "text",name: "名称",field: "name"},*/
/* 					{type: "text",name: "服务简介",verify:"tel", field: "title"},*/
/* 					{type: "text",name: "服务内容",field: "content",},*/
/* 					{type: "radio",name: "服务类型",block:true,field: "type",sOption: {0: "股权投资",1: "债权投资"}},*/
/* 					{type: "radio",name: "限制次数",block:true,field: "is_limit_num",sOption: {0: "限制",1: "不限制"}},*/
/* 					//{type: "checkbox",name: "服务类型",field: "um_provider.invest_type", url:"http://www.my-haimai.com/admin/api_user",colKey:"uid",colName:"username"},  //异步获取数据的时候*/
/* 					{type: "upload",name: "图片",field: "pics"},*/
/* 					{type: "upload",name: "图标",field: "icon",height:180},*/
/* 				],*/
/* 				selectKey:"",   //列字段id   例: id, product_id*/
/* 				verifyData:{*/
/* 					option: [{*/
/* 						verifyDate: "tel"*/
/* 					}],*/
/* 					el: ".layui-form"*/
/* 				},  //检索  默认  ''  要检索时  添加检索*//* */
/* 				infoUrl:"",   //编辑详情接口*/
/* 				addEditUrl:'/admin/Api_product/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/product/service'   //添加成功返回的页面*/
/* 			});*/
/* 			*/
/* 			*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
