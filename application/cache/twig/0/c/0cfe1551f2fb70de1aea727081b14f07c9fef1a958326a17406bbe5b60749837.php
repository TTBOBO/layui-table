<?php

/* admin/user/active_tex.html */
class __TwigTemplate_56c7f1ad7474fec22d3f7935c9491694074bc633627b27dacf08d2769d493ee6 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/active_tex.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/active_tex.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/active_tex.html", 4)->display($context);
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
\t\t\t\t\t\t{field: \"um_program-id\",width: 80,sort: true,title: \"ID\",type: \"\",sear: \"um_program-id\"},
\t\t\t\t\t\t{field: \"um_user-username\",width: 100,title: \"用户名称\",type: \"\",sear: \"um_user-username\"},
\t\t\t\t\t\t{field: \"um_company-company_name\",width: 100,title: \"公司类型\",type: \"select\",sear: \"um_company-company_name\",enum: {0: \"个人项目\",1:\"公司项目\"}},
\t\t\t\t\t\t{field: \"um_program-name\",width: 100,title: \"项目名称\",type: \"\",sear: \"um_program-name\"},
\t\t\t\t\t\t{field: \"um_program-thumb\",width: 100,title: \"项目主题\",type: \"image\",sear: \"um_program-thumb\"},
\t\t\t\t\t\t{field: \"um_program-pics\",width: 100,title: \"项目图片\",type: \"image\",sear: \"um_program-pics\"},
\t\t\t\t\t\t{field: \"um_program-descrption\",width: 80,title: \"项目简介\",type: \"\",sear: \"um_program-descrption\",},
\t\t\t\t\t\t{field: \"um_program-content\",width: 150,title: \"项目内容\",type: \"\",sear: \"um_program-content\"},
\t\t\t\t\t\t{field: \"um_program-create_at\",width: 150,title: \"创建时间\",type: \"\",sear: \"um_program-create_at\"},
\t\t\t\t\t\t{field: \"um_program-city_ids\",width: 120,title: \"城市ID\",type: \"time\",sear: \"um_program-city_ids\"},
\t\t\t\t\t\t{field: \"um_program-need_amount\",width: 150,title: \"项目金额\",type: \"\",sear: \"um_program-need_amount\"},
\t\t\t\t\t\t{field: \"um_program-take_shares\",width: 150,title: \"所在股份\",type: \"\",sear: \"um_program-take_shares\"},
\t\t\t\t\t\t{field: \"um_program-programe_cate_id\",width: 150,title: \"融资阶段\",type: \"select\",sear: \"um_program-programe_cate_id\",enum: {1: \"种子轮\",2:\"天使轮\",3:\"P-A\",4:\"A轮\",5:\"A+轮\",6:\"B+轮\",7:\"C轮\",8:\"D轮\",9:\"E轮\"}},
\t\t\t\t\t\t{field: \"um_program-platform_name\",width: 150,title: \"平台行业名称\",type: \"\",sear: \"um_program-platform_name\"},
\t\t\t\t\t\t{field: \"um_program-platform_status\",width: 150,title: \"平台状态\",type: \"select\",sear: \"um_program-platform_status\",enum: {0: \"运营中\",1:\"已停运\"}},
\t\t\t\t\t\t{field: \"um_program-recommend\",width: 150,title: \"推荐项目\",type: \"select\",sear: \"um_program-recommend\",enum: {0: \"否\",1:\"推荐\"}},
\t\t\t\t\t\t{field: \"um_program-industry_id\",width: 150,title: \"行业ID\",type: \"\",sear: \"um_program-industry_id\"},
\t\t\t\t\t\t{field: \"um_program-status\",width: 150,title: \"状态\",type: \"select\",sear: \"um_program-status\",enum: {0: \"进行中\",1:\"已成功\",2:\"已关闭\"}},
\t\t\t\t\t\t{field: \"right\",width: 180,title: \"操作\",toolbar: ykp.\$('#barDemo'),align: \"center\",fixed: 'right',}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/Api_program/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\twhere: {
                            filter: \"\"
                        },
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"um_program-id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/edit_active_tex?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/info_active_tex?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/Api_program/delete'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/add_active_tex'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/Api_program/delete'}, 
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
        return "admin/user/active_tex.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 69,  105 => 68,  98 => 64,  94 => 63,  90 => 62,  76 => 51,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/* 						btnArr: [{title: "添加",type: "add"}, */
/* 						{title: "高级搜索",type: "hSearch",},*/
/* 						{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/* 						{title: "导出",type: "export",}]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "um_program-id",width: 80,sort: true,title: "ID",type: "",sear: "um_program-id"},*/
/* 						{field: "um_user-username",width: 100,title: "用户名称",type: "",sear: "um_user-username"},*/
/* 						{field: "um_company-company_name",width: 100,title: "公司类型",type: "select",sear: "um_company-company_name",enum: {0: "个人项目",1:"公司项目"}},*/
/* 						{field: "um_program-name",width: 100,title: "项目名称",type: "",sear: "um_program-name"},*/
/* 						{field: "um_program-thumb",width: 100,title: "项目主题",type: "image",sear: "um_program-thumb"},*/
/* 						{field: "um_program-pics",width: 100,title: "项目图片",type: "image",sear: "um_program-pics"},*/
/* 						{field: "um_program-descrption",width: 80,title: "项目简介",type: "",sear: "um_program-descrption",},*/
/* 						{field: "um_program-content",width: 150,title: "项目内容",type: "",sear: "um_program-content"},*/
/* 						{field: "um_program-create_at",width: 150,title: "创建时间",type: "",sear: "um_program-create_at"},*/
/* 						{field: "um_program-city_ids",width: 120,title: "城市ID",type: "time",sear: "um_program-city_ids"},*/
/* 						{field: "um_program-need_amount",width: 150,title: "项目金额",type: "",sear: "um_program-need_amount"},*/
/* 						{field: "um_program-take_shares",width: 150,title: "所在股份",type: "",sear: "um_program-take_shares"},*/
/* 						{field: "um_program-programe_cate_id",width: 150,title: "融资阶段",type: "select",sear: "um_program-programe_cate_id",enum: {1: "种子轮",2:"天使轮",3:"P-A",4:"A轮",5:"A+轮",6:"B+轮",7:"C轮",8:"D轮",9:"E轮"}},*/
/* 						{field: "um_program-platform_name",width: 150,title: "平台行业名称",type: "",sear: "um_program-platform_name"},*/
/* 						{field: "um_program-platform_status",width: 150,title: "平台状态",type: "select",sear: "um_program-platform_status",enum: {0: "运营中",1:"已停运"}},*/
/* 						{field: "um_program-recommend",width: 150,title: "推荐项目",type: "select",sear: "um_program-recommend",enum: {0: "否",1:"推荐"}},*/
/* 						{field: "um_program-industry_id",width: 150,title: "行业ID",type: "",sear: "um_program-industry_id"},*/
/* 						{field: "um_program-status",width: 150,title: "状态",type: "select",sear: "um_program-status",enum: {0: "进行中",1:"已成功",2:"已关闭"}},*/
/* 						{field: "right",width: 180,title: "操作",toolbar: ykp.$('#barDemo'),align: "center",fixed: 'right',}*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}admin/Api_program/grid",*/
/* 						method: "post",*/
/* 						id: 'tabel_user',*/
/* 						where: {*/
/*                             filter: ""*/
/*                         },*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "um_program-id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/user/edit_active_tex?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/user/info_active_tex?id='},*/
/* 							{type: "del",url: '{{base_url}}admin/Api_program/delete'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/user/add_active_tex'},*/
/* 							{type: "plDel",url: '{{base_url}}admin/Api_program/delete'}, */
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
