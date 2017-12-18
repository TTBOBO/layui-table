<?php

/* admin/auser/editRole.html */
class __TwigTemplate_6ca9dce1c1d251891821c168e259e9af5a907193c1f096032f4c16de9dc1a51a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/editRole.html", 1)->display($context);
        // line 2
        echo "<style>

</style>
";
        // line 5
        $this->loadTemplate("admin/crumbs1.html", "admin/auser/editRole.html", 5)->display($context);
        // line 6
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 7
        $this->loadTemplate("admin/import.html", "admin/auser/editRole.html", 7)->display($context);
        // line 8
        echo "<link rel=\"stylesheet\" href=\"/resource/admin/ztree/css/bootstrapStyle/bootstrapStyle.css\" type=\"text/css\">

<script type=\"text/javascript\" src=\"/resource/admin/ztree/js/jquery.ztree.core.js\"></script>
<script type=\"text/javascript\" src=\"/resource/admin/ztree/js/jquery.ztree.excheck.js\"></script>
<script type=\"text/javascript\" src=\"/resource/admin/ztree/js/jquery.ztree.exedit.js\"></script>
<form style=\"padding-bottom: 100px;\">
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">名称：</label>
\t\t<div class=\"layui-input-inline\">
\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"\" id=\"name\" autocomplete=\"off\" placeholder=\"请输入名称\" class=\"layui-input\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "name", array()), "html", null, true);
        echo "\">
\t\t</div>
\t</div>
\t<ul id=\"treeDemo\" class=\"ztree\" style=\"padding-left: 100px;\"></ul>
\t<button class=\"layui-btn btn\" type=\"button\" style=\"margin-left: 100px;\">保存</button>
</form>

