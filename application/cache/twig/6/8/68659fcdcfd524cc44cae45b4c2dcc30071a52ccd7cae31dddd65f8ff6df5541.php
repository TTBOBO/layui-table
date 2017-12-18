<?php

/* admin/auser/infoBanner.html */
class __TwigTemplate_6c574568a6b7f86fdee5df7b9789e1ed15d2b2ad57650ec526d7409d17177c58 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/infoBanner.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/auser/infoBanner.html", 3)->display($context);
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
\t\t\t\t\t\t{name: '广告ID',val: 'am_ads.id'},
\t\t\t\t\t\t{name: '广告名称',val: 'am_ads.name'},
\t\t\t\t\t\t{name: '广告类型',val: 'am_ads_type.type'},
\t\t\t\t\t\t{name: '广告图片',val: 'am_ads.img',type:'img'},
\t\t\t\t\t\t{name: '链接地址',val: 'am_ads.link',w:300},
\t\t\t\t\t\t{name: '广告描述',val: 'am_ads.description'},
\t\t\t\t\t\t{name: '开始时间',val: 'am_ads.begin_at',w:300},
\t\t\t\t\t\t{name: '结束时间',val: 'am_ads.end_at',w:300},
\t\t\t\t\t\t{name: '创建时间',val: 'am_ads.create_at',w:300},
\t\t\t\t\t\t{name: '修改时间',val: 'am_ads.update_at',w:300}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/am/Api_ads/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"am_ads.id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data
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
        return "admin/auser/infoBanner.html";
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
/* 						{name: '广告ID',val: 'am_ads.id'},*/
/* 						{name: '广告名称',val: 'am_ads.name'},*/
/* 						{name: '广告类型',val: 'am_ads_type.type'},*/
/* 						{name: '广告图片',val: 'am_ads.img',type:'img'},*/
/* 						{name: '链接地址',val: 'am_ads.link',w:300},*/
/* 						{name: '广告描述',val: 'am_ads.description'},*/
/* 						{name: '开始时间',val: 'am_ads.begin_at',w:300},*/
/* 						{name: '结束时间',val: 'am_ads.end_at',w:300},*/
/* 						{name: '创建时间',val: 'am_ads.create_at',w:300},*/
/* 						{name: '修改时间',val: 'am_ads.update_at',w:300}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/am/Api_ads/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "am_ads.id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data*/
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
