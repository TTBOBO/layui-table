<?php

/* admin/user/edit_Company_service.html */
class __TwigTemplate_19fc5beed1203baca343315933655182a5718ba516290274c480063db1c3c8b5 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/edit_Company_service.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/user/edit_Company_service.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"id\", display:true,field: \"um_company_service.id\"},
\t\t\t\t{type: \"text\",name: \"服务名称\",field: \"um_company_service.name\"},
\t\t\t\t\t{type: \"select\",name: \"大类ID\",field: \"um_company_service.cate_id\",sOption: {0: \"专业企服\",1: \"技孵宝\",2: \"i培训\",3: \"i传媒\",4: \"场地企服\"}},
\t\t\t\t\t{type: \"text\",name: \"行业ID\",field: \"um_company_service.industry_id\"},
\t\t\t\t\t{type: \"select\",name: \"服务类型\",field: \"um_company_service.type\",sOption: {0: \"未知\",1: \"专业培训\",2: \"IT服务\",3: \"视觉设计\",4: \"政策解读\",5:\"法律服务\"}},
\t\t\t\t\t{type:\"select\",name:'类型细分',field:'um_company_service.child_type',sOption: {0: \"未知\",1: \"企业培训\",2: \"创业培训\",3: \"融资培训\"}},
\t\t\t\t\t{type:'text',name:'城市ID',field:'um_company_service.city_ids'},
\t\t\t\t\t{type:'text',name:'卖点标签',field:'um_company_service.sell_label'},
\t\t\t\t\t{type:'text',name:'服务承诺标签',field:'um_company_service.promise_label'},
\t\t\t\t\t{type:'text',name:'访问量',field:'um_company_service.uv'},
\t\t\t\t\t{type:'text',name:'价格',field:'um_company_service.price'},
\t\t\t\t\t{type:'text',name:'收藏量',field:'um_company_service.collect_num'},
\t\t\t\t\t{type:'text',name:'产品介绍',field:'um_company_service.introduce'},
\t\t\t\t\t{type:'time',name:'创建时间',field:'um_company_service.create_at'},
\t\t\t\t\t{type:'text',name:'公司ID',field:'um_company.company_id',url:\"/admin/api_company_service/grid\",colKey:\"id\",colName:\"um_company.company_id\"}
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
\t\t\t\tselectKey:\"um_company_service.id\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/api_company_service/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/api_company_service/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/user/company_service'   //添加成功返回的页面
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
        return "admin/user/edit_Company_service.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 64,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "id", display:true,field: "um_company_service.id"},*/
/* 				{type: "text",name: "服务名称",field: "um_company_service.name"},*/
/* 					{type: "select",name: "大类ID",field: "um_company_service.cate_id",sOption: {0: "专业企服",1: "技孵宝",2: "i培训",3: "i传媒",4: "场地企服"}},*/
/* 					{type: "text",name: "行业ID",field: "um_company_service.industry_id"},*/
/* 					{type: "select",name: "服务类型",field: "um_company_service.type",sOption: {0: "未知",1: "专业培训",2: "IT服务",3: "视觉设计",4: "政策解读",5:"法律服务"}},*/
/* 					{type:"select",name:'类型细分',field:'um_company_service.child_type',sOption: {0: "未知",1: "企业培训",2: "创业培训",3: "融资培训"}},*/
/* 					{type:'text',name:'城市ID',field:'um_company_service.city_ids'},*/
/* 					{type:'text',name:'卖点标签',field:'um_company_service.sell_label'},*/
/* 					{type:'text',name:'服务承诺标签',field:'um_company_service.promise_label'},*/
/* 					{type:'text',name:'访问量',field:'um_company_service.uv'},*/
/* 					{type:'text',name:'价格',field:'um_company_service.price'},*/
/* 					{type:'text',name:'收藏量',field:'um_company_service.collect_num'},*/
/* 					{type:'text',name:'产品介绍',field:'um_company_service.introduce'},*/
/* 					{type:'time',name:'创建时间',field:'um_company_service.create_at'},*/
/* 					{type:'text',name:'公司ID',field:'um_company.company_id',url:"/admin/api_company_service/grid",colKey:"id",colName:"um_company.company_id"}*/
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
/* 				selectKey:"um_company_service.id",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/api_company_service/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/api_company_service/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/user/company_service'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
