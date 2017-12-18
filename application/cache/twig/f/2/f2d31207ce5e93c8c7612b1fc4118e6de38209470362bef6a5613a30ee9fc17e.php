<?php

/* admin/user/editUserLevel.html */
class __TwigTemplate_ca7d1fb22528d387abffdc307b4e56a196d772909fee3b34163394b6409880e0 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/editUserLevel.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/user/editUserLevel.html", 9)->display($context);
        // line 10
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 30px;\">
</form>
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
\t\t\t\t\t//{type: \"text\",name: \"用户ID\",field: \"um_user_level.uid\"},
\t\t\t\t\t{type: \"select\",name: \"等级ID\",field: \"um_user_level.level_id\",sOption: {1: \"一级\",2: \"二级\",3: \"三级\"}},
\t\t\t\t\t{type: \"text\",name: \"等级名称\",field: \"um_user_level.level_name\"},
\t\t\t\t\t{type: \"text\",name: \"等级条件\",field: \"um_user_level.price_limit\"},
\t\t\t\t\t{type:\"text\",name:'创建人ID',field:'um_user_level.creator_id'},
\t\t\t\t\t{type:'time',name:'创建时间',field:'um_user_level.create_at'}
\t\t\t\t],
\t\t\t\tselectKey:\"um_user_level.id\",   //列字段id   例: id, product_id
//\t\t\t\t  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/api_user_level/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/api_company_service/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/user/user_level'   //添加成功返回的页面
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
        return "admin/user/editUserLevel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 36,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* <form class="layui-form" action="" style="width: 700px; padding-bottom: 30px;">*/
/* </form>*/
/* <script>*/
/* */
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom();*/
/* 		},*/
/* */
/* 		initFrom: function() {*/
/* 			hm.showAddEdit({*/
/* 				el: ".layui-form",*/
/* 				list: [*/
/* 					//{type: "text",name: "用户ID",field: "um_user_level.uid"},*/
/* 					{type: "select",name: "等级ID",field: "um_user_level.level_id",sOption: {1: "一级",2: "二级",3: "三级"}},*/
/* 					{type: "text",name: "等级名称",field: "um_user_level.level_name"},*/
/* 					{type: "text",name: "等级条件",field: "um_user_level.price_limit"},*/
/* 					{type:"text",name:'创建人ID',field:'um_user_level.creator_id'},*/
/* 					{type:'time',name:'创建时间',field:'um_user_level.create_at'}*/
/* 				],*/
/* 				selectKey:"um_user_level.id",   //列字段id   例: id, product_id*/
/* //				  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/api_user_level/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/api_company_service/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/user/user_level'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
/* */
