<?php

/* admin/currency/editAgent.html */
class __TwigTemplate_2f733b5970d988ca167fa8c54486ec5a262b1abba44f82aacad8e57f13a585bd extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/editAgent.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/currency/editAgent.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"id\", display:true,field: \"um_agent.id\",verify:\"\"},
\t\t\t\t\t{type: \"select\",name: \"公司id\",field: \"um_agent.companty_id\",verify:\"\",url:'/admin/api_company/grid',colKey:'id',colName:'company_name'},
\t\t\t\t\t{type: \"text\",name: \"产品详情\",verify:\"required\", field: \"um_agent.product_pic\"},
\t\t\t\t\t{type: \"text\",name: \"盈利模式\",field: \"um_agent.pattern_pic\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"招商政策\",field: \"um_agent.policy_pic\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"企业介绍\",verify:\"required\", field: \"um_agent.description\"}
\t\t\t\t],
\t\t\t\tselectKey:\"um_agent.id\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/pm/api_agent/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/pm/api_agent/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/currency/agent'   //添加成功返回的页面
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
        return "admin/currency/editAgent.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 45,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "id", display:true,field: "um_agent.id",verify:""},*/
/* 					{type: "select",name: "公司id",field: "um_agent.companty_id",verify:"",url:'/admin/api_company/grid',colKey:'id',colName:'company_name'},*/
/* 					{type: "text",name: "产品详情",verify:"required", field: "um_agent.product_pic"},*/
/* 					{type: "text",name: "盈利模式",field: "um_agent.pattern_pic",verify:"required"},*/
/* 					{type: "text",name: "招商政策",field: "um_agent.policy_pic",verify:""},*/
/* 					{type: "text",name: "企业介绍",verify:"required", field: "um_agent.description"}*/
/* 				],*/
/* 				selectKey:"um_agent.id",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/pm/api_agent/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/pm/api_agent/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/currency/agent'   //添加成功返回的页面*/
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
/* */
/* */
