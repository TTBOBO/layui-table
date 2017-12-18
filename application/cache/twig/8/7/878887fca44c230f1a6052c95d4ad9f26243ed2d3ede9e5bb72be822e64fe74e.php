<?php

/* admin/im/enter_company.html */
class __TwigTemplate_1932ed1aa6679e697004697b6d79fa3aaa018a7b921bb90c98d973ed3dba90bf extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/enter_company.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/im/enter_company.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/im/enter_company.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
\t\t\t\t\t\t{title: \"高级搜索\",type: \"hSearch\"},
\t\t\t\t\t\t{title: \"导入\",type: \"improt\"},
\t\t\t\t\t\t{title: \"导出\",type: \"export\"}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"om_iof_order-id\",width: 80,sort: true,title: \"主键\",type: \"\",sear: \"om_iof_order-id\"},
\t\t\t\t\t\t{field: \"um_user-username\",width: 120,title: \"用户名\",type: \"\",sear: \"um_user-username\"},
\t\t\t\t\t\t{field: \"um_company-logo\",width: 150,title: \"公司logo\",type: \"image\",sear: \"\"},
\t\t\t\t\t\t{field: \"um_company-company_name\",width: 150,title: \"公司名称\",type: \"\",sear: \"um_company-company_name\"},
\t\t\t\t\t\t{field: \"um_company-website\",width: 150,title: \"公司网址\",type: \"\",sear: \"um_company-website\"},
\t\t\t\t\t\t{field: \"um_company-legal_person\",width: 150,title: \"公司法人\",type: \"\",sear: \"um_company-legal_person\"},
\t\t\t\t\t\t{field: \"um_company-business_license\",width: 150,title: \"营业执照\",type: \"\",sear: \"\"},
\t\t\t\t\t\t{field: \"um_company-tel\",width: 150,title: \"公司联系电话\",type: \"\",sear: \"um_company-tel\"},
\t\t\t\t\t\t{field: \"right\",width: 150,title: \"操作\",toolbar: ykp.\$('#barDemo'),align: \"center\",fixed: 'right'}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/am/api_rz_company/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\t where: {
                            filter: \"\"
                        },
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"om_iof_order-id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/editEnterCompany?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/infoEnterCompany?id='},
\t\t\t\t\t\t\t{type: \"del\", url: '/admin/am/api_rz_company/delete'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [
\t\t\t\t\t\t\t{type: \"add\",url: '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/addEnterCompany'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/am/api_rz_company/delete'},
\t\t\t\t\t\t\t{type: \"improt\",url: \"/upload\"},
\t\t\t\t\t\t\t{type: \"export\",url: \"/upload\"}
\t\t\t\t\t\t]
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t
\t\t\tfunction getData(res,callback) {
\t\t\t\tconsole.log(res);
\t\t\t\tif(typeof callback == 'function') {
\t\t\t\t\tcallback(res.data);
\t\t\t\t}
\t\t\t\tconsole.log(res.data);
\t\t\t}
\t\t}
\t});
</script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "admin/im/enter_company.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 62,  95 => 61,  86 => 55,  82 => 54,  68 => 43,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	 <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script>*/
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
/* 						{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/* 						{title: "高级搜索",type: "hSearch"},*/
/* 						{title: "导入",type: "improt"},*/
/* 						{title: "导出",type: "export"}*/
/* 						]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "om_iof_order-id",width: 80,sort: true,title: "主键",type: "",sear: "om_iof_order-id"},*/
/* 						{field: "um_user-username",width: 120,title: "用户名",type: "",sear: "um_user-username"},*/
/* 						{field: "um_company-logo",width: 150,title: "公司logo",type: "image",sear: ""},*/
/* 						{field: "um_company-company_name",width: 150,title: "公司名称",type: "",sear: "um_company-company_name"},*/
/* 						{field: "um_company-website",width: 150,title: "公司网址",type: "",sear: "um_company-website"},*/
/* 						{field: "um_company-legal_person",width: 150,title: "公司法人",type: "",sear: "um_company-legal_person"},*/
/* 						{field: "um_company-business_license",width: 150,title: "营业执照",type: "",sear: ""},*/
/* 						{field: "um_company-tel",width: 150,title: "公司联系电话",type: "",sear: "um_company-tel"},*/
/* 						{field: "right",width: 150,title: "操作",toolbar: ykp.$('#barDemo'),align: "center",fixed: 'right'}*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}admin/am/api_rz_company/grid",*/
/* 						method: "post",*/
/* 						id: 'tabel_user',*/
/* 						 where: {*/
/*                             filter: ""*/
/*                         },*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "om_iof_order-id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/auser/editEnterCompany?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/auser/infoEnterCompany?id='},*/
/* 							{type: "del", url: '/admin/am/api_rz_company/delete'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [*/
/* 							{type: "add",url: '{{base_url}}admin/auser/addEnterCompany'},*/
/* 							{type: "plDel",url: '{{base_url}}admin/am/api_rz_company/delete'},*/
/* 							{type: "improt",url: "/upload"},*/
/* 							{type: "export",url: "/upload"}*/
/* 						]*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 			*/
/* 			function getData(res,callback) {*/
/* 				console.log(res);*/
/* 				if(typeof callback == 'function') {*/
/* 					callback(res.data);*/
/* 				}*/
/* 				console.log(res.data);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
