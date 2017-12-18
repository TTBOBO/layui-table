<?php

/* admin/user/active.html */
class __TwigTemplate_16cb0ae10f69983d5c2febe6bb927786b21fbbd4d2d7c62d9aa63334c795ba38 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/active.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/active.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/active.html", 4)->display($context);
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
\t\t\t\t\t\t{title: \"导出\",type: \"export\",}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"um_activity-id\",width: 80,sort: true,title: \"ID\",type: \"\",sear: \"um_activity-id\"},
\t\t\t\t\t\t{field: \"um_activity-title\",width: 80,title: \"title\",type: \"\",sear: \"um_activity-title\"},
\t\t\t\t\t\t{field: \"um_company-company_name\",width: 80,title: \"公司ID\",type: \"select\",sear: \"um_activity-company_id\",url:\"/admin/Api_company/grid\",colKey:'id',colName:'company_name'},
\t\t\t\t\t\t{field: \"um_activity-thumb\",width: 150,title: \"活动主图\",type: \"\",sear: \"um_activity-thumb\"},
\t\t\t\t\t\t{field: \"um_activity-title\",width: 150,title: \"标题\",type: \"\",sear: \"um_activity-title\"},
\t\t\t\t\t\t{field: \"um_activity-addr\",width: 150,title: \"地址\",type: \"\",sear: \"um_activity-addr\"},
\t\t\t\t\t\t{field: \"um_activity-content\",width: 150,title: \"主体内容\",type: \"\",sear: \"um_activity-content\"},
\t\t\t\t\t\t{field: \"um_activity-owner\",width: 150,title: \"主办方\",type: \"\",sear: \"um_activity-owner\"},
\t\t\t\t\t\t{field: \"um_activity-create_at\",width: 200,title: \"创建时间\",type: \"time\",sear: \"um_activity-create_at\",enumOption: {url:'',key:'',val:\"\"}},
\t\t\t\t\t\t{field: \"right\",width: 180,title: \"操作\",toolbar: ykp.\$('#barDemo'),align: \"center\",fixed: 'right',}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_activity/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\tdata: getData
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"um_activity-id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/editActive?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/infoActive?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_activity/delete'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/addActive'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_activity/delete'}, 
\t\t\t\t\t\t\t//{type: \"improt\",url: \"/upload\"},
\t\t\t\t\t\t\t//{type: \"export\",url: \"/upload\"}
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
        return "admin/user/active.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 59,  95 => 58,  88 => 54,  84 => 53,  80 => 52,  68 => 43,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/* 						{title: "导出",type: "export",}*/
/* 						]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "um_activity-id",width: 80,sort: true,title: "ID",type: "",sear: "um_activity-id"},*/
/* 						{field: "um_activity-title",width: 80,title: "title",type: "",sear: "um_activity-title"},*/
/* 						{field: "um_company-company_name",width: 80,title: "公司ID",type: "select",sear: "um_activity-company_id",url:"/admin/Api_company/grid",colKey:'id',colName:'company_name'},*/
/* 						{field: "um_activity-thumb",width: 150,title: "活动主图",type: "",sear: "um_activity-thumb"},*/
/* 						{field: "um_activity-title",width: 150,title: "标题",type: "",sear: "um_activity-title"},*/
/* 						{field: "um_activity-addr",width: 150,title: "地址",type: "",sear: "um_activity-addr"},*/
/* 						{field: "um_activity-content",width: 150,title: "主体内容",type: "",sear: "um_activity-content"},*/
/* 						{field: "um_activity-owner",width: 150,title: "主办方",type: "",sear: "um_activity-owner"},*/
/* 						{field: "um_activity-create_at",width: 200,title: "创建时间",type: "time",sear: "um_activity-create_at",enumOption: {url:'',key:'',val:""}},*/
/* 						{field: "right",width: 180,title: "操作",toolbar: ykp.$('#barDemo'),align: "center",fixed: 'right',}*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}admin/api_activity/grid",*/
/* 						method: "post",*/
/* 						id: 'tabel_user',*/
/* 						data: getData*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "um_activity-id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/user/editActive?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/user/infoActive?id='},*/
/* 							{type: "del",url: '{{base_url}}admin/api_activity/delete'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/user/addActive'},*/
/* 							{type: "plDel",url: '{{base_url}}admin/api_activity/delete'}, */
/* 							//{type: "improt",url: "/upload"},*/
/* 							//{type: "export",url: "/upload"}*/
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
