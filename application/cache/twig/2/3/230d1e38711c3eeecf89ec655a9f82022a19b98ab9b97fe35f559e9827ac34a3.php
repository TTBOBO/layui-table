<?php

/* admin/user/score.html */
class __TwigTemplate_5213eea33f06c303dc0e7759769a20e81734cfb09cd13095c1c10bbab5490d2b extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/score.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/score.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/score.html", 4)->display($context);
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
\t\t\t\t\t\t//{title: \"导入\",type: \"improt\",},
\t\t\t\t\t\t//{title: \"导出\",type: \"export\",}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"id\",width: 80,sort: true,title: \"ID\",type: \"\",sear: \"um_activity.id\"},
\t\t\t\t\t\t{field: \"uid\",width: 80,title: \"用户ID\",type: \"\",sear: \"um_activity.uid\"},
\t\t\t\t\t\t{field: \"company_id\",width: 80,title: \"公司ID\",type: \"select\",sear: \"um_activity.company_id\",enum: {0:\"个人活动\",1:\"公司活动\"}},
\t\t\t\t\t\t{field: \"thumb\",width: 150,title: \"活动主图\",type: \"\",sear: \"um_activity.thumb\"},
\t\t\t\t\t\t{field: \"title\",width: 150,title: \"标题\",type: \"\",sear: \"um_activity.title\"},
\t\t\t\t\t\t{field: \"addr\",width: 150,title: \"地址\",type: \"\",sear: \"um_activity.addr\"},
\t\t\t\t\t\t{field: \"content\",width: 150,title: \"主体内容\",type: \"\",sear: \"um_activity.content\"},
\t\t\t\t\t\t{field: \"owner\",width: 150,title: \"主办方\",type: \"\",sear: \"um_activity.owner\"},
\t\t\t\t\t\t{field: \"create_at\",width: 200,title: \"创建时间\",type: \"time\",sear: \"um_activity.create_at\",enumOption: {url:'',key:'',val:\"\"}},
\t\t\t\t\t\t{field: \"right\",width: 180,title: \"操作\",toolbar: ykp.\$('#barDemo'),align: \"center\",fixed: 'right',}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_activity/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\tdata: getData
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/editService?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/infoActive?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addService'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del'}, 
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

</html>
";
    }

    public function getTemplateName()
    {
        return "admin/user/score.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 60,  102 => 59,  95 => 55,  91 => 54,  87 => 53,  75 => 44,  53 => 25,  48 => 23,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/* 						//{title: "导入",type: "improt",},*/
/* 						//{title: "导出",type: "export",}*/
/* 						]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "id",width: 80,sort: true,title: "ID",type: "",sear: "um_activity.id"},*/
/* 						{field: "uid",width: 80,title: "用户ID",type: "",sear: "um_activity.uid"},*/
/* 						{field: "company_id",width: 80,title: "公司ID",type: "select",sear: "um_activity.company_id",enum: {0:"个人活动",1:"公司活动"}},*/
/* 						{field: "thumb",width: 150,title: "活动主图",type: "",sear: "um_activity.thumb"},*/
/* 						{field: "title",width: 150,title: "标题",type: "",sear: "um_activity.title"},*/
/* 						{field: "addr",width: 150,title: "地址",type: "",sear: "um_activity.addr"},*/
/* 						{field: "content",width: 150,title: "主体内容",type: "",sear: "um_activity.content"},*/
/* 						{field: "owner",width: 150,title: "主办方",type: "",sear: "um_activity.owner"},*/
/* 						{field: "create_at",width: 200,title: "创建时间",type: "time",sear: "um_activity.create_at",enumOption: {url:'',key:'',val:""}},*/
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
/* 						id: "id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/user/editService?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/user/infoActive?id='},*/
/* 							{type: "del",url: '{{base_url}}admin/api_product/del'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/product/addService'},*/
/* 							{type: "plDel",url: '{{base_url}}admin/api_product/del'}, */
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
/* */