<script>
\tykp.defineClass(['element', \"jquery\", 'laytpl'], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initrole();
\t\t},
\t\t//初始化列表
\t\tinitrole: function() {
\t\t\tvar it = this;
\t\t\thm.load(function(option) {
\t\t\t\tvar form = option.form;
\t\t\t\tvar public = option.public;
\t\t\t\tvar setting = {
\t\t\t\t\ttreeId: 'tree',
\t\t\t\t\tview: {
\t\t\t\t\t\tselectedMulti: false,
\t\t\t\t\t\tshowIcon: true
\t\t\t\t\t},
\t\t\t\t\tcheck: {
\t\t\t\t\t\tenable: true
\t\t\t\t\t},
\t\t\t\t\tdata: {
\t\t\t\t\t\tsimpleData: {
\t\t\t\t\t\t\tenable: true,
\t\t\t\t\t\t\tidKey: 'id',
\t\t\t\t\t\t\tpIdKey: 'parent_id',
\t\t\t\t\t\t\trootPId: 0
\t\t\t\t\t\t},
\t\t\t\t\t\tkey: {
\t\t\t\t\t\t\tname: 'title'
\t\t\t\t\t\t},
\t\t\t\t\t},
\t\t\t\t\tedit: {
\t\t\t\t\t\tenable: false
\t\t\t\t\t},
\t\t\t\t};
\t\t\t\tvar str = hm.htmlDecodeByRegExp(\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["nodes"]) ? $context["nodes"] : null), "html", null, true);
        echo "\");
\t\t\t\tvar zNodes = JSON.parse(str);

\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\$.fn.zTree.init(\$(\"#treeDemo\"), setting, zNodes);
\t\t\t\t});

\t\t\t\t\$('.btn').click(function() {
\t\t\t\t\tvar name = \$('#name').val();
\t\t\t\t\tif(!name) {
\t\t\t\t\t\tlayer.msg('请输入名称');
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tvar treeObj = \$.fn.zTree.getZTreeObj(\"treeDemo\");
\t\t\t\t\tvar checked = treeObj.getCheckedNodes(true);
\t\t\t\t\tvar nodes = hm.getNodesId(checked);
\t\t\t\t\tif(!nodes) {
\t\t\t\t\t\t//提示请选择节点
\t\t\t\t\t\tlayer.msg('请选中权限');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tvar id = \"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "id", array()), "html", null, true);
        echo "\";
\t\t\t\t\tif(id == 1) {
\t\t\t\t\t\tlayer.msg('超级管理员禁止修改');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tvar data = {
\t\t\t\t\t\tid: id,
\t\t\t\t\t\tname: name,
\t\t\t\t\t\tpermission: nodes
\t\t\t\t\t};
\t\t\t\t\tvar parmas = ykp.getSessionStorage('iframeId');

\t\t\t\t\t//调用新增接口
\t\t\t\t\tykp.doAjax({
\t\t\t\t\t\turl: \"/admin/api_role/add_or_edit\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\tlayer.msg('边基尼成功');
\t\t\t\t\t\t\tself.parent.document.getElementById(parmas).src = \"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/role\";
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t});

\t\t\t})

\t\t}
\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/auser/editRole.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 101,  115 => 82,  91 => 61,  44 => 17,  33 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* */
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <link rel="stylesheet" href="/resource/admin/ztree/css/bootstrapStyle/bootstrapStyle.css" type="text/css">*/
/* */
/* <script type="text/javascript" src="/resource/admin/ztree/js/jquery.ztree.core.js"></script>*/
/* <script type="text/javascript" src="/resource/admin/ztree/js/jquery.ztree.excheck.js"></script>*/
/* <script type="text/javascript" src="/resource/admin/ztree/js/jquery.ztree.exedit.js"></script>*/
/* <form style="padding-bottom: 100px;">*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">名称：</label>*/
/* 		<div class="layui-input-inline">*/
/* 			<input type="text" name="title" lay-verify="" id="name" autocomplete="off" placeholder="请输入名称" class="layui-input" value="{{info.name}}">*/
/* 		</div>*/
/* 	</div>*/
/* 	<ul id="treeDemo" class="ztree" style="padding-left: 100px;"></ul>*/
/* 	<button class="layui-btn btn" type="button" style="margin-left: 100px;">保存</button>*/
/* </form>*/
/* */
/* <script>*/
/* 	ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initrole();*/
/* 		},*/
/* 		//初始化列表*/
/* 		initrole: function() {*/
/* 			var it = this;*/
/* 			hm.load(function(option) {*/
/* 				var form = option.form;*/
/* 				var public = option.public;*/
/* 				var setting = {*/
/* 					treeId: 'tree',*/
/* 					view: {*/
/* 						selectedMulti: false,*/
/* 						showIcon: true*/
/* 					},*/
/* 					check: {*/
/* 						enable: true*/
/* 					},*/
/* 					data: {*/
/* 						simpleData: {*/
/* 							enable: true,*/
/* 							idKey: 'id',*/
/* 							pIdKey: 'parent_id',*/
/* 							rootPId: 0*/
/* 						},*/
/* 						key: {*/
/* 							name: 'title'*/
/* 						},*/
/* 					},*/
/* 					edit: {*/
/* 						enable: false*/
/* 					},*/
/* 				};*/
/* 				var str = hm.htmlDecodeByRegExp("{{nodes}}");*/
/* 				var zNodes = JSON.parse(str);*/
/* */
/* 				$(document).ready(function() {*/
/* 					$.fn.zTree.init($("#treeDemo"), setting, zNodes);*/
/* 				});*/
/* */
/* 				$('.btn').click(function() {*/
/* 					var name = $('#name').val();*/
/* 					if(!name) {*/
/* 						layer.msg('请输入名称');*/
/* 						return false;*/
/* 					}*/
/* 					var treeObj = $.fn.zTree.getZTreeObj("treeDemo");*/
/* 					var checked = treeObj.getCheckedNodes(true);*/
/* 					var nodes = hm.getNodesId(checked);*/
/* 					if(!nodes) {*/
/* 						//提示请选择节点*/
/* 						layer.msg('请选中权限');*/
/* 						return;*/
/* 					}*/
/* 					var id = "{{info.id}}";*/
/* 					if(id == 1) {*/
/* 						layer.msg('超级管理员禁止修改');*/
/* 						return;*/
/* 					}*/
/* 					var data = {*/
/* 						id: id,*/
/* 						name: name,*/
/* 						permission: nodes*/
/* 					};*/
/* 					var parmas = ykp.getSessionStorage('iframeId');*/
/* */
/* 					//调用新增接口*/
/* 					ykp.doAjax({*/
/* 						url: "/admin/api_role/add_or_edit",*/
/* 						method: "post",*/
/* 						data: data,*/
/* 						success: function(res) {*/
/* 							layer.msg('边基尼成功');*/
/* 							self.parent.document.getElementById(parmas).src = "{{base_url}}/admin/auser/role";*/
/* 						}*/
/* 					})*/
/* 				});*/
/* */
/* 			})*/
/* */
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
