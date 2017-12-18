<?php

/* admin/user/editUser.html */
class __TwigTemplate_1ab82bb04579c767382bc01c8a6b6ae1f26830d8412e1a4e01f92de97f099e0c extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/editUser.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/user/editUser.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"uid\", display:true,field: \"uid\"},
\t\t\t\t{type: \"text\",name: \"用户名\",field: \"username\"},
\t\t\t\t{type: \"text\",name: \"昵称\",field: \"nickname\"},
\t\t\t\t{type: \"radio\",name: \"性别\",field: \"sex\",block:true,sOption:{0:'未知',1:'男',2:'女'}},
\t\t\t\t{type: \"password\",name: \"密码\",field: \"password\",verify:\"password\"},
\t\t\t\t{type: \"text\",name: \"手机\",verify:\"tel\", field: \"mobile\"},
\t\t\t\t{type: \"radio\",name: \"手机认证码\",block:true,field: \"mobilecode\",sOption:{0:\"未认证\",1: \"已认证\"}},
\t\t\t\t{type: \"text\",name: \"身份证\",field: \"id_card\",verify:\"idCard\"},
\t\t\t\t{type: \"text\",name: \"积分\",field: \"score\",verify:\"pInt\"},
\t\t\t\t{type: \"text\",name: \"余额\",field: \"banlance\",verify:\"mzero\"},
\t\t\t\t{type: \"radio\",name: \"类型\",block:true,field: \"type\",sOption:{0:'个人',1:'企业'}},
\t\t\t\t{type: \"radio\",name: \"是否认证企业\",block:true,field: \"is_company\",sOption:{0:'非',1:'是'}},
\t\t\t\t{type: \"radio\",name: \"是否是服务商\",block:true,field: \"is_provider\",sOption:{0:'非',1:'是'}},
\t\t\t\t{type: \"upload\",name: \"上传头像\",field: \"avatar\",},
\t\t\t\t],
\t\t\t\tselectKey:\"uid\",   //列字段id   例: id, product_id

\t\t\t\tverifyData:{
\t\t\t\t\toption: [
\t\t\t\t\t\t{verifyDate: \"password\"},
\t\t\t\t        {verifyDate: \"tel\"},
\t\t\t\t\t\t{verifyDate: \"pInt\"},
\t\t\t\t\t\t{verifyDate: \"idCard\"},
\t\t\t\t\t\t{verifyDate: \"mzero\"}
\t\t\t\t\t],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/api_user/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/api_user/update_or_add', //添加的接口
\t\t\t\tprevUrl:'";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/user'   //添加成功返回的页面
\t\t\t});
\t\t},
\t});
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/user/editUser.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 51,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "uid", display:true,field: "uid"},*/
/* 				{type: "text",name: "用户名",field: "username"},*/
/* 				{type: "text",name: "昵称",field: "nickname"},*/
/* 				{type: "radio",name: "性别",field: "sex",block:true,sOption:{0:'未知',1:'男',2:'女'}},*/
/* 				{type: "password",name: "密码",field: "password",verify:"password"},*/
/* 				{type: "text",name: "手机",verify:"tel", field: "mobile"},*/
/* 				{type: "radio",name: "手机认证码",block:true,field: "mobilecode",sOption:{0:"未认证",1: "已认证"}},*/
/* 				{type: "text",name: "身份证",field: "id_card",verify:"idCard"},*/
/* 				{type: "text",name: "积分",field: "score",verify:"pInt"},*/
/* 				{type: "text",name: "余额",field: "banlance",verify:"mzero"},*/
/* 				{type: "radio",name: "类型",block:true,field: "type",sOption:{0:'个人',1:'企业'}},*/
/* 				{type: "radio",name: "是否认证企业",block:true,field: "is_company",sOption:{0:'非',1:'是'}},*/
/* 				{type: "radio",name: "是否是服务商",block:true,field: "is_provider",sOption:{0:'非',1:'是'}},*/
/* 				{type: "upload",name: "上传头像",field: "avatar",},*/
/* 				],*/
/* 				selectKey:"uid",   //列字段id   例: id, product_id*/
/* */
/* 				verifyData:{*/
/* 					option: [*/
/* 						{verifyDate: "password"},*/
/* 				        {verifyDate: "tel"},*/
/* 						{verifyDate: "pInt"},*/
/* 						{verifyDate: "idCard"},*/
/* 						{verifyDate: "mzero"}*/
/* 					],*/
/* 					el: ".layui-form"*/
/* 				},  //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/api_user/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/api_user/update_or_add', //添加的接口*/
/* 				prevUrl:'{{base_url}}admin/user/user'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
