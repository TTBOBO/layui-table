<?php

/* admin/user/edit_active_tex.html */
class __TwigTemplate_1b33bf5288e138ec5e14805f70d2a963fe49ff412e132c908d3be1a859fd000a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/edit_active_tex.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/user/edit_active_tex.html", 9)->display($context);
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
\t\t\t\tlist: [{type: \"text\",name: \"id\",verify:\"\",display:true,field: \"id\"},
\t\t\t\t\t{type: \"text\",name: \"用户名称\",field: \"um_program.uid\"},
\t\t\t\t\t{type: \"select\",name: \"公司名称\",field: \"um_program.company_id\",sOption: {0: \"个人项目\",1: \"公司项目\"}},
\t\t\t\t\t{type: \"text\",name: \"项目名称\",field: \"um_program.name\"},
\t\t\t\t\t{type: \"text\",name: \"项目主图\",field: \"um_program.thumb\"},
\t\t\t\t\t{type:\"text\",name:'项目图片',field:'um_program.pics'},
\t\t\t\t\t{type:'text',name:'项目简介',field:'um_program.descrption'},
\t\t\t\t\t{type:'text',name:'项目内容',field:'um_program.content'},
\t\t\t\t\t{type:'time',name:'创建时间',field:'um_program.create_at'},
\t\t\t\t\t{type:'text',name:'城市ID',field:'um_program.city_ids'},
\t\t\t\t\t{type:'text',name:'项目金额',field:'um_program.need_amount'},
\t\t\t\t\t{type:'text',name:'所在股份',field:'um_program.take_shares'},
\t\t\t\t\t{type:'select',name:'融资阶段',field:'um_program.programe_cate_id',sOption: {1: \"种子轮\",2:\"天使轮\",3:\"P-A\",4:\"A轮\",5:\"A+轮\",6:\"B+轮\",7:\"C轮\",8:\"D轮\",9:\"E轮\"}},
\t\t\t\t\t{type:'text',name:'平台行业名称',field:'um_program.platform_name'},
\t\t\t\t\t{type:'select',name:'平台状态',field:'um_program.platform_status',sOption: {0: \"运营中\",1: \"已停运\"}},
\t\t\t\t\t{type:'select',name:'推荐项目',field:'um_program.recommend',sOption: {0: \"否\",1: \"推荐\"}},
\t\t\t\t\t{type:'text',name:'行业ID',field:'um_program.industry_id'},
\t\t\t\t\t{type:'text',name:'状态',field:'um_program.status'}
\t\t\t\t],
\t\t\t\tselectKey:\"um_program.id\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/Api_program/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/Api_program/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/user/active_tex'   //添加成功返回的页面
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
        return "admin/user/edit_active_tex.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 57,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 				list: [{type: "text",name: "id",verify:"",display:true,field: "id"},*/
/* 					{type: "text",name: "用户名称",field: "um_program.uid"},*/
/* 					{type: "select",name: "公司名称",field: "um_program.company_id",sOption: {0: "个人项目",1: "公司项目"}},*/
/* 					{type: "text",name: "项目名称",field: "um_program.name"},*/
/* 					{type: "text",name: "项目主图",field: "um_program.thumb"},*/
/* 					{type:"text",name:'项目图片',field:'um_program.pics'},*/
/* 					{type:'text',name:'项目简介',field:'um_program.descrption'},*/
/* 					{type:'text',name:'项目内容',field:'um_program.content'},*/
/* 					{type:'time',name:'创建时间',field:'um_program.create_at'},*/
/* 					{type:'text',name:'城市ID',field:'um_program.city_ids'},*/
/* 					{type:'text',name:'项目金额',field:'um_program.need_amount'},*/
/* 					{type:'text',name:'所在股份',field:'um_program.take_shares'},*/
/* 					{type:'select',name:'融资阶段',field:'um_program.programe_cate_id',sOption: {1: "种子轮",2:"天使轮",3:"P-A",4:"A轮",5:"A+轮",6:"B+轮",7:"C轮",8:"D轮",9:"E轮"}},*/
/* 					{type:'text',name:'平台行业名称',field:'um_program.platform_name'},*/
/* 					{type:'select',name:'平台状态',field:'um_program.platform_status',sOption: {0: "运营中",1: "已停运"}},*/
/* 					{type:'select',name:'推荐项目',field:'um_program.recommend',sOption: {0: "否",1: "推荐"}},*/
/* 					{type:'text',name:'行业ID',field:'um_program.industry_id'},*/
/* 					{type:'text',name:'状态',field:'um_program.status'}*/
/* 				],*/
/* 				selectKey:"um_program.id",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/Api_program/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/Api_program/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/user/active_tex'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
/* */
