<?php

/* admin/product/czProduct.html */
class __TwigTemplate_84f90fbefbf40958bce3b931449d6094d0da9e68aae9e6b92d65aada64b23c1e extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/czProduct.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/product/czProduct.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/product/czProduct.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
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
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addService\"}, 
\t\t\t\t\t\t{title: \"高级搜索\",type: \"hSearch\",},
\t\t\t\t\t\t{title: \"导出\",type: \"export\",}]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"im_cz_product-id\",width: 80,title: \"ID\",type: \"\",sear: \"im_cz_product-id\"},
\t\t\t\t\t\t{field: \"im_cz_product-name\",width: 80,title: \"名称\",type: \"\",sear: \"im_cz_product-name\"},
\t\t\t\t\t\t{field: \"im_cz_product-time_range\",width: 80,title: \"长租期限\",type: \"\",sear: \"im_cz_product-time_range\",},
\t\t\t\t\t\t{field: \"im_cz_product-city_id\",width: 150,title: \"城市\",type: \"\",sear: \"im_cz_product-city_id\"},
\t\t\t\t\t\t{field: \"im_shop-name\",width: 150,title: \"店铺ID\",type: \"\",sear: \"im_cz_product-shop_id\",},
\t\t\t\t\t\t{field: \"im_cz_product-type\",width: 150,title: \"办公类型\",type: \"select\",sear: \"im_cz_product-type\",enum: {0:\"经理室\",1:\"办公室\",2:\"移动工位\",3:\"固定工位\"}},
\t\t\t\t\t\t{field: \"um_user-username\",width: 150,title: \"创建人ID\",type: \"\",sear: \"im_cz_product-creator_id\"},
\t\t\t\t\t\t{field: \"im_cz_product-create_at\",width: 180,title: \"创建时间\",align: \"center\",type: \"time\",sear: \"im_cz_product-create_at\"},
\t\t\t\t\t\t{field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right', }
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/Api_cz_product/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\twhere: {
\t\t\t\t\t\t\tfilter: \"\"
\t\t\t\t\t\t},
\t\t\t\t\t\tdata: getData
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"im_cz_product-id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/editczProduct?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/info_czProduct?id='}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addczProduct'},
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
        return "admin/product/czProduct.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 56,  86 => 52,  82 => 51,  67 => 39,  47 => 22,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
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
/* 						{title: "导出",type: "export",}]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "im_cz_product-id",width: 80,title: "ID",type: "",sear: "im_cz_product-id"},*/
/* 						{field: "im_cz_product-name",width: 80,title: "名称",type: "",sear: "im_cz_product-name"},*/
/* 						{field: "im_cz_product-time_range",width: 80,title: "长租期限",type: "",sear: "im_cz_product-time_range",},*/
/* 						{field: "im_cz_product-city_id",width: 150,title: "城市",type: "",sear: "im_cz_product-city_id"},*/
/* 						{field: "im_shop-name",width: 150,title: "店铺ID",type: "",sear: "im_cz_product-shop_id",},*/
/* 						{field: "im_cz_product-type",width: 150,title: "办公类型",type: "select",sear: "im_cz_product-type",enum: {0:"经理室",1:"办公室",2:"移动工位",3:"固定工位"}},*/
/* 						{field: "um_user-username",width: 150,title: "创建人ID",type: "",sear: "im_cz_product-creator_id"},*/
/* 						{field: "im_cz_product-create_at",width: 180,title: "创建时间",align: "center",type: "time",sear: "im_cz_product-create_at"},*/
/* 						{field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right', }*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}/admin/Api_cz_product/grid",*/
/* 						method: "post",*/
/* 						id: 'tabel_user',*/
/* 						where: {*/
/* 							filter: ""*/
/* 						},*/
/* 						data: getData*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "im_cz_product-id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/product/editczProduct?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/product/info_czProduct?id='}*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/product/addczProduct'},*/
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
