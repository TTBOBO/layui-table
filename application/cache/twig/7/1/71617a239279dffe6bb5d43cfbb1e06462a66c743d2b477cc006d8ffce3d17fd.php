<?php

/* admin/im/editEnterCompany.html */
class __TwigTemplate_9dc05a2208dee473d196638f8d033e21c359cbbb392d637155ea2d1f1132db02 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/editEnterCompany.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/im/editEnterCompany.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"主键\",display:true, field: \"om_iof_order-id\"},
\t\t\t\t\t{type: \"select\",name: \"用户名\",verify:\"tel\",field: \"um_company.uid\",url:\"/admin/api_user/grid\",colKey:\"uid\",colName:\"username\"},
\t\t\t\t\t{type: \"upload\",name: \"公司logo\",field: \"um_company.logo\"},
\t\t\t\t\t{type: \"select\",name: \"公司名称\",field: \"um_company.company_name\",url:\"/admin/Api_company/grid\",colKey:\"id\",colName:\"company_name\"},
\t\t\t\t\t{type: \"text\",name: \"公司网址\",field: \"um_company.website\"},
\t\t\t\t\t{type: \"text\",name: \"公司法人\",field: \"um_company.legal_person\"},
\t\t\t\t\t{type: \"upload\",name: \"营业执照\",field: \"um_company.business_license\"},
\t\t\t\t\t{type: \"text\",name: \"公司联系电话\",field: \"um_company.tel\"}
\t\t\t\t],
\t\t\t\tselectKey:\"om_iof_order-id\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/am/api_rz_company/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/am/api_rz_company/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/enter_company'   //添加成功返回的页面
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
        return "admin/im/editEnterCompany.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 45,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "主键",display:true, field: "om_iof_order-id"},*/
/* 					{type: "select",name: "用户名",verify:"tel",field: "um_company.uid",url:"/admin/api_user/grid",colKey:"uid",colName:"username"},*/
/* 					{type: "upload",name: "公司logo",field: "um_company.logo"},*/
/* 					{type: "select",name: "公司名称",field: "um_company.company_name",url:"/admin/Api_company/grid",colKey:"id",colName:"company_name"},*/
/* 					{type: "text",name: "公司网址",field: "um_company.website"},*/
/* 					{type: "text",name: "公司法人",field: "um_company.legal_person"},*/
/* 					{type: "upload",name: "营业执照",field: "um_company.business_license"},*/
/* 					{type: "text",name: "公司联系电话",field: "um_company.tel"}*/
/* 				],*/
/* 				selectKey:"om_iof_order-id",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/am/api_rz_company/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/am/api_rz_company/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/auser/enter_company'   //添加成功返回的页面*/
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
