<?php

/* admin/currency/info_news.html */
class __TwigTemplate_9f36e18304c7566f976230c898a422a5a95e1af21d0daf8bb0d34b2aeffd9afd extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/info_news.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/currency/info_news.html", 3)->display($context);
        // line 4
        echo "\t<div class=\"layui-collapse\" lay-filter=\"test\">
\t<div class=\"layui-colla-item\">
\t\t<h2 class=\"layui-colla-title\">下拉查看详情</h2>
\t\t<div class=\"layui-colla-content\">
\t\t\t<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 100px;\">
\t\t\t\t
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initFrom();
\t\t},

\t\tinitFrom: function() {
\t\t\thm.load(function(option) {
\t\t\t\tvar public = option.public;
\t\t\t\tvar element = option.element;
\t\t\t\tpublic.showInfo({
\t\t\t\tcol: [
\t\t\t\t\t\t{name: '标题',val: 'title'},
\t\t\t\t\t\t{name: '副标题',val: 'ctitle'},
\t\t\t\t\t\t{name: '标题图片',val: 'titlepic'},
\t\t\t\t\t\t{name: '关键字',val: 'keywords',w:300},
\t\t\t\t\t\t{name: '阅读量',val: 'read_num',w:300},
\t\t\t\t\t\t{name: '点赞量',val: 'laud_num',w:300},
\t\t\t\t\t\t{name: '分享量',val: 'share_num',w:300},
\t\t\t\t\t\t{name: '描述',val: 'description',w:300},
\t\t\t\t\t\t{name: '内容',val: 'content',w:300},
\t\t\t\t\t\t{name: '分类ID',val: 'cate_id',w:300,select:true},
\t\t\t\t\t\t{name: '是否显示',val: 'is_show',w:300,select:true},
\t\t\t\t\t\t{name: '是否推荐',val: 'is_recommend',w:300,select:true},
\t\t\t\t\t\t{name: '排序',val: 'sort',w:300},
\t\t\t\t\t\t{name: '备注',val: 'remark',w:300},
\t\t\t\t\t\t{name: '创建人ID',val: 'creator',w:300},
\t\t\t\t\t\t{name: '创建时间',val: 'create_at',w:300},
\t\t\t\t\t\t{name: '更新时间',val: 'update_at',w:300},
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/pm/Api_news/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,statuArr: [{
\t\t\t\t\t\t\t\tname: \"cate_id\",
\t\t\t\t\t\t\t\tval: ['','公司新闻', '行业新闻', '商机动态', '投资百科', '融资百科', '资金百科', '担保百科']
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\tname: \"is_show\",
\t\t\t\t\t\t\t\tval: ['不显示', '显示']
\t\t\t\t\t\t\t},,{
\t\t\t\t\t\t\t\tname: \"is_recommend\",
\t\t\t\t\t\t\t\tval: ['不推荐', '推荐']
\t\t\t\t\t\t\t}]
\t\t\t\t\t\t});
\t\t\t\t\t} //展示详情   具体实现方法请查看public.js
\t\t\t\t})
\t\t\t\telement.on('collapse(test)', function(data) {
\t\t\t\t\tconsole.log('展开状态：' + data.show);
\t\t\t\t});
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
        return "admin/currency/info_news.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>.layui-form-label {width: 100px !important;}</style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* 	<div class="layui-collapse" lay-filter="test">*/
/* 	<div class="layui-colla-item">*/
/* 		<h2 class="layui-colla-title">下拉查看详情</h2>*/
/* 		<div class="layui-colla-content">*/
/* 			<form class="layui-form" action="" style="width: 700px; padding-bottom: 100px;">*/
/* 				*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom();*/
/* 		},*/
/* */
/* 		initFrom: function() {*/
/* 			hm.load(function(option) {*/
/* 				var public = option.public;*/
/* 				var element = option.element;*/
/* 				public.showInfo({*/
/* 				col: [*/
/* 						{name: '标题',val: 'title'},*/
/* 						{name: '副标题',val: 'ctitle'},*/
/* 						{name: '标题图片',val: 'titlepic'},*/
/* 						{name: '关键字',val: 'keywords',w:300},*/
/* 						{name: '阅读量',val: 'read_num',w:300},*/
/* 						{name: '点赞量',val: 'laud_num',w:300},*/
/* 						{name: '分享量',val: 'share_num',w:300},*/
/* 						{name: '描述',val: 'description',w:300},*/
/* 						{name: '内容',val: 'content',w:300},*/
/* 						{name: '分类ID',val: 'cate_id',w:300,select:true},*/
/* 						{name: '是否显示',val: 'is_show',w:300,select:true},*/
/* 						{name: '是否推荐',val: 'is_recommend',w:300,select:true},*/
/* 						{name: '排序',val: 'sort',w:300},*/
/* 						{name: '备注',val: 'remark',w:300},*/
/* 						{name: '创建人ID',val: 'creator',w:300},*/
/* 						{name: '创建时间',val: 'create_at',w:300},*/
/* 						{name: '更新时间',val: 'update_at',w:300},*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/pm/Api_news/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,statuArr: [{*/
/* 								name: "cate_id",*/
/* 								val: ['','公司新闻', '行业新闻', '商机动态', '投资百科', '融资百科', '资金百科', '担保百科']*/
/* 							},{*/
/* 								name: "is_show",*/
/* 								val: ['不显示', '显示']*/
/* 							},,{*/
/* 								name: "is_recommend",*/
/* 								val: ['不推荐', '推荐']*/
/* 							}]*/
/* 						});*/
/* 					} //展示详情   具体实现方法请查看public.js*/
/* 				})*/
/* 				element.on('collapse(test)', function(data) {*/
/* 					console.log('展开状态：' + data.show);*/
/* 				});*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
/* */
