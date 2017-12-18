<?php

/* admin/auser/editbanner.html */
class __TwigTemplate_f71bfad149425ba16939ab090e0a6bc39a51a2e287790c9ef5b499fed0f14a02 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/editbanner.html", 1)->display($context);
        // line 2
        echo "<style>
\tbody {margin: 10px;}
\t.demo-carousel {height: 200px;line-height: 200px;text-align: center;}
\t.layui-table-view .layui-table {width: 100%}
\t.model {padding: 20px;}
\t.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}
</style>
";
        // line 9
        $this->loadTemplate("admin/crumbs1.html", "admin/auser/editbanner.html", 9)->display($context);
        // line 10
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 720px; padding-bottom: 30px;\">
</form>
<script src=\"/resource/admin/js/jslib/citys.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initFrom();
\t\t},
\t\tinitFrom: function() {
\t\t\thm.showAddEdit({
\t\t\t\tel: \".layui-form\",
\t\t\t\tlist: [
\t\t\t\t\t{type: \"text\",name: \"id\",verify:\"\",display:true,field: \"am_ads.id\"},
\t\t\t\t\t{type: \"text\",name: \"广告名称\",field: \"am_ads.name\",verify:\"required\"},
\t\t\t\t\t{type: \"select\",name: \"广告类型\",verify:\"required\", field: \"am_ads.type\",url:\"/admin/am/Api_ads_type/grid\",colKey:\"id\",colName:'name'},
\t\t\t\t\t{type: \"upload\",name: \"广告图片\",block:true,field: \"am_ads.img\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"链接地址\",block:true,field: \"am_ads.link\",verify:\"required\"},
\t\t\t\t\t{type: \"time\",name: \"开始时间\",field: \"am_ads.begin_at\",verify:\"required\"},
\t\t\t\t\t{type: \"time\",name: \"结束时间\",field: \"am_ads.end_at\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"广告描述\",block:true,field: \"am_ads.description\",verify:\"required\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",verify:\"required\",field: \"am_ads.create_at\"},
\t\t\t\t\t{type: \"time\",name: \"修改时间\",field: \"am_ads.update_at\",verify:\"required\"}
\t\t\t\t],
\t\t\t\tselectKey:\"am_ads.id\",   //列字段id   例: id, product_id
\t\t\t\t/*verifyData:{
\t\t\t\t\toption: [{
\t\t\t\t\t\tverifyDate: \"password\"
\t\t\t\t\t}, {
\t\t\t\t\t\tverifyDate: \"tel\"
\t\t\t\t\t},{
\t\t\t\t\t\tverifyDate: \"test\",
\t\t\t\t\t\tmatch:[/\\d+\\.\\d+\\.\\d+\\.\\d+ /, '请填写正确的ip']
\t\t\t\t\t}],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},*/  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/am/Api_ads/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/am/Api_ads/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/banner'   //添加成功返回的页面
\t\t\t});
\t\t},
\t});
</script>
</body>
</html>



";
    }

    public function getTemplateName()
    {
        return "admin/auser/editbanner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 50,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	body {margin: 10px;}*/
/* 	.demo-carousel {height: 200px;line-height: 200px;text-align: center;}*/
/* 	.layui-table-view .layui-table {width: 100%}*/
/* 	.model {padding: 20px;}*/
/* 	.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}*/
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <form class="layui-form" action="" style="width: 720px; padding-bottom: 30px;">*/
/* </form>*/
/* <script src="/resource/admin/js/jslib/citys.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom();*/
/* 		},*/
/* 		initFrom: function() {*/
/* 			hm.showAddEdit({*/
/* 				el: ".layui-form",*/
/* 				list: [*/
/* 					{type: "text",name: "id",verify:"",display:true,field: "am_ads.id"},*/
/* 					{type: "text",name: "广告名称",field: "am_ads.name",verify:"required"},*/
/* 					{type: "select",name: "广告类型",verify:"required", field: "am_ads.type",url:"/admin/am/Api_ads_type/grid",colKey:"id",colName:'name'},*/
/* 					{type: "upload",name: "广告图片",block:true,field: "am_ads.img",verify:"required"},*/
/* 					{type: "text",name: "链接地址",block:true,field: "am_ads.link",verify:"required"},*/
/* 					{type: "time",name: "开始时间",field: "am_ads.begin_at",verify:"required"},*/
/* 					{type: "time",name: "结束时间",field: "am_ads.end_at",verify:"required"},*/
/* 					{type: "text",name: "广告描述",block:true,field: "am_ads.description",verify:"required"},*/
/* 					{type: "time",name: "创建时间",verify:"required",field: "am_ads.create_at"},*/
/* 					{type: "time",name: "修改时间",field: "am_ads.update_at",verify:"required"}*/
/* 				],*/
/* 				selectKey:"am_ads.id",   //列字段id   例: id, product_id*/
/* 				/*verifyData:{*/
/* 					option: [{*/
/* 						verifyDate: "password"*/
/* 					}, {*/
/* 						verifyDate: "tel"*/
/* 					},{*/
/* 						verifyDate: "test",*/
/* 						match:[/\d+\.\d+\.\d+\.\d+ /, '请填写正确的ip']*/
/* 					}],*/
/* 					el: ".layui-form"*/
/* 				},*//*   //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/am/Api_ads/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/am/Api_ads/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/auser/banner'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
