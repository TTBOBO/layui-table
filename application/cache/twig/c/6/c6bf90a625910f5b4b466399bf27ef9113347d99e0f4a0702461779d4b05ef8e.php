<?php

/* admin/currency/editCustom.html */
class __TwigTemplate_170796460e43dae3bb9b24978bcf9ce2966ae6c9734dd72953d4575b9b3889ee extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/editCustom.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/currency/editCustom.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"ID\", display:true,field: \"id\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"内容\",block:true,field: \"content\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"联系人姓名\",verify:\"required\", field: \"name\"},
\t\t\t\t\t{type: \"text\",name: \"联系电话\",field: \"phone\",verify:\"tel\"},
\t\t\t\t\t{type: \"select\",name: \"已读\",verify:\"\",field: \"is_read\",sOption: {0: \"未读\",1: \"已读\"}},
\t\t\t\t\t{type: \"select\",name: \"状态\",verify:\"required\",field: \"status\",sOption: {0: \"未联系\",1: \"已联系\"}},
\t\t\t\t\t{type: \"select\",name: \"类型\",verify:\"required\",field: \"type\",sOption: {1: \"产品\",2: \"服务\"}},
\t\t\t\t\t{type: \"text\",name: \"创建时间\",field: \"create_at\"}
\t\t\t\t],
\t\t\t\tselectKey:\"id\",   //列字段id   例: id, product_id
\t\t\t\tverifyData:{
\t\t\t\t\toption: [{
\t\t\t\t\t\tverifyDate: \"password\"
\t\t\t\t\t}, {
\t\t\t\t\t\tverifyDate: \"tel\"
\t\t\t\t\t},{
\t\t\t\t\t\tverifyDate: \"test\",
\t\t\t\t\t\tmatch:[/\\d+\\.\\d+\\.\\d+\\.\\d+ /, '请填写正确的ip']
\t\t\t\t\t}],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/pm/api_custom/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/pm/api_custom/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/currency/custom'   //添加成功返回的页面
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
        return "admin/currency/editCustom.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 47,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "ID", display:true,field: "id",verify:""},*/
/* 					{type: "text",name: "内容",block:true,field: "content",verify:""},*/
/* 					{type: "text",name: "联系人姓名",verify:"required", field: "name"},*/
/* 					{type: "text",name: "联系电话",field: "phone",verify:"tel"},*/
/* 					{type: "select",name: "已读",verify:"",field: "is_read",sOption: {0: "未读",1: "已读"}},*/
/* 					{type: "select",name: "状态",verify:"required",field: "status",sOption: {0: "未联系",1: "已联系"}},*/
/* 					{type: "select",name: "类型",verify:"required",field: "type",sOption: {1: "产品",2: "服务"}},*/
/* 					{type: "text",name: "创建时间",field: "create_at"}*/
/* 				],*/
/* 				selectKey:"id",   //列字段id   例: id, product_id*/
/* 				verifyData:{*/
/* 					option: [{*/
/* 						verifyDate: "password"*/
/* 					}, {*/
/* 						verifyDate: "tel"*/
/* 					},{*/
/* 						verifyDate: "test",*/
/* 						match:[/\d+\.\d+\.\d+\.\d+ /, '请填写正确的ip']*/
/* 					}],*/
/* 					el: ".layui-form"*/
/* 				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/pm/api_custom/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/pm/api_custom/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/currency/custom'   //添加成功返回的页面*/
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
