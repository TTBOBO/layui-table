<?php

/* admin/currency/infoRegion1.html */
class __TwigTemplate_4895a2786b32829220aefe10c32df3ee85dc973eb85a9794dc3d30821e8ad517 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/infoRegion1.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/currency/infoRegion1.html", 3)->display($context);
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
\t\t\t\t\t\t{name: '编号',val: 'region_id'},
\t\t\t\t\t\t{name: '省市区（县）代号',val: 'region_code'},
\t\t\t\t\t\t{name: '省市区（县）名称',val: 'region_name'},
\t\t\t\t\t\t{name: '父级id',val: 'parent_id'},
\t\t\t\t\t\t{name: '省市区(县)级别',val: 'region_level'},
\t\t\t\t\t\t{name: '排序',val: 'region_order'},
\t\t\t\t\t\t{name: '英文名称',val: 'region_name_en'},
\t\t\t\t\t\t{name: '英文简写',val: 'region_shortname_en'}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/pm/Api_pm_region1/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"\"
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tstatuArr: [{
\t\t\t\t\t\t\t\tname: \"cate_id\",
\t\t\t\t\t\t\t\tval: ['公司新闻', '行业新闻','商机动态', '投资百科','融资百科', '资金百科','担保百科']
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\tname: \"is_show\",
\t\t\t\t\t\t\t\tval: ['不显示', '显示']
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\tname: \"is_recommend\",
\t\t\t\t\t\t\t\tval: ['不推荐', '推荐']
\t\t\t\t\t\t\t}]
\t\t\t\t\t\t});
\t\t\t\t\t\t} //展示详情   具体实现方法请查看public.js
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
        return "admin/currency/infoRegion1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 44,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
/* 						{name: '编号',val: 'region_id'},*/
/* 						{name: '省市区（县）代号',val: 'region_code'},*/
/* 						{name: '省市区（县）名称',val: 'region_name'},*/
/* 						{name: '父级id',val: 'parent_id'},*/
/* 						{name: '省市区(县)级别',val: 'region_level'},*/
/* 						{name: '排序',val: 'region_order'},*/
/* 						{name: '英文名称',val: 'region_name_en'},*/
/* 						{name: '英文简写',val: 'region_shortname_en'}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '{{base_url}}/admin/pm/Api_pm_region1/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : ""*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,*/
/* 							statuArr: [{*/
/* 								name: "cate_id",*/
/* 								val: ['公司新闻', '行业新闻','商机动态', '投资百科','融资百科', '资金百科','担保百科']*/
/* 							},{*/
/* 								name: "is_show",*/
/* 								val: ['不显示', '显示']*/
/* 							},{*/
/* 								name: "is_recommend",*/
/* 								val: ['不推荐', '推荐']*/
/* 							}]*/
/* 						});*/
/* 						} //展示详情   具体实现方法请查看public.js*/
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
