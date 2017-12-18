<?php

/* admin/user/company.html */
class __TwigTemplate_40ed08d8c943fe0871241cf382cbd2ed58e7b61f73ce514699ae4b8ac9fe8a16 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/company.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/company.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/company.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script>

\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initTabel();
\t\t},
\t\tinitTabel: function() {
\t\t\thm.load(function(option) {
\t\t\t\tvar table = option.table;
\t\t\t\tvar public = option.public;
\t\t\t\tpublic.showTable({
\t\t\t\t\ttopTool: {
\t\t\t\t\t\tbtnArr: [{title: \"添加\",type: \"add\"},
\t\t\t\t\t\t{title: \"高级搜索\",type: \"hSearch\",},
\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
\t\t\t\t\t\t{title: \"导出\",type: \"export\",}]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},


\t\t\t\t\t
\t\t\t\t\t\t{field: \"id\",width: 80,sort: true,title: \"id\",hidden:true,type: \"\",sear: \"id\"},
\t\t\t\t\t\t{field: \"uid\",width: 80,title: \"用户ID\",type: \"\",sear: \"uid\"},
\t\t\t\t\t\t{field: \"company_name\",width: 80,title: \"公司名称\",type: \"\",sear: \"company_name\"},
\t\t\t\t\t\t{field: \"logo\",width: 150,title: \"企业logo\",type: \"image\",sear: \"\"},
\t\t\t\t\t\t{field: \"website\",width: 150,title: \"公司网址\",type: \"\",sear: \"website\"},
\t\t\t\t\t\t{field: \"qq\",width: 150,title: \"公司QQ\",type: \"\",sear: \"qq\"},
\t\t\t\t\t\t{field: \"prov\",width: 150,title: \"公司地址--省\",type: \"select\",sear: \"\"},
\t\t\t\t\t\t{field: \"city\",width: 150,title: \"公司地址--市\",type: \"\",sear: \"\"},
\t\t\t\t\t\t{field: \"dist\",width: 200,title: \"公司地址--区\",type: \"\",sear: \"\"},
\t\t\t\t\t\t{field: \"street\",width: 200,title: \"公司地址--街道\",type: \"\",sear: \"\"},
\t\t\t\t\t\t{field: \"business_license\",width: 150,title: \"营业执照图片\",type: \"image\",sear: \"\"},
\t\t\t\t\t\t{field: \"legal_person\",width: 150,title: \"公司法人名称\",type: \"\",sear: \"legal_person\"},
\t\t\t\t\t\t{field: \"credit_code\",width: 150,title: \"企业信用代码\",type: \"\",sear: \"credit_code\"},
\t\t\t\t\t\t{field: \"tel\",width: 120,title: \"联系座机\",type: \"\",sear: \"tel\"},
\t\t\t\t\t\t{field: \"mobile\",width: 120,title: \"联系手机\",type: \"\",sear: \"mobile\"},
\t\t\t\t\t\t{field: \"alt_id\",width: 120,title: \"企业子账号ID\",type: \"\",sear: \"alt_id\"},
\t\t\t\t\t\t{field: \"program_ids\",width: 120,title: \"企业项目ID\",type: \"\",sear: \"program_ids\"},
\t\t\t\t\t\t{field: \"contract_ids\",width: 120,title: \"企业合同ID\",type: \"\",sear: \"contract_ids\"},
\t\t\t\t\t\t{field: \"create_at\",width: 150,title: \"创建时间\",type: \"time\",sear: \"create_at\"},
\t\t\t\t\t\t{field: \"right\",width: 180,title: \"操作\",toolbar: ykp.\$('#barDemo'),align: \"center\",fixed: 'right',}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/Api_company/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user'
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/editCompany?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/info_Company?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/Api_company/delete'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/addCompany'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_company/delete'}, 
\t\t\t\t\t\t\t{type: \"improt\",url: \"/upload\"},
\t\t\t\t\t\t\t{type: \"export\",url: \"/upload\"}
\t\t\t\t\t\t]
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t});
</script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "admin/user/company.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 71,  107 => 70,  100 => 66,  96 => 65,  92 => 64,  81 => 56,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script>*/
/* */
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initTabel();*/
/* 		},*/
/* 		initTabel: function() {*/
/* 			hm.load(function(option) {*/
/* 				var table = option.table;*/
/* 				var public = option.public;*/
/* 				public.showTable({*/
/* 					topTool: {*/
/* 						btnArr: [{title: "添加",type: "add"},*/
/* 						{title: "高级搜索",type: "hSearch",},*/
/* 						{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/* 						{title: "导出",type: "export",}]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* */
/* */
/* 					*/
/* 						{field: "id",width: 80,sort: true,title: "id",hidden:true,type: "",sear: "id"},*/
/* 						{field: "uid",width: 80,title: "用户ID",type: "",sear: "uid"},*/
/* 						{field: "company_name",width: 80,title: "公司名称",type: "",sear: "company_name"},*/
/* 						{field: "logo",width: 150,title: "企业logo",type: "image",sear: ""},*/
/* 						{field: "website",width: 150,title: "公司网址",type: "",sear: "website"},*/
/* 						{field: "qq",width: 150,title: "公司QQ",type: "",sear: "qq"},*/
/* 						{field: "prov",width: 150,title: "公司地址--省",type: "select",sear: ""},*/
/* 						{field: "city",width: 150,title: "公司地址--市",type: "",sear: ""},*/
/* 						{field: "dist",width: 200,title: "公司地址--区",type: "",sear: ""},*/
/* 						{field: "street",width: 200,title: "公司地址--街道",type: "",sear: ""},*/
/* 						{field: "business_license",width: 150,title: "营业执照图片",type: "image",sear: ""},*/
/* 						{field: "legal_person",width: 150,title: "公司法人名称",type: "",sear: "legal_person"},*/
/* 						{field: "credit_code",width: 150,title: "企业信用代码",type: "",sear: "credit_code"},*/
/* 						{field: "tel",width: 120,title: "联系座机",type: "",sear: "tel"},*/
/* 						{field: "mobile",width: 120,title: "联系手机",type: "",sear: "mobile"},*/
/* 						{field: "alt_id",width: 120,title: "企业子账号ID",type: "",sear: "alt_id"},*/
/* 						{field: "program_ids",width: 120,title: "企业项目ID",type: "",sear: "program_ids"},*/
/* 						{field: "contract_ids",width: 120,title: "企业合同ID",type: "",sear: "contract_ids"},*/
/* 						{field: "create_at",width: 150,title: "创建时间",type: "time",sear: "create_at"},*/
/* 						{field: "right",width: 180,title: "操作",toolbar: ykp.$('#barDemo'),align: "center",fixed: 'right',}*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}admin/Api_company/grid",*/
/* 						method: "post",*/
/* 						id: 'tabel_user'*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/user/editCompany?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/user/info_Company?id='},*/
/* 							{type: "del",url: '{{base_url}}admin/Api_company/delete'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/user/addCompany'},*/
/* 							{type: "plDel",url: '{{base_url}}admin/api_company/delete'}, */
/* 							{type: "improt",url: "/upload"},*/
/* 							{type: "export",url: "/upload"}*/
/* 						]*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
