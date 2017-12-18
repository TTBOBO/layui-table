<?php

/* admin/user/company_service_cat.html */
class __TwigTemplate_0d5afbd52faf60279e136cf0d982c9f720a72efe93ab63129b2b9e07488583d3 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/company_service_cat.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/company_service_cat.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/company_service_cat.html", 4)->display($context);
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
\t\t\t\t\t\tbtnArr: [{title: \"添加\",type: \"add\",url: \"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addService\"}, 
\t\t\t\t\t\t{title: \"高级搜索\",type: \"hSearch\",},
\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\",url: \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del\"},
\t\t\t\t\t\t{title: \"导入\",type: \"improt\",},
\t\t\t\t\t\t{title: \"导出\",type: \"export\",}]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"id\",width: 50,title: \"ID\",type: \"\",sear: \"um_company_service_cate.id\"},
\t\t\t\t\t\t{field: \"parent_id\",width: 100,title: \"父类ID\",type: \"\",sear: \"um_company_service_cate.parent_id\"},
\t\t\t\t\t\t{field: \"create_at\",width: 150,title: \"创建时间\",type: \"time\",sear: \"um_company_service_cate.create_at\"},
\t\t\t\t\t\t{field: \"name\",width: 150,title: \"测试服务类型\",type: \"\",sear: \"um_company_service_cate.name\"},
\t\t\t\t\t\t {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right', }
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_company_service_cate/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\twhere: {
\t\t\t\t\t\t\tfilter: \"\"
\t\t\t\t\t\t},
\t\t\t\t\t\tdata: getData
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/editService?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/info_company_service_cat?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addService'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del'}, 
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

</html>";
    }

    public function getTemplateName()
    {
        return "admin/user/company_service_cat.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 57,  99 => 56,  92 => 52,  88 => 51,  84 => 50,  69 => 38,  53 => 25,  48 => 23,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/* 						btnArr: [{title: "添加",type: "add",url: "{{base_url}}admin/product/addService"}, */
/* 						{title: "高级搜索",type: "hSearch",},*/
/* 						{title: "批量删除",type: "plDel",class: "layui-btn-danger",url: "{{base_url}}admin/api_product/del"},*/
/* 						{title: "导入",type: "improt",},*/
/* 						{title: "导出",type: "export",}]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "id",width: 50,title: "ID",type: "",sear: "um_company_service_cate.id"},*/
/* 						{field: "parent_id",width: 100,title: "父类ID",type: "",sear: "um_company_service_cate.parent_id"},*/
/* 						{field: "create_at",width: 150,title: "创建时间",type: "time",sear: "um_company_service_cate.create_at"},*/
/* 						{field: "name",width: 150,title: "测试服务类型",type: "",sear: "um_company_service_cate.name"},*/
/* 						 {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right', }*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}admin/api_company_service_cate/grid",*/
/* 						method: "post",*/
/* 						id: 'tabel_user',*/
/* 						where: {*/
/* 							filter: ""*/
/* 						},*/
/* 						data: getData*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/user/editService?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/user/info_company_service_cat?id='},*/
/* 							{type: "del",url: '{{base_url}}admin/api_product/del'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/product/addService'},*/
/* 							{type: "plDel",url: '{{base_url}}admin/api_product/del'}, */
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
