<?php

/* admin/product/service1.html */
class __TwigTemplate_4d36b8230c05bfa32d2b06ecaac25ae0288856199f8eae6a862c322cadfb5a76 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/service1.html", 1)->display($context);
        // line 2
        echo "<style>
\tbody {margin: 10px;}
\t.demo-carousel {height: 200px;line-height: 200px;text-align: center;}
\t.layui-table-view .layui-table {width: 100%;}
\t.layui-btn {font-size: 13px;}
\t.model {padding: 20px;}
\t.layui-table-tool {padding: 4px 10px 0 0 !important;}
</style>
";
        // line 10
        $this->loadTemplate("admin/crumbs.html", "admin/product/service1.html", 10)->display($context);
        // line 11
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 12
        $this->loadTemplate("admin/import.html", "admin/product/service1.html", 12)->display($context);
        // line 13
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<script src=\"/resource/admin/js/jslib/jquery.table2excel.min.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initTabel();
\t\t},
\t\tinitTabel: function() {
\t\t\tlayui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {
\t\t\t\tvar table = layui.table;
\t\t\t\tvar public = layui.public;
\t\t\t\tpublic.showTable({
\t\t\t\t\ttopTool: {
\t\t\t\t\t\tel: \".demoTable\",
\t\t\t\t\t\tbtnArr: [{title: \"添加\",type: \"add\",url: \"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addService\"}, 
\t\t\t\t\t\t{title: \"高级搜索\",type: \"hSearch\",},
\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\",url: \"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "api/product/api_product/del\"},
\t\t\t\t\t\t{title: \"导入\",type: \"improt\",},
\t\t\t\t\t\t{title: \"导出\",type: \"export\",}]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"id\",width: 80,sort: true,title: \"ID\",type: \"\",sear: \"sm_service.id\"},
\t\t\t\t\t\t{field: \"name\",width: 80,title: \"名称\",type: \"\",sear: \"sm_service.name\"},
\t\t\t\t\t\t{field: \"icon\",width: 80,title: \"图标地址\",type: \"\",sear: \"sm_service.icon\"},
\t\t\t\t\t\t{field: \"title\",width: 150,title: \"标题简介\",type: \"\",sear: \"sm_service.title\"},
\t\t\t\t\t\t{field: \"content\",width: 150,title: \"服务内容\",type: \"\",sear: \"sm_service.content\"},
\t\t\t\t\t\t{field: \"pics\",width: 150,title: \"图片地址\",type: \"\",sear: \"sm_service.pice\"},
\t\t\t\t\t\t{field: \"type\",width: 150,title: \"类型\",type: \"\",sear: \"sm_service.type\"},
\t\t\t\t\t\t{field: \"is_limit_num\",width: 150,title: \"是否限制次数\",type: \"\",sear: \"sm_service.is_limit_num\"},
\t\t\t\t\t\t{field: \"create_at\",width: 200,title: \"创建时间\",type: \"time\",sear: \"sm_service.create_at\"},
\t\t\t\t\t\t{field: \"right\",width: 180,title: \"操作\",toolbar: ykp.\$('#barDemo'),align: \"center\",fixed: 'right',}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "api/product/api_product\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\twhere: {
\t\t\t\t\t\t\tfilter: \"\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/editService?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/serviceInfo?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "api/product/api_product/del'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addService'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "api/product/api_product/del'}, 
\t\t\t\t\t\t\t{type: \"improt\",url: \"/upload\"},
\t\t\t\t\t\t\t{type: \"export\",url: \"/upload\"}
\t\t\t\t\t\t]
\t\t\t\t\t}
\t\t\t\t});

\t\t\t});
\t\t
\t\t}
\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/product/service1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 75,  119 => 74,  112 => 70,  108 => 69,  104 => 68,  90 => 57,  69 => 39,  64 => 37,  38 => 13,  36 => 12,  33 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	body {margin: 10px;}*/
/* 	.demo-carousel {height: 200px;line-height: 200px;text-align: center;}*/
/* 	.layui-table-view .layui-table {width: 100%;}*/
/* 	.layui-btn {font-size: 13px;}*/
/* 	.model {padding: 20px;}*/
/* 	.layui-table-tool {padding: 4px 10px 0 0 !important;}*/
/* </style>*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <script src="/resource/admin/js/jslib/jquery.table2excel.min.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initTabel();*/
/* 		},*/
/* 		initTabel: function() {*/
/* 			layui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {*/
/* 				var table = layui.table;*/
/* 				var public = layui.public;*/
/* 				public.showTable({*/
/* 					topTool: {*/
/* 						el: ".demoTable",*/
/* 						btnArr: [{title: "添加",type: "add",url: "{{base_url}}admin/product/addService"}, */
/* 						{title: "高级搜索",type: "hSearch",},*/
/* 						{title: "批量删除",type: "plDel",class: "layui-btn-danger",url: "{{base_url}}api/product/api_product/del"},*/
/* 						{title: "导入",type: "improt",},*/
/* 						{title: "导出",type: "export",}]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "id",width: 80,sort: true,title: "ID",type: "",sear: "sm_service.id"},*/
/* 						{field: "name",width: 80,title: "名称",type: "",sear: "sm_service.name"},*/
/* 						{field: "icon",width: 80,title: "图标地址",type: "",sear: "sm_service.icon"},*/
/* 						{field: "title",width: 150,title: "标题简介",type: "",sear: "sm_service.title"},*/
/* 						{field: "content",width: 150,title: "服务内容",type: "",sear: "sm_service.content"},*/
/* 						{field: "pics",width: 150,title: "图片地址",type: "",sear: "sm_service.pice"},*/
/* 						{field: "type",width: 150,title: "类型",type: "",sear: "sm_service.type"},*/
/* 						{field: "is_limit_num",width: 150,title: "是否限制次数",type: "",sear: "sm_service.is_limit_num"},*/
/* 						{field: "create_at",width: 200,title: "创建时间",type: "time",sear: "sm_service.create_at"},*/
/* 						{field: "right",width: 180,title: "操作",toolbar: ykp.$('#barDemo'),align: "center",fixed: 'right',}*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}api/product/api_product",*/
/* 						method: "post",*/
/* 						id: 'tabel_user',*/
/* 						where: {*/
/* 							filter: ""*/
/* 						}*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/product/editService?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/product/serviceInfo?id='},*/
/* 							{type: "del",url: '{{base_url}}api/product/api_product/del'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/product/addService'},*/
/* 							{type: "plDel",url: '{{base_url}}api/product/api_product/del'}, */
/* 							{type: "improt",url: "/upload"},*/
/* 							{type: "export",url: "/upload"}*/
/* 						]*/
/* 					}*/
/* 				});*/
/* */
/* 			});*/
/* 		*/
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
