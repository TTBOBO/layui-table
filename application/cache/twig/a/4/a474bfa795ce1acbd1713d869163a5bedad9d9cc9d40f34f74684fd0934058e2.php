<?php

/* admin/auser/edit_dynamic.html */
class __TwigTemplate_4cf4d1890e962404c7bda1f76f6aa5b568df8e9320c6f06d73d52a8831d4942d extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/edit_dynamic.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/auser/edit_dynamic.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"id\",display:true, field: \"id\"},
\t\t\t\t\t{type: \"text\",name: \"姓名\",field: \"name\",verify:\"required\"},
\t\t\t\t\t{type: \"upload\",name: \"头像\",field: \"avatar\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"职位称呼\",field: \"job_title\",verify:\"\"},
\t\t\t\t\t{type: \"select\",name: \"公司名称\",field: \"company_name\",verify:\"\",url:\"/admin/am/Api_contacts_dynamics/grid\",colKey:\"id\",colName:'company_name'},
\t\t\t\t\t{type: \"text\",name: \"手机号\",field: \"mobile\",verify:\"tel\"},
\t\t\t\t\t{type: \"text\",name: \"联系电话\",field: \"phone\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"电子邮箱\",field: \"email\",verify:\"email\"},
\t\t\t\t\t{type: \"text\",name: \"QQ号码\",field: \"qq\",verify:\"qq\"},
\t\t\t\t\t{type: \"text\",name: \"微信号\",field: \"weixin\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"地址\",field: \"addr\",verify:\"\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",field: \"create_at\",verify:\"\"}
\t\t\t\t],
\t\t\t\tselectKey:\"id\",   //列字段id   例: id, product_id
\t\t\t\tverifyData:{
\t\t\t\t\toption: [
\t\t\t\t\t\t{verifyDate: \"china\"},
\t\t\t\t\t\t{verifyDate: \"tel\"},
\t\t\t\t\t\t{verifyDate: \"email\"},
\t\t\t\t\t\t{verifyDate: \"qq\"},
\t\t\t\t\t],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/am/Api_contacts_dynamics/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/am/Api_contacts_dynamics/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/dynamic'   //添加成功返回的页面
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
        return "admin/auser/edit_dynamic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 49,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "id",display:true, field: "id"},*/
/* 					{type: "text",name: "姓名",field: "name",verify:"required"},*/
/* 					{type: "upload",name: "头像",field: "avatar",verify:"required"},*/
/* 					{type: "text",name: "职位称呼",field: "job_title",verify:""},*/
/* 					{type: "select",name: "公司名称",field: "company_name",verify:"",url:"/admin/am/Api_contacts_dynamics/grid",colKey:"id",colName:'company_name'},*/
/* 					{type: "text",name: "手机号",field: "mobile",verify:"tel"},*/
/* 					{type: "text",name: "联系电话",field: "phone",verify:""},*/
/* 					{type: "text",name: "电子邮箱",field: "email",verify:"email"},*/
/* 					{type: "text",name: "QQ号码",field: "qq",verify:"qq"},*/
/* 					{type: "text",name: "微信号",field: "weixin",verify:"required"},*/
/* 					{type: "text",name: "地址",field: "addr",verify:""},*/
/* 					{type: "time",name: "创建时间",field: "create_at",verify:""}*/
/* 				],*/
/* 				selectKey:"id",   //列字段id   例: id, product_id*/
/* 				verifyData:{*/
/* 					option: [*/
/* 						{verifyDate: "china"},*/
/* 						{verifyDate: "tel"},*/
/* 						{verifyDate: "email"},*/
/* 						{verifyDate: "qq"},*/
/* 					],*/
/* 					el: ".layui-form"*/
/* 				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/am/Api_contacts_dynamics/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/am/Api_contacts_dynamics/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/auser/dynamic'   //添加成功返回的页面*/
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
/* */
/* */
/* */
