<?php

/* admin/user/addCompany.html */
class __TwigTemplate_9fbcd21ccb9f2025918f3ffe325a00899120b279a814cb76365d7882bb1e861c extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/addCompany.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/user/addCompany.html", 9)->display($context);
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
\t\t\t\tlist: [
\t\t\t\t{type: \"select\",name: \"公司名称\",field: \"company_name\",url:\"/admin/Api_company/grid\",colKey:\"id\",colName:\"company_name\"},
\t\t\t\t\t{type: \"upload\",name: \"企业logo\",field: \"logo\"},
\t\t\t\t\t{type: \"text\",name: \"公司网址\",field: \"website\",verify:\"url\"},
\t\t\t\t\t{type: \"text\",name: \"公司QQ\",field: \"qq\",verify:\"qq\"},
\t\t\t\t\t{type:'upload',name:'营业执照图片',field:'business_license'},
\t\t\t\t\t{type:'text',name:'企业信用代码',field:'credit_code'},
\t\t\t\t\t{type:'text',name:'公司法人名称',field:'legal_person'},
\t\t\t\t\t{type:'text',name:'联系座机',field:'tel'},
\t\t\t\t\t{type:'text',name:'联系手机',field:'mobile',verify:\"tel\"}
\t\t\t\t],
\t\t\t\t/*{field: \"uid\",width: 80,title: \"用户ID\",type: \"\",sear: \"um_company.uid\"},
\t\t\t\t\t
\t\t\t\t\t\t{field: \"legal_person\",width: 150,title: \"公司法人名称\",type: \"\",sear: \"um_company.legal_person\"},
\t\t\t\t\t\t{field: \"credit_code\",width: 150,title: \"企业信用代码\",type: \"\",sear: \"um_company.credit_code\"},
\t\t\t\t\t\t{field: \"tel\",width: 120,title: \"联系座机\",type: \"\",sear: \"um_company.tel\"},
\t\t\t\t\t\t{field: \"mobile\",width: 120,title: \"联系手机\",type: \"\",sear: \"um_company.mobile\"},
\t\t\t\t\t\t{field: \"alt_id\",width: 120,title: \"企业子账号ID\",type: \"\",sear: \"um_company.alt_id\"},
\t\t\t\t\t\t{field: \"program_ids\",width: 120,title: \"企业项目ID\",type: \"\",sear: \"um_company.program_ids\"},
\t\t\t\t\t\t{field: \"contract_ids\",width: 120,title: \"企业合同ID\",type: \"\",sear: \"um_company.contract_ids\"},
\t\t\t\t\t\t{field: \"create_at\",width: 150,title: \"创建时间\",type: \"time\",sear: \"um_company.create_at\"},*/
\t\t\t\tselectKey:\"\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"admin/Api_company/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/Api_company/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/user/company'   //添加成功返回的页面
\t\t\t});
\t\t},
\t});
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/user/addCompany.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 59,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* */
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom();*/
/* 		},*/
/* */
/* 		initFrom: function() {*/
/* 			hm.showAddEdit({*/
/* 				el: ".layui-form",*/
/* 				list: [*/
/* 				{type: "select",name: "公司名称",field: "company_name",url:"/admin/Api_company/grid",colKey:"id",colName:"company_name"},*/
/* 					{type: "upload",name: "企业logo",field: "logo"},*/
/* 					{type: "text",name: "公司网址",field: "website",verify:"url"},*/
/* 					{type: "text",name: "公司QQ",field: "qq",verify:"qq"},*/
/* 					{type:'upload',name:'营业执照图片',field:'business_license'},*/
/* 					{type:'text',name:'企业信用代码',field:'credit_code'},*/
/* 					{type:'text',name:'公司法人名称',field:'legal_person'},*/
/* 					{type:'text',name:'联系座机',field:'tel'},*/
/* 					{type:'text',name:'联系手机',field:'mobile',verify:"tel"}*/
/* 				],*/
/* 				/*{field: "uid",width: 80,title: "用户ID",type: "",sear: "um_company.uid"},*/
/* 					*/
/* 						{field: "legal_person",width: 150,title: "公司法人名称",type: "",sear: "um_company.legal_person"},*/
/* 						{field: "credit_code",width: 150,title: "企业信用代码",type: "",sear: "um_company.credit_code"},*/
/* 						{field: "tel",width: 120,title: "联系座机",type: "",sear: "um_company.tel"},*/
/* 						{field: "mobile",width: 120,title: "联系手机",type: "",sear: "um_company.mobile"},*/
/* 						{field: "alt_id",width: 120,title: "企业子账号ID",type: "",sear: "um_company.alt_id"},*/
/* 						{field: "program_ids",width: 120,title: "企业项目ID",type: "",sear: "um_company.program_ids"},*/
/* 						{field: "contract_ids",width: 120,title: "企业合同ID",type: "",sear: "um_company.contract_ids"},*/
/* 						{field: "create_at",width: 150,title: "创建时间",type: "time",sear: "um_company.create_at"},*//* */
/* 				selectKey:"",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"admin/Api_company/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/Api_company/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/user/company'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
