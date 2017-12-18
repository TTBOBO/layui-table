<?php

/* admin/auser/edit_invoice.html */
class __TwigTemplate_96101d2e1ee3c5bde2dde92ce654bbc28bcdd69da84c952f63e9dec367dc1a8e extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/edit_invoice.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/auser/edit_invoice.html", 9)->display($context);
        // line 10
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 30px;\">
</form>
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
\t\t\t\tlist: [{type: \"text\",name: \"id\",display:true, field: \"am_invoice.id\"},
\t\t\t\t\t{type: \"text\",name: \"发票名称\",verify:\"tel\",field: \"am_invoice.name\"},
\t\t\t\t\t{type: \"select\",name: \"公司ID\",field: \"am_invoice.company_id\",url:'/admin/Api_company/grid',colKey:\"id\",colName:\"company_name\"},
\t\t\t\t\t{type: \"text\",name: \"金额\",field: \"am_invoice.price\"},
\t\t\t\t\t{type: \"text\",name: \"税点\",verify:\"tel\",field: \"am_invoice.tax_point\"},
\t\t\t\t\t{type: \"select\",name: \"类型\",verify:\"tel\",field: \"am_invoice.type\",sOption: {0: \"普票\",1: \"专票\"}},
\t\t\t\t\t{type: \"upload\",name: \"发票图片\",field: \"am_invoice.pic\"},
\t\t\t\t\t{type: \"text\",name: \"快递费用\",field: \"am_invoice.express_price\"},
\t\t\t\t\t{type: \"select\",name: \"邮寄状态\",verify:\"tel\",field: \"am_invoice.express_status\",sOption: {0: \"未寄出\",1: \"已寄出\"}},
\t\t\t\t\t{type: \"text\",name: \"快递编码\",verify:\"tel\",field: \"am_invoice.express_code\"},
\t\t\t\t\t{type: \"text\",name: \"快递名称\",field: \"am_invoice.express_name\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",field: \"am_invoice.create_at\"}
\t\t\t\t],
\t\t\t\tselectKey:\"am_invoice.id\",   //列字段id   例: id, product_id
//\t\t\t\tverifyData:{
//\t\t\t\t\toption: [{
//\t\t\t\t\t\tverifyDate: \"password\"
//\t\t\t\t\t}, {
//\t\t\t\t\t\tverifyDate: \"tel\"
//\t\t\t\t\t},{
//\t\t\t\t\t\tverifyDate: \"test\",
//\t\t\t\t\t\tmatch:[/\\d+\\.\\d+\\.\\d+\\.\\d+ /, '请填写正确的ip']
//\t\t\t\t\t}],
//\t\t\t\t\tel: \".layui-form\"
//\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/am/Api_invoice/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/am/Api_invoice/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/invoice'   //添加成功返回的页面
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
        return "admin/auser/edit_invoice.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 49,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* <form class="layui-form" action="" style="width: 700px; padding-bottom: 30px;">*/
/* </form>*/
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
/* 				list: [{type: "text",name: "id",display:true, field: "am_invoice.id"},*/
/* 					{type: "text",name: "发票名称",verify:"tel",field: "am_invoice.name"},*/
/* 					{type: "select",name: "公司ID",field: "am_invoice.company_id",url:'/admin/Api_company/grid',colKey:"id",colName:"company_name"},*/
/* 					{type: "text",name: "金额",field: "am_invoice.price"},*/
/* 					{type: "text",name: "税点",verify:"tel",field: "am_invoice.tax_point"},*/
/* 					{type: "select",name: "类型",verify:"tel",field: "am_invoice.type",sOption: {0: "普票",1: "专票"}},*/
/* 					{type: "upload",name: "发票图片",field: "am_invoice.pic"},*/
/* 					{type: "text",name: "快递费用",field: "am_invoice.express_price"},*/
/* 					{type: "select",name: "邮寄状态",verify:"tel",field: "am_invoice.express_status",sOption: {0: "未寄出",1: "已寄出"}},*/
/* 					{type: "text",name: "快递编码",verify:"tel",field: "am_invoice.express_code"},*/
/* 					{type: "text",name: "快递名称",field: "am_invoice.express_name"},*/
/* 					{type: "time",name: "创建时间",field: "am_invoice.create_at"}*/
/* 				],*/
/* 				selectKey:"am_invoice.id",   //列字段id   例: id, product_id*/
/* //				verifyData:{*/
/* //					option: [{*/
/* //						verifyDate: "password"*/
/* //					}, {*/
/* //						verifyDate: "tel"*/
/* //					},{*/
/* //						verifyDate: "test",*/
/* //						match:[/\d+\.\d+\.\d+\.\d+ /, '请填写正确的ip']*/
/* //					}],*/
/* //					el: ".layui-form"*/
/* //				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/am/Api_invoice/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/am/Api_invoice/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/auser/invoice'   //添加成功返回的页面*/
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
/* */
/* */
