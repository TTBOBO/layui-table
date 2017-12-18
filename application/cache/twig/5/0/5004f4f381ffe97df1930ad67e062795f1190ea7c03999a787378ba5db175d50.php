<?php

/* admin/currency/editFrame.html */
class __TwigTemplate_db2ace460ab948257a328f93f0128c7e5c9b89b06a9b797146c1fe712873f865 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/editFrame.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/currency/editFrame.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"id\", display:true,field: \"id\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"判断字段\",field: \"name\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"标题名称\",verify:\"required\", field: \"title\"},
\t\t\t\t\t{type: \"select\",name: \"类型\",field: \"type\",verify:\"required\",sOption: {0: \"其它\",1: \"顶部导航\",2: \"关于我们\",3: \"商务合作\",4: \"隐私策略\",5: \"帮助中心\"}},
\t\t\t\t\t{type: \"text\",name: \"网址url\",verify:\"url\",field: \"url\"},
\t\t\t\t\t{type: \"upload\",name: \"图片\",verify:\"\",field: \"picture\"},
\t\t\t\t\t{type: \"select\",name: \"是否显示\",verify:\"required\",field: \"is_show\",sOption: {0: \"限制\",1: \"不限制\"}},
\t\t\t\t\t{type: \"text\",name: \"排序\",verify:\"required\",field: \"sort\"},
\t\t\t\t\t{type: \"text\",name: \"备注\",field: \"remark\"}
\t\t\t\t],
\t\t\t\tselectKey:\"id\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/pm/api_frame/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/pm/api_frame/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/currency/frame'   //添加成功返回的页面
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
        return "admin/currency/editFrame.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 48,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "id", display:true,field: "id",verify:""},*/
/* 					{type: "text",name: "判断字段",field: "name",verify:"required"},*/
/* 					{type: "text",name: "标题名称",verify:"required", field: "title"},*/
/* 					{type: "select",name: "类型",field: "type",verify:"required",sOption: {0: "其它",1: "顶部导航",2: "关于我们",3: "商务合作",4: "隐私策略",5: "帮助中心"}},*/
/* 					{type: "text",name: "网址url",verify:"url",field: "url"},*/
/* 					{type: "upload",name: "图片",verify:"",field: "picture"},*/
/* 					{type: "select",name: "是否显示",verify:"required",field: "is_show",sOption: {0: "限制",1: "不限制"}},*/
/* 					{type: "text",name: "排序",verify:"required",field: "sort"},*/
/* 					{type: "text",name: "备注",field: "remark"}*/
/* 				],*/
/* 				selectKey:"id",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/pm/api_frame/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/pm/api_frame/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/currency/frame'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
