<?php

/* admin/user/addProvider.html */
class __TwigTemplate_7dffcbf3e5580fa1d0b49898c83733f8922a9cfc7a618a34448030dccf665e8a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/addProvider.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/user/addProvider.html", 9)->display($context);
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
\t\t\t\t\t{type: \"text\",name: \"公司名称\",type:\"select\",field: \"um_provider.company_id\",url:\"/admin/Api_company/grid\",colKey:\"id\",colName:\"company_name\"},
\t\t\t\t\t{type: \"text\",name: \"用户\",type:\"select\",field: \"um_provider.uid\",url:\"/admin/api_user/grid\",colKey:\"uid\",colName:\"username\"},
\t\t\t\t\t{type: \"time\",name: \"申请时间\",field: \"um_provider.apply_time\"},
\t\t\t\t\t{type: \"time\",name: \"生效时间\",field: \"um_provider.effect_time\"},
\t\t\t\t\t{type: \"select\",name: \"投资方式\",field: \"um_provider.invest_type\",sOption: {1: \"股权投资\",2: \"债权投资\",3: \"金融投资\",4: \"BT/BOT\",5: \"项目投资\",6: \"其他投资\"}},
\t\t\t\t\t{type: \"select\",name: \"资金类型\",field: \"um_provider.fund_type\",sOption: {1: \"个人资金\",2: \"企业资金\",3: \"天使投资\",4: \"VC投资\",5: \"PE投资\"}},
\t\t\t\t\t{type: \"select\",name: \"投资区域\",field: \"um_provider.invest_field\",sOption: {1: \"新兴行业\",2: \"文创\",3: \"高新产业\",4: \"大健康\",5: \"传统实业\",6: \"政府民生\",7: \"其他\"}},
\t\t\t\t\t{type: \"text\",name: \"投资区域\",field: \"um_provider.invest_area\"},
\t\t\t\t\t{type: \"select\",name: \"投资金额范围\",field: \"um_provider.invest_amount\",sOption: {1: \"1万-10万\",2: \"10-50万\",3: \"50-100万\",4: \"100-500万\"}},
\t\t\t\t\t{type: \"text\",name: \"投资机构介绍\",field: \"um_provider.content\"}
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
\t\t\t\tinfoUrl:\"/admin/api_provider/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/api_provider/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/user/provider'   //添加成功返回的页面
\t\t\t});
\t\t},
\t});
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/user/addProvider.html";
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
/* 					{type: "text",name: "公司名称",type:"select",field: "um_provider.company_id",url:"/admin/Api_company/grid",colKey:"id",colName:"company_name"},*/
/* 					{type: "text",name: "用户",type:"select",field: "um_provider.uid",url:"/admin/api_user/grid",colKey:"uid",colName:"username"},*/
/* 					{type: "time",name: "申请时间",field: "um_provider.apply_time"},*/
/* 					{type: "time",name: "生效时间",field: "um_provider.effect_time"},*/
/* 					{type: "select",name: "投资方式",field: "um_provider.invest_type",sOption: {1: "股权投资",2: "债权投资",3: "金融投资",4: "BT/BOT",5: "项目投资",6: "其他投资"}},*/
/* 					{type: "select",name: "资金类型",field: "um_provider.fund_type",sOption: {1: "个人资金",2: "企业资金",3: "天使投资",4: "VC投资",5: "PE投资"}},*/
/* 					{type: "select",name: "投资区域",field: "um_provider.invest_field",sOption: {1: "新兴行业",2: "文创",3: "高新产业",4: "大健康",5: "传统实业",6: "政府民生",7: "其他"}},*/
/* 					{type: "text",name: "投资区域",field: "um_provider.invest_area"},*/
/* 					{type: "select",name: "投资金额范围",field: "um_provider.invest_amount",sOption: {1: "1万-10万",2: "10-50万",3: "50-100万",4: "100-500万"}},*/
/* 					{type: "text",name: "投资机构介绍",field: "um_provider.content"}*/
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
/* 				infoUrl:"/admin/api_provider/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/api_provider/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/user/provider'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
