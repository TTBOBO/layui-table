<?php

/* admin/user/addActive.html */
class __TwigTemplate_19f9f8bbcf0d365f9b0eb81e4a5287352abf6b27de6ee3475fe130531e08b690 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/addActive.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/user/addActive.html", 9)->display($context);
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
\t\t\t\t\t{type: \"text\",name: \"用户ID\",field: \"uid\",verify:\"\"},
\t\t\t\t\t{type: \"select\",name: \"公司ID\",verify:\"required\", field: \"company_id\",sOption: {0: \"个人活动\",1: \"公司活动\"}},
\t\t\t\t\t{type: \"text\",name: \"活动主图\",field: \"thumb\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"标题\",verify:\"\",field: \"title\"},
\t\t\t\t\t{type: \"text\",name: \"地址\",verify:\"\",field: \"addr\"},
\t\t\t\t\t{type: \"text\",name: \"主体内容\",verify:\"required\",field: \"content\"},
\t\t\t\t\t{type: \"text\",name: \"主办方\",field: \"owner\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",field: \"create_at\",verify:\"time\"}
\t\t\t\t],
\t\t\t\tselectKey:\"\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/api_activity/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/api_activity/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/user/active'   //添加成功返回的页面
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
        return "admin/user/addActive.html";
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
/* 				list: [*/
/* 					{type: "text",name: "用户ID",field: "uid",verify:""},*/
/* 					{type: "select",name: "公司ID",verify:"required", field: "company_id",sOption: {0: "个人活动",1: "公司活动"}},*/
/* 					{type: "text",name: "活动主图",field: "thumb",verify:"required"},*/
/* 					{type: "text",name: "标题",verify:"",field: "title"},*/
/* 					{type: "text",name: "地址",verify:"",field: "addr"},*/
/* 					{type: "text",name: "主体内容",verify:"required",field: "content"},*/
/* 					{type: "text",name: "主办方",field: "owner"},*/
/* 					{type: "time",name: "创建时间",field: "create_at",verify:"time"}*/
/* 				],*/
/* 				selectKey:"",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/api_activity/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/api_activity/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/user/active'   //添加成功返回的页面*/
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
/* */
