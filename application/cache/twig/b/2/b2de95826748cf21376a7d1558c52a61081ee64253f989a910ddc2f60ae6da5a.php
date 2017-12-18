<?php

/* admin/auser/addAdminUser.html */
class __TwigTemplate_3632b212717c8e21bbfaeee342e107fec78bc4fe40339305093548e4021d504b extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/addAdminUser.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/auser/addAdminUser.html", 9)->display($context);
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
\t\t\t\t\t{type: \"text\",name: \"真实姓名\",verify:\"\",field: \"am_admin.realname\"},
\t\t\t\t\t{type: \"text\",name: \"角色ID\",field: \"am_admin.role_id\"},
\t\t\t\t\t{type: \"text\",name: \"用户名\",field: \"am_admin.username\"},
\t\t\t\t\t{type: \"text\",name: \"手机号\",field: \"am_admin.mobile\"},
\t\t\t\t\t{type: \"text\",name: \"邮箱\",field: \"am_admin.email\"},
\t\t\t\t\t{type: \"select\",name: \"性别\",field: \"am_admin.sex\",sOption: {0: \"男\",1: \"女\"}},
\t\t\t\t\t{type: \"text\",name: \"生日\",field: \"am_admin.birth_day\"},
\t\t\t\t\t{type: \"text\",name: \"描述\",field: \"am_admin.description\"},
\t\t\t\t\t{type: \"image\",name: \"头像\",field: \"am_admin.avatar\"},
\t\t\t\t\t{type: \"text\",name: \"内容\",field: \"am_admin.content\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",field: \"am_admin.create_at\"},
\t\t\t\t\t{type: \"time\",name: \"更新时间\",field: \"am_admin.update_at\"},
\t\t\t\t\t{type: \"text\",name: \"创建者\",field: \"am_admin.creator_id\"},
\t\t\t\t\t{type: \"select\",name: \"状态\",field: \"am_admin.status\",sOption: {1: \"禁止登录\",2: \"正常\"}}
\t\t\t\t],
\t\t\t\tselectKey:\"\",   //列字段id   例: id, product_id
//\t\t\t\tverifyData:{
//\t\t\t\t\toption: [{
//\t\t\t\t\t\tverifyDate: \"password\"
//\t\t\t\t\t}, {
//\t\t\t\t\t\tverifyDate: \"tel\"
//\t\t\t\t\t},{
//\t\t\t\t\t\tverifyDate: \"test\",
//\t\t\t\t\t\tmatch:[/\\d+\\.\\d+\\.\\d+\\.\\d+ /, '请填写正确的ip']
//\t\t\t\t\t}],
//\t\t\t\t\tel: \".layui-form\"
//\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/am/api_admin/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/am/api_admin/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/adminUser'   //添加成功返回的页面
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
        return "admin/auser/addAdminUser.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 52,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 					{type: "text",name: "真实姓名",verify:"",field: "am_admin.realname"},*/
/* 					{type: "text",name: "角色ID",field: "am_admin.role_id"},*/
/* 					{type: "text",name: "用户名",field: "am_admin.username"},*/
/* 					{type: "text",name: "手机号",field: "am_admin.mobile"},*/
/* 					{type: "text",name: "邮箱",field: "am_admin.email"},*/
/* 					{type: "select",name: "性别",field: "am_admin.sex",sOption: {0: "男",1: "女"}},*/
/* 					{type: "text",name: "生日",field: "am_admin.birth_day"},*/
/* 					{type: "text",name: "描述",field: "am_admin.description"},*/
/* 					{type: "image",name: "头像",field: "am_admin.avatar"},*/
/* 					{type: "text",name: "内容",field: "am_admin.content"},*/
/* 					{type: "time",name: "创建时间",field: "am_admin.create_at"},*/
/* 					{type: "time",name: "更新时间",field: "am_admin.update_at"},*/
/* 					{type: "text",name: "创建者",field: "am_admin.creator_id"},*/
/* 					{type: "select",name: "状态",field: "am_admin.status",sOption: {1: "禁止登录",2: "正常"}}*/
/* 				],*/
/* 				selectKey:"",   //列字段id   例: id, product_id*/
/* //				verifyData:{*/
/* //					option: [{*/
/* //						verifyDate: "password"*/
/* //					}, {*/
/* //						verifyDate: "tel"*/
/* //					},{*/
/* //						verifyDate: "test",*/
/* //						match:[/\d+\.\d+\.\d+\.\d+ /, '请填写正确的ip']*/
/* //					}],*/
/* //					el: ".layui-form"*/
/* //				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/am/api_admin/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/am/api_admin/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/auser/adminUser'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
