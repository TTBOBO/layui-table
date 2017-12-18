<?php

/* admin/product/product_type.html */
class __TwigTemplate_6416e8b53eb4225e7a38e2362a3b130ca459416eee2642a9d208c3cfb6170205 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/product_type.html", 1)->display($context);
        // line 2
        echo "<style>
\tbody {
\t\tmargin: 10px;
\t}
\t
\t.demo-carousel {
\t\theight: 200px;
\t\tline-height: 200px;
\t\ttext-align: center;
\t}
\t
\t.layui-table-view .layui-table {
\t\twidth: 100%;
\t}
\t
\t.layui-btn {
\t\tfont-size: 13px;
\t}
\t
\t.model {
\t\tpadding: 20px;
\t}
\t
\t.layui-table-tool {
\t\tpadding: 4px 10px 0 0 !important;
\t}
\t
\t.layui-form-pane .layui-form-item[pane] {
\t\tborder: none !important;
\t}
\t
</style>
";
        // line 34
        $this->loadTemplate("admin/crumbs.html", "admin/product/product_type.html", 34)->display($context);
        // line 35
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
<div id=\"add_edit\" style=\"display: none;background: #eee; padding: 20px;\" class=\"model\">
\t<form class=\"layui-form\" action=\"\">
\t\t<div class=\"layui-form-item\">
\t\t\t<div class=\"layui-inline\">
\t\t\t\t<label class=\"layui-form-label\">名称：</label>
\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t<input type=\"text\" name=\"name\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输入名称\" class=\"layui-input\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</from>
</div>
";
        // line 48
        $this->loadTemplate("admin/import.html", "admin/product/product_type.html", 48)->display($context);
        // line 49
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<script src=\"/resource/admin/js/jslib/jquery.table2excel.min.js\"></script>
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
\t\t\t\t\t\tel: \".demoTable\",
\t\t\t\t\t\tbtnArr: [{
\t\t\t\t\t\t\t\ttitle: \"添加\",
\t\t\t\t\t\t\t\ttype: \"add\",
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\ttitle: \"高级搜索\",
\t\t\t\t\t\t\t\ttype: \"hSearch\",
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\ttitle: \"批量删除\",
\t\t\t\t\t\t\t\ttype: \"plDel\",
\t\t\t\t\t\t\t\tclass: \"layui-btn-danger\",
\t\t\t\t\t\t\t\turl: \"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del\"
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\ttitle: \"导入\",
\t\t\t\t\t\t\t\ttype: \"improt\",
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\ttitle: \"导出\",
\t\t\t\t\t\t\t\ttype: \"export\",
\t\t\t\t\t\t\t}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\tcols: [{
\t\t\t\t\t\t\tcheckbox: true,
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\tfield: \"product_type_id\",
\t\t\t\t\t\t\twidth: 80,
\t\t\t\t\t\t\tsort: true,
\t\t\t\t\t\t\ttitle: \"ID\",
\t\t\t\t\t\t\ttype: \"\",
\t\t\t\t\t\t\tsear: \"sm_service.id\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\tfield: \"name\",
\t\t\t\t\t\t\twidth: 120,
\t\t\t\t\t\t\ttitle: \"名称\",
\t\t\t\t\t\t\ttype: \"\",
\t\t\t\t\t\t\tsear: \"sm_service.name\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\tfield: \"create_at\",
\t\t\t\t\t\t\twidth: 200,
\t\t\t\t\t\t\ttitle: \"创建时间\",
\t\t\t\t\t\t\ttype: \"time\",
\t\t\t\t\t\t\tsear: \"sm_service.create_at\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\twidth: 180,
\t\t\t\t\t\t\ttitle: \"操作\",
\t\t\t\t\t\t\ttoolbar: ykp.\$('#barDemo'),
\t\t\t\t\t\t\talign: \"center\"
\t\t\t\t\t\t}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/api_product/product_type\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user'
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"product_type_id\",
\t\t\t\t\t\tconId: \"#add_edit\",
\t\t\t\t\t\tjumpUrl: true, //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{
\t\t\t\t\t\t\t\ttype: \"edit\",
\t\t\t\t\t\t\t\tfun: add_edit,
\t\t\t\t\t\t\t\turl: '";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/editService?id='
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\ttype: \"detail\",
\t\t\t\t\t\t\t\turl: '";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/serviceInfo?id='
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\ttype: \"del\",
\t\t\t\t\t\t\t\turl: '";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del'
\t\t\t\t\t\t\t}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{
\t\t\t\t\t\t\t\ttype: \"add\",
\t\t\t\t\t\t\t\tfun: add_edit,
\t\t\t\t\t\t\t\turl: '";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addService'
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\ttype: \"plDel\",
\t\t\t\t\t\t\t\turl: '";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del'
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\ttype:\"improt\",
\t\t\t\t\t\t\t\turl:\"/upload\"
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\ttype: \"export\",
\t\t\t\t\t\t\t\turl: \"/upload\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t]
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tfunction add_edit(id, callback) {
\t\t\t\t\tvar title =  id ? \"编辑\" : \"添加\";
\t\t\t\t\tvar index = public.layerOpen({
\t\t\t\t\t\tel: ykp.\$('#add_edit'),
\t\t\t\t\t\tarea: 'auto',
\t\t\t\t\t\ttitle: title
\t\t\t\t\t}, function() { //成功执行的回调
\t\t\t\t\t\tvar name = \$('#add_edit').find('input').val();
\t\t\t\t\t\tif(name == \"\") {
\t\t\t\t\t\t\tlayer.msg('请输入名称');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tvar data = {
\t\t\t\t\t\t\tname: name
\t\t\t\t\t\t};
\t\t\t\t\t\tif(id) {
\t\t\t\t\t\t\tdata.id = id;
\t\t\t\t\t\t}
\t\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\t\turl: \"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/type_edit_add\",
\t\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\tif(typeof callback == \"function\") {
\t\t\t\t\t\t\t\t\tcallback(res);
\t\t\t\t\t\t\t\t\tykp.prompt(title+ \"成功\")
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\tpublic.emptyVal(\"#add_edit\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}, function() { //取消执行的回调
\t\t\t\t\t\tpublic.emptyVal(\"#add_edit\");
\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t})
\t\t\t\t}
\t\t\t});
\t\t}
\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/product/product_type.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 192,  206 => 161,  199 => 157,  188 => 149,  181 => 145,  174 => 141,  159 => 129,  110 => 83,  74 => 49,  72 => 48,  57 => 35,  55 => 34,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	body {*/
/* 		margin: 10px;*/
/* 	}*/
/* 	*/
/* 	.demo-carousel {*/
/* 		height: 200px;*/
/* 		line-height: 200px;*/
/* 		text-align: center;*/
/* 	}*/
/* 	*/
/* 	.layui-table-view .layui-table {*/
/* 		width: 100%;*/
/* 	}*/
/* 	*/
/* 	.layui-btn {*/
/* 		font-size: 13px;*/
/* 	}*/
/* 	*/
/* 	.model {*/
/* 		padding: 20px;*/
/* 	}*/
/* 	*/
/* 	.layui-table-tool {*/
/* 		padding: 4px 10px 0 0 !important;*/
/* 	}*/
/* 	*/
/* 	.layui-form-pane .layui-form-item[pane] {*/
/* 		border: none !important;*/
/* 	}*/
/* 	*/
/* </style>*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* <div id="add_edit" style="display: none;background: #eee; padding: 20px;" class="model">*/
/* 	<form class="layui-form" action="">*/
/* 		<div class="layui-form-item">*/
/* 			<div class="layui-inline">*/
/* 				<label class="layui-form-label">名称：</label>*/
/* 				<div class="layui-input-block">*/
/* 					<input type="text" name="name" lay-verify="required" autocomplete="off" placeholder="请输入名称" class="layui-input">*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</from>*/
/* </div>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <script src="/resource/admin/js/jslib/jquery.table2excel.min.js"></script>*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initTabel();*/
/* 		},*/
/* */
/* 		initTabel: function() {*/
/* 			hm.load(function(option) {*/
/* 				var table = option.table;*/
/* 				var public = option.public;*/
/* 				public.showTable({*/
/* 					topTool: {*/
/* 						el: ".demoTable",*/
/* 						btnArr: [{*/
/* 								title: "添加",*/
/* 								type: "add",*/
/* 							}, {*/
/* 								title: "高级搜索",*/
/* 								type: "hSearch",*/
/* 							},*/
/* 							{*/
/* 								title: "批量删除",*/
/* 								type: "plDel",*/
/* 								class: "layui-btn-danger",*/
/* 								url: "{{base_url}}admin/api_product/del"*/
/* 							},*/
/* 							{*/
/* 								title: "导入",*/
/* 								type: "improt",*/
/* 							},*/
/* 							{*/
/* 								title: "导出",*/
/* 								type: "export",*/
/* 							}*/
/* 						]*/
/* 					},*/
/* 					cols: [{*/
/* 							checkbox: true,*/
/* 						},*/
/* 						{*/
/* 							field: "product_type_id",*/
/* 							width: 80,*/
/* 							sort: true,*/
/* 							title: "ID",*/
/* 							type: "",*/
/* 							sear: "sm_service.id"*/
/* 						},*/
/* 						{*/
/* 							field: "name",*/
/* 							width: 120,*/
/* 							title: "名称",*/
/* 							type: "",*/
/* 							sear: "sm_service.name"*/
/* 						},*/
/* 						{*/
/* 							field: "create_at",*/
/* 							width: 200,*/
/* 							title: "创建时间",*/
/* 							type: "time",*/
/* 							sear: "sm_service.create_at"*/
/* 						},*/
/* 						{*/
/* 							width: 180,*/
/* 							title: "操作",*/
/* 							toolbar: ykp.$('#barDemo'),*/
/* 							align: "center"*/
/* 						}*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}/admin/api_product/product_type",*/
/* 						method: "post",*/
/* 						id: 'tabel_user'*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "product_type_id",*/
/* 						conId: "#add_edit",*/
/* 						jumpUrl: true, //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{*/
/* 								type: "edit",*/
/* 								fun: add_edit,*/
/* 								url: '{{base_url}}admin/product/editService?id='*/
/* 							},*/
/* 							{*/
/* 								type: "detail",*/
/* 								url: '{{base_url}}admin/product/serviceInfo?id='*/
/* 							},*/
/* 							{*/
/* 								type: "del",*/
/* 								url: '{{base_url}}admin/api_product/del'*/
/* 							}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{*/
/* 								type: "add",*/
/* 								fun: add_edit,*/
/* 								url: '{{base_url}}admin/product/addService'*/
/* 							},*/
/* 							{*/
/* 								type: "plDel",*/
/* 								url: '{{base_url}}admin/api_product/del'*/
/* 							},{*/
/* 								type:"improt",*/
/* 								url:"/upload"*/
/* 							},{*/
/* 								type: "export",*/
/* 								url: "/upload"*/
/* 							}*/
/* 						]*/
/* 					}*/
/* 				});*/
/* */
/* 				function add_edit(id, callback) {*/
/* 					var title =  id ? "编辑" : "添加";*/
/* 					var index = public.layerOpen({*/
/* 						el: ykp.$('#add_edit'),*/
/* 						area: 'auto',*/
/* 						title: title*/
/* 					}, function() { //成功执行的回调*/
/* 						var name = $('#add_edit').find('input').val();*/
/* 						if(name == "") {*/
/* 							layer.msg('请输入名称');*/
/* 							return false;*/
/* 						}*/
/* 						var data = {*/
/* 							name: name*/
/* 						};*/
/* 						if(id) {*/
/* 							data.id = id;*/
/* 						}*/
/* 						ykp.doAjax({*/
/* 							url: "{{base_url}}admin/api_product/type_edit_add",*/
/* 							method: "post",*/
/* 							data: data,*/
/* 							success: function(res) {*/
/* 								if(typeof callback == "function") {*/
/* 									callback(res);*/
/* 									ykp.prompt(title+ "成功")*/
/* 								}*/
/* 								layer.closeAll();*/
/* 								public.emptyVal("#add_edit");*/
/* 							}*/
/* 						})*/
/* 					}, function() { //取消执行的回调*/
/* 						public.emptyVal("#add_edit");*/
/* 						layer.closeAll();*/
/* 					})*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
