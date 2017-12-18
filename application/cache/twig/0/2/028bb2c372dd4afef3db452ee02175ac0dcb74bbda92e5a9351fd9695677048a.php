<?php

/* admin/product/virProduct.html */
class __TwigTemplate_981e645dad415eb529864328351f547b4ce56322f491783959107db5cb0a85b0 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/virProduct.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/product/virProduct.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/product/virProduct.html", 4)->display($context);
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
\t\t\t\t\t\t{field: \"id\",width: 80,title: \"产品ID\",type: \"\",sear: \"id\"},
\t\t\t\t\t\t{field: \"name\",width: 80,title: \"产品名称\",type: \"\",sear: \"name\"},
\t\t\t\t\t\t{field: \"description\",width: 120,title: \"产品描述\",type: \"\",sear: \"description\",},
\t\t\t\t\t\t{field: \"thumb\",width: 150,title: \"产品主图\",type: \"image\",sear: \"\"},
\t\t\t\t\t\t{field: \"pics\",width: 150,title: \"图片地址\",type: \"image\",sear: \"pics\",},
\t\t\t\t\t\t{field: \"product_intro\",width: 150,title: \"产品宣传语\",type: \"\",sear: \"product_intro\"},
\t\t\t\t\t\t{field: \"service_list\",width: 150,title: \"服务列表id\",type: \"\",sear: \"\"},
\t\t\t\t\t\t{field: \"presend_items\",width: 200,title: \"赠送项目\",type: \"\",sear: \"\",url:\"/admin/api_presend_item/grid\",filter:\"product_type_id = 1\",key:'name',multiple:true},
\t\t\t\t\t\t{field: \"price\",width: 150,title: \"价格\",type: \"\",sear: \"price\"},
\t\t\t\t\t\t{field: \"meal_items\",width: 150,title: \"套餐对应的价格\",type: \"\",sear: \"meal_items\"},
\t\t\t\t\t\t{field: \"is_single_price\",width: 150,title: \"是否单套餐\",type: \"select\",sear: \"is_single_price\",enum: {0:\"单套餐\",1:\"多套餐\"}},
\t\t\t\t\t\t{field: \"service_city\",width: 150,title: \"服务城市\",type: \"\",sear: \"service_city\"},
\t\t\t\t\t\t{field: \"service_limit\",width: 150,title: \"服务年限\",type: \"\",sear: \"service_limit\"},
\t\t\t\t\t\t{field: \"is_keep_price\",width: 150,title: \"保底押金\",type: \"\",sear: \"is_keep_price\"},
\t\t\t\t\t\t{field: \"discount_point\",width: 150,title: \"折扣\",type: \"\",sear: \"discount_point\"},
\t\t\t\t\t\t{field: \"create_at\",width: 180,title: \"创建时间\",align: \"center\",type: \"time\",sear: \"create_at\"},
\t\t\t\t\t\t{field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right', }
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/Api_vir_product/grid\",
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
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/editvirProduct?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/info_virProduct?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/Api_vir_product/delete'}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addvirProduct'},
\t\t\t\t\t\t\t{type: \"plDel\",url: '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/Api_vir_product/delete'}, 
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
        return "admin/product/virProduct.html";
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
/* 						{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/* 						{title: "导出",type: "export",}]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "id",width: 80,title: "产品ID",type: "",sear: "id"},*/
/* 						{field: "name",width: 80,title: "产品名称",type: "",sear: "name"},*/
/* 						{field: "description",width: 120,title: "产品描述",type: "",sear: "description",},*/
/* 						{field: "thumb",width: 150,title: "产品主图",type: "image",sear: ""},*/
/* 						{field: "pics",width: 150,title: "图片地址",type: "image",sear: "pics",},*/
/* 						{field: "product_intro",width: 150,title: "产品宣传语",type: "",sear: "product_intro"},*/
/* 						{field: "service_list",width: 150,title: "服务列表id",type: "",sear: ""},*/
/* 						{field: "presend_items",width: 200,title: "赠送项目",type: "",sear: "",url:"/admin/api_presend_item/grid",filter:"product_type_id = 1",key:'name',multiple:true},*/
/* 						{field: "price",width: 150,title: "价格",type: "",sear: "price"},*/
/* 						{field: "meal_items",width: 150,title: "套餐对应的价格",type: "",sear: "meal_items"},*/
/* 						{field: "is_single_price",width: 150,title: "是否单套餐",type: "select",sear: "is_single_price",enum: {0:"单套餐",1:"多套餐"}},*/
/* 						{field: "service_city",width: 150,title: "服务城市",type: "",sear: "service_city"},*/
/* 						{field: "service_limit",width: 150,title: "服务年限",type: "",sear: "service_limit"},*/
/* 						{field: "is_keep_price",width: 150,title: "保底押金",type: "",sear: "is_keep_price"},*/
/* 						{field: "discount_point",width: 150,title: "折扣",type: "",sear: "discount_point"},*/
/* 						{field: "create_at",width: 180,title: "创建时间",align: "center",type: "time",sear: "create_at"},*/
/* 						{field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right', }*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}/admin/Api_vir_product/grid",*/
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
/* 						Event: [{type: "edit",url: '{{base_url}}admin/product/editvirProduct?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/product/info_virProduct?id='},*/
/* 							{type: "del",url: '{{base_url}}admin/Api_vir_product/delete'}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/product/addvirProduct'},*/
/* 							{type: "plDel",url: '{{base_url}}/admin/Api_vir_product/delete'}, */
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
