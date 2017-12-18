<?php

/* admin/user/company_service.html */
class __TwigTemplate_def27eebf04673fccb382b92c3eb268c1251201ce3567cf2cd55f1b2019916ee extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/company_service.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/company_service.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/company_service.html", 4)->display($context);
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
\t\t\t\t\t\t{title: \"批量删除\",type: \"pldelete\",class: \"layui-btn-danger\"},
\t\t\t\t\t\t{title: \"导入\",type: \"improt\"},
\t\t\t\t\t\t{title: \"导出\",type: \"export\"}]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"um_company_service-id\",width: 80,title: \"ID\",type: \"\",sear: \"um_company_service-id\"},
\t\t\t\t\t\t{field: \"um_company_service-name\",width: 80,title: \"服务名称\",type: \"\",sear: \"um_company_service-name\"},
\t\t\t\t\t\t{field: \"um_company_service-cate_id\",width: 80,title: \"大类ID\",type: \"select\",sear: \"um_company_service-cate_id\",enum: {0:\"专业企服\",1:\"技孵宝\",2:\"培训\",3:\"传媒\",4:\"场地企服\"}},
\t\t\t\t\t\t{field: \"um_company_service-industry_id\",width: 150,title: \"行业ID\",type: \"\",sear: \"um_company_service-industry_id\"},
\t\t\t\t\t\t{field: \"um_company_service-type\",width: 150,title: \"服务类型\",type: \"select\",sear: \"um_company_service-type\",enum: {0:\"未知\",1:\"专业培训\",2:\"IT服务\",3: \"视觉设计\",4:\"政策解读\",5:\"法律服务\"}},
\t\t\t\t\t\t{field: \"um_company_service-child_type\",width: 150,title: \"类型细分\",type: \"select\",sear: \"um_company_service-child_type\",enum: {0:\"未知\",1:\"企业培训\",2:\"创业培训\",3:\"融资培训\"}},
\t\t\t\t\t\t{field: \"um_company_service-city_ids\",width: 150,title: \"城市ID\",type: \"\",sear: \"um_company_service-city_ids\"},
\t\t\t\t\t\t{field: \"um_company_service-sell_label\",width: 150,title: \"卖点标签\",type: \"\",sear: \"um_company_service-sell_label\"},
\t\t\t\t\t\t{field: \"um_company_service-promise_label\",width: 200,title: \"服务承诺标签\",type: \"\",sear: \"um_company_service-promise_label\"},
\t\t\t\t\t\t{field: \"um_company_service-uv\",width: 180,title: \"访问量\",align: \"center\",sear: \"um_company_service-uv\"},
\t\t\t\t\t\t{field: \"um_company_service-price\",width: 150,title: \"价格\",type: \"\",sear:\"um_company_service-price\"},
\t\t\t\t\t\t{field: \"um_company_service-collect_num\",width: 150,title: \"收藏量\",type: \"\",sear: \"um_company_service-collect_num\"},
\t\t\t\t\t\t{field: \"um_company_service-introduce\",width: 200,sort: true,title: \"产品介绍\",type: \"\",sear: \"um_company_service-introduce\"},
\t\t\t\t\t\t{field: \"um_company_service-create_at\",width: 180,title: \"创建时间\",align: \"center\",type: \"time\",sear: \"um_company_service-create_at\"},
\t\t\t\t\t\t{field: \"um_company-company_name\",width: 180,title: \"公司ID\",align: \"center\",type: \"\",sear: \"um_company-company_id\"},
\t\t\t\t\t\t{field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right', }
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_company_service/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\twhere: {
\t\t\t\t\t\t\tfilter: \"\"
\t\t\t\t\t\t},
\t\t\t\t\t\tdata: getData
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"um_company_service-id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/edit_Company_service?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/info_Company_service?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_company_service/delete'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/add_Company_service'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_company_service/delete'}, 
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
        return "admin/user/company_service.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 68,  104 => 67,  97 => 63,  93 => 62,  89 => 61,  74 => 49,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/* 						{title: "批量删除",type: "pldelete",class: "layui-btn-danger"},*/
/* 						{title: "导入",type: "improt"},*/
/* 						{title: "导出",type: "export"}]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "um_company_service-id",width: 80,title: "ID",type: "",sear: "um_company_service-id"},*/
/* 						{field: "um_company_service-name",width: 80,title: "服务名称",type: "",sear: "um_company_service-name"},*/
/* 						{field: "um_company_service-cate_id",width: 80,title: "大类ID",type: "select",sear: "um_company_service-cate_id",enum: {0:"专业企服",1:"技孵宝",2:"培训",3:"传媒",4:"场地企服"}},*/
/* 						{field: "um_company_service-industry_id",width: 150,title: "行业ID",type: "",sear: "um_company_service-industry_id"},*/
/* 						{field: "um_company_service-type",width: 150,title: "服务类型",type: "select",sear: "um_company_service-type",enum: {0:"未知",1:"专业培训",2:"IT服务",3: "视觉设计",4:"政策解读",5:"法律服务"}},*/
/* 						{field: "um_company_service-child_type",width: 150,title: "类型细分",type: "select",sear: "um_company_service-child_type",enum: {0:"未知",1:"企业培训",2:"创业培训",3:"融资培训"}},*/
/* 						{field: "um_company_service-city_ids",width: 150,title: "城市ID",type: "",sear: "um_company_service-city_ids"},*/
/* 						{field: "um_company_service-sell_label",width: 150,title: "卖点标签",type: "",sear: "um_company_service-sell_label"},*/
/* 						{field: "um_company_service-promise_label",width: 200,title: "服务承诺标签",type: "",sear: "um_company_service-promise_label"},*/
/* 						{field: "um_company_service-uv",width: 180,title: "访问量",align: "center",sear: "um_company_service-uv"},*/
/* 						{field: "um_company_service-price",width: 150,title: "价格",type: "",sear:"um_company_service-price"},*/
/* 						{field: "um_company_service-collect_num",width: 150,title: "收藏量",type: "",sear: "um_company_service-collect_num"},*/
/* 						{field: "um_company_service-introduce",width: 200,sort: true,title: "产品介绍",type: "",sear: "um_company_service-introduce"},*/
/* 						{field: "um_company_service-create_at",width: 180,title: "创建时间",align: "center",type: "time",sear: "um_company_service-create_at"},*/
/* 						{field: "um_company-company_name",width: 180,title: "公司ID",align: "center",type: "",sear: "um_company-company_id"},*/
/* 						{field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right', }*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}admin/api_company_service/grid",*/
/* 						method: "post",*/
/* 						id: 'tabel_user',*/
/* 						where: {*/
/* 							filter: ""*/
/* 						},*/
/* 						data: getData*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "um_company_service-id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/user/edit_Company_service?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/user/info_Company_service?id='},*/
/* 							{type: "del",url: '{{base_url}}admin/api_company_service/delete'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/user/add_Company_service'},*/
/* 							{type: "plDel",url: '{{base_url}}admin/api_company_service/delete'}, */
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
