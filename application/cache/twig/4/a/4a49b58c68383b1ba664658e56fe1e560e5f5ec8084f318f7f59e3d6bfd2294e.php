<?php

/* admin/user/userList.html */
class __TwigTemplate_f75c435f92a3bda097442b925a48eba58e8e30d243f97b38576f08b59a153de0 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/userList.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/userList.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/userList.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<!-- <a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a> -->
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
\t\t\tlayui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {
\t\t\t\tvar table = layui.table;
\t\t\t\tvar public = layui.public;
\t\t\t\tpublic.showTable({
\t\t\t\t\ttopTool: {
\t\t\t\t\t\tbtnArr: [{title: \"添加\",type: \"add\"},
\t\t\t\t\t\t{title: \"高级搜索\",type: \"hSearch\",},
\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
\t\t\t\t\t\t{title: \"导入\",type: \"improt\",},
\t\t\t\t\t\t{title: \"导出\",type: \"export\",}]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"uid\",width: 80,sort: true,title: \"ID\",type: \"\",sear: \"um_user.uid\"},
\t\t\t\t\t\t{field: \"username\",width: 120,title: \"用户名\",type: \"\",sear: \"um_user.name\"},
\t\t\t\t\t\t{field: \"nickname\",width: 80,title: \"昵称\",type: \"\",sear: \"um_user.nickname\"},
\t\t\t\t\t\t{field: \"sex\",width: 80,title: \"性别\",type: \"\",sear: \"um_user.sex\"},
\t\t\t\t\t\t{field: \"mobile\",width: 120,title: \"手机\",type: \"\",sear: \"um_user.mobile\"},
\t\t\t\t\t\t{field: \"mobilecode\",width: 120,title: \"手机认证码\",type: \"select\",sear: \"um_user.mobilecode\",enum: {0: \"未认证\",1:\"已认证\"}},
\t\t\t\t\t\t{field: \"score\",width: 120,title: \"积分\",type: \"\",sear: \"um_user.score\"},
\t\t\t\t\t\t{field: \"banlance\",width: 120,title: \"余额\",type: \"\",sear: \"um_user.banlance\"},
\t\t\t\t\t\t{field: \"type\",width: 80,title: \"类型\",type: \"select\",sear: \"um_user.type\",enum: {0: \"个人\",1:\"企业\"}},
\t\t\t\t\t\t{field: \"is_company\",width: 120,title: \"是否认证企业\",type: \"select\",sear: \"um_user.is_company\",enum: {0: \"虚拟服务\",1:\"实体服务\"}},
\t\t\t\t\t\t{field: \"is_provider\",width: 120,title: \"是否是服务商\",type: \"select\",sear: \"um_user.is_provider\",enum: {0: \"非\",1:\"是\"}},
\t\t\t\t\t\t{field: \"create_at\",width: 160,title: \"创建时间\",type: \"time\",sear: \"um_user.create_at\"},
\t\t\t\t\t\t{field: \"right\",width: 150,title: \"操作\",toolbar: ykp.\$('#barDemo'),align: \"center\",fixed: 'right',}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_user/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\twhere: {
\t\t\t\t\t\t\tfilter: \"\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"uid\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/editUser?id='},
\t\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/userInfo?id='},
\t\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/Api_user/delete'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [
\t\t\t\t\t\t\t{type: \"add\",url: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/addUser'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_user/delete'}, 
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
        return "admin/user/userList.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 66,  102 => 65,  94 => 60,  90 => 59,  86 => 58,  72 => 47,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<!-- <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a> -->*/
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
/* 			layui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {*/
/* 				var table = layui.table;*/
/* 				var public = layui.public;*/
/* 				public.showTable({*/
/* 					topTool: {*/
/* 						btnArr: [{title: "添加",type: "add"},*/
/* 						{title: "高级搜索",type: "hSearch",},*/
/* 						{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/* 						{title: "导入",type: "improt",},*/
/* 						{title: "导出",type: "export",}]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "uid",width: 80,sort: true,title: "ID",type: "",sear: "um_user.uid"},*/
/* 						{field: "username",width: 120,title: "用户名",type: "",sear: "um_user.name"},*/
/* 						{field: "nickname",width: 80,title: "昵称",type: "",sear: "um_user.nickname"},*/
/* 						{field: "sex",width: 80,title: "性别",type: "",sear: "um_user.sex"},*/
/* 						{field: "mobile",width: 120,title: "手机",type: "",sear: "um_user.mobile"},*/
/* 						{field: "mobilecode",width: 120,title: "手机认证码",type: "select",sear: "um_user.mobilecode",enum: {0: "未认证",1:"已认证"}},*/
/* 						{field: "score",width: 120,title: "积分",type: "",sear: "um_user.score"},*/
/* 						{field: "banlance",width: 120,title: "余额",type: "",sear: "um_user.banlance"},*/
/* 						{field: "type",width: 80,title: "类型",type: "select",sear: "um_user.type",enum: {0: "个人",1:"企业"}},*/
/* 						{field: "is_company",width: 120,title: "是否认证企业",type: "select",sear: "um_user.is_company",enum: {0: "虚拟服务",1:"实体服务"}},*/
/* 						{field: "is_provider",width: 120,title: "是否是服务商",type: "select",sear: "um_user.is_provider",enum: {0: "非",1:"是"}},*/
/* 						{field: "create_at",width: 160,title: "创建时间",type: "time",sear: "um_user.create_at"},*/
/* 						{field: "right",width: 150,title: "操作",toolbar: ykp.$('#barDemo'),align: "center",fixed: 'right',}*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}admin/api_user/grid",*/
/* 						method: "post",*/
/* 						id: 'tabel_user',*/
/* 						where: {*/
/* 							filter: ""*/
/* 						}*/
/* 					},*/
/* 					autoCol: true, //自定义列表*/
/* 					tool: {*/
/* 						id: "uid",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/user/editUser?id='},*/
/* 								{type: "detail",url: '{{base_url}}admin/user/userInfo?id='},*/
/* 								{type: "del",url: '{{base_url}}admin/Api_user/delete'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [*/
/* 							{type: "add",url: '{{base_url}}admin/user/addUser'},*/
/* 							{type: "plDel",url: '{{base_url}}admin/api_user/delete'}, */
/* 							{type: "improt",url: "/upload"},*/
/* 							{type: "export",url: "/upload"}*/
/* 						]*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 		*/
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
