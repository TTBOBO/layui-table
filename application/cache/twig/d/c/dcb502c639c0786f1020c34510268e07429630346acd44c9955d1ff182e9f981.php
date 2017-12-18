<?php

/* admin/auser/editCustomManager.html */
class __TwigTemplate_09b7f28ea5558e398cce52f16f354424cf4040aa7b88c64872079d0246fd0939 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/editCustomManager.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/auser/editCustomManager.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"id\",display:true, field: \"um_user.uid\"},
\t\t\t\t\t{type: \"seelct\",name: \"用户名\",field: \"um_user.username\",verify:\"\",url:\"/admin/api_user/grid\",colKey:'uid',colName:'username'},
\t\t\t\t\t{type: \"select\",name: \"公司名称\",field: \"um_user.company_id\",verify:\"\",url:\"/admin/Api_company/grid\",colKey:'id',colName:'company_name'},
\t\t\t\t\t{type: \"upload\",name: \"企业logo\",field: \"um_company.logo\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"公司网址\",field: \"um_company.website\",verify:\"\"},
\t\t\t\t\t{type: \"upload\",name: \"营业执照图片\",field: \"um_company.business_license\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"公司法人名称\",field: \"um_company.legal_person\",verify:\"\"},
\t\t\t\t\t{type: \"select\",name: \"类型\",field: \"um_user.type\",verify:\"\",sOption: {0: \"个人\",1: \"企业\"}},
\t\t\t\t\t{type: \"text\",name: \"企业信用代码\",field: \"um_company.credit_code\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"联系座机\",field: \"um_company.tel\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"联系手机\",field: \"um_company.mobile\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"企业子帐号ID\",field: \"um_company.alt_id\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"企业项目ID\",field: \"um_company.program_ids\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"企业合同ID\",field: \"um_company.contract_ids\",verify:\"\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",field: \"um_company.create_at\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"排序\",field: \"um_company.sort\",verify:\"\"},
\t\t\t\t\t{type: \"select\",name: \"是否认证企业\",field: \"um_user.is_company\",verify:\"\",sOption: {0: \"未认证\",1: \"已认证\"}}
\t\t\t\t],
\t\t\t\tselectKey:\"um_user.uid\",   //列字段id   例: id, product_id
\t\t\t\t/*verifyData:{
\t\t\t\t\toption: [{
\t\t\t\t\t\tverifyDate: \"password\"
\t\t\t\t\t}, {
\t\t\t\t\t\tverifyDate: \"tel\"
\t\t\t\t\t},{
\t\t\t\t\t\tverifyDate: \"test\",
\t\t\t\t\t\tmatch:[/\\d+\\.\\d+\\.\\d+\\.\\d+ /, '请填写正确的ip']
\t\t\t\t\t}],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},*/  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/am/api_custom_mamge/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/am/api_custom_mamge/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/customManager'   //添加成功返回的页面
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
        return "admin/auser/editCustomManager.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 56,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "id",display:true, field: "um_user.uid"},*/
/* 					{type: "seelct",name: "用户名",field: "um_user.username",verify:"",url:"/admin/api_user/grid",colKey:'uid',colName:'username'},*/
/* 					{type: "select",name: "公司名称",field: "um_user.company_id",verify:"",url:"/admin/Api_company/grid",colKey:'id',colName:'company_name'},*/
/* 					{type: "upload",name: "企业logo",field: "um_company.logo",verify:""},*/
/* 					{type: "text",name: "公司网址",field: "um_company.website",verify:""},*/
/* 					{type: "upload",name: "营业执照图片",field: "um_company.business_license",verify:""},*/
/* 					{type: "text",name: "公司法人名称",field: "um_company.legal_person",verify:""},*/
/* 					{type: "select",name: "类型",field: "um_user.type",verify:"",sOption: {0: "个人",1: "企业"}},*/
/* 					{type: "text",name: "企业信用代码",field: "um_company.credit_code",verify:""},*/
/* 					{type: "text",name: "联系座机",field: "um_company.tel",verify:""},*/
/* 					{type: "text",name: "联系手机",field: "um_company.mobile",verify:""},*/
/* 					{type: "text",name: "企业子帐号ID",field: "um_company.alt_id",verify:""},*/
/* 					{type: "text",name: "企业项目ID",field: "um_company.program_ids",verify:""},*/
/* 					{type: "text",name: "企业合同ID",field: "um_company.contract_ids",verify:""},*/
/* 					{type: "time",name: "创建时间",field: "um_company.create_at",verify:""},*/
/* 					{type: "text",name: "排序",field: "um_company.sort",verify:""},*/
/* 					{type: "select",name: "是否认证企业",field: "um_user.is_company",verify:"",sOption: {0: "未认证",1: "已认证"}}*/
/* 				],*/
/* 				selectKey:"um_user.uid",   //列字段id   例: id, product_id*/
/* 				/*verifyData:{*/
/* 					option: [{*/
/* 						verifyDate: "password"*/
/* 					}, {*/
/* 						verifyDate: "tel"*/
/* 					},{*/
/* 						verifyDate: "test",*/
/* 						match:[/\d+\.\d+\.\d+\.\d+ /, '请填写正确的ip']*/
/* 					}],*/
/* 					el: ".layui-form"*/
/* 				},*//*   //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/am/api_custom_mamge/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/am/api_custom_mamge/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/auser/customManager'   //添加成功返回的页面*/
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
/* */
/* */
/* */
/* */
/* */
