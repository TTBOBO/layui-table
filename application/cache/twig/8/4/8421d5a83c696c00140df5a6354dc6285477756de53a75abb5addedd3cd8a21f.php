<?php

/* admin/currency/infoFrame.html */
class __TwigTemplate_28d1edac340e6b73193fff0b93cd8c0ccd82111fd0ada8c6c938d14cff452fa7 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/infoFrame.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/currency/infoFrame.html", 3)->display($context);
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
\t\t\t\t\t\t{name: '判断字段',val: 'name'},
\t\t\t\t\t\t{name: '标题名称',val: 'title'},
\t\t\t\t\t\t{name: '类型',val: 'type',select:'true'},
\t\t\t\t\t\t{name: '网址url',val: 'url'},
\t\t\t\t\t\t{name: '图片地址',val: 'picture',type:'img'},
\t\t\t\t\t\t{name: '是否显示',val: 'is_show',select:'true'},
\t\t\t\t\t\t{name: '排序',val: 'sort'},
\t\t\t\t\t\t{name: '备注',val: 'remark'},
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/pm/api_frame/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tstatuArr: [{
\t\t\t\t\t\t\t\tname: \"type\",
\t\t\t\t\t\t\t\tval: ['其他', '顶部导航','关于我们','商务合作','隐私策略','帮助中心']
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\tname: \"is_show\",
\t\t\t\t\t\t\t\tval: ['否', '是']
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
        return "admin/currency/infoFrame.html";
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
/* 						{name: '判断字段',val: 'name'},*/
/* 						{name: '标题名称',val: 'title'},*/
/* 						{name: '类型',val: 'type',select:'true'},*/
/* 						{name: '网址url',val: 'url'},*/
/* 						{name: '图片地址',val: 'picture',type:'img'},*/
/* 						{name: '是否显示',val: 'is_show',select:'true'},*/
/* 						{name: '排序',val: 'sort'},*/
/* 						{name: '备注',val: 'remark'},*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/pm/api_frame/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,*/
/* 							statuArr: [{*/
/* 								name: "type",*/
/* 								val: ['其他', '顶部导航','关于我们','商务合作','隐私策略','帮助中心']*/
/* 							},{*/
/* 								name: "is_show",*/
/* 								val: ['否', '是']*/
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
/* */
/* */
/* */
/* */
