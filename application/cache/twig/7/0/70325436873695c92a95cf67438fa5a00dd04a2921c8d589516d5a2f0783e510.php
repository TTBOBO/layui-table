<?php

/* admin/user/infoCompanyService.html */
class __TwigTemplate_f6e87a80509845db03a12f07155e9549fc1805e8e12385bf99092b20c85a907a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/infoCompanyService.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/user/infoCompanyService.html", 3)->display($context);
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
\t\t\t\tcol: [{name: '服务名称',val: 'um_company_service.name'},
\t\t\t\t\t\t{name: '大类ID',val: 'um_company_service.cate_id',select:true},
\t\t\t\t\t\t{name: '行业ID',val: 'um_company_service.industry_id'},
\t\t\t\t\t\t{name: '服务类型',val: 'um_company_service.type',select:true},
\t\t\t\t\t\t{name: '类型细分',val: 'um_company_service.child_type',select:true},
\t\t\t\t\t\t{name: '卖点标签',val: 'um_company_service.sell_label'},
\t\t\t\t\t\t{name: '服务承诺标签',val: 'um_company_service.promise_label'},
\t\t\t\t\t\t{name: '访问量',val: 'um_company_service.uv'},
\t\t\t\t\t\t{name: '价格',val: 'um_company_service.price'},
\t\t\t\t\t\t{name: '收藏量',val: 'um_company_service.collect_num'},
\t\t\t\t\t\t{name: '产品介绍',val: 'um_company_service.introduce'},
\t\t\t\t\t\t{name: '创建时间',val: 'um_company_service.create_at'},
\t\t\t\t\t\t{name: '公司ID',val: 'um_company.company_name'}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_company_service/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"um_company.id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tstatuArr: [{
\t\t\t\t\t\t\t\tname: \"um_company_service.cate_id\",
\t\t\t\t\t\t\t\tval: ['专业企服', '技孵宝', 'i培训', 'i传媒', '场地企服']
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\tname: \"um_company_service.type\",
\t\t\t\t\t\t\t\tval: ['未知', '专业培训', 'IT服务', '视觉设计', '政策解读', '法律服务']
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\tname: \"um_company_service.child_type\",
\t\t\t\t\t\t\t\tval: ['未知', '企业培训', '创业培训', '融资培训']
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
        return "admin/user/infoCompanyService.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 48,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
/* 				col: [{name: '服务名称',val: 'um_company_service.name'},*/
/* 						{name: '大类ID',val: 'um_company_service.cate_id',select:true},*/
/* 						{name: '行业ID',val: 'um_company_service.industry_id'},*/
/* 						{name: '服务类型',val: 'um_company_service.type',select:true},*/
/* 						{name: '类型细分',val: 'um_company_service.child_type',select:true},*/
/* 						{name: '卖点标签',val: 'um_company_service.sell_label'},*/
/* 						{name: '服务承诺标签',val: 'um_company_service.promise_label'},*/
/* 						{name: '访问量',val: 'um_company_service.uv'},*/
/* 						{name: '价格',val: 'um_company_service.price'},*/
/* 						{name: '收藏量',val: 'um_company_service.collect_num'},*/
/* 						{name: '产品介绍',val: 'um_company_service.introduce'},*/
/* 						{name: '创建时间',val: 'um_company_service.create_at'},*/
/* 						{name: '公司ID',val: 'um_company.company_name'}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '{{base_url}}admin/api_company_service/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "um_company.id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,*/
/* 							statuArr: [{*/
/* 								name: "um_company_service.cate_id",*/
/* 								val: ['专业企服', '技孵宝', 'i培训', 'i传媒', '场地企服']*/
/* 							}, {*/
/* 								name: "um_company_service.type",*/
/* 								val: ['未知', '专业培训', 'IT服务', '视觉设计', '政策解读', '法律服务']*/
/* 							},{*/
/* 								name: "um_company_service.child_type",*/
/* 								val: ['未知', '企业培训', '创业培训', '融资培训']*/
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
