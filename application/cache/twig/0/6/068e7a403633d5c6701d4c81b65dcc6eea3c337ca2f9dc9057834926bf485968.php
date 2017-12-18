<?php

/* admin/im/editStation.html */
class __TwigTemplate_d782504960b81c00522bf534b72933611509af02b90d25bfe067684317c99d24 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/editStation.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/im/editStation.html", 9)->display($context);
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
\t\t\t\t\t{type: \"text\",name: \"主键\",verify:\"tel\",field: \"im_station.id\"},
\t\t\t\t\t{type: \"text\",name: \"名字\",field: \"im_station.name\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"计费类型\",field: \"im_station.type\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"工位图标\",verify:\"tel\",field: \"im_station.icon\",verify:\"required\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",field: \"im_station.create_at\",verify:\"required\"},
\t\t\t\t\t{type: \"time\",name: \"更新时间\",field: \"im_station.update_at\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"创建人\",field: \"im_station.creator_id\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"更新人\",field: \"im_station.updator_id\",verify:\"required\"}
\t\t\t\t],
\t\t\t\tselectKey:\"im_station.id\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/im/Api_station/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/im/Api_station/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/station'   //添加成功返回的页面
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
        return "admin/im/editStation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 46,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 					{type: "text",name: "主键",verify:"tel",field: "im_station.id"},*/
/* 					{type: "text",name: "名字",field: "im_station.name",verify:"required"},*/
/* 					{type: "text",name: "计费类型",field: "im_station.type",verify:"required"},*/
/* 					{type: "text",name: "工位图标",verify:"tel",field: "im_station.icon",verify:"required"},*/
/* 					{type: "time",name: "创建时间",field: "im_station.create_at",verify:"required"},*/
/* 					{type: "time",name: "更新时间",field: "im_station.update_at",verify:"required"},*/
/* 					{type: "text",name: "创建人",field: "im_station.creator_id",verify:"required"},*/
/* 					{type: "text",name: "更新人",field: "im_station.updator_id",verify:"required"}*/
/* 				],*/
/* 				selectKey:"im_station.id",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/im/Api_station/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/im/Api_station/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/auser/station'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
