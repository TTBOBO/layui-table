<?php

/* admin/im/editRoadshow.html */
class __TwigTemplate_116c913c89d62207578a6301ec7c0acf5982d88c64c3482f9d2d2bbd6ee04037 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/editRoadshow.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/im/editRoadshow.html", 9)->display($context);
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
\t\t\t\t\t{type: \"text\",name: \"活动id\", display:true,field: \"id\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"活动标题\",field: \"title\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"活动主题\",verify:\"required\", field: \"thumb\"},
\t\t\t\t\t{type: \"select\",name: \"是否热门\",field: \"ishot\",verify:\"required\",sOption: {0: \"是\",1: \"否\"}},
\t\t\t\t\t{type: \"text\",name: \"描述\",verify:\"\",field: \"description\"},
\t\t\t\t\t{type: \"time\",name: \"活动创建时间\",verify:\"required\",field: \"create_at\"},
\t\t\t\t\t{type: \"text\",name: \"活动地址\",verify:\"required\",field: \"addr\"},
\t\t\t\t\t{type: \"text\",name: \"主办方\",field: \"owner\"},
\t\t\t\t\t{type: \"time\",name: \"活动开始时间\",field: \"start_time\",verify:\"required\"},
\t\t\t\t\t{type: \"time\",name: \"活动结束时间\",verify:\"required\",field: \"end_time\"},
\t\t\t\t\t{type: \"text\",name: \"特色信息\",verify:\"required\",field: \"special_info\"},
\t\t\t\t\t{type: \"text\",name: \"推荐理由\",verify:\"required\",field: \"recommend_reason\"},
\t\t\t\t\t{type: \"text\",name: \"主体内容\",field: \"content\"}
\t\t\t\t],
\t\t\t\tselectKey:\"id\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/im/api_roadshow/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/im/api_roadshow/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/ioffice/roadshow'   //添加成功返回的页面
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
        return "admin/im/editRoadshow.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 53,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 					{type: "text",name: "活动id", display:true,field: "id",verify:""},*/
/* 					{type: "text",name: "活动标题",field: "title",verify:"required"},*/
/* 					{type: "text",name: "活动主题",verify:"required", field: "thumb"},*/
/* 					{type: "select",name: "是否热门",field: "ishot",verify:"required",sOption: {0: "是",1: "否"}},*/
/* 					{type: "text",name: "描述",verify:"",field: "description"},*/
/* 					{type: "time",name: "活动创建时间",verify:"required",field: "create_at"},*/
/* 					{type: "text",name: "活动地址",verify:"required",field: "addr"},*/
/* 					{type: "text",name: "主办方",field: "owner"},*/
/* 					{type: "time",name: "活动开始时间",field: "start_time",verify:"required"},*/
/* 					{type: "time",name: "活动结束时间",verify:"required",field: "end_time"},*/
/* 					{type: "text",name: "特色信息",verify:"required",field: "special_info"},*/
/* 					{type: "text",name: "推荐理由",verify:"required",field: "recommend_reason"},*/
/* 					{type: "text",name: "主体内容",field: "content"}*/
/* 				],*/
/* 				selectKey:"id",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/im/api_roadshow/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/im/api_roadshow/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/ioffice/roadshow'   //添加成功返回的页面*/
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
