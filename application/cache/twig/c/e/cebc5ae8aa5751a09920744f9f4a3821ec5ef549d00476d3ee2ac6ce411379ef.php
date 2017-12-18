<?php

/* admin/currency/addNews.html */
class __TwigTemplate_168f0ef08175868a65850097560ec62e66a4ac186558b1a0722e70e8a2333490 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/addNews.html", 1)->display($context);
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
        $this->loadTemplate("admin/crumbs1.html", "admin/currency/addNews.html", 9)->display($context);
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
\t\t\t\t\t{type: \"text\",name: \"标题\",block:true,field: \"pm_news.title\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"副标题\",block:true,verify:\"required\", field: \"pm_news.ctitle\"},
\t\t\t\t\t{type: \"upload\",name: \"标题图片\",field: \"pm_news.titlepic\",verify:\"required\"},
\t\t\t\t\t{type: \"text\",name: \"关键字\",verify:\"\",field: \"pm_news.keywords\"},
\t\t\t\t\t{type: \"text\",name: \"阅读量\",verify:\"pInt\",field: \"pm_news.read_num\"},
\t\t\t\t\t{type: \"text\",name: \"点赞量\",verify:\"pInt\",field: \"lpm_news.laud_num\"},
\t\t\t\t\t{type: \"text\",name: \"分享量\",field: \"pm_news.share_num\",verify:\"\"},
\t\t\t\t\t
\t\t\t\t\t{type: \"text\",name: \"内容\",field: \"pm_news.content\",verify:\"required\"},
\t\t\t\t\t{type: \"select\",name: \"分类ID\",verify:\"\",field: \"pm_news.cate_id\",sOption: {1: \"公司新闻\",2: \"行业新闻\",3: \"商机动态\",4: \"投资百科\",5: \"融资百科\",6: \"资金百科\",7: \"担保百科\"}},
\t\t\t\t\t{type: \"select\",name: \"是否显示\",verify:\"required\",field: \"pm_news.is_show\",sOption: {0: \"不显示\",1: \"显示\"}},
\t\t\t\t\t{type: \"select\",name: \"是否推荐\",verify:\"required\",field: \"pm_news.is_recommend\",sOption: {0: \"不推荐\",1: \"推荐\"}},
\t\t\t\t\t{type: \"text\",name: \"排序\",field: \"pm_news.sort\"},
\t\t\t\t\t{type: \"select\",name: \"创建人ID\",verify:\"required\",field: \"pm_news.creator\",url:\"/admin/api_user/grid\",colKey:\"uid\",colName:\"username\"},
\t\t\t\t\t{type: \"text\",name: \"备注\",block:true,verify:\"\",field: \"pm_news.remark\"},
\t\t\t\t\t{type: \"text\",name: \"描述\",block:true,verify:\"required\", field: \"pm_news.description\"},
\t\t\t\t\t{type: \"time\",name: \"创建时间\",verify:\"required\",field: \"pm_news.create_at\"},
\t\t\t\t\t{type: \"time\",name: \"更新时间\",field: \"pm_news.update_at\"}
\t\t\t\t],
\t\t\t\tselectKey:\"\",   //列字段id   例: id, product_id
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
\t\t\t\tinfoUrl:\"/admin/pm/Api_news/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/pm//Api_news/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/currency/pm_news'   //添加成功返回的页面
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
        return "admin/currency/addNews.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 58,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
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
/* 					{type: "text",name: "标题",block:true,field: "pm_news.title",verify:""},*/
/* 					{type: "text",name: "副标题",block:true,verify:"required", field: "pm_news.ctitle"},*/
/* 					{type: "upload",name: "标题图片",field: "pm_news.titlepic",verify:"required"},*/
/* 					{type: "text",name: "关键字",verify:"",field: "pm_news.keywords"},*/
/* 					{type: "text",name: "阅读量",verify:"pInt",field: "pm_news.read_num"},*/
/* 					{type: "text",name: "点赞量",verify:"pInt",field: "lpm_news.laud_num"},*/
/* 					{type: "text",name: "分享量",field: "pm_news.share_num",verify:""},*/
/* 					*/
/* 					{type: "text",name: "内容",field: "pm_news.content",verify:"required"},*/
/* 					{type: "select",name: "分类ID",verify:"",field: "pm_news.cate_id",sOption: {1: "公司新闻",2: "行业新闻",3: "商机动态",4: "投资百科",5: "融资百科",6: "资金百科",7: "担保百科"}},*/
/* 					{type: "select",name: "是否显示",verify:"required",field: "pm_news.is_show",sOption: {0: "不显示",1: "显示"}},*/
/* 					{type: "select",name: "是否推荐",verify:"required",field: "pm_news.is_recommend",sOption: {0: "不推荐",1: "推荐"}},*/
/* 					{type: "text",name: "排序",field: "pm_news.sort"},*/
/* 					{type: "select",name: "创建人ID",verify:"required",field: "pm_news.creator",url:"/admin/api_user/grid",colKey:"uid",colName:"username"},*/
/* 					{type: "text",name: "备注",block:true,verify:"",field: "pm_news.remark"},*/
/* 					{type: "text",name: "描述",block:true,verify:"required", field: "pm_news.description"},*/
/* 					{type: "time",name: "创建时间",verify:"required",field: "pm_news.create_at"},*/
/* 					{type: "time",name: "更新时间",field: "pm_news.update_at"}*/
/* 				],*/
/* 				selectKey:"",   //列字段id   例: id, product_id*/
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
/* 				infoUrl:"/admin/pm/Api_news/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/pm//Api_news/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/currency/pm_news'   //添加成功返回的页面*/
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
