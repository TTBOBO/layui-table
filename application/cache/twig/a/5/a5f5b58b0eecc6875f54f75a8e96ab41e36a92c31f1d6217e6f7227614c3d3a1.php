<?php

/* admin/user/addr.html */
class __TwigTemplate_bd5da477d94036c3029f1eca3f390e85b61e113b55b0d1cc815f7541004a8b17 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/addr.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/addr.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/addr.html", 4)->display($context);
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
\t\t\t\t\t\tbtnArr: [
\t\t\t\t\t\t{title: \"添加\",type: \"add\"},
\t\t\t\t\t\t{title: \"高级搜索\",type: \"hSearch\",},
\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
\t\t\t\t\t\t{title: \"导出\",type: \"export\"}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"id\",width: 80,sort: true,title: \"地址ID\",type: \"\",sear: \"um_addr.id\"},
\t\t\t\t\t\t{field: \"uid\",width: 80,title: \"用户id\",type: \"\",sear: \"um_addr.uid\"},
\t\t\t\t\t\t{field: \"receiver\",width: 80,title: \"收货人\",type: \"\",sear: \"um_addr.receiver\"},
\t\t\t\t\t\t{field: \"mobile\",width: 120,title: \"手机号码1\",type: \"\",sear: \"um_addr.mobile\"},
\t\t\t\t\t\t{field: \"mobile2\",width: 120,title: \"手机号码2\",type: \"\",sear: \"um_addr.mobile2\"},
\t\t\t\t\t\t{field: \"mobile3\",width: 120,title: \"手机号码3\",type: \"\",sear: \"um_addr.mobile3\"},
\t\t\t\t\t\t{field: \"tel\",width: 120,title: \"座机\",type: \"\",sear: \"um_addr.tel\"},
\t\t\t\t\t\t{field: \"prov\",width: 120,title: \"省\",type: \"\",sear: \"um_addr.prov\"},
\t\t\t\t\t\t{field: \"city\",width: 80,title: \"市\",type: \"\",sear: \"um_addr.city\"},
\t\t\t\t\t\t{field: \"dist\",width: 120,title: \"县\",type: \"\",sear: \"um_addr.dist\"},
\t\t\t\t\t\t{field: \"street\",width: 120,title: \"街道\",type: \"\",sear: \"um_addr.street\"},
\t\t\t\t\t\t{field: \"default\",width: 160,title: \"是否为默认地址\",type: \"select\",sear: \"um_addr.default\",enum: {0:\"非默认\",1:\"默认\"}},
\t\t\t\t\t\t{field: \"create_at\",sort: true,width: 120,title: \"创建时间\",type: \"\",sear: \"um_addr.create_at\"},
\t\t\t\t\t\t{field: \"update_at\",sort: true,width: 120,title: \"更新时间\",type: \"\",sear: \"um_addr.update_at\"},
\t\t\t\t\t\t{field: \"right\",width: 150,title: \"操作\",toolbar: ykp.\$('#barDemo'),align: \"center\",fixed: 'right',}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_user_addr/grid\",
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
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/edit_addr?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/info_addr?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_user_addr/delete'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/add_addr'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_user_addr/delete'}, 
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
        return "admin/user/addr.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 68,  104 => 67,  97 => 63,  93 => 62,  89 => 61,  75 => 50,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a> */
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* */
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
/* 						btnArr: [*/
/* 						{title: "添加",type: "add"},*/
/* 						{title: "高级搜索",type: "hSearch",},*/
/* 						{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/* 						{title: "导出",type: "export"}*/
/* 						]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "id",width: 80,sort: true,title: "地址ID",type: "",sear: "um_addr.id"},*/
/* 						{field: "uid",width: 80,title: "用户id",type: "",sear: "um_addr.uid"},*/
/* 						{field: "receiver",width: 80,title: "收货人",type: "",sear: "um_addr.receiver"},*/
/* 						{field: "mobile",width: 120,title: "手机号码1",type: "",sear: "um_addr.mobile"},*/
/* 						{field: "mobile2",width: 120,title: "手机号码2",type: "",sear: "um_addr.mobile2"},*/
/* 						{field: "mobile3",width: 120,title: "手机号码3",type: "",sear: "um_addr.mobile3"},*/
/* 						{field: "tel",width: 120,title: "座机",type: "",sear: "um_addr.tel"},*/
/* 						{field: "prov",width: 120,title: "省",type: "",sear: "um_addr.prov"},*/
/* 						{field: "city",width: 80,title: "市",type: "",sear: "um_addr.city"},*/
/* 						{field: "dist",width: 120,title: "县",type: "",sear: "um_addr.dist"},*/
/* 						{field: "street",width: 120,title: "街道",type: "",sear: "um_addr.street"},*/
/* 						{field: "default",width: 160,title: "是否为默认地址",type: "select",sear: "um_addr.default",enum: {0:"非默认",1:"默认"}},*/
/* 						{field: "create_at",sort: true,width: 120,title: "创建时间",type: "",sear: "um_addr.create_at"},*/
/* 						{field: "update_at",sort: true,width: 120,title: "更新时间",type: "",sear: "um_addr.update_at"},*/
/* 						{field: "right",width: 150,title: "操作",toolbar: ykp.$('#barDemo'),align: "center",fixed: 'right',}*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}admin/api_user_addr/grid",*/
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
/* 						Event: [{type: "edit",url: '{{base_url}}admin/user/edit_addr?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/user/info_addr?id='},*/
/* 							{type: "del",url: '{{base_url}}admin/api_user_addr/delete'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/user/add_addr'},*/
/* 							{type: "plDel",url: '{{base_url}}admin/api_user_addr/delete'}, */
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
